<?php /* Smarty version 2.6.25, created on 2011-08-04 22:51:09
         compiled from search_class_list.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script type="text/javascript">
	var list;
	$(document).ready(function(){
		list = $("#tb1").find("input[type='checkbox']").not("[rel]");
		list.each(function(i){
			$(this).bind("click",function(){
				CheckHanler();
			});
		});
	});

	var CheckHanler = function(){
		list.each(function(i){
			var input = $(this);
			if(this.checked){
				input.parent().parent().addClass("checked");
			}
			else{
				input.parent().parent().removeClass("checked");
			}
		});
	}

	var checkTb1 = function(selectType){
		CheckInit("tb1",selectType);
	}

	var CheckInit = function(tabelId,selectType){
		if(list == undefined){
			list = $("#" + tabelId).find("input[type='checkbox']").not("[rel]");
		}
		CheckControl(list,selectType,CheckHanler)
	}

	var CheckControl = function(childs,selectType,checkHandler){
		for(var i = 0,len = childs.length; i < len; i++){
			switch(selectType){
				case 1:	//ȫѡ
					childs[i].checked = true;
					break;
				case 2:	//��ѡ
					childs[i].checked = false;
					break;
				case 3:	//��ѡ
					childs[i].checked = !childs[i].checked;
					break;
			}
		}
		if(checkHandler){
			checkHandler();
		}
	}
</script>
<body id="main_page">

<div class="wrap">
    <div class="container">

        <div id="main">

            <div class="con">
            	<form action="<?php echo $this->_tpl_vars['sys']['subform']; ?>
" method="post">
                    <input type="hidden" name="referer" value="<?php echo $this->_tpl_vars['sys']['goback']; ?>
"/>
                  <div class="table">
                  <div class="th">
                    	<div class="form">
                    	  <input type="button" value="�������������" onClick="location.href='?c=search_class&a=search_class_add'" />&nbsp;</div>
                    </div>

                    <table class="admin-tb" id="tb1">
                    <tr>
                    	<th width="41" class="text-center">ɾ��</th>
                        <th width="50">����</th>
                        <th width="50">Ĭ��</th>
                        <th width="150">��������</th>
                        <th width="79">ɾ��</th>
                        <th>�޸�</th>

                    </tr>
                <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
                    <tr>  <!-- <tr class="checked">Ĭ��ѡ�� -->
                    <td class="text-center"><input name="classid[]" type="checkbox" id="classid[]" value="<?php echo $this->_tpl_vars['v']['classid']; ?>
" /></td>
                    <td><input type="text" name="sort[<?php echo $this->_tpl_vars['v']['classid']; ?>
]" class="textinput" tabindex="11" value="<?php echo $this->_tpl_vars['v']['sort']; ?>
" /></td>
                    <td><input name="is_default" type="radio" id="is_default" value="<?php echo $this->_tpl_vars['v']['classid']; ?>
" <?php if ($this->_tpl_vars['v']['is_default']): ?>checked<?php endif; ?> /></td>
                    <td><?php echo $this->_tpl_vars['v']['classname']; ?>
</td>
                    <td><?php if ($this->_tpl_vars['v']['id'] == 1): ?>ɾ��<?php else: ?><a href="?c=search_class&a=search_class_operate&classid=<?php echo $this->_tpl_vars['v']['classid']; ?>
">ɾ��</a><?php endif; ?></td>
                    <td><a href="?c=search_class&a=search_class_edit&classid=<?php echo $this->_tpl_vars['v']['classid']; ?>
">�޸�</a></td>
                    </tr>
                <?php endforeach; endif; unset($_from); ?>

                    <tr class="foot-ctrl">
                    <td colspan="8" class="gray">ѡ��: <a href="#" onClick="checkTb1(1);">ȫѡ</a> - <a href="#" onClick="checkTb1(3);">��ѡ</a> - <a href="#" onClick="checkTb1(2);">��</a></td>
                    </tr>

                    </table>

                    <div class="th"><!--/ pages-->

                    	<div class="form">
                            <input type="submit" name="Submit3" value=" �ύ�޸� ">
                    	</div>
                    </div>
                </div>

				</form>
            </div><!--/ con-->





        </div>
    </div><!--/ container-->

</div><!--/ wrap-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>