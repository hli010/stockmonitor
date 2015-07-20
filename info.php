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
<td> 1 </td>
<td> 股指期货 </td>
<td>  
<a href=http://finance.sina.com.cn/futures/quotes/IC1507.shtml> IC1507 <a>
<a href=http://finance.sina.com.cn/futures/quotes/IF1507.shtml> IF1507 <a>
<a href=http://finance.sina.com.cn/futures/quotes/IH1507.shtml> IH1507 <a>
<script type="text/javascript" src="http://hq.sinajs.cn/list=CFF_RE_IF1507" charset="gb2312"> </script>
<script type="text/javascript">
var elements=hq_str_CFF_RE_IF1507.split(",");

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

<tr>
<td> 2 </td>
<td> 新闻动态 </td>
<td>  </td>
</tr>

<tr>
<td> 2 </td>
<td> 微博 </td>
<td>  </td>
</tr>
</table>

<hr>

<?php

function getStockInfo($id){
	$bruce=readfile("http://finance.sina.com.cn/futures/quotes/${id}.shtml");
	echo $bruce;
}

getStockInfo("IC1507"); 

?>



</body>


</html>


