<?php


namespace whereof\cloudPrint\Kuaidi100;

use whereof\cloudPrint\Kernel\BaseClient;
use whereof\cloudPrint\Kernel\Support\Timer;

/**
 * Class Kuaidi100Client
 * @package whereof\cloudPrint\Kuaidi100
 */
class Kuaidi100Client extends BaseClient
{

    /**
     * @param $url
     * @param $action
     * @param $private_params
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function request($url, $action, $private_params)
    {
        $timestamp = Timer::timeStamp();
        $params    = [
            'method' => $action,
            'key'    => $this->config['key'],
            'sign'   => $this->sign($private_params, $timestamp),
            't'      => $timestamp,
            'param'  => json_encode($private_params),
        ];
        if ($action == 'imgOrder') {
            return $this->httpGet($url, $params, ['Content-Type' => 'multipart/form-data']);
        }
        return $this->httpPost($url, $params);
    }

    /**
     * @param $param
     * @param $t
     * @return string
     */
    protected function sign($param, $t)
    {
        return strtoupper(md5(json_encode($param) . $t . $this->config['key'] . $this->config['secret']));
    }

}