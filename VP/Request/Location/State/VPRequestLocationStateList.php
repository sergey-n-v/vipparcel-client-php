<?php
namespace VipParcel\Request\Location\State;

use VipParcel\Abstract\VPAbstractRequest;

class VPRequestLocationStateList extends VPAbstractRequest
{
    public function info_method()
    {
        return self::METHOD_GET;
    }

    public function info_url()
    {
        return '/location/state/getList';
    }

    public function info_params()
    {
        return array(
            'authToken'
        );
    }

}