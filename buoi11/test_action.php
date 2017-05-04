<?php

function namNhuan($year){
	if(($year%4==0 && $year%100!=0) || ($year%400==0)){
		return true;
	}
	else{
		return false;
	}
}

if(isset($_REQUEST['xem'])){
	$month = $_REQUEST['thang'];
	$year = (double)$_REQUEST['nam']; 
	//settype($year, 'int');
	$ketqua = '';
	if(namNhuan($year)){
		$ketqua = "Năm $year là năm nhuận. ";
	}
	$so_ngay = cal_days_in_month(CAL_GREGORIAN, $month, $year);
	echo $ketqua = $ketqua."Tháng $month có $so_ngay ngày";
}


?>