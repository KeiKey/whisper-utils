<?php

namespace KeiKey\WhisperUtils\Enums;

class Languages extends Enum
{
    public const AFRIKAANS = 'af';
    public const ARABIC = 'ar';
    public const ARMENIAN = 'hy';
    public const AZERBAIJANI = 'az';
    public const BELARUSIAN = 'be';
    public const BOSNIAN = 'bs';
    public const BULGARIAN = 'bg';
    public const CATALAN = 'ca';
    public const CHINESE = 'zh';
    public const CROATIAN = 'hr';
    public const CZECH = 'cs';
    public const DANISH = 'da';
    public const DUTCH = 'nl';
    public const ENGLISH = 'en';
    public const FINNISH = 'fi';
    public const FRENCH = 'fr';
    public const GALICIAN = 'gl';
    public const GERMAN = 'de';
    public const GREEK = 'el';
    public const HEBREW = 'he';
    public const HINDI = 'hi';
    public const HUNGARIAN = 'hu';
    public const ICELANDIC = 'is';
    public const INDONESIAN = 'id';
    public const ITALIAN = 'it';
    public const JAPANESE = 'ja';
    public const KANNADA = 'kn';
    public const KAZAKH = 'kk';
    public const KOREAN = 'ko';
    public const LATVIAN = 'lv';
    public const LITHUANIAN = 'lt';
    public const MACEDONIAN = 'mk';
    public const MALAY = 'ms';
    public const MARATHI = 'mr';
    public const MAORI = 'mi';
    public const NEPALI = 'ne';
    public const NORWEGIAN = 'nb';
    public const PERSIAN = 'fa';
    public const POLISH = 'pl';
    public const PORTUGUESE = 'pt';
    public const ROMANIAN = 'ro';
    public const RUSSIAN = 'ru';
    public const SERBIAN = 'sr';
    public const SLOVAK = 'sk';
    public const SLOVENIAN = 'sl';
    public const SPANISH = 'es';
    public const SWEDISH = 'sv';
    public const SWAHILI = 'sw';
    public const TAMIL = 'ta';
    public const TAGALOG = 'tl';
    public const THAI = 'th';
    public const TURKISH = 'tr';
    public const UKRAINIAN = 'uk';
    public const URDU = 'ur';
    public const VIETNAMESE = 'vi';
    public const WELSH = 'cy';

    public static function default(): string
    {
        return self::ENGLISH;
    }
}
