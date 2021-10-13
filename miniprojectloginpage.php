<?php 
$email = filter_input(INPUT_POST, "email");
$username = filter_input(INPUT_POST, "username");
$password = filter_input(INPUT_POST, "password");
echo $email;
if($email == null || $username == null || $password == null){
  $err_msg = "All Values Not Entered<br>";
  include('db_error.php');
}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $err_msg = "Email Not Valid<br>";
  include('db_error.php');
}else{
  require_once('dbconnectderek.php');
  $query = "insert into users(email, username, password) values (:email, :username, :password)";

  $stm = $db->prepare($query);
  $stm->bindValue(':email',$email);
  $stm->bindValue(':username',$username);
  $stm->bindValue(':password',$password);
  $execute_success = $stm->execute();
  $stm->closeCursor();

  if(!$execute_success){
    print_r($stm->errorInfo()[2]);
  }

}
require_once('dbconnectderek.php');
$query_print = "select * from users";
$student_statement = $db->prepare($query_print);
$student_statement->execute();
$students = $student_statement->fetchAll();
$student_statement->closeCursor(); 
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Hello, world!</title>
     <link href="bootstrap.min.css" rel="stylesheet" >
    <link href="searchbar.css" rel="stylesheet">
    <link href="miniprojectloginpage.css" rel="stylesheet">
  </head>
<body>

<header>
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="logo-dark.png" alt="" width="10%" class="d-inline-block align-text-top">
    </a>
</div>
</header>

<!-- Header end -->
<?php foreach($students as $student) : ?>
         <tr>
           <!-- Print out individual column data -->
           <td><?php echo $student['username']; ?></td>
           <td><?php echo $student['email']; ?></td>
           <td><?php echo $student['password']; ?></td>
         </tr>
       <!-- Mark the end of the foreach loop -->
       <?php endforeach; ?>


<div class="cotn_principal">
<div class="cont_centrar">

<div class="cont_login">
<div class="cont_info_log_sign_up">
<div class="col_md_login">
<div class="cont_ba_opcitiy">
        
        <h2>LOGIN</h2>  
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> 
  <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
  </div>
  </div>
<div class="col_md_sign_up">
<div class="cont_ba_opcitiy">
  <h2>SIGN UP</h2>

  
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

  <button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
</div>
  </div>
       </div>

    
    <div class="cont_back_info">
       <div class="cont_img_back_grey">
       <img src="" alt="" />
       </div>
       
    </div>
<div class="cont_forms" >
    <div class="cont_img_back_">
       <img src="" alt="" />
       </div>
 <div class="cont_form_login">
<a href="#" onclick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
   <h2>LOGIN</h2>
 <input type="text" placeholder="Email" />
<input type="password" placeholder="Password" />
<button class="btn_login" onclick="cambiar_login()">LOGIN</button>
  </div>
  

<div class="cont_form_sign_up">
<a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
     <h2>SIGN UP</h2>

<form action="miniprojecthomepage.html" method="post">
  <input type="text" placeholder="Email" name='email'>
<input type="text" placeholder="Username" name='username' >
<input type="password" placeholder="Password" name='password'>
<!-- <input type="password" placeholder="Confirm Password" /> -->
<?php $email=$_POST['email'];?>
<?php $username=$_POST['username'];?>
<?php $password=$_POST['password'];?>

<input type= "submit" value="SIGN UP" class="btn_sign_up" onclick="cambiar_sign_up()"></input>
</form>

  </div>

    </div>
    
  </div>
 </div>
</div>
<script src="miniprojectloginpage.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>