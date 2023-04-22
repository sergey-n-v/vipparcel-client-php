VIPparcel APIs Client Library for PHP
====================

## Requirements ##
* [PHP 7.2 or higher](http://www.php.net/)
* [PHP cURL extension] (http://php.net/manual/en/book.curl.php)
* [PHP JSON extension](http://php.net/manual/en/book.json.php)
* [Composer] (https://github.com/composer/composer)

## Developer Documentation ##
https://vipparcel.com/docs/api/

## Dependence ##
* [Guzzle HTTP client] (https://github.com/guzzle/guzzle )

## Installation ##
Run the Composer command

```bash
composer require "vipparcel/client" 
```

After installing, you need to require Composer's autoloader:

```php
require 'vendor/autoload.php';
```

## Examples ##
=======
```php
use VipParcel\VPClient;
use VipParcel\Request\Account\Balance\VPRequestAccountBalanceHistory;

$client = new VPClient();
$client->auth_token('KEY');
$client->is_test(TRUE); // production or test request (default: production)
        
$request = new VPRequestAccountBalanceHistory();
$request->set_params(array('limit' => 10, 'orderBy' => array('created' => 'ASC')));

$client->request($request); // set request object

$result = $client->execute(); // send request (return object VP_Response)
print_r($result->has_errors()); // boolean
print_r($result->get_errors()); // boolean false || array
print_r($result->as_object()); // result as stdClass object
print_r($result->as_array()); // result as array
```

```php
use VipParcel\VPClient;
use VipParcel\Request\Shipping\Label\VPRequestShippingLabelInfo;

$client = new VPClient();
$client->auth_token('KEY');
$client->request(new VPRequestShippingLabelInfo(144241)); // with item id
$result = $client->execute();
```

## Request Objects ##

Account > Address
* [POST] VPRequestAccountAddressCreate
* [GET] VPRequestAccountAddressList
* [GET] VPRequestAccountAddressInfo
* [PUT] VPRequestAccountAddressUpdate
* [DELETE] VPRequestAccountAddressDelete

Account > Balance
* [GET] VPRequestAccountBalanceCurrent
* [GET] VPRequestAccountBalanceHistory

Account > Personal Info
* [GET] VPRequestAccountPersonalDetails
* [PUT] VPRequestAccountPersonalUpdate

Shipping > Label
* [GET] VPRequestShippingLabelInfo
* [GET] VPRequestShippingLabelList
* [GET] VPRequestShippingLabelImages
* [POST] VPRequestShippingLabelCalculate
* [POST] VPRequestShippingLabelPrint

Shipping > Pickup
* [GET] VPRequestShippingPickupList
* [GET] VPRequestShippingPickupInfo
* [POST] VPRequestShippingPickupRequest

Shipping > Refund
* [GET] VPRequestShippingRefundInfo
* [GET] VPRequestShippingRefundList
* [GET] VPRequestShippingRefundLabels
* [POST] VPRequestShippingRefundRequest

Shipping > Scan Form
* [GET] VPRequestShippingScanInfo
* [GET] VPRequestShippingScanList
* [GET] VPRequestShippingScanLabels
* [POST] VPRequestShippingScanCreate

Shipping > Tracking
* [GET] VPRequestShippingTrackingInfo

Location > Country
* [GET] VPRequestLocationCountryList

Location > State
* [GET] VPRequestLocationStateList