<?php

if (isset($_POST['submit'])) {

	$adhar = $_POST['adhar'];

}

 $unique_ID = md5($adhar);
 

?>