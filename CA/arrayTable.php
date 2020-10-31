<link rel="stylesheet" href="_css\style.css">

 <?php include '_include\header.php';?> 
   
  <table >

  <tr><th>Country</th><th>Capital</th></tr>   
  <?php
      $capital = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
      "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki",
      "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
      "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", 
      "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", 
      "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia",
      "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", 
      "Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta", 
      "Austria" => "Vienna", "Poland"=>"Warsaw") ;


foreach($capital as $x => $val) {
  echo "  <tr><th>$x</th><th>$val</th></tr> ";
}
?>
</table>

<?php include '_include\footer.php';?>