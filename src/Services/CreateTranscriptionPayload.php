<?php

namespace KeiKey\WhisperUtils\Services;

use KeiKey\WhisperUtils\Enums\Languages;
use KeiKey\WhisperUtils\Enums\ResponseFormat;
use KeiKey\WhisperUtils\Enums\TimestampGranularity;
use SplFileObject;

class CreateTranscriptionPayload
{
    /**
     * Constructor for CreateTranslationPayload.
     *
     * @param SplFileObject $file
     * @param string $model
     * @param Languages|null $language
     * @param string|null $prompt
     * @param ResponseFormat|null $response_format
     * @param float|null $temperature
     * @param array|null $timestamp_granularity
     */
    public function __construct(
        public SplFileObject $file,
        public string $model,
        public ?Languages $language,
        public ?string $prompt,
        public ?ResponseFormat $response_format = ResponseFormat::JSON,
        public ?float $temperature = 0,
        public ?array $timestamp_granularity = [TimestampGranularity::SEGMENT],
    ) {
    }
}