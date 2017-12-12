<?php /* Smarty version Smarty-3.1.16, created on 2014-03-18 08:57:23
         compiled from "F:\wamp\webpage\market\backstage\Smarty\templates\edit_news.html" */ ?>
<?php /*%%SmartyHeaderCode:9280532799f3b13466-14931548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be9c0c00bb4bc51c937339101cca5a08feab3e99' => 
    array (
      0 => 'F:\\wamp\\webpage\\market\\backstage\\Smarty\\templates\\edit_news.html',
      1 => 1394356971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9280532799f3b13466-14931548',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'bcjyzs' => 0,
    'edit' => 0,
    'bcjyz' => 0,
    'editor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_532799f3bcf4d1_27203409',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532799f3bcf4d1_27203409')) {function content_532799f3bcf4d1_27203409($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>管理新闻</title>
</head>
<SCRIPT src="../js/jquery.js"></SCRIPT>
<body style="background-color: #fcfcfc">
<!--右侧-->
<div>
    <DIV style="width: 715px;height:770px;background: url('../images/k770.png') no-repeat;">
    <h2 align="center">新闻列表</h2>
    <br />
    <br />
    <DIV style="padding-left: 40px;">
        <DIV class="tadiv" style="padding-left: 0px;">
            <DIV style="LINE-HEIGHT: 25px; WIDTH: 30%; FLOAT: left; text-align:center; HEIGHT: 25px;border:1px solid;">标题</DIV>
            <DIV style="LINE-HEIGHT: 25px; WIDTH: 30%; FLOAT: left; text-align:center; HEIGHT: 25px; ;border:1px solid;border-left:none;">添加时间</DIV>
            <DIV style="LINE-HEIGHT: 25px; WIDTH: 30%; FLOAT: left; text-align:center; HEIGHT: 25px; ;border:1px solid;border-left:none;">操作 </DIV>
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
            <DIV style="LINE-HEIGHT: 23px; WIDTH: 30%; FLOAT: left; text-align:center;HEIGHT: 23px; border:1px solid;border-top:none;overflow: hidden;"><?php echo $_smarty_tpl->tpl_vars['bcjyzs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]['title'];?>
</DIV>
            <DIV style="LINE-HEIGHT: 23px; WIDTH: 30%; FLOAT: left; text-align:center;HEIGHT: 23px;  border:1px solid;border-top:none;border-left:none;overflow: hidden;"><?php echo $_smarty_tpl->tpl_vars['bcjyzs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]['addtime'];?>
</DIV>
            <DIV style="LINE-HEIGHT: 23px; WIDTH: 30%; FLOAT: left; text-align:center; HEIGHT: 23px;  border:1px solid;border-top:none;border-left:none;"><a href="?edit=t&id=<?php echo $_smarty_tpl->tpl_vars['bcjyzs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]['entity_id'];?>
" >编辑&nbsp;|&nbsp;<a href="news_control.php?del=t&id=<?php echo $_smarty_tpl->tpl_vars['bcjyzs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]['entity_id'];?>
">删除</a></DIV>
        </DIV>
   <?php endfor; endif; ?>
    </DIV>
    <br />
    <br />
    <br />
    <div style="clear:both;"></div>
    <?php if ($_smarty_tpl->tpl_vars['edit']->value=='t') {?>
    <div style="padding-left: 40px;">
        <form name="edit_admin" method="post" action="news_control.php"  style="margin:0px; padding:0px;" onsubmit="return chkeditnews(this)">

            <p>标题：
                <input type="text" name="title" id="title" value="<?php echo $_smarty_tpl->tpl_vars['bcjyz']->value['title'];?>
" size="60"/><br/><br/>
                内容:
          <?php echo $_smarty_tpl->tpl_vars['editor']->value;?>


                <br/><br/>
                <input type="hidden" name="bcjyzid" value="<?php echo $_smarty_tpl->tpl_vars['bcjyz']->value['entity_id'];?>
">
                <input type="submit" value="提交" name="submite"/>
            </p>
        </form>
    </div>
    <?php }?>
</div>

<script language="javascript">

    function chkeditnews(form){
        if(form.title.value == ''){
            alert("title is not null!");
            form.title.focus();
            return false;
        }
        return true
    }

</script>
</body>
</html><?php }} ?>
