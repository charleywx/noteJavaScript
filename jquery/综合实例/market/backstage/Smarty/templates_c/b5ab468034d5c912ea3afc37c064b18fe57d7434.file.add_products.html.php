<?php /* Smarty version Smarty-3.1.16, created on 2014-12-17 13:09:50
         compiled from "F:\wamp\webpage\market\backstage\Smarty\templates\add_products.html" */ ?>
<?php /*%%SmartyHeaderCode:22163548903b9bd10e4-38234133%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5ab468034d5c912ea3afc37c064b18fe57d7434' => 
    array (
      0 => 'F:\\wamp\\webpage\\market\\backstage\\Smarty\\templates\\add_products.html',
      1 => 1418786912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22163548903b9bd10e4-38234133',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_548903b9c4b207_91695449',
  'variables' => 
  array (
    'editor' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548903b9c4b207_91695449')) {function content_548903b9c4b207_91695449($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>添加产品</title>
</head>

<body style="background-color: #fcfcfc">
<div id="con_right">
    <div>
        <br />
        <br />
        <DIV>
            <form name="form_addproduct" method="post" action="products_control.php" enctype="multipart/form-data" onsubmit="return chkinputaddproduct(this)" style="margin:0px; padding:0px;">

                <h2>添加产品</h2><br />
                <p>
                <p>产品名称：
                    <input type="text" name="product_name" id="product_name" size="60" class="input1" /><br/><br/>
                    封面图:
                    <input name="cover" type="file" id="cover" size="50"/><br/><br/>
                    <br/><br/>
                    封面小图:
                    <input name="smallcover" type="file" id="smallcover" size="50"/><br/><br/>
                    <br/><br/>
                    价格：
                    <input type="text" name="price" id="item_no" size="60" class="input1" /><br/><br/>
                    重量：
                    <input type="text" name="weight" id="weight" size="60" class="input1" /><br/><br/>
                    发货方式：
                    <input type="text" name="methods" id="methods" size="60" class="input1" /><br/><br/>
                    产品描述：
                <?php echo $_smarty_tpl->tpl_vars['editor']->value;?>

                    <br/><br/>
                </p>
                <p>产品防伪码：
                    <input type="text" name="auth_code" id="auth_code" size="60" class="input1" /><br/><br/>
                    产品详细图：
                    <input name="picture" type="file" id="picture" size="50"/><br/><br/>
                </p>

                <input type="submit" name="submit" value="添加" />
            </form>
        </DIV>
        <BR>
    </div>
</div>
<script language="javascript">


    function chkinputaddproduct(form){
        if(form.product_name.value==''){
            alert('请填写产品名称！');
            form.product_name.focus();
            return false;
        }

        if(form.cover.value==''){
            alert('请上传产品封面!');
            form.cover.focus();
            return false;
        }


        str = form.cover.value.split(".");
        extname = str[str.length-1];
        if(!(extname == 'jpg' || extname == 'gif' || extname == 'png' || extname == 'bmp')){
            alert("文件类型错误，请重新上传!");
            form.cover.focus();
            return false;
        }

        if(form.smallcover.value==''){
            alert('请上传产品小封面图!');
            form.smallcover.focus();
            return false;
        }

        str = form.smallcover.value.split(".");
        extname = str[str.length-1];
        if(!(extname == 'jpg' || extname == 'gif' || extname == 'png' || extname == 'bmp')){
            alert("文件类型错误，请重新上传!");
            form.smallcover.focus();
            return false;
        }

        if(form.item_no.value==''){
            alert('产品序列号不能为空！');
            form.item_no.focus();
            return false;
        }
        if(form.weight.value==''){
            alert('产品重量不能为空！');
            form.weight.focus();
            return false;
        }
        if(form.methods.value==''){
            alert('发货方式不能为空！');
            form.methods.focus();
            return false;
        }

        if(form.picture.value==''){
            alert('请上传产品细节图!');
            form.picture.focus();
            return false;
        }
        str = form.picture.value.split(".");
        extname = str[str.length-1];
        if(!(extname == 'jpg' || extname == 'gif' || extname == 'png' || extname == 'bmp')){
            alert("文件类型错误，请重新上传!");
            form.picture.focus();
            return false;
        }
        return true
    }

</script>

</body>
</html><?php }} ?>
