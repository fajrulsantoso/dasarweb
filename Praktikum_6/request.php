<html>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // collect value of input field
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    $name = $_POST['fname'];
    
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>
</body>
</html>
