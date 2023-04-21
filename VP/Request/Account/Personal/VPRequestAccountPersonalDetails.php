<?php
namespace VipParcel\Request\Account\Personal;

use VipParcel\Abstract\VPAbstractRequest;

class VPRequestAccountPersonalDetails extends VPAbstractRequest
{
    public function info_method()
    {
        return self::METHOD_GET;
    }

    public function info_url()
    {
        return '/account/personalInfo/details';
    }

    public function info_params()
    {
        return array(
            'authToken'
        );
    }

}