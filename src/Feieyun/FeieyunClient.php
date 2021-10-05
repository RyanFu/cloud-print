<?php


namespace whereof\cloudPrint\Feieyun;


use whereof\cloudPrint\Kernel\BaseClient;
use whereof\cloudPrint\Kernel\Support\Timer;
use whereof\Helper\ArrayHelper;
use whereof\Logger\Logger;

/**
 * Class FeieyunClient
 * @package whereof\cloudPrint\Feieyun
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
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Exception
     */
    public function request($action, array $private_params = [])
    {
        $timestamp     = Timer::timeStamp();
        $public_params = [
            'user'    => $this->config('user'),
            'stime'   => $timestamp,
            'sig'     => $this->getSig($timestamp),
            'apiname' => $action,
        ];
        $url           = $this->config['host'] ?? $this->host;
        $params        = array_filter(array_merge($public_params, $private_params));
        $resp          = $this->httpPost($url, $params);
        $this->debug('POST:' . $url, $params, $resp);
        return $resp;
    }


    /**
     * @param $timestamp
     * @return string
     * @throws \Exception
     */
    protected function getSig($timestamp)
    {
        return sha1($this->config('user') . $this->config('ukey') . $timestamp);
    }
}