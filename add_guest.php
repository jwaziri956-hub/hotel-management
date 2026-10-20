<?php
include 'db.php';

if (isset($_POST['save'])) {
    $name  = $_POST['full_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    mysqli_query($conn, "INSERT INTO guests (full_name, phone, email)
                         VALUES ('$name', '$phone', '$email')");

    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Guest</title>
    <style>
        body { font-family: Arial; margin: 30px; }
        input { display: block; margin-bottom: 10px; padding: 8px; width: 300px; }
        button { padding: 8px 16px; background: #2c3e50; color: white; border: none; }
    </style>
</head>
<body>
    <h1>Add New Guest</h1>
    <form method="POST">
        <input type="text" name="full_name" placeholder="Full name" required>
        <input type="text" name="phone" placeholder="Phone">
        <input type="email" name="email" placeholder="Email">
        <button type="submit" name="save">Save Guest</button>
    </form>
    <p><a href="index.php">Back to list</a></p>
</body>
</html>