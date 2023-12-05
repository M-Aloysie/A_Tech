<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
</head>
<body>

<h2>Edit Profile</h2>

<form id="editProfileForm">
    <label for="editUsername">Username:</label>
    <input type="text" id="editUsername" name="editUsername" required><br>

    

    <label for="editEmail">Email:</label>
    <input type="email" id="editEmail" name="editEmail" required><br>

    <label for="editPassword">New Password:</label>
    <input type="password" id="editPassword" name="editPassword"><br>

    <input type="submit" value="Save Changes">
</form>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const editProfileForm = document.getElementById("editProfileForm");

    editProfileForm.addEventListener("submit", function (event) {
        event.preventDefault();

        const editedUsername = document.getElementById("editUsername").value;
        const editedEmail = document.getElementById("editEmail").value;
        const editedPassword = document.getElementById("editPassword").value;

        // In a real scenario, you would send this data to the server
        // for server-side validation and updating the user's profile
        // For this example, we will just log the edited data to the console
        console.log("Edited Username:", editedUsername);
        console.log("Edited Email:", editedEmail);
        console.log("Edited Password:", editedPassword);

        // Optionally, you can redirect the user to their profile page or perform other actions
    });
});
</script>

</body>
</html>
