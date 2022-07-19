<?php


require('library/php-excel-reader/excel_reader2.php');
require('library/SpreadsheetReader.php');
require('db_config.php');


if(isset($_POST['Submit'])){


  $mimes = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.oasis.opendocument.spreadsheet'];
  if(in_array($_FILES["file"]["type"],$mimes)){


    $uploadFilePath = 'uploads/'.basename($_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath);


    $Reader = new SpreadsheetReader($uploadFilePath);


    $totalSheet = count($Reader->sheets());


    echo "You have total ".$totalSheet." sheets".


    $html="<table border='1'>";
    $html.="<tr><th>Student ID</th><th>Last Name</th><th>First Name</th><th>Year level</th><th>Department</th></tr>";


    /* For Loop for all sheets */
    for($i=0;$i<$totalSheet;$i++){


      $Reader->ChangeSheet($i);


      foreach ($Reader as $Row)
      {
        $html.="<tr>";
        $student_id = isset($Row[0]) ? $Row[0] : '';
        $lastname = isset($Row[1]) ? $Row[1] : '';
         $firstname = isset($Row[2]) ? $Row[2] : '';
          $year_level = isset($Row[3]) ? $Row[3] : '';
           $department = isset($Row[4]) ? $Row[4] : '';
        $html.="<td>".$student_id."</td>";
        $html.="<td>".$lastname."</td>";
        $html.="<td>".$firstname."</td>";
        $html.="<td>".$year_level."</td>";
        $html.="<td>".$department."</td>";
        $html.="</tr>";

        $query = "insert into voters(student_id,lastname,firstname,year_level,department) values('".$student_id."','".$lastname."','".$firstname."','".$year_level."','".$department."')";
        $mysqli->query($query);
      }


    }


    $html.="</table>";
    echo $html;
    echo "<br />Data Inserted in dababase";


  }else { 
    die("<br/>Sorry, File type is not allowed. Only Excel file."); 
  }



}

?>