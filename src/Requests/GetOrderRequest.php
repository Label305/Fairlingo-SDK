<?php

namespace Fairlingo_SDK\Requests;

use Fairlingo_SDK\Remote\Request;

class GetOrderRequest extends Request
{

    /** @var int $orderId */
    private $orderId;

    /**
     * GetOrderRequest constructor.
     * @param int $orderId
     */
    public function __construct($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return '/orders/' . $this->orderId;
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return 'GET';
    }

}