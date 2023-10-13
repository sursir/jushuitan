<?php

namespace sursir\JuShuiTan\Api;

use sursir\JuShuiTan\Api\Common\BaseApi;
use sursir\JuShuiTan\Api\Common\Client;
use sursir\JuShuiTan\Api\Common\ServeHttp;
use sursir\JuShuiTan\Api\Common\Util;

class ApiRequest extends BaseApi implements ServeHttp
{
    public function request($serveHttp, $params): array
    {
        return Client::post($serveHttp, Util::getParams($this->getConfig()['app_Secret'], $params));
    }

}