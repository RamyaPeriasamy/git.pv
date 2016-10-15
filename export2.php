<?php
header('Content-type: text/csv');
if ($endstamp-$stamp>40*24*3600){
  header('Content-Disposition: attachment; filename="Export-'.date("Y", $stamp) . '.xls"');
}else if($endstamp-$stamp>20*24*3600){
  header('Content-Disposition: attachment; filename="Export-'.date("Y-m", $stamp) . '.xls"');
}else {
  header('Content-Disposition: attachment; filename="Energy Meter-'.date("Y-m-d", $stamp) . '.xls"');
}
 
#####################################################################
# TODO  for  final use
#####################################################################
# - filename:   parameter not implemented yet
# - $interval:  caller must set parameter
# - Influx databases: use database <name> according to iGate
# - other aggregate functions than 'SUM' (Average), and when to apply
#   other aggregate: wenn minus statt unterstrich, dann Durchschnitt?
#####################################################################

#####################################################################
# arguments   in use
#####################################################################
# stamp         required  timestamp:  beginning of the desired range
# endstamp      required  timestamp:  end of the desired range
# args          required: semicolon-separated string of datapoint-descriptors
# 						  each datapoint-descriptor:
#							a comma-separated string of exactly 9 substrings
#						  "0,1,0,8240,Activepower_Total,Active%20Power,15,kW,4;"
# 						[0]=preOffset
#							[1]=factor
#							[2]=postOffset
#							[3]=device id
#							[4]=field
#							[5]=title
#							[6]
#							[7]=unit
#							[8]
# interval		optional  default: "5m"
# offset		optional  default: 19800  (Indian Standard Time)
# showQueries	optional  if True: debug output
#####################################################################
# arguments   NOT IN USE
#####################################################################
# jahr
# jahr_heute
# monat_heute
# tag_heute
# phase			was used to handle a specific plant (filename)
# delta			. not used .
# user_typ

/* Inverter Excel name start*/
   /*HAL Start*/
	if ($phase == "HalINV1graph1" || $phase == "HalINV2graph1"  || $phase == "HalINV3graph1" || $phase == "HalINV4graph1" || $phase =="HalTrk01graph1" || $phase =="HalTrk02graph1" || $phase =="HalTrk03graph1" || $phase =="HalTrk04graph1" || $phase =="HalTrk05graph1" 
	|| $phase =="HalTrk06graph1" || $phase =="HalTrk07graph1" || $phase =="HalTrk08graph1" || $phase =="HalTrk09graph1" || $phase =="HalTrk10graph1" 
	|| $phase =="HalTrk11graph1" || $phase =="HalTrk12graph1" || $phase =="HalTrk13graph1" || $phase =="HalTrk14graph1" || $phase =="HalTrk15graph1" 
	|| $phase =="HalTrk16graph1" || $phase =="HalTrk17graph1" || $phase =="HalTrk18graph1" || $phase =="HalTrk19graph1" || $phase =="HalTrk20graph1" 
	|| $phase =="HalTrk21graph1"	|| $phase =="HalTrk22graph1" || $phase =="HalTrck01graph1" || $phase =="HalTrkc02graph1" || $phase =="HalTrck03graph1"
	|| $phase =="HalTrck04graph1" || $phase =="HalTrck05graph1" || $phase =="HalTrck06graph1" || $phase =="HalTrck07graph1" || $phase =="HalTrck08graph1"
	|| $phase =="HalTrck09graph1" || $phase =="HalTrck10graph1" || $phase =="HalTrck11graph1" || $phase =="HalTrck12graph1" || $phase =="HalTrck13graph1"
	|| $phase =="HalTrck14graph1" || $phase =="HalTrck15graph1" || $phase =="HalTrck16graph1")  {
	header('Content-Disposition: attachment; filename="Graph1'.'.xls"');
	}
	else if ($phase == "HalINV1graph2" || $phase == "HalINV2graph2" || $phase == "HalINV3graph2" || $phase == "HalINV4graph2"|| $phase =="HalTrk01graph2" || $phase =="HalTrk02graph2" || $phase =="HalTrk03graph2" || $phase =="HalTrk04graph2" || $phase =="HalTrk05graph2" 
	|| $phase =="HalTrk06graph2" || $phase =="HalTrk07graph2" || $phase =="HalTrk08graph2" || $phase =="HalTrk09graph2" || $phase =="HalTrk10graph2" 
	|| $phase =="HalTrk11graph2" || $phase =="HalTrk12graph2" || $phase =="HalTrk13graph2" || $phase =="HalTrk14graph2" || $phase =="HalTrk15graph2" 
	|| $phase =="HalTrk16graph2" || $phase =="HalTrk17graph2" || $phase =="HalTrk18graph2" || $phase =="HalTrk19graph2" || $phase =="HalTrk20graph2" 
	|| $phase =="HalTrk21graph2"	|| $phase =="HalTrk22graph2" || $phase =="HalTrck01graph2" || $phase =="HalTrkc02graph2" || $phase =="HalTrck03graph2"
	|| $phase =="HalTrck04graph2" || $phase =="HalTrck05graph2" || $phase =="HalTrck06graph2" || $phase =="HalTrck07graph2" || $phase =="HalTrck08graph2"
	|| $phase =="HalTrck09graph2" || $phase =="HalTrck10graph2" || $phase =="HalTrck11graph2" || $phase =="HalTrck12graph2" || $phase =="HalTrck13graph2"
	|| $phase =="HalTrck14graph2" || $phase =="HalTrck15graph2" || $phase =="HalTrck16graph2") {
	header('Content-Disposition: attachment; filename="Graph2'.'.xls"');
	}
	else if ($phase == "HalINV1graph3" || $phase == "HalINV2graph3" || $phase == "HalINV3graph3" || $phase == "HalINV4graph3" || $phase =="HalTrk01graph3" || $phase =="HalTrk02graph3" || $phase =="HalTrk03graph3" || $phase =="HalTrk04graph3" || $phase =="HalTrk05graph3" 
	|| $phase =="HalTrk06graph3" || $phase =="HalTrk07graph3" || $phase =="HalTrk08graph3" || $phase =="HalTrk09graph3" || $phase =="HalTrk10graph3" 
	|| $phase =="HalTrk11graph3" || $phase =="HalTrk12graph3" || $phase =="HalTrk13graph3" || $phase =="HalTrk14graph3" || $phase =="HalTrk15graph3" 
	|| $phase =="HalTrk16graph3" || $phase =="HalTrk17graph3" || $phase =="HalTrk18graph3" || $phase =="HalTrk19graph3" || $phase =="HalTrk20graph3" 
	|| $phase =="HalTrk21graph3"	|| $phase =="HalTrk22graph3" || $phase =="HalTrck01graph3" || $phase =="HalTrkc02graph3" || $phase =="HalTrck03graph3"
	|| $phase =="HalTrck04graph3" || $phase =="HalTrck05graph3" || $phase =="HalTrck06graph3" || $phase =="HalTrck07graph3" || $phase =="HalTrck08graph3"
	|| $phase =="HalTrck09graph3" || $phase =="HalTrck10graph3" || $phase =="HalTrck11graph3" || $phase =="HalTrck12graph3" || $phase =="HalTrck13graph3"
	|| $phase =="HalTrck14graph3" || $phase =="HalTrck15graph3" || $phase =="HalTrck16graph3") {
	header('Content-Disposition: attachment; filename="Graph3'.'.xls"');
	}
	/*HAL end*/

