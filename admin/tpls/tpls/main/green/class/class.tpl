<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<meta http-equiv="X-UA-Compatible" content="IE=7">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="keywords" content="<{$class_meta_keyword}>" />
<meta name="description" content="<{$class_meta_description}>" />
<title><{$title}></title>
<link rel="stylesheet" type="text/css" href="<{$URL}>/public/page/style/new_green/style.css" media="all" />
<link id="skin" rel="stylesheet" type="text/css" href="" />
<script type="text/javascript" src="<{$URL}>/public/page/js/skin.js"></script>
<base target="_blank" />
</head>
<body>
<div id="page" class="container">
    <div class="guide clearfix"><span class="location"><strong>您当前的位置：</strong><a href="<{$URL}>" target="_parent">导航首页</a> &raquo; 
    <{if $parent_class_name}><span><{$parent_class_name}></span><{/if}>
    <{if $current_class_name}><span><{$current_class_name}></span><{/if}>
    </span>
</div>

<{foreach from = $site_list key = k item = parent}>
      <div class="box"><b class="rc-tp"><b></b></b>
        <div class="site-list">
                <h2 id="<{$key_list.$k.classid}>"><{$k}></h2>
                <ul class="clearfix">
                <{foreach from = $parent item = i}>
                    <{if $i.name eq 'NULL'}>
                        <li><a href=""></a></li>
                    <{elseif $i.domain}>
                        <li><a href="<{$i.url}>" target="_blank" <class='blue'><{$i.name}></a><{$i.good}></li>
                    <{else}>
                        <li><a href="<{$i.url}>" target="_blank" <class='blue'><{$i.name}></a><{$i.good}></li>
                    <{/if}>
                <{/foreach}>
                 </ul>
         </div>
      <b class="rc-bt"><b></b></b></div>
<{/foreach}>
        
    <div id="footer" class="clearfix"> <a href="<{$URL}>" target="_parent">返回首页</a> </div>
    <div id="gotop"><a href="#page" target="_self">返回顶部</a></div>
</div>
<script type="text/javascript" src="<{$URL}>/public/js/ylmf.js"></script>
<script type="text/javascript" src="<{$URL}>/public/page/js/common.js"></script>
<div style="display:none"><{$tongji}></div>
</body>
<script type="text/javascript" src="<{$URL}>/static/js/opensug_resoucre.js"></script>
</html>
