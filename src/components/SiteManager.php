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
        return $this->_site;
    }
}