<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */

//function to initialize built-in components of cakePHP
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'email',
                        'password' => 'password'
                    ]
                ]
            ],
            'loginAction' => [
                'controller' => 'Users',
                'action' => 'login'
            ],
             // If unauthorized, return them to page they were just on
            'unauthorizedRedirect' => $this->referer()
        ]);
        /*
         * Enable the following components for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
    }

//bootstrap $helpers
public $helpers = [
    'Form' => [
        'className' => 'Bootstrap.Form'
    ],
    'Html' => [
        'className' => 'Bootstrap.Html'
    ],
    'Modal' => [
        'className' => 'Bootstrap.Modal'
    ],
    'Navbar' => [
        'className' => 'Bootstrap.Navbar'
    ],
    'Paginator' => [
        'className' => 'Bootstrap.Paginator'
    ],
    'Panel' => [
        'className' => 'Bootstrap.Panel'
    ]
];

//function to allow people to only access the login page and add(register) page if not logged in
	public function beforeFilter(Event $event){
		parent::beforeFilter($event);
    //determines which pages the user can access when not logged in
		$this->Auth->allow(['home','add','login','addle','loginle']);
	}
}
