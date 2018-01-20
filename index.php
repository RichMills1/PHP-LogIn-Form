<?php
        $msg = "";
        $msgClass= "";

        if(filter_has_var(INPUT_POST, 'submit')){
                $name = htmlspecialchars($_POST['name']);
                $email = htmlspecialchars($_POST['email']);
                $message = htmlspecialchars($_POST['message']);

                if(!empty($name) && !empty($email) && !empty($message)){
                        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                               $email = filter_var($email, FILTER_SANITIZE_EMAIL);
                               $msg = 'Details submitted successfully';
                               $msgClass = 'alert-success';
                        }else {
                                $msg = 'Please enter a valid email address';
                                $msgClass = 'alert-danger';
                        }
                } else {
                        $msg = 'Please fill all fields';
                        $msgClass = 'alert-danger';
                }
        }
?>

<?php include('inc/header.php'); ?>
        <div class="container">     
                <div class="form-border">
                        <!-- Alert Message -->
                        <div class="alert <?php echo $msgClass; ?>">
                                <?php echo $msg; ?>
                        </div>
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method= "post">
                                <div class="form-group">
                                        <label for="name" class= "control-label">Name: </label>
                                        <input type="text" class="form-control" name= "name" value= "<?php echo isset($_POST['name']) ? $name : ''; ?>" placeholder= "Your Full Name" />
                                </div>
                                <div class="form-group">
                                        <label for="email" class= "control-label">Email: </label>
                                        <input type="text" class="form-control" name= "email" value= "<?php echo isset($_POST['email'])? $email : ""; ?>" placeholder= "Email Address"/>
                                </div>
                                <div class="form-group">
                                        <label for="message" class= "control-label">Message: </label>
                                        <textarea name="message" rows= "5" class= "form-control" placeholder= "Something about you"><?php echo isset($_POST['message']) ? $message : ""; ?></textarea>
                                </div>
                                <input type="submit" class="btn btn-primary" name= "submit" value= "Submit">
                        </form>
                </div>      
        </div>
<?php include('inc/footer.php'); ?>