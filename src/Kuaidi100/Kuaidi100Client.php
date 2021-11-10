<?php

namespace whereof\cloudPrint\Kuaidi100;

use Exception;
use GuzzleHttp\Exception\GuzzleException;
use whereof\cloudPrint\Kernel\BaseClient;
use whereof\cloudPrint\Kernel\Support\Timer;

/**
 * Class Kuaidi100Client.
 */
class Kuaidi100Client extends BaseClient
{
    /**
     * @param $url
     * @param $action
     * @param $private_params
     *
     * @throws GuzzleException
     * @throws Exception
     *
     * @return string
     */
    public function request($url, $action, $private_params)
    {
        $timestamp = Timer::timeStamp();
        $params = [
            'method' => $action,
            'key'    => $this->config['key'],
            'sign'   => $this->sign($private_params, $timestamp),
            't'      => $timestamp,
            'param'  => json_encode($private_params),
        ];
        if ($action == 'imgOrder') {
            $methed = 'GET';
            $resp = $this->httpGet($url, $params, ['Content-Type' => 'multipart/form-data']);
        } else {
            $methed = 'POST';
            $resp = $this->httpPost($url, $params);
        }
        return $resp;
    }

    /**
     * @param $param
     * @param $t
     *
     * @return string
     */
    protected function sign($param, $t)
    {
        return strtoupper(md5(json_encode($param).$t.$this->config['key'].$this->config['secret']));
    }
}
