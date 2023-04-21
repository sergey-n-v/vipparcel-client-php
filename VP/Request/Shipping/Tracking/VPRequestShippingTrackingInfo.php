<?php
namespace VipParcel\Request\Shipping\Tracking;

use VipParcel\Abstract\VPAbstractRequest;

class VPRequestShippingTrackingInfo extends VPAbstractRequest
{
    public function info_method()
    {
        return self::METHOD_GET;
    }

    public function info_url()
    {
        return '/shipping/tracking/getInfo';
    }

    public function info_params()
    {
        return array(
            'authToken',
            'trackNumber',
        );
    }

}