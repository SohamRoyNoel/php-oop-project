<?php

class User {

    public $id;
    public $username;
    public $password;
    public $first_name;
    public $last_name;

    public static function find_all_users(){
        return self::find_this_query("select * from users");
    }

    // usual way
    /*public static function find_selected_users($id){
        global $database;
        $result_set = $database->query("select * from users where id=".$id);
        return $result_set;
    }*/

    public static function find_selected_users($id){
        global $database;
        $result_set = self::find_this_query("select * from users where id=".$id);
        return !empty($result_set) ? array_shift($result_set) : false;
    }

    public static function verify_user($email, $password){
        global $database;

        $ema = $database->escape_string($email);
        $pass = $database->escape_string($password);

        $sql = "select * from users where email = '{$ema}' AND password = '{$pass}'";

        $the_result = self::find_this_query($sql);

        return !empty($the_result) ? array_shift($the_result) : false;
    }


    public static function find_this_query($sql){
        global $database;
        $result_set = $database->query($sql);
        $object_array = array();
        while ($row = mysqli_fetch_assoc($result_set)){
            $object_array[] = self::instantation($row);
        }
        return $object_array;
    }

    public static function instantation($found_user){
        $object = new self;

        foreach ($found_user as $columns=>$value){
            if ($object->has_attribute($columns)){
                $object->$columns = $value;
            }
        }
        return $object;
    }

    private function has_attribute($column){
        $properties = get_object_vars($this);
        return array_key_exists($column, $properties);
    }

}