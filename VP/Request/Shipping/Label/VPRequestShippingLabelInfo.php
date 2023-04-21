<?php
namespace VipParcel\Request\Shipping\Label;

use VipParcel\Abstract\VPAbstractRequest;

class VPRequestShippingLabelInfo extends VPAbstractRequest
{
    public function info_method()
    {
        return self::METHOD_GET;
    }

    public function info_url()
    {
        return '/shipping/label/getInfo';
    }

    public function info_params()
    {
        return array(
            'authToken'
        );
    }

}