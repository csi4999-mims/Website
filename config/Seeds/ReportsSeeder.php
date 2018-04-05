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
        /* We're going to need the faker library to generate random
           names and places. */
        $faker = Faker\Factory::create();

        /* Then a place to store all the data we create. */
        $data = [];

        /* Let's also get a list of valid email addresses.  These will
           be used to link the report submitter to the users table. */
        $users = $this->fetchAll('SELECT email FROM users');
        foreach ($users as $user) {
            $user_emails[] = $user['email'];
        }

        /* Next, let's loop 20 times to create some users. */
        for ($i = 0; $i < 20; $i++) {

            /* We'll base some other decisions on the gender of the
               person being reported missing, so we'll store that
               first. */
            $data[$i]['Gender'] = $faker->randomElement(['Androgynous', 'Female', 'Male']);

            /* Faker understands 'male', 'female', and null.  We have
               'Male', 'Female', and 'Androgynous'. */
            $gender = strtolower($data[$i]['Gender']);
            if ($gender == 'androgynous') $gender = null;

            /* Choose a first name. */
            $data[$i]['FirstName'] = $faker->firstName($gender);

            /* Not everyone has a middle name.  Make it about
               50/50. */
            $data[$i]['MiddleName'] = $faker->randomElement([
                $faker->firstName($gender),
                null
            ]);

            /* Choose a last name. */
            $data[$i]['LastName'] = $faker->lastName();

            /* Choose an alias, but only for one in every ten
               people. */
            $data[$i]['Alias'] = $faker->randomElement([
                $faker->firstName($gender),
                null, null, null, null, null,
                null, null, null, null, null
            ]);

            /* Choose a date of birth. */
            $data[$i]['DoB'] = $faker->date($format = 'Y-m-d', $max = 'now');

            /* Choose an email.  Although the email in the form
               _looks_ like it would be for the missing person, it is
               stored as 'SubmitterEmail'. */
            $data[$i]['SubmitterEmail'] = $user_emails[mt_rand(0,count($user_emails) - 1)];

            /* Ethnicity */
            $data[$i]['Ethnicity'] = $faker->randomElement([
                'american_indian', 'american_indian',
                'asian', 'asian',
                'african_american', 'african_american',
                'hispanic_latino', 'hispanic_latino',
                'middle_eastern', 'middle_eastern',
                'pacific_islander', 'pacific_islander',
                'white', 'white',
                'other'
            ]);

            if ($data[$i]['Ethnicity'] == 'other') {
                $data[$i]['MissingEthnicityOther'] = $faker->randomElement([
                    'oompa_loompa',
                    'martian'
                ]);
            }

            /* Eye Color */
            $data[$i]['EyeColor'] = $faker->randomElement([
                'amber', 'amber',
                'black', 'black',
                'blue', 'blue',
                'brown', 'brown',
                'green', 'green',
                'grey', 'grey',
                'hazel', 'hazel',
                'other'
            ]);

            /* Eye Color Other */
            if ($data[$i]['EyeColor'] == 'other') {
                $data[$i]['MissingEyeColorOther'] = $faker->colorName();
            }

            /* Hair Color */
            $data[$i]['HairColor'] = $faker->randomElement([
                'auburn', 'auburn',
                'black', 'black',
                'blonde', 'blonde',
                'brown', 'brown',
                'grey', 'grey',
                'red', 'red',
                'white', 'white',
                'other'
            ]);

            /* Hair Color Other */
            if ($data[$i]['HairColor'] == 'other') {
                $data[$i]['MissingHairColorOther'] = $faker->colorName();
            }

            /* Marks/Tattoos */
            $data[$i]['MarksTattoos'] = $faker->randomElement([
                $faker->text(100),
                null, null, null, null, null
            ]);

            /* Weight (lbs) */
            $data[$i]['Weight'] = mt_rand(100, 300);

            /* Height (in) */
            /* Between 4' and 7' tall. */
            $data[$i]['Height'] = mt_rand(48, 84);

        }
        print_r($data);
    }
}
