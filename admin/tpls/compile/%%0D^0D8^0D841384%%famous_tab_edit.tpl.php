<?php /* Smarty version 2.6.25, created on 2011-09-01 22:51:50
         compiled from famous_tab_edit.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="wrap">
    <div class="container">
        <div id="main">
            <div class="con box-green">
                <form action="?c=famous_tab&a=save" method="post">
                <input type="hidden" name="action" value="<?php echo $this->_tpl_vars['action']; ?>
"/>
                <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
"/>
                <input type="hidden" name="referer" value="<?php echo $this->_tpl_vars['referer']; ?>
"/>
                <div class="box-header">
                    <h4><?php if ($this->_tpl_vars['action'] == 'modify'): ?>�޸�<?php else: ?></>���<?php endif; ?>��ַ</h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <th class="w120">��ǩ���ƣ�</th>
                            <td><input type="text" name="name" value="<?php echo $this->_tpl_vars['data']['name']; ?>
" class="textinput w270" /></td>
                        </tr>
                        <tr>
                            <th>ifreme��ַ��</th>
                            <td><input type="text" name="url" value="<?php echo $this->_tpl_vars['data']['url']; ?>
" class="textinput w270" /></td>
                        </tr>
                        
                        <tr>
                            <th>����</th>
                            <td><input type="text" name="order" value="<?php echo $this->_tpl_vars['data']['order']; ?>
" class="textinput w60"   onkeyup="value=value.replace(/[^\d]/g,'')" /></td>
                        </tr>
                        
                        <tr>
                            <th>�Ƿ񻺴棺</th>
                            <td><label><input type="radio" name="nocache" value='0' <?php if ($this->_tpl_vars['data']['nocache'] == 0): ?>checked="checked"<?php endif; ?>  />��</label>&nbsp;&nbsp;&nbsp;<label><input type="radio" name="nocache" value='1' <?php if ($this->_tpl_vars['data']['nocache']): ?>checked="checked"<?php endif; ?> />��</label>
								
                                
                                </td>
                        </tr>
                        <tr>
                        	<th>&nbsp;</th>
                            <td><p>���ﻺ����ָҳ���ڲ�ˢ������£�ֻ����iframeһ��,���������л�Tabʱÿ�ζ�ȥ���ء�<br />
                                	��ѡ�񲻻�����ÿ���л�Tabʱ�����¼��أ�����ǰTabû�б�����,��iframe�ᱻ��ա�<br />
									<em style="color:red; font-style:normal">����ֻ�ڡ���Ʊ��顱����ˢ�����ݵ�iframeѡ�񲻻��档</em><br />

                                </p>
                                
                                </td>
                        </tr>
                        
                        
                    </table>
                </div>
                <div class="box-footer">
                    <div class="box-footer-inner">
                    	<input type="submit" value="�ύ" /></a> �� <a href="?c=famous_tab&a=index&classid=<?php echo $this->_tpl_vars['data']['class']; ?>
">ȡ��</a>
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