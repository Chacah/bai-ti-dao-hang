<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=7">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="keywords" content="<{$index_meta_keyword}>" />
<meta name="description" content="<{$index_meta_description}>" />
<title><{$title}></title>
<link href="<{$URL}>/public/home/style/new_green/base.css"
	rel="stylesheet" type="text/css" />
<style id="temp-css" type="text/css"></style>
<link href="css/swdh.css" rel="stylesheet" type="text/css" />
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
<div id="weather"><script>if(top.location == self.location){document.write('<iframe width="500" height="60" frameborder="0" scrolling="no" allowtransparency="true" src="public/widget/weather/index.html"></iframe>')} </script>
</div>
<div id="baidu"></div>
<form action="http://www.baidu.com/s" method="get" target="_blank"><input
	id="search" name="wd" type="text" class="int" autocomplete="off"
	rel="kw" index="1" value="��������" /> <input class="searchint"
	id="baidubb" type="submit" value="�ٶ�һ��" rel="btn" /> <input id="more"
	name="more" type="image" src="images/btsw_19.gif" /></form>
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
<div id="main">
<div id="bm"><b class="rc-tp"><b></b></b>
<ul id="bm_tab" class="clearfix">
	<li id="bm-def" class="active" rel="fm">��վ����</li>
	<{foreach from = $famous_tab item = tab key = i}>
	<li rel="bb<{$i}>" url="<{$tab.url}>" nocache=<{$tab.nocache}>><{$tab.name}></li>
	<{/foreach}>
</ul>
<div id="qs"><b class="l"></b>
<div id="q_int" class="n">
<div class="button-wrap"><input type="text" /></div>
</div>
<b class="r"></b></div>
</div>

<div id="bb">
<div class="box">
<div id="fm">
<ul id="topsite" class="clearfix">
	<{*TOP ��վ*}> <{foreach from = $mz_top item = i}> <{$i.html}>
	<{/foreach}>
</ul>
<ul id="fmsite" class="clearfix">
	<{*��վ*}> <{foreach from = $mz_list item = i}>
	<li><a href="<{$i.url}>"<{if $i.namecolor=='#FF0000' ||
	$i.namecolor=='red'}>class="red"<{elseif $i.namecolor=='#008000' ||
	$i.namecolor=='green'}>class="green"<{elseif $i.namecolor=='#0000FF' ||
	$i.namecolor=='blue'}>class="blue"<{elseif
	$i.namecolor!=''}>style="color:<{$i.namecolor}>;"<{/if}>><{$i.name}></a></li>
	<{/foreach}>
</ul>
</div>
<div id="qs-result" style="display: none;"></div>
</div>
<b class="rc-bt"><b></b></b></div>
</div>
              <div id="hot2" style="float: right;">
                <{*��վ�·����*}>
                <{$advert_notice}>
            </div>
<!--</div>--> <!--</div>-->
<div id="content_lr">
<div id="content_l">
<div id="web">
<ul>
	<{foreach from = $kz_list key ='key' item = 'item' name = n}>
	<li>
	<p><a href="<{$item.url}>" class="span"><{$key}></a> <{foreach key='k'
	item='v' from=$item.son}> <span class="site"><a href="<{$v.url}>"><{$v.name}></a></span>
	<{/foreach}></p>
	<a href="<{$item.url}>">���� &raquo;</a></li>
	<{/foreach}>
</ul>
</div>
</div>
<div id="content_r"><!--<div id="content_rt"></div>-->

<div id="content_rc">
<dl>
	<dt>�ۺϷ���</dt>
	<dd><{foreach from = $site_class key = k item = parent}>
	<h2><{$k}></h2>

	<{if $parent.0.classname_len > 6}> class="c2"<{/if}> <{foreach from
	=$parent item = i}>

	<ul>
		<li><a href="<{$i.urlpath}>"><{$i.classname}></a></li>
	</ul>
	<{/foreach}> <{/foreach}>
	<div class="clearfloat"></div>
	</dd>
</dl>

