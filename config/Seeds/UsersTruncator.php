<?php

use Phinx\Seed\AbstractSeed;

class UsersTruncator extends AbstractSeed
{
    public function run()
    {
        $users = $this->table('users');
        $users->truncate();
    }
}
