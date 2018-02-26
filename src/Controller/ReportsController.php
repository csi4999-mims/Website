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
