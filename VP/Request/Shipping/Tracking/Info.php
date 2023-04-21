<?php
namespace VipParcel\Request\Shipping\Tracking;

use VipParcel\Abstract\VP_Abstract_Request;

class VP_Request_Shipping_Tracking_Info extends VP_Abstract_Request
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