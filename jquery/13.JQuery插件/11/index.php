<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>zTree插件异步加载大数据</title>
<link rel="stylesheet" href="css/demo.css" type="text/css">
	<link rel="stylesheet" href="css/zTreeStyle/zTreeStyle.css" type="text/css">
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.ztree.core-3.5.js"></script>
	<SCRIPT type="text/javascript">
		var setting = {
			async: {
				enable: true,            // 开启异步加载模式
				url: getUrl              // 获取数据的URL地址
			},
			check: {
				enable: true            // 设置zTree上节点显示checkbox
			},
			data: {
				simpleData: {
					enable: true        // 使用简单数据模式
				}
			},
			view: {
				expandSpeed: ""         // zTree展开折叠时的动画速度，“”表示不显示动画效果
			}
			
		};
		var zNodes = [];
		<?php
			require_once "conn.php";
			$query=mysql_query("select * from tb_type where parentid=0");
			while($info=mysql_fetch_assoc($query)){  
		?>
zNodes.push({name:"<?php echo $info['typename'];?>", id:"<?php echo $info['id'];?>",isParent:true});
		function getUrl(treeId, treeNode) {
			var param = "id="+treeNode.id;
			return "getBigData.php?" + param;
		}
		<?php
		}
	?>
		$(document).ready(function(){
			$.fn.zTree.init($("#treeDemo"), setting, zNodes);

		});
	</SCRIPT>
 </HEAD>

<BODY>
<h1>使用zTree插件异步加载大数据</h1>
<div class="content_wrap">
	<div class="zTreeDemoBackground left">
		<ul id="treeDemo" class="ztree"></ul>
	</div>
	<ul id="log"></ul>
</div>
</BODY>
</HTML>