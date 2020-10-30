<!DOCTYPE html>
<!-- Author: ROSHAN SHAH , roshanrupeshkumarshah@gmail.com-->

<?php  include "day.php";?>
<html>

<head>
    <title>TODO supply a title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <style>
        
        html{
            background-color:maroon;
        }
        body{
            margin-left: 10%;
            margin-right: 10%;
            margin-top:10%;
            background-color:lightslategrey;
            border:2px solid black;
        }
        hr{
            width:800px;
            height:5px;
            background-color: black;
        }
        #build2{
    float:left;
    margin-inline-start: 20px;
    margin-block-start: 50px;
    height:200px;
    width:500px;
    text-align: center;   
    font-family: cursive;
    font-size:20px;
  

    background-color:yellow;
    
 

}

#build{
    float:left;
    margin-left:100px;
   margin-bottom:50px;
    margin-block-start: 20px;
    height:200px;
    width:550px;
    text-align: center;   
    font-family: cursive;
    font-size:20px;
   margin-top:0px;
border:10px solid maroon;
    background-color:yellow;
   color:red;
   font-family: :cursive;
   font-weight:bold;
   padding-top:100px;
    

}

#leaveBlank{
    float:left;
    margin-left:100px;
 margin-bottom: 50px;
    height:200px;
    width:550px;
    text-align: center;   
    font-family: cursive;
    font-size:20px;
   
    background-color:palegreen;
    border:11px solid maroon;
    color:red;
   font-family: :cursive;
   font-weight:bold;
    padding-top:100px;
    
    
}
#dateHeading{
    margin-left:25%;
    float:left;
   
    margin-block-start: 2px;
    height:70px;
    width:70px;
  
    font-family: cursive;
    font-size:60px;
    
    background-color: blue;
    
    
    margin-top:50px;
}
header{
    font-family: cursive;
    font-size:40px;
    text-align:center;
    font-weight: bold;

}
header img{
    height:70px;
    width:70px;
    vertical-align: middle;
    clear: both;
}

        </style>
</head>

<body>
   
    <?php
   echo"<header><img src='calendar2.png' alt='calender icon'>September,2019 Schedule<img src='calendar2.png' alt='calender icon'></header>";
   echo"<hr>";     
   $listOfEvents=array();
        for($i=1;$i<=3;$i++){
         $title=filter_input(INPUT_GET,"title$i",FILTER_SANITIZE_STRING);
         $description=filter_input(INPUT_GET,"description$i",FILTER_SANITIZE_SPECIAL_CHARS);
         $startTime=filter_input(INPUT_GET,"startTime$i",FILTER_SANITIZE_STRING);
         $endTime=filter_input(INPUT_GET,"endTime$i",FILTER_SANITIZE_STRING);
         $location=filter_input(INPUT_GET,"location$i");
         $date=filter_input(INPUT_GET,"date$i",FILTER_SANITIZE_STRING);

         $event1=new day($title,$description,$startTime,$endTime,$location,$date);
         array_push($listOfEvents,$event1);
        }
      
         


            for($j=1;$j<31;$j++){
                echo " <span id='dateHeading'>";
                echo "$j ";
                echo"</span>";
                echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                for($check=0;$check<count($listOfEvents);$check++){
                    $matchDate=substr($listOfEvents[$check]->getdate(),-2);
                if($matchDate==$j){
                   
                echo "<span id='build'>$listOfEvents[$check]</span><br><br>";
               
                $check=count($listOfEvents)-1;
                    
                   
                }

               
                    else if($check===count($listOfEvents)-1 && $matchDate!==$j){
                    echo "<span id='leaveBlank'>No events yet...</span><br><br>";
                     
                    }
                
               
                    

            }//$check loop
           
            echo"<hr>"; 
          
            }//main for loop







/*for($j=0;$j<count($listOfEvents);$j++){
    if($j%2===0|| $j===0){
    echo" <div id='styleIt'>";
    echo " $listOfEvents[$j]";
    echo " </div>";
    echo"<br>";
    }
    else{
        echo" <div id='style2'>";
        echo " $listOfEvents[$j]";
        echo " </div>";
        echo"<br>";
    }
    var_dump($listOfEvents);}
                                        */

  


  
  ?>
</body>

</html>