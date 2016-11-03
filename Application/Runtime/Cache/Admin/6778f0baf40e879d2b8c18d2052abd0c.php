<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <link href="/juniorchina_web/Public/Admin/css/admin.css" type="text/css" rel="stylesheet" />
        <script>
            function expand(el)
            {
                childobj = document.getElementById("child" + el);

                if (childobj.style.display == 'none')
                {
                    childobj.style.display = 'block';
                }
                else
                {
                    childobj.style.display = 'none';
                }
                return;
            }
        </script>
    </head>
    <body>
        <table height="100%" cellspacing=0 cellpadding=0 width=170 
               background="/juniorchina_web/Public/Admin/images/menu_bg.jpg" border=0>
               <tr>
                <td valign=top align=middle>
                    <table cellspacing=0 cellpadding=0 width="100%" border=0>

                        <tr>
                            <td height=10></td></tr></table>
                    <table cellspacing=0 cellpadding=0 width=150 border=0>

                        <tr height=22>
                            <td style="padding-left: 30px" background="/juniorchina_web/Public/Admin/images/menu_bt.jpg"><a 
                                    class=menuparent onclick=expand(1) 
                                    href="javascript:void(0);">基金产品</a></td></tr>
                        <tr height=4>
                            <td></td></tr></table>
                    <table id=child1 style="display:none" cellspacing=0 cellpadding=0 
                           width=150 border=0>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="/juniorchina_web/Public/Admin/images/menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="/juniorchina_web/index.php/Admin/Fund/funddata" 
                                   target=right>基金资料</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="/juniorchina_web/Public/Admin/images/menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="/juniorchina_web/index.php/Admin/Fund/" 
                                   target=right>基金业绩</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="/juniorchina_web/Public/Admin/images/menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="/juniorchina_web/index.php/Admin/Fund/" 
                                   target=right>产品净值</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="/juniorchina_web/Public/Admin/images/menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="/juniorchina_web/index.php/Admin/Fund/order" 
                                   target=right>认购流程</a></td></tr>
                        <tr height=4>
                            <td colspan=2></td></tr></table>
                    <table cellspacing=0 cellpadding=0 width=150 border=0>
                        <tr height=22>
                            <td style="padding-left: 30px" background="/juniorchina_web/Public/Admin/images/menu_bt.jpg"><a 
                                    class=menuparent onclick=expand(2) 
                                    href="javascript:void(0);">新闻咨询</a></td></tr>
                        <tr height=4>
                            <td></td></tr></table>
                    <table id=child2 style="display: none" cellspacing=0 cellpadding=0 
                           width=150 border=0>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="/juniorchina_web/Public/Admin/images/menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=right>公司新闻</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="/juniorchina_web/Public/Admin/images/menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=right>分类管理</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="/juniorchina_web/Public/Admin/images/menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=right>子类管理</a></td></tr>
                        <tr height=4>
                            <td colspan=2></td></tr></table>
                    <table cellspacing=0 cellpadding=0 width=150 border=0>
                        <tr height=22>
                            <td style="padding-left: 30px" background="/juniorchina_web/Public/Admin/images/menu_bt.jpg"><a 
                                    class=menuparent onclick=expand(3) 
                                    href="javascript:void(0);">关于尊驾</a></td></tr>
                        <tr height=4>
                            <td></td></tr></table>
                    <table id=child3 style="display: none" cellspacing=0 cellpadding=0 
                           width=150 border=0>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="/juniorchina_web/Public/Admin/images/menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="/juniorchina_web/index.php/Admin/About/profile" 
                                   
                                   target=right>公司简介</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="/juniorchina_web/Public/Admin/images/menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="/juniorchina_web/index.php/Admin/About/invest" 
                                   target=right>投资理念</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="/juniorchina_web/Public/Admin/images/menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="/juniorchina_web/index.php/Admin/About/honor" 
                                   target=right>公司荣誉</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="/juniorchina_web/Public/Admin/images/menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="/juniorchina_web/index.php/Admin/About/partner" 
                                   target=right>合作伙伴</a></td></tr>
                        <tr height=4>
                            <td colspan=2></td></tr></table>
                    <table cellspacing=0 cellpadding=0 width=150 border=0>
                        <tr height=22>
                            <td style="padding-left: 30px" background="/juniorchina_web/Public/Admin/images/menu_bt.jpg"><a 
                                    class=menuparent onclick=expand(4) 
                                    href="javascript:void(0);">客户服务</a></td></tr>
                        <tr height=4>
                            <td></td></tr></table>
                    <table id=child4 style="display: none" cellspacing=0 cellpadding=0 
                           width=150 border=0>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="/juniorchina_web/Public/Admin/images/menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=right>客户服务</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="/juniorchina_web/Public/Admin/images/menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=right>分类管理</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="/juniorchina_web/Public/Admin/images/menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=right>子类管理</a></td></tr>
                        <tr height=4>
                            <td colspan=2></td></tr></table>
                   
                        <tr height=4>
                            <td></td></tr></table>
             
    </body>
</html>