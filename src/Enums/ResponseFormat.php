<?php

namespace KeiKey\WhisperUtils\Enums;

class ResponseFormat extends Enum
{
    public const JSON         = 'json';
    public const TEXT         = 'text';
    public const SRT          = 'srt';
    public const VERBOSE_JSON = 'verbose_json';
    public const VTT          = 'vtt';

    public static function default(): string
    {
        return self::JSON;
    }
}
