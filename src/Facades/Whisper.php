<?php

namespace KeiKey\WhisperUtils\Facades;

use Illuminate\Support\Facades\Facade;
use KeiKey\WhisperUtils\Services\BaseRestResponse;
use KeiKey\WhisperUtils\Services\Whisper as ConcreteWhisper;

/**
 * @method static BaseRestResponse createSpeech(string $wsdl, array $options) more than likely this should not be used here
 * @method static BaseRestResponse createTranscription(string $wsdl, array $options)
 * @method static BaseRestResponse createTranslation(string $wsdl, array $options)
 */
class Whisper extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return ConcreteWhisper::class;
    }
}