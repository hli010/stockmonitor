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

<table class="example table-autosort table-autofilter table-autopage:1300 table-stripeclass:alternate table-page-number:t1page table-page-count:t1pages table-filtered-rowcount:t1filtercount table-rowcount:t1allcount" style="margin:0"><thead> <tr>

</tr>

</thead> <tbody>

</tbody>
<tr>
<td>

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
	"><b> "+elements[3]+"%</b></font>) "+num+"  "+total+"<br>"); 

var elements=hq_str_s_sz399001.split(",");

var color='red';
if (elements[3] < 0) {
   color = 'green';
}

var num = elements[4] / 100;
var total = elements[5] /10000;

document.write(elements[0]+" : "+elements[1]+" (<font color="+color+
	"><b> "+elements[3]+"%</b></font>) "+num+"  "+total+"<br>"); 


document.write("<a href=http://quote.eastmoney.com/gzqh/IC1507.html> IC1507 </a>");
document.write("<img src=\"http://image.sinajs.cn/newchart/min/n/s_sh000001.gif\" />");
</script>
</td>
<td>
<script type="text/javascript">
document.write("<img src=\"http://image.sinajs.cn/newchart/daily/n/sh000001.gif\"/>");
</script>

</td>
</tr>
</table>

<hr>



<table cellpadding="0" cellspacing="0" class="example table-autosort table-autofilter table-autopage:1300 table-stripeclass:alternate table-page-number:t1page table-page-count:t1pages table-filtered-rowcount:t1filtercount table-rowcount:t1allcount" style="margin:0"><thead> <tr>
<th title="device ID" class="table-sortable:default table-sortable">  Name  </th>
<th title="device ID" class="table-sortable:default table-sortable">  当前价格  </th>
<th title="error code" class="table-sortable:default table-sortable"> Real K </th>
<th title="error code" class="table-sortable:default table-sortable"> Day K </th>

</tr>

</thead> <tbody>

</tbody>

<?php

$stock_file =  $_GET['list']  ;//'stock.list';  
if (strcmp($stock_file, "") == 0) {
    $stock_file = 'stock.list';
}

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
	} else { // start with 30
	    $prefix = "sz";
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

//QQ stock information
foreach($stock_name_list as $stock) {
	echo "<script type=\"text/javascript\" src=\"http://qt.gtimg.cn/q=$stock\" charset=\"gb2312\">
</script>";
}

$no = 0;
foreach ($stock_name_list as $stock){
        $stname = substr($stock, 2); 
        echo "$stname";
	echo "
<tr class=\"\">
<td> <a href=http://quote.eastmoney.com/$stock.html> $no </a> <br>
<script type=\"text/javascript\">
var s_ele = hq_str_s_$stock.split(\",\");
var elements=hq_str_$stock.split(\",\");
document.write(\"<a href=http://stockpage.10jqka.com.cn/$stname/>\"+elements[0]+\"</a><br>\");
document.write(\"<a href=http://gu.qq.com/$stname/>\"+\"($stname)\"+\"</a></td>\");
var color=\"red\";
if (s_ele[3] < 0) {
   color = \"green\";
}

var stock_value_ele = v_$stock.split(\"~\");


document.write(\"<td><table cellpadding=\\\"0\\\" cellspacing=\\\"0\\\" class=\\\"example table-autosort table-autofilter table-autopage:1300 table-stripeclass:alternate table-page-number:t1page table-page-count:t1pages table-filtered-rowcount:t1filtercount table-rowcount:t1allcount\\\" style=\\\"margin:0\\\">\");
document.write(\"<tr><td nowrap>今日开盘 </td><td>  \" +elements[1] +\"</td>\");
document.write(\"<td nowrap>昨日收盘 </td><td>  \" +elements[2] +\"</td><tr>\");
document.write(\"<tr><td>当前价格 </td><td colspan=3> <font color=\"+color+\"> \" +elements[3] 
	+\"(\"
	+s_ele[1]
	+\",\"
	+s_ele[2]
	+\",\"
	+s_ele[3]+\"%)\" 
	+\"</font> </td><tr>\");
document.write(\"<tr><td>今日最高 </td><td>  \" +elements[4] +\"</td>\");
document.write(\"<td>今日最低 </td><td>  \" +elements[5] +\"</td><tr>\");
document.write(\"<tr><td> 振幅   </td><td>  \" +stock_value_ele[43] +\"%</td>\");
document.write(\"<td> 换手率   </td><td>  \" +stock_value_ele[38] +\"%</td><tr>\");
document.write(\"<tr><td>市盈率   </td><td>  \" +stock_value_ele[39] +\"</td>\");
document.write(\"<td>总市值   </td><td>  \" +stock_value_ele[45] +\"</td><tr>\");
document.write(\"<tr><td>市净率   </td><td>  \" +stock_value_ele[46] +\"</td>\");
document.write(\"<td>流通市值   </td><td>  \" +stock_value_ele[44] +\"</td><tr>\");
document.write(\"<tr><td>买一 </td><td>  \" +elements[6] +\"</td>\");
document.write(\"<td>卖一  </td><td>  \" +elements[7] +\"</td><tr>\");
var num = Math.round(elements[8] / 100);
document.write(\"<tr><td>成交数  </td><td>  \" +num +\"</td>\");
var total = Math.round(elements[9] / 10000); 
document.write(\"<td>成交金额  </td><td>  \" +total +\"</td><tr>\");
document.write(\"<tr><td colspan=4> \"+elements[30]+\"     \" +elements[31] +\"</td><tr>\");

document.write(\"<tr>\");
document.write(\" <td>\"+elements[11] +\"</td><td>  \" +Math.round(elements[10]/100) +\"</td> \");
document.write(\" <td>\"+elements[21] +\"</td><td>  \" +Math.round(elements[20]/100) +\"</td><tr>\");
document.write(\"</tr>\");

document.write(\"<tr>\");
document.write(\" <td>\"+elements[13] +\"</td><td>  \" +Math.round(elements[12]/100) +\"</td> \");
document.write(\" <td>\"+elements[23] +\"</td><td>  \" +Math.round(elements[22]/100) +\"</td><tr>\");
document.write(\"</tr>\");

document.write(\"<tr>\");
document.write(\" <td>\"+elements[15] +\"</td><td>  \" +Math.round(elements[14]/100) +\"</td> \");
document.write(\" <td>\"+elements[25] +\"</td><td>  \" +Math.round(elements[24]/100) +\"</td><tr>\");
document.write(\"</tr>\");

document.write(\"<tr>\");
document.write(\" <td>\"+elements[17] +\"</td><td>  \" +Math.round(elements[16]/100) +\"</td> \");
document.write(\" <td>\"+elements[27] +\"</td><td>  \" +Math.round(elements[26]/100) +\"</td><tr>\");
document.write(\"</tr>\");

document.write(\"<tr>\");
document.write(\" <td>\"+elements[19] +\"</td><td>  \" +Math.round(elements[18]/100) +\"</td> \");
document.write(\" <td>\"+elements[29] +\"</td><td>  \" +Math.round(elements[28]/100) +\"</td><tr>\");
document.write(\"</tr>\");

document.write(\"</table></td>\");

document.write(\"<td><img src=\\\"http://image.sinajs.cn/newchart/min/n/$stock.gif\\\" /></td>\");
document.write(\"<td><img src=\\\"http://image.sinajs.cn/newchart/daily/n/$stock.gif\\\" /></td>\");



</script>
</tr>
";
   $no = $no +1; 

}



?>




</table>


</body>


</html>


