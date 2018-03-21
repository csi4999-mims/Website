<?php
use Migrations\AbstractMigration;

class RemoveAndMoficationToReports extends AbstractMigration
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
      // execute()
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `DateCreated` `DateCreated` DATETIME NULL');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `MiddleName` `MiddleName` VARCHAR(256) NULL');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `Alias` `Alias` VARCHAR(256) NULL');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `MissingEhnicityOther` `MissingEhnicityOther` VARCHAR(256) NULL');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `MissingEyeColorOther` `MissingEyeColorOther` VARCHAR(256) NULL');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `MissingHairColorOther` `MissingHairColorOther` VARCHAR(256) NULL');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `MarksTattoos` `MarksTattoos` VARCHAR(256) NULL');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `HeightFeet` `HeightFeet` VARCHAR(256) NULL');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `HeightInches` `HeightInches` VARCHAR(256) NULL');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `SocialMediaAccount` `SocialMediaAccount` VARCHAR(256) NULL');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `ReportMiscInfo` `ReportMiscInfo` TEXT NULL');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `Photo` `Photo` VARCHAR(256) NULL');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `SeenName` `SeenName` VARCHAR(256) NULL');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `SeenStreet` `SeenStreet` VARCHAR(20) NULL');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `SeenCity` `SeenCity` VARCHAR(20) NULL ');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `SeenNumber` `SeenNumber` VARCHAR(10) NULL');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `SeenState` `SeenState` VARCHAR(2) NULL');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `SeenZip` `SeenZip` VARCHAR(6) NULL');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `SeenWhen` `SeenWhen` DATE NULL');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `SeenNotes` `SeenNotes` TINYTEXT NULL ');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `FamilyFirstName` `FamilyFirstName` VARCHAR(256) NULL');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `FamilyLastName` `FamilyLastName` VARCHAR(256) NULL ');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `FamilyGender` `FamilyGender` VARCHAR(256) NULL ');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `Relation` `Relation` VARCHAR(256) NULL ');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `FamilyStreet` `FamilyStreet` VARCHAR(256) NULL ');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `FamilyCity` `FamilyCity` VARCHAR(256) NULL ');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `FamilyState` `FamilyState` VARCHAR(256) NULL ');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `FamilyZip` `FamilyZip` VARCHAR(5) NULL ');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `FamilyEthnicity` `FamilyEthnicity` VARCHAR(256) NULL ');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `FamilyEthnicityOther` `FamilyEthnicityOther` VARCHAR(256) NULL');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `FamilyEmail` `FamilyEmail` TEXT NULL ');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `FamilyMiddleName` `FamilyMiddleName` VARCHAR(256) NULL ');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `RelationOther` `RelationOther` VARCHAR(256) NULL');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `HangoutName` `HangoutName` VARCHAR(256) NULL ');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `HangoutStreet` `HangoutStreet` VARCHAR(256) NULL ');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `HangoutNumber` `HangoutNumber` VARCHAR(256) NULL');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `HangoutCity` `HangoutCity` VARCHAR(256) NULL ');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `HangoutState` `HangoutState` VARCHAR(2) NULL');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `FamilyPhone` `FamilyPhone` VARCHAR(11) NULL ');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `HangoutZip` `HangoutZip` VARCHAR(5) NULL');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `HangoutMisc` `HangoutMisc` TEXT NULL');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `WorkplaceName` `Workplacename` VARCHAR(256) NULL');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `WorkplaceStreet` `WorkplaceStreet` VARCHAR(256) NULL ');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `WorkplaceNumber` `WorkplaceNumber` VARCHAR(256) NULL ');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `WorkplaceCity` `WorkplaceCity` VARCHAR(256) NULL ');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `WorkplaceState` `WorkplaceState` VARCHAR(2) NULL');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `WorkplaceZip` `WorkplaceZip` VARCHAR(5) NULL');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `WorkplaceStartDate` `WorkplaceStartDate` DATE NULL ');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `WorkplaceEndDate` `WorkplaceEndDate` DATE NULL');
             $this->execute('ALTER TABLE `mims`.`reports`
               CHANGE COLUMN `WorkplaceMisc` `WorkplaceMisc` TEXT NULL');




//       ALTER TABLE `mims`.`reports`
// CHANGE COLUMN `DateCreated` `DateCreated` DATETIME NULL ,
// CHANGE COLUMN `MiddleName` `MiddleName` VARCHAR(256) NULL ,
// CHANGE COLUMN `Alias` `Alias` VARCHAR(256) NULL ;
// CHANGE COLUMN `MissingEhnicityOther` `MissingEhnicityOther` VARCHAR(256) NULL ;
// CHANGE COLUMN `MissingEyeColorOther` `MissingEyeColorOther` VARCHAR(256) NULL ;
// CHANGE COLUMN `MissingHairColorOther` `MissingHairColorOther` VARCHAR(256) NULL ;
// CHANGE COLUMN `MarksTattoos` `MarksTattoos` VARCHAR(256) NULL ;
// CHANGE COLUMN `HeightFeet` `HeightFeet` VARCHAR(256) NULL ;
// CHANGE COLUMN `HeightInches` `HeightInches` VARCHAR(256) NULL ;
// CHANGE COLUMN `SocialMediaAccount` `SocialMediaAccount` VARCHAR(256) NULL ;
// CHANGE COLUMN `ReportMiscInfo` `ReportMiscInfo` TEXT NULL ;
// CHANGE COLUMN `Photo` `Photo` VARCHAR(256) NULL ;
// CHANGE COLUMN `SeenName` `SeenName` VARCHAR(256) NULL ;
// CHANGE COLUMN `SeenStreet` `SeenStreet` VARCHAR(20) NULL ;
// CHANGE COLUMN `SeenCity` `SeenCity` VARCHAR(20) NULL ;
// CHANGE COLUMN `SeenNumber` `SeenNumber` VARCHAR(10) NULL ;
// CHANGE COLUMN `SeenState` `SeenState` VARCHAR(2) NULL ;
// CHANGE COLUMN `SeenZip` `SeenZip` VARCHAR(6) NULL ;
// CHANGE COLUMN `SeenWhen` `SeenWhen` DATE NULL ;
// CHANGE COLUMN `SeenNotes` `SeenNotes` TINYTEXT NULL ;
// CHANGE COLUMN `FamilyFirstName` `FamilyFirstName` VARCHAR(256) NULL ;
// CHANGE COLUMN `FamilyLastName` `FamilyLastName` VARCHAR(256) NULL ;
// CHANGE COLUMN `FamilyGender` `FamilyGender` VARCHAR(256) NULL ;
// CHANGE COLUMN `Relation` `Relation` VARCHAR(256) NULL ;
// CHANGE COLUMN `FamilyStreet` `FamilyStreet` VARCHAR(256) NULL ;
// CHANGE COLUMN `FamilyCity` `FamilyCity` VARCHAR(256) NULL ;
// CHANGE COLUMN `FamilyState` `FamilyState` VARCHAR(256) NULL ;
// CHANGE COLUMN `FamilyZip` `FamilyZip` VARCHAR(5) NULL ;
// CHANGE COLUMN `FamilyEthnicity` `FamilyEthnicity` VARCHAR(256) NULL ;
// CHANGE COLUMN `FamilyEthnicityOther` `FamilyEthnicityOther` VARCHAR(256) NULL ;
// CHANGE COLUMN `FamilyEmail` `FamilyEmail` TEXT NULL ;
// CHANGE COLUMN `FamilyMiddleName` `FamilyMiddleName` VARCHAR(256) NULL ;
// CHANGE COLUMN `RelationOther` `RelationOther` VARCHAR(256) NULL ;
// CHANGE COLUMN `HangoutName` `HangoutName` VARCHAR(256) NULL ;
// CHANGE COLUMN `HangoutStreet` `HangoutStreet` VARCHAR(256) NULL ;
// CHANGE COLUMN `HangoutNumber` `HangoutNumber` VARCHAR(256) NULL ;
// CHANGE COLUMN `HangoutCity` `HangoutCity` VARCHAR(256) NULL ;
// CHANGE COLUMN `HangoutState` `HangoutState` VARCHAR(2) NULL ;
// CHANGE COLUMN `FamilyPhone` `FamilyPhone` VARCHAR(11) NULL ;
// CHANGE COLUMN `HangoutZip` `HangoutZip` VARCHAR(5) NULL ;
// CHANGE COLUMN `HangoutMisc` `HangoutMisc` TEXT NULL ;
// CHANGE COLUMN `WorkplaceName` `Workplacename` VARCHAR(256) NULL ;
// CHANGE COLUMN `WorkplaceStreet` `WorkplaceStreet` VARCHAR(256) NULL ;
// CHANGE COLUMN `WorkplaceNumber` `WorkplaceNumber` VARCHAR(256) NULL ;
// CHANGE COLUMN `WorkplaceCity` `WorkplaceCity` VARCHAR(256) NULL ;
// CHANGE COLUMN `WorkplaceState` `WorkplaceState` VARCHAR(2) NULL ;
// CHANGE COLUMN `WorkplaceZip` `WorkplaceZip` VARCHAR(5) NULL ;
// CHANGE COLUMN `WorkplaceStartDate` `WorkplaceStartDate` DATE NULL ;
// CHANGE COLUMN `WorkplaceEndDate` `WorkplaceEndDate` DATE NULL ;
// CHANGE COLUMN `WorkplaceMisc` `WorkplaceMisc` TEXT NULL ;






    }
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
