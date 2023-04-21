<?php
namespace VipParcel\Request\Shipping\Scan;

use VipParcel\Abstract\VP_Abstract_Request;

class VP_Request_Shipping_Scan_List extends VP_Abstract_Request
{
    public function info_method()
    {
        return self::METHOD_GET;
    }

    public function info_url()
    {
        return '/shipping/scanForm/getList';
    }

    public function info_params()
    {
        return array(
            'authToken'
        );
    }

}