/*Neemrana start*/

	
	else if($phase == "NeemINVgraph1" || $phase =="HalINV1graph1" || $phase =="HalINV2graph1" || $phase =="HalINV3graph1" || $phase =="HalINV4graph1" 
	|| $phase =="HalTrk01graph1" || $phase =="HalTrk02graph1" || $phase =="HalTrk03graph1" || $phase =="HalTrk04graph1" || $phase =="HalTrk05graph1" 
	|| $phase =="HalTrk06graph1" || $phase =="HalTrk07graph1" || $phase =="HalTrk08graph1" || $phase =="HalTrk09graph1" || $phase =="HalTrk10graph1" 
	|| $phase =="HalTrk11graph1" || $phase =="HalTrk12graph1" || $phase =="HalTrk13graph1" || $phase =="HalTrk14graph1" || $phase =="HalTrk15graph1" 
	|| $phase =="HalTrk16graph1" || $phase =="HalTrk17graph1" || $phase =="HalTrk18graph1" || $phase =="HalTrk19graph1" || $phase =="HalTrk20graph1" 
	|| $phase =="HalTrk21graph1"	|| $phase =="HalTrk22graph1" || $phase =="HalTrck01graph1" || $phase =="HalTrkc02graph1" || $phase =="HalTrck03graph1"
	|| $phase =="HalTrck04graph1" || $phase =="HalTrck05graph1" || $phase =="HalTrck06graph1" || $phase =="HalTrck07graph1" || $phase =="HalTrck08graph1"
	|| $phase =="HalTrck09graph1" || $phase =="HalTrck10graph1" || $phase =="HalTrck11graph1" || $phase =="HalTrck12graph1" || $phase =="HalTrck13graph1"
	|| $phase =="HalTrck14graph1" || $phase =="HalTrck15graph1" || $phase =="HalTrck16graph1")  {
	header('Content-Disposition: attachment; filename="Graph1'.'.xls"');
	}
	else if($phase == "NeemINVgraph2" || $phase =="HalINV1graph2" || $phase =="HalINV2graph2" || $phase =="HalINV3graph2" || $phase =="HalINV4graph2"
	|| $phase =="HalTrk01graph2" || $phase =="HalTrk02graph2" || $phase =="HalTrk03graph2" || $phase =="HalTrk04graph2" || $phase =="HalTrk05graph2" 
	|| $phase =="HalTrk06graph2" || $phase =="HalTrk07graph2" || $phase =="HalTrk08graph2" || $phase =="HalTrk09graph2" || $phase =="HalTrk10graph2" 
	|| $phase =="HalTrk11graph2" || $phase =="HalTrk12graph2" || $phase =="HalTrk13graph2" || $phase =="HalTrk14graph2" || $phase =="HalTrk15graph2" 
	|| $phase =="HalTrk16graph2" || $phase =="HalTrk17graph2" || $phase =="HalTrk18graph2" || $phase =="HalTrk19graph2" || $phase =="HalTrk20graph2" 
	|| $phase =="HalTrk21graph2"	|| $phase =="HalTrk22graph2" || $phase =="HalTrck01graph2" || $phase =="HalTrkc02graph2" || $phase =="HalTrck03graph2"
	|| $phase =="HalTrck04graph2" || $phase =="HalTrck05graph2" || $phase =="HalTrck06graph2" || $phase =="HalTrck07graph2" || $phase =="HalTrck08graph2"
	|| $phase =="HalTrck09graph2" || $phase =="HalTrck10graph2" || $phase =="HalTrck11graph2" || $phase =="HalTrck12graph2" || $phase =="HalTrck13graph2"
	|| $phase =="HalTrck14graph2" || $phase =="HalTrck15graph2" || $phase =="HalTrck16graph2") {
	header('Content-Disposition: attachment; filename="Graph2'.'.xls"');
	}
	else if($phase == "NeemINVgraph3" || $phase =="HalINV1graph3" || $phase =="HalINV2graph3" || $phase =="HalINV3graph3" || $phase =="HalINV4graph3"
	|| $phase =="HalTrk01graph3" || $phase =="HalTrk02graph3" || $phase =="HalTrk03graph3" || $phase =="HalTrk04graph3" || $phase =="HalTrk05graph3" 
	|| $phase =="HalTrk06graph3" || $phase =="HalTrk07graph3" || $phase =="HalTrk08graph3" || $phase =="HalTrk09graph3" || $phase =="HalTrk10graph3" 
	|| $phase =="HalTrk11graph3" || $phase =="HalTrk12graph3" || $phase =="HalTrk13graph3" || $phase =="HalTrk14graph3" || $phase =="HalTrk15graph3" 
	|| $phase =="HalTrk16graph3" || $phase =="HalTrk17graph3" || $phase =="HalTrk18graph3" || $phase =="HalTrk19graph3" || $phase =="HalTrk20graph3" 
	|| $phase =="HalTrk21graph3"	|| $phase =="HalTrk22graph3" || $phase =="HalTrck01graph3" || $phase =="HalTrkc02graph3" || $phase =="HalTrck03graph3"
	|| $phase =="HalTrck04graph3" || $phase =="HalTrck05graph3" || $phase =="HalTrck06graph3" || $phase =="HalTrck07graph3" || $phase =="HalTrck08graph3"
	|| $phase =="HalTrck09graph3" || $phase =="HalTrck10graph3" || $phase =="HalTrck11graph3" || $phase =="HalTrck12graph3" || $phase =="HalTrck13graph3"
	|| $phase =="HalTrck14graph3" || $phase =="HalTrck15graph3" || $phase =="HalTrck16graph3") {
	header('Content-Disposition: attachment; filename="Graph3'.'.xls"');
	}
	/*Neemrana end*/
	/*Raisoni1 start*/
	else if ($phase == "graph1") {
	header('Content-Disposition: attachment; filename="Graph1'.'.xls"');
	}
	else if ($phase == "graph2") {
	header('Content-Disposition: attachment; filename="Graph2'.'.xls"');
	}
	else if ($phase == "graph3") {
	header('Content-Disposition: attachment; filename="Graph3'.'.xls"');
	}
	
	/*Raisoni1 end*/
	/* Dominos Mumbai start*/
	else if($phase == "SMA1M1"){
	header('Content-Disposition: attachment; filename="SMA1Graph1'.'.xls"');
}else if($phase == "SMA1M2"){
	header('Content-Disposition: attachment; filename="SMA1Graph2'.'.xls"');
}else if($phase == "SMA1M3"){
	header('Content-Disposition: attachment; filename="SMA1Graph3'.'.xls"');
}else if($phase == "SMA2M1"){
	header('Content-Disposition: attachment; filename="SMA2Graph1'.'.xls"');
}else if($phase == "SMA2M2"){
	header('Content-Disposition: attachment; filename="SMA2Graph2'.'.xls"');
}else if($phase == "SMA2M3"){
	header('Content-Disposition: attachment; filename="SMA2Graph3'.'.xls"');
}else if($phase == "SMA3M1"){
	header('Content-Disposition: attachment; filename="SMA3Graph1'.'.xls"');
}else if($phase == "SMA3M2"){
	header('Content-Disposition: attachment; filename="SMA3Graph2'.'.xls"');
}else if($phase == "SMA3M3"){
	header('Content-Disposition: attachment; filename="SMA3Graph3'.'.xls"');
}else if($phase == "SMA4M1"){
	header('Content-Disposition: attachment; filename="SMA4Graph1'.'.xls"');
}else if($phase == "SMA4M2"){
	header('Content-Disposition: attachment; filename="SMA4Graph2'.'.xls"');
}else if($phase == "SMA4M3"){
	header('Content-Disposition: attachment; filename="SMA4Graph3'.'.xls"');
}else if($phase == "SMA5M1"){
	header('Content-Disposition: attachment; filename="SMA5Graph1'.'.xls"');
}else if($phase == "SMA5M2"){
	header('Content-Disposition: attachment; filename="SMA5Graph2'.'.xls"');
}else if($phase == "SMA5M3"){
	header('Content-Disposition: attachment; filename="SMA5Graph3'.'.xls"');
}else if($phase == "SMA6M1"){
	header('Content-Disposition: attachment; filename="SMA6Graph1'.'.xls"');
}else if($phase == "SMA6M2"){
	header('Content-Disposition: attachment; filename="SMA6Graph2'.'.xls"');
}else if($phase == "SMA6M3"){
	header('Content-Disposition: attachment; filename="SMA6Graph3'.'.xls"');
}else if($phase == "SMA7M1"){
	header('Content-Disposition: attachment; filename="SMA7Graph1'.'.xls"');
}else if($phase == "SMA7M2"){
	header('Content-Disposition: attachment; filename="SMA7Graph2'.'.xls"');
}else if($phase == "SMA7M3"){
	header('Content-Disposition: attachment; filename="SMA7Graph3'.'.xls"');
}else if($phase == "SMA8M1"){
	header('Content-Disposition: attachment; filename="SMA8Graph1'.'.xls"');
}else if($phase == "SMA8M2"){
	header('Content-Disposition: attachment; filename="SMA8Graph2'.'.xls"');
}else if($phase == "SMA8M3"){
	header('Content-Disposition: attachment; filename="SMA8Graph3'.'.xls"');
}

	/* Dominos Mumbai end*/
	
	/*Raisoni3 start*/
	else if ($phase == "raigraph1")  {
		header('Content-Disposition: attachment; filename="Graph1'.'.xls"');
	}
	else if ($phase == "raigraph2")  {
		header('Content-Disposition: attachment; filename="Graph2'.'.xls"');
	}
	else if ($phase == "raigraph3")  {
		header('Content-Disposition: attachment; filename="Graph3'.'.xls"');
	}
	/*Raisoni3 end*/
	
	/*Dominos Nagpur start*/
	
	
	else if ($phase == "DOMINV1graph1" || $phase == "DOMINV2graph1" || $phase == "DOMINV3graph1" || $phase == "DOMINV4graph1" || $phase == "DOMINV5graph1") {
	header('Content-Disposition: attachment; filename="Graph1'.'.xls"');
	}
	else if ($phase == "DOMINV1graph2" | $phase == "DOMINV2graph2" || $phase == "DOMINV3graph2" || $phase == "DOMINV4graph2" || $phase == "DOMINV5graph2") {
	header('Content-Disposition: attachment; filename="Graph2'.'.xls"');
	}
	else if ($phase == "DOMINV1graph3" | $phase == "DOMINV2graph3" || $phase == "DOMINV3graph3" || $phase == "DOMINV4graph3" || $phase == "DOMINV5graph3") {
	header('Content-Disposition: attachment; filename="Graph3'.'.xls"');
	}
	/*Dominos Nagpur end*/
	/* Heritage Pune start*/
	else if ($phase == "RYINV1G1" || $phase == "RYINV2G1" || $phase == "RYINV3G1" || $phase == "RYINV4G1" || $phase == "RYINV5G1" || $phase == "RYINV6G1" || $phase == "RYINV7G1" || $phase == "RYINV8G1")  {
	header('Content-Disposition: attachment; filename="Graph1'.'.xls"');
	}
	else if ($phase == "RYINV1G2" | $phase == "RYINV2G2" || $phase == "RYINV3G2" || $phase == "RYINV4G2" || $phase == "RYINV5G2" || $phase == "RYINV6G2" || $phase == "RYINV7G2" || $phase == "RYINV8G2") {
	header('Content-Disposition: attachment; filename="Graph2'.'.xls"');
	}
	else if ($phase == "RYINV1G3" | $phase == "RYINV2G3" || $phase == "RYINV3G3" || $phase == "RYINV4G3" || $phase == "RYINV5G3" || $phase == "RYINV6G3" || $phase == "RYINV7G3" || $phase == "RYINV8G3") {
	header('Content-Disposition: attachment; filename="Graph3'.'.xls"');
	}
	/* Heritage Pune end*/
	/*Indus Nagpur start*/
	
	else if ($phase == "IndINV1G1")  {
		header('Content-Disposition: attachment; filename="Graph1'.'.xls"');
	}
	else if ($phase == "IndINV1G2")  {
		header('Content-Disposition: attachment; filename="Graph2'.'.xls"');
	}
	else if ($phase == "IndINV1G3")  {
		header('Content-Disposition: attachment; filename="Graph3'.'.xls"');
	}
	else if ($phase == "IndINV2G1")  {
		header('Content-Disposition: attachment; filename="Graph1'.'.xls"');
	}
	else if ($phase == "IndINV2G2")  {
		header('Content-Disposition: attachment; filename="Graph2'.'.xls"');
	}
	else if ($phase == "IndINV2G3")  {
		header('Content-Disposition: attachment; filename="Graph3'.'.xls"');
	}
	else if ($phase == "IndINV3G1")  {
		header('Content-Disposition: attachment; filename="Graph1'.'.xls"');
	}
	else if ($phase == "IndINV3G2")  {
		header('Content-Disposition: attachment; filename="Graph2'.'.xls"');
	}
	else if ($phase == "IndINV3G3")  {
		header('Content-Disposition: attachment; filename="Graph3'.'.xls"');
	}
	/*Indus Nagpur end */
	/* Knorr Bremse start */
	
	else if($phase == "KnorrINVgraph1")  {
	header('Content-Disposition: attachment; filename="Graph1'.'.xls"');
	}
	else if($phase == "KnorrINVgraph2") {
	header('Content-Disposition: attachment; filename="Graph2'.'.xls"');
	}
	else if($phase == "KnorrINVgraph3") {
	header('Content-Disposition: attachment; filename="Graph3'.'.xls"');
	}
	/* Knorr Bremse  end*/
	
	
	/*Sowkur durga start*/
	else if ($phase == "SowkurrINV1graph1" || $phase == "SowkurrINV2graph1" || $phase == "SowkurrINV3graph1" || $phase == "SowkurrINV4graph1" || $phase == "SowkurrINV5graph1"
    || $phase == "SowkurrINV6graph1" || $phase == "SowkurrINV7graph1" || $phase == "SowkurrINV8graph1" || $phase == "SowkurrINV9graph1" || $phase == "SowkurrINV10graph1"
	|| $phase == "SowkurrINV11graph1" || $phase == "SowkurrINV12graph1" || $phase == "SowkurrINV13graph1" || $phase == "SowkurrINV14graph1" || $phase == "SowkurrINV15graph1" 
	|| $phase == "SowkurrINV16graph1" || $phase == "SowkurrINV17graph1") {
	header('Content-Disposition: attachment; filename="Graph1'.'.xls"');
	}
	else if ($phase == "SowkurINV58kWshed" || $phase == "SowkurINV560mod" || $phase == "Sowkur90kWshed" || $phase == "Sowkur30kWshed" || $phase == "SowkurINV200mod" ) {
	header('Content-Disposition: attachment; filename="Graph1'.'.xls"');
	}
	else if ($phase == "SowkurINV1graph1" || $phase == "SowkurINV2graph1" || $phase == "SowkurINV3graph1" || $phase == "SowkurINV4graph1" || $phase == "SowkurINV5graph1"
	|| $phase == "SowkurINV6graph1" || $phase == "SowkurINV7graph1" || $phase == "SowkurINV8graph1" || $phase == "SowkurINV9graph1" || $phase == "SowkurINV10graph1"
	|| $phase == "SowkurINV11graph1" || $phase == "SowkurINV12graph1" || $phase == "SowkurINV13graph1" || $phase == "SowkurINV14graph1"|| $phase == "SowkurINV15graph1"
	|| $phase == "SowkurINV16graph1" || $phase == "SowkurINV17graph1")  {
	header('Content-Disposition: attachment; filename="Graph1'.'.xls"');
	}
	else if ($phase == "SowkurINV1graph2" || $phase == "SowkurINV2graph2" || $phase == "SowkurINV3graph2" || $phase == "SowkurINV4graph2" || $phase == "SowkurINV5graph2"
	|| $phase == "SowkurINV6graph2" || $phase == "SowkurINV7graph2" || $phase == "SowkurINV8graph2" || $phase == "SowkurINV9graph2" || $phase == "SowkurINV10graph2"
	|| $phase == "SowkurINV11graph2" || $phase == "SowkurINV12graph2" || $phase == "SowkurINV13graph2" || $phase == "SowkurINV14graph2"|| $phase == "SowkurINV15graph2"
	|| $phase == "SowkurINV16graph2" || $phase == "SowkurINV17graph2")  {
	header('Content-Disposition: attachment; filename="Graph2'.'.xls"');
	}
	else if ($phase == "SowkurINV1graph3" || $phase == "SowkurINV2graph3" || $phase == "SowkurINV3graph3" || $phase == "SowkurINV4graph3" || $phase == "SowkurINV5graph3"
	|| $phase == "SowkurINV6graph3" || $phase == "SowkurINV7graph3" || $phase == "SowkurINV8graph3" || $phase == "SowkurINV9graph3" || $phase == "SowkurINV10graph3"
	|| $phase == "SowkurINV11graph3" || $phase == "SowkurINV12graph3" || $phase == "SowkurINV13graph3" || $phase == "SowkurINV14graph3"|| $phase == "SowkurINV15graph3"
	|| $phase == "SowkurINV16graph3" || $phase == "SowkurINV17graph3")  {
	header('Content-Disposition: attachment; filename="Graph3'.'.xls"');
	}
	
	/*Sowkur durga end*/
	/*Lalpur start*/
	else if ($phase == "LAPINV1graph1" || $phase == "LAPINV2graph1" || $phase == "LAPINV3graph1" || $phase == "LAPINV4graph1")  {
	header('Content-Disposition: attachment; filename="Graph1'.'.xls"');
	}
	else if ($phase == "LAPINV1graph2" | $phase == "LAPINV2graph2" || $phase == "LAPINV3graph2" || $phase == "LAPINV4graph2") {
	header('Content-Disposition: attachment; filename="Graph2'.'.xls"');
	}
	else if ($phase == "LAPINV1graph3" | $phase == "LAPINV2graph3" || $phase == "LAPINV3graph3" || $phase == "LAPINV4graph3") {
	header('Content-Disposition: attachment; filename="Graph3'.'.xls"');
	}
	/*Lalpur end*/
	/* Amplus Rudrapur start */
	else if($phase == "RUDINV1graph1" ||$phase == "RUDINV2graph1" ||$phase == "RUDINV3graph1" ||$phase == "RUDINV4graph1" ||$phase == "RUDINV5graph1")  {
	header('Content-Disposition: attachment; filename="Graph1'.'.xls"');
	}
	else if($phase == "RUDINV1graph2" || $phase == "RUDINV2graph2" || $phase == "RUDINV3graph2" || $phase == "RUDINV4graph2" || $phase == "RUDINV5graph2") {
	header('Content-Disposition: attachment; filename="Graph2'.'.xls"');
	}
	else if($phase == "RUDINV1graph3" ||$phase == "RUDINV2graph3" ||$phase == "RUDINV3graph3" ||$phase == "RUDINV4graph3" ||$phase == "RUDINV5graph3") {
	header('Content-Disposition: attachment; filename="Graph3'.'.xls"');
	}
	/* Amplus Rudrapur end */
	/*Mas solar indian bank start*/
	else if($phase == "MasINV")  {
	header('Content-Disposition: attachment; filename="Graph1'.'.xls"');
	}
	/*Mas solar indian bank end */
	/* Fortis start*/
	else if ($phase == "FortINV1graph1" || $phase == "FortINV2graph1" || $phase == "FortINV3graph1")  {
	header('Content-Disposition: attachment; filename="Graph1'.'.xls"');
	}
	else if ($phase == "FortINV1graph2" | $phase == "FortINV2graph2" || $phase == "FortINV3graph2") {
	header('Content-Disposition: attachment; filename="Graph2'.'.xls"');
	}
	else if ($phase == "FortINV1graph3" | $phase == "FortINV2graph3" || $phase == "FortINV3graph3") {
	header('Content-Disposition: attachment; filename="Graph3'.'.xls"');
	}
	/* Fortis end*/
	/*Amplus Hilton pune start*/
	
	else if($phase == "INV1G1"){
		header('Content-Disposition: attachment; filename="INV1_Graph1'.'.xls"');
}else if($phase == "INV1G2"){
		header('Content-Disposition: attachment; filename="INV1_Graph2'.'.xls"');
}else if($phase == "INV1G3"){
		header('Content-Disposition: attachment; filename="INV1_Graph3'.'.xls"');
}else if($phase == "INV2G1"){
		header('Content-Disposition: attachment; filename="INV2_Graph1'.'.xls"');
}else if($phase == "INV2G2"){
		header('Content-Disposition: attachment; filename="INV2_Graph2'.'.xls"');
}else if($phase == "INV2G3"){
		header('Content-Disposition: attachment; filename="INV2_Graph3'.'.xls"');
}else if($phase == "INV3G1"){
		header('Content-Disposition: attachment; filename="INV3_Graph1'.'.xls"');
}else if($phase == "INV3G2"){
		header('Content-Disposition: attachment; filename="INV3_Graph2'.'.xls"');
}else if($phase == "INV3G3"){
		header('Content-Disposition: attachment; filename="INV3_Graph3'.'.xls"');
}else if($phase == "INV4G1"){
		header('Content-Disposition: attachment; filename="INV4_Graph1'.'.xls"');
}else if($phase == "INV4G2"){
		header('Content-Disposition: attachment; filename="INV4_Graph2'.'.xls"');
}else if($phase == "INV4G3"){
		header('Content-Disposition: attachment; filename="INV4_Graph3'.'.xls"');
}else if($phase == "INV5G1"){
		header('Content-Disposition: attachment; filename="INV5,6_Graph1'.'.xls"');
}else if($phase == "INV5G2"){
		header('Content-Disposition: attachment; filename="INV5,6_Graph2'.'.xls"');
}else if($phase == "INV5G3"){
		header('Content-Disposition: attachment; filename="INV5,6_Graph3'.'.xls"');
}else if($phase == "INV7G1"){
		header('Content-Disposition: attachment; filename="INV7_Graph1'.'.xls"');
}else if($phase == "INV7G2"){
		header('Content-Disposition: attachment; filename="INV7_Graph2'.'.xls"');
}else if($phase == "INV7G3"){
		header('Content-Disposition: attachment; filename="INV7_Graph3'.'.xls"');
}else if($phase == "INV8G1"){
		header('Content-Disposition: attachment; filename="INV8_Graph1'.'.xls"');
}else if($phase == "INV8G2"){
		header('Content-Disposition: attachment; filename="INV8_Graph2'.'.xls"');
}else if($phase == "INV8G3"){
		header('Content-Disposition: attachment; filename="INV8_Graph3'.'.xls"');
}else if($phase == "INV9G1"){
		header('Content-Disposition: attachment; filename="INV9_Graph1'.'.xls"');
}else if($phase == "INV9G2"){
		header('Content-Disposition: attachment; filename="INV9_Graph2'.'.xls"');
}else if($phase == "INV9G3"){
		header('Content-Disposition: attachment; filename="INV9_Graph3'.'.xls"');
}else if($phase == "INV10G1"){
		header('Content-Disposition: attachment; filename="INV10,11,12_Graph1'.'.xls"');
}else if($phase == "INV10G2"){
		header('Content-Disposition: attachment; filename="INV10,11,12_Graph2'.'.xls"');
}else if($phase == "INV10G3"){
		header('Content-Disposition: attachment; filename="INV10,11,12_Graph3'.'.xls"');
}else if($phase == "INV13G1"){
		header('Content-Disposition: attachment; filename="INV13_Graph1'.'.xls"');
}else if($phase == "INV13G2"){
		header('Content-Disposition: attachment; filename="INV13_Graph2'.'.xls"');
}else if($phase == "INV13G3"){
		header('Content-Disposition: attachment; filename="INV13_Graph3'.'.xls"');
}else if($phase == "INV14G1"){
		header('Content-Disposition: attachment; filename="INV14_Graph1'.'.xls"');
}else if($phase == "INV14G2"){
		header('Content-Disposition: attachment; filename="INV14_Graph2'.'.xls"');
}else if($phase == "INV14G3"){
		header('Content-Disposition: attachment; filename="INV14_Graph3'.'.xls"');
}else if($phase == "INV15G1"){
		header('Content-Disposition: attachment; filename="INV15_Graph1'.'.xls"');
}else if($phase == "INV15G2"){
		header('Content-Disposition: attachment; filename="INV15_Graph2'.'.xls"');
}else if($phase == "INV15G3"){
		header('Content-Disposition: attachment; filename="INV15_Graph3'.'.xls"');
}else if($phase == "INV16G1"){
		header('Content-Disposition: attachment; filename="INV16_Graph1'.'.xls"');
}else if($phase == "INV16G2"){
		header('Content-Disposition: attachment; filename="INV16_Graph2'.'.xls"');
}else if($phase == "INV16G3"){
		header('Content-Disposition: attachment; filename="INV16_Graph3'.'.xls"');
}
/*Amplus hilton pune end*/
/*Yamaha start*/
else if($phase == "YamaINV1graph1" ||$phase == "YamaINV2graph1" ||$phase == "YamaINV3graph1" ||$phase == "YamaINV4graph1" ||$phase == "YamaINV5graph1" ||$phase == "YamaINV6graph1" ||$phase == "YamaINV7graph1" ||
	$phase == "YamaINV8graph1" || $phase == "YamaINV9graph1" || $phase == "YamaINV10graph1")  {
	header('Content-Disposition: attachment; filename="Graph1'.'.xls"');
	}
	else if($phase == "YamaINV1graph2" || $phase == "YamaINV2graph2" || $phase == "YamaINV3graph2" || $phase == "YamaINV4graph2" || $phase == "YamaINV5graph2" || $phase == "YamaINV6graph2" || $phase == "YamaINV7graph2" ||
	$phase == "YamaINV8graph2" || $phase == "YamaINV9graph2" || $phase == "YamaINV10graph2") {
	header('Content-Disposition: attachment; filename="Graph2'.'.xls"');
	}
	else if($phase == "YamaINV1graph3" ||$phase == "YamaINV2graph3" ||$phase == "YamaINV3graph3" ||$phase == "YamaINV4graph3" ||$phase == "YamaINV5graph3" ||$phase == "YamaINV6graph3" ||$phase == "YamaINV7graph3" ||
	$phase == "YamaINV8graph3" || $phase == "YamaINV9graph3" || $phase == "YamaINV10graph3") {
	header('Content-Disposition: attachment; filename="Graph3'.'.xls"');
	}
	/*Yamaha end*/
	/* Inverter Excel name end*/
                                                          /*Energy meter start*/

