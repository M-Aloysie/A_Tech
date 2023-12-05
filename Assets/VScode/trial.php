<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <?php
    session_start();

    // Check if the user is logged in
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];

        // Display user information
        echo "<h2>Welcome, $username!</h2>";
        echo "<p>User details go here...</p>";

        // Logout button
        echo "<form action='logout.php' method='post'>";
        echo "<input type='submit' value='Logout'>";
        echo "</form>";
    } else {
        // Redirect to the login page if the user is not logged in
        header("Location: signin.html");
        exit();
    }
    ?>
    <?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate credentials (you should have your own validation logic)
    if ($username == "example_user" && $password == "example_password") {
        // Start a session and store the username
        session_start();
        $_SESSION['username'] = $username;

        // Redirect to the dashboard upon successful login
        header("Location: dashboard.php");
        exit();
    } else {
        // Display an error message if login fails
        $error_message = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h2>Login</h2>

    <?php
    // Display error message if login failed
    if (isset($error_message)) {
        echo "<p style='color: red;'>$error_message</p>";
    }
    ?>
    <?php
// Start the session
session_start();

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect to the login page after logout
header("Location: signin.html");
exit();
?>


    <form action="login.php" method="post">
        <label for="username">Username or Email:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>

</body>
</html>
