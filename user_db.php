<?php
class CategoryDB {
    public static function get() {
        $db = Database::getDB();

        $query = 'SELECT * FROM accounts
                  WHERE accounts.id = :category_id
                  ORDER BY id';
        $statement = $db->prepare($query);
        $statement->bindValue(":category_id", $category_id);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();
    
        foreach ($rows as $row) {
            $user = new user($id,
                                   $row['id'],
                                   $row['email'],
                                   $row['fname']
                                    $row['Lname']
                                     $row['phone']
                                      $row['birthday']
                                       $row['gender']
                                        $row['password']);


                               
            $user->setId($row['id']);
            $products[] = $user;
        }
        return $user;
    }
     public static function getuser($user_id) {
        $db = Database::getDB();
        $query = 'SELECT * FROM accounts 
                  WHERE userID = :id';
        $statement = $db->prepare($query);
        $statement->bindValue(":user_id", $id);
        $statement->execute();
        $row = $statement->fetch();
        $statement->closeCursor();
    
        $id = CategoryDB::getID($row['ID']);
        $user = new user($id,
                              $row['id'],
                                   $row['email'],
                                   $row['fname']
                                    $row['Lname']
                                     $row['phone']
                                      $row['birthday']
                                       $row['gender']
                                        $row['password']);
        $user->setID($row['id']);
        return $user;
    }

  public static function deleteuser($user_id) {
        $db = Database::getDB();
        $query = 'DELETE FROM accounts
                  WHERE userID = :id';
        $statement = $db->prepare($query);
        $statement->bindValue(':user_id', $id);
        $statement->execute();
        $statement->closeCursor();
    }

    public static function adduser($user) {
        $db = Database::getDB();
        $id = $user->getid()->getID();
        $email = $user->getemail();
        $fname = $user->getfname();
        $Lname = $user->getLname();
         $phone = $user->getphone();
          $birthday = $user->getbirthday();
          $gender = $user->getgender();
           $password = $user->getpassword();

        $query = 'INSERT INTO accounts
                     (ID, email, fname, Lname , phone , birthday , gender , password)
                  VALUES
                     (:id, :email, :fname,:Lname , :phone , :birthday , :gender ,  :password)';
        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':fname', $fname);
        $statement->bindValue(':Lname', $Lname);
         $statement->bindValue(':phone', $phone);
          $statement->bindValue(':birthday', $birthday);
           $statement->bindValue(':gender', $gender);
            $statement->bindValue(':password', $password);
        $statement->execute();
        $statement->closeCursor();
    }
}
?>