/*Mas solar start*/
  else if($phase == "MasEM")  {
	header('Content-Disposition: attachment; filename="Energy Meter'.'.xls"');
	}
	
	/*Yamaha start*/
	
	else if($phase == "YamahaBlkA"){
	header('Content-Disposition: attachment; filename="Energy Meter(A)'.'.xls"');
}
else if($phase == "YamahaBlkB"){
	header('Content-Disposition: attachment; filename="Energy Meter(B)'.'.xls"');
}
else if($phase == "YamahaBlkC"){
	header('Content-Disposition: attachment; filename="Energy Meter(C)'.'.xls"');
}
else if($phase == "YamahaBlkD"){
	header('Content-Disposition: attachment; filename="Energy Meter(D)'.'.xls"');
}
else if($phase == "YamahaBlkE"){
	header('Content-Disposition: attachment; filename="Energy Meter(E)'.'.xls"');
}
/*Yamaha end*/
/*hal start*/
	else if ($phase == "HalEm1" || $phase == "HalEm2") {
	header('Content-Disposition: attachment; filename="Energy Meter'.'.xls"');
	}
	/*hal end*/
	/*neemrana start*/
	else if ($phase == "HalEm1" || $phase == "HalEm2") {
	header('Content-Disposition: attachment; filename="EnergyMeter'.'.xls"');
	}
	/*neemrana end*/
	/*Raisoni1 start*/
	else if ($phase == "tag" && park_no == 36) {
	header('Content-Disposition: attachment; filename="Graph1'.'.xls"');
	}
	/*Raisoni1 end*/
