<?php

$ip1 = $_SERVER["HTTP_CF_CONNECTING_IP"]; // real visitor ip address

$ip2 = $_SERVER["HTTP_CF_IPCOUNTRY"]; // country of visitor

$ip3 = $_SERVER["HTTP_CF_RAY"]; // ID for working with Cloudflare Support

$ip4 = $_SERVER["HTTP_CF_VISITOR"]; // this can help you know if its http or https

$ip5 = $_SERVER["REMOTE_ADDR"]; // this is the commom ip connected directly to the server, in this case from cloudflare

$ip6 = $_SERVER["HTTP_X_FORWARDED_FOR"]; // real visitor IP sended by cloudflare


echo "<b>CF-CONNECTING</b>: ".$ip1."<br>";
echo "<b>CF-IPCOUNTRY</b>: ".$ip2."<br>";
echo "<b>CF-RAY</b>: ".$ip3."<br>";
echo "<b>CF-VISITOR</b>: ".$ip4."<br>";
echo "<b>REMOTE-ADDR</b>: ".$ip5."<br>";
echo "<b>HTTP-X-FORWARDED</b>: ".$ip6."<br>";
