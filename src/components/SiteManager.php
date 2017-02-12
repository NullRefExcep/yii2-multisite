<?php

/**
 * @author    Dmytro Karpovych
 * @copyright 2017 NRE
 */


namespace nullref\multisite\components;

use Yii;
use yii\base\Component;

class SiteManager extends Component
{
    protected $_site = null;

    public function init()
    {
        $hostInfo = Yii::$app->request->getHostInfo();

        if (null !== ($model = Site::find()->byHost($hostInfo)->one())) {
            $this->_site = $model;
        }
    }
}