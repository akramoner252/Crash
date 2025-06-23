<?php
// Simple PHP page example
$name = "Visitor";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>My PHP Page</title>
</head>
<body>
  <h1>Welcome to my PHP page!</h1>
  <p>Hello, <?php echo htmlspecialchars($name); ?>!</p>
  <p>Today’s date is <?php echo date("F j, Y"); ?>.</p>
</body>
</html>