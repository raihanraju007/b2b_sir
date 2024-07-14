<?php
$report_file_name = 'test.xls';
//echo 'hello'; exit;
	header("Content-type: application/octet-stream");
	header("Content-Disposition: attachment; filename=".$report_file_name);
	header("Pragma: no-cache");
	header("Expires: 0");		
?>
<style>
.text{
	text-align: center;
	vertical-align: bottom;
	width: 20px;
	margin: 0px;
	padding: 0px;
	padding-left: 3px;
	padding-right: 3px;
	padding-top: 10px;
	white-space: nowrap;
	
	-webkit-transform: rotate(-90deg);
	-moz-transform: rotate(-90deg);
	-ms-transform: rotate(-90deg);
	-o-transform: rotate(-90deg);
	transform: rotate(-90deg);
	mso-rotate: 90;
	-webkit-transform-origin: 50% 50%;
	-moz-transform-origin: 50% 50%;
	-ms-transform-origin: 50% 50%;
	-o-transform-origin: 50% 50%;
	transform-origin: 50% 50%;
	filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);		
}
</style>

<table border="1" width="100%" id="report">		
	<tr>
            <td align="center" rowspan="2"><b>SL. No.</b></td>
            <td align="center" rowspan="2"><b>Student Name</b></td>
            <td align="center" rowspan="2"><b>Student Number</b></td>
            <td align="center" rowspan="2"><b>Mobile Number</b></td>
            <td align="center" rowspan="2"><b>Class</b></td>
            <td align="center" rowspan="2"><b>Section</b></td>
            <td align="center" rowspan="2"><b>Class Roll</b></td>	
            <td align="center" rowspan="2"><b>House</b></td>
            <td align="center" rowspan="2"><b>Payment Status</b></td>
            <td align="center" rowspan="2"><b>Payment Month</b></td>
            <td align="center" rowspan="2"><b>Payment Date</b></td>
            
            <td align="center" rowspan="2"><b>Transection Code</b></td>
            
            <td align="center" colspan="<?=sizeof($head_info)+1;?>"><b>Fee</b></td>
            <td align="center" rowspan="2"><b>Remarks</b></td>				
	</tr>
	
</table>