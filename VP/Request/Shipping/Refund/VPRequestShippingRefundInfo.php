<?php
namespace VipParcel\Request\Shipping\Refund;

use VipParcel\Abstract\VPAbstractRequest;

class VPRequestShippingRefundInfo extends VPAbstractRequest
{
    public function info_method()
    {
        return self::METHOD_GET;
    }

    public function info_url()
    {
        return '/shipping/refund/getInfo';
    }

    public function info_params()
    {
        return array(
            'authToken'
        );
    }

}