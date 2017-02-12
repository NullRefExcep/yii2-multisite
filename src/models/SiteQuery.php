<?php
/**
 * @author    Dmytro Karpovych
 * @copyright 2017 NRE
 */


namespace nullref\multisite\src\models;


use yii\db\ActiveQuery;

class SiteQuery extends ActiveQuery
{
    /**
     * @param $host
     * @return $this
     */
    public function byHost($host)
    {
        return $this->andWhere(['host' => $host]);
    }
}