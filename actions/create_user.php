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

    $Name = $_POST["name"];
    $Email = $_POST["email"];
    $Password = $_POST["password"];
    $Password = password_hash($Password, PASSWORD_BCRYPT);
    if(isset($_POST["gender"]))
        $Gender = $_POST["gender"];
    //$Birthdate = $_POST["birthdate"];

    if(preg_match("/^[a-zA-Z ]*$/", $Name) && filter_var($Email, FILTER_VALIDATE_EMAIL)) {
         $sql = "insert into users (password, email, name, gender) values ('$Password', '$Email', '$Name', '$Gender')";

        if(!mysqli_query($con, $sql))
        {
            echo "Not Inserted";
        }
        else
        {
            echo 'Inserted';

            $IDsql = "select * from users where email = '$Email'";
            if($result = mysqli_query($con, $IDsql)) {
                if(mysqli_num_rows($result) > 0) {
                    if($row = mysqli_fetch_array($result)) {
                        $Id = $row["id"];
                    }
                }
            }
            session_start();
            $_SESSION["id"] = $Id;
            $_SESSION["name"] = $Name;
    //        $_SESSION["gender"] = $Gender;
        }

        header("refresh:0; url=../profile.php");
    }
    else   
        header("Location: ../login_page.php");





?>