/* Dominos Mumbai start*/	
	else if ($phase == "Mumtag") {
		header('Content-Disposition: attachment; filename="EnergyMeter'.'.xls"');
	}
/* Dominos Mumbai end*/

/*Raisoni3 start*/
else if ($phase == "Rai3tag") {
		header('Content-Disposition: attachment; filename="EnergyMeter'.'.xls"');
	}
/*Raisoni3 end*/
/*Domonos Nagpur start*/
else if ($phase == "Domtag") {
		header('Content-Disposition: attachment; filename="EnergyMeter'.'.xls"');
	}
	
	/*Domonos Nagpur end*/
	
	/* Heritage Pune start*/
	
	else if ($phase == "Roytag") {
		header('Content-Disposition: attachment; filename="EnergyMeter'.'.xls"');
	}
	/* Heritage Pune end*/
	
	/*Indus Nagpur start*/
	else if ($phase == "IndEM1") {
		header('Content-Disposition: attachment; filename="EnergyMeter1'.'.xls"');
	}
	else if ($phase == "IndEM2") {
		header('Content-Disposition: attachment; filename="EnergyMeter2'.'.xls"');
	}
	/*Indus Nagpur end*/
	/* Knorr Bremse start */
	
else if ($phase == "Knorrtag") {
	header('Content-Disposition: attachment; filename="EnergyMeter'.'.xls"');
	}
	else if($phase == "Knorren3") {
	header('Content-Disposition: attachment; filename="EnergyMeter Graph3'.'.xls"');
	}
	/* Knorr Bremse  end*/
	
	/*Sowkur durga start*/
	else if ($phase == "SowkurEM" || $phase == "Sowkurtag") {
	header('Content-Disposition: attachment; filename="EnergyMeter'.'.xls"');
	}
	
	/*Sowkur durga end*/
	/*Lalpur start*/
	
	else if ($phase == "LALtag") {
		header('Content-Disposition: attachment; filename="EnergyMeter'.'.xls"');
	}
	/*Lalpur end*/
	/* Amplus Rudrapur start */
	
	else if ($phase == "RUDtag") {
	header('Content-Disposition: attachment; filename="EnergyMeter'.'.xls"');
	}
	/* Amplus Rudrapur end */
	/* Fortis start*/
	else if ($phase == "Forttag") {
	header('Content-Disposition: attachment; filename="EnergyMeter'.'.xls"');
	}
	/* Fortis end*/
	/*Amplus hilton pune*/
	else if ($phase == "tag" && park_no == 43) {
	header('Content-Disposition: attachment; filename="Energy Meter'.'.xls"');
	}
       
	   /* Energy meter name end*/
                                                                        /* WS start*/
