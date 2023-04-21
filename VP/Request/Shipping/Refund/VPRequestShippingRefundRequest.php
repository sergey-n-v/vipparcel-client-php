<?php
namespace VipParcel\Request\Shipping\Refund;

use VipParcel\Abstract\VPAbstractRequest;

class VPRequestShippingRefundRequest extends VPAbstractRequest
{
    public function info_method()
    {
        return self::METHOD_POST;
    }

    public function info_url()
    {
        return '/shipping/refund/request';
    }

    public function info_params()
    {
        return array(
            'authToken',
            'refundLabels',
            'reason',
        );
    }

}
