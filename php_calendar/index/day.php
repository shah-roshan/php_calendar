<?php
/**
 * The day class contains all the methods for the day object which are then included in the Calender.php file
 * By Roshan Shah,roshanrupeshkumarshah@gmail.com
 */
class day{
    private $title,$description,$startTime,$endTime,$location,$date;

    public function  __construct($title,$description,$startTime,$endTime,$location,$date){

        $this->title=$title;
        $this->description=$description;
        $this->startTime=$startTime;
        $this->location=$location;
        $this->date=$date;
        $this->endTime=$endTime;
    }
    public function getTitle(){
        return $this->title;
        
    }
    public function getDescription(){
        return $this->description;
    }
    public function getStartTime(){
        return $this->startTime;
    }
    public function getEndTime(){
      return $this->endTime;
  }
    public function getLocation(){
        return $this->location;
    }
    public function getdate(){
        return $this->date;
    }
    public function setTitle($title){
      $this->title=$title;
    }
    public function setDescription($description){
        $this->description=$description;
      }
      public function setStartTime($time){
        $this->startTime=$time;
      }
      public function setEndTime($time){
        $this->endTime=$time;
      }
      public function setLocation($location){
        $this->location=$location;
      }
      public function setdate($date){
        $this->date=$date;
      }
      public function __toString()
      {
        return ((string)$this->getTitle()) ."<br>".
        ((string)$this->getDescription()) ."<br>".
        ((string)$this->getLocation()) ."<br>".
        ((string)$this->getStartTime()) ."  - ".
        ((string)$this->getEndTime());
        
        
      }
    

}
?>