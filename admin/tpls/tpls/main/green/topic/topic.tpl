<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=7">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="keywords" content="<{$class_meta_keyword}>" />
<meta name="description" content="<{$class_meta_description}>" />
<title>�ޱ����ĵ�</title>
<link href="<{$URL}>/css/ny.css" rel="stylesheet" type="text/css" />
<link href="<{$URL}>/css/global.css" rel="stylesheet" type="text/css" />

<link href="<{$URL}>/css/index.css" rel="stylesheet" type="text/css" />

<link href="<{$URL}>/css/styll04.css" id="skinlink" rel="stylesheet" type="text/css" />
<link href="<{$URL}>/public/home/style/new_green/base.css"
	rel="stylesheet" type="text/css" />
<style id="temp-css" type="text/css"></style>
<link href="<{$URL}>/css/ny_swdh.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<{$URL}>/public/home/js/base.js"></script>
<script type="text/javascript" src="<{$URL}>/public/home/js/core.js"></script>
<script type="text/javascript">if(Cookie.get('layout')){window.location.href='kp.html';}</script>
<base target="_blank" />
<style>
.mtop {
	background: url(http://www.7find.cn/images/mbg.gif) repeat-x 0% 0%;
	width: 100%;
	overflow: hidden;
}
</style>
</head>
<body>
<div id="wrapper"><!-- #BeginLibraryItem "/Library/header.lbi" -->
<div id="header" style="font-size: 10px;">
<p><a href="#">��վ�ύ</a>|<a href="#">�����ղ�</a>|<a href="#">��Ϊ��ҳ</a></p>
</div>
<div id="banner">
<div id="logo"></div>

<div id="ad">
<div id="bn2" class="fl"><script type="text/javascript"
	src="static/js/header.js"></script></div>
</div>
</div>
<div id="header_son">

<div id="baidu"></div>
<form action="http://www.baidu.com/s" method="get" target="_blank"><input
	id="search" name="wd" type="text" class="int" autocomplete="off"
	rel="kw" index="1" value="��������" /> <input class="searchint"
	id="baidubb" type="submit" value="�ٶ�һ��" rel="btn" /> <input id="more"
	name="more" type="image" src="<{$URL}>/images/btsw_19.gif" /></form>
<ul id="t_list">
	<!--    <li>��������������������</li>-->
	<!--    <li>��������������������</li>-->
	<!--    <li>��������������������</li>-->

	<li><{foreach from=$search_class item=search_class2}> <{foreach
	from=$search_keyword item=keyword}> <{if $keyword.class ==
	$search_class2.classid}> <a href="<{$keyword.url}>"><{$keyword.name}></a>
	<{/if}> <{/foreach}> <{/foreach}></li>
</ul>
</div>

<!-- #EndLibraryItem --> <!--<div id="content_t">--> <!--<div id="content_tp">-->
<div id="content">
<div id="content_t">

	<div class="content">
		<{foreach from = $site_list key = k item = parent}>
	<div class="mtop">
	<dl class="catlist">
		<dt><{$k}></dt>
		<dd>
		<div class="catul">
		<ul>
		<{foreach from = $parent item = i}> <{if $i.name eq 'NULL'}>
			<li><a href=""></a></li>
			<{elseif $i.domain}>
			<li><a href="<{$i.url}>" target="_blank"<{if
			$i.namecolor=='#FF0000'}>class='red'<{elseif
			$i.namecolor=='#008000'}>class='green'<{elseif
			$i.namecolor=='#0000FF'}>class='blue'<{else}>class="<{$i.namecolor}>"<{/if}>><{$i.name}></a><{$i.good}></li>
			<{else}>
			<li><a href="<{$i.url}>" target="_blank"<{if
			$i.namecolor=='#FF0000'}>class='red'<{elseif
			$i.namecolor=='#008000'}>class='green'<{elseif
			$i.namecolor=='#0000FF'}>class='blue'<{else}>class="<{$i.namecolor}>"<{/if}>><{$i.name}></a><{$i.good}></li>
			<{/if}>
		<{/foreach}>
		</ul>
		</div>
		</dd>
	</dl>
	<{/foreach}>
	</div>
	</div>
	<div class="clear"></div>
</div>




</div>
<!-- #BeginLibraryItem "/Library/footer.lbi" -->
<div id="footerout">
<div id="footer">
<div id="logof"></div>
<p class="ft1">���ڰ��� | ������ϵ | ������ | �������� | ������� | �������� | ��վ��ͼ</p>
<p class="ft2">ICP�����ţ�ABCDEFG | ��Ϣ���紫��������Ŀ���֤2109398 |
�㲥���ӽ�Ŀ������Ӫ���֤������036��</p>
</div>
</div>
<!-- #EndLibraryItem -->
</body>
</html>