/*hal start*/
	else if ($phase == "HalWs1" || $phase == "HalWs2") {
	header('Content-Disposition: attachment; filename="Weather Station'.'.xls"');
	}
	/*hal end*/
	/*Raisoni1 start*/
	else if ($phase == "weather") {
	header('Content-Disposition: attachment; filename="Weather Station'.'.xls"');
	}
	/*Raisoni1 end*/
	
	/*Neemrana start*/
	else if ($phase == "Neemweather" || $phase == "HalWs1" || $phase == "HalWs2" ) {
	header('Content-Disposition: attachment; filename="Weather Station'.'.xls"');
	}
	/*Neemrana end*/
	
	/* Dominos Mumbai start*/
	else if ($phase =="Yamahatag") {
	header('Content-Disposition: attachment; filename="Weather Station'.'.xls"');
	}
	/* Dominos Mumbai end*/
	/*Raisoni3 start*/
	else if ($phase == "ws") {
	header('Content-Disposition: attachment; filename="Weather Station'.'.xls"');
	}
	/*Raisoni3 end*/
	/*Domonos Nagpur start*/
	else if ($phase == "domweather") {
	header('Content-Disposition: attachment; filename="Weather Station'.'.xls"');
	}
	
	/*Dominos Nagpur end*/
	
	/* Heritage Pune start*/
	else if ($phase == "royweather") {
	header('Content-Disposition: attachment; filename="Weather Station'.'.xls"');
	}
	/* Heritage Pune end*/
	
	
	/*Indus Nagpur start*/
	else if($phase =="indweather"){
		header('Content-Disposition: attachment; filename="Weather Station'.'.xls"');
	}
	/*Indus Nagpur end*/
	/* Knorr Bremse start */
	
	else if ($phase == "Knorrweather") {
	header('Content-Disposition: attachment; filename="Weather Station'.'.xls"');
	}
	/* Knorr Bremse  end*/
	
	
	/*Sowkur durga start*/
	else if ($phase == "SowkurWS") {
	header('Content-Disposition: attachment; filename="Weather Station'.'.xls"');
	}
	else if ($phase == "Sowkurweather") {
	header('Content-Disposition: attachment; filename="Weather Station'.'.xls"');
	}
	
	/*Sowkur durga end*/
	/*lalpur start*/
	else if ($phase == "tag" && park_no == 55) {
		header('Content-Disposition: attachment; filename="weather Station'.'.xls"');
	}
	/*lalpur end*/
	/* Amplus Rudrapur start */
	else if ($phase == "RUDweather") {
	header('Content-Disposition: attachment; filename="Weather Station'.'.xls"');
	}
	/* Amplus Rudrapur end */
	/*Mas solar start*/
	 else if($phase == "MASWS")  {
	header('Content-Disposition: attachment; filename="Weather Station'.'.xls"');
	}
	/* Fortis start*/
	
	else if ($phase == "Fortweather") {
	header('Content-Disposition: attachment; filename="Weather Station'.'.xls"');
	}
	/* Fortis end*/
	/*Amplus hilton pune*/
	else if($phase == "weather20"){
	header('Content-Disposition: attachment; filename="Weather_Station_20Degrees'.'.xls"');
}else if($phase == "weather10"){
	header('Content-Disposition: attachment; filename="Weather_Station_10Degrees'.'.xls"');
}
/*Yamaha start*/

else if ($phase == "Yamaweather") {
	header('Content-Disposition: attachment; filename="Weather Station'.'.xls"');
	}
       /*Yamaha end*/                                                                      
	   /* WS end*/
/*SMU start*/
/*Yamaha start*/
else if($phase =="Yamasmu2inv4"){
		header('Content-Disposition: attachment; filename="SMCB2/1900740859/INV4 '.'.xls"');
	}
else if($phase =="Yamasmu4inv4"){
		header('Content-Disposition: attachment; filename="SMCB4/1900740859/INV4'.'.xls"');
	}
	else if($phase =="Yamasmu3inv5"){
		header('Content-Disposition: attachment; filename="SMCB3/139F5003543001N455/INV5'.'.xls"');
	}
	else if($phase =="Yamasmu9inv6"){
		header('Content-Disposition: attachment; filename="SMCB9/1046869A006/INV6'.'.xls"');
	}
	else if($phase =="Yamasmu5inv7"){
		header('Content-Disposition: attachment; filename="SMCB5/1046869A005/INV7'.'.xls"');
	}
	else if($phase =="Yamasmu8inv10"){
		header('Content-Disposition: attachment; filename="SMCB8/1046869A003/INV10'.'.xls"');
	}
	else if($phase =="Yamasmu2inv8"){
		header('Content-Disposition: attachment; filename="SMCB2/1046869A004/INV8'.'.xls"');
	}
	 /*Yamaha end*/  
