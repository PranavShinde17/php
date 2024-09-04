<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Demo</title>
</head>
<body>

    <form method="post">
            <label for="username">Enter username: </label>
            <input type="text" id="username" name="username">
            <br><br>
            <input type="submit" name="create" value="Create Session">
            <input type="submit" name="access" value="Access Session">
            <input type="submit" name="destroy" value="Destroy Session">
    </form>

    <?php
    session_start();
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['create'])){
                $_SESSION['username'] = $_POST['username'];
                echo "Session variable ".$_POST['username']." is created <br>";
            }
            if(isset($_POST['access'])){
                if(isset($_SESSION['username'])){
                    echo "Username is ".$_SESSION['username']."<br>";
                }
                else{
                    echo "Username is not set <br>";
                }
            }
            if(isset($_POST['destroy'])){
                session_unset();
                session_destroy();
            }
        }
    ?>
</body>
</html>