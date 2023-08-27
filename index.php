<?php
session_start();
// get user name pass
//check the user is auth or not 
//if success go to home
//if not success can't login user
if(isset($_POST['username'])){
  if(isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username == "admin" && 
      $password == "123"){
        header("Location: home.php");
      }else{
        header("Location: ./");
      }
  }
}
?>
<?php
include("header.php")
?>
  <body>
    <div class="container">
      <div class="box form-box">
        <header>
          Login
        </header>
        <form action="" method="Post">
          <div class="field input">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required />
          </div>
          <div class="field input">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required />
          </div>
          <div class="field">
            <input class="btn" type="submit" name="submit" value="Login" required />
          </div>
        </form>
      </div>
    </div>
  </body>
<?php
include("footer.php")
?>