/* HAL SMU start*/
else if($phase == "HalsmuA01") {
	header('Content-Disposition: attachment; filename="SMCB-A-01/24JK1606004/INV2'.'.xls"');
	}
	else if($phase == "HalsmuA02") {
	header('Content-Disposition: attachment; filename="SMCB-A-02/24JK1606019/INV1'.'.xls"');
	}
	else if($phase == "HalsmuA03") {
	header('Content-Disposition: attachment; filename="SMCB-A-03/24JK1606032/INV1'.'.xls"');
	}
	else if($phase == "HalsmuA04") {
	header('Content-Disposition: attachment; filename="SMCB-A-04/24JK1606016/INV1'.'.xls"');
	}
	else if($phase == "HalsmuA05") {
	header('Content-Disposition: attachment; filename="SMCB-A-05/24JK1606030/INV1'.'.xls"');
	}
	else if($phase == "HalsmuA06") {
	header('Content-Disposition: attachment; filename="SMCB-A-06/24JK1606013/INV1'.'.xls"');
	}
	else if($phase == "HalsmuA07") {
	header('Content-Disposition: attachment; filename="SMCB-A-07/24JK1606027/INV1'.'.xls"');
	}
	else if($phase == "HalsmuA08") {
	header('Content-Disposition: attachment; filename="SMCB-A-08/24JK1606015/INV1'.'.xls"');
	}
	else if($phase == "HalsmuA09") {
	header('Content-Disposition: attachment; filename="SMCB-A-09/24JK1606001/INV2'.'.xls"');
	}
	else if($phase == "HalsmuA10") {
	header('Content-Disposition: attachment; filename="SMCB-A-10/24JK1606026/INV1'.'.xls"');
	}
	else if($phase == "HalsmuA11") {
	header('Content-Disposition: attachment; filename="SMCB-A-11/24JK1606023/INV1'.'.xls"');
	}
	else if($phase == "HalsmuB01") {
	header('Content-Disposition: attachment; filename="SMCB-B-01/24JK1606007/INV2'.'.xls"');
	}
	else if($phase == "HalsmuB02") {
	header('Content-Disposition: attachment; filename="SMCB-B-02/24JK1606012/INV2'.'.xls"');
	}
	else if($phase == "HalsmuB03") {
	header('Content-Disposition: attachment; filename="SMCB-B-03/24JK1606020/INV2'.'.xls"');
	}
	else if($phase == "HalsmuB04") {
	header('Content-Disposition: attachment; filename="SMCB-B-04/24JK1606021/INV2'.'.xls"');
	}
	else if($phase == "HalsmuB05") {
	header('Content-Disposition: attachment; filename="SMCB-B-05/24JK1606017/INV2'.'.xls"');
	}
	else if($phase == "HalsmuB06") {
	header('Content-Disposition: attachment; filename="SMCB-B-06/24JK1606014/INV2'.'.xls"');
	}
	else if($phase == "HalsmuB07") {
	header('Content-Disposition: attachment; filename="SMCB-B-07/24JK1606031/INV2'.'.xls"');
	}
	else if($phase == "HalsmuC01") {
	header('Content-Disposition: attachment; filename="SMCB-C-01/24JK1606009/INV3'.'.xls"');
	}
	else if($phase == "HalsmuC02") {
	header('Content-Disposition: attachment; filename="SMCB-C-02/24JK1606005/INV3'.'.xls"');
	}
	else if($phase == "HalsmuC03") {
	header('Content-Disposition: attachment; filename="SMCB-C-03/24JK1606029/INV3'.'.xls"');
	}
	else if($phase == "HalsmuC04") {
	header('Content-Disposition: attachment; filename="SMCB-C-04/24JK1606011/INV3'.'.xls"');
	}
	else if($phase == "HalsmuC05") {
	header('Content-Disposition: attachment; filename="SMCB-C-05/24JK1606006/INV3'.'.xls"');
	}
	else if($phase == "HalsmuC06") {
	header('Content-Disposition: attachment; filename="SMCB-C-06/24JK1606024/INV3'.'.xls"');
	}
	else if($phase == "HalsmuC07") {
	header('Content-Disposition: attachment; filename="SMCB-C-07/24JK1606018/INV3'.'.xls"');
	}
	else if($phase == "HalsmuC08") {
	header('Content-Disposition: attachment; filename="SMCB-C-08/24JK1606025/INV4'.'.xls"');
	}
	else if($phase == "HalsmuC09") {
	header('Content-Disposition: attachment; filename="SMCB-C-09/24JK1606002/INV4'.'.xls"');
	}
	else if($phase == "HalsmuC10") {
	header('Content-Disposition: attachment; filename="SMCB-C-10/24JK1606003/INV4'.'.xls"');
	}
	else if($phase == "HalsmuC11") {
	header('Content-Disposition: attachment; filename="SMCB-C-11/24JK1606010/INV4'.'.xls"');
	}
	else if($phase == "HalsmuC12") {
	header('Content-Disposition: attachment; filename="SMCB-C-12/24JK1606028/INV4'.'.xls"');
	}
	else if($phase == "HalsmuC13") {
	header('Content-Disposition: attachment; filename="SMCB-C-13/24JK1606008/INV4'.'.xls"');
	}
	else if($phase == "HalsmuC14") {
	header('Content-Disposition: attachment; filename="SMCB-C-14/24JK1606022/INV4'.'.xls"');
	}
/*Hal SMU end*/
/*Raisoni1   start*/
   else if($phase == "smu") {
	header('Content-Disposition: attachment; filename="SMU'.'.xls"');
	}
/*Raisoni1  end*/
/*Raisoni3 start*/
else if($phase == "smu" && $park_no=="46") {
	header('Content-Disposition: attachment; filename="SMU'.'.xls"');
	}
/*Raisoni3 end*/
/* Dominos Mumbai start*/
else if($phase == "ampsmu1inv1"){
	header('Content-Disposition: attachment; filename="INV1/1900705898/SMA1'.'.xls"');
}else if($phase == "ampsmu1inv2"){
	header('Content-Disposition: attachment; filename="INV2/1900705882/SMA2'.'.xls"');
}else if($phase == "ampsmu1inv3"){
	header('Content-Disposition: attachment; filename="INV3/1900705878/SMA3'.'.xls"');
}else if($phase == "ampsmu1inv4"){
	header('Content-Disposition: attachment; filename="INV4/1900705201/SMA4'.'.xls"');
}else if($phase == "ampsmu2inv5"){
	header('Content-Disposition: attachment; filename="INV5/1900704340/SMA5'.'.xls"');
}else if($phase == "ampsmu2inv6"){
	header('Content-Disposition: attachment; filename="INV6/1900705823/SMA6'.'.xls"');
}else if($phase == "ampsmu2inv7"){
	header('Content-Disposition: attachment; filename="INV7/1900705766/SMA7'.'.xls"');
}else if($phase == "ampsmu2inv8"){
	header('Content-Disposition: attachment; filename="INV8/1900705913/SMA8'.'.xls"');
}else if($phase == "ampweather"){
	header('Content-Disposition: attachment; filename="Weather_Station'.'.xls"');
}
/* Dominos Mumbai end*/

/*Dominos Nagpur start*/
else if($phase =="domsmu1inv1"){
		header('Content-Disposition: attachment; filename="INV1/1900723491/SMA1'.'.xls"');
	}
	else if($phase =="domsmu1inv2"){
		header('Content-Disposition: attachment; filename="INV2/1900723458/SMA2'.'.xls"');
	}
	else if($phase =="domsmu1inv3"){
		header('Content-Disposition: attachment; filename="INV3/1900723466/SMA3'.'.xls"');
	}
	else if($phase =="domsmu1inv4"){
		header('Content-Disposition: attachment; filename="INV4/1900723427/SMA4'.'.xls"');
	}
	else if($phase =="domsmu1inv5"){
		header('Content-Disposition: attachment; filename="INV5/1900724435/SMA5'.'.xls"');
	}
/*Dominos Nagpur end*/

