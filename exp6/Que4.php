<!DOCTYPE html>
<html>
<head>
    <title>Session Management</title>
</head>
<body>
    <h1>Welcome to the Dashboard</h1>
    <form method="POST" action="logout.php">
        <button type="submit">Logout</button>
    </form>
    
    <form method="POST" action="">
        <button type="submit" name="back">Back</button>
    </form>
    <?php
    session_start();
    
    $_SESSION['username'] = 'Pranav';
    echo "Welcome, " . $_SESSION['username'];
    if (isset($_SESSION['username'])) {
        echo "<p>Logged in as: " . $_SESSION['username'] . "</p>";
    } else {
        echo "<p>You are not logged in.</p>";
    }
    ?>
</body>
</html>
