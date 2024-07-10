<?php

namespace KeiKey\WhisperUtils\Facades;

use Illuminate\Support\Facades\Facade;
use KeiKey\WhisperUtils\Services\BaseRestResponse;
use KeiKey\WhisperUtils\Services\CreateTranscriptionPayload;
use KeiKey\WhisperUtils\Services\CreateTranslationPayload;
use KeiKey\WhisperUtils\Services\Whisper as ConcreteWhisper;

/**
 * @method static BaseRestResponse createTranscription(CreateTranscriptionPayload $payload)
 * @method static BaseRestResponse createTranslation(CreateTranslationPayload $payload)
 */
class Whisper extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return ConcreteWhisper::class;
    }
}