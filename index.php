<?php
        $msg = "";
        $msgClass= "";

        if(isset($_POST['submit'])){
                $name = htmlspecialchars($_POST['name']);
                $email = htmlspecialchars($_POST['email']);
                $message = htmlspecialchars($_POST['message']);
                if(!empty($name) && !empty($email) && !empty($message)){
                        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                               $email = filter_var($email, FILTER_SANITIZE_EMAIL);
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
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method= "POST">
                        <div class="form-group">
                                <label for="name" class= "control-label">Name: </label>
                                <input type="text" class="form-control" name= "name" value= "<?php echo isset($name); ?>">
                        </div>
                        <div class="form-group">
                                <label for="email" class= "control-label">Email: </label>
                                <input type="text" class="form-control" name= "email" value= "<?php echo isset($email); ?>">
                        </div>
                        <div class="form-group">
                                <label for="message" class= "control-label">Message: </label>
                                <textarea name="message" class= "form-control"><?php echo isset($_POST['message']); ?></textarea>
                        </div>
                        <input type="submit" class="btn btn-primary" name= "submit" value= "Submit">
                </form>
        </div>
<?php include('inc/footer.php'); ?>