<!--Made By Tomás Morais PSI4 a2783-->

<?php
class Contact{
    private $id;
    private $street;
    private $phone;
    private $email;


    public function __construct($id,$street,$phone,$email){
        $this->id=$id;
        $this->street=$street;
        $this->phone=$phone;
        $this->email=$email;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id=$id;
    }

    public function getStreet(){
        return $this->street;
    }

    public function setStreet($street){
        $this->street=$street;
    }

    public function getPhone(){
        return $this->phone;
    }

    public function setPhone($phone){
        $this->phone=$phone;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setDate($email){
        $this->email=$email;
    }
}
?>