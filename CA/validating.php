<?php include '_include\header.php';?>

<img src="_images\flags.png"  width="300" height="200" id="imgfla">
<br>
<br>
<br>
<br>
<br>
<div class="validatecontent">

<?php
    $country = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
    "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki",
    "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
    "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", 
    "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", 
    "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia",
    "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", 
    "Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta", 
    "Austria" => "Vienna", "Poland"=>"Warsaw") ;


foreach($country as $x => $Capital) {

     if($_GET["country"]== $x ){

         echo ( "<h2> You chose " .$_GET["country"]."</h2><br><br>") ;
  
         echo ( "<h2> The Capital of  " .$_GET["country"] ." is " .$country[$_GET["country"]]."</h2>") ;
        break;
        }   
    
}
if($_GET["country"]!== $x ){

    echo ( "<h2> " .$_GET["country"]." is not a valid country</h2>") ;


  } 
  
?>
</div>
<?php include '_include\footer.php';?>
