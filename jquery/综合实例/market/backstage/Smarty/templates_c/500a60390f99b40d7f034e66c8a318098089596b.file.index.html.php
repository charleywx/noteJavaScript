<?php /* Smarty version Smarty-3.1.16, created on 2014-03-09 08:41:52
         compiled from "F:\Web\apache\htdocs\market\backstage\Smarty\templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:28849531c2950c1a5a5-48544385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '500a60390f99b40d7f034e66c8a318098089596b' => 
    array (
      0 => 'F:\\Web\\apache\\htdocs\\market\\backstage\\Smarty\\templates\\index.html',
      1 => 1394354499,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28849531c2950c1a5a5-48544385',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_531c2950c532e5_20686299',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531c2950c532e5_20686299')) {function content_531c2950c532e5_20686299($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>明日科技工作反馈系统后台登陆</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <script language="javascript">
        if(top.location != self.location){
            top.location = self.location
        }

        function chk_login(form){
            if(form.username.value==''){
                alert('用户名不能为空！');
                form.username.focus();
                return false;
            }

            if(form.pwd.value==''){
                alert('密码不能为空！');
                form.pwd.focus();
                return false;
            }
            if (form.xym.value == "") {
                alert("请输入验证码！");
                form.xym.focus();
                return false;
            }
            if (form.xym.value != form.xym1.value) {
                alert("验证码输入有误！");
                form.xym.focus();
                return false;
            }
            return true;
        }
    </script>
</head>

<body>
<div id="middle">
    <div id='inner' class="bfd">
        <form id="form1" name="form1" method="post" action="" onsubmit="return chk_login(this)">
            <div class="sd">
                <span>用户名</span>
                <input name="username" class="font2" type="text" />
            </div>
            <div class="td">
                <span>密&nbsp;&nbsp;&nbsp;&nbsp;码</span>
                <input name="pwd" class="font2" type="password"/>
            </div>

            <div class="td" style="float: left">
                <span>验证码 </span><input type="text" name="xym" id="xym" size="6" class="input1" /><input type="hidden" value="" name="xym1">&nbsp;
                <script language="javascript">
                    var num1=Math.round(Math.random()*10000000);
                    var num=num1.toString().substr(0,4);
                    document.write("<img name=codeimg4 src='xym.php?num="+num.substr(0,1)+"'>");
                    document.write("<img name=codeimg5 src='xym.php?num="+num.substr(1,1)+"'>");
                    document.write("<img name=codeimg6 src='xym.php?num="+num.substr(2,1)+"'>");
                    document.write("<img name=codeimg7 src='xym.php?num="+num.substr(3,1)+"'>");
                    form1.xym1.value=num;
                    function code_1(){
                        var num1=Math.round(Math.random()*10000000);
                        var num=num1.toString().substr(0,4);
                        document.codeimg4.src="xym.php?num="+num.substr(0,1);
                        document.codeimg5.src="xym.php?num="+num.substr(1,1);
                        document.codeimg6.src="xym.php?num="+num.substr(2,1);
                        document.codeimg7.src="xym.php?num="+num.substr(3,1);
                        form1.xym1.value=num;
                    }
                </script>
                &nbsp;<a href="javascript:code_1()" class="a1">看不清</a> &nbsp;&nbsp;&nbsp;&nbsp;
            </div>
            <div style="padding-left:180px; margin-top: -80px;"><input type="image" name="submit" id="submit" src="../images/loginbutton.png"/></div>

        </form>
</body>
</html><?php }} ?>
