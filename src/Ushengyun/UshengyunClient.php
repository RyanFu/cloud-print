<?php

namespace whereof\cloudPrint\Ushengyun;

use Exception;
use GuzzleHttp\Exception\GuzzleException;
use whereof\cloudPrint\Kernel\BaseClient;
use whereof\cloudPrint\Kernel\Support\Timer;

/**
 * Class UshengyunClient.
 *
 * @author zhiqiang
 */
class UshengyunClient extends BaseClient
{
    /**
     * @var string
     */
    protected $host = 'https://open-api.ushengyun.com/printer';

    /**
     * @param $action
     * @param $private_params
     *
     * @return string
     * @throws Exception
     *
     * @throws GuzzleException
     */
    public function request($action, $private_params)
    {
        $time             = Timer::timeStamp();
        $public_params    = [
            'appid'     => $this->config['appId'],
            'timestamp' => $time,
        ];
        $params           = array_filter(array_merge($public_params, $private_params));
        $protocol['sign'] = $this->sign($params);
        $url              = $this->config['host'] ?? $this->host . '/' . $action;

        $resp = $this->httpPostJson($url, [
            'form_params' => $params,
        ]);
        $this->requestLog('POST:' . $url, $params, $resp);
        return $resp;
    }

    /**
     * 签名.
     *
     * @param array $params
     *
     * @return string
     */
    protected function sign(array $params)
    {
        $stringToSigned = '';
        ksort($params);
        foreach ($params as $k => $v) {
            if (strlen($v) > 0) {
                $stringToSigned .= $k . $v;
            }
        }
        $stringToSigned .= $this->config['appSecret'];
        return md5($stringToSigned);
    }
}
