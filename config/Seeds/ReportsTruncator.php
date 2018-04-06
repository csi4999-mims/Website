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

        /* 'reports' cannot be truncated due to the foreign key
           constraint in 'comments'.  This does the same thing. */
        $this->execute('DELETE FROM reports');
    }
}
