<?php
// check for posted data
/*
    if(filter_has_var(INPUT_POST, 'data')){
        echo 'Data Found';
    }else {
        echo 'No Data';
    }
    
    if(filter_has_var(INPUT_POST, 'data')){
        $email = $_POST['data'];

        //remove illegal chars
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo $email.'<br>';

        if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){
            echo 'Email is valid';
        }else {
            echo 'Email is NOT Valid';
        }
    }
    */

    $arr = array(
        "name" => "brad travercy",
        "age" => "35",
        "email" => "brad@gmail.com"
    );

    $filters = array(
        "name" => array(
            "filter" => FILTER_CALLBACK,
            "options" => "ucwords"
        ),
        "age" => array(
            "filter" => FILTER_VALIDATE_INT,
            "options" => array(
                "min-range" => 1,
                "max-range" => 120
            )
        ),
        "email" => FILTER_VALIDATE_EMAIL
    );
    print_r(filter_var_array($arr, $filters));

?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="data">
    <button type="submit">Submit</button>
</form>