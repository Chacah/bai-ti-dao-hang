<?php /* Smarty version 2.6.25, created on 2011-08-16 22:09:13
         compiled from template_list.tpl */ ?>
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

    function tiaozhun(obj)
    {
        if(obj.value == "") return;
        location.href = "?c=template_manage&a=template_list&classid=" + obj.value;
    }
</script>
<body id="main_page">

<div class="wrap">
    <div class="container">

        <div id="main">

            <div class="con">
            	<form action="<?php echo $this->_tpl_vars['sys']['subform']; ?>
" method="post">
                    <div class="table">
                    <div class="th">
                    	<div class="form">
                    	    <input type="button" value="���ģ��" onClick="location.href='?c=template_manage&a=template_add&folder=<?php echo $this->_tpl_vars['folder']; ?>
'" />&nbsp;
                        </div>
                    </div>

                    <table class="admin-tb" id="tb1">
                    <tr>
                    	<th width="41" class="text-center"><input type="checkbox" rel="control" onClick="this.checked?checkTb1(1):checkTb1(2);" /></th>
                        <th width="180">ģ���ļ�</th>
                        <th width="80">����ģ��</th>
                        <th width="80">��ԭģ��</th>
                        <th width="80">ɾ��</th>
                        <th width="80">�޸�</th>
                        <th>Ӧ����</th>
                    </tr>
                    <?php if ($this->_tpl_vars['data']): ?>
                    <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                    <tr>  <!-- <tr class="checked">Ĭ��ѡ�� -->
                        <td class="text-center"><input name="tpl_file[]" type="checkbox" id="tpl_file[]" value="<?php echo $this->_tpl_vars['v']; ?>
" /></td>
                        <td><?php echo $this->_tpl_vars['v']; ?>
</td>
                        <td><a href="?c=template_manage&a=backup&folder=<?php echo $this->_tpl_vars['folder']; ?>
&tpl_file=<?php echo $this->_tpl_vars['v']; ?>
">����ģ��</a></td>
                        <td><a href="?c=template_manage&a=restore&folder=<?php echo $this->_tpl_vars['folder']; ?>
&tpl_file=<?php echo $this->_tpl_vars['v']; ?>
">��ԭģ��</a></td>
                        <td><a href="?c=template_manage&a=template_delete&folder=<?php echo $this->_tpl_vars['folder']; ?>
&tpl_file=<?php echo $this->_tpl_vars['v']; ?>
">ɾ��</a></td>
                        <td><a href="?c=template_manage&a=template_edit&folder=<?php echo $this->_tpl_vars['folder']; ?>
&tpl_file=<?php echo $this->_tpl_vars['v']; ?>
">�޸�</a></td>
                        <td>Ӧ����</td>
                    </tr>
                    <?php endforeach; endif; unset($_from); ?>
                    <?php else: ?>
                    <tr>
                        <td colspan=8 style="text-align:center"><font color=red>����ģ�棡</font></td>
                    </tr>
                    <?php endif; ?>
                    <tr class="foot-ctrl">
                    <td colspan="8" class="gray">ѡ��: <a href="#" onClick="checkTb1(1);">ȫѡ</a> - <a href="#" onClick="checkTb1(3);">��ѡ</a> - <a href="#" onClick="checkTb1(2);">��</a></td>
                    </tr>

                    </table>

                    <div class="th"><!--/ pages-->

                    	<div class="form">
                            <input type="submit" name="Submit3" value=" ɾ����ѡ ">
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