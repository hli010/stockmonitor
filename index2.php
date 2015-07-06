<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" >
<link rel="stylesheet" type="text/css" href="./main.css" media="all"> 
<script type="text/javascript" src="./main.js"></script>
<script type="text/javascript" src="./jquery.js"></script>
<script type="text/javascript" src="./table.js"></script>
<link rel="stylesheet" type="text/css" href="./table.css" media="all">
</head>
<body>

<script type="text/javascript" src="http://hq.sinajs.cn/list=s_sh000001,s_sz399001" charset="gb2312"> </script>
<script type="text/javascript">
var elements=hq_str_s_sh000001.split(",");

var color='red';
if (elements[3] < 0) {
   color = 'green';
}

var num = elements[4] / 100;
var total = elements[5] /10000;

document.write(elements[0]+" : "+elements[1]+" (<font color="+color+
	"><b> "+elements[3]+"%</b></font>) "+num+"  "+total+"<p>"); 

var elements=hq_str_s_sz399001.split(",");

var color='red';
if (elements[3] < 0) {
   color = 'green';
}

var num = elements[4] / 100;
var total = elements[5] /10000;

document.write(elements[0]+" : "+elements[1]+" (<font color="+color+
	"><b> "+elements[3]+"%</b></font>) "+num+"  "+total); 


document.write("<img src=\"http://image.sinajs.cn/newchart/min/n/s_sh000001.gif\" />");
document.write("<img src=\"http://image.sinajs.cn/newchart/daily/n/sh000001.gif\"/>");
</script>
<hr>



<table class="example table-autosort table-autofilter table-autopage:1300 table-stripeclass:alternate table-page-number:t1page table-page-count:t1pages table-filtered-rowcount:t1filtercount table-rowcount:t1allcount" style="margin:0 auto"><thead> <tr>
<th class="table-sortable:numeric table-sortable table-sorted-asc" > No </th>
<th title="device ID" class="table-sortable:default table-sortable">  Name  </th>
<th title="device ID" class="table-sortable:default table-sortable">  当前价格  </th>
<th title="error code" class="table-sortable:default table-sortable"> Real K </th>
<th title="error code" class="table-sortable:default table-sortable"> Day K </th>
<th title="error code" class="table-sortable:default table-sortable"> 买 </th>
<th title="error code" class="table-sortable:default table-sortable"> 卖 </th>
<th title="error code" class="table-sortable:default table-sortable"> 日期 </th>
<th title="error code" class="table-sortable:default table-sortable"> 时间 </th>
</tr>

</thead> <tbody>

</tbody>

<?php

 $stock_file = 'stock.list';  
 $stock_list = file($stock_file); 
 //print_r($stock_list);

 $stock_name_list = array();
 $stock_s_list = array();

 $i = 0;
 foreach ($stock_list as $stock) {
        $first2ch = substr($stock, 0, 2); 
        if ($first2ch == "60") {
	    $prefix = "sh";
	} elseif ($first2ch == "00") {
	    $prefix = "sz";
	} else {
	    $prefix = "";
	}

	$stock_name_list[] = trim("$prefix$stock");
	$stock_s_list[] = trim("s_$prefix$stock");
        //echo "$stock"; 
}

$st_list = ""; 
foreach ($stock_name_list as $stock){
	$st_list .= "$stock,";
}

$st_s_list = "";
foreach ($stock_s_list as $stock) {
	$st_s_list .= "$stock,";
}

//echo "8888$st_list";
$st_list = rtrim($st_list, ",");
$st_s_list = rtrim($st_s_list, ",");
//echo $st_list;



echo "<script type=\"text/javascript\" src=\"http://hq.sinajs.cn/list=$st_list\" charset=\"gb2312\">
</script>";

echo "<script type=\"text/javascript\" src=\"http://hq.sinajs.cn/list=$st_s_list\" charset=\"gb2312\">
</script>";

