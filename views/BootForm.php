<?php

	class BootForm{

		public $form;
		public $end_tag;
		public $myInput;
		var $container;
		public $only_input;
		public $td;

		
		
		public function myForm($name,$action,$method,$id,$other){

			$this->form="<form name='{$name}' action='{$action}' method='{$method}' id='{$id}' {$other} >";
			
			echo $this->form;

		}

		public function myEndForm(){

			echo "\n </form>";

		}

		public function bCol($num_cols){

			
				echo "<div class='".$num_cols."'>";
		}	
		public function enDiv(){

			
				echo "</div>";
		}	



		public function myInput($type,$name,$value,$id,$other,$label_for,$label_txt){

			$this->myInput="<input type='".$type."' name='".$name."' value='".$value."' id='".$id."' ".$other." class='form-control '>";

		echo "\n<div class='control-group'>\n
				<label for='".$label_for."' class='control-label'>".$label_txt."</label>\n
				<div class='controls'>".$this->myInput."</div>\n
				
			</div>\n";
		}	

		public function myOnlyInput($type,$name,$value,$id,$other,$label_for,$label_txt,$class_opt){
				$this->only_input="<input type='".$type."' name='".$name."' value='".$value."' id='".$id."' ".$other." class='form-control ".$class_opt."'>";

				return $this->only_input;
		}

		public function myArea($name,$value,$id,$other,$label_for,$label_txt){

			$this->myInput="<textarea name='".$name."' id='".$id."' ".$other." class='form-control'>";

			echo "\n<div class='control-group'>\n
					<label for='".$label_for."' class='control-label'>".$label_txt."</label>\n
					<div class='controls'>".$this->myInput.$value."</textarea> </div>\n
					
				</div>\n";
		}	

		
		public function myIconeButton($img,$alt,$text,$name,$value){

//
			echo	"<div class='col-sm-3'>

						
							<div class='thumbnail'>
								<button type='submit' class='btn-white'>	
									<img src='".$img."' alt='".$alt."'/>
								</button>
								<input type='hidden' name='".$name."' value='".$value."'>
								<div class='caption'>
										<p>".$text."</p>
									</div>

							</div>
						
					</div>";

		}


		public function myIcone($img,$alt,$text,$url,$col){

			echo 	"<style type='text/css'>
						.icone div{text-align:center; padding:1em;}

					</style>";
			echo	"<div class='{$col} icone'>

						
							<div>
								<a href='".$url."'>
									<img src='".$img."' alt='".$alt."'/>
								
								
								
										<h3>".$text."</h3>
								</a>
									
						

							</div>
						
					</div>";

		}



		public function myIconeSearch($input,$img,$alt,$url,$other,$id,$col1,$col2,$col3){

//
			echo	"<div class='".$col1."' ".$other." id=".$id.">

						
						<div class='".$col2."' style='margin-top:15px;'>
								
								".$input."
							
						</div>
						
							<div class='".$col3."'>
								<a href='".$url."'>

									<img src='".$img."' alt='".$alt."'/>

								</a>
								
							</div>
							
						
					</div>";

		}



		public function myListResults($results){

			echo "<div class='control-group'>
				
				<div class='controls'>".$results."</div>
				
			</div>";


		}

		public function myRecord($input,$text){



		echo		"<div class='col-sm-3'>

					
						<div class='thumbnail'>
								".$input."
								<div class='caption'>
									<p>".$text."</p>
								</div>
						</div>
					
					</div>";

		}

		public function myTdList($td,$num_cols){

				echo "<div class='".$num_cols."'>".$td."</div>";

				//	$this->td=

				//return $this->td;
		}


			public function myRadioList($label,$value,$name,$cols){

				echo "<div class='radio ".$cols."'>

						<label><input type='radio' name='".$name."' value='".$value."'>".$label."</label>
					</div>";

				//	$this->td=

				//return $this->td;
		}


		public function myMessage($titulo,$conteudo,$opt_buttons,$back,$width,$height,$id_sombra,$id_mensagem){


			echo " <script>

				var focus;

					function mostraMensagem(sombra,mensagem){

							document.getElementById(sombra).style.position='absolute';

							document.getElementById(sombra).style.zIndex='80';

							document.getElementById(sombra).style.display='block';


							document.getElementById(mensagem).style.position='absolute';

							document.getElementById(mensagem).style.zIndex='99';

							document.getElementById(mensagem).style.display='block';

						}
							function back(){

								{$back};

								focus.focus();
								focus.select();
							}

						function ocultaMensagem(sombra,mensagem){


							document.getElementById(sombra).style.display='none';


							document.getElementById(mensagem).style.display='none';
							


						}
					</script>";



			echo "			<!-- janela de aviso de cancelamento da atividade  -->
					
					<div id='{$id_sombra}' style='display:none;background:#ffffff;opacity:0.7;width:100vw;height:100vh;'>
						

					</div>


					<div  style='display:none;margin-left:20%;margin-top:5%;width:{$width};height:{$height}; ' id='{$id_mensagem}'>



							<div class='panel panel-danger'>
							  <div class='panel-heading'> <h3>".$titulo."</h3></div>
							  <div class='panel-body'>
							    <h5>  ".$conteudo." </h5>

							    ".$opt_buttons."

							  </div>
							</div>

					</div>";

		
			//echo "<script>ocultaMensagem(); </script>";
		}

		
		
		

		public function thumbnail($image,$title,$content,$down){

			echo  "
					
						<div class='col-sm-6 col-md-4'>

						<div class='thumbnail'>

							<img src='".$image."'>
							<div class='caption'>

							<h3>".$title."</h3>
							<p>".$content."</p>

							<p><a href='".$down."' class='btn btn-primary' role='button'>Dwownload</a></p>
							</div>
						</div>
						</div>
					";

			}

		public function mediaAligment($link,$image,$title,$content,$width,$height){

		echo "
				<div class='meida'>

					<div class='media-left media-middle'>
						<a href='".$link."'>

							<img src='".$image."' class='media-object' style='width:".$width."; height:".$height.";'>
						</a>
					</div>
					<div class='media-body'>

						<h2 class='media-heading'>".$title."</h2>

							<p>".$content."</p>
					</div>

					
				</div>";
		}




}



?>