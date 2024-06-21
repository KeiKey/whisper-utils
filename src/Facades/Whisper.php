<?php

namespace KeiKey\WhisperUtils\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static BaseSoapResponse createSpeech(string $wsdl, array $options)
 * @method static BaseSoapResponse createTranscription(string $wsdl, array $options)
 * @method static BaseSoapResponse createTranslation(string $wsdl, array $options)
 */
class Whisper extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \KeiKey\WhisperUtils\Whisper::class;
    }
}