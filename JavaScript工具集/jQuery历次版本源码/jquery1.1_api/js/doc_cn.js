var types = {
	jQuery: "jQuery 对象",
	Array: "Javascript 数组",
	Object: "Javascript 对象。例如：String 或 Number 的实例",
	String: "Javascript 字符串",
	Number: "Javascript 数字值",
	Element: "表示 DOM 元素的 Javascript 对象",
	"Element|Array&lt;Element&gt;":"表示DOM元素的Javascript对象或DOM元素数组",
	"Element|jQuery":"表示DOM元素的Javascript对象或jQuery对象",
	Hash: "属性和值以 \"property/value\" 对形式表示的 Javascript 对象",
	Map : "属性和值以 \"property/value\" 对形式表示的 Javascript 对象",
	"Array&lt;Element&gt;": "DOM 元素数组",
	"Array&lt;String&gt;": "字符串数组",
	"String|Array&lt;String&gt;":"字符串或字符串数组",
	"&lt;Content&gt;": "HTML标记、DOM元素或jQuery对象",
	Function: "Javascript 函数",
	XMLHttpRequest: "XMLHttpRequest 对象 (引用一个 HTTP 请求)"};

$(document).ready(function(){
	$("span.tooltip").each(function(){
		if ( types[ this.innerHTML ] )
			this.title = types[ this.innerHTML ];
	}).ToolTipDemo('#fff');

	$("a.name").click(function(){
		$("div.more,div.short",this.parentNode.parentNode).toggle();
		return false;
	});

	$("a.cn-en").click(function(){
		$("div.cndesc,div.endesc",this.parentNode.parentNode).toggle();
		if (this.innerHTML == "中文详解")
		{
			this.innerHTML = "英文详解";
		}
		else{
			this.innerHTML = "中文详解";
		}

		return false;
	});

	$("#docs").alphaPager(function(a){
		return $.fn.text.apply( [a.getElementsByTagName("span")[2]] ).replace(/^\$\./,"").substr(0,1).toUpperCase();
	});
});
