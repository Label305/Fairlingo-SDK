<?php

namespace Fairlingo_SDK\Transformers;

use DateTime;
use Fairlingo_SDK\Data\Orders\Order;
use Fairlingo_SDK\Data\Orders\Translator;
use stdClass;

class OrderTransformer
{

    /**
     * @param stdClass $fairlingoOrder
     * @return Order
     */
    public static function toOrder($fairlingoOrder)
    {
        $order = new Order();
        $order->setId($fairlingoOrder->id);
        $order->setTitle($fairlingoOrder->title);
        $order->setNotes($fairlingoOrder->notes);
        $order->setMinimumRank($fairlingoOrder->minimum_rank);
        $order->setWordCount($fairlingoOrder->word_count);
        $order->setState($fairlingoOrder->state);
        $order->setTranslatedWordsCount($fairlingoOrder->translated_words);
        $order->setDeadline(new DateTime($fairlingoOrder->deadline));
        $order->setActiveTranslator(self::getActiveTranslator($fairlingoOrder->translated_words));
        $order->setSourceLanguage(LanguageTransformer::toLanguage($fairlingoOrder->source_language));
        $order->setTargetLanguage(LanguageTransformer::toLanguage($fairlingoOrder->target_language));
        $order->setParagraphs(ParagraphTransformer::toParagraphs($fairlingoOrder->paragraphs));

        return $order;
    }

    /**
     * @param stdClass $fairlingoTranslator
     * @return Translator|null
     */
    private static function getActiveTranslator($fairlingoTranslator)
    {
        if ($fairlingoTranslator == null) {
            return null;
        }
        $translator = new Translator();
        $translator->setId($fairlingoTranslator->id);
        $translator->setFirstName($fairlingoTranslator->first_name);
        $translator->setLastName($fairlingoTranslator->last_name);
        $translator->setSkype($fairlingoTranslator->skype);

        return $translator;
    }

    /**
     * @param stdClass[] $fairlingoOrders
     * @return array
     */
    public static function toOrders($fairlingoOrders)
    {
        $orders = [];
        foreach ($fairlingoOrders as $fairlingoOrder) {
            $orders[] = self::toOrder($fairlingoOrder);
        }

        return $orders;
    }


}