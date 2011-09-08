<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=7">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="keywords" content="<{$class_meta_keyword}>" />
<meta name="description" content="<{$class_meta_description}>" />
<title><{$title}></title>
<link href="<{$URL}>/css/ny.css" rel="stylesheet" type="text/css" />
<link href="<{$URL}>/css/global.css" rel="stylesheet" type="text/css" />
<link href="<{$URL}>/css/index.css" rel="stylesheet" type="text/css" />
<link href="<{$URL}>/css/ny_swdh.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<{$URL}>/public/home/js/base.js"></script>
<script type="text/javascript" src="<{$URL}>/public/home/js/core.js"></script>
<script type="text/javascript">if(Cookie.get('layout')){window.location.href='kp.html';}</script>
<base target="_blank" />
</head>
<body>
<div id="wrapper"><!-- #BeginLibraryItem "/Library/header.lbi" -->
<div id="header" style="font-size: 10px;">
<p><a href="http://www.100biotech.com" title="百替生物网">返回百替</a>|<a href="#" onclick="window.external.addFavorite('<{$URL}>','<{$title}>')" title="加入收藏">加入收藏</a>|<a href="#" title="设为首页" onclick="var strHref=window.location.href;this.style.behavior='url(#default#homepage)';this.setHomePage('<{$URL}>');">设为首页</a></p>
</div>
<div id="banner">
<div id="logo"></div>

<div id="ad">
<div id="bn2" class="fl"><script type="text/javascript" src="static/js/header.js"></script></div>
</div>
</div>
<div id="header_son">

<div id="baidu"></div>
<form action="http://www.baidu.com/s" method="get" target="_blank"><input
	id="search" name="wd" type="text" class="int" autocomplete="off"
	rel="kw" index="1" value="百替生物" /> <input class="searchint"
	id="baidubb" type="submit" value="百度一下" rel="btn" /> </form>

</div>

<!-- #EndLibraryItem --> <!--<div id="content_t">--> <!--<div id="content_tp">-->
<div id="content">

<div id="content_t">

	<div class="content">
    <div class="guide clearfix"><span class="location"><strong>您当前的位置：</strong><a href="<{$URL}>" target="_parent">导航首页</a> &raquo; 
    <{if $parent_class_name}><span><{$parent_class_name}></span><{/if}>
    <{if $current_class_name}><span><{$current_class_name}></span><{/if}>
    </span>
</div>
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
<p class="ft1">关于百替 | 合作联系 | 广告服务 | 法律声明 | 加入百替 | 友情链接 | 网站地图</p>
<p class="ft2">ICP备案号：ABCDEFG | 信息网络传播视听节目许可证2109398 |
广播电视节目制作经营许可证（琼）字036号</p>
</div>
</div>
<!-- #EndLibraryItem -->
</body>
</html>
