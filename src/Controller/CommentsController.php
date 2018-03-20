<?php
namespace App\Controller;
use App\Controller\AppController;
use App\Controller\ReportsController;
use App\Controller\UsersController;
class CommentsController extends AppController{

  public function commentModal($Report_ID = null) {
    $this->loadModel('Reports');
    $report = $this->Reports->get($Report_ID);
    $this->set('report', $report);



    //create new comment
    $this->loadModel('Comments');
    $comment = $this->Comments->newEntity();
    if ($this->request->is('post')) {
        // Prior to 3.4.0 $this->request->data() was used.
        $comment = $this->Comments->patchEntity($comment, $this->request->getData());
        if ($this->Comments->save($comment)) {
            $this->Flash->success(__('The comment has been saved.'));
            return $this->redirect(['controller'=> 'Users', 'action' => 'homeConcernedPublic']);
        }else{
            $this->Flash->error(__('Unable to add the comment.'));
        }

    }
    $this->set('comment', $comment);

}

}
