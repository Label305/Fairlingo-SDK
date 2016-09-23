<?php

namespace Fairlingo_SDK\Transformers;

use Fairlingo_SDK\Data\OrderDrafts\Offer;
use Fairlingo_SDK\Data\OrderDrafts\OrderDraft;
use stdClass;

class OrderDraftTransformer
{

    /**
     * @param \stdClass $fairlingoOrderDraft
     * @return OrderDraft
     */
    public static function toOrderDraft($fairlingoOrderDraft)
    {
        $orderDraft = new OrderDraft();
        $orderDraft->setId($fairlingoOrderDraft->id);
        $orderDraft->setTitle($fairlingoOrderDraft->title);
        $orderDraft->setNotes($fairlingoOrderDraft->notes);
        $orderDraft->setMinimumRank($fairlingoOrderDraft->minimum_rank);
        $orderDraft->setWordCount($fairlingoOrderDraft->word_count);

        $orderDraft->setOffer(self::getOffer($fairlingoOrderDraft));
        $orderDraft->setSourceLanguage(LanguageTransformer::toLanguage($fairlingoOrderDraft->source_language));
        $orderDraft->setTargetLanguage(LanguageTransformer::toLanguage($fairlingoOrderDraft->target_language));
        $orderDraft->setParagraphs(ParagraphTransformer::toParagraphs($fairlingoOrderDraft->paragraphs));

        return $orderDraft;
    }

    /**
     * @param stdClass $fairlingoOrderDraft
     * @return Offer
     */
    private static function getOffer($fairlingoOrderDraft)
    {
        $offer = new Offer();

        $offer->setEta($fairlingoOrderDraft->offer->eta);
        $offer->setSubtotal($fairlingoOrderDraft->offer->subtotal);
        $offer->setVatRate($fairlingoOrderDraft->offer->vat_rate);
        $offer->setVat($fairlingoOrderDraft->offer->vat);
        $offer->setTotal($fairlingoOrderDraft->offer->total);
        $offer->setBalance($fairlingoOrderDraft->offer->balance);
        $offer->setEnoughBalance($fairlingoOrderDraft->offer->enough_balance);

        return $offer;
    }

}