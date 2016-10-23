<?php
include "views/header.php";
require_once "views/methodget.php";



    $methodget=new MethodGet();

     

        $get=$methodget->makeLink('cd');
        $view=$methodget->makeLink('vw');
        $change=$methodget->makeLink("vt");

      //file://Canela/GGNO/URUM/Mapas_Redes/ATENDIMENTO_BASES/BASES_DWF/

        // echo $get[0];
      $raiz="/home/kdezen/Documentos/dwf/";
      if(isset($get[1])){
        
     
        $raiz=$methodget->changeForLine($get[1]);

        echo $raiz;
      }


      if(isset($view[1])){
        include "views/view.php";
      } else{
        include "views/home.php";
      }

        

      if(isset($change[1])){
        $raiz=chdir($methodget->changeForLine($change[1]));
      }

  




include "views/footer.php";



?>