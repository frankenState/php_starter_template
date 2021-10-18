<?php
if (isset($_POST['feedback_create_btn'])){
    $title = $_POST['title'];
    $body = $_POST['body'];
    $user_id = $_SESSION['user']->id;

    try {

        $pdo = pdo_init();
        $stmt = $pdo->prepare("INSERT INTO feedback(user_id,title,body) VALUES(:user_id,:title,:body)");
        $stmt->bindParam(":user_id", $user_id);
        $stmt->bindParam(":title", $title);
        $stmt->bindParam(":body", $body);
        $stmt->execute();

        header('Location: .');

    } catch (PDOException $e){
?>
        <div class="alert alert-danger">
            <?php echo $e->getMessage(); ?>
        </div>
<?php
    }
}
?>

<!-- Modal -->
<div class="modal fade" id="createFeedback" tabindex="-1" aria-labelledby="createFeedbackLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createFeedbackLabel">New Feedback</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control" type="text" name="title" id="title" required />
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" name="body" id="body" cols="30" rows="4" required></textarea>
            </div>
            <button name="feedback_create_btn" class="btn btn-primary" type="submit">Save</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </form>
      </div>
    </div>
  </div>
</div>