</div>
<div class="clearfloat"></div>
</div>
<!-- ר�ⲿ�� -->
<div id="content_bz">
<ul>
	<{foreach from = $topics item = parent}>
	<li>
	<p><a class="cat" href="<{$URL_HTML}>/topic/<{$parent.path}>/index.htm"><{$parent.name}></a>
		<{if !empty($parent.son)}>
		<{foreach from = $parent.son item = v}>
			<a href="<{if $v.url}><{$v.url}><{else}><{$URL_HTML}>/topic/<{$parent.path}>/index.htm#<{$v.id}><{/if}>"><{$v.name}></a>
		<{/foreach}>
		<{/if}>
	</p>
	<a href="<{$URL_HTML}>/topic/<{$parent.path}>/index.htm">���� &raquo;</a>
	</li>
	<{/foreach}>
</ul>
<div class="clearfloat"></div>
</div>
<div class="clearfloat"></div>
<!-- ר�ⲿ�� -->
<!--<table width="891" border="0" id="content_b">-->
<!--	<tr>-->
<!--		<td colspan="4"></td>-->
<!--	</tr>-->
<!--	<{foreach from = $topics item = parent}>-->
<!--	<tr>-->
<!--		<td width="4">&nbsp;</td>-->
<!--		<td width="61" height="35"-->
<!--			style="background: url(images/btsw_60.gif) no-repeat"><strong><a-->
<!--			href="<{$URL_HTML}>/topic/<{$parent.path}>/index.htm"><{$parent.name}></a></strong></td>-->
<!--		<td width="746" height="35">&nbsp; <{if !empty($parent.son)}>-->
<!--		<{foreach from = $parent.son item = v}> <a-->
<!--			href="<{if $v.url}><{$v.url}><{else}><{$URL_HTML}>/topic/<{$parent.path}>/index.htm#<{$v.id}><{/if}>"><{$v.name}></a>-->
<!--		<{/foreach}> <{/if}></td>-->
<!--		<td width="62"><span class="more"><a-->
<!--			href="<{$URL_HTML}>/topic/<{$parent.path}>/index.htm">���� &raquo;</a></span></td>-->
<!--	</tr>-->
<!--	<{/foreach}>-->
<!---->
<!--</table>-->

<!-- #BeginLibraryItem "/Library/footer.lbi" -->
<div id="footerout">
  <div id="footer">
    <div id="logof"></div>
    <p class="ft1">���ڰ��� | ������ϵ | ������ | �������� | ������� | �������� | ��վ��ͼ</p>
    <p class="ft2">ICP�����ţ�ABCDEFG | ��Ϣ���紫��������Ŀ���֤2109398 | �㲥���ӽ�Ŀ������Ӫ���֤������036��</p>
  </div>
</div>
<!-- #EndLibraryItem --></div>

</body>

<script type="text/javascript" src="<{$URL}>/public/home/js/config.js"></script>
<script type="text/javascript" src="<{$URL}>/public/home/js/main.js"></script>
<script type="text/javascript">
    try{
		if(window.SR){
			SR.SearchData = {
                <{foreach from=$search item=row2}>
                    engine_<{$row2.id}>: {
						action: "<{$row2.action}>",
						name: "<{$row2.name}>",
						btn: "<{$row2.btn}>",
						img: ["<{$row2.img_text}>","<{$row2.img_url}>"],
						url: "<{$row2.url}>",
						params: {
							<{$row2.params}>
						}
                    },
                <{/foreach}>
				none:{}
            }	
		}
		
		var sbBox = document.getElementById('sb');
		var sbForms = sbBox.getElementsByTagName('form');
		for(var i = 0,len = sbForms.length; i < len; i++){
			sbForms[i].reset();
		}
		
		var sbRadios = sbBox.getElementsByTagName('input');
		var inputTxtArr = [];
		if(sbRadios.length){
			var setRadios = [];
			for(var i = 0,len = sbRadios.length; i < len; i++){
				var input = sbRadios[i];
				if(input.getAttribute("rad") && input.checked){
					setRadios.push(input);
				}
				else if(input.getAttribute("rel") == "kw"){
					var key = inputTxtArr.push(input);
					input.setAttribute("index",key - 1);
					
				}
			}
			try{
			for(var i = 0,len = setRadios.length; i < len; i++){
				var input = setRadios[i];
				
				SR.RadioMod.ClickRadio(input);
			}
			}catch(e){}
		}
	}catch(e){}
    </script>


</html>

