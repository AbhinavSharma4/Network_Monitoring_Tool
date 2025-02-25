#----ARP Protocol

grep -i "ARP" all_packets > ARP

#ARP Fields
cut -d ' ' -f 1 ARP > ARP_TimeStamp
cut -d ' ' -f 2 ARP > ARP_SrcMAC
cut -d ' ' -f 4 ARP | cut --complement -d ',' -f 2 > ARP_DestMac
awk '{if($11 == "who-has") {split($14,a,",");print a[1];} else print $11}' ARP > ARP_SrcIP
awk '{if($11 == "who-has") {print $12; prev = $(NF-2);} else {split(prev,a,","); print a[1];}}' ARP > ARP_DestIP
awk '{split($9,a,":"); print a[1]}' ARP > ARP_ProLength


#----TCP Protocol

grep -E "seq|ack|Flags|SYN|ACK|FIN|RST" all_packets > TCP

#__TCP Fields

cut -d ' ' -f 1 TCP > TCP_timestamp
cut -d ' ' -f 2 TCP > TCP_SrcMac
cut -d ' ' -f 4 TCP | cut --complement -d ',' -f 2 > TCP_destMAC
awk '{if($6=="IPV6") {split($10,s,"."); print s[1]} else {split($10,s,"."); print s[1] "." s[2] "." s[3] "." s[4]}}' TCP > TCP_SrcIP
awk '{if($6=="IPV6") {split($12,s,"."); print s[1]} else {split($12,s,"."); print s[1] "." s[2] "." s[3] "." s[4]}}' TCP > TCP_DstIP
awk '{if($6=="IPV6") {split($10,s,"."); print s[2]} else {split($10,s,"."); print s[5]}}' TCP > TCP_SrcPORT
awk '{if($6=="IPV6") {split($10,s,"."); split(s[2],a,":"); print a[1]} else {split($10,s,".");split(s[5],b,":"); print b[1]}}' TCP > TCP_DstPORT
awk '{split($9,a,":"); print a[1]}' TCP > TCP_ProLength

#----UDP Protocol

grep -E "\.(53|67|68|123|161|514|500|4500|33432)[ :]|UDP" all_packets > UDP

#UDP Fields
cut -d ' ' -f 1 UDP > UDP_timestamp
cut -d ' ' -f 2 UDP > UDP_SrcMac
cut -d ' ' -f 4 TCP | cut --complement -d ',' -f 2 > UDP_destMAC
awk '{split($10,s,"."); print s[1] "." s[2] "." s[3] "." s[4]}' UDP > UDP_srcIP
awk '{split($12,s,"."); print s[1] "." s[2] "." s[3] "." s[4]}' UDP > UDP_dstIP
awk '{split($10,s,"."); print s[5]}' UDP > UDP_srcPORT
awk '{split($12,a,"."); split(a[5],b,":"); print b[1]}' UDP > UDP_dstPORT
awk '{split($9,a,":"); print a[1]}' UDP > UDP_ProLength





















