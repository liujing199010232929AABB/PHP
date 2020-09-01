<!--for循环的实例-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>实战:表格自动生成器</title>
	<style type="text/css">
		h3 {
			color: green;
			margin-left:40px;
		}
		button {
			width: 80px;
			height: 30px;
			border: none;
			background-color: green;
			color:white;
			margin-right: 30px;
		}
        button:hover {
            background-color: coral;
            cursor: pointer;
        }
	</style>
</head>
<body>
	<h3>表格生成器</h3>
	<p><label>输入行:<input type="text" name="rows"></label></p>
	<p><label>输入列:<input type="text" name="cols"></label></p>
	<p><button>生成表格</button><button>重置行列</button></p>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		//创建请求标志,防止重复请求
		var flag = true

		$('button:first').on('click',function(){

			//第一步:遍历并验证用户的输入信息	
			//$(选择器).each(对象索引,当前对象):用来循环遍历获取到所有jquery对象	
			$(':input').not('button').each(function(index,obj){
				//非空判断
				if ($(obj).val().length == 0) {
					//在当前元素后添加提示信息
					$(obj).after('<span style="color:red">不能为空</span>')
					//用定时器使提示信息2秒后消失
					setTimeout(function(){
						//2秒后,将提示信息删除
						$(obj).next().remove()
					},2000)
					//返回让用户重新操作
					return false
					//非数字判断
				} else if (isNaN($(obj).val())) {
					$(obj).after('<span style="color:red">必须是数字</span>')
					setTimeout(function(){
						$(obj).next().remove()
					},2000)
					return false
					//零值判断
				} else if ($(obj).val() <= 0) {
					$(obj).after('<span style="color:red">必须大于0</span>')
					setTimeout(function(){
						$(obj).next().remove()
					},2000)
					return false
				}
			})

			//第二点:处理用户的请求(Ajax实现)
			if (flag == true) {
				$.get(
					//1.请求处理的脚本
					'demo2.php',
					//2.发送的请求参数
					{
						rows: $('input[name="rows"]').val(),
						cols: $('input[name="cols"]').val()
					},
					//3.请求成功的回调函数
					function(data){
					//先将上一次生成的表格删除
					$('p:last').next().remove()
					//生成新的表格
					$('p:last').after(data)
					//将请求标志设置为false,禁止重复请求
					flag = false
				}
			)
			}	
			

		})

		//重置按钮
		$('button').eq(1).click(function(){
			//将行与列数据全部清空
			$(':input').not('button').val('')
			//将输入焦点重置到行文本框上
			$(':input:first').focus()
			//将上一次请求生成的表格删除
			$('p:last').next().remove()
			//重置请求状态为true:允许用户请求
			flag = true
		})
	</script>
</body>
</html>


