<?php /* Smarty version Smarty-3.1.16, created on 2014-03-09 08:51:44
         compiled from "F:\Web\apache\htdocs\market\backstage\Smarty\templates\add_news.html" */ ?>
<?php /*%%SmartyHeaderCode:18711531c29edcba8f4-72570037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '717eca672a06f5c883c5e415c0d283cb7c0de70c' => 
    array (
      0 => 'F:\\Web\\apache\\htdocs\\market\\backstage\\Smarty\\templates\\add_news.html',
      1 => 1394355102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18711531c29edcba8f4-72570037',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_531c29edcefbe7_33574626',
  'variables' => 
  array (
    'editor' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531c29edcefbe7_33574626')) {function content_531c29edcefbe7_33574626($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
