<?php


namespace whereof\cloudPrint\Xpyun;


use whereof\cloudPrint\Kernel\BaseClient;
use whereof\cloudPrint\Kernel\Support\Timer;

/**
 * Class XpyunClient
 * @package whereof\cloudPrint\Xpyun
 */
class XpyunClient  extends BaseClient
{

    /**
     * @var string
     */
    protected $host = 'https://open.xpyun.net/api/openapi/xprinter';

    /**
     * @param $action
     * @param $private_params
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function request($action, $private_params)
    {
        $timestamp     = Timer::timeStamp();
        $public_params = [
            'user'      => $this->config['user'],
            'timestamp' => $timestamp,
            'sign'      => $this->getSign($timestamp),
        ];
        $params        = array_filter(array_merge($public_params, $private_params));
        $url           = $this->config['host'] ?? $this->host . '/' . $action;
        return $this->httpPostJson($url, $params);
    }

    /**
     * @param $timestamp
     * @return string
     */
    protected function getSign($timestamp)
    {
        return sha1($this->config['user'] . $this->config['userKey'] . $timestamp);
    }
}