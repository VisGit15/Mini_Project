
<?php
# Connect to the database
require('config.php');
 
# Get student names
# Define the query to send to the database
$query_students = 'SELECT * FROM users ORDER BY id';
# We use a prepared statement to execute the query
# This creates a PDOStatement object
$student_statement = $pdo->prepare($query_students);
# Execute the query
$student_statement->execute();
# Return an array containing the query results
$students = $student_statement->fetchAll();
# Allows new SQL statements to execute
$student_statement->closeCursor();
 ?>
<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>PHP Tutorial</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
  </head>
  <body>
      <!-- Get an array from the DB query and cycle
      through each row of data -->
      <?php foreach($users as $user) : ?>
        
          <!-- Print out individual column data -->
          <?php echo $user['id']; ?><br><br>
          <?php echo $user['username']; ?><br><br>
          <?php echo $user['password']; ?><br><br>
        
      <!-- Mark the end of the foreach loop -->
      <?php endforeach; ?>
 
<!--     <h3>Insert Student</h3>
    <form action="add_student.php" method="post"
      id="add_student_form">
      <label>ID : </label>
      <input type="text" name="id"><br>
      <label>Username : </label>
      <input type="text" name="username"><br>
      <label>Password : </label>
      <input type="text" name="password"><br>
      <input type="submit" value="Add User"><br>
    </form> -->
  </body>
</html>