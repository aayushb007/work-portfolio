<?php
$val1='';
$val2='';
$val3='';
$val4='';

if(isset($_REQUEST["submit"]))
{
    $val1 = $_REQUEST["name"];
    $val2 = $_REQUEST["email"];
    $val3 = $_REQUEST["subject"];
    $val4 = $_REQUEST["message"];
    $file_open = fopen("file1.csv","a");
   $no_rows = count(file("file1.csv"));
   if($no_rows > 1){$no_rows = ($no_rows -1)+1;}
   $form_data = array(
       'name' => $val1,
       'email' => $val2,
       'subject' => $val3,
       'message' => $val4,
       );
   fputcsv($file_open,$form_data);
  
   echo  "success";
   
}

?>
