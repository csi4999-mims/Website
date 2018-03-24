<?php
use Migrations\AbstractMigration;

class AddFieldsToReports extends AbstractMigration
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
        $table->addColumn('MiddleName', 'string', [
            'limit' => 256,
        ]);
        $table->addColumn('Alias', 'string', [
            'limit' => 256,
        ]);
        $table->addColumn('MissingEhnicityOther', 'string', [
            'limit' => 256,
        ]);
        $table->addColumn('MissingEyeColorOther', 'string', [
            'limit' => 256,
        ]);
        $table->addColumn('MissingHairColorOther', 'string', [
            'limit' => 256,
        ]);
        $table->addColumn('HeightFeet', 'integer', [
            'limit' => 256,
        ]);
        $table->addColumn('HeightInches', 'integer', [
            'limit' => 256,
        ]);
        $table->addColumn('SeenName', 'string', [
            'limit' => 256,
        ]);
        $table->addColumn('SeenStreet', 'string', [
            'limit' => 20,
        ]);
        $table->addColumn('SeenCity', 'string', [
            'limit' => 20,
        ]);
        $table->addColumn('SeenNumber', 'string', [
            'limit' => 10,
        ]);
        $table->addColumn('SeenState', 'string', [
            'limit' => 2,
        ]);
        $table->addColumn('SeenZip', 'string', [
            'limit' => 6,
        ]);
        $table->addColumn('SeenWhen', 'date', [

        ]);
        $table->addColumn('SeenNotes', 'text', [
            'limit' => 256,
        ]);
        $table->addColumn('FamilyMiddleName', 'string', [
            'limit' => 256,
        ]);
        $table->addColumn('FamilyEthnicity', 'string', [
            'limit' => 256,
        ]);
        $table->addColumn('FamilyEthnicityOther', 'string', [
            'limit' => 256,
        ]);
        $table->addColumn('RelationOther', 'string', [
            'limit' => 256,
        ]);
        $table->addColumn('WorkplaceName', 'string', [
            'limit' => 256,
        ]);$table->addColumn('WorkplaceStreet', 'string', [
            'limit' => 256,
        ]);
        $table->addColumn('WorkplaceNumber', 'string', [
            'limit' => 256,
        ]);
        $table->addColumn('WorkplaceCity', 'string', [
            'limit' => 256,
        ]);
        $table->addColumn('WorkplaceState', 'string', [
            'limit' => 2,
        ]);
        $table->addColumn('WorkplaceZip', 'string', [
            'limit' => 5,
        ]);
        $table->addColumn('WorkplaceStartDate', 'date', [

        ]);
        $table->addColumn('WorkplaceEndDate', 'date', [

        ]);
        $table->addColumn('WorkplaceMisc', 'text', [

        ]);

        $table->addColumn('HangoutName', 'string', [
            'limit' => 256,
        ]);$table->addColumn('HangoutStreet', 'string', [
            'limit' => 256,
        ]);
        $table->addColumn('HangoutNumber', 'string', [
            'limit' => 256,
        ]);
        $table->addColumn('HangoutCity', 'string', [
            'limit' => 256,
        ]);
        $table->addColumn('HangoutState', 'string', [
            'limit' => 2,
        ]);
        $table->addColumn('HangoutZip', 'string', [
            'limit' => 5,
        ]);
        $table->addColumn('HangoutMisc', 'text');

        $table->update();
    }
}
