<?php
use Migrations\AbstractMigration;

class ExpandSocialMediaAccountsInReports extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */

    public function up()
    {
        $reports = $this->table('reports');
        $reports
            ->removeColumn('SocialMediaAccount')
            ->addColumn('missing_facebook_username', 'text', [
                'null' => true,
                'default' => null,
            ])
            ->addColumn('missing_instagram_username', 'text', [
                'null' => true,
                'default' => null,
            ])
            ->addColumn('missing_snapchat_username', 'text', [
                'null' => true,
                'default' => null,
            ])
            ->addColumn('missing_twitter_username', 'text', [
                'null' => true,
                'default' => null,
            ])
            ->save();
    }

    public function down()
    {
        $reports = $this->table('reports');

        $reports
            ->removeColumn('missing_facebook_username')
            ->removeColumn('missing_instagram_username')
            ->removeColumn('missing_twitter_username')
            ->addColumn('SocialMediaAccount', 'text', [
                'null' => true,
                'default' => null,
            ])
            ->save();
    }

}
