<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LogIn Form</title>
    <link rel="stylesheet" href="css/bootstrap.min3.css" type= "text/css">
    <link rel="stylesheet" href="css/style.css" type= "text/css">
</head>
<body>
        <div class="container">
                <nav class= "navbar navbar-default">
                        <div class="navbar-header">
                                <a href="<?php echo ROOT_URL; ?>" class= "navbar-brand">myPHP LogIn Form</a>
                        </div>
                </nav>   
        </div>

        <div class="container">
                <!-- Alert Message -->
                <div class="alert <?php echo $msgClass; ?>">
                        <?php echo $msg; ?>
                </div>
        </div>
        <div class="container">