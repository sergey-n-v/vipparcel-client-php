<?php
namespace VipParcel\Request\Shipping\Scan;

use VipParcel\Abstract\VPAbstractRequest;

class VPRequestShippingScanCreate extends VPAbstractRequest
{
    public function info_method()
    {
        return self::METHOD_POST;
    }

    public function info_url()
    {
        return '/shipping/scanForm/create';
    }

    public function info_params()
    {
        return array(
            'authToken',
            'labels',
            'address', // @TODO check array
        );
    }

}