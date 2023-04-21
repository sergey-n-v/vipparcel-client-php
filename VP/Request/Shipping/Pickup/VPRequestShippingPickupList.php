<?php
namespace VipParcel\Request\Shipping\Pickup;

use VipParcel\Abstract\VPAbstractRequest;

class VPRequestShippingPickupList extends VPAbstractRequest
{
    public function info_method()
    {
        return self::METHOD_GET;
    }

    public function info_url()
    {
        return '/shipping/pickup/getList';
    }

    public function info_params()
    {
        return array(
            'authToken',
            'limit',
            'offset',
            'orderBy',
        );
    }

}