<?php
namespace VipParcel\Request\Account\Balance;

use VipParcel\Abstract\VPAbstractRequest;


class VPRequestAccountBalanceCurrent extends VPAbstractRequest
{
    public function info_method()
    {
        return self::METHOD_GET;
    }

    public function info_url()
    {
        return '/account/balance/getCurrent';
    }

    public function info_params()
    {
        return array(
            'authToken'
        );
    }

}