<?php

namespace KeiKey\WhisperUtils\Enums;

class TimestampGranularity extends Enum
{
    public const WORD    = 'word';
    public const SEGMENT = 'segment';

    public static function default(): string
    {
        return self::SEGMENT;
    }
}
