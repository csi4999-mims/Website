<?php
use Migrations\AbstractMigration;

class AllowNullsInReports extends AbstractMigration
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
        $reports->changeColumn('DateCreated', 'datetime', ['null' => true])
                ->changeColumn('MiddleName', 'text', ['null' => true])
                ->changeColumn('Alias', 'text', ['null' => true])
                ->changeColumn('Alias', 'text', ['null' => true])
                ->changeColumn('MissingEhnicityOther', 'text', ['null' => true])
                ->changeColumn('MissingEyeColorOther', 'text', ['null' => true])
                ->changeColumn('MissingHairColorOther', 'text', ['null' => true])
                ->changeColumn('MarksTattoos', 'text', ['null' => true])
                ->changeColumn('HeightFeet', 'text', ['null' => true])
                ->changeColumn('HeightInches', 'text', ['null' => true])
                ->changeColumn('SocialMediaAccount', 'text', ['null' => true])
                ->changeColumn('ReportMiscInfo', 'text', ['null' => true])
                ->changeColumn('Photo', 'text', ['null' => true])
                ->changeColumn('SeenName', 'text', ['null' => true])
                ->changeColumn('SeenStreet', 'text', ['null' => true])
                ->changeColumn('SeenCity', 'text', ['null' => true])
                ->changeColumn('SeenNumber', 'text', ['null' => true])
                ->changeColumn('SeenState', 'text', ['null' => true])
                ->changeColumn('SeenZip', 'text', ['null' => true])
                ->changeColumn('SeenWhen', 'date', ['null' => true])
                ->changeColumn('SeenNotes', 'string', ['null' => true])
                ->changeColumn('FamilyFirstName', 'text', ['null' => true])
                ->changeColumn('FamilyLastName', 'text', ['null' => true])
                ->changeColumn('FamilyGender', 'text', ['null' => true])
                ->changeColumn('Relation', 'text', ['null' => true])
                ->changeColumn('FamilyStreet', 'text', ['null' => true])
                ->changeColumn('FamilyCity', 'text', ['null' => true])
                ->changeColumn('FamilyState', 'text', ['null' => true])
                ->changeColumn('FamilyZip', 'text', ['null' => true])
                ->changeColumn('FamilyEthnicity', 'text', ['null' => true])
                ->changeColumn('FamilyEthnicityOther', 'text', ['null' => true])
                ->changeColumn('FamilyEmail', 'text', ['null' => true])
                ->changeColumn('FamilyMiddleName', 'text', ['null' => true])
                ->changeColumn('RelationOther', 'text', ['null' => true])
                ->changeColumn('HangoutName', 'text', ['null' => true])
                ->changeColumn('HangoutStreet', 'text', ['null' => true])
                ->changeColumn('HangoutNumber', 'text', ['null' => true])
                ->changeColumn('HangoutCity', 'text', ['null' => true])
                ->changeColumn('HangoutState', 'text', ['null' => true])
                ->changeColumn('FamilyPhone', 'text', ['null' => true])
                ->changeColumn('HangoutZip', 'text', ['null' => true])
                ->changeColumn('HangoutMisc', 'text', ['null' => true])
                ->changeColumn('WorkplaceName', 'text', ['null' => true])
                ->changeColumn('WorkplaceStreet', 'text', ['null' => true])
                ->changeColumn('WorkplaceNumber', 'text', ['null' => true])
                ->changeColumn('WorkplaceCity', 'text', ['null' => true])
                ->changeColumn('WorkplaceState', 'text', ['null' => true])
                ->changeColumn('WorkplaceZip', 'text', ['null' => true])
                ->changeColumn('WorkplaceStartDate', 'date', ['null' => true])
                ->changeColumn('WorkplaceEndDate', 'date', ['null' => true])
                ->changeColumn('WorkplaceMisc', 'text', ['null' => true])
                ->save();
    }

    public function down()
    {
    }

}
