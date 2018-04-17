<?php
use Migrations\AbstractMigration;

class AddFieldsToReport extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('reports');
        $table->addColumn('LastSeen', 'string', [
            'limit' => 255,
        ]);
        $table->addColumn('photo', 'string', [
            'limit' => 255,
        ]);
        $table->update();
    }
}
