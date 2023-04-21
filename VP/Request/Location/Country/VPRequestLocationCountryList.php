<?php
namespace VipParcel\Request\Location\Country;

use VipParcel\Abstract\VPAbstractRequest;

class VPRequestLocationCountryList extends VPAbstractRequest
{
    public function info_method()
    {
        return self::METHOD_GET;
    }

    public function info_url()
    {
        return '/location/country/getList';
    }

    public function info_params()
    {
        return array(
            'authToken'
        );
    }

}