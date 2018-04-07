<?php
use Migrations\AbstractMigration;

class AddMissingEmailToReports extends AbstractMigration
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
        $reports = $this->table('reports');
        $reports->addColumn('MissingEmail', 'text', [
            'null' => true,
            'default' => null,
        ]);
    }
}
