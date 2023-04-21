<?php
namespace VipParcel\Request\Shipping\Pickup;

use VipParcel\Abstract\VPAbstractRequest;

class VPRequestShippingPickupRequest extends VPAbstractRequest
{
    public function info_method()
    {
        return self::METHOD_POST;
    }

    public function info_url()
    {
        return '/shipping/pickup/request';
    }

    public function info_params()
    {
        return array(
            'authToken',
            'address', // @TODO array
            'packages',
            'packageLocation',
            'specialInstructions',
        );
    }

}