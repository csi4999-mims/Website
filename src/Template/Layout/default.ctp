<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'MIMS: The Missing in Michigan System';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('custom.css') ?>
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('bootstrap-theme.css') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <?php
    echo $this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
    echo $this->Html->script([
    'https://code.jquery.com/jquery-1.12.4.min.js',
    'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'
      ]);
      ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
              <h1 class="home_button">
              <?php
              if ($this->request->session()->read('Auth.User')){
                if ($user->get('role') == 'lawenforcement'){
                  echo $this->Html->link("MIMS", array('controller'=>'users','action'=>'homeLawEnforcement'));
                } elseif($user->get('role') == 'thepublic'){
                  echo $this->Html->link("MIMS", array('controller'=>'users','action'=>'homeConcernedPublic'));
                } else{
                echo $this->Html->link("MIMS", array('controller'=>'users','action'=>'home'));
                }
              } else{
                echo $this->Html->link("MIMS", array('controller'=>'users','action'=>'home'));
              }
              ?>
            </h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <li><a href="/reports/report">Submit Report</a></li>
                <li><a href="/users/edit">My Account</a></li>
                <li>
                    <?php if ($this->request->session()->read('Auth.User')){
                      echo $this->Html->link("Logout", array('controller' => 'users', 'action'=> 'logout'));
                    }else{
                      echo $this->Html->link("Login", array('controller' => 'users', 'action'=> 'login'));
                      }
                    ?>
                </li>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>

    </footer>
</body>
</html>
