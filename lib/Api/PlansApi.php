<?php
/**
 * PlansApi
 * PHP version 8.1
 *
 * @category Class
 * @package  Equisoft\SDK\EquisoftPlan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Equisoft /plan API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: latest
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.13.0-equisoft1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Equisoft\SDK\EquisoftPlan\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Equisoft\SDK\EquisoftPlan\ApiException;
use Equisoft\SDK\EquisoftPlan\Configuration;
use Equisoft\SDK\EquisoftPlan\HeaderSelector;
use Equisoft\SDK\EquisoftPlan\ObjectSerializer;

/**
 * PlansApi Class Doc Comment
 *
 * @category Class
 * @package  Equisoft\SDK\EquisoftPlan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PlansApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'listPlans' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ?ClientInterface $client = null,
        ?Configuration $config = null,
        ?HeaderSelector $selector = null,
        int $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation listPlans
     *
     * @param  string|null $clientExternalUuid clientExternalUuid (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listPlans'] to see the possible values for this operation
     *
     * @throws \Equisoft\SDK\EquisoftPlan\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Equisoft\SDK\EquisoftPlan\Model\PlansListPlansResponse|\Equisoft\SDK\EquisoftPlan\Model\ErrorResponse|\Equisoft\SDK\EquisoftPlan\Model\ErrorResponse
     */
    public function listPlans($clientExternalUuid = null, string $contentType = self::contentTypes['listPlans'][0])
    {
        list($response) = $this->listPlansWithHttpInfo($clientExternalUuid, $contentType);
        return $response;
    }

    /**
     * Operation listPlansWithHttpInfo
     *
     * @param  string|null $clientExternalUuid (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listPlans'] to see the possible values for this operation
     *
     * @throws \Equisoft\SDK\EquisoftPlan\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Equisoft\SDK\EquisoftPlan\Model\PlansListPlansResponse|\Equisoft\SDK\EquisoftPlan\Model\ErrorResponse|\Equisoft\SDK\EquisoftPlan\Model\ErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function listPlansWithHttpInfo($clientExternalUuid = null, string $contentType = self::contentTypes['listPlans'][0])
    {
        $request = $this->listPlansRequest($clientExternalUuid, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\Equisoft\SDK\EquisoftPlan\Model\PlansListPlansResponse',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\Equisoft\SDK\EquisoftPlan\Model\ErrorResponse',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\Equisoft\SDK\EquisoftPlan\Model\ErrorResponse',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\Equisoft\SDK\EquisoftPlan\Model\PlansListPlansResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Equisoft\SDK\EquisoftPlan\Model\PlansListPlansResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Equisoft\SDK\EquisoftPlan\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Equisoft\SDK\EquisoftPlan\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation listPlansAsync
     *
     * @param  string|null $clientExternalUuid (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listPlans'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listPlansAsync($clientExternalUuid = null, string $contentType = self::contentTypes['listPlans'][0])
    {
        return $this->listPlansAsyncWithHttpInfo($clientExternalUuid, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listPlansAsyncWithHttpInfo
     *
     * @param  string|null $clientExternalUuid (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listPlans'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listPlansAsyncWithHttpInfo($clientExternalUuid = null, string $contentType = self::contentTypes['listPlans'][0])
    {
        $returnType = '\Equisoft\SDK\EquisoftPlan\Model\PlansListPlansResponse';
        $request = $this->listPlansRequest($clientExternalUuid, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'listPlans'
     *
     * @param  string|null $clientExternalUuid (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listPlans'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listPlansRequest($clientExternalUuid = null, string $contentType = self::contentTypes['listPlans'][0])
    {



        $resourcePath = '/fna/api/v2/plans';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $clientExternalUuid,
            'clientExternalUuid', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        if (is_string($formParamValueItem)) {
                            // JSON part
                            $multipartContents[] = [
                                'name' => $formParamName,
                                'contents' => $formParamValueItem,
                                'headers' => [
                                    'Content-Disposition' => "form-data; name=\"$formParamName\"; filename=\"$formParamName.json\"",
                                    'Content-Type' => 'application/json; charset=UTF-8'
                                ]
                            ];
                        } else {
                            $multipartContents[] = [
                                'name' => $formParamName,
                                'contents' => $formParamValueItem
                            ];
                        }
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }

    private function handleResponseWithDataType(
        string $dataType,
        RequestInterface $request,
        ResponseInterface $response
    ): array {
        if ($dataType === '\SplFileObject') {
            $content = $response->getBody(); //stream goes to serializer
        } else {
            $content = (string) $response->getBody();
            if ($dataType !== 'string') {
                try {
                    $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                } catch (\JsonException $exception) {
                    throw new ApiException(
                        sprintf(
                            'Error JSON decoding server response (%s)',
                            $request->getUri()
                        ),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                        $content
                    );
                }
            }
        }

        return [
            ObjectSerializer::deserialize($content, $dataType, []),
            $response->getStatusCode(),
            $response->getHeaders()
        ];
    }

    private function responseWithinRangeCode(
        string $rangeCode,
        int $statusCode
    ): bool {
        $left = (int) ($rangeCode[0].'00');
        $right = (int) ($rangeCode[0].'99');

        return $statusCode >= $left && $statusCode <= $right;
    }
}
