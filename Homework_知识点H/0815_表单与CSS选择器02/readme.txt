css知识
css: 层叠样式表
一、css选择器基本语法
1.样式规则: 选择器 + 样式声明;
2.样式声明: {属性: 值}, 多个名值之间用分号(;)分隔;
3.样式规则举例: h3 {color: red; font-size: 3rem};

---------------------------------------------------------------

二、元素的单位 : demo1.html
1.px: 像素单位,相对于当前的显示器;
2.em: 元素单位,相对于当前元素或父元素字体大小,默认1em=16px;
3.rem: 根元素单位,相对于根元素html字体大小,默认1rem=16px;


---------------------------------------------------------------

三、样式的继承 : demo2.html
1.文档树: DOM结构
2.可继承: 字体,大小,颜色,列表样式,表格样式等
3.非继承: 边框,内外边距

---------------------------------------------------------------

四、样式冲突的处理 : demo3.html
1.优先级:与样式规则声明的位置相关
    (1).内联: 以style属性方式声明在起始标签内,仅对当前元素有效;
    (2).内部: 以<style>标签方式声明在当前的html文档内,仅对当前文档有效;
    (3).外部: 将样式规则存放在外部样式文件中(.css),通过<link>标签href属性引入;
    优先级: 内联 > 内部 > 外部 (特殊性越小,优先级别越低)
2.顺序: 相同样式后写覆盖先写的;
3.重要性: !important, 不推荐;

---------------------------------------------------------------

五、常用选择器: demo4.html
1.根据元素的特征:
元素主要是由标签与属性组成:
    (1).根据标签选择元素是最简单的,因为当前页面通常不会只有一个同类元素,所以返回的是一个数组,即元素集合
    **名称: 标签选择器
    h2 {color: red}

    (2).根据通用属性选择:id和class
    **名称: id选择器
    #box {width: 200px;}  返回唯一元素
    **类选择器/class选择器
    .green {color: green} 返回元素集合

    (3)根据其它属性选择:可以依据属性名,属性值,以及属性值中的文本内容进行选择,返回元素集合
    **名称: 属性选择器
    h2[title]: 包括title属性的标签;
    h2[title="汽车"]:精确匹配<h2 title="汽车">;
    h2[class^="val"]: 匹配class属性值以val单词开始的元素;
    h2[class$="val"]: 匹配class属性值以val单词结尾的元素;
    h2[class*="val"]: 匹配class属性值包含val子串的元素;

2.根据元素的位置(也叫上下文):
    (1)根据祖先元素定位,包括多个层级,使用空格进行层级区隔
    **名称: 层级选择器/后代选择器
    #box p {color: red}

    (2)根据父元素定位,只隔一个层级,也叫:
    **名称:子选择器
    #box > a {color: red}

    (3)根据相邻元素定位,必须先找到同级元素的起点
    **名称: 相邻选择器
    #box ~ * {color: red}
    **名称: 相邻兄弟选择器
    #box + p {color: red}

3.根据元素的分组:
    (1)选择一组相关的元素
    **名称: 群组选择器
    body, h1, h2, h3, ul {padding:0; margin:0}

    (2)选择全部元素
    * {padding: 0; margin: 0}


4.伪类选择器:
    (1)状态
    <a>标签的四种状态: link,visited,focus,hover,active
    大多数标签都支持: hover (鼠标悬停效果)
    (2)位置:
    第一个: li:child-child {background-color: gray}
    最后一个: li:last-child {background-color: cyan}
    指定位置的子元素: li:nth-child(n) {background-color: red}
    * 唯一子元素: :only-child {background-color: red}
    * 限定唯一子元素: only-of-type {background-color: red}
    * 例数第n个子元素: li:nth-last-child(2) {background-color: red}
    * 选择每个父级的第二个p元素: p:nth-of-type(2)








