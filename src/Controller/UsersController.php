<?php
namespace App\Controller;
use App\Controller\AppController;
class UsersController extends AppController{

//built in function of cakePHP
    public $paginate = array(
        'limit' => 25,
        'conditions' => array('status' => '1'),
        'order' => array('User.username' => 'asc' )
    );

//function to render home.ctp
//login needs to be added to this for certain home page features
    public function home() {
	$this->render();
    }

    public function view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $this->User->findById($id));
    }

//function used to register a new user
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            // Prior to 3.4.0 $this->request->data() was used.
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'login']);
            }else{
                $this->Flash->error(__('Unable to add the user.'));
            }
        }
        $this->set('user', $user);
    }

//function used to edit a users information
//login needs to be added to pull in the current users info
    public function edit() {
        $this->loadComponent('Auth');

$user =$this->Users->get($this->Auth->user('id'));
        if (!empty($this->request->data)) {
            $user = $this->Users->patchEntity($user, [
                    'oldpass'  => $this->request->data['oldpass'],
                    'password'      => $this->request->data['newpass'],
                    'newpass'     => $this->request->data['newpass'],
                    'confpass'     => $this->request->data['confpass']
                ],
                ['validate' => 'password']
            );
            if ($this->Users->save($user)) {
                $this->Flash->success('The password is successfully changed');
                $this->redirect('/index');
            } else {
                $this->Flash->error('There was an error during the save!');
            }
        }
        $this->set('user',$user);
    }

//function to delete a users account
//logic needs to be added
//UI features for delete need to be added
    public function delete($id = null) {

    }

//function to reactivate deleted account
//logic needs to be added 
//dont even know if we want to use this
    public function activate($id = null) {

    }

//function to handle login functionality
    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect(array('action' => 'home'));
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }

//function to handle logout functionality
    public function logout() {
        return $this->redirect($this->Auth->logout());
    }
}


//function for changing passwords

   /* public function edit()
    {
        $user =$this->Users->get($this->Auth->user('id'));
        if (!empty($this->request->data)) {
            $user = $this->Users->patchEntity($user, [
                    'oldpass'  => $this->request->data['oldpass'],
                    'password'      => $this->request->data['newpass'],
                    'newpass'     => $this->request->data['newpass'],
                    'confpass'     => $this->request->data['confpass']
                ],
                ['validate' => 'password']
            );
            if ($this->Users->save($user)) {
                $this->Flash->success('The password is successfully changed');
                $this->redirect('/index');
            } else {
                $this->Flash->error('There was an error during the save!');
            }
        }
        $this->set('user',$user);
    }*/

/*public function changePassword()
    {
        $user = $this->Users->get($this->Auth->user('id'));
        
        if(!empty($this->request->data))
        {
            $user = $this->Users->patchEntity($user, [
                    'oldpass'      => $this->request->data['oldpass'],
                    'password'          => $this->request->data['newpass'],
                    'newpass'      => $this->request->data['newpass'],
                    'confpass'  => $this->request->data['confpass']
                ],
                    ['validate' => 'password']
                
            );
            
            if($this->Users->save($user))
            {
                $this->Flash->success('Your password has been changed successfully');
                //Email code
                $this->redirect(['action'=>'view']);
            }
            else
            {
                $this->Flash->error('Error changing password. Please try again!');
            }
            
        }
        
        $this->set('user',$user);
    }*/
