<?php /* Smarty version 2.6.25, created on 2011-09-09 00:24:54
         compiled from topic.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=7">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="keywords" content="<?php echo $this->_tpl_vars['class_meta_keyword']; ?>
" />
<meta name="description" content="<?php echo $this->_tpl_vars['class_meta_description']; ?>
" />
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<link href="<?php echo $this->_tpl_vars['URL']; ?>
/css/ny.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_tpl_vars['URL']; ?>
/css/global.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_tpl_vars['URL']; ?>
/css/index.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_tpl_vars['URL']; ?>
/css/ny_swdh.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $this->_tpl_vars['URL']; ?>
/public/home/js/base.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['URL']; ?>
/public/home/js/core.js"></script>
<script type="text/javascript">if(Cookie.get('layout')){window.location.href='kp.html';}</script>
<base target="_blank" />
</head>
<body>
<div id="wrapper"><!-- #BeginLibraryItem "/Library/header.lbi" -->
<div id="header" style="font-size: 10px;">
<p><a href="http://www.100biotech.com" title="����������">���ذ���</a>|<a href="#" onclick="window.external.addFavorite('<?php echo $this->_tpl_vars['URL']; ?>
','<?php echo $this->_tpl_vars['title']; ?>
')" title="�����ղ�">�����ղ�</a>|<a href="#" title="��Ϊ��ҳ" onclick="var strHref=window.location.href;this.style.behavior='url(#default#homepage)';this.setHomePage('<?php echo $this->_tpl_vars['URL']; ?>
');">��Ϊ��ҳ</a></p>
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
	rel="kw" index="1" value="��������" /> <input class="searchint"
	id="baidubb" type="submit" value="�ٶ�һ��" rel="btn" /> </form>

</div>

<!-- #EndLibraryItem --> <!--<div id="content_t">--> <!--<div id="content_tp">-->
<div id="content">

<div id="content_t">

	<div class="content">
    <div class="guide clearfix"><span class="location"><strong>����ǰ��λ�ã�</strong><a href="<?php echo $this->_tpl_vars['URL']; ?>
" target="_parent">������ҳ</a> &raquo; 
    <?php if ($this->_tpl_vars['parent_class_name']): ?><span><?php echo $this->_tpl_vars['parent_class_name']; ?>
</span><?php endif; ?>
    <?php if ($this->_tpl_vars['current_class_name']): ?><span><?php echo $this->_tpl_vars['current_class_name']; ?>
</span><?php endif; ?>
    </span>
</div>
		<?php $_from = $this->_tpl_vars['site_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['parent']):
?>
	<div class="mtop">
	<dl class="catlist">
		<dt><?php echo $this->_tpl_vars['k']; ?>
</dt>
		<dd>
		<div class="catul">
		<ul>
		<?php $_from = $this->_tpl_vars['parent']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?> <?php if ($this->_tpl_vars['i']['name'] == 'NULL'): ?>
			<li><a href=""></a></li>
			<?php elseif ($this->_tpl_vars['i']['domain']): ?>
			<li><a href="<?php echo $this->_tpl_vars['i']['url']; ?>
" target="_blank"<?php if ($this->_tpl_vars['i']['namecolor'] == '#FF0000'): ?>class='red'<?php elseif ($this->_tpl_vars['i']['namecolor'] == '#008000'): ?>class='green'<?php elseif ($this->_tpl_vars['i']['namecolor'] == '#0000FF'): ?>class='blue'<?php else: ?>class="<?php echo $this->_tpl_vars['i']['namecolor']; ?>
"<?php endif; ?>><?php echo $this->_tpl_vars['i']['name']; ?>
</a><?php echo $this->_tpl_vars['i']['good']; ?>
</li>
			<?php else: ?>
			<li><a href="<?php echo $this->_tpl_vars['i']['url']; ?>
" target="_blank"<?php if ($this->_tpl_vars['i']['namecolor'] == '#FF0000'): ?>class='red'<?php elseif ($this->_tpl_vars['i']['namecolor'] == '#008000'): ?>class='green'<?php elseif ($this->_tpl_vars['i']['namecolor'] == '#0000FF'): ?>class='blue'<?php else: ?>class="<?php echo $this->_tpl_vars['i']['namecolor']; ?>
"<?php endif; ?>><?php echo $this->_tpl_vars['i']['name']; ?>
</a><?php echo $this->_tpl_vars['i']['good']; ?>
</li>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
		</ul>
		</div>
		</dd>
	</dl>
	<?php endforeach; endif; unset($_from); ?>
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