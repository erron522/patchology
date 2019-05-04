<?php

##########################################################################################

# Entrant Report by Code and Market

# Author: Mike Poisel
# Created: 04.23.14

##########################################################################################

require "../../phpclasses/qdatabase.class.php";
mysql_select_db("kohler");

# Set the promotion's season
$season = 'Summer 2014';

if($_GET['ls7']){
	
	print '<table style="border:1px solid #000; font-family:Arial; width:550px; padding:5px; letter-spacing:.5px;"><tr><td colspan="3" style="background-color:#000; color:#fff; padding:10px; font-size:16px;">Borne To Be  Entrant Report:&nbsp;'.$season.'</td></tr><tr><td colspan="3" style="height:10px;"></td></tr><tr style="font-weight:bold; font-size:14px;"><td>Entrant Count</td></tr>';
	
	$total_count_query = "SELECT COUNT(id) FROM kohlerentrants";
	$total_count_query_result = mysql_query($total_count_query);
	
	while($total_count_query_result_row = mysql_fetch_array($total_count_query_result)) {
	
		print '<tr><td colspan="3" style="height:10px;"></td></tr>';
		
		print '<td colspan="2" style="font-size:14px; border-bottom:#666 solid 1px;"><strong>Grand Total</strong></td>';
		
		print '<td style="font-size:14px; border-bottom:#666 solid 1px;"><strong>' . $total_count_query_result_row[0] . '</strong></td>';
		
		print '<tr><td colspan="3" style="height:10px;"></td></tr>';
	
	}
	
	print '</tr>';

}
?>