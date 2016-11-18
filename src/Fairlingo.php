<?php

namespace Fairlingo_SDK;

use Fairlingo_SDK\Data\OrderDrafts\OrderDraft;
use Fairlingo_SDK\Data\Orders\Order;
use Fairlingo_SDK\Remote\Connection;
use Fairlingo_SDK\Remote\Exceptions\NoConnectionException;
use Fairlingo_SDK\Requests\GetLanguagesRequest;
use Fairlingo_SDK\Requests\GetOrderDraftRequest;
use Fairlingo_SDK\Requests\GetOrderRequest;
use Fairlingo_SDK\Requests\SubmitOrderDraftRequest;
use Fairlingo_SDK\Requests\SubmitOrderRequest;
use Fairlingo_SDK\ResponseHandlers\GetLanguagesResponseHandler;
use Fairlingo_SDK\ResponseHandlers\GetOrderDraftResponseHandler;
use Fairlingo_SDK\ResponseHandlers\GetOrderResponseHandler;
use Fairlingo_SDK\ResponseHandlers\SubmitOrderDraftResponseHandler;
use Fairlingo_SDK\ResponseHandlers\SubmitOrderResponseHandler;

class FairlingoApi
{
    /**
     * @var Connection
     */
    private $connection;

    /**
     * @param Connection $connection
     */
    public function setConnection(Connection $connection)
    {
        $this->connection = $connection;
    }

    /**
     * @return Connection
     * @throws NoConnectionException
     */
    public function getConnection()
    {
        if ($this->connection === null) {
            throw new NoConnectionException();
        }
        return $this->connection;
    }

    /**
     * @return array
     */
    public function getLanguages()
    {
        $request = new GetLanguagesRequest();
        $rawResponse = $this->getConnection()->doRequest($request);
        $responseHandler = new GetLanguagesResponseHandler($rawResponse);
        return $responseHandler->getHandledResponse();
    }

    /**
     * @param int $id
     * @return OrderDraft
     */
    public function getOrderDraft($id)
    {
        $request = new GetOrderDraftRequest($id);
        $rawResponse = $this->getConnection()->doRequest($request);
        $responseHandler = new GetOrderDraftResponseHandler($rawResponse);
        return $responseHandler->getHandledResponse();
    }

    /**
     * @param int $orderDraftId
     * @return Order
     */
    public function createOrder($orderDraftId)
    {
        $request = new SubmitOrderRequest($orderDraftId);
        $rawResponse = $this->getConnection()->doRequest($request);
        $responseHandler = new SubmitOrderResponseHandler($rawResponse);
        return $responseHandler->getHandledResponse();
    }

    /**
     * @param OrderDraft $orderDraft
     * @return OrderDraft
     */
    public function createOrderDraft(OrderDraft $orderDraft)
    {
        $request = new SubmitOrderDraftRequest($orderDraft);
        $rawResponse = $this->getConnection()->doRequest($request);
        $responseHandler = new SubmitOrderDraftResponseHandler($rawResponse);
        return $responseHandler->getHandledResponse();
    }

    /**
     * @param int $orderId
     * @return Order|null
     */
    public function getOrder($orderId)
    {
        $request = new GetOrderRequest($orderId);
        $rawResponse = $this->getConnection()->doRequest($request);
        $responseHandler = new GetOrderResponseHandler($rawResponse);
        return $responseHandler->getHandledResponse();
    }
}