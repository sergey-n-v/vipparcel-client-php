<?php
namespace VipParcel\Request\Account\Personal;

use VipParcel\Abstract\VPAbstractRequest;

class VPRequestAccountPersonalUpdate extends VPAbstractRequest
{
    public function info_method()
    {
        return self::METHOD_PUT;
    }

    public function info_url()
    {
        return '/account/personalInfo/update';
    }

    public function info_params()
    {
        return array(
            'authToken',
            'firstName',
            'lastName',
            'state',
            'city',
            'postalCode',
            'streetAddress1',
            'streetAddress2',
            'driverLicence',
        );
    }

}