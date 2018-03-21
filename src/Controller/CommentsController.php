<?php
namespace App\Controller;
use App\Controller\AppController;
use App\Controller\ReportsController;
use App\Controller\UsersController;
class CommentsController extends AppController{

  public function commentModal($Report_ID = null) {
    //Load the user model
    $this->loadModel('Users');
    $user =$this->Users->get($this->Auth->user('id'));
    $this->set('user',$user);

    //load reports
    $this->loadModel('Reports');
    $report = $this->Reports->get($Report_ID);
    $this->set('report', $report);

    //load array of comments associated with the sepcific report
    $comments = $this->Comments
      ->find()
      ->where(['Report_ID =' => $report->get('Report_ID')])
      ->toArray();
    $this->set('comments', $comments);

    //load the users associated with comments made
    $this->loadModel('Users');
    $users = $this->Users
      ->find()
      ->hydrate(false)
      ->join([
          'c' => [
              'table' => 'comments',
              'type' => 'INNER',
              'conditions' => 'c.Comment_Email = users.email',
          ],
          'r' => [
              'table' => 'reports',
              'type' => 'INNER',
              'conditions' => [
                'r.Report_ID = c.Report_ID',
                'c.Report_ID =' => $report->get('Report_ID')
              ]
          ]
      ])
      //->where(['email =' => $comments->get('Comment_Email')])
      ->toArray();
    $this->set('users', $users);

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
