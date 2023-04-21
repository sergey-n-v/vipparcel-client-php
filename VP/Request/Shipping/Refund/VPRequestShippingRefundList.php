<?php
namespace VipParcel\Request\Shipping\Refund;

use VipParcel\Abstract\VPAbstractRequest;

class VPRequestShippingRefundList extends VPAbstractRequest
{
    public function info_method()
    {
        return self::METHOD_GET;
    }

    public function info_url()
    {
        return '/shipping/refund/getList';
    }

    public function info_params()
    {
        return array(
            'authToken',
            'limit',
            'offset',
            'orderBy',
        );
    }

}