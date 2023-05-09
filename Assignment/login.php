<?php 
    session_start();
    include ('connect.php');

    if(isset($_SESSION['counter'])){  
        $counter= $_SESSION['counter'];
        if ($counter == 3) {
             echo "<script>alert('3 Attempts!!. Please wait!');</script>";
            echo "<script>window.location='timer.php';</script>";
        }
    } 
    else 
        $counter=1;
    $UserName = mysqli_real_escape_string($connect, $_POST['UserName']);

    $password = mysqli_real_escape_string($connect, $_POST['password']);
    $sql="select * from visitor where UserName='".$UserName."' and password='".$password."'";

    $result = mysqli_query($connect, $sql);
    $no_of_row = mysqli_num_rows($result);
    if($no_of_row>0){
        $row = mysqli_fetch_array($result);
        echo "<script>window.location='display.php';</script>";
        $_SESSION['UserName']=$UserName;
    $_SESSION['VisitorID'] = $row['Visitor_ID'];

        
    }
    else {

        $counter++;

        $_SESSION['counter']=$counter;

        echo "Counter:".$counter;
        echo "<script>alert('Invalid username or wrong password. Try again!');</script>";
        echo "<script>window.location='login.html';</script>";
    }
?>
