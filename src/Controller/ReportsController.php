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
        $this->render();
    }
//function to render the second report page
//functionality needs to be added
    public function report2() {
        $this->render();
    }  
//function to render the second report page
//functionality needs to be added
    public function report3() {
        $this->render();
    }  

}
?>
