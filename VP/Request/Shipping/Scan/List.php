<?php

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