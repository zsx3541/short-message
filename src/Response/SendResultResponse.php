<?php
/**
 * Created by PhpStorm.
 * User: zsx
 * Date: 2019-12-14
 * Time: 11:50
 */

namespace Shuzu\ShortMessage\Response;


class SendResultResponse
{
    /**
     * @var array
     */
    private $failureList;

    private $failureTotalNum;
    private $smsSendResult;
    private $taskId;

    /**
     * @return mixed
     */
    public function getFailureList()
    {
        return $this->failureList;
    }

    /**
     * @param mixed $failureList
     */
    public function setFailureList($failureList)
    {
        $this->failureList = $failureList;
    }

    /**
     * @return mixed
     */
    public function getFailureTotalNum()
    {
        return $this->failureTotalNum;
    }

    /**
     * @param mixed $failureTotalNum
     */
    public function setFailureTotalNum($failureTotalNum)
    {
        $this->failureTotalNum = $failureTotalNum;
    }

    /**
     * @return mixed
     */
    public function getSmsSendResult()
    {
        return $this->smsSendResult;
    }

    /**
     * @param mixed $smsSendResult
     */
    public function setSmsSendResult($smsSendResult)
    {
        $this->smsSendResult = $smsSendResult;
    }

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