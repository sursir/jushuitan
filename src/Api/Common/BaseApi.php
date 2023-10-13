<?php

namespace sursir\JuShuiTan\Api\Common;

use sursir\JuShuiTan\JuShuiTan;

class BaseApi extends JuShuiTan
{
    public function __construct($config)
    {
        parent::setConfig($config);
        parent::setPublicRequestParams();
        Util::setParams($this);
        Client::setUrl($this->config['baseUrl']);
    }
}