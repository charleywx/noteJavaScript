<?php /* Smarty version Smarty-3.1.16, created on 2014-03-09 09:42:48
         compiled from "F:\Web\apache\htdocs\market\backstage\Smarty\templates\edit_reviews.html" */ ?>
<?php /*%%SmartyHeaderCode:959531c3798dfe797-01606703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c4a89248b10b185b4f2bc1b83b7e5f71293624e' => 
    array (
      0 => 'F:\\Web\\apache\\htdocs\\market\\backstage\\Smarty\\templates\\edit_reviews.html',
      1 => 1394358165,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '959531c3798dfe797-01606703',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_reviews' => 0,
    'pid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_531c3798e619b4_88560177',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531c3798e619b4_88560177')) {function content_531c3798e619b4_88560177($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>编辑评价</title>
    <SCRIPT src="../js/jquery.js"></SCRIPT>
</head>
<body style="background-color: #fcfcfc">

<!--右侧-->
<div>
    <DIV style="width: 715px;height:570px;;background: url('../images/k570.png') no-repeat;">
        <h2 align="center">评价列表</h2>
        <br />
        <br />
        <DIV style="padding-left: 40px;">
            <DIV class="tadiv" style="padding-left: 0px;">
                <DIV style="LINE-HEIGHT: 25px; WIDTH: 22%; FLOAT: left; text-align:center; HEIGHT: 25px;border:1px solid;">用户名</DIV>
                <DIV style="LINE-HEIGHT: 25px; WIDTH: 22%; FLOAT: left; text-align:center; HEIGHT: 25px; ;border:1px solid;border-left:none;">分数</DIV>
                <DIV style="LINE-HEIGHT: 25px; WIDTH: 22%; FLOAT: left; text-align:center; HEIGHT: 25px; ;border:1px solid;border-left:none;">添加时间</DIV>
                <DIV style="LINE-HEIGHT: 25px; WIDTH: 22%; FLOAT: left; text-align:center; HEIGHT: 25px; ;border:1px solid;border-left:none;">操作 </DIV>
            </DIV>
           <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['product_reviews']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                <DIV style="LINE-HEIGHT: 23px; WIDTH: 22%; FLOAT: left; text-align:center;HEIGHT: 23px; border:1px solid;border-top:none;overflow: hidden;"><?php echo $_smarty_tpl->tpl_vars['product_reviews']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]['customer_name'];?>
</DIV>
                <DIV style="LINE-HEIGHT: 23px; WIDTH: 22%; FLOAT: left; text-align:center;HEIGHT: 23px; border:1px solid;border-top:none;border-left:none;overflow: hidden;"><?php echo $_smarty_tpl->tpl_vars['product_reviews']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]['score'];?>
</DIV>
                <DIV style="LINE-HEIGHT: 23px; WIDTH: 22%; FLOAT: left; text-align:center;HEIGHT: 23px;  border:1px solid;border-top:none;border-left:none;overflow: hidden;"><?php echo $_smarty_tpl->tpl_vars['product_reviews']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]['addtime'];?>
</DIV>
                <DIV style="LINE-HEIGHT: 23px; WIDTH: 22%; FLOAT: left; text-align:center; HEIGHT: 23px;  border:1px solid;border-top:none;border-left:none;"><a href="preview_review.php?entity_id=<?php echo $_smarty_tpl->tpl_vars['product_reviews']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]['entity_id'];?>
">预览</a>  | &nbsp;|&nbsp;<a href="reviews_control.php?del=t&id=<?php echo $_smarty_tpl->tpl_vars['product_reviews']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]['entity_id'];?>
&product_id=<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
">删除</a></DIV>
            </DIV>
           <?php endfor; endif; ?>
        </DIV>
        <br />
        <br />
        <br />
        <br/>
    </div>

</body>
</html><?php }} ?>
