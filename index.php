<?php
$page_title = "Main Page";
include "includes/header.php";
include "sys/auth.check.php";
# var_dump($_SESSION['user']);
include "includes/navbar.php";
?>

<div class="container">
    <div class="row">
        <div class="col-md-10">
            <h1 class="display-4">Dashboard</h1>

            <button class="btn btn-primary">Create</button>

            <?php 
                try {
                    $pdo = pdo_init();
                    $feedbacks = $pdo->query('SELECT feedback.id as feedback_id, users.id as user_id, CONCAT(users.first_name, " ", users.last_name) as author, feedback.title, feedback.status, date_format(feedback.created_at, "%M %d, %Y") as created_at from feedback join users on feedback.user_id=users.id;')->fetchAll(PDO::FETCH_OBJ);
                    
                    if (count($feedbacks) == 0){
            ?>
                    <div class="alert alert-info">
                        No records found in feedback table.
                    </div>
            <?php
                    } else {
            ?>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Author</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($feedbacks as $k => $v){ ?>
                        <tr>
                            <td><?php echo $v->feedback_id; ?></td>
                            <td><?php echo $v->author; ?></td>
                            <td><?php echo $v->title; ?></td>
                            <td><?php echo $v->status; ?></td>
                            <td><?php echo $v->created_at; ?></td>
                            <td>
                                <a class="btn btn-success btn-sm" href="feedback.php?id=<?php echo $v->feedback_id; ?>">View</a>
                                <a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $v->feedback_id; ?>">Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table> 
            <?php
                    }
                } catch (PDOException $e){
                    ?>
                        <div class="alert alert-danger">
                            <?php echo $e->getMessage(); ?>
                        </div>
                    <?php
                }
            ?>

            

        </div>
    </div>

</div>

<?php include "includes/footer.php"; ?>