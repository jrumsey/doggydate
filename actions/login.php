<?php
    $con = mysqli_connect("127.0.0.1", "root", "");

    if(!$con)
    {
        echo "Not Connected to Server";
    }

    if(!mysqli_select_db($con, "doggy_date"))
    {
        echo "Database Not Selected";
    }

    $Email = mysqli_real_escape_string($con, $_POST["email"]);
    $Password = mysqli_real_escape_string($con, $_POST["password"]);

    $sql = "select * from users where email = '$Email'";

    if($result = mysqli_query($con, $sql)) {
        if(mysqli_num_rows($result) > 0) {
            if($row = mysqli_fetch_array($result)) {
                $hashedPassword = $row["password"];
                if(password_verify($Password, $hashedPassword)) {
                    $Id = $row["id"];
                    $Name = $row["name"];
                    $Gender = $row["gender"];
                    
                    session_start();
                    $_SESSION["id"] = $Id;
                    $_SESSION["name"] = $Name;
                    $_SESSION["gender"] = $Gender;

                    header("refresh:0; url=../profile.php");
                }
            }
        }
    }

?>