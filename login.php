<?php 
$page_title = "Login Page";
include "includes/header.php"; 

if (isset($_POST['login_btn'])){
    $usernameOrEmail = $_POST['usernameOrEmail'];
    $password = $_POST['password'];

    try {
        
        $pdo = pdo_init();
        $stmt = $pdo->prepare("SELECT * FROM users WHERE (users.email=:email OR users.username=:username) AND users.password=:password");
        $stmt->bindParam(":email", $usernameOrEmail);
        $stmt->bindParam(":username", $usernameOrEmail);
        $stmt->bindParam(":password", $password);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_OBJ);

        if (count($data) == 1){
            $_SESSION['user'] = $data[0];
            header('Location: index.php');
        } else {
            $error = "Invalid username/email or password.";
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
        <div class="col-md-8 m-auto pt-5">
            <h1 class="display-4 text-center">Login Page</h1>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="form-group">
                    <label for="usernameOrEmail">Username or Email</label>
                    <input class="form-control" type="text" name="usernameOrEmail" id="usernameOrEmail" placeholder="Email or username" />
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" id="password" placeholder="Password" />
                </div>
                <?php if (isset($error)) { ?>
                    <div class="alert alert-danger">
                        <?php echo $error; ?>
                    </div>
                <?php } ?>
                <button class="btn btn-primary btn-block" name="login_btn" type="submit">Login</button>
                <a class="btn btn-link btn-block" href="register.php">If you don't have an existing account, please register.</a>
            </form>
        </div>
    </div>
</div>

<?php include "includes/footer.php"; ?>