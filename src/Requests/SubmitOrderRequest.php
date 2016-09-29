<?php

namespace Fairlingo_SDK\Requests;

use Fairlingo_SDK\Remote\Request;

class SubmitOrderRequest extends Request
{
    /**
     * @var int
     */
    private $orderDraftId;

    /**
     * SubmitOrderRequest constructor.
     * @param int $orderDraftId
     */
    public function __construct(
        int $orderDraftId
    ) {
        $this->orderDraftId = $orderDraftId;
    }

    public function getPostParams()
    {
        return [
            "order_draft_id" => $this->orderDraftId,
        ];
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return '/orders';
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return 'POST';
    }

}