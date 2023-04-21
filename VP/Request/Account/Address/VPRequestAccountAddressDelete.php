<?php
namespace VipParcel\Request\Account\Address;

use VipParcel\Abstract\VPAbstractRequest;


class VPRequestAccountAddressDelete extends VPAbstractRequest
{
    public function info_method()
    {
        return self::METHOD_DELETE;
    }

    public function info_url()
    {
        return '/account/address/delete';
    }

    public function info_params()
    {
        return array(
            'authToken'
        );
    }

}