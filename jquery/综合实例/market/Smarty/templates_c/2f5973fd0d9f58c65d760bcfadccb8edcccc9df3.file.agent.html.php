<?php /* Smarty version Smarty-3.1.16, created on 2016-07-21 15:42:30
         compiled from "F:\wamp\webpage\market\Smarty\templates\agent.html" */ ?>
<?php /*%%SmartyHeaderCode:23248548bedc35c0798-61124058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f5973fd0d9f58c65d760bcfadccb8edcccc9df3' => 
    array (
      0 => 'F:\\wamp\\webpage\\market\\Smarty\\templates\\agent.html',
      1 => 1469086946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23248548bedc35c0798-61124058',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_548bedc35fd827_40523901',
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548bedc35fd827_40523901')) {function content_548bedc35fd827_40523901($_smarty_tpl) {?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>产品之家</title>
 <meta http-equiv="x-ua-compatible" content="ie=8" />
<link href="css/css.css" rel="stylesheet" type="text/css" />
<SCRIPT src="js/jquery-1.11.1.min.js" type=text/javascript></SCRIPT>
<SCRIPT src="js/jquery.validate.js" type=text/javascript></SCRIPT>
<SCRIPT src="js/fun.js" type=text/javascript></SCRIPT>
    <style>
        .star{
            color:red;
        }
        .dt{
            padding-top:10px;
        }
        em{
            color:red;
        }
    </style>
</head>

<body>
<div class="top">
    <div class="l"><a href="index.php"></a></div>
    <div class="r">
        <div class="m1" onmouseout="b1()" onmouseover="a1()"><a href="about_us.html"></a>
            <ul style="display:none;" id="dhx" class="aa">
                <li><a href="about_us.html">产品展示</a></li>
                <li><a href="contact_us.html">联系我们</a></li>
            </ul>
        </div>
        <div class="m2"><a href="product_list.php" id="a2"></a>
            <ul style="display:none;" id="dhx1" class="aa">
                <li><a href="product_list.php">产品展示</a></li>
            </ul>
        </div>
        <div class="m3" onmouseout="b3()" onmouseover="a3()"><a href="news.php"></a>
            <ul style="display:none;" id="dhx2" class="aa">
                <li><a href="news.php">业内新闻</a></li>
            </ul>
        </div>
        <div class="m4"><a href="agent.php"></a></div>
        <script type="text/javascript">
            $(function(){
                $("#vform").validate({
                    messages:{
                        province:{required:"请输入省份"},
                        city:{required:"请输入城市"},
                        area:{required:"请输入地址"},
                        companyname:{required:"请输入公司名称或网址"},
                        tel:{required:"请输入电话座机"},
                        mobile:{required:"请输入手机号码"},
                        email:{
                            required:"请输入E-mail地址",
                            email:"请输入正确的E-mail格式"
                        }
                    }
                });
            });
        </script>
</div>
</div>
<div class="head">　　
  <div class="l">

<div class="t1">
<div class="t3"><P>加盟代理</P></div><br/>
    <div class="c">
        <form action="product_list.php" method="post"  onsubmit="return chksearch(this)">
            <div class="p3"><div class="p3_1"><input name="keyword" id="keyword" type="text" value="请输入产品名称关键字" style="color:#bdc0c5;"></div>
                <div class="p3_2"><input type="image" name="submit" src="images/zoom1.jpg" style="display: block; float: left; height: 26px; width: 26px;"/></div>
                <input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
            </div>
        </form>
    </div>
    <div class="f">
        电话:0431-8******1<BR/>
        地址:长春市高新区锦河街155号电子信息楼三层301室
    </div>
</div>
</div>
    <div class="r">
        <div class="p1">
            <p><SPAN>在线加盟</SPAN></p><br/>
            <P>1.省份以及地区</P><br/>
            <form  id="vform" action="agent_control.php" method="post">
                <P><i>省份:<em>*</em></i> <input name="province" type="text" class="I1 required" /><br/><br/>
                    <i>城市:<em>*</em></i> <input name="city" type="text" class="I1 required"/><br/><br/>
                    <i>地区:<em>*</em></i> <input name="area" type="text" class="I1 required"/></P><br/><br/>
                <P><div class="pi">2.公司名称或网址: <em>*</em></DIV> <br/><br/>
                <input name="companyname" type="text" class="I2 required" /></P><br/><br/>
                <P>3.联系方式</P><br/>
                <P><u>电话:</u><em>*</em> <input name="tel" type="text" class="I3 required" /></P><br/><br/>
                <P><u>手机号码:</u><em>*</em> <input name="mobile" type="text" class="I3 required" /></P><br/><br/>
                <P><u>传真:</u><input name="fax" type="text" class="I3" /></P><br/><br/>
                <P><u>E-MAIL:</u><em>*</em> <input name="email" type="text" class="I3 required email" /></P><br/><br/>
                <p><input type="submit" name="submit" value="提交">&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value="取消"></p>
                <BR/><BR/>
            </form>
        </div>
    </div>
</div>
<div class="food">
    <a href="index.php"><div class="l"></div></a>
    <div class="l1"><BR/><a href="www.mingribook.com/contact.php">联系我们</a> | <a href="www.mingrisoft.com">公司网站</a> | <a href="www.mingribook.com/map.php">企业地图</a><BR/>
        电话:0431-84*****1<BR/>
        <a href="www.mingribook.com">长春市高新区锦河街155号电子信息楼三层301室</a><br/>© Copyright 吉林省明日科技有限公司.</div>
    <div class="r"><p>明日科技出品的编程词典系列产品是面向各级程序开发人员的编程资源库，它是吉林省明日科技有限公司从十多年编程教育过程中提炼出海量的精品源码、项目模块、典型范例和技巧、精彩视频教程，是集学习和开发于一体的专业编程资源库。</p></div>
</div>
</body>
</html>
<?php }} ?>
