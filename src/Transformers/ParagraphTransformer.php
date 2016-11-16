<?php

namespace Fairlingo_SDK\Transformers;

use Fairlingo_SDK\Data\OrderDrafts\Paragraph;

class ParagraphTransformer
{

    /**
     * @param $fairlingoParagraphs
     * @return array
     */
    public static function toParagraphs($fairlingoParagraphs)
    {
        $paragraphs = [];

        foreach ($fairlingoParagraphs as $fairlingoParagraph) {

            $paragraph = new Paragraph();
            $paragraph->setId($fairlingoParagraph->id);
            $paragraph->setContent($fairlingoParagraph->content);
            $paragraph->setWordCount($fairlingoParagraph->word_count);
            if (isset($fairlingoParagraph->translation)) {
                $paragraph->setTranslation($fairlingoParagraph->translation);
            }
            if (isset($fairlingoParagraph->state)) {
                $paragraph->setState($fairlingoParagraph->state);
            }
            if (isset($fairlingoParagraph->msg_id)) {
                $paragraph->setMsgId($fairlingoParagraph->msg_id);
            }
            $paragraphs[] = $paragraph;
        }

        return $paragraphs;
    }
}