<?php
if (isset($_GET['action']) && $_GET['action'] == 'logout'){
    unset($_SESSION['user']);
    header('Location: login.php');
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">Feedback App</a>
    <!-- <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul> -->
    <form class="form-inline my-2 my-lg-0">
        <a class="btn btn-link text-white" href="<?php echo $_SERVER['PHP_SELF']."?action=logout"; ?>">Logout</a>
    </form>
  </div>
</nav>