<?php if (!defined('THINK_PATH')) exit();?><table> 
            <tr> 
                <td>此处值通过js设置：</td> 
                <td><input id="jsUserName" type="text" name="jsUserName" readonly/></td>
            </tr> 
            <tr> 
                <td>此处输入值：</td> 
                <td><input id="userName" type="text" name="userName"/></td> 
            </tr> 
        </table> 
<table>
   <tr>
    <td>此处值通过js设置：</td>
    <td><input id="jsUserName" type="text" name="jsUserName" readonly/></td>
   </tr>
   <tr>
    <td>此处输入值：</td>
    <td><input id="userName" type="text" name="userName"/></td>
   </tr>
  </table>
<script>
$(function()  
        {  
            var jsUserName = "";  
            if($.browser.msie)  // IE浏览器  
            {  
                $("#userName").get(0).onpropertychange = setJsUserName;  
                $("#jsUserName").get(0).onpropertychange = handle;  
            }  
            else    // 其他浏览器  
            {  
                var intervalName;   // 定时器句柄  
                $("#userName").get(0).addEventListener("input",setJsUserName,false);  
                  
                // 获得焦点时，启动定时器  
                $("#userName").focus(function(){  
                    intervalName = setInterval(handle,1000);  
                });  
                // 失去焦点时，清除定时器  
                $("#userName").blur(function()  
                {  
                    clearInterval(intervalName);  
                });  
            }  
              
            // 设置jsUserName input的值  
            function setJsUserName()  
            {  
                $("#jsUserName").val($(this).val());  
            }  
              
            // jsUserName input的值改变时执行的函数  
            function handle()  
            {     
                // IE浏览器此处判断没什么意义，但为了统一，且提取公共代码而这样处理。  
                if($("#jsUserName").val() != jsUserName)  
                {  
                    $("#toolTip").remove();  
                    $("#jsUserName").parent().append("<span id='toolTip'>看到这里的信息表明，通过js改变input的值也能响应相应事件：<span  style="color:red;" mce_style="color:red;">" + $("#jsUserName").val() + "</span></span>");  
                    jsUserName = $("#jsUserName").val();  
                }  
            }  
        }); 
$(function()
  {
   var jsUserName = "";
   if($.browser.msie) // IE浏览器
   {
    $("#userName").get(0).onpropertychange = setJsUserName;
    $("#jsUserName").get(0).onpropertychange = handle;
   }
   else // 其他浏览器
   {
    var intervalName; // 定时器句柄
    $("#userName").get(0).addEventListener("input",setJsUserName,false);
    
    // 获得焦点时，启动定时器
    $("#userName").focus(function(){
     intervalName = setInterval(handle,1000);
    });
    // 失去焦点时，清除定时器
    $("#userName").blur(function()
    {
     clearInterval(intervalName);
    });
   }
   
   // 设置jsUserName input的值
   function setJsUserName()
   {
    $("#jsUserName").val($(this).val());
   }
   
   // jsUserName input的值改变时执行的函数
   function handle()
   { 
    // IE浏览器此处判断没什么意义，但为了统一，且提取公共代码而这样处理。
    if($("#jsUserName").val() != jsUserName)
    {
     $("#toolTip").remove();
     $("#jsUserName").parent().append("<span id='toolTip'>看到这里的信息表明，通过js改变input的值也能响应相应事件：<span  style="color:red;" mce_style="color:red;">" + $("#jsUserName").val() + "</span></span>");
     jsUserName = $("#jsUserName").val();
    }
   }
  });
  </script>