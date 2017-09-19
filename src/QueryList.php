<?php
namespace QL;
use phpQuery;
use QL\Dom\Dom;

/**
 * QueryList
 *
 * 一个基于phpQuery的通用列表采集类
 *
 * @author 			Jaeger
 * @email 			JaegerCode@gmail.com
 * @link            https://github.com/jae-jae/QueryList
 * @version         4.0.0
 *
 */

class QueryList
{
    private $html;
    private $document;

    /**
     * QueryList constructor.
     */
    public function __construct()
    {
    }


    /**
     * @return mixed
     */
    public function getHtml()
    {
        return $this->html;
    }

    /**
     * @param $html
     * @return $this
     */
    public function setHtml($html)
    {
        $this->html = $html;
        $this->document = phpQuery::newDocumentHTML($this->html);
        return $this;
    }

    public function find($selector)
    {
        return (new Dom($this->document))->find($selector);
    }


}