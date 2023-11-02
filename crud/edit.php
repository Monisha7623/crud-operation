<?php
require 'config.php';
$id = $_GET['id'];
$query="SELECT * FROM user WHERE id='$id'";
$res=$conn->query($query);
if($res->num_rows>0){
    while($row=$res->fetch_assoc()){
        $name=$row['name'];
        $username=$row['username'];
        $email=$row['email'];
        $password=$row['password']; 
        $confirmpassword=$row['confirmpassword'];
        
        
    }
}
?>
<html>
    <head>
        <title>Registration Form</title>
    </head>
    <body>
    <form class="" action="" method="post" autocomplete="off">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required value="" value="<?php echo $name; ?>"><br>
            <label for="username">User Name:</label>
            <input type="text" name="username" id="username" required value="" value="<?php echo $username; ?>"><br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required value="" value="<?php echo $email; ?>"><br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required value="" value="<?php echo $password; ?>"><br>
            <label for="confirmpassword">Confirmpassword:</label>
            <input type="password" name="confirmpassword" id="confirmpassword" required value="" value="<?php echo $confirmpassword; ?>"><br>
            
            <button type="submit" name="update">Update</button>
        </form>
    </body>
</html>

<?php
if(isset($_POST["update"])){
    $name=$_POST['name'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
   

    $query="UPDATE user SET name='$name', username='$username', email='$email', password='$password' WHERE id='$id'";
    if(mysqli_query($conn,$query)){
        header('location: user.php');
    }else{
        echo mysqli_error($conn);
    }

}
?>