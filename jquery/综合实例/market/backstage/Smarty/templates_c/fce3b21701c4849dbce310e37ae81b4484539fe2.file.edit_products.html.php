<?php /* Smarty version Smarty-3.1.16, created on 2014-12-22 09:42:42
         compiled from "F:\wamp\webpage\market\backstage\Smarty\templates\edit_products.html" */ ?>
<?php /*%%SmartyHeaderCode:1968253279939c117d2-84554264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fce3b21701c4849dbce310e37ae81b4484539fe2' => 
    array (
      0 => 'F:\\wamp\\webpage\\market\\backstage\\Smarty\\templates\\edit_products.html',
      1 => 1419212145,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1968253279939c117d2-84554264',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53279939d591f8_32352699',
  'variables' => 
  array (
    'bcjyzs' => 0,
    'edit' => 0,
    'bcjyz' => 0,
    'editor' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53279939d591f8_32352699')) {function content_53279939d591f8_32352699($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>管理产品</title>
</head>
<SCRIPT src="../js/jquery.js"></SCRIPT>
<body style="background-color: #fcfcfc">
<!--右侧-->
<div style="background-color: #fcfcfc">
    <DIV style="width: 715px;height:770px;background: url('../images/k770.png') no-repeat;">
    <h2 align="center" style="padding-top: 10px;">产品列表</h2>
    <br />
    <br />
    <DIV style="padding-left: 40px;">
        <DIV class="tadiv" style="padding-left: 0px;">
            <DIV style="LINE-HEIGHT: 25px; WIDTH: 22%; FLOAT: left; text-align:center; HEIGHT: 25px;border:1px solid;">产品名称</DIV>
            <DIV style="LINE-HEIGHT: 25px; WIDTH: 22%; FLOAT: left; text-align:center; HEIGHT: 25px;;border:1px solid;border-left:none;">价格</DIV>
            <DIV style="LINE-HEIGHT: 25px; WIDTH: 22%; FLOAT: left; text-align:center; HEIGHT: 25px; ;border:1px solid;border-left:none;">添加时间</DIV>
            <DIV style="LINE-HEIGHT: 25px; WIDTH: 28%; FLOAT: left; text-align:center; HEIGHT: 25px; ;border:1px solid;border-left:none;">操作 </DIV>
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
            <DIV style="LINE-HEIGHT: 23px; WIDTH: 22%; FLOAT: left; text-align:center;HEIGHT: 23px; border:1px solid;border-top:none;overflow: hidden;"><?php echo $_smarty_tpl->tpl_vars['bcjyzs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]['product_name'];?>
</DIV>
            <DIV style="LINE-HEIGHT: 23px; WIDTH: 22%; FLOAT: left; text-align:center;HEIGHT: 23px;  border:1px solid;border-top:none;border-left:none;overflow: hidden;"><?php echo $_smarty_tpl->tpl_vars['bcjyzs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]['price'];?>
</DIV>
            <DIV style="LINE-HEIGHT: 23px; WIDTH: 22%; FLOAT: left; text-align:center; HEIGHT: 23px;  border:1px solid;border-top:none;border-left:none;overflow: hidden;"> <?php echo $_smarty_tpl->tpl_vars['bcjyzs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]['addtime'];?>
</DIV>
            <DIV style="LINE-HEIGHT: 23px; WIDTH: 28%; FLOAT: left; text-align:center; HEIGHT: 23px;  border:1px solid;border-top:none;border-left:none;"><a href="edit_reviews.php?product_id=<?php echo $_smarty_tpl->tpl_vars['bcjyzs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]['entity_id'];?>
">产品评价</a>  |  <a href="?edit=t&id=<?php echo $_smarty_tpl->tpl_vars['bcjyzs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]['entity_id'];?>
&productpath=<?php echo $_smarty_tpl->tpl_vars['bcjyzs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]['picture'];?>
" >编辑&nbsp;|&nbsp;<a href="products_control.php?del=t&id=<?php echo $_smarty_tpl->tpl_vars['bcjyzs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]['entity_id'];?>
&oldpath=<?php echo $_smarty_tpl->tpl_vars['bcjyzs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]['picture'];?>
&oldcover=<?php echo $_smarty_tpl->tpl_vars['bcjyzs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]['cover'];?>
&oldsmallcover=<?php echo $_smarty_tpl->tpl_vars['bcjyzs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]['smallcover'];?>
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
        <form name="edit_product" method="post" action="products_control.php" enctype="multipart/form-data" style="margin:0px; padding:0px;" onsubmit="return chkeditproduct(this)">

            <p>产品名称：
                <input type="text" name="product_name" id="name" value="<?php echo $_smarty_tpl->tpl_vars['bcjyz']->value[0]['product_name'];?>
" size="60"/><br/><br/>
                封面图:
                <input name="cover" type="file" id="cover" size="50"/><br/><br/>
                <br/><br/>
                封面小图:
                <input name="smallcover" type="file" id="smallcover" size="50"/><br/><br/>
                价格：
                <input type="text" name="price" id="price" value="<?php echo $_smarty_tpl->tpl_vars['bcjyz']->value[0]['price'];?>
" size="60"/><br/><br/>
                重量：
                <input type="text" name="weight" id="weight" value="<?php echo $_smarty_tpl->tpl_vars['bcjyz']->value[0]['weight'];?>
" size="60"/><br/><br/>
                发货方式：
                <input type="text" name="methods" id="methods" value="<?php echo $_smarty_tpl->tpl_vars['bcjyz']->value[0]['methods'];?>
" size="60"/><br/><br/>
                产品描述：
               <?php echo $_smarty_tpl->tpl_vars['editor']->value;?>

                <br/><br/>
                防伪码:<input type="text" name="auth_code" id="auth_code" value="<?php echo $_smarty_tpl->tpl_vars['bcjyz']->value[0]['auth_code'];?>
" size="60"/><br/><br/>
                细节图：
                <input name="picture" type="file" id="picture" size="50"/><br/><br/>
                <input name="oldsmallcover" type="hidden" size="50" value="<?php echo $_smarty_tpl->tpl_vars['bcjyz']->value[0]['smallcover'];?>
"/><br/><br/>
                <input name="oldcover" type="hidden" size="50" value="<?php echo $_smarty_tpl->tpl_vars['bcjyz']->value[0]['cover'];?>
"/><br/><br/>
                <input name="oldpicture" type="hidden" size="50" value="<?php echo $_smarty_tpl->tpl_vars['bcjyz']->value[0]['picture'];?>
"/><br/><br/>
                <input type="hidden" name="bcjyzid" value="<?php echo $_smarty_tpl->tpl_vars['bcjyz']->value[0]['entity_id'];?>
">
                <input type="hidden" name="oldpath" value="<?php echo $_smarty_tpl->tpl_vars['bcjyz']->value[0]['picture'];?>
"/>
                <input type="submit" value="提交" name="submite"/>
            </p>
        </form>
    </div>
    <?php }?> </div>
</div>

<script language="javascript">

    function chkeditproduct(form){
        if(form.product_name.value == ''){
            alert("请输入产品名称!");
            form.product_name.focus();
            return false;
        }
        if(form.description.value==''){
            alert('请输入产品描述!');
            form.description.focus();
            return false;
        }
        if(form.picture.value){
            str = form.picture.value.split(".");
            extname = str[str.length-1];
            if(!(extname == 'jpg' || extname == 'gif' || extname == 'png' || extname == 'bmp')){
                alert("您上传的文件格式不对！");
                form.picture.focus();
                return false;
            }
        }
        return true
    }

</script>
</body>
</html><?php }} ?>
