<?php

namespace Fairlingo_SDK\Data\Orders;

class Order
{
    /**
     * @var int $id
     */
    private $id;

    /**
     * @var int $shopId
     */
    private $shopId;

    /**
     * @var int $orderDraftId
     */
    private $orderDraftId;

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
     * @var $paragraphs
     */
    private $paragraphs;

    /**
     * @var $targetLanguage
     */
    private $targetLanguage;

    /**
     * @var $sourceLanguage
     */
    private $sourceLanguage;

    /**
     * @var $activeTranslator
     */
    private $activeTranslator;

    /**
     * @var $deadline
     */
    private $deadline;

    /**
     * @var $translatedWordsCount
     */
    private $translatedWordsCount;

    /**
     * @var $wordCount
     */
    private $wordCount;

    /**
     * @var $state
     */
    private $state;

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
     * @return int
     */
    public function getShopId()
    {
        return $this->shopId;
    }

    /**
     * @param int $shopId
     */
    public function setShopId($shopId)
    {
        $this->shopId = $shopId;
    }

    /**
     * @param $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param $notes
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    }

    /**
     * @param $minimumRank
     */
    public function setMinimumRank($minimumRank)
    {
        $this->minimumRank = $minimumRank;
    }

    public function setWordCount($count)
    {
        $this->wordCount = $count;
    }

    public function setTranslatedWordsCount($count)
    {
        $this->translatedWordsCount = $count;
    }

    public function setDeadline($date)
    {
        $this->deadline = $date;
    }

    public function setActiveTranslator($activeTranslator)
    {
        $this->activeTranslator = $activeTranslator;
    }

    public function setSourceLanguage($language)
    {
        $this->sourceLanguage = $language;
    }

    public function setTargetLanguage($language)
    {
        $this->targetLanguage = $language;
    }

    public function setParagraphs($paragraphs)
    {
        $this->paragraphs = $paragraphs;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @return int
     */
    public function getMinimumRank()
    {
        return $this->minimumRank;
    }

    /**
     * @return mixed
     */
    public function getParagraphs()
    {
        return $this->paragraphs;
    }

    /**
     * @return mixed
     */
    public function getTargetLanguage()
    {
        return $this->targetLanguage;
    }

    /**
     * @return mixed
     */
    public function getSourceLanguage()
    {
        return $this->sourceLanguage;
    }

    /**
     * @return mixed
     */
    public function getActiveTranslator()
    {
        return $this->activeTranslator;
    }

    /**
     * @return mixed
     */
    public function getDeadline()
    {
        return $this->deadline;
    }

    /**
     * @return mixed
     */
    public function getTranslatedWordsCount()
    {
        return $this->translatedWordsCount;
    }

    /**
     * @return mixed
     */
    public function getWordCount()
    {
        return $this->wordCount;
    }

    /**
     * @return int
     */
    public function getOrderDraftId()
    {
        return $this->orderDraftId;
    }

    /**
     * @param int $orderDraftId
     */
    public function setOrderDraftId($orderDraftId)
    {
        $this->orderDraftId = $orderDraftId;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

}