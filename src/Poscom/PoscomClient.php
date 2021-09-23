<?php


namespace whereof\cloudPrint\Poscom;


use whereof\cloudPrint\Kernel\BaseClient;

/**
 * Class PoscomClient
 * @package whereof\cloudPrint\Poscom
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
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Symfony\Component\Cache\Exception\CacheException
     */
    public function request($method, $action, $private_params)
    {
        $url           = $this->config['host'] ?? $this->host . $action;
        $reqTime       = $this->time();
        $public_params = [
            'reqTime'      => $reqTime,
            'securityCode' => $this->securityCode($reqTime),
            'memberCode'   => $this->config['memberCode'],
        ];
        $params        = array_filter(array_merge($public_params, $private_params));
        return $this->httpRequest($method, $url, [
            'form_params' => $params
        ]);
    }


    /**
     * @param $reqTime
     * @return string
     */
    public function securityCode($reqTime)
    {
        return md5($this->config['memberCode'] . $reqTime . $this->config['apiKey']);
    }

    /**
     * @return float
     */
    public function time()
    {
        return floor(microtime(true) * 1000);
    }


}