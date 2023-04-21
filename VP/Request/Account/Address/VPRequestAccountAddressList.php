<?php
namespace VipParcel\Request\Account\Address;

use VipParcel\Abstract\VPAbstractRequest;


class VPRequestAccountAddressList extends VPAbstractRequest
{
    public function info_method()
    {
        return self::METHOD_GET;
    }

    public function info_url()
    {
        return '/account/address/getList';
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