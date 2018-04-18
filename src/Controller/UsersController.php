<?php
namespace App\Controller;
use App\Controller\AppController;
use App\Controller\ReportsController;


class UsersController extends AppController{

  //adding google maps helper
  public $helpers = array('GoogleMap');

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
    public function homeLawEnforcement($Report_ID = null) {
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
      $TableReports = $this->Reports
        ->find()
        //grab all of the rows in the reports table in db
        ->where(['status !=' => 'Found'])
        ->toArray();
      //set report model
      $this->set('reports', $reports);
      $this->set('TableReports', $TableReports);
    }

//concerned public home page
    public function homeConcernedPublic() {
      //Load the user model
      $user =$this->Users->get($this->Auth->user('id'));
      $this->set('user',$user);
      //load the report model
      $this->loadModel('Reports');
      //get all rows in reports table in db
      $report = $this->Reports
        ->find()
        ->where(['status !=' => 'On Hold'])
        ->toArray();
      //set report model
      //$this->set('report',$report);
      $this->set('reports', $report);
      $myreport = $this->Reports
        ->find()
        ->where(['SubmitterEmail =' => $user->get('email')])
        ->where(['status !=' => 'Found'])
        ->toArray();
      //set report model
      //$this->set('report',$report);
      $this->set('myreports', $myreport);

      //Load the comment model
      $this->loadModel('Comments');
      $comment = $this->Comments
        ->find()
        ->where(['id >=' => '0'])
        ->toArray();
      $this->set('comments', $comment);

      //create new comment
      $this->loadModel('Comments');
      $comment = $this->Comments->newEntity();
      if ($this->request->is('post')) {
          // Prior to 3.4.0 $this->request->data() was used.
          $comment = $this->Comments->patchEntity($comment, $this->request->getData());
          if ($this->Comments->save($comment)) {
              $this->Flash->success(__('The comment has been saved.'));
          }else{
              $this->Flash->error(__('Unable to add the comment.'));
          }

      }
      $this->set('comment', $comment);
    }

//function used to register a new user
    public function add()
    {
        //creates a new User entity (model)
        $user = $this->Users->newEntity();

        if ($this->request->is('post')) {

            // Prior to 3.4.0 $this->request->data() was used.
            $user = $this->Users->patchEntity($user, $this->request->getData());

            if ($this->Users->save($user)) {
                //display success message
                $this->Flash->success(__('Your account has been created. Please log in.'));
                //redirect the user to the login page
                return $this->redirect(['action' => 'login']);

                //this is the code to check if there are any errors from the UsersTable.php
                //If there are, it lists out all errors
            } elseif ($user->errors()) {
                $error_msg = [];
                foreach ($user->errors() as $errors) {
                    if (is_array($errors)) {
                        foreach ($errors as $error) {
                            $error_msg[] = $error;
                        }
                    } else {
                        $error_msg[] = $errors;
                    }
                }
                if (!empty($error_msg)) {
                    $this->Flash->error(
                        __("Please fix the following error(s):".implode("\n \r", $error_msg))
                    );
                }
            } else {
                //display error message
                $this->Flash->error(__('We were unable to create your account.'));
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
                $this->Flash->success('Your password has been changed successfully.');
            } else {
                $this->Flash->error('We were unable to update your password.');
            }
        }

        if(!empty($this->request->data)) {
            $user = $this->Users->patchEntity($user, [
                'email' => $this->request->data['newemail'],
            ]);
            if ($this->Users->save($user)) {
                $this->Flash->success('Your email address has been changed successfully.');
            } else {
                $this->Flash->error('We were unable to update your email address.');
            }
        }

        if(!empty($this->request->data)) {
            $user = $this->Users->patchEntity($user, [
                'phone' => $this->request->data['newphone'],
                ]);
            if ($this->Users->save($user)) {
                $this->Flash->success('Your phone number has been changed successfully.');
            } else {
                $this->Flash->error('We were unable to update your phone number.');
            }
        }
        $this->set('user',$user);
    }

//function to handle login functionality
    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
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
            $this->Flash->error(__('Invalid username or password; please try again.'));
        }
    }

//function to handle logout functionality
    public function logout() {
        return $this->redirect(array('action' => 'home'),$this->Auth->logout());
    }
}
