<?php
/**
 * Created by PhpStorm.
 * User: zsx
 * Date: 2019-12-13
 * Time: 19:33
 */

namespace Shuzu\ShortMessage\request;


class SendMessageRequest
{
    public $enterpriseId;
    public $mobiles;
    public $templateId;
    public $placeHolderContent;

    /**
     * @return mixed
     */
    public function getEnterpriseId()
    {
        return $this->enterpriseId;
    }

    /**
     * @param mixed $enterpriseId
     */
    public function setEnterpriseId($enterpriseId)
    {
        $this->enterpriseId = $enterpriseId;
    }

    /**
     * @return mixed
     */
    public function getMobiles()
    {
        return $this->mobiles;
    }

    /**
     * @param mixed $mobiles
     */
    public function setMobiles($mobiles)
    {
        $this->mobiles = $mobiles;
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
    public function getPlaceHolderContent()
    {
        return $this->placeHolderContent;
    }

    /**
     * @param mixed $placeHolderContent
     */
    public function setPlaceHolderContent($placeHolderContent)
    {
        $this->placeHolderContent = $placeHolderContent;
    }


}