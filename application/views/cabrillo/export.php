<?php
header('Content-Type: text/plain; charset=utf-8');
header('Content-Disposition: attachment; filename="'.$callsign.'-'.$contest_id.'-'.date('Ymd-Hi').'.cbr"');

$CI =& get_instance();
$CI->load->library('Cabrilloformat');

echo $CI->cabrilloformat->header($contest_id, $callsign, $claimed_score, 
	$operators, $club, $location, $name, $address, $addresscity, $addressstateprovince, $addresspostalcode, $addresscountry, $soapbox, $gridlocator, 
	$categoryoverlay, $categorytransmitter, $categorytime, $categorystation, $categorypower, $categorymode, $categoryband, $categoryassisted, $categoryoperator, $email, $certificate);
foreach ($qsos->result() as $row) {
	echo $CI->cabrilloformat->qso($row, $grid_export);
}
echo $CI->cabrilloformat->footer();
