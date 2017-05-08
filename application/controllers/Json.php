<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Json extends BP_Controller {

    public function index()
    {   
        
        if(isset($_GET['maintitle'])){
			$title= filter_var ( $_GET['maintitle'], FILTER_SANITIZE_STRING);
		}
		else $title="cocktailOpenDataClient";
        
        if(isset($_GET['file']) AND file_exists($_GET['file'])){
			$json[$title]=$this->csv2json($_GET['file']);
			
			}
        else {
			$defaultdir="data/opendata";
			foreach (glob($defaultdir."/*.csv") as $files) {
					$json[$title][]=$this->csv2json($files);
				}			
			}

			$j2=json_encode($json, JSON_FORCE_OBJECT);
			echo $j2;    
    
    }
    
    private function csv2json($file){
		$csv= file_get_contents($file);
		$csv=trim($csv);
		$array = array_map("str_getcsv", explode("\n", $csv));
		if(is_null(end($array)[0])){array_pop($array);}
		$parts = pathinfo($file);
		$filename=$parts['filename'];
		
		$json[$filename] = $array;
		return $json;
		}
}
/*End of file example.php*/
/*Location .application/controllers/example.php*/
