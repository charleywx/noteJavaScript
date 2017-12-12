<?php /* Smarty version Smarty-3.1.16, created on 2014-12-23 16:25:11
         compiled from "F:\wamp\webpage\market\Smarty\templates\product_review.html" */ ?>
<?php /*%%SmartyHeaderCode:23477548e9f826c3df3-99107464%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e3539c9f92342216c2710005681e6be63864f51' => 
    array (
      0 => 'F:\\wamp\\webpage\\market\\Smarty\\templates\\product_review.html',
      1 => 1419230451,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23477548e9f826c3df3-99107464',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_548e9f828e9307_55929378',
  'variables' => 
  array (
    'recommend_product' => 0,
    'productImagesDir' => 0,
    'gid' => 0,
    'product' => 0,
    'reviewavg' => 0,
    'reviews' => 0,
    'total' => 0,
    'pagesize' => 0,
    'page' => 0,
    'pagecount' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e9f828e9307_55929378')) {function content_548e9f828e9307_55929378($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=8" />
    <title>产品之家</title>
    <link href="css/css.css" rel="stylesheet" type="text/css" />
    <SCRIPT src="js/jquery-1.11.1.min.js" type=text/javascript></SCRIPT>
    <SCRIPT src="js/fun.js" type=text/javascript></SCRIPT>
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
        <script>
            $(function(){
                changeStatus("keyword","请输入产品名称关键字");
            });
        </script>
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
                    <div class="p3"><div class="p3_1"><input name="keyword" id="keyword" type="text" value="请输入产品名称关键字"  style="color:#bdc0c5;"></div>
                        <div class="p3_2"><input type="image" name="submit" src="images/zoom1.jpg" style="display: block; float: left; height: 26px; width: 26px;"/></div>
                        <input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['gid']->value;?>
"></div>
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
                <div class="f"><strong>价格 :</strong>  <?php echo $_smarty_tpl->tpl_vars['product']->value[0]['price'];?>
元</div>
                <div class="f"><strong>产品重量  : </strong>  <?php echo $_smarty_tpl->tpl_vars['product']->value[0]['weight'];?>
</div>
                <div class="f"><strong>发货方式: </strong>  <?php echo $_smarty_tpl->tpl_vars['product']->value[0]['methods'];?>
</div>
            </div>
        </div>
        <div class="hr_10"></div>
        <div class="f">
            <a name="rr"></a>
            <div id="review">
                <div class="t3"><a href="product_view.php?id=<?php echo $_smarty_tpl->tpl_vars['gid']->value;?>
" class="buttom11">产品描述</a><a href="product_review.php?id=<<?php ?>?php echo $_GET['id']?<?php ?>>" class="buttom2"> 用户评分</a></div>
                <div class="cc">
                    <div class="t4"><strong>产品评价</strong></div>
                    <DIV class="t4_1"><p>平均分 :</p>

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
                    </DIV>
                    <div class="t4_2">
                        <p>评论</p>
                        <u><a href="product_review.php?id=<?php echo $_smarty_tpl->tpl_vars['gid']->value;?>
&type=recom" ><b>分数</b></a><i></i></u>
                        <u><a href="product_review.php?id=<?php echo $_smarty_tpl->tpl_vars['gid']->value;?>
&type=time"><b>时间</b></a><i></i></u>
                    </div>
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['reid'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['reid']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['reid']['name'] = 'reid';
$_smarty_tpl->tpl_vars['smarty']->value['section']['reid']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['reviews']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['reid']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['reid']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['reid']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['reid']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['reid']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['reid']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['reid']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['reid']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['reid']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['reid']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['reid']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['reid']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['reid']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['reid']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['reid']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['reid']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['reid']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['reid']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['reid']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['reid']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['reid']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['reid']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['reid']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['reid']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['reid']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['reid']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['reid']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['reid']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['reid']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['reid']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['reid']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['reid']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['reid']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['reid']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['reid']['total']);
?>
                    <ul><li><pre><?php echo $_smarty_tpl->tpl_vars['reviews']->value[$_smarty_tpl->getVariable('smarty')->value['section']['reid']['index']]['message'];?>

 <?php if ($_smarty_tpl->tpl_vars['reviews']->value[$_smarty_tpl->getVariable('smarty')->value['section']['reid']['index']]['score']==1) {?>
                    <img src='images/1.jpg' alt='1'/>
                    <?php } elseif ($_smarty_tpl->tpl_vars['reviews']->value[$_smarty_tpl->getVariable('smarty')->value['section']['reid']['index']]['score']==2) {?>
                        <img src='images/2.jpg' alt='2'/>
                        <?php } elseif ($_smarty_tpl->tpl_vars['reviews']->value[$_smarty_tpl->getVariable('smarty')->value['section']['reid']['index']]['score']==3) {?>
                        <img src='images/3.jpg' alt='3'/>
                        <?php } elseif ($_smarty_tpl->tpl_vars['reviews']->value[$_smarty_tpl->getVariable('smarty')->value['section']['reid']['index']]['score']==4) {?>
                        <img src='images/4.jpg' alt='4'/>
                        <?php } elseif ($_smarty_tpl->tpl_vars['reviews']->value[$_smarty_tpl->getVariable('smarty')->value['section']['reid']['index']]['score']==5) {?>
                        <img src='images/5.jpg' alt='5'/>
                    <?php }?>
                    </pre>
                        <span><?php echo $_smarty_tpl->tpl_vars['reviews']->value[$_smarty_tpl->getVariable('smarty')->value['section']['reid']['index']]['customer_name'];?>
</span>
                    </li>
                    </ul>
                    <?php endfor; endif; ?>

                    <?php if ($_smarty_tpl->tpl_vars['total']->value>$_smarty_tpl->tpl_vars['pagesize']->value) {?>

                    <ul>&nbsp;&nbsp;&nbsp;共<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
条留言&nbsp;&nbsp;每页<?php echo $_smarty_tpl->tpl_vars['pagesize']->value;?>
条留言&nbsp; &nbsp;当前为第<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
页&nbsp;/共<?php echo $_smarty_tpl->tpl_vars['pagecount']->value;?>
页&nbsp;


                        <a href="product_review.php?id=<?php echo $_smarty_tpl->tpl_vars['gid']->value;?>
&type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
&page=1" class="a1">first</a>&nbsp;<a href="product_review.php?id=<?php echo $_smarty_tpl->tpl_vars['gid']->value;?>
&type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
&page=<?php if ($_smarty_tpl->tpl_vars['page']->value>1) {?><?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>

<?php } else { ?>1<?php }?>" class="a1">上一页</a>&nbsp;<a href="product_review.php?id=<?php echo $_smarty_tpl->tpl_vars['gid']->value;?>
&type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
&page=<?php if ($_smarty_tpl->tpl_vars['page']->value<$_smarty_tpl->tpl_vars['pagecount']->value) {?><?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>

<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['pagecount']->value;?>
<?php }?>" class="a1">下一页 </a>&nbsp;<a href="product_review.php?id=<?php echo $_smarty_tpl->tpl_vars['gid']->value;?>
&type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['pagecount']->value;?>
" class="a1">尾页</a>&nbsp;&nbsp;
                     </ul>
                    <?php }?>
                    <div style="padding-top:40px;"></div>
                    <form action="review_ok.php" method="post" id="reviewForm"><div id='messageDialog'>
                        <div class="talk1"><p>用户名:</p><input type="text" id='customer_name' class="input1" /></div>
                        <div class="talk1"><p>评分:</p> <div id='Clarity' class="bt"><dl class='rating nostar' id="cul"><dd class='one'><a href='#' title='1 '></a></dd><dd class='two'><a href='#' title='2 '></a></dd><dd class='three'><a href='#' title='3 '></a></dd><dd class='four'><a href='#' title='4 '></a></dd><dd class='five'><a href='#' title='5 '></a></dd></dl></div></div>
                        <div class="talk2"><p>留言:</p><textarea id='message_content' ></textarea></div>
                        <div class="talk1"><input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['gid']->value;?>
"/>
                            <img src="images/button.jpg" id="send_message" style="margin-left:100px;"/>
                        </div></div></form>
                    <br/><br/>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $("#messageDialog").css({ "left": (window.screen.availWidth - 370) / 2, "top": (window.screen.availHeight - 300) / 2 });
        var Clarity;
        $("dl.rating dd a").click(function () {
            var title = $(this).attr("title");
            var parentDiv_id = $(this).parent().parent().parent().attr("id");
            if (parentDiv_id == "Clarity") {
                Clarity = title;
            }
            var cl = $(this).parent().attr("class");
            $(this).parent().parent().removeClass().addClass("rating " + cl + "star");
            $(this).blur();
            return false;
        })
        $("#send_message").click(function () {
            addComment(Clarity, "review_ok.php","<?php echo $_smarty_tpl->tpl_vars['gid']->value;?>
");
        });
        var messageDiv = $("#messageDialog");
        var relative_left;
        var relative_top;
        $("#title_bar").mousedown(function (e) {
            relative_left = e.pageX - messageDiv.css("left").substring(0, messageDiv.css("left").length - 2);
            relative_top = e.pageY - messageDiv.css("top").substring(0, messageDiv.css("top").length - 2);
            $(this).mousemove(function (e) {
                messageDiv.css({ "left": (e.pageX - relative_left) + "px", "top": (e.pageY - relative_top) + "px" });
            });
            $(this).mouseup(function (e) {
                $(this).unbind("mousemove");
            });
        });
    })

    function addComment(Clarity,url,product_id) {
        var content = $("#message_content").val();
        var customername = $("#customer_name").val();
        if(customername == ''){
            alert("请输入您的用户名!");
            return false;
        }

        if($('#cul').attr('class') == 'rating nostar'){
            alert("请给产品评分!");
            return false;
        }
        if(content == ''){
            alert("请填写评论内容!");
            return false;
        }
        param = "customer_name=" + encodeURIComponent(customername) +"&content=" + encodeURIComponent(content) + "&score="+Clarity+"&product_id="+product_id;

        $.ajax({
            url: url,
            type: "POST",
            data: param,
            async:false,
            success: function (data) {
                alert(data);
            },
            error: function ErrorCallback(XMLHttpRequest, textStatus, errorThrown) {
                alert(XMLHttpRequest.status);
                alert(XMLHttpRequest.readyState);
                alert(textStatus);
            }
        });
        location=location;
    }

</script>
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
