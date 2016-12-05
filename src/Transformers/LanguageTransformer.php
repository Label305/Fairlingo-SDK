<?php

namespace Fairlingo_SDK\Transformers;

use Fairlingo_SDK\Data\Languages\Language;
use stdClass;

class LanguageTransformer
{

    /**
     * @param stdClass[] $fairlingoLanguages
     * @return array
     */
    public static function toLanguages(array $fairlingoLanguages = [])
    {
        $languages = [];

        foreach ($fairlingoLanguages as $fairlingoLanguage) {
            $languages[] = self::toLanguage($fairlingoLanguage);
        }

        return $languages;
    }

    /**
     * @param $fairlingoLanguage
     * @return Language
     */
    public static function toLanguage($fairlingoLanguage)
    {
        $language = new Language();

        $language->setId($fairlingoLanguage->id);
        $language->setName($fairlingoLanguage->name);
        if (property_exists($fairlingoLanguage, 'code')) {
            $language->setCode($fairlingoLanguage->code);
        }

        return $language;
    }

}