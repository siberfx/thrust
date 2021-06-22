<?php


namespace BadChoice\Thrust\Helpers;


use Illuminate\Support\Str;

class Translation
{
    public static function useTranslationPrefix($translationMessage, $noTranslationResult = null) {
        $translationPrefix = config('thrust.translationsPrefix');
        if ( __($translationPrefix.$translationMessage) && !Str::contains(__($translationPrefix.$translationMessage), $translationPrefix) ) {
            return __($translationPrefix.$translationMessage);
        }
        return $noTranslationResult;
    }
}