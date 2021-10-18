<?php 
    $page_title = "Feedback Update Page";
    include "includes/header.php";
    include "sys/auth.check.php";
    
    if (!isset($_GET['id'])){
        header('Location: index.php');
    }

    try {
        $pdo = pdo_init();
        $data = $pdo->query("SELECT * FROM feedback WHERE id={$_GET['id']}")->fetchAll(PDO::FETCH_OBJ);
        
        $feedback = $data[0];
    } catch (PDOException $e){
        ?>
        <div class="alert alert-danger"><?php echo $e->getMessage(); ?></div>
        <?php
    }

    if (isset($_POST['feedback_update_btn'])){
        $id = $_POST['feedback_id'];
        $title = $_POST['title'];
        $body = $_POST['body'];

        try {
            $pdo  = pdo_init();
            $stmt = $pdo->prepare("UPDATE feedback SET title=:title, body=:body WHERE feedback.id=:id");

            $stmt->bindParam(":title", $title);
            $stmt->bindParam(":body", $body);
            $stmt->bindparam(":id", $id);
            if($stmt->execute()){
               header('Location: feedback.php?id=' . $_GET['id']);   
            } else {
        ?>
            <div class="alert alert-danger">
                Update Error.
            </div>
        <?php
            }
        } catch (PDOException $e){
            ?>
        <div class="alert alert-danger">
            <?php echo $e->getMessage(); ?>
        </div>
            <?php
        }
    }
?>
<div class="container">
    <div class="row">
        <div class="col-md-8 pt-5">
            <h1 class="display-4">Feedback Update</h1>
            <form action="<?php echo $_SERVER['PHP_SELF']."?id={$_GET['id']}"; ?>" method="POST">
                <input type="hidden" name="feedback_id" value="<?php echo $feedback->id; ?>">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input class="form-control" type="text" name="title" id="title" value="<?php echo $feedback->title; ?>" required />
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea class="form-control" name="body" id="body" cols="30" rows="4" required><?php echo $feedback->body; ?></textarea>
                </div>
                <button name="feedback_update_btn" class="btn btn-primary" type="submit">Save</button>
                <a type="button" class="btn btn-secondary" href="index.php">Cancel</a>
            </form>
        </div>
    </div>
</div>

<?php include "includes/footer.php"; ?>