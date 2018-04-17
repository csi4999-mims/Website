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

        /* Let's get a list of valid email addresses.  These will be
           used to link the report submitter to the users table. */
        $users = $this->fetchAll('SELECT email FROM users');
        foreach ($users as $user) {
            $user_emails[] = $user['email'];
        }

        /* Grab a list of case numbers from the database. */
        $cases = $this->fetchAll('SELECT CaseNumber FROM reports');
        /* Filter the list to just the case numbers. */
        foreach ($cases as $case) $case_numbers[] = $case['CaseNumber'];
        if (defined('case_numbers')) {
            /* If we got something back from the database, let's clean
               it up by removing 0, null, '', and false values (just in
               case). */
            $cases_numbers = array_filter($case_numbers);
            /* If that's all there was, just make it 0. */
            if (empty($case_numbers)) $case_numbers = [0];
        } else {
            /* If there was nothing in the database, just make it
               0. */
            $case_numbers = [0];
        }

        /* Make a list of places where people might be. */
        $places = [

            ['name'   => 'The Jagged Fork',
             'number' => '188',
             'street' => 'Adams Rd',
             'city'   => 'Rochester Hills',
             'state'  => 'MI',
             'zip'    => '48309'],

            ['name'   => '2941 Street Food',
             'number' => '2071',
             'street' => 'N Squirrel Rd',
             'city'   => 'Auburn Hills',
             'state'  => 'MI',
             'zip'    => '48326'],

            ['name'   => 'Oakland Tea House',
             'number' => '3081',
             'street' => 'E Walton Blvd',
             'city'   => 'Auburn Hills',
             'state'  => 'MI',
             'zip'    => '48326'],

            ['name'   => 'Makimoto Sushi Bar & Asian Kitchen',
             'number' => '2741',
             'street' => 'University Dr',
             'city'   => 'Auburn Hills',
             'state'  => 'MI',
             'zip'    => '48326'],

            ['name'   => "P.F. Chang's",
             'number' => '122',
             'street' => 'Adams Rd',
             'city'   => 'Rochester Hills',
             'state'  => 'MI',
             'zip'    => '48309'],

            ['name'   => "Chadd's Bistro",
             'number' => '1838',
             'street' => 'E Auburn Rd',
             'city'   => 'Rochester Hills',
             'state'  => 'MI',
             'zip'    => '48307'],

            ['name'   => 'Carnival Market',
             'number' => '1101',
             'street' => 'E Walton Blvd',
             'city'   => 'Pontiac',
             'state'  => 'MI',
             'zip'    => '48340'],

            ['name'   => 'Burgrz',
             'number' => '3204',
             'street' => 'Walton Blvd',
             'city'   => 'Rochester Hills',
             'state'  => 'MI',
             'zip'    => '48309'],

            ['name'   => '112 Pizzeria Bistro',
             'number' => '2528',
             'street' => 'S Adams Rd',
             'city'   => 'Rochester Hills',
             'state'  => 'MI',
             'zip'    => '48309'],

            ['name'   => '2941 Street Food',
             'number' => '87',
             'street' => 'W Auburn Rd',
             'city'   => 'Rochester Hills',
             'state'  => 'MI',
             'zip'    => '48307']
        ];

        /* Next, let's loop 20 times to create some users. */
        for ($i = 0; $i < 20; $i++) {

            /* Submitter Email */
            $data[$i]['SubmitterEmail'] = $user_emails[mt_rand(0,count($user_emails) - 1)];

            /* We'll base some other decisions on the gender of the
               person being reported missing, so we'll store that
               first. */
            $data[$i]['Gender'] = $faker->randomElement([
                'Androgynous',
                'Female', 'Female', 'Female', 'Female',
                'Male',   'Male',   'Male',   'Male'
            ]);

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
            $data[$i]['DoB'] = $faker->dateTimeBetween($start_date = '-60 years', $end_date = '-2 years')->format('Y-m-d');

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

            /* Last Seen section */
            $last_seen_place = $places[mt_rand(0, count($places) - 1)];
            $data[$i]['SeenName']   = $last_seen_place['name'];
            $data[$i]['SeenStreet'] = $last_seen_place['street'];
            $data[$i]['SeenNumber'] = $last_seen_place['number'];
            $data[$i]['SeenCity']   = $last_seen_place['city'];
            $data[$i]['SeenState']  = $last_seen_place['state'];
            $data[$i]['SeenZip']    = $last_seen_place['zip'];

            /* Date Of Occurrence (Last Seen) */
            $data[$i]['SeenWhen'] = $faker->dateTimeBetween($start_date = '-1 year', $end_date = 'now')->format('Y-m-d');

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

            /* Family/Friend Location */
            $family_place = $places[mt_rand(0, count($places) - 1)];
            $data[$i]['FamilyStreet'] = $family_place['number'] . " " . $family_place['street'];
            $data[$i]['FamilyCity']   = $family_place['city'];
            $data[$i]['FamilyState']  = $family_place['state'];
            $data[$i]['FamilyZip']    = $family_place['zip'];

            /* Missing Person Hangouts */
            $hangout_place = $places[mt_rand(0, count($places) - 1)];
            $data[$i]['HangoutName']   = $hangout_place['name'];
            $data[$i]['HangoutNumber'] = $hangout_place['number'];
            $data[$i]['HangoutStreet'] = $hangout_place['street'];
            $data[$i]['HangoutCity']   = $hangout_place['city'];
            $data[$i]['HangoutState']  = $hangout_place['state'];
            $data[$i]['HangoutZip']    = $hangout_place['zip'];
            $data[$i]['HangoutMisc']   = $faker->randomElement([$faker->text(200), null, null]);

            /* Missing Person Workplace */
            $workplace = $places[mt_rand(0, count($places) - 1)];
            $data[$i]['WorkplaceName']      = $workplace['name'];
            $data[$i]['WorkplaceNumber']    = $workplace['number'];
            $data[$i]['WorkplaceStreet']    = $workplace['street'];
            $data[$i]['WorkplaceCity']      = $workplace['city'];
            $data[$i]['WorkplaceState']     = $workplace['state'];
            $data[$i]['WorkplaceZip']       = $workplace['zip'];
            $data[$i]['WorkplaceMisc']      = $faker->randomElement([$faker->text(200), null, null]);
            $data[$i]['WorkplaceStartDate'] = $faker->date($format = 'Y-m-d', $max = 'now');
            $data[$i]['WorkplaceMisc']      = $faker->randomElement([$faker->text(200), null, null]);
            if ($faker->randomElement('employed', 'employed', 'employed', 'employed',
                                      'employed', 'employed', 'employed', 'employed',
                                      'employed', 'notEmployed') == 'notEmployed') {
                $data[$i]['WorkplaceEndDate'] = $faker->dateTimeBetween($start_date = $data['WorkPlaceStartDate'],
                                                                        $end_date = 'now')->format('Y-m-d');
            }

            /* Determine a status for the report */
            $data[$i]['status'] = $faker->randomElement([
                'In Progress',
                'On Hold',
                'Found'
            ]);

            /* If the status is 'On Hold', assign a case number of
               0. */
            if ($data[$i]['status'] == 'On Hold') {
                $data[$i]['CaseNumber'] = 0;
            } else {
                /* Or assign a legitimate case number.  If that case
                   number is already in the database, keep trying
                   until you get an unused one.  This does _not_ check
                   if we've assigned the case number already within
                   this session. */
                do {
                    $data[$i]['CaseNumber'] = mt_rand(1, 999999999999999);
                } while (in_array($data[$i]['CaseNumber'], $case_numbers));

                /* Also assign a category. */
                $data[$i]['category'] = $faker->randomElement([
                    'none', 'runaway', 'romeo_juliet',
                    'substance_abuser', 'human_trafficking'
                ]);
            }
        } /* End of the for loop. */
        $this->insert('reports', $data);
    }
}
