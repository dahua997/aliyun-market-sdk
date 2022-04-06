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
    private $url;
    private $body;

    public function __construct()
    {
        $this->c = new DHcurl();
    }

    public function header($header)
    {
        $this->header = $header;
        return $this;
    }

    public function url($url)
    {
        $this->url = $url;
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
            '_url'=>$this->url,
            '_data'=>$this->body,
            '_header'=>$this->header
        ])->post();
        if(!empty($response->_res['response'])){
            return json_decode($response->_res['response'], true);
        }
        return [];
    }
}
