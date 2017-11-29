var types = {
	jQuery: "A jQuery object.",
	Object: "A simple Javascript object. For example, it could be a String or a Number.",
	String: "A string of characters.",
	Number: "A numeric valid.",
	Element: "The Javascript object representation of a DOM Element.",
	Map: "A Javascript object that contains key/value pairs in the form of properties and values.",
	"Array&lt;Element&gt;": "An Array of DOM Elements.",
	"Array&lt;String&gt;": "An Array of strings.",
	Function: "A reference to a Javascript function.",
	XMLHttpRequest: "An XMLHttpRequest object (referencing a HTTP request).",
	"&lt;Content&gt;": "A String (to generate HTML on-the-fly), a DOM Element, an Array of DOM Elements or a jQuery object"
};

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
		$("div.cndesc,div.endesc",this.parentNode.parentNode).toggle("fast");
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
