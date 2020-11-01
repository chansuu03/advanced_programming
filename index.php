<?php
  class User
  {
    function __construct($name, $username, $email)
    {
      $this->name = $name;
      $this->username = $username;
      $this->email = $email;
    }

    function addFriend()
    {
      echo $this->name . " added a friend";
      echo "<br>";
    }

    function postStatus()
    {
      echo $this->name . " postedd a status";
      echo "<br>";
    }
  }

  $user1 = new User("Christian Lazaro", "chansuu", "lazarochan03@gmail.com");
  $user1->addFriend();
  $user1->postStatus();
?>
