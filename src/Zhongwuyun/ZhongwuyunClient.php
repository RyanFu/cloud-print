<?php


namespace whereof\cloudPrint\Zhongwuyun;


use whereof\cloudPrint\Kernel\BaseClient;
use whereof\cloudPrint\Kernel\Support\Timer;

/**
 * Class ZhongwuyunClient
 * @package whereof\cloudPrint\Zhongwuyun
 */
class ZhongwuyunClient extends BaseClient
{

    /**
     * @var string
     */
    protected $host = 'http://api.zhongwuyun.com';

    /**
     * @param $action
     * @param $private_params
     * @param bool $is_get
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function request($action, $private_params, $is_get = false)
    {
        $public_params  = [
            "appid"     => $this->config['appid'],
            "timestamp" => Timer::timeStamp(),
        ];
        $params         = array_filter(array_merge($public_params, $private_params));
        $params['sign'] = $this->sign($params);
        $url            = $this->config['host'] ?? $this->host . "/" . $action;
        if ($is_get){
            return $this->httpGet($url, $params);
        }
        return $this->httpPost($url, $params);
    }

    /**
     * @param $params
     * @return string
     */
    protected function sign($params)
    {
        $str = '';
        ksort($params);
        foreach ($params as $k => $v) {
            $str .= $k . $v;
        }
        $str .= $this->config['appsecret'];
        return md5($str);
    }
}