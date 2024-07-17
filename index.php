<!DOCTYPE html>
<html>
<head>
    <title>Animal Help</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <h1>Welcome to Animal Help</h1>
        <nav>
            <a href="register.php">Register</a>
            <a href="login.php">Login</a>
            <a href="add_animal.php">Add Animal</a>
        </nav>
    </header>
    <main>
        <h2>List of Animals</h2>
        <?php
        include 'config.php';

        $sql = "SELECT * FROM animals";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='animal'>";
                echo "<h3>" . $row['name'] . "</h3>";
                echo "<p>Type: " . $row['type'] . "</p>";
                echo "<p>" . $row['description'] . "</p>";
                echo "<img src='" . $row['image'] . "' alt='" . $row['name'] . "'>";
                echo "</div>";
            }
        } else {
            echo "No animals found.";
        }
        ?>
    </main>
</body>
</html>
