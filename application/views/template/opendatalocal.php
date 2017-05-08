<?php 
//var_dump($dt);
echo "<h1>Hello</h1>";
var_dump($data);
/*foreach($data as $k=>$mask){
		if(isset($mask['title'])){$title=$mask['title'];}
		else $title=ucfirst($mask['id']);
		
	   $table='
	   <div class="container">
	   <h3>'.$title.'</h3>	
	   <p>'.$mask['caption'].'</p>	
	   <table id="'.$mask['id'].'" class="'.$mask['class'].' bp-'.$mask['driver'].'-data-table">
	        <thead>
	            <tr>';
				foreach($mask['fields'] as $field){
					$table.="\n\t<th>".$field."</th>";
					}         
	   $table.= '        </tr>
	        </thead>
	        <tfoot>
	            <tr>';
				foreach($mask['fields'] as $field){
					$table.="\n\t<th>".$field."</th>";
					}         
	   $table.='</tr>
	        </tfoot>
		</table>
		</div>';
		if($mask['driver']=='array'){
			$content = json_decode(file_get_contents('data/'.$mask['id'].'.json'));
			$data=json_encode($content->data);
			$table.="<div id=\"".$mask['id']."data\" class=\"hide\">".$data."</div>";
			}
		$tables[$k]=$table;   
		}
		//var_dump($tables);
		$table=implode("\n",$tables);
		echo $table;*/
?>
