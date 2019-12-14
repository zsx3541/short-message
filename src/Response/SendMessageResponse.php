<?php
/**
 * Created by PhpStorm.
 * User: zsx
 * Date: 2019-12-13
 * Time: 19:33
 */

namespace Shuzu\ShortMessage\Response;


class SendMessageResponse
{
    private $taskId;

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




}