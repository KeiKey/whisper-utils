<?php

namespace KeiKey\WhisperUtils\Services;

use KeiKey\WhisperUtils\Enums\ResponseFormat;
use SplFileObject;

class CreateTranslationPayload
{
    /**
     * Constructor for CreateTranslationPayload.
     *
     * @param SplFileObject $file
     * @param string $model
     * @param string|null $prompt
     * @param ResponseFormat|null $response_format
     * @param float|null $temperature
     */
    public function __construct(
        public SplFileObject $file,
        public string $model,
        public ?string $prompt = null,
        public ?ResponseFormat $response_format = ResponseFormat::JSON,
        public ?float $temperature = 0,
    ) {
    }
}