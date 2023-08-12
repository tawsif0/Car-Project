<?php

class user
{
        public $id;
        public $name;
        public $email;
        public $pass;
        public $path;
        public $address;
        public $mobile;
        


}


class ms
{
        public $id;
        public $subject;
        public $user_email;
        public $text;
        public $ans ;

}

class fb
{
        public $id;
        public $user_email;
        public $subject;
        public $text;
        
        



}


class order
{
        public $code;
        public $paid;
        public $del;
        public $user_email;
        public $address;
        



}

class cart
{
        public $pname;
        public $price;

}


class pt
{
        // Properties
        public $code;
        public $name;
        public $price;
        public $path;
        public $qty;
        public $type;
        // Methods
        function set_name($name)
        {
                $this->name = $name;
        }
        function get_name()
        {
                return $this->name;
        }
        function set_price($price)
        {
                $this->price = $price;
        }
        function get_rate()
        {
                return $this->rate;
        }
        function set_type($type)
        {
                $this->type = $type;
        }
        function get_type()
        {
                return $this->type;
        }
        function get_id()
        {
                return $this->id;
        }
        function set_id($id)
        {
                $this->id = $id;
        }
}
?>