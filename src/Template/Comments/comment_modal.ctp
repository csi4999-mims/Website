<!DOCTYPE html>
<html>
<head>

</head>
<?php echo $this->Form->create('$comment');
$this->Html->css('custom');
?>
<fieldset>
    <legend><?php echo __('Submit Your Comment'); ?></legend>
    <?php
    echo $this->Form->input('Comment_Email', array('class' => 'report-input', 'label' => 'Email', 'maxLength' => 50, 'title' => 'Email', 'type' => 'email'));
    echo $this->Form->input('Comment_Description', array('class' => 'report-input', 'label' => 'Comment', 'maxLength' => 250, 'title' => 'Comment', 'type' => 'textarea'));
    echo $this->Form->hidden('Report_ID', array('value' => $report->get('Report_ID')));
    echo $this->Form->submit('Submit Comment', array('class' => 'form-submit comment-submit',  'title' => 'Click here to') );
    ?>
</fieldset>
<?php echo $this->Form->end(); ?>
<!-- View Comment Modal -->
<div class="modal fade" id="viewCommentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View Comments</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo $this->Form->create('$comment');
        $this->Html->css('custom');
        ?>
        <fieldset>
            <?php foreach ($comments as $comment): ?>
                <li><?php echo $this->Form->label('Comment_Description', array('value' => $comment->get('Comment_Description'))); ?></li>
            <?php endforeach; ?>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </fieldset>
        <?php echo $this->Form->end(); ?>
      </div>
    </div>
  </div>
</div>

</html>
