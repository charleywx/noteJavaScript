;(function($){
	$.extend($.expr[":"],{
		between:function(e,i,bt){
			var arrSingle = bt[3].split("-");   // 将参数“2-4”以“-”分隔
			var j = e.id - 1;
			return arrSingle[0]<=j && j<=arrSingle[1]; // 返回第2-4个div
		}
	})
})(jQuery)