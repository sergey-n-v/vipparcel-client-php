<?php
namespace VipParcel\Request\Shipping\Scan;

use VipParcel\Abstract\VPAbstractRequest;

class VPRequestShippingScanList extends VPAbstractRequest
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