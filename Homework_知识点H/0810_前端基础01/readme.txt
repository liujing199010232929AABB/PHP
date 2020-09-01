HTML文档结构
html是一种描述网页的语言我们称之为超文本标记语言；（它不是编程语言）
所谓标记语言其实是一套标记标签
html就是使用标记标签来描述网页的（所以标记标签我们也称之html标签）
html文档=网页（网页是由html标签和纯文本组成的）

标签：
标签是由尖括号括起来的关键词，通常是成对出现的（开始标签and结束标签）
单标签:没有闭合标签

元素：
成对的标签我们称之为元素 <a href=""></a> 开始标签和结束标签之间的内容我们称之为元素内容<a href="">百度</a>
单标签我们称之为空元素，没有元素内容 例如：<img src="">  <br> <meta charset="utf-8">

属性：
html标签拥有属性，属性呢为元素提供更多的信息  
html的属性在元素开始标签中规定的 写法：name="value"属性名="属性值" 例如：<a href="url"></a>

样式：
标签被设计出来是用于定义文档的内容 比如段落，列表，等 那我们如何给文档添加样式呢 这里我们就要说到css了
Cascading Style Sheets(层叠样式表) css样式定义如何显示HTML元素
在css中我们通常把样式储存在样式表中

内联样式：写在html标签内部(开始标签内部 style="属性:属性值;")
内部样式：写在head内部 针对当前页面 <style type="text/css"></style>
外部样式：外部样式 为了共享 通常储存在css文件中 

*选择器：id  class(类别选择器)  tag（标签选择器） 属性选择器

<!DOCTYPE html> 声明该文档是HTML文档  <!DOCTYPE>定义文档类型
<html>
<head>定义文档头部
	<title>文档头部</title>该标签定义文档头部
	<meta charset="utf-8">该标签定义关于html文档的元信息
	<link rel="stylesheet" type="text/css" href="">链接外部层叠样式表
	rel属性定义文档与被链接文档之间的关系
	type属性定义被连接文档的类型
	href属性定义被连接文档的url地址
	<link rel="shortcut icon" type="image/x-icon"href="">设置标题内部的图片	
</head>
<body>定义文档主体内容

</body>
</html>