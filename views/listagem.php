<?php


require_once "BootForm.php";

$bootform=new BootForm();
	
$bootform->bCol("col-xs-12");
	$voltar=md5("..");
	$diretorio = dir($raiz);	


	

	//echo $raiz;

	



	   $bootform->myIcone("/fluctus/bootstrap/img/voltar.png","Voltar","Voltar","/fluctus/vt/{$voltar}","col-xs-3");

		 while($arquivo = $diretorio -> read()){
	     // echo "<a href='".$raiz.$arquivo."'>".$arquivo."</a><br />";
		 	if($arquivo!="." & $arquivo !=".."){
			      $caminho="/fluctus/cd/".md5($raiz)."_".$arquivo;

			      

			      
			      //echo $caminho;
			      
					 $bootform->myIcone("/fluctus/bootstrap/img/pasta.png",$raiz,$arquivo,$caminho,"col-xs-3");
				}
			
	   }
	   $diretorio -> close();

	   



//$bootform->enDiv();
	


?>