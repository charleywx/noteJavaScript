<?php /* Smarty version Smarty-3.1.16, created on 2014-03-05 15:45:50
         compiled from "F:\Web\apache\htdocs\market\Smarty\templates\news.html" */ ?>
<?php /*%%SmartyHeaderCode:24458531746ae36e658-49609129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06e5951ab84af1cc381dd5c9fbd2621c791363fc' => 
    array (
      0 => 'F:\\Web\\apache\\htdocs\\market\\Smarty\\templates\\news.html',
      1 => 1392549749,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24458531746ae36e658-49609129',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'news' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_531746ae44f968_55865627',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531746ae44f968_55865627')) {function content_531746ae44f968_55865627($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>明日科技网上商城</title>
    <link href="css/css.css" rel="stylesheet" type="text/css" />
    <LINK href="css/mobanwang.css" type=text/css rel=stylesheet>
    <link type="text/css" href="css/lrtk.css" rel="stylesheet" />
    <SCRIPT src="js/jquery-1.4.2.min.js" type=text/javascript></SCRIPT>
    <SCRIPT src="js/mobanwang.js" type=text/javascript></SCRIPT>
    <SCRIPT src="js/jquery.js" type=text/javascript></SCRIPT>
</head>
<body>
<div class="top">
    <div class="l"><a href="index.php"></a></div>
    <div class="r">
        <div class="m1" onmouseout="b1()" onmouseover="a1()"><a href="about_us.html"></a>
            <ul style="display:none;" id="dhx" class="aa">
                <li><a href="about_us.html">关于我们</a></li>
                <li><a href="contact_us.html">联系我们</a></li>
            </ul>
        </div>
        <div class="m2"><a href="product_list.php"></a>
        </div>
        <div class="m3"><a href="news.php"></a></div>
        <div class="m4"><a href="JOIN_INVESTMENT.html"></a></div>
        <script>
            function a1(){
                document.getElementById("dhx").style.display="";
            }
            function b1(){
                document.getElementById("dhx").style.display="none";
            }

            function chksearch(form){
                if(form.keyword.value==''){
                    alert('please input keyword！');
                    form.keyword.focus();
                    return false;
                }
            }
        </script>
    </div>
</div>
<div class="head">　　
    <div class="l">
        <div class="t1">
            <div class="t3"><P><U>新闻</U></P></div><br/>
            <ul>
                <li class="bl"><a href="news.php">业内新闻</a></li>
            </ul>
            <BR/><BR/>
            <form action="product_list.php" method="post" onsubmit="return chksearch(this)">
                <div class="c">
                    <p><input name="keyword" type="text" value="请输入产品名称关键字" onfocus="if(this.value=='请输入产品名称关键字'){this.value=''}" onblur="if(this.value==''){this.value='请输入产品名称关键字'}" style="color:#bdc0c5;">
                        <input type="image" style="display: block; height: 27px; width: 27px; margin:0px; padding:0px; line-height:30px; cursor:pointer;" src="images/zoom1.jpg" name="submit"></p>
                </div>
            </form>
            <div class="f">
                电话:0431-84978981<BR/>
                地址:长春市高新区锦河街155号电子信息楼三层301室
            </div>
        </div>
    </div>
    <div class="r">
        <div class="t5"></div>
        <dl>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['news']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
            <dd <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['index']==0) {?>class='cdc'<?php }?> ><a href="newsinfo.php?id=<?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]['entity_id'];?>
"><b <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['index']==0) {?> class='cdc' <?php }?> ></b><p><?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]['title'];?>
</p><span><?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]['addtime'];?>
</span></a></dd>
        <?php endfor; endif; ?>
        </dl>
        <br/><br/>
    </div>
</div>
<div class="food">
    <a href="index.php"><div class="l"></div></a>
    <div class="l1"><BR/><a href="www.mingribook.com/contact.php">联系我们</a> | <a href="www.mingrisoft.com">公司网站</a> | <a href="www.mingribook.com/map.php">企业地图</a><BR/>
        电话:0431-84978981<BR/>
        <a href="www.mingribook.com">长春市高新区锦河街155号电子信息楼三层301室</a><br/>© Copyright 吉林省明日科技有限公司.</div>
    <div class="r"><p>明日科技出品的编程词典系列产品是面向各级程序开发人员的编程资源库，它是吉林省明日科技有限公司从十多年编程教育过程中提炼出海量的精品源码、项目模块、典型范例和技巧、精彩视频教程，是集学习和开发于一体的专业编程资源库。</p></div>
</div>
</body>
</html><?php }} ?>
