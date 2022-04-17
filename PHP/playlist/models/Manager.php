<?php class Manager{

   public function dbConnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=playlist;charset=utf8', 'root', '1234');
        return $db;
    }

}
