<?php

use Phinx\Seed\AbstractSeed;

class CommentsTruncator extends AbstractSeed
{
    public function run()
    {

        $comments = $this->table('comments');
        $comments->truncate();

    }
}
