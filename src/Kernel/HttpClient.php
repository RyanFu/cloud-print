<?php
/*
 * Desc:
 * User: zhiqiang
 * Date: 2021-10-12 21:04
 */

namespace whereof\cloudPrint\Kernel;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

trait HttpClient
{
    /**
     * @param string $url
     * @param array  $query
     * @param array  $headers
     *
     * @throws GuzzleException
     *
     * @return string
     */
    protected function httpGet(string $url, array $query = [], array $headers = [])
    {
        $options = [
            'headers' => $headers,
            'query'   => $query,
        ];

        return $this->httpRequest('GET', $url, $options);
    }

    /**
     * @param string $url
     * @param array  $params
     * @param array  $headers
     *
     * @throws GuzzleException
     *
     * @return string
     */
    protected function httpPost(string $url, array $params = [], array $headers = [])
    {
        $options = [
            'headers'     => $headers,
            'form_params' => $params,
        ];

        return $this->httpRequest('POST', $url, $options);
    }

    /**
     * @param string $url
     * @param array  $params
     * @param array  $headers
     *
     * @throws GuzzleException
     *
     * @return string
     */
    protected function httpPostJson(string $url, array $params = [], array $headers = [])
    {
        $options = [
            'headers' => $headers,
            'json'    => $params,
        ];

        return $this->httpRequest('POST', $url, $options);
    }

    /**
     * @param $method
     * @param $url
     * @param $options
     *
     * @throws GuzzleException
     *
     * @return string
     */
    protected function httpRequest($method, $url, $options)
    {
        $resp = $this->httpClient()->request($method, $url, $options);

        return $resp->getBody()->getContents();
    }

    /**
     * @return Client
     */
    protected function httpClient()
    {
        if (!class_exists(Client::class)) {
            throw new \InvalidArgumentException('Not installed guzzlehttp/guzzle');
        }

        return new Client($this->config['http'] ?? []);
    }
}
