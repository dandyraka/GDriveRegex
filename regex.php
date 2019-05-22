<?php
function getDriveID($gdriveurl){
	$filter1 = preg_match('/drive\.google\.com\/open\?id\=(.*)/', $gdriveurl, $fileid1);
	$filter2 = preg_match('/drive\.google\.com\/file\/d\/(.*?)\//', $gdriveurl, $fileid2);
	$filter3 = preg_match('/drive\.google\.com\/uc\?id\=(.*?)\&/', $gdriveurl, $fileid3);
	if($filter1){
		$fileid = $fileid1[1];
	} else if($filter2){
		$fileid = $fileid2[1];
	} else if($filter3){
		$fileid = $fileid3[1];
	} else {
		$fileid = null;
	}
	
	return($fileid);
}
