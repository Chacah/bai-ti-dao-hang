<?php /* Smarty version 2.6.25, created on 2011-08-04 23:03:15
         compiled from search_class_form.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="wrap">
    <div class="container">
        <div id="main">
            <div class="con box-green">
                <form action="<?php echo $this->_tpl_vars['sys']['subform']; ?>
" method="post">
                <?php if ($this->_tpl_vars['data']['classid']): ?><input type="hidden" name="form[classid]" value="<?php echo $this->_tpl_vars['data']['classid']; ?>
"/><?php endif; ?>
                <input type="hidden" name="referer" value="<?php echo $this->_tpl_vars['sys']['goback']; ?>
"/>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <th class="w120">分类名称：</th>
                            <td><input type="text" name="form[classname]" value="<?php echo $this->_tpl_vars['data']['classname']; ?>
" class="textinput w270" /></td>
                        </tr>
                        <tr>
                            <th>排序：</th>
                            <td><input type="text" name="form[sort]" value="<?php echo $this->_tpl_vars['data']['sort']; ?>
" class="textinput w60"  onkeyup="value=value.replace(/[^\d]/g,'')" /></td>
                        </tr>                  
                    </table>
                </div>
                <div class="box-footer">
                    <div class="box-footer-inner">
                    	<input type="submit" value="提交" /></a>
                    </div>
                </div>
                </form>
            </div><!--/ con-->
            
        </div>    
    </div><!--/ container-->

</div><!--/ wrap-->
<link href="static/datapicker/css/jquery-ui-1.7.1.custom.css" rel="stylesheet" type="text/css"  />
<script type="text/javascript" src="static/datapicker/ui.core.js"></script>
<script type="text/javascript" src="static/datapicker/jquery-ui-1.7.1.custom.min.js"></script>
<script type="text/javascript" src="static/qrx/qrxpcom.js"></script>
<script type="text/javascript" src="static/qrx/qrcpicker.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#start_time").datepicker();
	$("#end_time").datepicker();

	var colorstr = "";
	colorstr = document.getElementById("js_test_input").value;
	var cp = new QrColorPicker(colorstr);
	cp.onChange = function(color){
		document.getElementById("js_test_link").style.color = color;
		document.getElementById("js_test_input").value = color;
	}
	document.getElementById("js_link_color").innerHTML = cp.getHTML();
});
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>