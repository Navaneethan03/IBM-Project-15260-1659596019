<?php
session_start();
include'config.php';
error_reporting(0);
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $cnum=$_POST['mail'];
    $password=$_POST['password'];
    $sql="SELECT * FROM people WHERE mail='$mail' and password='$password'";
        $run=mysqli_query($conn, $sql);
            if (mysqli_num_rows($run)>0) {
                $values = mysqli_fetch_assoc($run);
                header('location:home.php');
            }
             else {
                ?>
                <script type="text/javascript">
                  alert("Account doesn't exist!");
                </script>
                <?php
            }
}
?>
