<?php
class User
{

   //Private Properties Declared
   private $username;
   private $password;
   private $email;

   // Setter Method for Username
   public function setUsername($name){
      if (empty($name)) {
         echo 'Name must not be empty';
      } elseif ($this->validateLength($name, 3)) {
            $this->username = $name;
      } else {
         echo 'Error: Username must be at least 3 characters long.<br>';
      }
   }

   //Setter Method for Password
   public function setPassword($pass) 
   {
      if (empty($pass)) {
         echo 'Password must not be empty';
      } elseif ($this->validateLength($pass, 6)) {
            $this->password = $pass;
      } else {
         echo 'Error: Password must be at least 6 characters long.<br>';
      }
   }

   // Setter Method for Email
   public function setEmail($email) {
      if (empty($email)) {
         echo 'Email must not be empty';
      } elseif (str_contains($email, '@')) {
         $this->email = $email;
      } else {
         echo 'Error: Email must contain an \'@\' symbol';
      }
         
      
   }

      // Getter Method for Username
   public function getUsername() {
      return $this->username;
   }

   // Getter Method for Email
   public function getEmail() {
      return $this->email;
   }

   // Private Helper Method
   private function validateLength($str, $min) {
      return strlen($str) >= $min;
   }

}

// Testing the class created

$user = new User();

//Setting values for both the username and email
$user->setUsername("Ayo");
$user->setEmail("Ayo@gmail.com");

echo $user->getUsername();
echo "<br />";
echo $user->getEmail();
?>