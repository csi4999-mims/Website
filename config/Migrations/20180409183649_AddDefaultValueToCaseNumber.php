<?php
use Migrations\AbstractMigration;

class AddDefaultValueToCaseNumber extends AbstractMigration
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
      $reports = $this->table('reports');
      $reports->changeColumn('CaseNumber', 'integer', ['default' => 0])
      ->save();
    }
    public function down(){
      $reports = $this->table('reports');
      $reports->changeColumn('CaseNumber', 'integer', ['default' => null])
      ->save();

    }
}
