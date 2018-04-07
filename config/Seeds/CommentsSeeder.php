<?php

use Phinx\Seed\AbstractSeed;

class CommentsSeeder extends AbstractSeed
{
    public function run()
    {
        $faker = Faker\Factory::create();

        /* Get a list of valid user addresses. */
        $users = $this->fetchAll('SELECT email FROM users');
        foreach ($users as $user) {
            $user_emails[] = $user['email'];
        }

        /* Get a list of valid report id's. */
        $reports = $this->fetchAll('SELECT Report_ID FROM reports');
        foreach ($reports as $report) {
            $report_ids[] = $report['Report_ID'];
        }

        /* Make a place to store the data we create. */
        $data = [];

        /* Make 20 comments on various reports. */
        for ($i = 0; $i < 20; $i++) {

            $data[$i]['description'] = $faker->paragraph(
                $nbSentences = $faker->numberBetween(2,5),
                $variableNbSentences = true
            );

            $data[$i]['email'] = $faker->randomElement($user_emails);

            $data[$i]['Report_ID'] = $faker->randomElement($report_ids);

        }

        $this->insert('comments', $data);
    }
}
