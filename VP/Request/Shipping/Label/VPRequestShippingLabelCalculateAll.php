<?php
namespace VipParcel\Request\Shipping\Label;

use VipParcel\Abstract\VPAbstractRequest;
use VipParcel\VPException;

/**
 * Class VPRequestShippingLabelCalculateAll
 * @package VipParcel\Request\Shipping\Label
 *
 * Calculating Postage and Fees for all available mailclasses
 * POST : /shipping/label/calculateAll
 */
class VPRequestShippingLabelCalculateAll extends VPAbstractRequest
{

    public function is_international()
    {
        $mailClass = $this->_params['mailClass']??null;
//        if (!$mailClass) {
//            throw new VPException('Required parameter not passed: mailClass');
//        }
        $labelType =$this->_params['labelType']??null;
        if ($labelType) return  $labelType == self::LABEL_TYPE_INTERNATIONAL;

        return (str_contains($mailClass, 'International'));
    }

    public function info_method()
    {
        return self::METHOD_POST;
    }

    public function info_url()
    {
        return '/shipping/label/calculateAll';
    }

    /**
     * @throws VPException
     */
    public function get_params()
    {
        // @TODO deprecated
        $this->_params['labelType'] = ($this->is_international() ? 'international' : 'domestic');
        return parent::get_params();
    }


    public function info_params(): array
    {
        $international = array(
            'authToken',
            'mailClass',
            'weightOz',
            'insuredValue',
            'senderPostalCode',
            'deliveryConfirmation',
            'recipientPostalCode',
            'dimensionalWeight', // @TODO array
            'countryId',
            'labelType',
            'length',
            'height',
            'width'
        );

        $domestic = array(
            'authToken',
            'mailClass',
            'weightOz',
            'insuredValue',
            'deliveryConfirmation',
            'senderPostalCode',
            'recipientPostalCode',
            'dimensionalWeight', // @TODO array
            'labelType',
            'length',
            'height',
            'width'
        );

        return ($this->is_international() ? $international : $domestic);

    }

}