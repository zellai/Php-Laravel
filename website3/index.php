<?php

    $msg = '';
    $msgClass = '';

    //check submit
    if(filter_has_var(INPUT_POST, 'submit')){
        // echo 'Submitted';
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        //Check required fields

        if(!empty($name) && !empty($email) && !empty($message)){
            //passed
            echo 'PASSED';
        } else {
            //failed
            $msg = 'PLease fill in all fields';
            $msgClass = 'alert-danger';
        }

    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/cosmo/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">My Website</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php if($msg != ''): ?>
            <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
        <?php endif; ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="">
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea name="message" class="form-control"></textarea>
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>