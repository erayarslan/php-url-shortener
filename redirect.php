<?php
/*
 *  author : Eray ARSLAN
 *  web    : erayarslan.com
 */

require_once('lib/f.php');

$f = new f();

$id = intval($_GET['id']);

if($id!=NULL && $id!="") {

    $result = $f->readLink($id);
    if($result!=false ) {

        header('Location: '.$result);
        exit(1);

    } else {

        echo "id not found.";
        exit(0);

    }

} else {

    echo "bad id.";
    exit(0);

}