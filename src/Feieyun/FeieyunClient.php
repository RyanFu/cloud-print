<?php

namespace whereof\cloudPrint\Feieyun;

use whereof\cloudPrint\Kernel\BaseClient;
use whereof\cloudPrint\Kernel\Support\Timer;

/**
 * Class FeieyunClient.
 */
class FeieyunClient extends BaseClient
{
    /**
     * @var string
     */
    protected $host = 'http://api.feieyun.cn/Api/Open/';

    /**
     * @param $action
     * @param array $private_params
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Exception
     *
     * @return string
     */
    public function request($action, array $private_params = [])
    {
        $timestamp = Timer::timeStamp();
        $public_params = [
            'user'    => $this->config['user'],
            'stime'   => $timestamp,
            'sig'     => $this->getSig($timestamp),
            'apiname' => $action,
        ];
        $url = $this->config['host'] ?? $this->host;
        $params = array_filter(array_merge($public_params, $private_params));
        $resp = $this->httpPost($url, $params);
        $this->debug('POST:'.$url, $params, $resp);

        return $resp;
    }

    /**
     * @param $timestamp
     *
     * @throws \Exception
     *
     * @return string
     */
    protected function getSig($timestamp)
    {
        return sha1($this->config['user'].$this->config['ukey'].$timestamp);
    }
}
