<?php
include_once "db.php";

/**
 * 資料表的欄位名稱=>資料內容
 */

//依據表單傳過來的問卷主題欄位subject建立一個資料陣列
$topic=['topic'=>$_POST['topic']];
$sub=['subtitle'=>$_POST['subtitle']];
$img=['img'=>$_POST['img']];


// if(empty($img)){
//     insert('topics',rand("../img"));
// }else{

// }
// dd($topic);

//使用insert自訂函式來新增主題
insert('topics',all($topic,$sub));


// // //新增完畢，導向回後台首頁
// to("../back/index.php");

// ?>