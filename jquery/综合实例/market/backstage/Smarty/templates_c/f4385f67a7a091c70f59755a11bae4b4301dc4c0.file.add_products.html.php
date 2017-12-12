<?php /* Smarty version Smarty-3.1.16, created on 2014-03-09 08:43:38
         compiled from "F:\Web\apache\htdocs\market\backstage\Smarty\templates\add_products.html" */ ?>
<?php /*%%SmartyHeaderCode:6550531c29ba97a695-93292717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4385f67a7a091c70f59755a11bae4b4301dc4c0' => 
    array (
      0 => 'F:\\Web\\apache\\htdocs\\market\\backstage\\Smarty\\templates\\add_products.html',
      1 => 1394354617,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6550531c29ba97a695-93292717',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_531c29ba9af323_39844190',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531c29ba9af323_39844190')) {function content_531c29ba9af323_39844190($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
                    序列号：
                    <input type="text" name="item_no" id="item_no" size="60" class="input1" /><br/><br/>
                    重量：
                    <input type="text" name="weight" id="weight" size="60" class="input1" /><br/><br/>
                    发货方式：
                    <input type="text" name="methods" id="methods" size="60" class="input1" /><br/><br/>
                    产品描述：
                    <<?php ?>?php
					$oFCKeditor = new FCKeditor ('description');
					$oFCKeditor->BasePath = "include/fckeditor/";
                    $oFCKeditor->ToolbarSet = 'easywolf';
                    $oFCKeditor->Width = 650;
                    $oFCKeditor->Height = 350;
                    $oFCKeditor->Create ();
                    ?<?php ?>>
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
