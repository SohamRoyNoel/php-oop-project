<?php require_once "includes/init.php" ?>
<?php

//    if ($session->is_signed_in()){
//        header('Location: index.php');
//    }

    if (isset($_POST['submit'])){
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        $user_found = User::verify_user($email, $password);

        if ($user_found){
            $session->login($user_found);
            $_SESSION['name'] = $user_found->name;
            header("Location: index.php");
        } else {
            $message = "incorrect";
        }
    } else {
        $email = "";
        $password = "";
    }

?>

