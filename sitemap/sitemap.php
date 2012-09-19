<?php
header('Content-Type: application/xml');

function isIndexableDir($dir){
	$ignored_dir_list = array("geshi","sitemap","images");
	foreach($ignored_dir_list as $checkdir){
		$found = strrpos($dir, $checkdir);
		if($found === false){
			continue;
		}else{
			return false;
		}
	}
	return true;
}

function isIndexableFile($dir){
	$files_to_be_ignored = array("scripts","header","footer");
	foreach($files_to_be_ignored as $checkfile){
		$found = strrpos($dir, $checkfile);
		if($found === false){
			continue;
		}else{
			return false;
		}
	}
	return true;
}

function isIndexableExt($dir){
	$ext_to_be_indexed = array(".php",".html",".pdf",".doc",".txt");
	$urlfileExt = substr($dir,-4,4);
	if (in_array($urlfileExt, $ext_to_be_indexed)) {
		return true;
	}
	return false;
}

function listFiles($dir) {
    if($dh = opendir($dir)) {
		// Should this directory be indexed ?
	        $files = Array();
	        $inner_files = Array();
	        while($file = readdir($dh)) {
	            if($file != "." && $file != ".." && $file[0] != '.') {
	                if(is_dir($dir . "/" . $file)) {
	                    $inner_files = listFiles($dir . "/" . $file);
	                    if(is_array($inner_files)) $files = array_merge($files, $inner_files); 
	                } else {
	                    array_push($files, $dir . "/" . $file);
	                }
	            }
	        }
	        closedir($dh);
	        return $files;
    }

}



function generateHeader(){
	
	// Sent the correct header so browsers display properly, with or without XSL.
	
	$xsl = '/sitemap/xml-sitemap.xsl';
	
	echo '<?xml version="1.0" encoding="utf-8"?>'."\n";
	
	if ( isset( $xsl ) && $xsl != '' )
		echo '<?xml-stylesheet type="text/xsl" href="http://'.$_SERVER['SERVER_NAME'].$xsl.'"?>'."\n";
	
	echo '<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
			xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd"
			xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
		$dir='../';
		foreach (listFiles('..') as $key=>$file){
			$moddate = date ("c", filemtime($file));
			//Convert file path to URL
			$urlfile = str_replace("../", "http://geeksonjava.com/", $file);
			//Check if the URL has a directory that has to be ignored.
			if(isIndexableDir($urlfile)){
				//Check if the URL has a file that has to be ignored.
				if(isIndexableFile($urlfile)){
					//Check if the URL has a extension that has to be indexed.
					if(isIndexableExt($urlfile)){
						generateTags($urlfile, $moddate);
					}
				}
			}
			
		}
	echo "</urlset>";
}



function generateTags($urlfile, $moddate){
	echo "<url>"; 
	echo "<loc>".$urlfile."</loc>";
	echo "<lastmod>".$moddate."</lastmod>".
		 "<changefreq>daily</changefreq>".
		 "<priority>1</priority>".
		 "</url>\n";
}
generateHeader();

?>