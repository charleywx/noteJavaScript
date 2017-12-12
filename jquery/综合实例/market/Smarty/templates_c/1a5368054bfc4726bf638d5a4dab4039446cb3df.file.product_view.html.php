<?php /* Smarty version Smarty-3.1.16, created on 2014-12-23 16:25:05
         compiled from "F:\wamp\webpage\market\Smarty\templates\product_view.html" */ ?>
<?php /*%%SmartyHeaderCode:25536548e9104886018-54253935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a5368054bfc4726bf638d5a4dab4039446cb3df' => 
    array (
      0 => 'F:\\wamp\\webpage\\market\\Smarty\\templates\\product_view.html',
      1 => 1419230451,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25536548e9104886018-54253935',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_548e91049b72e0_11691286',
  'variables' => 
  array (
    'recommend_product' => 0,
    'productImagesDir' => 0,
    'product' => 0,
    'reviewavg' => 0,
    'gid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e91049b72e0_11691286')) {function content_548e91049b72e0_11691286($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=8" />
    <title>产品之家</title>
    <link href="css/css.css" rel="stylesheet" type="text/css" />
    <SCRIPT src="js/jquery-1.11.1.min.js" type=text/javascript></SCRIPT>
    <SCRIPT src="js/fun.js" type=text/javascript></SCRIPT>
    <script>
        $(function(){
            changeStatus("keyword","请输入产品名称关键字");
        });
    </script>
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
    </div>
</div>
<div class="head">
    <div class="l">
        <div class="t1">
            <div class="t2">
                <p>推荐产品</p>
                <dl>
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sid'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sid']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sid']['name'] = 'sid';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sid']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['recommend_product']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sid']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sid']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sid']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sid']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sid']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sid']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sid']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sid']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sid']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sid']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sid']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sid']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sid']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sid']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sid']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sid']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sid']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sid']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sid']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sid']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sid']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sid']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sid']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sid']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sid']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sid']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sid']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sid']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sid']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sid']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sid']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sid']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sid']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sid']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sid']['total']);
?>
                    <dd><b><a href="product_view.php?id=<?php echo $_smarty_tpl->tpl_vars['recommend_product']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sid']['index']]['product_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['productImagesDir']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['recommend_product']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sid']['index']]['cover'];?>
" width="142" height="190" /></a></b>
                        <span style="padding-top: 14px;"><a href="product_view.php?id=<?php echo $_smarty_tpl->tpl_vars['recommend_product']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sid']['index']]['product_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['recommend_product']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sid']['index']]['product_name'];?>
</a></span>
                        <div>
                            <?php if ($_smarty_tpl->tpl_vars['recommend_product']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sid']['index']]['avg']==1) {?>
                            <img src='images/1.jpg' title='1' width=75 height=15/><br/>
                            <?php } elseif ($_smarty_tpl->tpl_vars['recommend_product']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sid']['index']]['avg']<2&&$_smarty_tpl->tpl_vars['recommend_product']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sid']['index']]['avg']>1) {?>
                            <img src='images/2.png' title='1.5' width=75 height=15/>
                            <?php } elseif ($_smarty_tpl->tpl_vars['recommend_product']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sid']['index']]['avg']==2) {?>
                            <img src='images/2.jpg' title='2' width=75 height=15/><br/>
                            <?php } elseif ($_smarty_tpl->tpl_vars['recommend_product']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sid']['index']]['avg']<3&&$_smarty_tpl->tpl_vars['recommend_product']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sid']['index']]['avg']>2) {?>
                            <img src='images/3.png' title='2.5' width=75 height=15/><br/>
                            <?php } elseif ($_smarty_tpl->tpl_vars['recommend_product']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sid']['index']]['avg']==3) {?>
                            <img src='images/3.jpg' title='5' width=75 height=15/><br/>
                            <?php } elseif ($_smarty_tpl->tpl_vars['recommend_product']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sid']['index']]['avg']<4&&$_smarty_tpl->tpl_vars['recommend_product']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sid']['index']]['avg']>3) {?>
                            <img src='images/4.png' title='3.5' width=75 height=15/><br/>
                            <?php } elseif ($_smarty_tpl->tpl_vars['recommend_product']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sid']['index']]['avg']==4) {?>
                            <img src='images/4.jpg' title='5' width=75 height=15/><br/>
                            <?php } elseif ($_smarty_tpl->tpl_vars['recommend_product']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sid']['index']]['avg']<5&&$_smarty_tpl->tpl_vars['recommend_product']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sid']['index']]['avg']>4) {?>
                            <img src='images/5.png' title='4.5' width=75 height=15/><br/>
                            <?php } elseif ($_smarty_tpl->tpl_vars['recommend_product']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sid']['index']]['avg']==5) {?>
                            <img src='images/5.jpg' title='5' width=75 height=15/><br/>
                            <?php }?>
                        </div>
                    </dd>
                    <?php endfor; endif; ?>
                </dl>
                <div class="but"></div>
            </div>
            <div class="c">
                <form action="product_list.php" method="post"  onsubmit="return chksearch(this)">
                    <p><input name="keyword" id="keyword" type="text" value="请输入产品名称关键字" style="color:#bdc0c5;">
                        <input type="image" name="submit" src="images/zoom1.jpg" style="display: block; float: left; height: 26px; width: 26px;"/>
                        <input type="hidden" name="product_id" value="{$gid}"></p>
                </form>
            </div>
            <div class="f">
                电话:0431-84978981<BR/>
                地址:长春市高新区锦河街155号电子信息楼三层301室
            </div>
        </div>
    </div>
    <div class="r">
        <div class="t1">产品展示 >产品介绍</div>
        <div class="c1">
            <div class="l1"><img src="<?php echo $_smarty_tpl->tpl_vars['productImagesDir']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['product']->value[0]['picture'];?>
" width="233" height="323"><br></div>
            <div class="r1">
                <div class="t"><?php echo $_smarty_tpl->tpl_vars['product']->value[0]['product_name'];?>
</div>
                <div class="c2">
                    <?php if ($_smarty_tpl->tpl_vars['reviewavg']->value==1) {?>
                    <img src='images/1.jpg' title='1' /><br/>
                    <?php } elseif ($_smarty_tpl->tpl_vars['reviewavg']->value<2&&$_smarty_tpl->tpl_vars['reviewavg']->value>1) {?>
                    <img src='images/2.png' title='1.5' />
                    <?php } elseif ($_smarty_tpl->tpl_vars['reviewavg']->value==2) {?>
                    <img src='images/2.jpg' title='2' /><br/>
                    <?php } elseif ($_smarty_tpl->tpl_vars['reviewavg']->value<3&&$_smarty_tpl->tpl_vars['reviewavg']->value>2) {?>
                    <img src='images/3.png' title='2.5' /><br/>
                    <?php } elseif ($_smarty_tpl->tpl_vars['reviewavg']->value==3) {?>
                    <img src='images/3.jpg' title='3' /><br/>
                    <?php } elseif ($_smarty_tpl->tpl_vars['reviewavg']->value<4&&$_smarty_tpl->tpl_vars['reviewavg']->value>3) {?>
                    <img src='images/4.png' title='3.5' /><br/>
                    <?php } elseif ($_smarty_tpl->tpl_vars['reviewavg']->value==4) {?>
                    <img src='images/4.jpg' title='4' /><br/>
                    <?php } elseif ($_smarty_tpl->tpl_vars['reviewavg']->value<5&&$_smarty_tpl->tpl_vars['reviewavg']->value>4) {?>
                    <img src='images/5.png' title='4.5' /><br/>
                    <?php } elseif ($_smarty_tpl->tpl_vars['reviewavg']->value==5) {?>
                    <img src='images/5.jpg' title='5' /><br/>
                    <?php }?>
                </div>
                <div class="f"><strong>价格 :</strong> <?php echo $_smarty_tpl->tpl_vars['product']->value[0]['price'];?>
元</div>
                <div class="f"><strong>产品重量  : </strong> <?php echo $_smarty_tpl->tpl_vars['product']->value[0]['weight'];?>
</div>
                <div class="f"><strong>发货方式: </strong> <?php echo $_smarty_tpl->tpl_vars['product']->value[0]['methods'];?>
</div>
            </div>
        </div>
        <div class="hr_10"></div>
        <div class="f">
            <div class="t3"><a href="#" class="buttom1">产品描述</a><a href="product_review.php?id=<?php echo $_smarty_tpl->tpl_vars['gid']->value;?>
" class="buttom22"> 用户评分</a></div>
            <div class="cc">
                <?php echo $_smarty_tpl->tpl_vars['product']->value[0]['description'];?>

                <div class="middle">
                    <b>注意</b><br/>
                    1.收到产品后，如果满意，请给予产品五星评分。也许对您而言只是举手之劳，但您的肯定对于我们却至关重要。这是您给予我们的最大支持，我们一定会再接再厉的.
                    <br/><br/>
                    2.我们重视和珍惜您的每一个评分与每条建议，您收到产品后若有不满意的地方，请您第一时间与我们客服人员联系，任何问题都可以通过沟通来解决.
                </div>
            </div>
        </div>
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
</html>
<?php }} ?>
