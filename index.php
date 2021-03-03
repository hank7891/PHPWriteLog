<?php
//設定目錄時間
$years = date('Y-m');

//設定路徑目錄資訊
$url  = './log/' . $years . '/log.txt';

//取出目錄路徑中目錄(不包括後面的檔案)
$dir_name = dirname($url);

//如果目錄不存在就建立
if(!file_exists($dir_name)) {
    mkdir(iconv("UTF-8", "GBK", $dir_name), 0777, true);
}

//開啟檔案資源通道，不存在則自動建立
$fp = fopen($url,"a");

// 寫入資訊
$msg = date('Y-m-d H:i:s');

//寫入檔案
fwrite($fp,var_export($msg,true)."\r\n");

//關閉資源通道
fclose($fp);