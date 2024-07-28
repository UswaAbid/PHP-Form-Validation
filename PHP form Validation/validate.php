<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all fields are filled
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {
        // Redirect back to form.php with success message
        header("Location: form.php?status=success");
        exit();
    } else {
        // Redirect back to form.php with error message
        header("Location: form.php?status=error");
        exit();
    }
} else {
    // If someone tries to access validate.php directly without submitting the form
    header("Location: form.php");
    exit();
}
?>
