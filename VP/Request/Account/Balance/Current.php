<?php
namespace VipParcel\Request\Account\Balance;

use VipParcel\Abstract\VP_Abstract_Request;

class VP_Request_Account_Balance_Current extends VP_Abstract_Request
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