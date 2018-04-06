<?php

use Phinx\Seed\AbstractSeed;

class ReportsTruncator extends AbstractSeed
{
    public function run()
    {
        /* If you're deleting all the reports, then there's no reason
           to still have comments lying around. */
        $comments = $this->table('comments');
        $comments->truncate();

        $reports = $this->table('reports');
        $reports->truncate();
    }
}
