<?php
namespace VipParcel\Request\Shipping\Label;

use VipParcel\Abstract\VPAbstractRequest;

class VPRequestShippingLabelImages extends VPAbstractRequest
{
    public function info_method()
    {
        return self::METHOD_GET;
    }

    public function info_url()
    {
        return '/shipping/label/getImages';
    }

    public function info_params()
    {
        return array(
            'authToken'
        );
    }

}