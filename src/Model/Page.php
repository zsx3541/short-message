<?php
/**
 * Created by PhpStorm.
 * User: zsx
 * Date: 2019-12-14
 * Time: 11:47
 */

namespace Shuzu\ShortMessage\Model;


class Page
{
    public $pageNum;
    public $pageSize;

    /**
     * @return mixed
     */
    public function getPageNum()
    {
        return $this->pageNum;
    }

    /**
     * @param mixed $pageNum
     */
    public function setPageNum($pageNum)
    {
        $this->pageNum = $pageNum;
    }

    /**
     * @return mixed
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @param mixed $pageSize
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }


}