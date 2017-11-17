<?php
class user {
    private  $id, $email, $fname, $lname, $phone , $birthday , $gender , $password;
    public function __construct($id, $email, $fname, $lname, $phone , $birthday , $gender , $password) {
        $this->id = $id;
        $this->email = $email;
        $this->fname = $fname;
        $this->lname = $lname;
         $this->phone = $phone;
          $this->birthday = $birthday;
           $this->gender = $gender;
            $this->password = $password;
            
    }
    
     public function getID() {
        return $this->id;
    }
    public function setID($value) {
        $this->id = $value;
    }
 public function getEMAIL() {
        return $this->email;
    }
    public function setEMAIL($value) {
        $this->id = $value;
    }
 public function getFNAME() {
        return $this->fname;
    }
    public function setFNAME($value) {
        $this->id = $value;
    }
 public function getLNAME() {
        return $this->lname;
    }
    public function setLNAME($value) {
        $this->id = $value;
    }
     public function getPHONE() {
        return $this->phone;
    }
    public function setPHONE($value) {
        $this->id = $value;
    }
 public function getBIRTHDAY() {
        return $this->birthday;
    }
    public function setBIRTHDAY($value) {
        $this->id = $value;
    }
 public function getGENDER() {
        return $this->gender;
    }
    public function setGENDER($value) {
        $this->id = $value;
    }

 public function getPASSWORD() {
        return $this->password;
    }
    public function setPASSWORD($value) {
        $this->id = $value;
    }
 
 public function displayUserRow() {
        		return "<tr><td>". $this->id."</td><td>".$this->email."</td><td>".$this->fname."</td><td>".$this->lname."</td><td>".$this->phone."</td><td>".$this->birthday."</td><td>".$this->gender."</td><td>".$this->password"</td><td>";
    		
    }




?>