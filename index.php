<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Hotel Management</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h1>Hotel Management System</h1>
    </div>

    <div class="container">
        <h2>Rooms</h2>
        <table>
            <tr><th>Room No.</th><th>Type</th><th>Price/Night</th><th>Status</th></tr>
            <?php
            $result = mysqli_query($conn, "SELECT * FROM rooms");
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['room_number'] . "</td>";
                echo "<td>" . $row['room_type'] . "</td>";
                echo "<td>" . $row['price_per_night'] . "</td>";
                echo "<td>" . $row['status'] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>

        <h2>Guests</h2>
        <a class="btn" href="add_guest.php">+ Add Guest</a>
        <br><br>
        <table>
            <tr><th>Name</th><th>Phone</th><th>Email</th></tr>
            <?php
            $result = mysqli_query($conn, "SELECT * FROM guests");
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['full_name'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>