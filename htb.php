<!DOCTYPE html>
<html>
<head>
    <title>System Command Output</title>
</head>
<body>
<h1>System Command Output:</h1>
<?php
    // Read the contents of the /etc/passwd file
    $output = file_get_contents('/etc/passwd');
    // Display the contents of the file
    echo '<pre>' . htmlspecialchars($output) . '</pre>';
?>
</body>
</html>
