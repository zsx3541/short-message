<?php
/**
 * Created by PhpStorm.
 * User: zsx
 * Date: 2019-12-14
 * Time: 11:45
 */

namespace Shuzu\ShortMessage\Request;


use Shuzu\ShortMessage\Model\Page;

class SendResultRequest
{
    public $taskId;

    /**
     * @var Page
     */
    public $pageModel;

    /**
     * @return mixed
     */
    public function getTaskId()
    {
        return $this->taskId;
    }

    /**
     * @param mixed $taskId
     */
    public function setTaskId($taskId)
    {
        $this->taskId = $taskId;
    }

    /**
     * @return Page
     */
    public function getPageModel()
    {
        return $this->pageModel;
    }

    /**
     * @param Page $pageModel
     */
    public function setPageModel($pageModel)
    {
        $this->pageModel = $pageModel;
    }



}