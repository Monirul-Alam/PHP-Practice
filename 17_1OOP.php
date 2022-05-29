<?php


class User {
   public $name;
   public $email;
   public $password;

// Contrucitor
public function __construct($name, $email, $password)
{
  $this-> name = $name;
  $this-> email = $email;
  $this-> name = $name;
}






   function set_name($name) {
  $this->name = $name;
}

function get_name() {
  return $this-> name;
}
 




  }


// Instatiate a user object

$user1 = new User('brad','modiodgmailc.com', 'fddf');
$user2 = new User('bdfd','fggfdgmailc.com', 'fssddf');
//  echo $user2-> name;

 



// $user1->set_name('brad');
// echo $user1->get_name();

// Inheritance

class Employee extends User {
   Public function __construct($name, $email, $password, $title)  {
     parent:: __construct($name, $email, $password);
     $this-> title = $title;
   }
   public function get_title() {
     return $this-> title;
   }
}

$employee1 = new Employee('Sara', 'sara@gmail.com','45455','Manager');
echo $employee1-> get_title();

?>
