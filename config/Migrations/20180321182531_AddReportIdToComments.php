<?php
use Migrations\AbstractMigration;

class AddReportIdToComments extends AbstractMigration
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
        $table = $this->table('comments');
        $table->addColumn('Report_ID', 'integer')
              ->addForeignKey('Report_ID', 'reports', 'Report_ID',
                              ['delete'=>'CASCADE', 'update'=>'CASCADE'])
              ->save();
    }
}
