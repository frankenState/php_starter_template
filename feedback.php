<?php
$page_title = "Feedback Page";
include "includes/header.php";
include "sys/auth.check.php";



if (!isset($_GET['id']) || !isset($_GET['action']))
    header('Location: index.php');

    try {
        $pdo = pdo_init();
        $stmt = $pdo->prepare("SELECT feedback.*, date_format(feedback.created_at, '%M %d, %Y') as posted_at, date_format(feedback.updated_at, '%M %d, %Y') as post_updated_at FROM feedback WHERE feedback.id=:id");
        $stmt->bindParam(":id", $_GET['id']);
        $stmt->execute();
        $feedback = $stmt->fetchAll(PDO::FETCH_OBJ);

        if (count($feedback) == 0){
            header('Location: index.php');
        } else {
            $feedback = $feedback[0];
        }

        $action = $_GET['action'];
        if ($action == "delete"){
            $status = $pdo->exec("DELETE FROM feedback WHERE feedback.id={$_GET['id']}");
            if ($status){
                header("Location: index.php");
            } else {
        ?>
        <div class="alert alert-danger">
            Feedback deletion failed.
        </div>
        <?php
            }
        }
        
    } catch (PDOException $e) {
?>
<div class="alert alert-danger">
    <?php echo $e->getMessage(); ?>
</div>
<?php
    }

?>

<div class="container">
    <div class="row">
        <div class="col-md-10">
            <h1 class="display-4"><?php echo $feedback->title; ?></h1>
            <p class="lead"><?php echo $feedback->body; ?></p>
            
            <span class="badge badge-info"><?php echo "Posted on {$feedback->posted_at}"; ?></span>
            <span class="badge badge-info"><?php echo "Updated on {$feedback->post_updated_at}"; ?></span><br/>
            <button class="btn btn-outline-primary btn-sm mt-2" data-toggle="modal" data-target="#editFeedback">Edit</button>
            <?php include "includes/feedback.edit.php"; ?>
            <a class="btn btn-outline-danger btn-sm mt-2" href="feedback.php?action=delete&id=<?php echo $feedback->id; ?>">Delete</a>
        </div>
    </div>
</div>

<?php include "includes/footer.php"; ?>