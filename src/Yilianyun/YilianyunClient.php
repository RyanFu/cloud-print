<?php


namespace whereof\cloudPrint\Yilianyun;


use Ramsey\Uuid\Uuid;
use whereof\cloudPrint\Kernel\BaseClient;
use whereof\cloudPrint\Kernel\Support\Timer;
use whereof\SymfonyCache;

/**
 * Class YilianyunClient
 * @package whereof\cloudPrint\Yilianyun
 */
class YilianyunClient extends BaseClient
{

    use SymfonyCache;

    /**
     * @var string
     */
    protected $host = 'https://open-api.10ss.net/';

    /**
     * @param $action
     * @param $private_params
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Symfony\Component\Cache\Exception\CacheException
     * @throws \Exception
     */
    public function request($action, $private_params)
    {
        $timestamp     = Timer::timeStamp();
        $public_params = [
            'client_id' => $this->config['client_id'],
            'sign'      => $this->sign($timestamp),
            'timestamp' => $timestamp,
            'id'        => Uuid::uuid4()
        ];
        if ($action != 'oauth/oauth') {
            $public_params['access_token'] = $this->accessToken();
        }
        $url    = $this->buildHost($action);
        $params = array_filter(array_merge($public_params, $private_params));
        return $this->httpPost($url, $params);
    }

    /**
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Symfony\Component\Cache\Exception\CacheException
     * @throws \Exception
     */
    protected function accessToken()
    {
        $key = md5($this->config['client_id'] . $this->config['client_secret']);
        if ($this->cache()->hasCache($key)) {
            return $this->cache()->getCache($key);
        }
        $params = [
            'grant_type' => 'client_credentials',
            'scope'      => 'all'
        ];
        $resp   = $this->request('oauth/oauth', $params);
        $data   = json_decode($resp, true);
        if (empty($data['body']['access_token'])) {
            return $resp;
        }
        $this->cache()->setCache($key, $data['body']['access_token'], $data['body']['expires_in']);
        return $data['body']['access_token'];
    }

    /**
     * @param $action
     * @return string
     */
    protected function buildHost($action)
    {
        return $this->config['host'] ?? $this->host . $action;
    }

    /**
     * @param $timestamp
     * @return string
     */
    protected function sign($timestamp)
    {
        return md5($this->config['client_id'] . $timestamp . $this->config['client_secret']);
    }
}