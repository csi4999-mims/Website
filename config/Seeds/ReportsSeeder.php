<?php

use Phinx\Seed\AbstractSeed;

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

            /* Submitter Email */
            $data[$i]['SubmitterEmail'] = $user_emails[mt_rand(0,count($user_emails) - 1)];

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

            /* Missing Person's Email */
            $data[$i]['MissingEmail'] = $faker->email();

            /* Phone */
            $data[$i]['Phone'] = (string)mt_rand(1000000000, 9999999999);

            /* Ethnicity */
            $data[$i]['Ethnicity'] = $faker->randomElement([
                'american_indian',  'american_indian',
                'asian',            'asian',
                'african_american', 'african_american',
                'hispanic_latino',  'hispanic_latino',
                'middle_eastern',   'middle_eastern',
                'pacific_islander', 'pacific_islander',
                'white',            'white',
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
                'blue',  'blue',
                'brown', 'brown',
                'green', 'green',
                'grey',  'grey',
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
                'black',  'black',
                'blonde', 'blonde',
                'brown',  'brown',
                'grey',   'grey',
                'red',    'red',
                'white',  'white',
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

            /* Height (ft) */
            /* Between 4' and 7' tall. */
            $data[$i]['HeightFeet'] = mt_rand(4, 7);

            /* Height (in) */
            $data[$i]['HeightInches'] = mt_rand(0, 11);

            /* Sochmeeds */
            $accounts = ['missing_facebook_username',
                         'missing_twitter_username',
                         'missing_snapchat_username',
                         'missing_instagram_username'];

            foreach ($accounts as $account) {
                $data[$i][$account] = $faker->randomElement([
                    $faker->userName(),
                    null
                ]);
            }

            /* Additional Information */
            $data[$i]['ReportMiscInfo'] = $faker->randomElement([
                $faker->text(200),
                null, null
            ]);

            /* Name of place last seen (Last Seen) */
            $data[$i]['SeenName'] = $faker->word();

            /* Street Name (Last Seen) */
            $data[$i]['SeenStreet'] = $faker->streetName();

            /* Address Number (Last Seen) */
            $data[$i]['SeenNumber'] = mt_rand(10,99999);

            /* City (Last Seen) */
            $data[$i]['SeenCity'] = $faker->city();

            /* State (Last Seen) */
            $data[$i]['SeenState'] = $faker->randomElement([
                $faker->state(),
                $faker->stateAbbr()
            ]);

            /* Zip (Last Seen) */
            $data[$i]['SeenZip'] = mt_rand(00001,99999);

            /* Date Of Occurrence (Last Seen) */
            $data[$i]['SeenWhen'] = $faker->date($format = 'Y-m-d', $max = 'now');

            /* Additional Information (Last Seen) */
            $data[$i]['SeenNotes'] = $faker->text($maxNbChars = 200);

            /* Missing Person Family/Friend Information */

            /* Gender */
            $data[$i]['FamilyGender'] = $faker->randomElement(['Female', 'Male']);
            $family_gender = strtolower($data[$i]['FamilyGender']);

            /* First Name (Family/Friend) */
            $data[$i]['FamilyFirstName'] = $faker->firstName($gender);

            /* Middle Name (Family/Friend) */
            $data[$i]['FamilyMiddleName'] = $faker->randomElement([
                $faker->firstName($gender),
                null
            ]);

            /* Last Name (Family/Friend) */
            $data[$i]['FamilyLastName'] = $faker->lastName();

            /* Phone (Family/Friend) */
            $data[$i]['FamilyPhone'] = (string)mt_rand(1000000000, 9999999999);

            /* Email (Family/Friend) */
            $data[$i]['FamilyEmail'] = $faker->email();

            /* Ethnicity (Family/Friend) */
            $data[$i]['FamilyEthnicity'] = $faker->randomElement([
                'american_indian',  'american_indian',
                'asian',            'asian',
                'african_american', 'african_american',
                'hispanic_latino',  'hispanic_latino',
                'middle_eastern',   'middle_eastern',
                'pacific_islander', 'pacific_islander',
                'white',            'white',
                'other'
            ]);

            if ($data[$i]['FamilyEthnicity'] == 'other') {
                $data[$i]['FamilyEthnicityOther'] = $faker->randomElement([
                    'oompa_loompa',
                    'martian'
                ]);
            }

            /* Relation to Missing (Friend/Family) */
            $data[$i]['Relation'] = $faker->randomElement([
                'Mother',   'Mother',
                'Father',   'Father',
                'Daughter', 'Daughter',
                'Son',      'Son',
                'Sister',   'Sister',
                'Brother',  'Brother',
                'Aunt',     'Aunt',
                'Uncle',    'Uncle',
                'Niece',    'Niece',
                'Nephew',   'Nephew',
                'Cousin',   'Cousin',
                'Friend',   'Friend',
                'Other'
            ]);

            /* Relation Other (Friend/Family) */
            if ($data[$i]['Relation'] == 'Other') {
                $data[$i]['RelationOther'] = $faker->randomElement([
                    'Wife', 'Husband', 'Girlfriend', 'Boyfriend',
                    'Spouse', null, null
                ]);
            }

            /* Street (Family/Friend) */
            $data[$i]['FamilyStreet'] = $faker->streetName();

            /* City (Family/Friend) */
            $data[$i]['FamilyCity'] = $faker->city();

            /* State (Family/Friend) */
            $data[$i]['FamilyState'] = $faker->randomElement([
                $faker->state(),
                $faker->stateAbbr()
            ]);

            /* Zip (Family/Friend) */
            $data[$i]['FamilyZip'] = mt_rand(00001,99999);

            /* Missing Person Hangouts */

            /* Hangout Name */
            $data[$i]['HangoutName'] = $faker->text($maxNbChars = 30);

            /* Street Name (Hangout) */
            $data[$i]['HangoutStreet'] = $faker->streetName();

            /* Address Number (Hangout) */
            $data[$i]['HangoutNumber'] = mt_rand(10,99999);

            /* City (Hangout) */
            $data[$i]['HangoutCity'] = $faker->city();

            /* State (Hangout) */
            $data[$i]['HangoutState'] = $faker->randomElement([
                $faker->state(),
                $faker->stateAbbr()
            ]);

            /* Zip (Hangout) */
            $data[$i]['HangoutZip'] = mt_rand(00001,99999);

            /* Additional Information (Hangout) */
            $data[$i]['HangoutMisc'] = $faker->randomElement([
                $faker->text(200),
                null, null
            ]);

            /* Missing Person Workplace */

            /* Workplace Name */
            $data[$i]['Workplacename'] = $faker->text($maxNbChars = 30);

            /* Street Name (Workplace) */
            $data[$i]['WorkplaceStreet'] = $faker->streetName();

            /* Address Number (Workplace) */
            $data[$i]['WorkplaceNumber'] = mt_rand(10,99999);

            /* City (Workplace) */
            $data[$i]['WorkplaceCity'] = $faker->city();

            /* State (Workplace) */
            $data[$i]['WorkplaceState'] = $faker->randomElement([
                $faker->state(),
                $faker->stateAbbr()
            ]);

            /* Zip (Workplace) */
            $data[$i]['WorkplaceZip'] = mt_rand(00001,99999);

            /* Started Working */
            $data[$i]['WorkplaceStartDate'] = $faker->date($format = 'Y-m-d', $max = 'now');

            /* Stopped Working */
            $data[$i]['WorkplaceEndDate'] = $faker->date($format = 'Y-m-d', $max = 'now');

            /* Additional Information (Workplace) */
            $data[$i]['WorkplaceMisc'] = $faker->randomElement([
                $faker->text(200),
                null, null
            ]);

            /* Determine a status for the report */
            $data[$i]['status'] = $faker->randomElement([
                'In Progress',
                'On Hold',
                'Found'
            ]);

            /* Grab a list of case numbers from the database. */
            $case_numbers = $this->fetchAll('SELECT CaseNumber FROM reports');
            foreach ($case_numbers as $case_number) {
                $my_case_numbers[] = $case_number['CaseNumber'];
            }

            /* If the case is marked as 'In Progress' or 'Found' ... */
            if ($data[$i]['status'] == 'In Progress' || $data[$i]['status'] == 'Found') {
                /* ... then assign a case number.  If that case number
                   is already in the database, keep trying until you
                   get an unused one.  This does _not_ check if we've
                   assigned the case number already within this
                   session. */
                do {
                    $data[$i]['CaseNumber'] = mt_rand(1, 999999999999999);
                } while (in_array($data[$i]['CaseNumber'], $my_case_numbers));
            }
        }
        $this->insert('reports', $data);
    }
}
