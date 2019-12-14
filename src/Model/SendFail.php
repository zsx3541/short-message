<?php
/**
 * Created by PhpStorm.
 * User: zsx
 * Date: 2019-12-14
 * Time: 11:54
 */

namespace Shuzu\ShortMessage\Model;


class SendFail
{
    public $pkId;
    public $contactId;
    public $enterDeptId;
    public $secretId;
    public $sentTime;
    public $templateId;
    public $failMessage;

    /**
     * @return mixed
     */
    public function getPkId()
    {
        return $this->pkId;
    }

    /**
     * @param mixed $pkId
     */
    public function setPkId($pkId)
    {
        $this->pkId = $pkId;
    }

    /**
     * @return mixed
     */
    public function getContactId()
    {
        return $this->contactId;
    }

    /**
     * @param mixed $contactId
     */
    public function setContactId($contactId)
    {
        $this->contactId = $contactId;
    }

    /**
     * @return mixed
     */
    public function getEnterDeptId()
    {
        return $this->enterDeptId;
    }

    /**
     * @param mixed $enterDeptId
     */
    public function setEnterDeptId($enterDeptId)
    {
        $this->enterDeptId = $enterDeptId;
    }

    /**
     * @return mixed
     */
    public function getSecretId()
    {
        return $this->secretId;
    }

    /**
     * @param mixed $secretId
     */
    public function setSecretId($secretId)
    {
        $this->secretId = $secretId;
    }

    /**
     * @return mixed
     */
    public function getSentTime()
    {
        return $this->sentTime;
    }

    /**
     * @param mixed $sentTime
     */
    public function setSentTime($sentTime)
    {
        $this->sentTime = $sentTime;
    }

    /**
     * @return mixed
     */
    public function getTemplateId()
    {
        return $this->templateId;
    }

    /**
     * @param mixed $templateId
     */
    public function setTemplateId($templateId)
    {
        $this->templateId = $templateId;
    }

    /**
     * @return mixed
     */
    public function getFailMessage()
    {
        return $this->failMessage;
    }

    /**
     * @param mixed $failMessage
     */
    public function setFailMessage($failMessage)
    {
        $this->failMessage = $failMessage;
    }


}