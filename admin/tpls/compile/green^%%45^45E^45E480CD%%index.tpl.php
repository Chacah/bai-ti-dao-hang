<?php /* Smarty version 2.6.25, created on 2011-09-09 00:14:55
         compiled from index.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=7">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="keywords" content="<?php echo $this->_tpl_vars['index_meta_keyword']; ?>
" />
<meta name="description" content="<?php echo $this->_tpl_vars['index_meta_description']; ?>
" />
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<link href="<?php echo $this->_tpl_vars['URL']; ?>
/public/home/style/new_green/base.css"
	rel="stylesheet" type="text/css" />
<style id="temp-css" type="text/css"></style>
<link href="css/swdh.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $this->_tpl_vars['URL']; ?>
/public/home/js/base.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['URL']; ?>
/public/home/js/core.js"></script>
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
<div id="header_son">
<div id="weather"><script>if(top.location == self.location){document.write('<iframe width="500" height="60" frameborder="0" scrolling="no" allowtransparency="true" src="public/widget/weather/index.html"></iframe>')} </script>
</div>
<div id="baidu"></div>
<form action="http://www.baidu.com/s" method="get" target="_blank"><input
	id="search" name="wd" type="text" class="int" autocomplete="off"
	rel="kw" index="1" value="百替生物" /> <input class="searchint"
	id="baidubb" type="submit" value="百度一下" rel="btn" /> </form>
<ul id="t_list">
	<!--    <li>文字文字文字文字文字</li>-->
	<!--    <li>文字文字文字文字文字</li>-->
	<!--    <li>文字文字文字文字文字</li>-->


</ul>
</div>

<!-- #EndLibraryItem --> <!--<div id="content_t">--> <!--<div id="content_tp">-->
<div id="main" style="float: right	;">
<div id="bm"><b class="rc-tp"><b></b></b>
<ul id="bm_tab" class="clearfix">
	<li id="bm-def" class="active" rel="fm">名站导航</li>
	<?php $_from = $this->_tpl_vars['famous_tab']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['tab']):
?>
	<li rel="bb<?php echo $this->_tpl_vars['i']; ?>
" url="<?php echo $this->_tpl_vars['tab']['url']; ?>
" nocache=<?php echo $this->_tpl_vars['tab']['nocache']; ?>
><?php echo $this->_tpl_vars['tab']['name']; ?>
</li>
	<?php endforeach; endif; unset($_from); ?>
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
	 <?php $_from = $this->_tpl_vars['mz_top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?> <?php echo $this->_tpl_vars['i']['html']; ?>

	<?php endforeach; endif; unset($_from); ?>
</ul>
<ul id="fmsite" class="clearfix">
	 <?php $_from = $this->_tpl_vars['mz_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
	<li><a href="<?php echo $this->_tpl_vars['i']['url']; ?>
"<?php if ($this->_tpl_vars['i']['namecolor'] == '#FF0000' || $this->_tpl_vars['i']['namecolor'] == 'red'): ?>class="red"<?php elseif ($this->_tpl_vars['i']['namecolor'] == '#008000' || $this->_tpl_vars['i']['namecolor'] == 'green'): ?>class="green"<?php elseif ($this->_tpl_vars['i']['namecolor'] == '#0000FF' || $this->_tpl_vars['i']['namecolor'] == 'blue'): ?>class="blue"<?php elseif ($this->_tpl_vars['i']['namecolor'] != ''): ?>style="color:<?php echo $this->_tpl_vars['i']['namecolor']; ?>
;"<?php endif; ?>><?php echo $this->_tpl_vars['i']['name']; ?>
</a></li>
	<?php endforeach; endif; unset($_from); ?>
</ul>
</div>
<div id="qs-result" style="display: none;"></div>
</div>
<b class="rc-bt"><b></b></b></div>
</div>
              <div id="hot2" style="float: left;">
                                <?php echo $this->_tpl_vars['advert_notice']; ?>

            </div>
<!--</div>--> <!--</div>-->
<div id="content_lr">
<div id="content_l">
<div id="web">
<ul>
	<?php $_from = $this->_tpl_vars['kz_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['n'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['n']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['n']['iteration']++;
?>
	<li>
	<p><a href="<?php echo $this->_tpl_vars['item']['url']; ?>
" class="span"><?php echo $this->_tpl_vars['key']; ?>
</a> <?php $_from = $this->_tpl_vars['item']['son']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?> <span class="site"><a href="<?php echo $this->_tpl_vars['v']['url']; ?>
"><?php echo $this->_tpl_vars['v']['name']; ?>
</a></span>
	<?php endforeach; endif; unset($_from); ?></p>
	<a href="<?php echo $this->_tpl_vars['item']['url']; ?>
">更多 &raquo;</a></li>
	<?php endforeach; endif; unset($_from); ?>
</ul>
</div>
</div>
<div id="content_r"><!--<div id="content_rt"></div>-->

<div id="content_rc">
<dl>
	<dt>综合分类</dt>
	<dd><?php $_from = $this->_tpl_vars['site_class']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['parent']):
?>
	<h2><?php echo $this->_tpl_vars['k']; ?>
</h2>

	<?php if ($this->_tpl_vars['parent']['0']['classname_len'] > 6): ?> class="c2"<?php endif; ?> <?php $_from = $this->_tpl_vars['parent']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>

	<ul>
		<li><a href="<?php echo $this->_tpl_vars['i']['urlpath']; ?>
"><?php echo $this->_tpl_vars['i']['classname']; ?>
</a></li>
	</ul>
	<?php endforeach; endif; unset($_from); ?> <?php endforeach; endif; unset($_from); ?>
	<div class="clearfloat"></div>
	</dd>
</dl>

</div>
<div class="clearfloat"></div>
</div>
<!-- 专题部分 -->
<div id="content_bz">
<ul>
	<?php $_from = $this->_tpl_vars['topics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['parent']):
?>
	<li>
	<p><a class="cat" href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/topic/<?php echo $this->_tpl_vars['parent']['path']; ?>
/index.htm"><?php echo $this->_tpl_vars['parent']['name']; ?>
</a>
		<?php if (! empty ( $this->_tpl_vars['parent']['son'] )): ?>
		<?php $_from = $this->_tpl_vars['parent']['son']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
			<a href="<?php if ($this->_tpl_vars['v']['url']): ?><?php echo $this->_tpl_vars['v']['url']; ?>
<?php else: ?><?php echo $this->_tpl_vars['URL_HTML']; ?>
/topic/<?php echo $this->_tpl_vars['parent']['path']; ?>
/index.htm#<?php echo $this->_tpl_vars['v']['id']; ?>
<?php endif; ?>"><?php echo $this->_tpl_vars['v']['name']; ?>
</a>
		<?php endforeach; endif; unset($_from); ?>
		<?php endif; ?>
	</p>
	<a href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/topic/<?php echo $this->_tpl_vars['parent']['path']; ?>
/index.htm">更多 &raquo;</a>
	</li>
	<?php endforeach; endif; unset($_from); ?>
</ul>
<div class="clearfloat"></div>
</div>
<div class="clearfloat"></div>
<!-- 专题部分 -->
<!--<table width="891" border="0" id="content_b">-->
<!--	<tr>-->
<!--		<td colspan="4"></td>-->
<!--	</tr>-->
<!--	<?php $_from = $this->_tpl_vars['topics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['parent']):
?>-->
<!--	<tr>-->
<!--		<td width="4">&nbsp;</td>-->
<!--		<td width="61" height="35"-->
<!--			style="background: url(images/btsw_60.gif) no-repeat"><strong><a-->
<!--			href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/topic/<?php echo $this->_tpl_vars['parent']['path']; ?>
/index.htm"><?php echo $this->_tpl_vars['parent']['name']; ?>
</a></strong></td>-->
<!--		<td width="746" height="35">&nbsp; <?php if (! empty ( $this->_tpl_vars['parent']['son'] )): ?>-->
<!--		<?php $_from = $this->_tpl_vars['parent']['son']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?> <a-->
<!--			href="<?php if ($this->_tpl_vars['v']['url']): ?><?php echo $this->_tpl_vars['v']['url']; ?>
<?php else: ?><?php echo $this->_tpl_vars['URL_HTML']; ?>
/topic/<?php echo $this->_tpl_vars['parent']['path']; ?>
/index.htm#<?php echo $this->_tpl_vars['v']['id']; ?>
<?php endif; ?>"><?php echo $this->_tpl_vars['v']['name']; ?>
</a>-->
<!--		<?php endforeach; endif; unset($_from); ?> <?php endif; ?></td>-->
<!--		<td width="62"><span class="more"><a-->
<!--			href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/topic/<?php echo $this->_tpl_vars['parent']['path']; ?>
/index.htm">更多 &raquo;</a></span></td>-->
<!--	</tr>-->
<!--	<?php endforeach; endif; unset($_from); ?>-->
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

<script type="text/javascript" src="<?php echo $this->_tpl_vars['URL']; ?>
/public/home/js/config.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['URL']; ?>
/public/home/js/main.js"></script>
<script type="text/javascript">
    try{
		if(window.SR){
			SR.SearchData = {
                <?php $_from = $this->_tpl_vars['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row2']):
?>
                    engine_<?php echo $this->_tpl_vars['row2']['id']; ?>
: {
						action: "<?php echo $this->_tpl_vars['row2']['action']; ?>
",
						name: "<?php echo $this->_tpl_vars['row2']['name']; ?>
",
						btn: "<?php echo $this->_tpl_vars['row2']['btn']; ?>
",
						img: ["<?php echo $this->_tpl_vars['row2']['img_text']; ?>
","<?php echo $this->_tpl_vars['row2']['img_url']; ?>
"],
						url: "<?php echo $this->_tpl_vars['row2']['url']; ?>
",
						params: {
							<?php echo $this->_tpl_vars['row2']['params']; ?>

						}
                    },
                <?php endforeach; endif; unset($_from); ?>
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
