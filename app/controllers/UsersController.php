<?php
class UsersController extends Controller{
   public function register(){
       if ($_SERVER['REQUEST_METHOD']==='POST') {
           $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
           $user= new Users;
           $user->loadData($post);
           $user->password = password_hash($user->password, PASSWORD_DEFAULT);
           if ($user->validate()) {
               $user->save();
               header("Location:".ROOT_URL.'/users/login');
           }else{
            $this->view('register.html');
           }

       } else {
               $this->view('register.html');
        }
       
   }
   public function login(){
    if ($_SERVER['REQUEST_METHOD']==='POST') {
        $User =new Users();
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $userLogin= new Users;
        $userLogin->loadData($post);
        $user = $User->where('email', $userLogin->email)->first();
        if ($user) {
            if($user->email==$userLogin->email &&password_verify($userLogin->password,$user->password)){
                $_SESSION['is_logged_in'] = true;
                $_SESSION['user_data'] = array(
                    "id"=> $user->id,
                    "name"=> $user->name,
                    "email" => $user->email
                );
                header("Location:".ROOT_URL);
                echo 'Bien';
            }else{
                echo 'Mal';
            }
        }
    } else {
        $this->view('login.html');
     }
   }
   public function logout(){
        if($_SESSION['is_logged_in']){
            session_unset();
            header("Location:".ROOT_URL);
        }
   }
}

