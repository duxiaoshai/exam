<?php
include 'db.php';
$data=$_REQUEST['data'];
$str='(';
for($i=0;$i<count($data);$i++){
    for($j=0;$j<count($data[$i]);$j++){
        $str.="'{$data[$i][$j]}',";
    }
    $str.="'".md5(12345)."'";
    $str.='),(';
}
$str=substr($str,0,-2);
$sql="INSERT INTO managestudent (uname,msex,mnum,cid,sid,did,upass) VALUES $str";
$mysql->query($sql);
if($mysql->affected_rows){
    echo 'ok';
}else{
    echo 'error';
}