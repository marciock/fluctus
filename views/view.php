<?php

	require_once "BootForm.php";
	
	
	$bootform=new BootForm();

		$bootform->bCol("col-xs-10");

			$dwf=rtrim($methodget->changeForLine($view[1]),"/");

			$methodget->viewDWF($dwf);


		$bootform->enDiv();



?>