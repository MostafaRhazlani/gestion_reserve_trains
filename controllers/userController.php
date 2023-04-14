<?php
    class userController {

        public function index() {
            include('./views/page/user/index.php');
        }
        
        public function auth() {

            if(isset($_POST['submit'])) {
                $data['username'] = $_POST['username'];
                
                $result = User::login($data);
                
                if($result->username === $_POST['username'] && md5($_POST['password']) === $result->password) {
                  $_SESSION['logged'] = true;
                  $_SESSION['username'] = $result->username;
                  redirect::to(BASE_URL.'home');
                } else {
                  session::set('error', 'Pseudo ou mot de passe est incorrect');
                  redirect::to(BASE_URL.'user');
              }
            }
        }

        static public function logout() {
            session_destroy();
            redirect::to('index');
        }
    }


?>