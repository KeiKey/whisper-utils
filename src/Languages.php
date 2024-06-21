<?php

namespace KeiKey\WhisperUtils;

enum Languages: string {
    case AFAR = 'aa';
    case ABKHAZIAN = 'ab';
    case AVESTAN = 'ae';
    case AFRIKAANS = 'af';
    case AKAN = 'ak';
    case AMHARIC = 'am';
    case ARAGONESE = 'an';
    case ARABIC = 'ar';
    case ASSAMESE = 'as';
    case AVARIC = 'av';
    case AYMARA = 'ay';
    case AZERBAIJANI = 'az';
    case BASHKIR = 'ba';
    case BELARUSIAN = 'be';
    case BULGARIAN = 'bg';
    case BIHARI = 'bh';
    case BISLAMA = 'bi';
    case BAMBARA = 'bm';
    case BENGALI = 'bn';
    case TIBETAN = 'bo';
    case BRETON = 'br';
    case BOSNIAN = 'bs';
    case CATALAN = 'ca';
    case CHECHEN = 'ce';
    case CHAMORRO = 'ch';
    case CORSICAN = 'co';
    case CREE = 'cr';
    case CZECH = 'cs';
    case CHURCH_SLAVIC = 'cu';
    case CHUVASH = 'cv';
    case WELSH = 'cy';
    case DANISH = 'da';
    case GERMAN = 'de';
    case MALDIVIAN = 'dv';
    case DZONGKHA = 'dz';
    case EWE = 'ee';
    case GREEK = 'el';
    case ENGLISH = 'en';
    case ESPERANTO = 'eo';
    case SPANISH = 'es';
    case ESTONIAN = 'et';
    case BASQUE = 'eu';
    case PERSIAN = 'fa';
    case FULAH = 'ff';
    case FINNISH = 'fi';
    case FIJIAN = 'fj';
    case FAROESE = 'fo';
    case FRENCH = 'fr';
    case WESTERN_FRISIAN = 'fy';
    case IRISH = 'ga';
    case GAELIC = 'gd';
    case GALICIAN = 'gl';
    case GUARANI = 'gn';
    case GUJARATI = 'gu';
    case MANX = 'gv';
    case HAUSA = 'ha';
    case HEBREW = 'he';
    case HINDI = 'hi';
    case HIRI_MOTU = 'ho';
    case CROATIAN = 'hr';
    case HAITIAN = 'ht';
    case HUNGARIAN = 'hu';
    case ARMENIAN = 'hy';
    case HERERO = 'hz';
    case INTERLINGUA = 'ia';
    case INDONESIAN = 'id';
    case INTERLINGUE = 'ie';
    case IGBO = 'ig';
    case SICHUAN = 'ii';
    case INUPIAQ = 'ik';
    case IDO = 'io';
    case ICELANDIC = 'is';
    case ITALIAN = 'it';
    case INUKTITUT = 'iu';
    case JAPANESE = 'ja';
    case JAVANESE = 'jv';
    case GEORGIAN = 'ka';
    case KONGO = 'kg';
    case KIKUYU = 'ki';
    case KUANYAMA = 'kj';
    case KAZAKH = 'kk';
    case KALAALLISUT = 'kl';
    case CENTRAL_KHMER = 'km';
    case KANNADA = 'kn';
    case KOREAN = 'ko';
    case KANURI = 'kr';
    case KASHMIRI = 'ks';
    case KURDISH = 'ku';
    case KOMI = 'kv';
    case CORNISH = 'kw';
    case KIRGHIZ = 'ky';
    case LATIN = 'la';
    case LUXEMBOURGISH = 'lb';
    case GANDA = 'lg';
    case LIMBURGAN_YI = 'li';
    case LINGALA = 'ln';
    case LAO = 'lo';
    case LITHUANIAN = 'lt';
    case LUBA_KATANGA = 'lu';
    case LATVIAN = 'lv';
    case MALAGASY = 'mg';
    case MARSHALLESE = 'mh';
    case MAORI = 'mi';
    case MACEDONIAN = 'mk';
    case MALAYALAM = 'ml';
    case MONGOLIAN = 'mn';
    case MARATHI = 'mr';
    case MALAY = 'ms';
    case MALTESE = 'mt';
    case BURMESE = 'my';
    case NAURU = 'na';
    case NORWEGIAN = 'nb';
    case NORTH_NDEBELE = 'nd';
    case NEPALI = 'ne';
    case NDONGA = 'ng';
    case DUTCH = 'nl';
    case SOUTH_NDEBELE = 'nr';
    case NAVAJO = 'nv';
    case CHICHEWA = 'ny';
    case OCCITAN = 'oc';
    case OJIBWA = 'oj';
    case OROMO = 'om';
    case ORIYA = 'or';
    case OSSETIC = 'os';
    case PANJABI = 'pa';
    case PALI = 'pi';
    case POLISH = 'pl';
    case PUSHTO = 'ps';
    case PORTUGUESE = 'pt';
    case QUECHUA = 'qu';
    case ROMANSH = 'rm';
    case RUNDI = 'rn';
    case ROMANIAN = 'ro';
    case RUSSIAN = 'ru';
    case KINYARWANDA = 'rw';
    case SANSKRIT = 'sa';
    case SARDINIAN = 'sc';
    case SINDHI = 'sd';
    case NORTHERN = 'se';
    case SANGO = 'sg';
    case SINHALA = 'si';
    case SLOVAK = 'sk';
    case SLOVENIAN = 'sl';
    case SAMOAN = 'sm';
    case SHONA = 'sn';
    case SOMALI = 'so';
    case ALBANIAN = 'sq';
    case SERBIAN = 'sr';
    case SWATI = 'ss';
    case SOTHO_SOUTHERN = 'st';
    case SUNDANESE = 'su';
    case SWEDISH = 'sv';
    case SWAHILI = 'sw';
    case TAMIL = 'ta';
    case TELUGU = 'te';
    case TAJIK = 'tg';
    case THAI = 'th';
    case TIGRINYA = 'ti';
    case TURKMEN = 'tk';
    case TAGALOG = 'tl';
    case TSWANA = 'tn';
    case TONGA = 'to';
    case TURKISH = 'tr';
    case TSONGA = 'ts';
    case TATAR = 'tt';
    case TWI = 'tw';
    case TAHITIAN = 'ty';
    case UIGHUR = 'ug';
    case UKRAINIAN = 'uk';
    case URDU = 'ur';
    case UZBEK = 'uz';
    case VENDA = 've';
    case VIETNAMESE = 'vi';
    case VOLAPUK = 'vo';
    case WALLOON = 'wa';
    case WOLOF = 'wo';
    case XHOSA = 'xh';
    case YIDDISH = 'yi';
    case YORUBA = 'yo';
    case ZHUANG = 'za';
    case CHINESE = 'zh';
    case ZULU = 'zu';
}
