<?php
session_start(); 
// echo $_SESSION['username'];

?>
<?php
include('config.php');
?>

<?php
$sql = "SELECT * FROM `users`";
$result = mysqli_query($conn, $sql);
if($result->num_rows > 0){
?>
         <table border ="1px">
         <thead>
               <tr>
               <th>name</th>
               <th>E-mail</th>
               <th>contacts</th>
               <th>city</th>
               <th>edit</th>
               <th>delete</th>
               </tr>
         </thead>
         <tbody>
              <?php
              while($row =$result->fetch_assoc()){
              ?>
              <tr>
              <td><?php echo $row['username']?></td>
				<td><?php echo $row['email']?></td>
				<td><?php echo $row['contact']?></td>
				<td><?php echo $row['city']?></td>  
                <td><a href="edit.php?id=<?php echo $row['id']?>">
				<input type="button" value="Edit"></a></td>
				<td><a href="delete.php?id=<?php echo $row['id']?>">
				<input type="button" value="Delete"></a></td> 
           </tr>
         <?php } ?>
         </tbody>
         </table>
<?php
}
?>
<html>
  <head>
   <title>
           user details
   </title>
  </head>
  <body>
  <body>
<a href="add.php">Add Record</a>
<a href="logout.php">Logout</a>
</body>
  </body>
</html>