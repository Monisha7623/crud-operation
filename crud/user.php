<html>
    <head>

    </head>
    <body>
        <h2>Registration</h2>
        <form class="" action="" method="post" autocomplete="off">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required value=""><br>
            <label for="username">User Name:</label>
            <input type="text" name="username" id="username" required value=""><br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required value=""><br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required value=""><br>
            <label for="confirmpassword">Confirmpassword:</label>
            <input type="password" name="confirmpassword" id="confirmpassword" required value=""><br>
            
            <button type="submit" name="submit">Register</button>
        </form>
        <hr>

        <h3>User List</h3>
        <table style="width: 80%" border="1">
        <tr>
            
            <th>ID</th>
            <th>NAME</th>
            <th>USER NAME</th>
            <th>EMAIL ID</th>
            <th>PASSWORD</th>
            <th>Action</th>
        </tr>
        <?php
        require 'config.php';
          $i=1;
          $query="SELECT * FROM user";
          $res=$conn->query($query);
          if($res->num_rows>0){
            while($row = $res->fetch_assoc()){
                $id=$row['id'];
       ?>
        <tr>
           <td><?php echo $i++; ?></td>
           <td><?php echo $row['name'] ?></td>
           <td><?php echo $row['username'] ?></td>
           <td><?php echo $row['email'] ?></td>
           <td><?php echo $row['password'] ?></td>
           <td>
            <a href="edit.php">Edit</a>
            <a href="delete.php?id=<?php echo $id; ?>" onclick="return confirm('Are you sure?')">Delete</a>
           </td>        
        </tr>
        <?php 
         }
        }
        ?>

        

        </table>

    </body>
</html>
<?php
require 'config.php';
if(isset($_POST['submit'])){
    $name=$_POST["name"];
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $confirmpassword=$_POST["confirmpassword"];
     $query="INSERT INTO user VALUES('','$name','$username','$email','$password')";
            if(mysqli_query($conn,$query)){
            echo " <script> alert('Registration Successful'); </script>";
            header('location: user.php');
        }
        else{
            echo "Cannot execute query";

        }
    }
?>