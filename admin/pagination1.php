<?php
/*************************************************************************
php easy :: pagination scripts set - Version One
==========================================================================
Author:      php easy code, www.phpeasycode.com
Web Site:    http://www.phpeasycode.com
Contact:     webmaster@phpeasycode.com
*************************************************************************/
function paginate_one($reload, $page, $tpages) {
	
	$firstlabel = "First";
	$prevlabel  = "Prev";
	$nextlabel  = "Next";
	$lastlabel  = "Last";
	
	$out = "<nav><ul class=\"pagination \">\n";
	
	// first
	if($page>1) {
		$out.= "<li><a href=\"" . $reload . "\">" . $firstlabel . "</a></li>\n";
	}
	else {
		$out.= "<li class=\"disabled\"><a href=\"#\">" . $firstlabel . "</a></li>\n";
	}
	
	// previous
	if($page==1) {
		$out.= "<li class=\"disabled\"><a href=\"#\">" . $prevlabel . "</a></li>\n";
	}
	elseif($page==2) {
		$out.= "<li><a href=\"" . $reload . "\">" . $prevlabel . "</a></li>\n";
	}
	else {
		$out.= "<li><a href=\"" . $reload . "&amp;page=" . ($page-1) . "\">" . $prevlabel . "</a></li>\n";
	}
	
	// current
	$out.= "<li class=\"active\"><a href=\"#\">Page " . $page . " of " . $tpages . "</a></li>\n";
	
	// next
	if($page<$tpages) {
		$out.= "<li><a href=\"" . $reload . "&amp;page=" .($page+1) . "\">" . $nextlabel . "</a></li>\n";
	}
	else {
		$out.= "<li class=\"disabled\"><a href=\"#\">" . $nextlabel . "</a></li>\n";
	}
	
	// last
	if($page<$tpages) {
		$out.= "<li><a href=\"" . $reload . "&amp;page=" . $tpages . "\">" . $lastlabel . "</a></li>\n";
	}
	else {
		$out.= "<li class=\"disabled\"><a href=\"#\">" . $lastlabel . "</a></li>\n";
	}
	
	$out.= "</ul></nav>";
	
	return $out;
}
?>