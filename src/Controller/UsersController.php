<?php
namespace App\Controller;
use App\Controller\AppController;
use App\Controller\ReportsController;
use Cake\Datasource\ConnectionManager;
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
      //Load the user model
      $user =$this->Users->get($this->Auth->user('id'));
      $this->set('user',$user);
      //load the report model
      $this->loadModel('Report');
      //get all rows in reports table in db
      $report = $this->Report
        ->find()
        ->where(['id >=' => 0])
        ->toArray();
      //set report model
      //$this->set('report',$report);
      $this->set('reports', $report);
    }

//function used to register a new user
    public function add()
    {
      $user = $this->Users->newEntity();

      if ($this->request->is('post'))
      {
        $conn = ConnectionManager::get('default');

        $user = $this->Users->patchEntity($user, $this->request->getData());
        //$this->set('user', $user);

        try
        {
          if (
            $conn->insert('users',
            [
              'first_name' => $user->get('FirstName'),
              'last_name' => $user->get('LastName'),
              'middle_name' => $user->get('MiddleName'),
              'email' => $user->get('email'),
              'password' => $user->get('password'),
              'phone' => $user->get('phone'),
              'role' => $user->get('role')
            ]))
          {
            $this->Flash->success(__('The user has been saved.'));
            return $this->redirect(['action' => 'login']);

                   //this is the code to check if there are any errors from the UsersTable.php
                   //If there are, it lists out all errors
          }
        }
        catch (\Exception $e)
        {
          //echo $e->getMessage();
          switch ($e->getMessage())
          {
            case "SQLSTATE[23000]: Integrity constraint violation: 1048 Column 'first_name' cannot be null":
              echo "A first name is required";
              break;
            case "SQLSTATE[23000]: Integrity constraint violation: 1048 Column 'last_name' cannot be null":
              echo "A last name is required";
              break;
            case "SQLSTATE[23000]: Integrity constraint violation: 1048 Column 'email' cannot be null":
              if ($user->get('email') === null)
              {
                echo "An email is required";
              }
              else
              {
                echo "Email is already taken. Please use another email";
              }
              break;
            case "SQLSTATE[23000]: Integrity constraint violation: 1048 Column 'password' cannot be null":
              echo "A password is required";
              break;
          }
        }

        /*if (
        $conn->insert('users', [
          'first_name' => $user->get('FirstName'),
          'last_name' => $user->get('LastName'),
          'middle_name' => $user->get('MiddleName'),
          'email' => $user->get('email'),
          'password' => $user->get('password'),
          'phone' => $user->get('phone')
        ]))
        {
          $this->Flash->success(__('The user has been saved.'));
          return $this->redirect(['action' => 'login']);

                 //this is the code to check if there are any errors from the UsersTable.php
                 //If there are, it lists out all errors
        }
			  elseif ($user->errors())
			  {
          $error_msg = [];
          foreach( $user->errors() as $errors)
				  {
            if(is_array($errors))
				    {
              foreach($errors as $error)
						  {
                $error_msg[] = $error;
              }
            }
					  else
					  {
              $error_msg[] = $errors;
            }
          }
          if (!empty($error_msg))
				  {
            $this->Flash->error(__("Please fix the following error(s):".implode("\n \r", $error_msg)));
          }
        }*/

      }
    }

        //creates a new User entity (model)
        //$user = $this->Users->newEntity();

      //   if ($this->request->is('post')) {
      //
      //       // Prior to 3.4.0 $this->request->data() was used.
      //       $user = $this->Users->patchEntity($user, $this->request->getData());
      //
      //       if ($this->Users->save($user)) {
      //           $this->Flash->success(__('The user has been saved.'));
      //           return $this->redirect(['action' => 'login']);
      //
      //           //this is the code to check if there are any errors from the UsersTable.php
      //           //If there are, it lists out all errors
      //       } elseif ($user->errors()) {
      //           $error_msg = [];
      //           foreach( $user->errors() as $errors) {
      //               if(is_array($errors)) {
      //                   foreach($errors as $error) {
      //                       $error_msg[] = $error;
      //                   }
      //               } else {
      //                   $error_msg[] = $errors;
      //               }
      //           }
      //           if (!empty($error_msg)) {
      //               $this->Flash->error(
      //                   __("Please fix the following error(s):".implode("\n \r", $error_msg))
      //               );
      //           }
      //       }
      // }
      //$this->set('user', $user);


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
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                //if ( $user['role'] == 'thepublic'){
                  return $this->redirect(array('action' => 'home_concerned_public'));
                //}
                //elseif ( $user['role'] == 'lawenforcement'){
                  //return $this->redirect(array('action' => 'home_law_enforcement'));
                }
                else {
                  $this->Flash->error(__('Invalid username or password, try again'));
                  return $this->redirect(array('action' => 'login'));
                }
            }
            //$this->Flash->error(__('Invalid username or password, try again'));
        }


//function to handle logout functionality
    public function logout() {
        return $this->redirect($this->Auth->logout());
    }
}
