<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class BP_Portfolio {
	var $portfolio=array();
	var $cols;
	var $navigation;
	var $chunks;
	var $imgfolder;
	var $bootstrap_cols;
	
	
	function __construct()
	{
	}
	
	function createPortfolio(){
		
		$this->setCols();
		unset($this->portfolio['columns']);
		$this->navigation=$this->portfolio['navigation'];
		unset($this->portfolio['navigation']);
		$this->imgfolder=$this->getImgFolder();
		
		if(isset($this->portfolio['imgfolder'])){	
			unset($this->portfolio['imgfolder']);
		}

		$this->groups=array_keys($this->portfolio);
		$data=$this->portfolio;
		//var_dump($data);
		
		$myportfolio= '<div>';
		$myportfolio.= $this->openNav();

			$myportfolio.= '<div class="'.$this->makeSingular($this->navigation).'-content">';
			
				
			foreach($this->portfolio as $this->group=>$projects){
					$this->navPieces();
					$myportfolio.= $this->openContent; 
					$myportfolio.= $this->portfolioContents($projects);
					$myportfolio.= $this->closeContent;
				}
				
			$myportfolio.= "</div>";
		$myportfolio.= "</div>";
		return $myportfolio;					
	}
	
	function makeSingular($word){
		$word=rtrim($word,'s');
		return $word;
		}
	
		
	function setCols(){
		$data=$this->portfolio;
		$this->cols=$data['columns'];
		if($this->cols==2){
			$this->chunks=2;
			$this->bootstrap_cols=6;
			}
		elseif($this->cols==3){
			$this->chunks=3;
			$this->bootstrap_cols=4;
			}
		elseif($this->cols==4){
			$this->chunks=4;
			$this->bootstrap_cols=3;
			}

		}
	
	function getImgFolder(){
		$data=$this->portfolio;
		if(isset($data['imgfolder'])){$imgfolder=$data['imgfolder'];}
		else {$imgfolder='images/portfolio/';}
		return $imgfolder;
	}
			
	function portfolioContents($projects){
		$chunk_proj = array_chunk($projects, $this->chunks, true);
		$contents='';
		foreach($chunk_proj as $kp=>$vp){
			$contents.= "<div class=\"row\">";
				foreach($vp as $x=>$y){
					$basename=$this->imgfolder.$y['label'];
					if(is_file($basename.".jpg"))
					{$src=$basename.".jpg";}
					elseif(is_file($basename.".png"))
					{$src=$basename.".png";}
					else {$src="http://placehold.it/700x400";}
					
					if(isset($y['url']))
					{
						$url='<a href="'.$y['url'].'" target="_blank">';
						$endurl='</a>';
						}
					else {$url=$endurl='';}
					
					$contents.= '<div class="col-md-'.$this->bootstrap_cols.' portfolio-item">'
					.$url
					.'<img class="img-rounded" style="width:100%" src="'.$src.'" alt="">'
					.$endurl
					.'<h3>'
					.$url
					.$y['name']
					.$endurl
					.'</h3>'
					.'<div>'
					.$y['description']
					.'</div>'
				.'</div>';
				}
			$contents.= "</div>";
		}
		return $contents;
	}
		
	function openNav(){
		$this->groups=array_keys($this->portfolio);
		if($this->navigation=='pills'){
			$navclass=$this->navigation." scrollnav";
			}
		if($this->navigation=='tabs'){
			$navclass=$this->navigation;
			}
			
		$pnav= '<div><ul class="nav nav-'.$navclass.'" style="margin-top:15px">';
		foreach($this->groups as $k=>$this->group){
			if($k==0){$this->itemclass=" class=\"active\"";}
			else $this->itemclass='';
			$this->navPieces();
			$pnav.= $this->navitem;
			}
		$pnav.= '</ul></div>';
		return $pnav;
	}
	
	function navPieces(){
		if($this->navigation=='pills'){
			$this->navitem='<li'.$this->itemclass.'><a href="#id'.$this->group.'">'.$this->group.'</a></li>';
			
			$this->openContent='<div id="id'.$this->group.'" class="container"><article>
			<h3>'.$this->group.'</h3>';
			
			$this->closeContent="</article></div>";
		}
		elseif($this->navigation=='tabs'){
			$this->navitem='<li role="presentation"'.$this->itemclass.'><a href="#id'.$this->group.'" role="tab" data-toggle="tab">'.$this->group.'</a></li>';
			
			if($this->group==$this->groups[0]){$tclass=" active";}
			else $tclass="";
			$this->openContent='<div role="tabpanel" class="tab-pane'.$tclass.'" id="id'.$this->group.'">';
			
			$this->closeContent="</div>";			
		}
	}
		
}
	
