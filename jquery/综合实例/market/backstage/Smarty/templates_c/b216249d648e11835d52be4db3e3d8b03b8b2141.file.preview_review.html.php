<?php /* Smarty version Smarty-3.1.16, created on 2014-03-09 09:45:34
         compiled from "F:\Web\apache\htdocs\market\backstage\Smarty\templates\preview_review.html" */ ?>
<?php /*%%SmartyHeaderCode:31372531c383e08d372-46855394%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b216249d648e11835d52be4db3e3d8b03b8b2141' => 
    array (
      0 => 'F:\\Web\\apache\\htdocs\\market\\backstage\\Smarty\\templates\\preview_review.html',
      1 => 1394358327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31372531c383e08d372-46855394',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'review' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_531c383e0e1608_34646694',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531c383e0e1608_34646694')) {function content_531c383e0e1608_34646694($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>评论预览</title>
</head>
<body style="background-color: #fcfcfc">

<div style="text-align: center;">
    <DIV style="width: 715px;height:470px;background: url('../images/k470.png') no-repeat;">
        <div style="padding-top: 10px;">
            <h2>用户评论</h2>
            <div>用户名:<?php echo $_smarty_tpl->tpl_vars['review']->value[0]['customer_name'];?>
</div>
            <div>分数:<?php echo $_smarty_tpl->tpl_vars['review']->value[0]['score'];?>
</div>
            <div>评论:<?php echo $_smarty_tpl->tpl_vars['review']->value[0]['message'];?>
</div>
            <div>评论时间:<?php echo $_smarty_tpl->tpl_vars['review']->value[0]['addtime'];?>
</div>
            <input type="button" value="返回" onclick="javascript:history.go(-1)">
        </div>
        <DIV>
        </div>

</body>
</html><?php }} ?>
