<?php

namespace Fairlingo_SDK\Requests;

use Fairlingo_SDK\Data\OrderDrafts\OrderDraft;
use Fairlingo_SDK\Remote\Request;

class SubmitOrderDraftRequest extends Request
{
    /**
     * @var OrderDraft
     */
    private $orderDraft;


    /**
     * SubmitOrderDraftRequest constructor.
     * @param OrderDraft $orderDraft
     */
    public function __construct(OrderDraft $orderDraft)
    {
        $this->orderDraft = $orderDraft;
    }

    /**
     * @return array
     */
    public function getPostParams()
    {
        return [
            "title" => $this->orderDraft->getTitle(),
            "notes" => $this->orderDraft->getNotes(),
            "minimum_rank" => $this->orderDraft->getMinimumRank(),
            "source_language_id" => $this->orderDraft->getSourceLanguageId(),
            "target_language_id" => $this->orderDraft->getTargetLanguageId(),
            "paragraphs" => $this->orderDraft->getParagraphs(),
        ];
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return '/order-drafts';
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return 'POST';
    }
}