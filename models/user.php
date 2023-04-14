<?php

    class User {
        static public function login($data) {
            $username = $data['username'];
      
            try {
                $query = 'SELECT * FROM users WHERE username = :username';
                $stmt = DB::connect()->prepare($query);
                $stmt->execute(array(":username" => $username));
                $user = $stmt->fetch(PDO::FETCH_OBJ);

                return $user;
                if($stmt->execute()) {
                return 'ok';
                }
            } catch(PDOException $ex) {
                echo 'error' . $ex->getMessage();
            }
        }

        static public function createUser($data) {
            $$result = DB::connect()->prepare('INSERT INTO users (username, email, password) VALUES
            (:username, :email, :password)');
            $result->bindParam(':username',$data['username']);
            $result->bindParam(':email',$data['email']);
            $result->bindParam(':password',$data['password']);
      
            if($result->execute($data)){
              return 'ok';
            } else {
              return 'error';
            }
          }
    }

?>