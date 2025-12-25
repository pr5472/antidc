<?php

namespace Antidc;

use Exception;
use Log;

class ClientV1
{

    /**
     * 版本
     * @var string
     */
    public $version = 'v1';
    public $timeout = '30';
    public $apiUrl = '';
    public $userName = '';
    public $password = '';

    public function __construct($userName, $password, $apiUrl = 'https://ant-idc.com/4VY8YErqq8')
    {
        $this->apiUrl = $apiUrl;
        $this->userName = $userName;
        $this->password = $password;
    }

    public function apiRequest($method, $action, array $params = [], array $headers = [])
    {
        echo '123';
        $url = rtrim($this->apiUrl, '/') . $action;

//        try {
//            $http = Http::timeout($this->timeout)->withoutVerifying() // 魔方云可能使用自签名证书
//                ->asForm(); // 使用 application/x-www-form-urlencoded
//
//            //设置头部信息
//            if ($headers) {
//                $http = $http->withHeaders($headers);
//            }
//
//            $response = match (strtoupper($method)) {
//                'GET' => $http->get($url, $data),
//                'POST' => $http->post($url, $data),
//                'PUT' => $http->put($url, $data),
//                'DELETE' => $http->delete($url, $data),
//                default => throw new Exception("不支持的HTTP方法: {$method}"),
//            };
//
//            return $response->json();
//
//        } catch (Exception $e) {
//
//        }
    }

}