<?php
use Migrations\AbstractMigration;

class RemoveStatusFromUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function up()
    {
        $table = $this->table('users');
        $table->removeColumn('status')
              ->save();
    }

    public function down()
    {
        $table = $this->table('users');
        $table->addColumn('status', 'boolean', [
                'default' => null,
                'limit' => null,
                'null' => false,
        ])
              ->update();
    }
}
