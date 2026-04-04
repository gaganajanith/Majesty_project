<?php
    include "db.php";

    session_start();

    if(isset($_POST['submit']))
        {
           $email=$_POST['email'];
           $password=$_POST['password']; 

           $sql ="select * from users where email='$email'";
           $result =mysqli_query($conn,$sql);
           
           if($result->num_rows>0)
            {
                $row =mysqli_fetch_assoc($result);
                if($row['password'] == $password)
                    {
                        $_SESSION['user_id'] = $row['id'];
                        $_SESSION['user_name'] = $row['name'];
                        $_SESSION['user_role'] = $row['role'];
                         
                        if($_SESSION['user_role'] == "admin")
                            {
                                header("Location:dashboard.php");
                            }

                        else 
                            {
                                header("Location:checkout.php");
                            }
                    }
                
                else
                    {
                        echo "Wrong Password";
                    }

            }
            else
                {
                    echo "Please Go For Signup";
                }
        }

?>