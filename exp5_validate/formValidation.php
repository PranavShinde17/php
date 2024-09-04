<?php
        if(isset($_POST['submit']))
        {
            $name=$_POST["name"];
            $email=$_POST["email"];
            $phone=$_POST["phone"];
            $gender=$_POST["gender"];
            $bdate=$_POST["bdate"];
            echo "Name :".$name."<br>";


            echo "Email :".$email;
            if(preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $email)) 
            {   
                echo "<br>valid email address<br>";
            }
            else
            {
                echo "<br>Invalid email address<br>";
            }
 
            echo "Phone no. ".$phone;
            if(filter_var($phone, FILTER_VALIDATE_INT)) 
            {
                echo "<br>valid phone number<br>";
            }
            else
            {
                echo "<br>Invalid phone number<br>";
            }


            echo "Birth Date :".$bdate.":- ";
            if (preg_match("^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$^",$bdate))
            {
                
                echo "Valid Birth date<br> ";
            }else{
                echo "Invalid Birth date<br> ";
            }


            echo "Gender :".$gender."<br>";
        }
?>