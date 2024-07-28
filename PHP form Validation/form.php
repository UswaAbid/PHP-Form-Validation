<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Validation Example</title>
</head>
<body>

    <h2>Form Validation Example</h2>

    
<?php
    // Display success or error message if provided in URL query string
    if (isset($_GET['status'])) {
        if ($_GET['status'] === 'success') {
            echo '<p style="color: green;">Form submitted successfully!</p>';
        } elseif ($_GET['status'] === 'error') {
            echo '<p style="color: red;">Please fill out all fields.</p>';
        }
    }
?>


    <form action="validate.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>
        
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" cols="50"></textarea><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
