<?php 
//foo
$allcss=array_merge($css,$appcss);

//condizione
//confronta files
//se inferiore a x giorni 
	//mostra esistente
//se superiore confronta gli hash 
	//se sono diversi -> sostituisci con più recente
	//se sono uguali -> mostra file esistente

$openlink="\t\t<link rel=\"stylesheet\""; 
$basehref=" href=\"".base_url()."css/";
$cachedhref=" href=\"".base_url().$fname;
$closelink="\">\n";

 $csstring='';
	if($status==0){ 
		foreach($allcss as $c){
			$csstring.=$openlink.$basehref.$c.$closelink;
		}
	}
	elseif($status==1){
		$minify = new Minify();
		$minify->verify($fname, $allcss);
		$csstring=$openlink.$cachedhref.$closelink;	 
	}
echo $csstring;	
?>
