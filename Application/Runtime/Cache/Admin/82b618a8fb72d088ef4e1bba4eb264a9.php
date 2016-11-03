<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="/juniorchina_web/Public/Admin/kind/themes/default/default.css" />
	<link rel="stylesheet" href="/juniorchina_web/Public/Admin/kind/plugins/code/prettify.css" />
	<script charset="utf-8" src="/juniorchina_web/Public/Admin/kind/kindeditor.js"></script>
	<script charset="utf-8" src="/juniorchina_web/Public/Admin/kind/lang/zh_CN.js"></script>
	<script charset="utf-8" src="/juniorchina_web/Public/Admin/kind/plugins/code/prettify.js"></script>
	<script>
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="content1"]', {
				cssPath : '/juniorchina_web/Public/Admin/kind/plugins/code/prettify.css',
				uploadJson : '/juniorchina_web/Public/Admin/kind/upload_json.php',
				fileManagerJson : '/juniorchina_web/Public/Admin/kind/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
				}
			});
			prettyPrint();
		});
	</script>
	</head>
	<body>
		
	<?php if(is_array($info)): foreach($info as $key=>$vo): ?><form name="example" method="post" action="partner.html">
    ID: <input type="text" readonly="readonly" name="title" value=" <?php echo ($vo["id"]); ?>">
         <br /><br />
		<textarea name="content1" style="width:1100px;height:400px;visibility:hidden;"> <?php echo ($vo["content"]); ?></textarea>
		<br />
		<input type="submit" name="button" value="提交内容" /> (提交快捷键: Ctrl + Enter)
	</form><?php endforeach; endif; ?>
	</body>
</html>