function chksearch(form){
    if(form.keyword.value == '' || form.keyword.value == "请输入产品名称关键字"){
        alert('请输入要查找的关键字！');
        form.keyword.focus();
        return false;
    }
}

function changeStatus(id,str) {
    $("#"+id).bind("focus",function(){
        if($(this).val() == str){
            $(this).val("");
        }
    });
    $("#"+id).bind("blur",function(){
        if($(this).val() == ''){
            $(this).val(str);
        }
    })
}

function a1(){
    document.getElementById("dhx").style.display="";
}
function b1(){
    document.getElementById("dhx").style.display="none";
}
function a2(){
    document.getElementById("dhx1").style.display="";
}
function b2(){
    document.getElementById("dhx1").style.display="none";
}
function a3(){
    document.getElementById("dhx2").style.display="";
}
function b3(){
    document.getElementById("dhx2").style.display="none";
}