<?php /* Smarty version 2.6.25, created on 2011-08-16 22:47:44
         compiled from city_cityclass_list.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript" charset="utf-8">
    function toggle (parentid) 
    {
        var obj_id = 'parentid_' + parentid;
        $('.'+obj_id).toggle();
    }
</script>
<div class="wrap">
    <div class="container">

        <div id="main">
            
            <div class="con">
            	<form action="?c=city_cityclass&a=list_edit" method="post">
                    <input type="hidden" name="referer" value="<?php echo $this->_tpl_vars['referer']; ?>
"/>
                  <div class="table">
                  	<div class="th">
                    	<div class="form">
                        <input type="button" value="添加城市分类" onclick="window.location='?c=city_cityclass&a=edit&action=add'" />&nbsp;
                        </div>
                    </div>
                   
                    <table class="admin-tb" id="js_data_source">
                    <tr>
                    	<th width="41" class="text-center">删除</th>    
                        <th width="100">排序</th>            	
                        <th width="180">城市分类名称</th>
                        <th width="200">自定义路径/文件名：</th>
                        <th width="200">自定义模板：</th>
                        <th>操作</th>
                    </tr>
                    <?php if ($this->_tpl_vars['list']): ?>
                    <?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
                    <tr>
                        <td class="text-center"><input rel="del" type="checkbox" name="delete[<?php echo $this->_tpl_vars['i']['id']; ?>
]"  /></td>
                        <td><input type="text" name="order[<?php echo $this->_tpl_vars['i']['id']; ?>
]" value="<?php echo $this->_tpl_vars['i']['displayorder']; ?>
" class="textinput" tabindex="11" /></td>                 
                        <td><?php echo $this->_tpl_vars['i']['name']; ?>
</td>
                        <td><input type="text" name="path[<?php echo $this->_tpl_vars['i']['id']; ?>
]" value="<?php echo $this->_tpl_vars['i']['path']; ?>
" style="width:270" /></td>
                        <td><input type="text" name="template[<?php echo $this->_tpl_vars['i']['id']; ?>
]" value="<?php echo $this->_tpl_vars['i']['template']; ?>
" style="width:270" /></td>
                        <td><a href="?c=city_cityclass&a=edit&action=modify&id=<?php echo $this->_tpl_vars['i']['id']; ?>
">修改</a> <a href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/city/<?php if ($this->_tpl_vars['i']['path']): ?><?php echo $this->_tpl_vars['i']['path']; ?>
<?php else: ?>city_<?php echo $this->_tpl_vars['i']['id']; ?>
<?php endif; ?>/index.htm" target="_blank">查看</a>
                        <a href="?c=city_cityclass&a=make_js&id=<?php echo $this->_tpl_vars['i']['id']; ?>
">生成首页调用JS</a></td>
                    </tr>
                    <?php endforeach; endif; unset($_from); ?>
                    <?php else: ?>
                    <tr>
                        <td colspan=5><font color=red>暂无酷站分类</font></td>
                    </tr>
                    <?php endif; ?>
                    </table>
                    <script type="text/javascript">
                        $(document).ready(function(){
							$(".admin-tb").find("input[rel='del']").each(function(i){
								$(this).bind("click",function(){
									
									
								})
							});	
							
							
                            $("#js_data_source").find("input[rel='del']").each(function(i){
                                $(this).bind("click",function(){
                                    var tr = $(this).parent().parent();
                                    var input = tr.find("input[rel='dis']");
                                    if(this.checked){
										$(input).attr("oledchecked",$(input).attr("checked"));
										$(input).attr("checked","");
										$(input).attr("disabled","disabled");
									}
									else{
										$(input).attr("disabled","");
										$(input).attr("checked",$(input).attr("oledchecked"));
									}
									
									$(".admin-tb").find("input[rel='del']").each(function(i){
										var tr2 = $(this).parent().parent();
										if(this.checked){
											tr2.addClass("checked");
										}
										else{
											tr2.removeClass("checked");
										}
									})
                                });                             
                            });
                            $("#js_data_source").find("input[rel='dis']").change(function(){
                                if ($(this).next('input[type="hidden"]').val() == 1) $(this).next('input[type="hidden"]').val(0);
                                else $(this).next('input[type="hidden"]').val(1);
							});
                        });
                    </script>
                    <div class="th">
                    	<div class="form">
                        <input type="submit" value="提交修改" />&nbsp; <input type="button" value="生成全部首页调用JS" onclick="location.href='?c=city_cityclass&a=make_js'" />
                        </div>
                    </div>
                </div>
				</form>
            </div><!--/ con-->
        </div>    
    </div><!--/ container-->
    </div><!--/ wrap-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>