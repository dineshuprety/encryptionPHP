<?php

class Base_class extends Database
{
    private $Query;

    public function Normal_Query($query, $param = null){
      if(is_null($param)){
        $this->Query = $this->con->prepare($query);
        return $this->Query->execute();
      }else{
        $this->Query = $this->con->prepare($query);
        return $this->Query->execute($param);
      }
    }
   //return total id 
    public function Count_Rows(){
      return $this->Query->rowCount();
    }
    public function security($data) {
      return trim(strip_tags(str_replace(' ','',$data)));
    }
    public function Create_Session($session_name, $session_value){
      // session_regenerate_id();
      $_SESSION[$session_name] = $session_value;
      
    }
    public function Single_Result(){
      return $this->Query->fetch(PDO::FETCH_OBJ);
    }
    
}