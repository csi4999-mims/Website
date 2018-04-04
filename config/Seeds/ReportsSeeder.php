<?php

use Phinx\Seed\AbstractSeed;

/* +----------------------------+--------------+------+-----+---------+----------------+
   | Field                      | Type         | Null | Key | Default | Extra          |
   +----------------------------+--------------+------+-----+---------+----------------+
   | Report_ID                  | int(11)      | NO   | PRI | NULL    | auto_increment |
   | CaseNumber                 | int(15)      | NO   |     | NULL    |                |
   | status                     | varchar(25)  | NO   |     | On Hold |                |
   | DateCreated                | datetime     | YES  |     | NULL    |                |
   | SubmitterEmail             | varchar(50)  | NO   |     | NULL    |                |
   | FirstName                  | varchar(256) | NO   |     | NULL    |                |
   | LastName                   | varchar(256) | NO   |     | NULL    |                |
   | Gender                     | varchar(256) | NO   |     | NULL    |                |
   | Ethnicity                  | varchar(256) | NO   |     | NULL    |                |
   | EyeColor                   | varchar(256) | NO   |     | NULL    |                |
   | HairColor                  | varchar(256) | NO   |     | NULL    |                |
   | MarksTattoos               | text         | YES  |     | NULL    |                |
   | Weight                     | int(11)      | NO   |     | NULL    |                |
   | DoB                        | date         | NO   |     | NULL    |                |
   | Phone                      | int(11)      | NO   |     | NULL    |                |
   | ReportMiscInfo             | text         | YES  |     | NULL    |                |
   | FamilyFirstName            | text         | YES  |     | NULL    |                |
   | FamilyLastName             | text         | YES  |     | NULL    |                |
   | FamilyGender               | text         | YES  |     | NULL    |                |
   | Relation                   | text         | YES  |     | NULL    |                |
   | FamilyStreet               | text         | YES  |     | NULL    |                |
   | FamilyCity                 | text         | YES  |     | NULL    |                |
   | FamilyState                | text         | YES  |     | NULL    |                |
   | FamilyZip                  | text         | YES  |     | NULL    |                |
   | FamilyPhone                | text         | YES  |     | NULL    |                |
   | FamilyEmail                | text         | YES  |     | NULL    |                |
   | Photo                      | text         | YES  |     | NULL    |                |
   | MiddleName                 | text         | YES  |     | NULL    |                |
   | Alias                      | text         | YES  |     | NULL    |                |
   | MissingEthnicityOther      | text         | YES  |     | NULL    |                |
   | MissingEyeColorOther       | text         | YES  |     | NULL    |                |
   | MissingHairColorOther      | text         | YES  |     | NULL    |                |
   | HeightFeet                 | text         | YES  |     | NULL    |                |
   | HeightInches               | text         | YES  |     | NULL    |                |
   | SeenName                   | text         | YES  |     | NULL    |                |
   | SeenStreet                 | text         | YES  |     | NULL    |                |
   | SeenCity                   | text         | YES  |     | NULL    |                |
   | SeenNumber                 | text         | YES  |     | NULL    |                |
   | SeenState                  | text         | YES  |     | NULL    |                |
   | SeenZip                    | text         | YES  |     | NULL    |                |
   | SeenWhen                   | date         | YES  |     | NULL    |                |
   | SeenNotes                  | varchar(255) | YES  |     | NULL    |                |
   | FamilyMiddleName           | text         | YES  |     | NULL    |                |
   | FamilyEthnicity            | text         | YES  |     | NULL    |                |
   | FamilyEthnicityOther       | text         | YES  |     | NULL    |                |
   | RelationOther              | text         | YES  |     | NULL    |                |
   | WorkplaceName              | text         | YES  |     | NULL    |                |
   | WorkplaceStreet            | text         | YES  |     | NULL    |                |
   | WorkplaceNumber            | text         | YES  |     | NULL    |                |
   | WorkplaceCity              | text         | YES  |     | NULL    |                |
   | WorkplaceState             | text         | YES  |     | NULL    |                |
   | WorkplaceZip               | text         | YES  |     | NULL    |                |
   | WorkplaceStartDate         | date         | YES  |     | NULL    |                |
   | WorkplaceEndDate           | date         | YES  |     | NULL    |                |
   | WorkplaceMisc              | text         | YES  |     | NULL    |                |
   | HangoutName                | text         | YES  |     | NULL    |                |
   | HangoutStreet              | text         | YES  |     | NULL    |                |
   | HangoutNumber              | text         | YES  |     | NULL    |                |
   | HangoutCity                | text         | YES  |     | NULL    |                |
   | HangoutState               | text         | YES  |     | NULL    |                |
   | HangoutZip                 | text         | YES  |     | NULL    |                |
   | HangoutMisc                | text         | YES  |     | NULL    |                |
   | category                   | varchar(255) | NO   |     | none    |                |
   | missing_snapchat_username  | text         | YES  |     | NULL    |                |
   | missing_facebook_username  | text         | YES  |     | NULL    |                |
   | missing_instagram_username | text         | YES  |     | NULL    |                |
   +----------------------------+--------------+------+-----+---------+----------------+
 */

class ReportsSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {

    }
}
