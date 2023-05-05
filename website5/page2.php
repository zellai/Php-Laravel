<?php
    setcookie('username', 'Frank', time() + (86400 * 30));

    // Delete cookie
    setcookie('username', 'Frank', time() - 3600);

    if(isset($_COOKIE['username'])){
        echo 'User ' .$_COOKIE['username'] . ' is set <br>' ;

    } else {
        echo 'User is not set.' ;
    }