<?php 
require_once('globals.php');
require_once('bd.php'); 
require_once("models/User.php");
require_once("models/Message.php");
require_once("dao/UserDAO.php");

$message = new Message($base_url);
$userDao = new UserDAO($conn, $base_url);
$type = filter_input(INPUT_POST, "type");

if($type === "register") {
    $name = filter_input(INPUT_POST, "name");
    $lastname = filter_input(INPUT_POST, "lastname");
    $email = filter_input(INPUT_POST, "email");
    $password = filter_input(INPUT_POST, "password");
    $confirmpassword = filter_input(INPUT_POST, "confirmpassword");

    if($name && $lastname && $email && $password) {
        if($password === $confirmpassword) {
            if($userDao->findByEmail($email) === false) {

                $user = new User();
                $userToken = $user->generateToken();
                $finalPassword = $user->generatePassword($password);

                $user->name = $name;
                $user->lastname = $lastname;
                $user->email = $email;
                $user->password = $finalPassword;
                $user->token = $userToken;

                $auth = true;

                $userDao->create($user, $auth);

            } else {
                $message->setMessage("Email já cadastrado, tente outro!", "error", "back");

            }
        } else {
            $message->setMessage("As senhas não estão iguais!.", "error", "back"); 
        }

    } else {
        $message->setMessage("Por favor, preencha todos os campos.", "error", "back");
    }

} else if ($type === "login") {

}
?>