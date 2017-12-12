<?php /* Smarty version Smarty-3.1.16, created on 2014-03-09 10:10:21
         compiled from "F:\Web\apache\htdocs\market\backstage\Smarty\templates\add_admin.html" */ ?>
<?php /*%%SmartyHeaderCode:4271531c3e0d26de96-06018997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8a8f529fecf82c5e4b6eb16fa5b9d5cb0b066b2' => 
    array (
      0 => 'F:\\Web\\apache\\htdocs\\market\\backstage\\Smarty\\templates\\add_admin.html',
      1 => 1394359820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4271531c3e0d26de96-06018997',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_531c3e0d2a6695_57228602',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531c3e0d2a6695_57228602')) {function content_531c3e0d2a6695_57228602($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>添加用户</title>
</head>

<body style="background-color: #fcfcfc">
<div id="con_right">
    <div>
        <br />
        <br />
        <DIV>
            <form name="form_addadmin" method="post" action="admin_control.php" onsubmit="return chkinputaddadmin(this)" style="margin:0px; padding:0px;">

                <h2>添加用户</h2><br />
                <p>
                <p>用户名：
                    <input type="text" name="admin_user" id="admin_user" size="60" class="input1" /><br/><br/>
                    密码:
                    <input type="text" name="admin_pass" id="admin_pass" size="60" class="input1" /><br/><br/>
                    <input type="submit" name="submit" value="添加" />
            </form>
        </DIV>
        <BR>
    </div>
</div>
<script language="javascript">


    function chkinputaddadmin(form){
        if(form.admin_user.value==''){
            alert('用户名不能为空！');
            form.admin_user.focus();
            return false;
        }

        if(form.password.value==''){
            alert('密码不能为空!');
            form.password.focus();
            return false;
        }

        return true
    }

</script>

</body>
</html><?php }} ?>
