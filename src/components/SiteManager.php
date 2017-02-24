<?php

/**
 * @author    Dmytro Karpovych
 * @copyright 2017 NRE
 */


namespace nullref\multisite\components;

use nullref\multisite\models\Site;
use Yii;
use yii\base\Component;

class SiteManager extends Component
{
    protected $_site = null;

    protected $_isAdmin = false;

    /**
     *
     */
    public function init()
    {
        $host = Yii::$app->request->getServerName();

        if (null !== ($model = Site::find()->byHost($host)->one())) {
            $this->_site = $model;
        }
    }

    /**
     * @return null
     */
    public function getSite()
    {
        if ($this->getIsAdmin()) {

            return $this->_site;
        }
        if ($this->_site === null) {
            $this->getDefaultSite();
        }
        return $this->_site;
    }

    /**
     * @return bool
     */
    public function getIsAdmin()
    {
        $pathInfo = Yii::$app->request->getPathInfo();
        return (strpos($pathInfo, '/admin') !== false);
    }

    /**
     *
     */
    public function getDefaultSite()
    {
        if (null !== ($model = Site::find()->isDefault()->one())) {
            $this->_site = $model;
        }
    }
}