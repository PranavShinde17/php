<!-- 1.	Implement the PHP code to
-	Set the cookies
-	Retrieve the information of cookies 
-	Update the cookies
-	Delete the cookies  -->

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cookies</title>
    </head>
    <body>
        
        <form method="post">
            <label for="username">Enter Username: </label>
            <input type="text" id="username" name="username">
            <br><br>
            <input type="submit" name="set" value="Set Cookie"><br>
            <input type="submit" name="update" value="Update Cookie"><br>
            <input type="submit" name="retrieve" value="retrieve Cookie"><br>
            <input type="submit" name="delete" value="Delete Cookie">
            <br><br>
        </form>

        <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['set'])){
                $cookie_name = "user";
                $cookie_value = $_POST['username'];
                setcookie($cookie_name, $cookie_value, time() + 3600);
                echo "Cookie named ".$cookie_value." is set <br>";
            }
            if(isset($_POST['update'])){
                $cookie_name = "user";
                $cookie_value = $_POST['username'];
                setcookie($cookie_name, $cookie_value, time() + 3600);
                echo "Cookie named ".$cookie_value." is updated <br>";
            }
            if(isset($_POST['delete'])){
                setcookie($cookie_name, $cookie_value, time() - 3600);
                echo "The cookie is been deleted";
            }
            if(isset($_POST['retrieve'])){
                if(isset($_COOKIE["user"])){
                    echo "User is= " .$_COOKIE["user"]. "<br>";
                }
                else{
                    echo "User is not set! <br>";
                }
            }
        }
        ?>
    </body>
    </html>