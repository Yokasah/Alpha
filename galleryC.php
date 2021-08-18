<!--Made By Tomás Morais PSI4 a2783-->

<?php
class Gallery{
    private $id;
    private $photos;


    public function __construct($id,$photos){
        $this->id=$id;
        $this->photos=$photos;

    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id=$id;
    }

    public function getPhotos(){
        return $this->photos;
    }

    public function setPhotos($photos){
        $this->photos=$photos;
    }


}
?>