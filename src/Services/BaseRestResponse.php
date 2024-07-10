<?php

namespace KeiKey\WhisperUtils\Services;

use GuzzleHttp\Psr7\PumpStream;
use GuzzleHttp\Psr7\Stream;
use Illuminate\Support\Str;
use Psr\Http\Message\StreamInterface;

/**
 * Class BaseRestResponse.
 *
 * Wrapper of Rest response.
 */
class BaseRestResponse
{
    /**
     * @var $response
     */
    protected $response;

    /**
     * BaseRestRequest constructor.
     *
     * @param $response
     */
    public function __construct($response)
    {
        $this->response = $response;
    }

    /**
     * @return mixed
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @return bool
     */
    public function successful(): bool
    {
        return Str::startsWith($this->response->getStatusCode(), '2');
    }

    /**
     * @return bool
     */
    public function failed(): bool
    {
        return ! Str::startsWith($this->response->getStatusCode(), '2');
    }

    /**
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->response->getStatusCode();
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return json_decode($this->response->getBody(), true);
    }

    /**
     * @return PumpStream|Stream|StreamInterface|null
     */
    public function getBody(): PumpStream|Stream|StreamInterface|null
    {
        return $this->response->getBody();
    }

    /**
     * @return string|null
     */
    public function getBodyString(): ?string
    {
        return (string) $this->response->getBody();
    }
}
