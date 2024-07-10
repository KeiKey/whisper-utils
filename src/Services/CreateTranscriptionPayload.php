<?php

namespace KeiKey\WhisperUtils\Services;

use KeiKey\WhisperUtils\Enums\Languages;
use KeiKey\WhisperUtils\Enums\ResponseFormat;
use KeiKey\WhisperUtils\Enums\TimestampGranularity;

class CreateTranscriptionPayload
{
    /**
     * Constructor for CreateTranslationPayload.
     *
     * @param string $file
     * @param string $fileName
     * @param string $model
     * @param Languages|string|null $language
     * @param string|null $prompt
     * @param ResponseFormat|string|null $response_format
     * @param float|null $temperature
     * @param array|null $timestamp_granularity
     */
    public function __construct(
        public string $file,
        public string $fileName,
        public string $model,
        public Languages|string|null $language = 'en',
        public ?string $prompt = '',
        public ResponseFormat|string|null $response_format = 'json',
        public ?float $temperature = 0,
        public ?array $timestamp_granularity = [TimestampGranularity::default()]
    ) { }

    public function toArray(): array
    {
        return [
            'multipart' => [
                [
                    'name'     => 'file',
                    'contents' => $this->file,
                    'filename' => $this->fileName,
                    'headers'  => [
                        'Content-Type' => '<Content-type header>'
                    ]
                ],
                [
                    'name'     => 'model',
                    'contents' => $this->model
                ],
                [
                    'name'     => 'language',
                    'contents' => $this->language
                ],
                [
                    'name'     => 'prompt',
                    'contents' => $this->prompt
                ],
                [
                    'name'     => 'response_format',
                    'contents' => $this->response_format
                ],
                [
                    'name'     => 'temperature',
                    'contents' => $this->temperature
                ],
                [
                    'name'     => 'timestamp_granularity',
                    'contents' => $this->timestamp_granularity
                ],
            ]
        ];
    }
}