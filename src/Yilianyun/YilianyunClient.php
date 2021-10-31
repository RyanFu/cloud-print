<?php

namespace whereof\cloudPrint\Yilianyun;

use whereof\cloudPrint\Kernel\BaseClient;
use whereof\cloudPrint\Kernel\Support\Timer;

/**
 * Class YilianyunClient.
 */
class YilianyunClient extends BaseClient
{
    /**
     * @var string
     */
    protected $host = 'https://open-api.10ss.net/';

    /**
     * @param $action
     * @param $private_params
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Exception
     *
     * @return string
     */
    public function request($action, $private_params)
    {
        $timestamp = Timer::timeStamp();
        $public_params = [
            'client_id' => $this->config['client_id'],
            'sign'      => $this->sign($timestamp),
            'timestamp' => $timestamp,
            'id'        => $this->uuid(),
        ];
        if ($action != 'oauth/oauth') {
            $public_params['access_token'] = $this->accessToken();
        }
        $url = $this->buildHost($action);
        $params = array_filter(array_merge($public_params, $private_params));
        $resp = $this->httpPost($url, $params);
        $this->debug('POST:'.$url, $params, $resp);

        return $resp;
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Exception
     *
     * @return string
     */
    protected function accessToken()
    {
        $key = md5($this->config['client_id'].$this->config['client_secret']);
        if ($this->cache()->hasCache($key)) {
            return $this->cache()->getCache($key);
        }
        $params = [
            'grant_type' => 'client_credentials',
            'scope'      => 'all',
        ];
        $resp = $this->request('oauth/oauth', $params);
        $data = json_decode($resp, true);
        if (empty($data['body']['access_token'])) {
            return $resp;
        }
        $this->cache()->setCache($key, $data['body']['access_token'], $data['body']['expires_in']);

        return $data['body']['access_token'];
    }

    /**
     * @param $action
     *
     * @return string
     */
    protected function buildHost($action)
    {
        return $this->config['host'] ?? $this->host.$action;
    }

    /**
     * @param $timestamp
     *
     * @return string
     */
    protected function sign($timestamp)
    {
        return md5($this->config['client_id'].$timestamp.$this->config['client_secret']);
    }

    /**
     * @return string
     */
    protected function uuid()
    {
        $chars = md5(uniqid(mt_rand(), true));

        return substr($chars, 0, 8).'-'
            .substr($chars, 8, 4).'-'
            .substr($chars, 12, 4).'-'
            .substr($chars, 16, 4).'-'
            .substr($chars, 20, 12);
    }
}
