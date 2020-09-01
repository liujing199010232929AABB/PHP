<!--
系统变量: $_FILES是一个二维数组,一维是当前的文件上件控件的名称,就是name属性值
二维是它的当前属性,最重要的有以下几个:
$_FILES['file']['name']: 文件原始名称
$_FILES['file']['type']: 文件类型
$_FILES['file']['size']: 上传的文件大小
$_FILES['file']['tmp_name']: 服务器上的临时文件夹
$_FILES['file']['error']: 上传错误代码
-->

<!-- $_SERVER['PHP_SELF']:当前php脚本 -->
<!-- enctype="multipart/form-data" :允许通过表单上传文件-->
<!-- method:请求类型必须是POST -->
<!--
处理脚本的三种语法:
1. 最严格的写法:$_SERVER['PHP_SELF']:建议实际工作中用htmlspecialchars()进行防跨域攻击处理
2. 最死板的写法,直接写上当前文件名: demo6.php
3. 最懒的写法: 空,啥与不写,默认就是提交到当前页面的php脚本处理
-->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
	<!-- 用隐藏域设置允许上传的文件大小,仅考参考 -->
	<input type="hidden" name="MAX_FILE_SIZE" value="542488">
	<fieldset>
		<legend align="center">文件上传</legend>
		<p><strong>选择文件:</strong><input type="file" name="upload"></p>
	</fieldset>	
	<p align="center"><button type="submit" name="submit" >上传</button></p>
</form>

<?php 
	//检测请求类型是否POST,如果不是应该提示用户类型不对
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		//检测是否有文件被上传
		if (isset($_FILES['upload'])) {
			//设置允许上传的文件类型
			$allow = ['image/jpg','image/jpeg', 'image/png'];
			if (in_array($_FILES['upload']['type'], $allow)) {
				//将文件先移动到临时目录
				if (move_uploaded_file($_FILES['upload']['tmp_name'], "upload/{$_FILES['upload']['name']}")){
					//上传成功
					echo "<script>alert('文件上传成功')</script>";
				} 
			}else {
					//提示格式不对
					echo "<script>alert('仅允许上传jpg和png格式的图片')</script>";
				}
		}
		//对上传错误进行处理
		if ($_FILES['upload']['error'] > 0 ) {
			echo '<p>错误原因是:<strong>';

			switch ($_FILES['upload']['error']) {
				case 1:
					echo '文件超过了php.ini配置中设置的大小';
					break;
				case 2:
					echo '文件超过了表单中常量设置的大小';
					break;
				case 3:
					echo '仅有部分文件被上传';
					break;
				case 4:
					echo '没有文件被上传';
					break;
				case 6:
					echo '没有可用的临时文件夹';
					break;
				case 7:
					echo '磁盘已满,写入失败';
					break;
				case 8:
					echo '上传意外中止';
					break;
				
				default:
					echo '系统未知错误';
					break;
			}

			echo '</strong></p>';
			//保险起见,最好把创建的临时文件删除,当然系统也会在结束会话时自动清空
			if (file_exists($_FILES['upload']['tmp_name']) && is_file($_FILES['upload']['tmp_name'])) {
				unlink($_FILES['upload']['tmp_name']);
			}
		}
	} else {
		echo '1';
	}
?>