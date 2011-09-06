<?php /* Smarty version 2.6.25, created on 2011-08-18 22:35:36
         compiled from class.tpl */ ?>
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
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['URL']; ?>
/public/page/style/new_green/style.css" media="all" />
<link id="skin" rel="stylesheet" type="text/css" href="" />
<script type="text/javascript" src="<?php echo $this->_tpl_vars['URL']; ?>
/public/page/js/skin.js"></script>
<base target="_blank" />
</head>
<body>
<div id="page" class="container">
    <div class="guide clearfix"><span class="location"><strong>您当前的位置：</strong><a href="<?php echo $this->_tpl_vars['URL']; ?>
" target="_parent">导航首页</a> &raquo; 
    <?php if ($this->_tpl_vars['parent_class_name']): ?><span><?php echo $this->_tpl_vars['parent_class_name']; ?>
</span><?php endif; ?>
    <?php if ($this->_tpl_vars['current_class_name']): ?><span><?php echo $this->_tpl_vars['current_class_name']; ?>
</span><?php endif; ?>
    </span>
</div>

<?php $_from = $this->_tpl_vars['site_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['parent']):
?>
      <div class="box"><b class="rc-tp"><b></b></b>
        <div class="site-list">
                <h2 id="<?php echo $this->_tpl_vars['key_list'][$this->_tpl_vars['k']]['classid']; ?>
"><?php echo $this->_tpl_vars['k']; ?>
</h2>
                <ul class="clearfix">
                <?php $_from = $this->_tpl_vars['parent']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
                    <?php if ($this->_tpl_vars['i']['name'] == 'NULL'): ?>
                        <li><a href=""></a></li>
                    <?php elseif ($this->_tpl_vars['i']['domain']): ?>
                        <li><a href="<?php echo $this->_tpl_vars['i']['url']; ?>
" target="_blank" <class='blue'><?php echo $this->_tpl_vars['i']['name']; ?>
</a><?php echo $this->_tpl_vars['i']['good']; ?>
</li>
                    <?php else: ?>
                        <li><a href="<?php echo $this->_tpl_vars['i']['url']; ?>
" target="_blank" <class='blue'><?php echo $this->_tpl_vars['i']['name']; ?>
</a><?php echo $this->_tpl_vars['i']['good']; ?>
</li>
                    <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
                 </ul>
         </div>
      <b class="rc-bt"><b></b></b></div>
<?php endforeach; endif; unset($_from); ?>
        
    <div id="footer" class="clearfix"> <a href="<?php echo $this->_tpl_vars['URL']; ?>
" target="_parent">返回首页</a> </div>
    <div id="gotop"><a href="#page" target="_self">返回顶部</a></div>
</div>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['URL']; ?>
/public/js/ylmf.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['URL']; ?>
/public/page/js/common.js"></script>
<div style="display:none"><?php echo $this->_tpl_vars['tongji']; ?>
</div>
</body>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['URL']; ?>
/static/js/opensug_resoucre.js"></script>
</html>