<?php
$data = array(
	"id" => 1,
	"title" => "内网新闻",
	"writer" => "小名",
	"date" => 1455808822088,
	"content" => "内网新闻内容"
);
$result = array(
	"errno" => 0,
	"data" => $data
);
echo json_encode($result);