<?php

namespace whereof\cloudPrint\Printcenter;

use whereof\cloudPrint\Kernel\BaseClient;

/**
 * Class PrintcenterClient.
 */
class PrintcenterClient extends BaseClient
{
    /**
     * @var string
     */
    protected $host = 'http://open.printcenter.cn:8080';

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
        $url = $this->config['host'] ?? $this->host.($action ? ('/'.ltrim($action, '/')) : '');
        $public_params = [
            'key' => $this->config['key'],
        ];
        $params = array_filter(array_merge($public_params, $private_params));
        $resp = $this->httpPost($url, $params);
        $this->debug('POST:'.$url, $params, $resp);

        return $resp;
    }
}
