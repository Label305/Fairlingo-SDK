<?php

namespace Fairlingo_SDK\Data\OrderDrafts;

use Fairlingo_SDK\Data\Languages\Language;

class OrderDraft
{
    /**
     * @var int $id
     */
    private $id;

    /**
     * @var string $title
     */
    private $title;

    /**
     * @var string $notes
     */
    private $notes;

    /**
     * @var int $minimumRank
     */
    private $minimumRank;

    /**
     * @var int $wordCount
     */
    private $wordCount;

    /**
     * @var Offer $offer
     */
    private $offer;

    /**
     * @var Language $sourceLanguage
     */
    private $sourceLanguage;

    /**
     * @var Language $targetLanguage
     */
    private $targetLanguage;

    /**
     * @var array $paragraphs
     */
    private $paragraphs;

    /**
     * @var int $shopId
     */
    private $shopId;

    /**
     * @var int $sourceLanguageId
     */
    private $sourceLanguageId;

    /**
     * @var int $targetLanguageId
     */
    private $targetLanguageId;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param string $notes
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    }

    /**
     * @return int
     */
    public function getMinimumRank()
    {
        return $this->minimumRank;
    }

    /**
     * @param int $minimumRank
     */
    public function setMinimumRank($minimumRank)
    {
        $this->minimumRank = $minimumRank;
    }

    /**
     * @return int
     */
    public function getWordCount()
    {
        return $this->wordCount;
    }

    /**
     * @param int $wordCount
     */
    public function setWordCount($wordCount)
    {
        $this->wordCount = $wordCount;
    }

    /**
     * @return Offer
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * @param Offer $offer
     */
    public function setOffer($offer)
    {
        $this->offer = $offer;
    }

    /**
     * @return Language
     */
    public function getSourceLanguage()
    {
        return $this->sourceLanguage;
    }

    /**
     * @param Language $sourceLanguage
     */
    public function setSourceLanguage($sourceLanguage)
    {
        $this->sourceLanguage = $sourceLanguage;
    }

    /**
     * @return Language
     */
    public function getTargetLanguage()
    {
        return $this->targetLanguage;
    }

    /**
     * @param Language $targetLanguage
     */
    public function setTargetLanguage($targetLanguage)
    {
        $this->targetLanguage = $targetLanguage;
    }

    /**
     * @return array
     */
    public function getParagraphs()
    {
        return $this->paragraphs;
    }

    /**
     * @param array $paragraphs
     */
    public function setParagraphs($paragraphs)
    {
        $this->paragraphs = $paragraphs;
    }

    /**
     * @param $shopId
     */
    public function setShopId($shopId)
    {
        //TODO this is seoshop specific
        $this->shopId = $shopId;
    }

    /**
     * @return int
     */
    public function getShopId()
    {
        return $this->shopId;
    }

    public function setSourceLanguageId($source_language_id)
    {
        $this->sourceLanguageId = $source_language_id;
    }

    /**
     * @param int $targetLanguageId
     */
    public function setTargetLanguageId($targetLanguageId)
    {
        $this->targetLanguageId = $targetLanguageId;
    }

    /**
     * @return int
     */
    public function getSourceLanguageId()
    {
        return $this->sourceLanguageId;
    }

    /**
     * @return int
     */
    public function getTargetLanguageId()
    {
        return $this->targetLanguageId;
    }

}