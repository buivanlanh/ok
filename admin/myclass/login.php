<?php
include('myclass.php');
class Login extends ecom
{
    public function login_admin ($email, $password)
    {   
        $users = mysqli_query(
            $this->connect(),
            "SELECT * FROM users WHERE email = '$email' AND password = '$password' LIMIT 1"
        );
        if(mysqli_num_rows($users) == 1){

            session_start();
            foreach($users as $user){
                $_SESSION['id_login']    = $user['id'];
                $_SESSION['name_login']  = $user['name'];
                $_SESSION['email_login'] = $user['email'];
                $_SESSION['password_login']    = $user['password'];

                echo '<script> window.location="../../"; </script>';
            }
        }else{
            echo '<script> alert("Đăng nhập không thành công"); </script>';
            echo '<script> window.reload(); </script>';
        }
    }
    public function check_login()
    {
        session_start();
        if(isset($_SESSION['id_login']) && isset($_SESSION['name_login']) && isset($_SESSION['email_login']) && isset($_SESSION['password_login'])){
            $id       = $_SESSION['id_login'];
            $name     = $_SESSION['name_login'];
            $email    = $_SESSION['email_login'];
            $password = $_SESSION['password_login'];

            $users = mysqli_query(
                $this->connect(),
                "SELECT * FROM users WHERE id = '$id' AND name = '$name' AND email = '$email' AND password = '$password'"
            );
            if(mysqli_num_rows($users) < 1 || mysqli_num_rows($users) > 1){
                echo '<script> history.back(); </script>';
            }
        }else{
            echo '<script> history.back(); </script>';
        }
    }
    public function logout()
    {
        session_destroy();
        echo '<script> window.location="pages/examples/login.php"; </script>';
    }
}

?>