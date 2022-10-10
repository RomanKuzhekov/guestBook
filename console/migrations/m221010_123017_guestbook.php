<?php

use yii\db\Migration;

/**
 * Class m221010_123017_guestbook
 */
class m221010_123017_guestbook extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('guestbook', [
            'id' => $this->primaryKey(),
            'date_created' => $this->dateTime()->notNull()->defaultValue(new \yii\db\Expression('NOW()')),
            'name' => $this->string(100)->notNull(),
            'text' => $this->text()->notNull(),
            'active' => $this->tinyInteger()->defaultValue(0),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('guestbook');
    }
}
