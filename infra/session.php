<?PHP
$host = $_SERVER['HTTP_HOST'];
session_start();
 
if (!$_SESSION['u_usn'])
{
session_destroy();
?>
<SCRIPT LANGUAGE="JavaScript">
//<!--
//window.location="http://<?=$host?>/storemyresults/index.php?msg=Please login.";
//-->
</SCRIPT>
<?PHP
}
?>
