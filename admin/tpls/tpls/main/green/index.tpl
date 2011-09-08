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
<p><a href="#">网站提交</a>|<a href="#">加入收藏</a>|<a href="#">设为首页</a></p>
</div>
<div id="banner">
<div id="logo"></div>

<div id="ad">
<div id="bn2" class="fl"><script type="text/javascript"
	src="static/js/header.js"></script></div>
</div>
</div>
<div id="wrap">

        
    <div id="search">
        <div id="ex" style="display: none">
        <{foreach from = $notice_list item = i}>
            <p><a href="<{$i.url}>"<{if $i.color}> style="color:<{$i.color}>"<{/if}>><{$i.name}></a></p>
        <{/foreach}>
        </div>
        <div id="sm" class="clearfix" style="display: none">
            <ul id="sm_tab">
                <{foreach from=$search_class item=search_class1}>
                <li s_tab="js_type_<{$search_class1.classid}>" <{if $search_class1.is_default}> class="active" default="1"<{/if}>><{$search_class1.classname}></li>
                <{/foreach}>
            </ul>
        </div>
        <div id="sb" class="clearfix">

            <{foreach from=$search_class item=search_class2}>
            <div id="js_type_<{$search_class2.classid}>" <{if $search_class2.is_default!=1}> style="display:none;"<{/if}>>
                <div class="sw">
                    <p id="sw_<{$search_class2.classid}>">
                        <{foreach from=$search_keyword item=keyword}>
                            <{if $keyword.class == $search_class2.classid}>
                                <a href="<{$keyword.url}>"><{$keyword.name}></a>
                            <{/if}>
                        <{/foreach}>
                    </p><!--/ keywords-->
                </div>
                <div class="sf">
                    <form action="http://115.com/s" method="get" target="_blank">
                        <a href="http://115.com" id="sf_label" rel="lk"><img src="static/images/s/115.gif" width="105" height="35" rel="img" /></a><input type="text" name="q" class="int" autocomplete="off" rel="kw"/><input class="searchint" type="submit" value="115聚搜" rel="btn" />
                        <div class="ctrl">
                        <{foreach from=$search item=row1}>
                            <{if $row1.class == $search_class2.classid}>
                            <label><input class="radio" type="radio" value="engine_<{$row1.id}>" name="search_select" rad="engine_<{$row1.id}>" <{if $row1.is_default}> checked="checked"<{/if}> /><{$row1.search_select}></label>
                            <{/if}>
                        <{/foreach}>
 
                        </div>
                    </form>
 
                </div>
<div id="weather"><script>if(top.location == self.location){document.write('<iframe width="540" height="22" frameborder="0" scrolling="no" allowtransparency="true" src="public/widget/weather/index.html"></iframe>')} </script> </div>
            </div>
            <{/foreach}>

            <div id="suggest" style="display:none"></div>
        </div>

    </div>
    

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
<div class="tongji"><{$tongji}></div>

</div>
<!-- #EndLibraryItem --> <!--<div id="content_t">--> <!--<div id="content_tp">-->
<div id="main" style="float: right	;">
<div id="bm"><b class="rc-tp"><b></b></b>
<ul id="bm_tab" class="clearfix">
	<li id="bm-def" class="active" rel="fm">名站导航</li>
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
	<{*TOP 名站*}> <{foreach from = $mz_top item = i}> <{$i.html}>
	<{/foreach}>
</ul>
<ul id="fmsite" class="clearfix">
	<{*名站*}> <{foreach from = $mz_list item = i}>
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
              <div id="hot2" style="float: left;">
                <{*名站下方广告*}>
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
	<a href="<{$item.url}>">更多 &raquo;</a></li>
	<{/foreach}>
</ul>
</div>
</div>
<div id="content_r"><!--<div id="content_rt"></div>-->

<div id="content_rc">
<dl>
	<dt>综合分类</dt>
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
<!-- 专题部分 -->
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
	<a href="<{$URL_HTML}>/topic/<{$parent.path}>/index.htm">更多 &raquo;</a>
	</li>
	<{/foreach}>
</ul>
<div class="clearfloat"></div>
</div>
<div class="clearfloat"></div>
<!-- 专题部分 -->
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
<!--			href="<{$URL_HTML}>/topic/<{$parent.path}>/index.htm">更多 &raquo;</a></span></td>-->
<!--	</tr>-->
<!--	<{/foreach}>-->
<!---->
<!--</table>-->

<!-- #BeginLibraryItem "/Library/footer.lbi" -->
<div id="footerout">
  <div id="footer">
    <div id="logof"></div>
    <p class="ft1">关于百替 | 合作联系 | 广告服务 | 法律声明 | 加入百替 | 友情链接 | 网站地图</p>
    <p class="ft2">ICP备案号：ABCDEFG | 信息网络传播视听节目许可证2109398 | 广播电视节目制作经营许可证（琼）字036号</p>
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

