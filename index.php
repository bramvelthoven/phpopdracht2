<?php
    include './includes/database.php';
    include './includes/user.php';
    include './includes/viewuser.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php   
    $users = new ViewUser();
    $users->showAllUsers();

?>

    
</body>
</html>