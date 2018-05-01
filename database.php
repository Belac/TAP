<?php
$connect=mysqli_connect('localhost','root','','userinfo');

if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}

?>