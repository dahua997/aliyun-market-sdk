<?php
/**
 * @return
 * @author dahua@php
 * 2022/4/6 18:56
 */

namespace Dahua\AliyunMarketSdk\Main;

use Dahua\AliyunMarketSdk\Core\DHcurl;

class OcrMain
{
    private $c;
    private $header;

    public function __construct()
    {
        $this->c = new DHcurl();
    }

    public function header($header)
    {
        $this->header = $header;
        return $this;
    }

    public function body($body)
    {
        $this->body  = $body;
        return $this;
    }

    public function post()
    {
        $response = $this->c->setData([
            '_data'=>$this->body,
            '_header'=>$this->header
        ])->post();
        return $response['_res']['response'];
    }
}
