<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);
    
    $errors = [];
    
    // Validate empty fields
    if (empty($name)) {
        $errors[] = "Name is required";
    }
    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }
    if (empty($message)) {
        $errors[] = "Message is required";
    }
    
    // Simulate success response
    if (empty($errors)) {
        // In real scenario, send email or save to database
        // For now, just simulate success
        header("Location: thank-you.html");
        exit();
    } else {
        // If errors, show them (you can display on contact page)
        echo "<h3>Errors:</h3><ul>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul><a href='index.php#contact'>Go back</a>";
    }
} else {
    header("Location: index.php#contact");
    exit();
}
?>
