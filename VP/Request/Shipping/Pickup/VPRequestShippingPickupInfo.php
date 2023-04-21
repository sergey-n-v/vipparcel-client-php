<?php
namespace VipParcel\Request\Shipping\Pickup;

use VipParcel\Abstract\VPAbstractRequest;

class VPRequestShippingPickupInfo extends VPAbstractRequest
{
    public function info_method()
    {
        return self::METHOD_GET;
    }

    public function info_url()
    {
        return '/shipping/pickup/getInfo';
    }

    public function info_params()
    {
        return array(
            'authToken'
        );
    }

}