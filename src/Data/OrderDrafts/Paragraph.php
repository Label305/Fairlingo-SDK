<?php

namespace Fairlingo_SDK\Data\OrderDrafts;

class Paragraph
{

    /**
     * @var int $id
     */
    private $id;

    /**
     * @var string $content
     */
    private $content;

    /**
     * @var int $wordCount
     */
    private $wordCount;

    /**
     * @var string
     */
    private $translation;

    /**
     * @var string
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
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
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
     * @return string
     */
    public function getTranslation()
    {
        return $this->translation;
    }

    /**
     * @param string $translation
     */
    public function setTranslation($translation)
    {
        $this->translation = $translation;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }


}