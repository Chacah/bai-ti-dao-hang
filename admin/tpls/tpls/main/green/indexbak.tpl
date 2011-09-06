<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=7">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="keywords" content="<{$index_meta_keyword}>" />
<meta name="description" content="<{$index_meta_description}>" />
<title><{$title}></title>
<link href="<{$URL}>/public/home/style/new_green/base.css" rel="stylesheet" type="text/css" />
<style id="temp-css" type="text/css"></style>
<script type="text/javascript" src="<{$URL}>/public/home/js/base.js"></script>
<script type="text/javascript" src="<{$URL}>/public/home/js/core.js"></script>
<script type="text/javascript">if(Cookie.get('layout')){window.location.href='kp.html';}</script>
<base target="_blank" />
</head>
<body>
<em class="filter" style="display:none;"></em>
<div id="wrap">

    <div id="content">

        <div id="main">
            <div id="bm"><b class="rc-tp"><b></b></b>
                <ul id="bm_tab" class="clearfix">
                    <li id="bm-def" class="active" rel="fm">名站导航</li>
                    <{foreach from = $famous_tab item = tab key = i}>
                    <li rel="bb<{$i}>" url="<{$tab.url}>" nocache=<{$tab.nocache}>><{$tab.name}></li>
                    <{/foreach}>
                </ul><div id="qs"><b class="l"></b><div id="q_int" class="n"><div class="button-wrap"><input type="text" /></div></div><b class="r"></b></div>
            </div>
            <div id="bb">
                <div class="box">
                    <div id="fm">
                        <ul id="topsite" class="clearfix">
                            <{*TOP 名站*}>
                            	<{foreach from = $mz_top item = i}>
                            	<{$i.html}>
                            <{/foreach}>
                        </ul>
                        <ul id="fmsite" class="clearfix">
                            <{*名站*}>
                            <{foreach from = $mz_list item = i}>
                            <li><a href="<{$i.url}>" <{if $i.namecolor=='#FF0000' || $i.namecolor=='red'}>class="red"<{elseif $i.namecolor=='#008000' || $i.namecolor=='green'}>class="green"<{elseif $i.namecolor=='#0000FF' || $i.namecolor=='blue'}>class="blue"<{elseif $i.namecolor!=''}>style="color:<{$i.namecolor}>;"<{/if}>><{$i.name}></a></li>
                            <{/foreach}>
                        </ul>
                    </div>
                    <div id="qs-result" style="display:none;"></div>
                </div>
                <b class="rc-bt"><b></b></b></div>
            <div id="ls"><b class="rc-tp"><b></b></b>
                <div class="box">
					<{*城市导航*}>
                    <dl id="local" style="visibility:hidden;">
                        <dt id="loc_t"></dt>
                        <dd class="l" id="loc_c"></dd>
                        <dd class="m" id="loc_m"></dd>
                    </dl>
                    <{*酷站导航*}>
                    <{foreach from = $kz_list key ='key' item = 'item' name = n}><dl <{if $smarty.foreach.n.iteration % 2 eq 0}>class="alt"<{/if}>id="ls<{$smarty.foreach.n.iteration}>"><dt><a href="<{$item.url}>"><{$key}></a></dt><dd class="l"><{foreach key='k' item='v' from=$item.son}><a href="<{$v.url}>" <{if $v.namecolor=='#FF0000' || $v.namecolor=='red'}>class="red"<{elseif $v.namecolor=='#008000' || $v.namecolor=='green'}>class="green"<{elseif $v.namecolor=='#0000FF' || $v.namecolor=='blue'}>class="blue"<{elseif $v.namecolor!=''}>style="color:<{$v.namecolor}>;"<{/if}>><{$v.name}></a><{/foreach}></dd><dd class="m"><a href="<{$item.url}>">更多 &raquo;</a></dd></dl><{/foreach}>
                </div>
                <b class="rc-bt"><b></b></b></div>
        </div>
                <div id="cate"><b class="rc-tp"><b></b></b>
            <div class="box">
     
                <{*网站分类*}>
                <{foreach from = $site_class key = k item = parent}>
                    <h2><{$k}></h2>
                    <ul<{if $parent.0.classname_len > 6}> class="c2"<{/if}>>
                    <{foreach from = $parent item = i}>
                        <li ><a href="<{$i.urlpath}>"><{$i.classname}></a></li>
                    <{/foreach}>
                    </ul>
                <{/foreach}>
            </div>
        <b class="rc-bt"><b></b></b></div>
    </div>
    <div id="meta"><b class="rc-tp"><b></b></b>
        <div class="box">
            <ul>
            <{*专题*}>
        <{foreach from = $topics item = parent}>
        <li class="bd">
            <strong><a href="<{$URL_HTML}>/topic/<{$parent.path}>/index.htm"><{$parent.name}></a></strong>
            <{if !empty($parent.son)}>
            <{foreach from = $parent.son item = v}>
            <a href="<{if $v.url}><{$v.url}><{else}><{$URL_HTML}>/topic/<{$parent.path}>/index.htm#<{$v.id}><{/if}>"><{$v.name}></a>
            <{/foreach}>
            <{/if}>
            <span class="more"><a href="<{$URL_HTML}>/topic/<{$parent.path}>/index.htm">更多 &raquo;</a></span>
        </li>
        <{/foreach}>
         <{if $links}>
         <li class="bd">
            <strong><a href="<{$URL_HTML}>/catalog/links.htm">友情链接</a></strong>
            <{foreach from=$links item=links}>
            <a  href="<{$links.site_url}>" title="<{$links.site_name}>"><{$links.site_name}></a>
            <{/foreach}>
            <span class="more"><a href="<{$URL_HTML}>/catalog/links.htm">更多 &raquo;</a></span>
         </li>
         <{/if}>
            </ul>
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

</body>
</html>
