<?php

namespace whereof\cloudPrint\Poscom;

use whereof\cloudPrint\Kernel\BaseClient;

/**
 * Class PoscomClient.
 */
class PoscomClient extends BaseClient
{
    /**
     * @var string
     */
    protected $host = 'https://api.poscom.cn/';

    /**
     * @param $method
     * @param $action
     * @param $private_params
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Exception
     *
     * @return string
     */
    public function request($method, $action, $private_params)
    {
        $url = $this->config['host'] ?? $this->host.$action;
        $reqTime = $this->time();
        $public_params = [
            'reqTime'      => $reqTime,
            'securityCode' => $this->securityCode($reqTime),
            'memberCode'   => $this->config['memberCode'],
        ];
        $params = array_filter(array_merge($public_params, $private_params));

        $resp = $this->httpRequest($method, $url, [
            'form_params' => $params,
        ]);
        $this->debug($method.':'.$url, $params, $resp);

        return $resp;
    }

    /**
     * @param $reqTime
     *
     * @return string
     */
    public function securityCode($reqTime)
    {
        return md5($this->config['memberCode'].$reqTime.$this->config['apiKey']);
    }

    /**
     * @return float
     */
    public function time()
    {
        return floor(microtime(true) * 1000);
    }
}
