<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <link href="/juniorchina_web/Public/Admin/css/admin.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <table cellspacing=0 cellpadding=0 width="100%" align=center border=0>
            <tr height=28>
                <td background="/juniorchina_web/Public/Admin/images/title_bg1.jpg">当前位置: </td></tr>
            <tr>
                <td bgcolor=#b1ceef height=1></td></tr>
            <tr height=20>
                <td background="/juniorchina_web/Public/Admin/images/shadow_bg.jpg"></td></tr></table>
        <table cellspacing=0 cellpadding=0 width="90%" align=center border=0>
            <tr height=100>
                <td align=middle width=100><img height=100 src="/juniorchina_web/Public/Admin/images/admin_p.gif" 
                                                width=90></td>
                <td width=60>&nbsp;</td>
                <td>
                    <table height=100 cellspacing=0 cellpadding=0 width="100%" border=0>

                        <tr>
                            <td>当前时间：<?php echo ($data); ?></td></tr>
                        <tr>
                            <td style="font-weight: bold; font-size: 16px">admin</td></tr>
                        <tr>
                            <td>欢迎进入JuniorChina网站管理中心！</td></tr></table></td></tr>
            <tr>
                <td colspan=3 height=10></td></tr></table>
        <table cellspacing=0 cellpadding=0 width="95%" align=center border=0>
            <tr height=20>
                <td></td></tr>
            <tr height=22>
                <td style="padding-left: 20px; font-weight: bold; color: #ffffff" 
                    align=middle background="/juniorchina_web/Public/Admin/images/title_bg2.jpg">您的相关信息</td></tr>
            <tr bgcolor=#ecf4fc height=12>
                <td></td></tr>
            <tr height=20>
                <td></td></tr></table>
        <table cellspacing=0 cellpadding=2 width="95%" align=center border=0>
            <tr>
                <td align=right width=100>登陆帐号：</td>
                <td style="color: #880000"><?php echo ($username); ?></td></tr>
            
                <td align=right>注册时间：</td>
                <td style="color: #880000">2007-7-25 15:02:04</td></tr>
            <tr>
                <td align=right>登陆次数：</td>
                <td style="color: #880000">58</td></tr>
            <tr>
                <td align=right>上线时间：</td>
                <td style="color: #880000"> <?php echo ($data); ?> </td></tr>
            <tr>
                <td align=right>IP地址&nbsp;&nbsp;&nbsp;：</td>
                <td style="color: #880000"><?php echo ($_SERVER['REMOTE_ADDR']); ?></td></tr>
           
            </tr>
            
        </table>
    </body>
</html>