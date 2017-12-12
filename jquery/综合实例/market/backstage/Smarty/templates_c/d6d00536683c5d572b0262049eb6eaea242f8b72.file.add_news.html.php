<?php /* Smarty version Smarty-3.1.16, created on 2014-12-11 10:38:45
         compiled from "F:\wamp\webpage\market\backstage\Smarty\templates\add_news.html" */ ?>
<?php /*%%SmartyHeaderCode:11722548903b57bfa42-54064795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6d00536683c5d572b0262049eb6eaea242f8b72' => 
    array (
      0 => 'F:\\wamp\\webpage\\market\\backstage\\Smarty\\templates\\add_news.html',
      1 => 1394355102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11722548903b57bfa42-54064795',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'editor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_548903b5839b67_24986187',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548903b5839b67_24986187')) {function content_548903b5839b67_24986187($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>添加新闻</title>
</head>

<body style="background-color: #fcfcfc">
<div id="con_right">
    <div>
        <br />
        <br />
        <DIV>
            <form name="form_addnews" method="post" action="news_control.php" onsubmit="return chkinputaddnews(this)" style="margin:0px; padding:0px;">

                <h2>添加新闻</h2><br />
                <p>
                <p>标题：
                    <input type="text" name="title" id="title" size="60" class="input1" /><br/><br/>
                    内容:
                   <?php echo $_smarty_tpl->tpl_vars['editor']->value;?>

                    <br/><br/>
                    <input type="submit" name="submit" value="添加" />
            </form>
        </DIV>
        <BR>
    </div>
</div>
<script language="javascript">


    function chkinputaddnews(form){
        if(form.title.value==''){
            alert('请输入标题！');
            form.title.focus();
            return false;
        }

        return true
    }

</script>

</body>
</html><?php }} ?>
