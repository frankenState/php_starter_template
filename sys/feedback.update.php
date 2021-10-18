<?php
include "init.php";
if (isset($_POST['feedback_update_btn'])){
    $feedback_id = $_POST['feedback_id'];
    $user_id = $_POST['user_id'];
    $title = $_POST['title'];
    $body = $_POST['body'];
    
 //   if ($user_id == $_SESSION['user']->id || $_SESSION['user']->type == 'ADMIN'){
        try {
            $pdo = pdo_init();
            $stmt = $pdo->prepare("UPDATE feedback SET title=:title, body=:body WHERE feedback.id=:id");
            $stmt->bindParam(":title", $title);
            $stmt->bindParam(":body", $body);
            $stmt->bindParam(":id", $id);
            $stmt->execute();

            header("Location: ../feedback.php?action=view&id=$feedback_id");

        } catch (PDOException $e){
        ?>
            <div class="alert alert-danger">
                <?php echo $e->getMessage(); ?>
            </div>
        <?php
        }
 //   }
}
?>