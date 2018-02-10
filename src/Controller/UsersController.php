<?php
namespace App\Controller;
use App\Controller\AppController;
use App\Controller\ReportsController;
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
//law enforcement home page
    public function homeLawEnforcement() {
      //Load the user model
      $user =$this->Users->get($this->Auth->user('id'));
      $this->set('user',$user);
      //load the report model
      $this->loadModel('Reports');
      //get all rows in reports table in db
      $reports = $this->Reports
        ->find()
        //grab all of the rows in the reports table in db
        ->where(['Report_ID >=' => 0])
        ->toArray();
      //set report model
      $this->set('reports', $reports);
    }

//concerned public home page
    public function homeConcernedPublic() {
      //these two lines of code load the Users model to be used in the view
        $user =$this->Users->get($this->Auth->user('id'));
        $this->set('user',$user);
    }

//function used to register a new user
    public function add()
    {
      //creates a new User entity (model)
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            //grab the data from the form and set the data to the user model
            $user = $this->Users->patchEntity($user, $this->request->getData());
            //save the users data
            if ($this->Users->save($user)) {
              //display success message
                $this->Flash->success(__('The user has been saved.'));
                //redirect the user to the login page
                return $this->redirect(['action' => 'login']);
            }
            else{
              //display error message
              $this->Flash->error(__('Unable to add the user.'));
            }
        }
        //set the user model
        $this->set('user', $user);
    }

//function used to edit a users information
//login needs to be added to pull in the current users info
    public function edit() {
        /*$this->loadComponent('Auth');*/
        
        $this->set(compact('user'));
        $user =$this->Users->get($this->Auth->user('id'));
        
        if (!empty($this->request->data)) {
            $user = $this->Users->patchEntity($user, [
                    'oldpass'  => $this->request->data['oldpass'],
                    'password'      => $this->request->data['newpass'],
                    'newpass'     => $this->request->data['newpass'],
                    'confpass'     => $this->request->data['confpass']
                ],
                ['validate' => 'edit']
            );
            if ($this->Users->save($user)) {
                $this->Flash->success('The password is successfully changed');
            } else {
                $this->Flash->error('There was an error during the save!');
            }
        }
        
        if(!empty($this->request->data)) {
            $user = $this->Users->patchEntity($user, [
                'email' => $this->request->data['newemail'],
            ]);
            if ($this->Users->save($user)) {
                $this->Flash->success('The email is successfully changed');
            } else {
                $this->Flash->error('Email was not saved');
            }
        }
        
        if(!empty($this->request->data)) {
            $user = $this->Users->patchEntity($user, [
                'phone' => $this->request->data['newphone'],
                ]);
            if ($this->Users->save($user)) {
                $this->Flash->success('The Phone is successfully changed');
            } else {
                $this->Flash->error('Phone was not saved');
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
          //identify if the user is in the databse
            $user = $this->Auth->identify();
            if ($user) {
              //set the user model based on the login info
                $this->Auth->setUser($user);
                if ( $user['role'] == 'thepublic'){
                  return $this->redirect(array('action' => 'home_concerned_public'));
                }
                elseif ( $user['role'] == 'lawenforcement'){
                  return $this->redirect(array('action' => 'home_law_enforcement'));
                }
                else {
                  return $this->redirect(array('action' => 'login'));
                }
            }
            else{
              //display an error message
                $this->Flash->error(__('Invalid username or password, try again'));
            }
        }
    }

//function to handle logout functionality
    public function logout() {
        return $this->redirect($this->Auth->logout());
    }
}

