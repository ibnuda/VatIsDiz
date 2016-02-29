<?php

use yii\db\Migration;

class m160229_042633_create_status_table extends Migration
{
    public function up()
    {
        $this->createTable('status_table', [
            'id' => $this->primaryKey()
        ]);
    }

    public function down()
    {
        $this->dropTable('status_table');
    }
}
