<?php

namespace KeiKey\WhisperUtils\Services;

use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ServerException;

/**
 * Class BaseRestRequest.
 *
 * Class being used for the making of Rest requests.
 */
class BaseRestRequest
{
    protected string $baseUrl;

    protected string $apiVersion;

    protected string $bearerToken;

    /**
     * BaseRequest constructor.
     *
     * @param Client $client
     */
    public function __construct(protected Client $client)
    {
    }

    /**
     * Set Base Url.
     *
     * @param string $baseUrl
     * @return BaseRestRequest
     */
    public function setBaseUrl(string $baseUrl): BaseRestRequest
    {
        $this->baseUrl = $baseUrl;

        return $this;
    }

    /**
     * Set Api Version.
     *
     * @param string $apiVersion
     * @return BaseRestRequest
     */
    public function setApiVersion(string $apiVersion = 'v1'): BaseRestRequest
    {
        $this->apiVersion = $apiVersion;

        return $this;
    }

    /**
     * Get Api Version.
     *
     * @return string
     * @return void
     */
    public function getApiVersion(): string
    {
        return $this->apiVersion;
    }

    /**
     * Set Bearer token.
     *
     * @param string $bearerToken
     * @return BaseRestRequest
     */
    public function setBearerToken(string $bearerToken): BaseRestRequest
    {
        $this->bearerToken = $bearerToken;

        return $this;
    }

    /**
     * @param string $endpoint
     * @return string
     */
    private function buildUrl(string $endpoint): string
    {
        return rtrim($this->baseUrl, '/') . '/' . ltrim($endpoint, '/');
    }

    /**
     * @param array $headers
     * @return array
     */
    public function prepareHeaders(array $headers): array
    {
        $default = [
            'Content-Type'  => 'multipart/form-data',
            'Accept'        => 'application/json',
            'Authorization' => `Bearer $this->bearerToken`
        ];

        return array_merge ($default, $headers);
    }

    /**
     * @param string $endpoint
     * @param array $payload
     * @return BaseRestResponse
     * @throws GuzzleException
     */
    public function get(string $endpoint, array $payload): BaseRestResponse
    {
        return $this->makeRequest('GET', $endpoint, $payload);
    }

    /**
     * @param string $endpoint
     * @param array $payload
     * @return BaseRestResponse
     * @throws GuzzleException
     */
    public function post(string $endpoint, array $payload): BaseRestResponse
    {
        return $this->makeRequest('POST', $endpoint, $payload);
    }

    /**
     * @param string $endpoint
     * @param array $payload
     * @return BaseRestResponse
     * @throws GuzzleException
     */
    public function put(string $endpoint, array $payload): BaseRestResponse
    {
        return $this->makeRequest('PUT', $endpoint, $payload);
    }

    /**
     * @param string $endpoint
     * @param array $payload
     * @return BaseRestResponse
     * @throws GuzzleException
     */
    public function patch(string $endpoint, array $payload): BaseRestResponse
    {
        return $this->makeRequest('PATCH', $endpoint, $payload);
    }

    /**
     * @param string $endpoint
     * @param array $payload
     * @return BaseRestResponse
     * @throws GuzzleException
     */
    public function delete(string $endpoint, array $payload): BaseRestResponse
    {
        return $this->makeRequest('DELETE', $endpoint, $payload);
    }

    /**
     * @param string $method
     * @param string $endpoint
     * @param array $payload
     * @return BaseRestResponse
     * @throws GuzzleException
     */
    protected function makeRequest(string $method, string $endpoint, array $payload): BaseRestResponse
    {
        try {
            $response = $this->client->request($method, $this->buildUrl($endpoint), [
                'headers'   => $this->prepareHeaders($payload['headers'] ?? []),
                'query'     => $payload['query'] ?? null,
                'json'      => $payload['payload'] ?? null,
                'multipart' => $payload['multipart'] ?? null,
                'body'      => $payload['body'] ?? null
            ]);

            return new BaseRestResponse($response);
        } catch (\Exception $e) {
            throw $e;
        }
    }

}
