<?php
namespace App\Controller;
use App\Controller\AppController;
class ReportsController extends AppController{

//built in function of cakePHP
    public $paginate = array(
        'limit' => 25,
        'conditions' => array('status' => '1'),
        'order' => array('User.username' => 'asc' )
    );

//function to render report page
//functionality needs to be added
    public function report() {
        $this->loadModel('Users');
        $this->set(compact('user'));
        $user =$this->Users->get($this->Auth->user('id'));
        $report = $this->Reports->newEntity();
        if ($this->request->is('post')) {
            // Prior to 3.4.0 $this->request->data() was used.
            $report = $this->Reports->patchEntity($report, $this->request->getData());
            if ($this->Reports->save($report)) {
                $this->Flash->success(__('The report has been saved.'));
                if ($user['role'] == 'thepublic'){
                  return $this->redirect(array('controller' => 'Users', 'action' => 'home_concerned_public'));
                }
                elseif ($user['role'] == 'lawenforcement'){
                  return $this->redirect(array('controller' => 'Users', 'action' => 'home_law_enforcement'));
                }
            }else{
                $this->Flash->error(__('Unable to add the report.'));
            }

        }
        $this->set('report', $report);

    }

//function to view the detailed reports page
    public function detailedReport($Report_ID = null) {
      $report = $this->Reports->get($Report_ID);
      $this->set(compact('report'));

      //Edit Missing Person Info Section
      //edit first name
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'FirstName' => $this->request->data['newFirstName'],
          ]);
          if ($this->Reports->save($report)) {
              $this->Flash->success('The First Name is successfully changed');
          } else {
              $this->Flash->error('First Name was not saved');
          }
      }
      //edit last name
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'LastName' => $this->request->data['newLastName'],
          ]);
          if ($this->Reports->save($report)) {
              $this->Flash->success('The Last Name is successfully changed');
          } else {
              $this->Flash->error('Last Name was not saved');
          }
      }
      //edit gender
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'Gender' => $this->request->data['newGender'],
          ]);
          if ($this->Reports->save($report)) {
              $this->Flash->success('The Gender is successfully changed');
          } else {
              $this->Flash->error('Gender was not saved');
          }
      }
      //edit ethnicity
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'Ethnicity' => $this->request->data['newEthnicity'],
          ]);
          if ($this->Reports->save($report)) {
              $this->Flash->success('The Ethnicity is successfully changed');
          } else {
              $this->Flash->error('Ethnicity was not saved');
          }
      }
      //edit dob
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'DoB' => $this->request->data['newDoB'],
          ]);
          if ($this->Reports->save($report)) {
              $this->Flash->success('The Date of Birth is successfully changed');
          } else {
              $this->Flash->error('Date of Birth was not saved');
          }
      }
      //edit height(feet)
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'Feet' => $this->request->data['newFeet'],
          ]);
          if ($this->Reports->save($report)) {
              $this->Flash->success('The Height Feet is successfully changed');
          } else {
              $this->Flash->error('Height Feet was not saved');
          }
      }
      //edit height(inches)
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'Inches' => $this->request->data['newInches'],
          ]);
          if ($this->Reports->save($report)) {
              $this->Flash->success('The Height Inches is successfully changed');
          } else {
              $this->Flash->error('Height Inches was not saved');
          }
      }
      //edit marks/tattoos
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'MarksTattoos' => $this->request->data['newMarksTattoos'],
          ]);
          if ($this->Reports->save($report)) {
              $this->Flash->success('The Marks/Tattoos is successfully changed');
          } else {
              $this->Flash->error('Marks/Tattoos was not saved');
          }
      }
      //edit weight
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'Weight' => $this->request->data['newWeight'],
          ]);
          if ($this->Reports->save($report)) {
              $this->Flash->success('The Weight is successfully changed');
          } else {
              $this->Flash->error('Weight was not saved');
          }
      }
      //edit eye color
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'EyeColor' => $this->request->data['newEyeColor'],
          ]);
          if ($this->Reports->save($report)) {
              $this->Flash->success('The Eye Color is successfully changed');
          } else {
              $this->Flash->error('Eye Color was not saved');
          }
      }
      //edit hair color
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'HairColor' => $this->request->data['newHairColor'],
          ]);
          if ($this->Reports->save($report)) {
              $this->Flash->success('The Hair Color is successfully changed');
          } else {
              $this->Flash->error('Hair Color was not saved');
          }
      }
      //edit phone
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'phone' => $this->request->data['newPhone'],
              ]);
          if ($this->Reports->save($report)) {
              $this->Flash->success('The Phone is successfully changed');
          } else {
              $this->Flash->error('Phone was not saved');
          }
      }
      //edit social media
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'SocialMediaAccount' => $this->request->data['newSocialMediaAccount'],
              ]);
          if ($this->Reports->save($report)) {
              $this->Flash->success('The Social Media is successfully changed');
          } else {
              $this->Flash->error('Social Media was not saved');
          }
      }

      $this->set('report',$report);
    }


//function to render the second report page
//functionality needs to be added
    public function report2() {

//        $persons = $this->persons->newEntity();
//		if ($this->request->is('post')) {
//			$persons = $this->persons->patchEntity($persons, $this->request->getData());
//			if ($this->persons->save($persons)) {
//				$this->Flash->success(__('This person has been added.'));
//				return $this->redirect(['action' => 'home']);
//			}
//			$this->Flash->error(__('Unable to add person.'));
//		}
//		$this->set('user', $user);
//
//        $this->render();
    }
//function to render the second report page
//functionality needs to be added
    public function report3() {

//        places = $this->places->newEntity();
//		if ($this->request->is('post')) {
//			$places = $this->places->patchEntity($places, $this->request->getData());
//			if ($this->places->save($places)) {
//				$this->Flash->success(__('This place has been added.'));
//				return $this->redirect(['action' => 'home']);
//			}
//			$this->Flash->error(__('Unable to add place.'));
//		}
//		$this->set('user', $user);

//        $this->render();
    }

}
?>
