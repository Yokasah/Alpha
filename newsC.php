<!--Made By Tomás Morais PSI4 a2783-->

<?php
class News{
    private $id;
    private $title;
    private $content;
    private $date;
    private $img;
    private $learn;

    public function __construct($id,$title,$content,$date,$img){
        $this->id=$id;
        $this->title=$title;
        $this->content=$content;
        $this->date=$date;
        $this->img=$img;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id=$id;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        $this->title=$title;
    }

    public function getContent(){
        return $this->content;
    }

    public function setContent($content){
        $this->content=$content;
    }

    public function getDate(){
        return $this->date;
    }

    public function setDate($date){
        $this->date=$date;
    }

    public function getImg(){
        return $this->img;
    }

    public function setImg($img){
        $this->img=$img;
    }

    public function getLearn(){
        return $this->learn;
    }

    public function setLearn($learn){
        $this->learn=$learn;
    }
}
?>