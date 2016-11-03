function check(myform){
	
	if (myform.money.value==""){
		alert("请输入预约金额");myform.money.focus();
		return false;
	}	
     
     if (isNaN(myform.money.value)){
		alert("金额不能为数字,请输入数字");myform.tel.focus();
		return false;
	}
	if (myform.money.value.length<5){
		alert("预约金额最低为一万元以上");myform.money.focus();
		return false;
	}
      var data = $("#people").val();      

	if (myform.people.value==""){
		alert("请输入姓名！");myform.people.focus();
		return false;
	}
 if (!isNaN(myform.people.value)){
		alert("姓名不能为数字,请输入正确姓名");myform.tel.focus();
		return false;
	}
	if(myform.people.value.length<2)
	{
		alert("请输入真实姓名");myform.people.focus();
		return false;
	}
				
	if (myform.tel.value==""){
		alert("请输入联系电话");myform.tel.focus();
		return false;
	}
	if (myform.tel.value.length!=11 ){
		alert("电话格式不对,请重新输入");myform.tel.focus();
		return false;
	}
	
	if (isNaN(myform.tel.value)){
		alert("您输入的电话不是数字");myform.tel.focus();
		return false;
	}
	if (myform.email.value==""){
		alert("请输入Email地址！");myform.email.focus();
		return false;
	}
	var i=myform.email.value.indexOf("@");
	var j=myform.email.value.indexOf(".");
	if((i<0)||(i-j>0)||(j<0)){
		alert("您输入的Email地址不正确，请重新输入！");myform.email.value="";myform.email.focus();
		return false;
	}	
}
////////////////////
/////////////////
function check(myme){
if (myme.people.value==""){
		alert("请输入姓名！");myme.people.focus();
		return false;
	}
 if (!isNaN(myme.people.value)){
		alert("姓名不能为数字,请输入正确姓名");myme.tel.focus();
		return false;
	}
if(myme.people.value.length<2)
	{
		alert("请输入真实姓名");myme.people.focus();
		return false;
	}
				
	if (myme.tel.value==""){
		alert("请输入联系电话");myme.tel.focus();
		return false;
	}
	if (myme.tel.value.length!=11 ){
		alert("电话格式不对,请重新输入");myme.tel.focus();
		return false;
	}
	
	if (isNaN(myme.tel.value)){
		alert("您输入的电话不是数字");myme.tel.focus();
		return false;
	}
	if (myme.email.value==""){
	    alert("请您输入Email地址！");myme.email.focus();
		return false;
	}
	var i=myme.email.value.indexOf("@");
	var j=myme.email.value.indexOf(".");
	if((i<0)||(i-j>0)||(j<0)){
		alert("您输入的Email地址不正确，请重新输入！");myme.email.value="";myme.email.focus();
		return false;
	}	
}






