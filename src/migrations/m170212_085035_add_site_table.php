<?php


use nullref\core\traits\MigrationTrait;
use yii\db\Migration;

class m170212_085035_add_site_table extends Migration
{
    use MigrationTrait;

    public function up()
    {
        $this->createTable('{{%site}}', [
            'id' => $this->primaryKey(),
            'host' => $this->string(),
        ]);

    }

    public function down()
    {
        $this->dropTable('{{%site}}');
    }

}
