<?php
use Migrations\AbstractMigration;

class RemovePlaceColumnsFromReports extends AbstractMigration
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
         $table = $this->table('reports');
         $table->removeColumn('LastSeen');
         $table->removeColumn('PlaceName');
         $table->removeColumn('PlaceStreet');
         $table->removeColumn('PlaceCity');
         $table->removeColumn('PlaceState');
         $table->removeColumn('PlaceZip');
         $table->removeColumn('PlaceMiscInfo');
         $table->removeColumn('Height');
               $table->save();
     }

     public function down()
     {
         $table = $this->table('reports');
         $table->addColumn('LastSeen', 'string', [
                 'default' => null,
                 'null' => false,
         ]);
         $table->addColumn('PlaceName', 'string', [
                 'default' => null,
                 'null' => false,
         ]);
         $table->addColumn('PlaceStreet', 'string', [
                 'default' => null,
                 'null' => false,
         ]);
         $table->addColumn('PlaceCity', 'string', [
                 'default' => null,
                 'null' => false,
         ]);
         $table->addColumn('PlaceState', 'string', [
                 'default' => null,
                 'null' => false,
         ]);
         $table->addColumn('PLaceZip', 'integer', [
                 'default' => null,
                 'limit' => 5,
                 'null' => false,
         ]);
         $table->addColumn('PlaceMiscInfo', 'string', [
                 'default' => null,
                 'null' => false,
         ]);
         $table->addColumn('Height', 'text', [
                 'default' => null,
                 'null' => false,
         ]);


               $table->update();
     }
}
