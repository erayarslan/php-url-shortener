<?php
/*
 *  author : Eray ARSLAN
 *  web    : erayarslan.com
 */

require_once('lib/f.php');

$f = new f();

$url = $_POST['link'];

if(intval($f->getThisDayCountByIp($_SERVER['REMOTE_ADDR']))<100) {

    if($url!=NULL && $url!="" && filter_var($url, FILTER_VALIDATE_URL)) {

        echo $f->saveLink(array(
            "link"  => $url,
            "ip"    => $_SERVER['REMOTE_ADDR'],
            "date"  => date('d:m:Y',time())
        ));
        exit(1);

    } else {

        echo "no valid url.";
        exit(0);

    }

} else {

    echo "over limit.";
    exit(0);

}
