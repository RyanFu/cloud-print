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
     * @throws \Exception
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
            $methed = 'GET';
            $resp   = $this->httpGet($url, $params, ['Content-Type' => 'multipart/form-data']);
        } else {
            $methed = 'POST';
            $resp   = $this->httpPost($url, $params);
        }
        $this->debug($methed . ':' . $url, $params, $resp);
        return $resp;
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