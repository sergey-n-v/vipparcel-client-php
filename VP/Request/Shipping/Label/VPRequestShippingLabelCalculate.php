<?php
namespace VipParcel\Request\Shipping\Label;

use VipParcel\Abstract\VPAbstractRequest;
use VipParcel\VPException;

class VPRequestShippingLabelCalculate extends VPAbstractRequest
{

    public function is_international()
    {
        if (empty($this->_params['mailClass'])) {
            throw new VPException('Required parameter not passed: mailClass');
        }
        return (strpos($this->_params['mailClass'], 'International') !== FALSE);
    }

    public function info_method()
    {
        return self::METHOD_POST;
    }

    public function info_url()
    {
        return '/shipping/label/calculate';
    }

    public function get_params()
    {
        // @TODO deprecated
        $this->_params['labelType'] = ($this->is_international() ? 'international' : 'domestic');
        return parent::get_params();
    }


    public function info_params()
    {
        $international = array(
            'authToken',
            'mailClass',
            'weightOz',
            'insuredValue',
            'senderPostalCode',
            'countryId',
            'labelType',
            'deliveryConfirmation',
            'insuredValue'
        );

        $domestic = array(
            'authToken',
            'mailClass',
            'weightOz',
            'insuredValue',
            'service',
            'senderPostalCode',
            'recipientPostalCode',
            'dimensionalWeight', // @TODO array
            'labelType',
            'deliveryConfirmation',
            'insuredValue'
        );

        return ($this->is_international() ? $international : $domestic);

    }

}