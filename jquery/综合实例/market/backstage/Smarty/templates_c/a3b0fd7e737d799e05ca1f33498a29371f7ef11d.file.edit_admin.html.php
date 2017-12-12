<?php /* Smarty version Smarty-3.1.16, created on 2014-12-17 11:06:26
         compiled from "F:\wamp\webpage\market\backstage\Smarty\templates\edit_admin.html" */ ?>
<?php /*%%SmartyHeaderCode:3715490f332e74418-63471855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3b0fd7e737d799e05ca1f33498a29371f7ef11d' => 
    array (
      0 => 'F:\\wamp\\webpage\\market\\backstage\\Smarty\\templates\\edit_admin.html',
      1 => 1418625021,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3715490f332e74418-63471855',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'bcjyzs' => 0,
    'edit' => 0,
    'bcjyz' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5490f3331d1648_90840190',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5490f3331d1648_90840190')) {function content_5490f3331d1648_90840190($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>管理用户</title>
</head>
<SCRIPT src="../js/jquery.js"></SCRIPT>
<body style="background-color: #fcfcfc">
<!--右侧-->
<div>
    <div style="width: 715px;height:470px;background: url('../images/k470.png') no-repeat;">
        <h2 align="center">用户列表</h2>
        <br />
        <br />
        <DIV style="padding-left: 44px;">
            <DIV class="tadiv" style="padding-left: 0px;">
                <DIV style="LINE-HEIGHT: 25px; WIDTH: 32%; FLOAT: left; text-align:center; HEIGHT: 25px; border:1px solid;">用户名</DIV>
                <DIV style="LINE-HEIGHT: 25px; WIDTH: 32%; FLOAT: left; text-align:center; HEIGHT: 25px; ;border:1px solid;border-left:none;">添加时间</DIV>
                <DIV style="LINE-HEIGHT: 25px; WIDTH: 32%; FLOAT: left; text-align:center; HEIGHT: 25px; ;border:1px solid;border-left:none;">操作 </DIV>
            </DIV>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['bcjyzs']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total']);
?>
            <DIV>
                <DIV style="LINE-HEIGHT: 23px; WIDTH: 32%; FLOAT: left; text-align:center;HEIGHT: 23px; border:1px solid;border-top:none;overflow: hidden;"><?php echo $_smarty_tpl->tpl_vars['bcjyzs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]['admin_user'];?>
</DIV>
                <DIV style="LINE-HEIGHT: 23px; WIDTH: 32%; FLOAT: left; text-align:center; HEIGHT: 23px; border:1px solid;border-top:none;border-left:none;overflow: hidden;"> <?php echo $_smarty_tpl->tpl_vars['bcjyzs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]['addtime'];?>
</DIV>
                <DIV style="LINE-HEIGHT: 23px; WIDTH: 32%; FLOAT: left; text-align:center; HEIGHT: 23px; border:1px solid;border-top:none;border-left:none;"><a href="?edit=t&id=<?php echo $_smarty_tpl->tpl_vars['bcjyzs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]['entity_id'];?>
" >编辑&nbsp;|&nbsp;<a href="admin_control.php?del=t&id=<?php echo $_smarty_tpl->tpl_vars['bcjyzs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]['entity_id'];?>
">删除</a></DIV>
            </DIV>
            <?php endfor; endif; ?>
        </DIV>
        <br />
        <br />
        <br />
        <br/>
        <?php if ($_smarty_tpl->tpl_vars['edit']->value=='t') {?>
        <div >
            <form name="edit_admin" method="post" action="admin_control.php"  style="margin:0px; padding:0px;" onsubmit="return chkeditadmin(this)">

                <p>用户名：
                    <input type="text" name="admin_user" id="admin_user" value="<?php echo $_smarty_tpl->tpl_vars['bcjyz']->value['admin_user'];?>
" size="60"/><br/><br/>
                    密码:
                    <input type="text" name="admin_pass" id="admin_pass" />

                    <br/><br/>
                    <input type="hidden" name="bcjyzid" value="<?php echo $_smarty_tpl->tpl_vars['bcjyz']->value['entity_id'];?>
">
                    <input type="submit" value="修改" name="submite"/>
                </p>
            </form>
        </div>
        <?php }?></div>
</div>

<script language="javascript">

    function chkeditadmin(form){
        if(form.admin_user.value == ''){
            alert("用户名不能为空!");
            form.admin_user.focus();
            return false;
        }
        if(form.admin_pass.value==''){
            alert('密码不能为空!');
            form.admin_pass.focus();
            return false;
        }
        return true
    }

</script>
</body>
</html><?php }} ?>
