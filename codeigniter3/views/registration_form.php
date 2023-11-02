<html>
    <head><title>Registration</title></head>
    <body>
        

        <?php
        if(isset($status)){
            echo $status;
            echo '<br>'. $test;
        }
        if(isset($msg)) {
            echo '<h2>'.$msg.'</h2>';
        }
        ?>

        <form action="<?= base_url().'register/savedata/'?>" method="post">
        <label>Name :</label>
            <input type="text" name="stname"><br><br>
        <label>Email :</label>
            <input type="text" name="stmail"><br><br>
        <label>Mobile_no :</label>
            <input type="text" name="stmobile"><br><br>
            <input type="submit" name="submit" value="Register">
            <a href="<?= base_url('register/fetchdata')?>">View Records</a>
        </form>
        <?=base_url()?>
    </body>
</html>