<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Injection Login Form</title>
</head>

<body>
    <div class="container">
        <h1>Login Form</h1>
        <form method="POST" action="">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <input type="submit" value="Login">
        </form>

        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        include 'db.php';

        if ($pdo) {
            echo '<div class="status" style="color: green;">Connected to the database successfully.</div>';
        } else {
            echo '<div class="status" style="color: red;">Failed to connect to the database.</div>';
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];

            //DO NOT DO THIS IN REAL LIFE. THIS IS FOR DEMONSTRATION PURPOSES ONLY.
            $query = "SELECT * FROM utenti WHERE username = '$username' AND password = '$password'";
            //Another way to make it even more unsafe
            //$query = eval("return \"SELECT * FROM utenti WHERE username = '$username' AND password = '$password';\";");

            $result = $pdo->query($query);

            if ($result && $result->rowCount() > 0) {
                echo '<div class="status" style="color: green;">Login successful!</div>';
            } else {
                echo '<div class="status" style="color: red;">Invalid username or password.</div>';
            }
        }
        ?>
    </div>
</body>

</html>