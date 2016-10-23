<?php

	class MethodGet{

		public function makeLink($get){
			$getUrl=strip_tags(trim(filter_input(INPUT_GET,$get,FILTER_DEFAULT)));

		      $setUrl=(empty($getUrl)? 'index' : $getUrl);

		      $Url=explode('/',$setUrl);

		      return $Url;
		}



		public function changeForBar($name){

			$newName=str_replace("/","_", $name);

			return $newName;
		}

		public function changeForLine($name){

			$newName=str_replace("_","/", $name);

			return $newName;
		}


		public function viewDWF($name){

			echo "<OBJECT CLASSID='clsid:A662DA7E-CCB7-4743-B71A-D817F6D575DF'  WIDTH='1024' HEIGHT='768'> 
				<PARAM NAME='Src' VALUE='{$name}'> 
				</OBJECT>";
		}



	}



?>