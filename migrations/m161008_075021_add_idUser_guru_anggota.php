<?php

use yii\db\Migration;

class m161008_075021_add_idUser_guru_anggota extends Migration
{
    public function up()
    {
        $this->execute("
            ALTER TABLE anggota ADD id_user int 
        ");
        $this->execute("
            ALTER TABLE guru ADD id_user int 
        ");
    }

    public function down()
    {
        echo "m161008_075021_add_idUser_guru_anggota cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
