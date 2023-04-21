<?php
namespace VipParcel\Request\Account\Address;

use VipParcel\Abstract\VP_Abstract_Request;

class VP_Request_Account_Address_Create extends VP_Abstract_Request
{
    public function info_method()
    {
        return self::METHOD_POST;
    }

    public function info_url()
    {
        return '/account/address/create';
    }

    public function info_params()
    {
        return array(
            'authToken',
            'addressType',
            'firstName',
            'lastName',
            'state',
            'city',
            'postalCode',
            'address',
            'phone',
            'locationType',
            'countryId',
        );
    }

}