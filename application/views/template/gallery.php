<?php 
//var_dump($gallery);
$cols=$gallery['columns'];
$bootstrapcols=12/$gallery['columns'];
$gname=$gallery['name'];
$directory = 'images/'.$gname."/";
$images=glob($directory.'*');
$chunk_images = array_chunk($images, $cols, true);

//var_dump($chunk_images);
$contents='';
foreach($chunk_images as $kc=>$chunk){
			$contents.= "<div class=\"row\">";
				foreach($chunk as $ki=>$image){
					$contents.= '<div class="col-md-'.$bootstrapcols.' img-thumb">
					<a href="'.$image.'" data-toggle="lightbox" data-gallery="'.$gname.'images" data-title="" data-footer="">
					<img class="img-responsive img-thumbnail" src="'.$image.'" alt="">
					</a>
				</div>';
				}
			$contents.= "</div>";
		}
echo $contents;		
?>
