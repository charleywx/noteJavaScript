$.fn.maxlength = function(max){
	return this.each(function(){
		var type = this.tagName.toLowerCase();
		var inputType = this.type?this.type.toLowerCase():null;
		if(type == "input" && inputType == "text" || inputType == 'password'){
			this.maxLength = max;
		}else if(type == "textarea"){
			this.onkeypress = function(e){
				var ob = e || event;
				var keyCode = ob.keyCode;
				return !(this.value.length >= max && (keyCode>50 || keyCode == 32 || keyCode == 13))
			}
			this.onkeyup = function(){
				if(this.value.length > max){
					this.value = this.value.substring(0,max);
				}
			}
		}
	})
}