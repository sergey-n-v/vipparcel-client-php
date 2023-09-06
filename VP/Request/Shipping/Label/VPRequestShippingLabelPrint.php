<?php
namespace VipParcel\Request\Shipping\Label;

use VipParcel\Abstract\VPAbstractRequest;
use VipParcel\VPException;


class VPRequestShippingLabelPrint extends VPAbstractRequest
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
        return '/shipping/label/print';
    }

    public function get_params()
    {
        // @TODO deprecated
        $this->_params['labelType'] = ($this->is_international() ? 'international' : 'domestic');
        return parent::get_params();
    }


    public function info_params()
    {
        $baseField = [
            'authToken',
            'mailClass',
            'weightOz',
            'sender', // @TODO array
            'recipient', // @TODO array
            'description',
            'insuredValue',
            'labelType',
            'shipDate',
            'rubberStamp1',
            'rubberStamp2',
            'rubberStamp3',
            'imageFormat',
            'imageResolution',
            'validationAddress',
            'reference',
            'customsItem'
        ];
        $international = [
            'customsInfo',
//            'customsItem'
        ];

        $domestic = [
            'deliveryConfirmation',
            'dimensionalWeight']
        ;

        return array_merge($baseField,($this->is_international() ? $international : $domestic));

    }

}