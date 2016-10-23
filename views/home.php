<?php

	require_once "BootForm.php";
	
	
	$bootform=new BootForm();
	
	$bootform->bCol("col-sm-10");
	$sinal="file://";
	$diretorio = dir($sinal.$raiz);	
	
		
			
		
	$bootform->enDiv();
	$bootform->bCol("col-xs-10");

		//$urlA=md5("file://Canela/GGNO/URUM/Mapas_Redes/ATENDIMENTO_BASES/BASES_DWF/CTA");
		//$urlE=md5("file://Canela/GGNO/URUM/Mapas_Redes/ATENDIMENTO_BASES/BASES_DWF/CTE");

		//$urlA=md5("file:///home/kdezen/Documentos/dwf/cta/");
		//$urlE=md5("file:///home/kdezen/Documentos/dwf/cte/");


		//$bootform->myIcone("/fluctus/bootstrap/img/agua.png","Agua","CTA","/fluctus/ct/{$urlA}","col-xs-5");
		//$bootform->myIcone("/fluctus/bootstrap/img/esgoto.png","Escgoto","CTE","/fluctus/ct/{$urlE}","col-xs-5");

		if(isset($change[1])){
		 $bootform->myIcone("/fluctus/bootstrap/img/voltar.png","Voltar","Voltar","/fluctus/vt/".$methodget->changeForBar($raiz).$arquivo."_","col-xs-3");
		}

		//echo $get[1];
		 $icones="/fluctus/bootstrap/img/pasta.png";

		 while($arquivo = $diretorio -> read()){
	     // echo "<a href='".$raiz.$arquivo."'>".$arquivo."</a><br />";
		 	
		 	if($arquivo=="cta")	$icones="/fluctus/bootstrap/img/agua.png";

		 	if($arquivo=="cte")$icones="/fluctus/bootstrap/img/esgoto.png";


		 	if(end(explode('.',$arquivo))=="dwf"){
		 		$icones="/fluctus/bootstrap/img/mapa.png";
		 		 $caminho="/fluctus/vw/".$methodget->changeForBar($raiz).$arquivo."_";
		 	}else{
		 		 $caminho="/fluctus/cd/".$methodget->changeForBar($raiz).$arquivo."_";
		 	}


		 	if($arquivo!="." & $arquivo !=".."){
			     $bootform->myIcone($icones,$raiz,$arquivo,$caminho,"col-xs-3");


				}

				 

			
	   }
	   $diretorio -> close();
	

								
							

	//$bootform->myEndForm();

	$bootform->enDiv();


?>