$no = 0;
foreach ($stock_name_list as $stock){
        $stname = substr($stock, 2); 
        echo "$stname";
	echo "
<tr class=\"\"><td>
$no</td>
<script type=\"text/javascript\">
var s_ele = hq_str_s_$stock.split(\",\");
var elements=hq_str_$stock.split(\",\");
document.write(\"<td><a href=http://stockpage.10jqka.com.cn/$stname/>\"+elements[0]+\"($stname)\"+\"</a></td>\");
var color='red';
if (s_ele[3] < 0) {
   color = 'green';
}


document.write(\"<td><table brorder=\\\"0\\\">\");
document.write(\"<tr><td width=\\\"100%\\\" nowrap>今日开盘价 </td><td>  \" +elements[1] +\"</td><tr>\");
document.write(\"<tr><td>昨日收盘价 </td><td>  \" +elements[2] +\"</td><tr>\");
document.write(\"<tr><td>当前价格 </td><td> <font color=\"+color+\"> \" +elements[4] 
	+\"(\"
	+s_ele[2]
	+\",\"
	+s_ele[3]+\"%)\" 
	+\"</font> </td><tr>\");
document.write(\"<tr><td>今日最高价 </td><td>  \" +elements[4] +\"</td><tr>\");
document.write(\"<tr><td>今日最低价 </td><td>  \" +elements[5] +\"</td><tr>\");
document.write(\"<tr><td>买一 </td><td>  \" +elements[6] +\"</td><tr>\");
document.write(\"<tr><td>卖一  </td><td>  \" +elements[7] +\"</td><tr>\");
var num = elements[8] / 100;
document.write(\"<tr><td>成交的股票数  </td><td>  \" +num +\"</td><tr>\");
var total = elements[9] / 10000; 
document.write(\"<tr><td>成交金额  </td><td>  \" +total +\"</td><tr>\");
document.write(\"</table></td>\");

document.write(\"<td><img src=\\\"http://image.sinajs.cn/newchart/min/n/$stock.gif\\\" /></td>\");
document.write(\"<td><img src=\\\"http://image.sinajs.cn/newchart/daily/n/$stock.gif\\\" /></td>\");

document.write(\"<td><table brorder=\\\"0\\\">\");
document.write(\"<tr><td>\"+elements[11] +\"</td><td>  \" +elements[10] +\"</td><tr>\");
document.write(\"<tr><td>\"+elements[13] +\"</td><td>  \" +elements[12] +\"</td><tr>\");
document.write(\"<tr><td>\"+elements[15] +\"</td><td>  \" +elements[14] +\"</td><tr>\");
document.write(\"<tr><td>\"+elements[17] +\"</td><td>  \" +elements[16] +\"</td><tr>\");
document.write(\"<tr><td>\"+elements[19] +\"</td><td>  \" +elements[18] +\"</td><tr>\");
document.write(\"</table></td>\");

document.write(\"<td><table>\");
document.write(\"<tr><td>\"+elements[21] +\"</td><td>  \" +elements[20] +\"</td><tr>\");
document.write(\"<tr><td>\"+elements[23] +\"</td><td>  \" +elements[22] +\"</td><tr>\");
document.write(\"<tr><td>\"+elements[25] +\"</td><td>  \" +elements[24] +\"</td><tr>\");
document.write(\"<tr><td>\"+elements[27] +\"</td><td>  \" +elements[26] +\"</td><tr>\");
document.write(\"<tr><td>\"+elements[29] +\"</td><td>  \" +elements[28] +\"</td><tr>\");
document.write(\"</table></td>\");

document.write(\"<td>\"+elements[30]+\"</td>\");
document.write(\"<td>\"+elements[31]+\"</td>\");
</script>
</tr>
";
   $no = $no +1; 
/*
document.write(\"<li aligh=left>\"+elements[13] +\"  \" +elements[12] +\"</li>\");
document.write(\"<li align=left>\"+elements[15] +\"  \" +elements[14] +\"</li>\");
document.write(\"<li align=left>\"+elements[17] +\"  \" +elements[16] +\"</li>\");
document.write(\"<li align=left>\"+elements[19] +\"  \" +elements[18] +\"</li>\");
*/

}



?>




</table>


</body>


</html>


