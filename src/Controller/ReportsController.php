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
              'FirstName' => $this->request->data['editFirstName'],
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
              'LastName' => $this->request->data['editLastName'],
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
              'Gender' => $this->request->data['editGender'],
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
              'Ethnicity' => $this->request->data['editEthnicity'],
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
              'DoB' => $this->request->data['editDoB'],
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
              'Feet' => $this->request->data['editFeet'],
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
              'Inches' => $this->request->data['editInches'],
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
              'MarksTattoos' => $this->request->data['editMarksTattoos'],
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
              'Weight' => $this->request->data['editWeight'],
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
              'EyeColor' => $this->request->data['editEyeColor'],
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
              'HairColor' => $this->request->data['editHairColor'],
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
              'phone' => $this->request->data['editPhone'],
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
              'SocialMediaAccount' => $this->request->data['editSocialMediaAccount'],
              ]);
          if ($this->Reports->save($report)) {
              $this->Flash->success('The Social Media is successfully changed');
          } else {
              $this->Flash->error('Social Media was not saved');
          }
      }
      //Edit Family/Friend Info Section
      //edit family first name
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'FamilyFirstName' => $this->request->data['editFamilyFirstName'],
              ]);
          if ($this->Reports->save($report)) {
              $this->Flash->success('The Family First Name is successfully changed');
          } else {
              $this->Flash->error('Family First Name was not saved');
          }
      }
      //edit family last name
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'FamilyLastName' => $this->request->data['editFamilyLastName'],
              ]);
          if ($this->Reports->save($report)) {
              $this->Flash->success('The Family Last Name is successfully changed');
          } else {
              $this->Flash->error('Family Last Name was not saved');
          }
      }
      //edit family gender
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'FamilyGender' => $this->request->data['editFamilyGender'],
              ]);
          if ($this->Reports->save($report)) {
              $this->Flash->success('The Family Gender is successfully changed');
          } else {
              $this->Flash->error('Family Gender was not saved');
          }
      }
      //edit family relation
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'Relation' => $this->request->data['editRelation'],
              ]);
          if ($this->Reports->save($report)) {
              $this->Flash->success('The Relation is successfully changed');
          } else {
              $this->Flash->error('Relation was not saved');
          }
      }
      //edit family street
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'FamilyStreet' => $this->request->data['editFamilyStreet'],
              ]);
          if ($this->Reports->save($report)) {
              $this->Flash->success('The Street is successfully changed');
          } else {
              $this->Flash->error('Street was not saved');
          }
      }
      //edit family city
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'FamilyCity' => $this->request->data['editFamilyCity'],
              ]);
          if ($this->Reports->save($report)) {
              $this->Flash->success('The City is successfully changed');
          } else {
              $this->Flash->error('City was not saved');
          }
      }
      //edit family State
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'FamilyState' => $this->request->data['editFamilyState'],
              ]);
          if ($this->Reports->save($report)) {
              $this->Flash->success('The State is successfully changed');
          } else {
              $this->Flash->error('State was not saved');
          }
      }
      //edit family zip
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'FamilyZip' => $this->request->data['editFamilyZip'],
              ]);
          if ($this->Reports->save($report)) {
              $this->Flash->success('The Zip is successfully changed');
          } else {
              $this->Flash->error('Zip was not saved');
          }
      }
      //edit family phone
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'FamilyPhone' => $this->request->data['editFamilyPhone'],
              ]);
          if ($this->Reports->save($report)) {
              $this->Flash->success('The Phone is successfully changed');
          } else {
              $this->Flash->error('Phone was not saved');
          }
      }
      //edit family email
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'FamilyEmail' => $this->request->data['editFamilyEmail'],
              ]);
          if ($this->Reports->save($report)) {
              $this->Flash->success('The Email is successfully changed');
          } else {
              $this->Flash->error('Email was not saved');
          }
      }
      //Edit the Workplace/Hangouts section of the form
      //edit place name
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'PlaceName' => $this->request->data['editPlaceName'],
              ]);
          if ($this->Reports->save($report)) {
              $this->Flash->success('The Place Name is successfully changed');
          } else {
              $this->Flash->error('Place Name was not saved');
          }
      }
      //edit place street
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'PlaceStreet' => $this->request->data['editPlaceStreet'],
              ]);
          if ($this->Reports->save($report)) {
              $this->Flash->success('The Street is successfully changed');
          } else {
              $this->Flash->error('Street was not saved');
          }
      }
      //edit place city
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'PlaceCity' => $this->request->data['editPlaceCity'],
              ]);
          if ($this->Reports->save($report)) {
              $this->Flash->success('The City is successfully changed');
          } else {
              $this->Flash->error('City was not saved');
          }
      }
      //edit place state
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'PlaceState' => $this->request->data['editPlaceState'],
              ]);
          if ($this->Reports->save($report)) {
              $this->Flash->success('The State is successfully changed');
          } else {
              $this->Flash->error('State was not saved');
          }
      }
      //edit place zip
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'PlaceZip' => $this->request->data['editPlaceZip'],
              ]);
          if ($this->Reports->save($report)) {
              $this->Flash->success('The Zip is successfully changed');
          } else {
              $this->Flash->error('Zip was not saved');
          }
      }

      $this->set('report',$report);
    }

}
?>
