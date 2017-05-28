<?php
/*************************************************************************
php easy :: pagination scripts set - Version One
==========================================================================
Author:      php easy code, www.phpeasycode.com
Web Site:    http://www.phpeasycode.com
Contact:     webmaster@phpeasycode.com
*************************************************************************/
function paginate_four($reload, $page, $tpages) {
	
	$prevlabel  = "Previous";
	$nextlabel  = "Next";
	
	$out = "<nav><ul class=\"pager\">\n";
	
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
	
	// next
	if($page<$tpages) {
		$out.= "<li><a href=\"" . $reload . "&amp;page=" .($page+1) . "\">" . $nextlabel . "</a></li>\n";
	}
	else {
		$out.= "<li class=\"disabled\"><a href=\"#\">" . $nextlabel . "</a></li>\n";
	}
		
	$out.= "</ul></nav>";
	
	return $out;
}
?>