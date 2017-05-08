<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class BP_Opendataclient  {
	
	public $opendata=array();
	var $source;
	var $mode;
	var $sheetId;
	

	public function gsGetMainInfo($sheetId){
			$info=$this->getInfo($sheetId);
			$gsMainTitle=$info['info']['title'];
			$gsLastUpdate=$info['info']['updated'];
			$gsBaseUrl=$this->gsBaseUrl($sheetId);
			$result="<h2 class=\"gsMainTitle\">".$gsMainTitle."</h2>";
			$result.="<div><p>Last updated: <span class=\"text-info\">".$gsLastUpdate."</span></p><p>Public Url: <a href=\"".$gsBaseUrl."\">".$gsBaseUrl."</a></p>";
			
			return $result;
		
		}
	
	
	public function gsGetView($sheetId,$headers='false'){
		return '<iframe width="100%" height="500" frameborder="0" style="border:0" src="https://docs.google.com/spreadsheets/d/'.$sheetId.'/pubhtml?single=false&amp;widget=true&amp;headers='.$headers.'"></iframe>';
		}
		
	public function gsGetDownloadEntire($sheetId){
		$result="<h2>Download entire report As</h2>";
		$result.='<div class="row">';
		
		$result.='<div class="col-sm-4 gsXslx"><a title="xslx: Excel" href="'.$this->gsDownloadAs('xslx',$sheetId).'"><i class="fa fa-5x  fa-file-excel-o" aria-hidden="true"></i></a><p>Ms Excel</p></div>';
		$result.='<div class="col-sm-4  gsPdf"><a title="Pfd" href="'.$this->gsDownloadAs('pdf',$sheetId).'"><i class="fa fa-5x fa-file-pdf-o" aria-hidden="true"></i></a><p>Pdf</p></div>';
		$result.='<div class="col-sm-4  gsOds"><a title="ods: Open Office" href="'.$this->gsDownloadAs('ods',$sheetId).'"><i class="fa fa-5x fa-file" aria-hidden="true"></i></a><p>OO Calc</p></div>';
		
		$result.="</div>";
		
		return $result;
		
		}
	
	public function gsGetDownloadSingleSheet($info){
		$result="<h2>Download single sheet</h2><div>";
				
		foreach($info as $k=>$v){			
			$result.="<h3><a href=\"".$v['id']."\">".$v['title']."</a></h3>";
			$result.='<div class="row">';
			$result.='<div class="col-sm-4 gsCsv"><a title="CSV" href="'.$v['csv'].'"><i class="fa fa-4x fa-file-text-o" aria-hidden="true"></i></a><p>CSV</p></div>';
			$result.='<div class="col-sm-4 gsJson"><a title="JSON" href="'.$v['json'].'"><i class="fa fa-4x fa-file-text" aria-hidden="true"></i></a><p>Json</p></div>';
			$result.='<div class="col-sm-4 gsPfdSingle"><a title="PDF" href="'.$v['pdf'].'"><i class="fa fa-4x fa-file-pdf-o" aria-hidden="true"></i></a><p>Pdf</p></div>';
			$result.="</div>";
			}
		$result.="</div>";
		return $result;	
		}
	
   public function getInfo($sheetId){
	   //$opendata=$this->opendata;
	   //$sheetId=$opendata->sheetId;
		//$info[]='';
	   	$url="https://spreadsheets.google.com/feeds/worksheets/".$sheetId."/public/full";
		$fileinfo=file_get_contents($url);
		$objinfo = new SimpleXMLElement($fileinfo);
		$vars = get_object_vars ( $objinfo );
		
		$info['updated']=$vars['updated'];
		$info['title']=$vars['title'];
		
		$entries=$vars['entry'];
		
		//var_dump($vars);
		//var_dump($vars['entry']);
		foreach($entries as $key=>$value) {
			$vals = get_object_vars ( $value );
			
			//var_dump($vals['link']);
				foreach($vals['link'] as $kk=>$vv){
					//var_dump($vv);
					
					if($vv['type']=='text/csv'){
						$subvals = get_object_vars ( $vv );
						//var_dump($subvals);
						$csv_url[]=$subvals['@attributes']['href'];
						}
					}
				//var_dump($value);
				
				$csv_links[]=array('id'=>$vals['id'],'title'=>$vals['title']);
			}

			foreach($csv_links as $k=>$v){
				$v['csv']=$csv_url[$k];
				
				$v['json']="http://gsx2json.com/api?id=".$sheetId."&sheet=".($k+1);
				
				$pdf_url = str_replace("=csv", "=pdf", $csv_url[$k]);
				$v['pdf']=$pdf_url;
				
				$links[]=$v;
				
				}
			//var_dump($info);
			$newinfo=array('info'=>$info,'sheets'=>$links);
	   return $newinfo;
	   } 
   
   public function gsBaseUrl($sheetId){
	   $url="https://docs.google.com/spreadsheets/d/".$sheetId."/pubhtml";
	   return $url;
	   }

	/*
	 * Allowed formats:
	 * xlsx,pdf,ods
	 */
	public function gsDownloadAs($format,$sheetId){
		$url="https://docs.google.com/spreadsheets/d/".$sheetId."/export?format=".$format."&id=".$sheetId;
		return $url;
		}	
		
		
	public function localGetView($sheetId,$mode){
		
		foreach (glob($sheetId."/".$mode) as $files) {
					//echo "$filename size " . filesize($filename) . "\n";
					
					$csv= file_get_contents($files);
					
					$csv=trim($csv);
					$array = array_map("str_getcsv", explode("\n", $csv));					
					$thead=$array[0];
					unset($array[0]);

					$parts = pathinfo($files);
					$filename=$parts['filename'];
					
					$result="<h2>".$filename."</h2>";
					$dest="json?file=".$files."&maintitle=".$filename;
					$result.="<div><table data-dest=\"".base_url().$dest."\" class=\"table table-striped bp-data-table opendataTable\" data-dom=\"Blfrtip\">\n";
					$result.="<thead><tr>";
					foreach($thead as $k=>$v){
						$result.="<th>";		
						$result.= htmlspecialchars($v);
						$result.="</th>";
						}
					$result.="</tr></thead><tbody>";
					$f = fopen($files, "r");
					$i=0;
					foreach($array as $k=>$v){
						$result.="<tr>";
						foreach($v as $k1=>$v1){
							$result.="<td>";		
							$result.= htmlspecialchars($v1);
							$result.="</td>";
							}
						$result.="</tr>";
						}
					fclose($f);
					$result.= "\n</tbody></table><hr></div>";
			$results[]=$result;		
			
			}
			
			
			return implode($results);
		}		

		
}
	
