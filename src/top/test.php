<?php
    include "TopSdk.php";
    date_default_timezone_set('Asia/Shanghai'); 
    $c = new TopClient;
	$c->appkey = "32468058";
	$c->secretKey = "5b9fe4dc58eb97613a5609bca3ac28d1";

    $req = new HttpdnsGetRequest;

    $req->putOtherTextParam("name","test");
    $req->putOtherTextParam("value",0);

    var_dump($c->execute($req));
?>