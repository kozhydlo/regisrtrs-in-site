<?php
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']),
    FILTER_SANITIZE_STRING);

    if(mb_strlen($login) < 5 || mb_strlen($login) > 90 ) {
        echo "Заваликий логін";
        exit();
        
    }else if(mb_strlen($name) < 3 || mb_strlen($name) > 50 ) {
        echo "Завалике ім'я";
        exit();
        
    }else if(mb_strlen($password) < 2 || mb_strlen($password) > 6 ) {
        echo "Заваликий пароль (від 2 до 6 символів)";
        exit();
    }
        
    $mysql = new mysqli("localhost', '	root', 'root', 'registeri-bg');
    $mysql->query('INSERT INFO `users` ('login', 'password','name') VALUES('$login', '$password', '$name')");

    $mysql->close();
    
    ?>