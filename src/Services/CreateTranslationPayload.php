<?php

namespace KeiKey\WhisperUtils\Services;

use KeiKey\WhisperUtils\Enums\ResponseFormat;

class CreateTranslationPayload
{
    /**
     * Constructor for CreateTranslationPayload.
     *
     * @param string $file
     * @param string $fileName
     * @param string $model
     * @param string|null $prompt
     * @param ResponseFormat|string|null $response_format
     * @param float|null $temperature
     */
    public function __construct(
        public string $file,
        public string $fileName,
        public string $model,
        public ?string $prompt = null,
        public ResponseFormat|string|null $response_format = 'json',
        public ?float $temperature = 0
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
                ]
            ]
        ];
    }
}