<?php
session_start();
if(isset($_POST['submit'])){
$packetType = $_POST['packet'];
if($packetType == "ARP")
{
	$arpType = $_POST['arp-fields'];
	if($arpType == "Select")
	{
		include('file.html');
		echo '<script>alert("Try another field")</script>';
	}
	
	else if($arpType == "TimeStamp")
	{
	echo "<table border = '1'>";
	echo "<tr>
		<th> TimeStamp </th>
		</tr>";
	$file = fopen("ARP_TimeStamp" , "r");
	while(! feof($file)) {
	$line = fgets($file);
	echo "<tr><td>$line</td></tr>";
	}
	fclose($file);
	}
	
	else if($arpType == "SourceIP")
	{
	echo "<table border = '1'>";
	echo "<tr>
		<th> ARP Source IP</th>
		</tr>";
	$file = fopen("ARP_SrcIP" , "r");
	while(! feof($file)) {
	$line = fgets($file);
	echo "<tr><td>$line</td></tr>";
	}
	fclose($file);
	}
	
	else if($arpType == "DestinationIP")
	{
	echo "<table border = '1'>";
	echo "<tr>
		<th> ARP Destination IP</th>
		</tr>";
	$file = fopen("ARP_DestIP" , "r");
	while(! feof($file)) {
	$line = fgets($file);
	echo "<tr><td>$line</td></tr>";
	}
	fclose($file);
	}
	
	else if($arpType == "SourceMac")
	{
	echo "<table border = '1'>";
	echo "<tr>
		<th> ARP SourceMac IP</th>
		</tr>";
	$file = fopen("ARP_SrcMAC" , "r");
	while(! feof($file)) {
	$line = fgets($file);
	echo "<tr><td>$line</td></tr>";
	}
	fclose($file);
	}
	
	else if($arpType == "DestinationMac")
	{
	echo "<table border = '1'>";
	echo "<tr>
		<th> ARP DestinationMac IP</th>
		</tr>";
	$file = fopen("ARP_DestMac" , "r");
	while(! feof($file)) {
	$line = fgets($file);
	echo "<tr><td>$line</td></tr>";
	}
	fclose($file);
	}
	
	else if($arpType == "ProtocolLength")
	{
	echo "<table border = '1'>";
	echo "<tr>
		<th> ARP ProtocolLength IP</th>
		</tr>";
	$file = fopen("ARP_ProLength" , "r");
	while(! feof($file)) {
	$line = fgets($file);
	echo "<tr><td>$line</td></tr>";
	}
	fclose($file);
	}
	
	else if($arpType == "All")
	{
	echo "<table border='1'>";
	echo "<tr>
		<th>TimeStamp</th>
		<th>Source IP</th>
		<th>Destination IP</th>
		<th>Source MAC</th>
		<th>Destination MAC</th>
		<th>Protocol Length</th>
		</tr>";
	$file1 = fopen("ARP_TimeStamp" , "r");
	$file2 = fopen("ARP_SrcIP" , "r");	
	$file3 = fopen("ARP_DestIP" , "r");
	$file4 = fopen("ARP_SrcMAC" , "r");
	$file5 = fopen("ARP_DestMac" , "r");
	$file6 = fopen("ARP_ProLength" , "r");
	while(! (feof($file1) && ($file2) && ($file3) && ($file4) && ($file5) && ($file6))) {
	$line1 = fgets($file1);
	$line2 = fgets($file2);
	$line3 = fgets($file3);
	$line4 = fgets($file4);
	$line5 = fgets($file5);
	$line6 = fgets($file6);
	echo "<tr>
		<td>$line1</td>
		<td>$line2</td>
		<td>$line3</td>
		<td>$line4</td>
		<td>$line5</td>
		<td>$line6</td>
		</tr>";
	#echo $line;
	#echo "<br>";
	}
	echo "</table>";
	fclose($file1);
	fclose($file2);
	fclose($file3);
	fclose($file4);
	fclose($file5);
	fclose($file6);
	}
}

# TCP Protocol	

else if($packetType == "TCP")
{
	$tcpType = $_POST['tcp-fields'];
	if($tcpType == "Select")
	{
		include('file.html');
		echo '<script>alert("Try another field")</script>';
	}
	
	else if($tcpType == "TimeStamp")
	{
	echo "<table border = '1'>";
	echo "<tr>
		<th> TimeStamp </th>
		</tr>";
	$file = fopen("TCP_timestamp" , "r");
	while(! feof($file)) {
	$line = fgets($file);
	echo "<tr><td>$line</td></tr>";
	}
	fclose($file);
	}
	
	else if($tcpType == "SourceIP")
	{
	echo "<table border = '1'>";
	echo "<tr>
		<th> TCP Source IP</th>
		</tr>";
	$file = fopen("TCP_SrcIP" , "r");
	while(! feof($file)) {
	$line = fgets($file);
	echo "<tr><td>$line</td></tr>";
	}	
	fclose($file);
	}
	
	else if($tcpType == "SourcePort")
	{
	echo "<table border = '1'>";
	echo "<tr>
		<th> TCP Source Port</th>
		</tr>";
	$file = fopen("TCP_SrcPORT" , "r");
	while(! feof($file)) {
	$line = fgets($file);
	echo "<tr><td>$line</td></tr>";
	}	
	fclose($file);
	}
	
	else if($tcpType == "DestinationIP")
	{
	echo "<table border = '1'>";
	echo "<tr>
		<th> TCP Destination IP</th>
		</tr>";
	$file = fopen("TCP_DstIP" , "r");
	while(! feof($file)) {
	$line = fgets($file);
	echo "<tr><td>$line</td></tr>";
	}
	fclose($file);
	}
	
	else if($tcpType == "DestinationPort")
	{
	echo "<table border = '1'>";
	echo "<tr>
		<th> TCP Destination Port</th>
		</tr>";
	$file = fopen("TCP_DstPORT" , "r");
	while(! feof($file)) {
	$line = fgets($file);
	echo "<tr><td>$line</td></tr>";
	}	
	fclose($file);
	}
	
	else if($tcpType == "SourceMac")
	{
	echo "<table border = '1'>";
	echo "<tr>
		<th> TCP SourceMac IP</th>
		</tr>";
	$file = fopen("TCP_SrcMac" , "r");
	while(! feof($file)) {
	$line = fgets($file);
	echo "<tr><td>$line</td></tr>";
	}
	fclose($file);
	}
	
	else if($tcpType == "DestinationMac")
	{
	echo "<table border = '1'>";
	echo "<tr>
		<th> TCP DestinationMac IP</th>
		</tr>";
	$file = fopen("TCP_destMAC" , "r");
	while(! feof($file)) {
	$line = fgets($file);
	echo "<tr><td>$line</td></tr>";
	}
	fclose($file);
	}
	
	else if($tcpType == "ProtocolLength")
	{
	echo "<table border = '1'>";
	echo "<tr>
		<th> TCP ProtocolLength IP</th>
		</tr>";
	$file = fopen("TCP_ProLength" , "r");
	while(! feof($file)) {
	$line = fgets($file);
	echo "<tr><td>$line</td></tr>";
	}
	fclose($file);
	}
	
	else if($tcpType == "All")
	{
	echo "<table border='1'>";
	echo "<tr>
		<th>TimeStamp</th>
		<th>Source IP</th>
		<th>Source Port</th>
		<th>Destination IP</th>
		<th>Destination Port</th>
		<th>Source MAC</th>
		<th>Destination MAC</th>
		<th>Protocol Length</th>
		</tr>";
	$file1 = fopen("TCP_timestamp" , "r");
	$file2 = fopen("TCP_SrcIP" , "r");
	$file3 = fopen("TCP_SrcPORT" , "r");	
	$file4 = fopen("TCP_DstIP" , "r");
	$file5 = fopen("TCP_DstPORT" , "r");
	$file6 = fopen("TCP_SrcMac" , "r");
	$file7 = fopen("TCP_destMAC" , "r");
	$file8 = fopen("TCP_ProLength" , "r");
	while(! (feof($file1) && ($file2) && ($file3) && ($file4) && ($file5) && ($file6) && ($file7) && ($file8))) {
	$line1 = fgets($file1);
	$line2 = fgets($file2);
	$line3 = fgets($file3);
	$line4 = fgets($file4);
	$line5 = fgets($file5);
	$line6 = fgets($file6);
	$line7 = fgets($file7);
	$line8 = fgets($file8);
	echo "<tr>
		<td>$line1</td>
		<td>$line2</td>
		<td>$line3</td>
		<td>$line4</td>
		<td>$line5</td>
		<td>$line6</td>
		<td>$line7</td>
		<td>$line8</td>
		</tr>";
	#echo $line;
	#echo "<br>";
	}
	echo "</table>";
	fclose($file1);
	fclose($file2);
	fclose($file3);
	fclose($file4);
	fclose($file5);
	fclose($file6);
	fclose($file7);
	fclose($file8);
	}
}	


# UDP Protocol

else if($packetType == "UDP")
{
	$udpType = $_POST['udp-fields'];
	if($udpType == "Select")
	{
		include('file.html');
		echo '<script>alert("Try another field")</script>';
	}
	
	else if($udpType == "TimeStamp")
	{
	echo "<table border = '1'>";
	echo "<tr>
		<th> TimeStamp </th>
		</tr>";
	$file = fopen("UDP_timestamp" , "r");
	while(! feof($file)) {
	$line = fgets($file);
	echo "<tr><td>$line</td></tr>";
	}
	fclose($file);
	}
	
	else if($udpType == "SourceIP")
	{
	echo "<table border = '1'>";
	echo "<tr>
		<th> UDP Source IP</th>
		</tr>";
	$file = fopen("UDP_srcIP" , "r");
	while(! feof($file)) {
	$line = fgets($file);
	echo "<tr><td>$line</td></tr>";
	}	
	fclose($file);
	}
	
	else if($udpType == "SourcePort")
	{
	echo "<table border = '1'>";
	echo "<tr>
		<th> UDP Source Port</th>
		</tr>";
	$file = fopen("UDP_srcPORT" , "r");
	while(! feof($file)) {
	$line = fgets($file);
	echo "<tr><td>$line</td></tr>";
	}	
	fclose($file);
	}
	
	else if($udpType == "DestinationIP")
	{
	echo "<table border = '1'>";
	echo "<tr>
		<th> UDP Destination IP</th>
		</tr>";
	$file = fopen("UDP_dstIP" , "r");
	while(! feof($file)) {
	$line = fgets($file);
	echo "<tr><td>$line</td></tr>";
	}
	fclose($file);
	}
	
	else if($udpType == "DestinationPort")
	{
	echo "<table border = '1'>";
	echo "<tr>
		<th> UDP Destination Port</th>
		</tr>";
	
	$file = fopen("UDP_dstPORT" , "r");
	while(! feof($file)) {
	$line = fgets($file);
	echo "<tr><td>$line</td></tr>";
	}	
	fclose($file);
	}
	
	else if($udpType == "SourceMac")
	{
	echo "<table border = '1'>";
	echo "<tr>
		<th> UDP SourceMac IP</th>
		</tr>";
	$file = fopen("UDP_SrcMac" , "r");
	while(! feof($file)) {
	$line = fgets($file);
	echo "<tr><td>$line</td></tr>";
	}
	fclose($file);
	}
	
	else if($udpType == "DestinationMac")
	{
	echo "<table border = '1'>";
	echo "<tr>
		<th> UDP DestinationMac IP</th>
		</tr>";
	$file = fopen("UDP_destMAC" , "r");
	while(! feof($file)) {
	$line = fgets($file);
	echo "<tr><td>$line</td></tr>";
	}
	fclose($file);
	}
	
	else if($udpType == "ProtocolLength")
	{
	echo "<table border = '1'>";
	echo "<tr>
		<th> UDP ProtocolLength IP</th>
		</tr>";
	$file = fopen("UDP_ProLength" , "r");
	while(! feof($file)) {
	$line = fgets($file);
	echo "<tr><td>$line</td></tr>";
	}
	fclose($file);
	}
	
	else if($udpType == "All")
	{
	echo "<table border='1'>";
	echo "<tr>
		<th>TimeStamp</th>
		<th>Source IP</th>
		<th>Source Port</th>
		<th>Destination IP</th>
		<th>Destination Port</th>
		<th>Source MAC</th>
		<th>Destination MAC</th>
		<th>Protocol Length</th>
		</tr>";
	$file1 = fopen("UDP_timestamp" , "r");
	$file2 = fopen("UDP_srcIP" , "r");
	$file3 = fopen("UDP_srcPORT" , "r");	
	$file4 = fopen("UDP_dstIP" , "r");
	$file5 = fopen("UDP_dstPORT" , "r");
	$file6 = fopen("UDP_SrcMac" , "r");
	$file7 = fopen("UDP_destMAC" , "r");
	$file8 = fopen("UDP_ProLength" , "r");
	while(! (feof($file1) && ($file2) && ($file3) && ($file4) && ($file5) && ($file6) && ($file7) && ($file8))) {
	$line1 = fgets($file1);
	$line2 = fgets($file2);
	$line3 = fgets($file3);
	$line4 = fgets($file4);
	$line5 = fgets($file5);
	$line6 = fgets($file6);
	$line7 = fgets($file7);
	$line8 = fgets($file8);
	echo "<tr>
		<td>$line1</td>
		<td>$line2</td>
		<td>$line3</td>
		<td>$line4</td>
		<td>$line5</td>
		<td>$line6</td>
		<td>$line7</td>
		<td>$line8</td>
		</tr>";
	#echo $line;
	#echo "<br>";
	}
	echo "</table>";
	fclose($file1);
	fclose($file2);
	fclose($file3);
	fclose($file4);
	fclose($file5);
	fclose($file6);
	fclose($file7);
	fclose($file8);
	}
}
}
?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
