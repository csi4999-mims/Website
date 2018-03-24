<?php
use Migrations\AbstractMigration;

class AddCategoryToReports extends AbstractMigration
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
        $table->addColumn('category', 'text', [
            'default' => 'none',
            'null' => false,
        ])
              ->update();
    }
}
