<?php
namespace App\Controller;
use App\Controller\AppController;
use App\Controller\ReportsController;
use App\Controller\UsersController;
class ApproveController extends AppController{

  public function approveModal($Report_ID = null) {
    $report = $this->Reports->get($Report_ID);
    $this->set(compact('report'));
    
    if(!empty($this->request->data)) {
        $report = $this->Reports->patchEntity($report, [
            'CaseNumber' => $this->request->data['report_case_number'],
            ]);
        if ($report->dirty('CaseNumber') == true){
          if ($this->Reports->save($report)) {
              $this->Flash->success('The case number has been saved.');
          } else {
              $this->Flash->error('Unable to add the case number');
          }
        }
      }

      $this->set('report',$report);

  }

}
