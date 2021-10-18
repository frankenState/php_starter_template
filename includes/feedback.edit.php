

<!-- Modal -->
<div class="modal fade" id="editFeedback" tabindex="-1" aria-labelledby="editFeedback" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editFeedbackLabel">Edit Feedback</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/workspace/sys/feedback.update.php" method="POST">
            <input type="hidden" name="feedback_id" value="<?php echo $feedback->id; ?>" />
            <input type="hidden" name="user_id" value="<?php echo $feedback->user_id; ?>" />
            <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control" type="text" name="title" id="title" value="<?php echo $feedback->title; ?>" required />
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" name="body" id="body" cols="30" rows="4" required><?php echo $feedback->body; ?></textarea>
            </div>
            <button name="feedback_update_btn" class="btn btn-primary" type="submit">Save</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </form>
      </div>
    </div>
  </div>
</div>