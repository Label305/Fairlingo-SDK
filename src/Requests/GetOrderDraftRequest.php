<?php

namespace Fairlingo_SDK\Requests;

use Fairlingo_SDK\Remote\Request;

class GetOrderDraftRequest extends Request
{
    /**
     * @var int
     */
    private $id;

    /**
     * @param string $apiKey
     * @param int $id
     */
    public function __construct($apiKey, $id)
    {
        $this->addHeader('Authorization: Bearer ' . $apiKey);
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return "/order-drafts/" . $this->id;
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return 'GET';
    }

}