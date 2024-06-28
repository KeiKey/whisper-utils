<?php

namespace KeiKey\WhisperUtils\Services;

use Illuminate\Support\Facades\Config;

/**
 * Class Whisper.
 *
 * Class being used to interact with the Whisper endpoints on OpenAi.
 */
class Whisper
{
    /**
     * Whisper constructor.
     *
     * @param BaseRestRequest $baseRequest
     */
    public function __construct(public BaseRestRequest $baseRequest)
    {
        $this->baseRequest
            ->setBaseUrl(Config::get('whisper.open_api_base_url'))
            ->setBearerToken(Config::get('whisper.api_key'))
            ->setApiVersion(Config::get('whisper.version'));
    }

    /**
     * Transcribes audio into the input language.
     * Reference to the endpoint documentation:
     * https://platform.openai.com/docs/api-reference/audio/createTranscription
     *
     * @param CreateTranscriptionPayload $payload
     * @return BaseRestResponse
     */
    public function createTranscription(CreateTranscriptionPayload $payload): BaseRestResponse
    {
        return $this->baseRequest->post('/audio/transcriptions', $payload);
    }

    /**
     * Translates audio into English.
     * Reference to the endpoint documentation:
     * https://platform.openai.com/docs/api-reference/audio/createTranslation
     *
     * @param CreateTranslationPayload $payload
     * @return BaseRestResponse
     */
    public function createTranslation(CreateTranslationPayload $payload): BaseRestResponse
    {
        return $this->baseRequest->post('/audio/translations', $payload);
    }
}