<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 15-06-2015
 * Time: 18:29
 */
require "db/db.php";
$program_name=$_POST['dd_program_name'];

$sql = 'DELETE FROM program WHERE program_name = "'.$program_name.'"' ;
$result = insertdb($sql);
if($result){
    echo"<br/>Your details have been updated";
    echo "<BR>";
    echo "<a href='home.php'>Back to main page</a>";
}else{
    echo"<br/>There was some error in deleting.";
    echo "<BR>";
    echo "<a href='home.php'>Back to main page</a>";
}
?>