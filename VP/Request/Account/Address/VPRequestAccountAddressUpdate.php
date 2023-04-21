<?php
namespace VipParcel\Request\Account\Address;

use VipParcel\Abstract\VPAbstractRequest;

class VPRequestAccountAddressUpdate extends VPAbstractRequest
{
    public function info_method()
    {
        return self::METHOD_PUT;
    }

    public function info_url()
    {
        return '/account/address/update';
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