/*Heritage start*/

	else if($phase =="roysmu1inv1"){
		header('Content-Disposition: attachment; filename="SMU1/1900724647/SMA1'.'.xls"');
	}
	else if($phase =="roysmu1inv2"){
		header('Content-Disposition: attachment; filename="SMU1/1900723471/SMA2'.'.xls"');
	}
	else if($phase =="roysmu1inv3"){
		header('Content-Disposition: attachment; filename="SMU1/1900723352/SMA3'.'.xls"');
	}
	else if($phase =="roysmu1inv4"){
		header('Content-Disposition: attachment; filename="SMU1/1900725115/SMA4'.'.xls"');
	}
	else if($phase =="roysmu2inv5"){
		header('Content-Disposition: attachment; filename="SMU2/1900723486/SMA5'.'.xls"');
	}
	else if($phase =="roysmu2inv6"){
		header('Content-Disposition: attachment; filename="SMU2/1900725116/SMA6'.'.xls"');
	}
	else if($phase =="roysmu2inv7"){
		header('Content-Disposition: attachment; filename="SMU2/1900724640/SMA7'.'.xls"');
	}
	else if($phase =="roysmu2inv8"){
		header('Content-Disposition: attachment; filename="SMU2/1900724384/SMA8'.'.xls"');
	}
	/*Heritage end*/
	
	/*Indus Nagpur start*/
	
	else if($phase =="indsmu1inv1"){
		header('Content-Disposition: attachment; filename="SMU1/139F5003392201N275/SMA1'.'.xls"');
	}
	else if($phase =="indsmu2inv2"){
		header('Content-Disposition: attachment; filename="SMU2/139F5003386601N275/SMA2'.'.xls"');
	}
	else if($phase =="indsmu3inv3"){
		header('Content-Disposition: attachment; filename="SMU3/139F5003396201N285/SMA3'.'.xls"');
	}
	
	/*Indus Nagpur end*/
	/* Knorr Bremse start */
	
	else if($phase == "Knorrsmu1inv1")  {
	header('Content-Disposition: attachment; filename="SMU1/INV East'.'.xls"');
	}
	else if($phase == "Knorrsmu2inv2") {
	header('Content-Disposition: attachment; filename="SMU2/INV West'.'.xls"');
	}
	else if($phase == "Knorrsmu3inv3") {
	header('Content-Disposition: attachment; filename="SMU3/INV South'.'.xls"');
	}
	/* Knorr Bremse  end*/
	
	/*Rudrapur start*/
	else if($phase =="Rudsmu1inv1"){
		header('Content-Disposition: attachment; filename="INV1/1900732799/SMA1'.'.xls"');
	}
	else if($phase =="Rudsmu1inv2"){
		header('Content-Disposition: attachment; filename="INV2/1900732898/SMA2'.'.xls"');
	}
	else if($phase =="Rudsmu1inv3"){
		header('Content-Disposition: attachment; filename="INV3/1900732554/SMA3'.'.xls"');
	}
	else if($phase =="Rudsmu2inv4"){
		header('Content-Disposition: attachment; filename="INV4/1900732574/SMA4'.'.xls"');
	}
	else if($phase =="Rudsmu2inv5"){
		header('Content-Disposition: attachment; filename="INV5/1900732572/SMA5'.'.xls"');
	}

	/*Rudrapur end*/
	/*Fortis start*/
	else if($phase =="Fortsmu1inv1"){
		header('Content-Disposition: attachment; filename="SMU/FRONIUS/27042143 '.'.xls"');
	}
	else if($phase =="Fortsmu2inv2"){
		header('Content-Disposition: attachment; filename="SMU/FRONIUS/27042139  '.'.xls"');
	}
	/*Fortis end*/
	/*Amplus hilton pune*/
	else if($phase == "smu1inv1"){
	header('Content-Disposition: attachment; filename="INV1/080161339/REFU20/SPR435/11X5'.'.xls"');
}else if($phase == "smu1inv2"){
	header('Content-Disposition: attachment; filename="INV2/2007307583/SMA11/SPR435/7X4'.'.xls"');
}else if($phase == "smu1inv3"){
	header('Content-Disposition: attachment; filename="INV3/2007307578/SMA11/TRINA300/14X3'.'.xls"');
}else if($phase == "smu1inv4"){
	header('Content-Disposition: attachment; filename="INV4/2007307494/SMA11/TRINA300/14X3'.'.xls"');
}else if($phase == "smu2inv1"){
	header('Content-Disposition: attachment; filename="INV5/2007310156/SMA11/RENE300/14X3'.'.xls"');
}else if($phase == "smu2inv2"){
	header('Content-Disposition: attachment; filename="INV6/2007310056/SMA11/RENE300/14X3'.'.xls"');
}else if($phase == "smu2inv3"){
	header('Content-Disposition: attachment; filename="INV7/80161337/REFU20/RENE300/21X4'.'.xls"');
}else if($phase == "smu2inv4"){
	header('Content-Disposition: attachment; filename="INV8/2007307640/SMA11/SPR435/7X4'.'.xls"');
}else if($phase == "smu3inv1"){
	header('Content-Disposition: attachment; filename="INV9/080161338/REFU20/TRAINA300/21X4'.'.xls"');
}else if($phase == "smu3inv2"){
	header('Content-Disposition: attachment; filename="INV10/2007310159/SMA11/SPR327/9X4'.'.xls"');
}else if($phase == "smu3inv3"){
	header('Content-Disposition: attachment; filename="INV11/2007310055/SMA11/SPR327/9X4'.'.xls"');
}else if($phase == "smu3inv4"){
	header('Content-Disposition: attachment; filename="INV12/2007310115/SMA11/SPR327/9X4'.'.xls"');
}else if($phase == "smu4inv1"){
	header('Content-Disposition: attachment; filename="INV13/080161340/REFU20/RENE300/21X4'.'.xls"');
}else if($phase == "smu4inv2"){
	header('Content-Disposition: attachment; filename="INV14/2007307718/SMA11/SPR327/9X4'.'.xls"');
}else if($phase == "smu4inv3"){
	header('Content-Disposition: attachment; filename="INV15/2007310120/SMA11/SPR327/9X4'.'.xls"');
}else if($phase == "smu4inv4"){
	header('Content-Disposition: attachment; filename="INV16/2007310116/SMA11/TRAINA300/14X3'.'.xls"');
}
else if($phase == "refusolG120"){
	header('Content-Disposition: attachment; filename="Refusol_20Degrees'.'.xls"');
}else if($phase == "refusolG220"){
	header('Content-Disposition: attachment; filename="Refusol_20Degrees'.'.xls"');
}else if($phase == "refusolG320"){
	header('Content-Disposition: attachment; filename="Refusol_20Degrees'.'.xls"');
}else if($phase == "refusolG110"){
	header('Content-Disposition: attachment; filename="Refusol_10Degrees'.'.xls"');
}else if($phase == "refusolG210"){
	header('Content-Disposition: attachment; filename="Refusol_10Degrees'.'.xls"');
}else if($phase == "refusolG310"){
	header('Content-Disposition: attachment; filename="Refusol_10Degrees'.'.xls"');
}else if($phase == "refusolG1both"){
	header('Content-Disposition: attachment; filename="Refusol_20&10Degrees'.'.xls"');
}else if($phase == "refusolG2both"){
	header('Content-Disposition: attachment; filename="Refusol_20&10Degrees'.'.xls"');
}else if($phase == "refusolG3both"){
	header('Content-Disposition: attachment; filename="Refusol_20&10Degrees'.'.xls"');
}
else if($phase == "SMA20G1"){
	header('Content-Disposition: attachment; filename="SMA_Inverter_20Degrees'.'.xls"');
}else if($phase == "SMA20G2"){
	header('Content-Disposition: attachment; filename="SMA_Inverter_20Degrees'.'.xls"');
}else if($phase == "SMA20G3"){
	header('Content-Disposition: attachment; filename="SMA_Inverter_20Degrees'.'.xls"');
}else if($phase == "SMA10G1"){
	header('Content-Disposition: attachment; filename="SMA_Inverter_10Degrees'.'.xls"');
}else if($phase == "SMA10G2"){
	header('Content-Disposition: attachment; filename="SMA_Inverter_10Degrees'.'.xls"');
}else if($phase == "SMA10G3"){
	header('Content-Disposition: attachment; filename="SMA_Inverter_10Degrees'.'.xls"');
}else if($phase == "SMAbothG1"){
	header('Content-Disposition: attachment; filename="SMA_Inverter_20&10Degrees'.'.xls"');
}else if($phase == "SMAbothG2"){
	header('Content-Disposition: attachment; filename="SMA_Inverter_20&10Degrees'.'.xls"');
}else if($phase == "SMAbothG3"){
	header('Content-Disposition: attachment; filename="SMA_Inverter_20&10Degrees'.'.xls"');
}
	
/*SMU end*/
	
require_once("../connections/queriesInflux2.php");
require_once ("../connections/queriesMysql2.php");
require_once ("../connections/influxResolver.php");

if (is_null($args)) {
  return;
}
date_default_timezone_set('UTC');
if( !isset($offset)){
  $offset = 19800; // Indian Standard Time
}
if( !isset($interval)){
  $interval = "5m"; // time interval, default: "5m"
}
if (! (isset($stamp) and isset($endstamp)) ){
  return;
}
$args = split(";", $args);

$datapoints = array();
########################################################################
#  $datapoints array:  build from given args[]
########################################################################
foreach ($args as $arg) {
  # each $arg is a line of comma-separated $words
  #		"0,1,0,8240,Activepower_Total,Active%20Power,15,kW,4;"
  # 		[0]=preOffset, [1]=factor, [2]=postOffset ,[3]=device id ,[4]=field ,[5]=title, [6], [7]=unit, [8]
  $words = split(',', $arg);
  if (sizeof($words) != 9) {
    continue;
  }
  $nextDatapoint = array(
    'pre'		=>$words[0],
    'fact'		=>$words[1],
    'post'		=>$words[2],
    'title'		=>$words[5],
    'unit'		=>str_replace("SQUA", "^2", str_replace("DEG", "DEG ", $words[7])),
    'f'    		=>str_replace("PLUS", "+",$words[4]),
    'device'	=>$words[3],
    'd'			=>'-1',
    'iid'		=>'-1',
    'aggregate'	=>""
  );

  // resolve 'device' to 'd' and 'iid' LATER.
  # ##################################################
  # aggregated datapoints     "1939_1946"
  # ##################################################
  // a `device` string like this "1939_1946"  means:
  //		several datapoints from `device`s
  //		$devs '1939' and '1946'
  // 		have to be aggretaged into one resulting column.
  $devs=explode("_",$nextDatapoint['device']);
  if(count($devs)>1) {
    $preAggregated  = $nextDatapoint['pre'];
    $factAggregated = $nextDatapoint['fact'];
    $postAggregated = $nextDatapoint['post'];
    $nextDatapoint['pre'] = 0;
    $nextDatapoint['fact'] = 1;
    $nextDatapoint['post'] = 0;
    $i = 0;
    foreach ($devs as $devid){
      $nextDatapoint['device'] = $devid;
      $i++;
      if ($i == count($devs)){
        # pre, factor, post:  apply only after aggregation!
        #                  (only after the last of several
        #					datapoints to aggregate)
        $nextDatapoint['pre'] = $preAggregated;
        $nextDatapoint['fact'] = $factAggregated;
        $nextDatapoint['post'] = $postAggregated;
      }
      $datapoints[] = $nextDatapoint;
      $nextDatapoint['aggregate'] = "SUM"; // aggregate function
    }
  } else {
    $datapoints[] = $nextDatapoint;
  }
}

