;(function($){
	$.extend($.expr[":"],{
		withRel: function(obj){
			return ($(obj).attr("rel"));
		}
	})
})(jQuery);