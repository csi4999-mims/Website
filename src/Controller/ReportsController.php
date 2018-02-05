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
        
        $mp = $this->missingpersons->newEntity();
		if ($this->request->is('post')) {
            
			$mp = $this->missingpersons->patchEntity($mp, $this->request->getData());
            
			if ($this->missingpersons->save($mp)) {
				$this->Flash->success(__('This missing person has been added.'));
				return $this->redirect(['action' => 'report2']);
			}
			$this->Flash->error(__('Unable to add missing person.'));
		}
		$this->set('missingpersons', $mp); 

    }
//        $this->render();
    
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