########################################################################
#	insert influx tags  'd','iid'
#			to each $datapoint (associative array) in
#			$datapoints array
########################################################################
$datapoints =
//insert_InfluxTags($verbindung, $datapoints, $showQueries);
insert_InfluxTags($datapoints, $showQueries);
if ($datapoints == Null) {
  print ("Error: count datapoints:".count($datapoints)." count inflTagSets:".count($inflTagsets)."\n");
  print ("One or several device ids are unknown in mysql `_field`: \n" );
}

// ================================
//	$datapoints
//		 is now complete.
//  [
//		[
//		pre			Pre-Offset
//		fact		Factor
//		post		Post-Offset
//		title		output column title
//		unit		output unit string
//		f    		mysql `field`  and Influx "f" tag (tables: _devicedatavalue, _field) example: "EM_Accord_Act_Pow"
//		device	mysql site-unique `device` ID     (tables: _devicedatavalue, _field) example: 1945.
//					mysql 'device' column needs to be translated to both influx tags 'd' and 'iid'.
//		d			influx tag (device name) example: "B10_INV1_DC4"
//		iid			influx tag (igate id) example: '3094'
//		aggregate	if '' (empty or empty string), then this datapoint makes exactly one resulting table column.
//					if 'sum', then this datapoint must be aggregated  SUMmed with the previous datapoint to one column.
//		]
//	]
// ================================

# ####################################################################
# build  $inflTagsetsUnique
# ####################################################################
$inflTagsetsUnique = array();
foreach ($datapoints as $datapoint){
  # By using {datapoint} as key of an associative array,
  # this array will contain only unique tagsets.
  $inflTagsetsUnique[ sprintf('%04d',$datapoint['device']) . $datapoint['f'] ] =
  array(
    "iid"=>$datapoint['iid'],
    "d"  =>$datapoint['d'],
    "f"  =>$datapoint['f']
  );
}

# ####################################################################
# arrays overview
# ####################################################################
# $args
#		numeric indexed array of output columns
#		- a column can contain multiple datapoints ('combined column')!
#		- datapoints not unique
#		- arbitrary column order
#
# $datapoints
#		numeric indexed array of datapoints
#		- column order
#		- 'combined columns' from $args expanded to several datapoints
#		- not unique
#
# $inflTagsetsUnique
#		from $datapoints
# 		associative array of tag sets (for Influx)
#		- the sole purpose of explicit keys is to have unique values.
# 		- unique (omitted duplicate datapoints)
#
# $series
#		Influx Query result set
#		column orientated

if ($showQueries){
  echo ("<p>args:<br>\n");
  # $args=	"0,1,0,8240,Activepower_Total,Active%20Power,15,kW,4;"
  echo ("[0]=preOffset, [1]=factor, [2]=postOffset ,[3]=deviceid ,[4]=field ,[5]=title, [6], [7]=unit, [8]\n");
  print_r($args);
  echo "\n</p>\n";

  echo "<p>datapoints<br>\n";
  print_r($datapoints);
  echo "\n</p>\n";

  echo "<p>inflTagsetsUnique<br>\n";
  print_r($inflTagsetsUnique);
  echo "\n</p>\n";
}

# ###########################################################
# influx query  based on tagsets {d, iid, f}
#   from which Influx Database name?     --> getInfluxDBName()
#   assume that all desired igates share the same Influx database.
# ###########################################################
$firstiid = reset($inflTagsetsUnique);
$firstiid = $firstiid['iid'];
$tmpseries   =
inflQuery_tagset( $stamp,
$endstamp,
$inflTagsetsUnique,
"MEAN(value)",
$interval,
array('iid','d','f'),
null,
$showQueries,
getInfluxDBName($firstiid)
);

$series = array();

$id = 0;
foreach ($tmpseries as $serie){
  $found=false;
  for ($i = 0; $i < sizeof($series); $i++){
    if ($series[$i]["tags"]["d"] == $serie["tags"]["d"]&&$series[$i]["tags"]["iid"] == $serie["tags"]["iid"] && $series[$i]["tags"]["f"] == $serie["tags"]["f"]){
      $found = true;
      foreach ( $serie["values"] as $value ){
        if ($value[1]!=""){
          $series[$i]["values"][]=$value;
        }
      }
    }
  }
  if (!$found){
    $tmp = array();
    $tmp["name"]=$serie["name"];
    $tmp["tags"]["d"] = $serie["tags"]["d"];
    $tmp["tags"]["iid"] = $serie["tags"]["iid"];
    $tmp["tags"]["f"] = $serie["tags"]["f"];
    $tmp["columns"][] = "time";
    $tmp["columns"][] = "mean";
    foreach ( $serie["values"] as $value ){
      if ($value[1]!=""){
        $tmp["values"][]=$value;
      }
    }
    $series[]=$tmp;

  }
}
//	from  ../connection/queriesInflux2.php

# ######################################################
# $result : arrays for lines of the result table
# ######################################################
# for each datapoint of $datapoints:
# 	  pull values from $series (influx query result as columns)
# 	  store values in 2-dimensional array (line-based arrays)
# 				      $resultlines[time][column]
# ######################################################
$resulttitles = array("Timestamp");
$resultunits = array("DD-MM-YYYY HH:mm");
$resultlines = array();
$col = 1;
foreach ($datapoints as $datapoint) {
  //	get_seriesIndex()  from  ../connection/queriesInflux2.php
  $sindex = get_seriesIndex($series, array('iid' => $datapoint['iid'],
  'd'   => $datapoint['d'],
  'f'   => $datapoint['f']
));
if ( empty($datapoint['aggregate']) ){
  $resulttitles[] = $datapoint['title'];
  $resultunits[]  = $datapoint['unit'];
  if ($sindex < 0) {
    # empty column! no result from InfluxDB
    #               solution: implode_keepEmptyCol()
  } else {
    foreach($series[$sindex]['values'] as $tsvalue){
      # apply pre, factor, post
      #     note: On the first one of several aggregated datapoints,
      #	        pre,post,factor have been set to 0,1,0
      #					(section 'aggregated datapoints'),
      #			so that pre,post,factor will only be applied
      #			after datapoints have been aggregated.
      $resultlines[$tsvalue[0]][$col] =
      (	$tsvalue[1]
      + $datapoint['pre']  )
      * $datapoint['fact']
      + $datapoint['post'];
    }
  }
} else {
  $col--;
  if ($sindex < 0) {
    # leave value unchanged
  } else if($datapoint['aggregate'] == 'SUM'){
    foreach($series[$sindex]['values'] as $tsvalue){
      $resultlines[$tsvalue[0]][$col] += $tsvalue[1];
      # apply pre, factor, post
      #			only after datapoints have been aggregated.
      $resultlines[$tsvalue[0]][$col] =
      (	$resultlines[$tsvalue[0]][$col]
      + $datapoint['pre']  )
      * $datapoint['fact']
      + $datapoint['post'];
    }
  } else {
    # other aggregate functions than 'SUM'
  }

}
$col++;
}

if ($showQueries){
  echo "resulttitles:\n";
  print_r($resulttitles);

  echo "\nresultunits:\n";
  print_r($resultunits);

  echo "\nresultlines:\n";
  print_r($resultlines);
}

function implode_keepEmptyCol($glue,$a){
  # like implode, but
  # adds additional glue for missing index key
  #
  # assume $a is sorted
  # assume $a has numeric keys
  # assume $a first index should be 1
  $keyPrev = 0;
  foreach ($a as $key => $val){
    while ( ++$keyPrev < $key){
      # missing index $key; insert $key=>val
      $a[$keyPrev] = "";
    }
  }
  ksort($a);
  return implode($glue,$a);
}

# ######################################################
# output  		as tab separated text
#         		an array >>  a line of the table
#				apply timezone offset
# ######################################################
print (implode_keepEmptyCol("\t",$resulttitles) . "\r\n");
print (implode_keepEmptyCol("\t",$resultunits) . "\r\n");
ksort($resultlines);
foreach($resultlines as $ts => $resultline){
  // $offset:  Indian Standard Time
  #$resultline[0] = date('d-m-Y H:i', $ts + $offset);
  print (date('d-m-Y H:i',$ts + $offset) . "\t" .
  implode_keepEmptyCol("\t",$resultline) . "\r\n");
}

return;
?>
