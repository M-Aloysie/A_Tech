<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
<form id="signinForm" class="row g-3 needs-validation" novalidate style="opacity: 0.9; width:500px; height: 550px; margin-left: 500px; border: 10px solid rgb(95, 54, 4); padding: 30px; margin-top: 50px;">
        <h2 style="color: rgb(10, 84, 20); font-weight: bolder; font-size: 40px; text-align: center; opacity: 0.9; margin-bottom: 60px;"><b>Sign In</b></h2>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label" style="opacity:0.9; color: rgb(173, 102, 14);">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" required>
                <div class="invalid-feedback" id="emailError">Please enter a valid email address.</div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label" style="opacity:0.9; color: rgb(173, 102, 14);">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" required>
                <div class="invalid-feedback" id="passwordError">Please enter your password.</div>
            </div>
        </div>
        <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0" style="opacity:0.9; color: rgb(173, 102, 14);"> User Type</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked style=".form-check-input:hover::after{background-color: rgb(173, 102, 14);}" required>
                    <label class="form-check-label" for="gridRadios1" style="opacity:0.9; color: rgb(173, 102, 14);">
                        Farmer
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2" style="opacity:0.9; color: rgb(173, 102, 14);">
                        Customer
                    </label>
                </div>
            </div>
        </fieldset>
        <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                    <label class="form-check-label" for="gridCheck1" style="opacity:0.9; color: rgb(173, 102, 14);">
                        Remember me
                    </label>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-warning" style="margin-left: 150px; width: 200px;" onclick="validateSignInForm()"><a href="Home.html" style="color: black; text-decoration: none; transform: 0.3s ease in; font-weight: bolder;">Sign In</a></button>
        <p style="opacity:0.9; color: rgb(134, 76, 6); margin-top: 20px;">Don't have an account? <a href="/Signup.html" style="opacity:0.9; color: rgb(234, 136, 16); text-decoration: double;">Sign up</a></p>
    </form>
    <?php
include "connect.php"; // Make sure to include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['cus_email'];
    $password = $_POST['cus_password'];
    $userType = isset($_POST['cus_user_type']) ? 'Farmer' : 'Customer'; // Assuming the first radio button is for farmers

    // Check user credentials in the database
    $sql = "SELECT * FROM customers WHERE cus_email='$email' AND cus_password='$password' AND cus_user_type='$userType'";
    $result = mysqli_query($con, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        // Authentication successful
        header("location: Home.html"); // Redirect to the home page or any other page
        exit();
    } else {
        // Authentication failed
        echo "Invalid email or password. Please try again.";
    }

    mysqli_close($con);
}
?>

</body>
</html>