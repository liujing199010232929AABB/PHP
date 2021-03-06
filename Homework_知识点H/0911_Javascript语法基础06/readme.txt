1. javascript是什么? 有什么用?
    (1).javascript是最流行的,而且是唯一的写"前端脚本"的编程语言;
    (2).前端主要是指:html,css,javascript,以及相关的开发框架,函数库等,共同特征就是指可以直接在浏览器中运行;
    (2).脚本语言的一个基本特征是,可以使用标签,以元素的形式直接嵌入到html文档中,例如<script></script>,<?php ?>;
    (3).javascript功能极其强大,强大到令人发指,前后端几乎通吃,但它最主要的功能仍是实现用户与页面的交互操作;

---------------------------------------------------------------------------------------------------

2. 如果将js代码写到html中?
    (1). 使用标签:<script>,它是双标签
    (2). 可以添加一个属性 type="text/javascript"表示脚本的类型,但考虑到js是前端唯一并且是默认脚本,所以推荐省略掉
    (3). js代码可以写到<script></script>标签中,类似css中页内样式,仅限当前文档使用
    (4). 如果想将js代码应用到更多的html文档中,可以在起始标签<script src="js.js">添加src属性,指定一个外部js文件
        类似css中的外部样式表,实现脚本共享,这也是js最常用的方式,写到独立文件中,不仅可页页共享,还能缓存,提升加载速度.
    (5). <script>中引入外部脚本时,其标签内的js代码将会被忽略.
    (6). 浏览器是可以禁用js的,但这种情况极期罕见,毕竟大多应用是基于js,所以大家在学习时可以忽略用户是否禁用js脚本.

---------------------------------------------------------------------------------------------------

3. js运行结果的三种输出方式
    (1). alert()弹窗 let site = 'php中文网'; alert(site);
    (2). write()方法: document.write(site);
    (3). console.log()控制台: console.log(site);

---------------------------------------------------------------------------------------------------

4. 基本语法:
    (1).字面量[值]: 'php中文网';  99; js中,字面量非常强大,将功能发挥到了极致,一定要格外重视
    (2).变量[名称/标识符]: 临时存放数据的地方,就是数据的占位符而已,例如:site = 'php中文网'; price = 99;
    (3).操作符:主要有算术运算(+,-,*,/,=)与逻辑运算(==,!==,===,<,>...)二类,重点是操作符对操作数的类型转换;
        例如: 15 + 20 // 35;    '15' + 20 // 1520,字符串拼接;
    (4).注释: 与php类似, 单行//,多行 /* ... */;
    (5).语句: 用分号';'结束,分号并非必须有,可以省略,近些年越多越多的开发者都开始省略分号,但在学习阶段,为了避免入坑,推荐加上;

---------------------------------------------------------------------------------------------------

5. js脚本的基本组成部分: 变量和函数,下面咱们先聊聊变量:
   (1). 变量使用ESC6标准的: let声明, 函数使用 function 声明;
   (2). 传统的使用var声明,不支持块作用域,并且允许重复声明,let完美的解决以上问题,推荐使用;
   (3). 什么是块作用域? if(){...}, for(){...},之前js只支持一种函数作用域,这和php是一样的;
   (4). php到目前为止,仍不直接支持块作用域,可以使用其它技术来模拟,使用闭包等;
   (5). var 和 let 声明变量的区别:
        1. let支持块作用域,var不支持
        if (true) {
           var n = 100;     // var声明,块作用域外部可以拿到
           let n = 100;     //let声明,块作用域外部拿不到
       }
       console.log(n);
       2. let不允许重复定义,var允许
       let name = 'peter';
       let name = 'zhu';  // 报错
       var salary = 5800;
       var salary = 6800; // 不报错
   (6). let 变量声明时未初始化,默认值为undefined,undefined是一种特殊的类型,一会再说
   (7). let 变量提升时,会报引用错误,而var会输出undefined,所以推荐必须先声明再初始化,或者声明初始化二合一;
   (8). 以后尽可能使用let来声明和使用变量,大家把var 忘了吧;

---------------------------------------------------------------------------------------------------

6. 变量的数据类型
    (1). js数据类型分为二大类: 原始类型与引用类型; js不允许自定义数据类型,因为js是动态的,可以模拟出任何类型,不需要自定义
    (2). 原始类型有五种: String字符串,Number数值(不区分整数和浮点数),Boolean布尔,Undefined未定义,Null类型
    (3). 引用类型:[Object对象, Array数组]重点掌握,Function函数, Date日期,RegExp正则, 包装对象...
    (4). 类型检测: typeof ,只能检测出: 原始类型与函数,其它都返回Object,
        typeof 'abc'    // "string"
        typeof 100      // "number"
        typeof true     // "boolean"
        typeof null     // "object" ,正确应该返回:"null",这是历史遗留问题,暂时无解
        typeof undefined    // "undefined"
        typeof [1,2,3]      // "object"
        typeof {x:1,y:2}    // "object"
        typeof function f1(){}  // "function"

        对于引用类型,应该使用 instanceof

        let o = {x:1,y:2}
        o instanceof Object     // true

        instanceof 检测数组类型是会有问题:
        [1,2,3] instanceof Array    // true
        [1,2,3] instanceof Object   // true,因为数组也是对象,返回true也应该是对的
        正确方法应该是使用Array的isArray()方法
        Array.isArray([1,2,3])      // true
        Array.isArray({x:1,y:3})    // false
        Array是数组对象的构造函数,一会再说

---------------------------------------------------------------------------------------------------

7. 函数:
    在学习之前,咱们先学点其它的玩意:
    老子的《道德经》第四十二章:《道生一，一生二，二生三，三生万物》这里老子说到“一”、“二”、“三”，乃是指“道”创生万物的过程。
    主要讲述了一、二、三这几个数字，并不把一、二、三看作具体的事物和具体数量。它们只是表示“道”生万物从少到多，从简单到复杂的一个过程。
    《淮南子·天文训》从哲学上的解释:"道(曰规)始于一,一而不生,故分而为阴阳,阴阳合和而万物生。故曰:一生二,二生三,三生万物"。
    照《淮南子》的解释, "二"是"阴阳",三是“阴阳合和";
    套用到js中: 用户生函数,函数生对象,对象生万物,所以在js中,一切皆对象
    现在跟着我大写朗读三遍: "js中,一切皆对象"
    只是牢记这句话,后面的课程,你才会搞明白,否则从根上就把你干蒙逼了~~~


    (1).函数是js中的一等公民,不仅是代码执行的基本单元,也是创建其它成员的基本类型;
    (2).函数按功能分为二大类: 普通函数,构造函数;
    (3).按创建方式分为: 函数声明,函数表达式,匿名函数,自执行函数;
    (4).函数声明自动提前:因为函数如此重要,所以函数声明会自动提升到代码最前面,不论在脚本的什么地方声明,都可以直接使用;
    (5).函数调用必须使用函数名加上一对圆括号;
    (6).函数中可以使用return 返回结果,如果没有return 语句,函数执行完毕,会返回 undefined ;
        function f1() {}
        f1()    // undefined
        function f2(){return 'php.cn'}
        f2()    // "php.cn"
    (7).每次执行函数,都会自动创建一个函数作用域,与外部临时隔离,函数外部成员在函数作用域内可见,反之则不行;
        let m = 100;        // 该变量声明在函数外部,全局范围内可见
        function f3() {
        	return m +50;   //函数外声明的变量全局可见
        }
        f3()    // 150

        function f4(){
        	let n = 20; //函数内声明的变量,外部不可见
        }
        m +n    // n 未定义,出错
    (8).函数表达式
        表达式通常会返回一个确定的值,所以可以直接将表达式用到需要值的地方
        let f5 = function (){ return 200; }
        150 + f5()      // 350, f5()可直接看到一个值,内容就是调用f5()函数的结果
    (9).匿名函数:主要用做函数的参数
        [1,2,3,4].filter(function(item,index,array){return item>2;})
    (10).自执行函数:声明完直接运行,不需要调用
        (function(a,b){return a+b;})(20,40)     // 60


    (11)函数的参数问题:
    1. js根本不在乎函数有没有参数,以及参数有多少,是什么类型;
    2. 因为在内部是使用一个数组来接收这些参数,并使用对象 arguments 来访问这个数组
    3. 因此函数中的参数只是一个实际参数的占位符而已,仅起提示作用,所以也叫: "命名参数"
    4. 命名参数仅提供了访问便利,并非必要;
    5. arguments对象, 可以像使用数组一个使用它,例如:arguments[1],但它并不是Array对象的实例;
    6. arguments.length 属性中保存着参数的数量
    7. js中没有函数签名,不存在函数重载(相同的签名,不同的实现)
    7. 但是js可以用动态参数来模拟重载: 案例:根据参数不同,执行不同的操作
        //声明
        function add() {
            var num = arguments.length
            switch (num) {
                case 0:
                    return '至少要有一个参数'
                    break
                case 1:
                    return arguments[0]
                    break
                case 2:
                    return arguments [0]+arguments[1]
                    break
                case 3:
                    return arguments[0]+arguments[1]+arguments[2]
                    break
                default:
                    return '参数过多'
            }
        }

        //调用
        add() // '至少要有一个参数'
        add(100) // 100
        add(100,200)  // 300
        add(100,200,300) // 600
        add(100,200,300,400) // '参数过多'


---------------------------------------------------------------------------------------------------


8. 数组 Array
    1. Array 是仅次于 Object 外使用频率最高的引用类型;
    2. Array 是有序列表,每一个数组元素可以保存任何类型的数据;
    3. Array 的长度是可以动态调整的,自动增长;
    4. 与Object类似,创建Array数组也有二种式: 实例化构造函数Array, 字面量
        (1). 构造函数Array
        var arr = new Array()  //实例化Array(),创建空数组
        var arr = new Array(3) // 创建的新数组有三个预置元素,默认值都是undefined
        var arr = new Array(3,5,'a') //一个或一个以上非数值元素,就是创建实际的内容而非长度
        var arr = Array([1,2,3],'php','html') //可省略new,可传入数组等多种类型给构造函数

        (2). 字面量
        var arr = ['html','css','javascript']; //字面量
        var arr = []; // 空数组

        无论使用哪一种方式,都会有二个默认的属性:
        1. length: 数组元素的数量
        2. __proto__:
    5. length 属性的特殊用途:
        (1). Array.length : 是可读可写的,可人为设置,实现数组元素的移除与添加;
        (2). Array.length : 它的值始终比元素最大索引大1,可以用作永远指向下一个元素的索引;
        (3). 添加元素
            var arr = []  // 空数组
            arr[arr.length] = 100  // arr.length = 0,等价于arr[0] = 100
            arr[arr.length] = 200
            arr[arr.length] = 300
        (4). 删除元素
            var arr = ['html','css','javascript','jquery','vue.js']
            arr.length   // 当前数组长度: 5 ,即有5个元素
            arr[arr.length-1]   // 获取最后一个元素的值: 'vue.js'
            arr.length -= 1    // 将数组长度减1, 即当前数组长度更新为: 4
            arr[arr.length-1]  // 获取最后一个元素的值: 'jquery'
    6. 创建新数组
        (1):基于当前数组中的所有项,创建一个新数组: concat()
            var arr = [1,2,3]
            arr.concat(4,5)     // 返回5个元素的新数组:[1, 2, 3, 4, 5]
            arr.concat([6,7,8]) // 接受数组参数,这个数组会拆开,将每一个元素并入原数组中:[1, 2, 3, 6, 7, 8]
        (2).基于数组的开始与结束的位置来创建: slice() 单词本意: 切开
            slice(起始索引[,结束索引]),如省略结束索引,默认为后面全部数据
            var arr = [10,20,30,40,50]
            arr.slice(2)        // 从索引2开始,获取后面全部内容: [30, 40, 50]
            arr.slice(1,4)      // 从索引1开始,到索引4结束(不含索引4): [20, 30, 40]
        (3).向数组中间插入数据: splice(), 功能主要是: [删除,插入,替换]
            参数说明: splice(start,length,value...)
            1). 删除
            arr.splice(起始,删除数)
            var arr = [10,20,30,40,50]
            arr.splice(0,2)     // 从头部0,开始删除2个,返回删除的元素: [10, 20]

            2). 插入
            arr.splice(起始,0,要插入项)
            arr.splice(1,0,88,99) //第二个参数0,表示插入,插入的数据是第三个参数
            //本例是从第二个元素起,插入二个新元素:88,99:
            arr     // 查看当前数组: [30, 88, 99, 40, 50]

            3). 替换
            arr.splice(起始,删除数,要插入项)
            arr.splice(2,1,'dog','cat')     // 返回删除项: 99
            arr     // 查看数组: [30, 88, "dog", "cat", 40, 50]
    7. 栈方法
       (1).数组可以模拟栈操作
       (2).栈是一种LIFO(Last_In_First_Out)'后进先出'的数据结构,插入与删除只能是栈顶(一端)进行
       (3).push()入栈, pop()出栈
       (4).举例
           var arr = []     // 创建空数组
           arr.push(10,20)  // 将数组看成栈,入栈二个元素,10先入,20后入,返回数组长度:2
           arr              // 查看当前数组: (2) [10, 20]
           arr.length       // 查看当前数组长度: 2
           arr.push([1,2])  // 入栈一个数组元素,返回长度: 3
           arr              // 查看数组: (3) [10, 20, (2) [1, 2]
           arr.pop()        // 出栈(栈顶元素出栈):  (2) [1, 2]
           arr.pop()        // 继续出栈: 20

    8. 队列方法
       (1).与栈方法相对的是队方法:FIFO(First_In_First_Out):先进先进
       (2).因为栈方法:push()可以从数组未端添加元素,所以只需要一个方法可以从前端获取元素即可
       (3).从数组前端获取元素的方法就是:shift(),并自动将数组长度减1;
       (4):push() + shift() 实现队操作:尾进头出
           var arr = [10,20,30]
           arr.push(40)     // push()尾部入队: 40
           arr.length       // 此时数组长度是: 4
           arr              // 查看队列: (4) [10, 20, 30, 40]
           arr.shift()      // shift()从前端(头部出队),返回出队元素: 10,长度自动减1
       arr.length           // 当前数组长度是: 3
       (5):unshift(),可以在数组前添加任意数组的元素,并更新数组长度,与栈方法pop()配合实现队操作
       (6):unshift() + pop() 实现队操作:头进尾出
           var arr = [10,20,30]
           arr.unshift(3,5)     // unshift()入队操作: 头部添加二个新元素,并自动更新长度
           arr.length           // 新长度: 5
           arr                  // [3,5,10,20,30]
           arr.pop()            // pop()出队操作: 返回出队元素: 30,并更新长度
           arr.length           // 新长度: 4

    9. 重排序方法
        (1).反转: reverse()
        var arr = [1,2,3,4,5]
        arr.reverse()       // 数组元素翻转:(5) [5, 4, 3, 2, 1]

        (2).sort()更加的灵活
        var arr = [10,4,22,8,2]
        arr.sort()      // [10, 2, 22, 4, 8]:显然错误,因为sort()默认将元素视为字符串,'10'显然是小'2'
        //解决方案: sort()可接受一个回调参数,在回调函数中进行比较运算完成正确排序
        function compare(val1,val2){
        	if (val1 < val2) {
        		return -1
        	} else if (val1 > val2) {
        	    return 1
        	} else {
        	    return 0
        	}
        }

        ***对于数值型元素的比较,这个回调函数可以进行简化:
        function compare(val1,val2) {
            return val - val2  //升序
        }

        arr.sort(compare)       // 输出正确结果:[2, 4, 8, 10, 22]
        //如果改为降序排列,只需要改变回调中的返回值即可
        function compare(val1, val2) {
            return val2-val1   //降序: 用第二个参数减去第一个参数即可
        }

        arr.sort(compare)   // 降序: [22, 10, 8, 4, 2]


    10. 位置方法
        (1). indexOf(要查找的项 [,起始位置]): 从头部开始,查找失败返回: -1
        (2). lastIndexOf(要查找的项 [,起始位置]): 从尾部开始,查找失败返回: -1
        (3). 实例:在数组中查找指定元素并返回索引:
             var arr = [1,2,3,4,5,4,3,2,1]
             arr.indexOf(4)         // 查找4,返回4在数组中的索引位置: 3
             arr.indexOf(4,4)       // 传入第二参数,指定从索引4开始查找,返回索引位置: 5
             arr.lastIndexOf(4)     // 从尾部查找4,返回4第一次出的索引位置: 5
             arr.lastIndexOf(4,4)   //从尾部查找4,从索引4开始,跳过了5,所以输出索引位置: 3


    11. 迭代方法
        (1). 5个方法都可以接受2个参数:每一顶上运行的回调函数(必选),运行该函数的作用域[可选](影响this的值)
        (2). 这几个方法不会影响到原数组的值
        (3). 五个方法介绍:
             (1). every():如果每一项运算都返回true,则返回true;
             (2). some(): 任一项运算返回true,则返回true;
             (3). filter(): 返回true项组成的新数组;
             (4). forEach(): 每一项执行给定函数,无返回值;
             (5). map(): 返回每次执行结果组成的新数组
        (4). 举例:
             (1). every()
             var arr = [1,2,3,4,5,6]
             // 要求每一项都必须大于2,才可以返回true,显示第1,2个元素不符合要求
             arr.every(function(item,index,array){ return item > 2 })
             (2). some()
             // 只要数组元素中有一个元素值大于2,就满足条件并返回true
             arr.some(function(item,index,array){ return item > 2 })
             (3). fileter()
             // 返回数组中元素值大于2的元素,组成的新数组
             arr.filter(function(item,index,array){ return item > 2 })
             (4). forEach():注意无返回值,不要使用return ,常用来遍历数组
             //输出全部的元素值
             arr.forEach(function(item,index,array){ console.log(item) })
             //输出元素的索引
             arr.forEach(function(item,index,array){ console.log(index) })
             // 输出当前正在遍历的数组元素:注意会把当前数组输出6遍
             arr.forEach(function(item,index,array){ console.log(array) })


    12. 归并方法
        (1). 本质是数组元素之间的二二计算,并把结果带到下一次的运算中;
        (2). reduce(): 从第一项开始迭代,直到计算出一个最终值;
        (3). reduceRight(): 从最后一项开始迭代,向前遍历直到第一项;
        (4). 都可以接受二个参数: 1迭代的函数,2是可选的归并初始值
        (5). 迭代函数有四个参数: prev前一个,cur当前,index索引,array数组
            var arr = [1,2,3,4,5]
            // 计算:1+2+3+4+5的值
            // 计算过程:
            // 1 + 2 = 3
            // 3 + 3 = 6
            // 6 + 4 = 10
            // 10 + 5 = 15
            arr.reduce(function(prev,cur,index,array){return prev+cur})     // 结果: 15

            //给reduce(callback,init)传入第二参数,计算的初始值: 10
            arr.reduce(function(prev,cur,index,array){return prev+cur},10)  // 结果: 10 + 15 = 25

            // reduceRight()功能与reduce()完全一致,只是计算方向从右边开始
            arr.reduceRight(function(prev,cur,index,array){return prev+cur})    // 15
            arr.reduceRight(function(prev,cur,index,array){return prev+cur},10) // 25

---------------------------------------------------------------------------------------------------

9. Object 类型
    1.创建Object实例:
        (1). 构造函数
         var obj = new Object()
         obj.name = 'Peter'
         obj.age = 29
        (2). 字面量
        var obj = {
            name: 'Peter',
            age: 29
        }
    2. 表达式上下文: 花括号出现在赋值操作右边,就是一个表达式上下文,左花括号就是表达式的开始;
    3. 语句上下文: 花括号出现在语句上下文中,例如 if/while...,则是语句块的开始;
    4. 用字面量创建实例,最后一个属性后不要添加','号;
    5. 属性名可以用字符串: var obj = {'name': 'zhu', 'sex': 'male'}
    6. 可以创建一个只包含默认属性和方法的实例: var obj = {}  // obj只有默认属性和方法,等价于new Object()
    7. 案例,根据参数是否有指定属性,输出对应的内容
    function displayInfo(args) {
        var output = ''

        if (typeof args.name == 'string') {
            output += 'Name: ' + args.name + '\n'
        }

        if (typeof args.age == 'number') {
            output += 'Age: ' + args.age + '\n'
        }

        console.log(output)
    }

    displayInfo({name: '朱老师', age: 30})  // Name: '朱老师' Age: 30
    displayInfo({name: '朱老师'})  //  Name: '朱老师'
    displayInfo({age: 30})  //  Age: 30
    displayInfo({'age': 30})  //  Age: 30
    displayInfo({})   // 空

    可以,无论输入什么,都可以得到正确的结果;
    8. 通常情况下,必选参数使用命名参数比较好,当有多个可选参数时使用对象字面量时行封装会更灵活;

    9. 刚才都是使用的点'.'语法来访问实例中的属性,支持属性名是标识符或字符串,其实也支持方括号;
    10.使用方括号语法与数组类似,但是实例的属性/方法名必须放到引号中: obj['name']
    var obj = {name:'peter', age: 30}
    console.log(obj['name'])
    console.log(obj['age'])
    11.方括号语法还支持变量属性名:
    var a = 'name'
    var obj = {name:'zhu'}
    obj.a // undefined
    obj[a] // 'zhu'

*******************************************************************************************

对象的扩展知识:
一、对象的生成:
    (1).对象字面量
        1. 使用字面量生成对象的三种场景:
            (1): 单例模式(singleton);
            (2): 多值数据(函数的参数与返回值)
            (3): 替代构造函数来生成对象
        2. 场景一:单例模式
            (1).所谓单例:将类的实例对象数量限定为一个;
            (2).类是对象的模板,可以多次实例化,创建多个实例对象;
            (3).如果只需要一个实例对象,但么就没必要去创建类了;
            (4).所以使用字面量直接创建一个单例对象是最方便的啦.
            var obj = {name:'peter', name:30}

        3. 场景二: 多值数据的使用场景[类似于关联数组]
            (1). 给函数传递多个参数
            [传统方式:]
            function getData(x, y, z) {
                return (x+y+z)
            }
            getData(1,2,3)  // result: 6

            [对象字面量做为函数调用的实参]
            function getData(data) {
                return (data.x+data.y+data.z)
            }
            getData({x:1, y:2, z:3})  // result: 6

            [对象字面量做为默认参数]
            //如果调用时没有传入实参
            function getData(data) {
                //函数内修改参数值并不是一个好习惯
                data = data || {x:1, y:2, z:3}
                return (data.x+data.y+data.z)
            }
            getData()  // result: 6

            [对象字面量做为函数返回值]
            function func() {
                return {x:4, y:5, z:6}
            }
            func()  // {x:4, y:5, z:6}

            [扩展知识,返回数组,并实现将数组中元素转为独立变量的技巧]
            function func() {
                return [4, 5, 6]
            }
            [x,y,z]=func()  // 将数组中的元素转为独立的变量
            x   // x = 4
            y   // y = 5
            z   // z =6

        4. 场景三: 代替构造函数
            (1). 构造函数是用来创建对象的,所以只需要将对象字面量做为函数返回值即可;
            (2). 从语法上看,与返回多值数据基本相同,区别在于执行方式;
            (3). 实例:
            function createObj() {
                //直接将对象字面量做为返回值
                return {
                    x: 10,
                    y: 20,
                    z: 30,
                    sum: function () {
                        return this.x + this.y + this.z
                    }
                }
            }

            var obj = createObj()
            obj.sum()   // 结果: 60
            createObj().sum()   //使用链式调用进行简化

        (2). 构造函数与new表达式
            1. 构造函数是一种必须要通过new表达式调用的特殊函数;
            2. 构造函数的用途是用来创建对象(类的实例化);
            3. 因为类可以被实例化为对象,所以类中必须要有该实例对象的代言人;
            4. 这个特殊的类中对象的代言人,就是伪变量: this
            5. 构造函数基本用法:
                (1).声明: function MyClass(x, y) {
                            this.x = x
                            this.y = y
                         }
                (2).调用: var obj = new MyClass(10,20)
                         obj.x  // 10
                         obj.y  // 20
            6. 总结:
                (1).构造函数本身与普通函数声明形式是相同的;
                (2).构造函数是通过"new"表达式来调用;
                (3).new 表达式的值: 新对象的引用
                (4).new 表过式是通过构造函数内的this引用了新生成的对象

            (一).new 表达式的操作
                new 操作的完整流程
                1. new 表达式 首先是新生成一个"操作对象"(可视为一个通用对象,是对象就具备访问属性和调用方法的能力);
                2. 用这个"操作对象"调用指定的函数(即构造函数);
                3. 构造函数内部有一个内部指针:this,指向了这个由"new"表达式新生成的操作对象;
                4. 在构造函数中,可以使用this为当前操作对象添加属性或方法;
                5. 构造函数执行完成,将会返回该操作对象的引用:this, 做为new 表达式的 "值"
                6. 即: new 操作 的最终返回值,其实就是构造函数中的: this

            (二).构造函数的调用
                1. 其实任何函数都可以通过 new 来调用,所以任何函数都可以充当构造函数的角色;
                2. 但只有一个函数内部使用了this,他才是一个构造函数,可以生成一个新对象;
                3. 构造函数结尾会隐式一条: return this 语句,返回当前对象的引用;
                4. js中的构造函数类似于其它语言中的类,但却又比他们难以理解,毕竟new一个函数来生成一个对象比较特殊;
                5. 而其它语言,都是 new 一个类,而js中没有类的概念,所以构造函数,实际上就起到了"类"的作用;
                6. 因为构造函数起到了"类"的作用,所以按照惯例,充当构造函数的函数名,首字母应该大写,以示不同;

---------------------------------------------------------------------------------------

八、属性的访问
    1. 属性访问:
        (1).点语法,只能使用标识符: obj.name;
        (2).中括号[],必须使用字符串,可用用字符串字面量,也可以用字符串变量
        var obj = {name:'peter', age:20}
        obj.name    // 'peter'
        obj['age']  // 20
        var p = 'name'
        obj[p]  // 'peter'

        ({x:40,y:50}).x // 40,说明访问属性的是对象的引用
        ({x:40,y:50}).y // 50
        实际开发过程中,可能遇不到直接对字面量对象进行运算,但是在链式调用很方便
    2. 属性设置与访问的规则相同:
        var o = {}
        o.name = 'jack'
        o['age'] = 30

    3. 属性值的更新
        1.将属性表达式写在"="号左侧
        obj.name = 'zhu'    // 如果属性存在则是更新,如果不存在就是创建新属性
        delete obj.name     // 删除对象obj上的属性name
    4.点运算符与中括号运算符的区别
        1. 能使用点运算符"."的场景,一定能使用中括号运算符"[]",反之则不一定;
        2. 访问属性首选点运算符,当"."会产生歧义时,则使用中括号来规避,例如属性名是一个非法标识符
        3. 以下三种情况必须使用中括号:
            (1).使用了非法标识符: 属性名多个单词之间有空格,连接线-或特殊字符$#%.等
            (2).使用了变量属性名: var p = 'name'; obj[p];
            (3).使用了表达式的属性名:
            var obj = {x:10, y:20}
            var m = 5       // 定义变量 m ,初始值为5
            obj[ (m<10)? 'x' : 'y']     // m当前值小于10,返回true,此时输出obj.x的属性值: 10
            var m =13       // 更新m, 使其大于10
            obj[ (m<10)? 'x' : 'y']     // m当前值大于10,返回true,此时输出obj.y的属性值: 20

    5.属性的枚举: for (var key in obj) { console.log(obj.key) }

*******************************************************************************************

变量的扩展知识:

一、变量的声明
    1. 变量可以用来表示某个值,或某个变量;
    2. 变量使用前应该先声明:var m ;
    3. 声明未赋值(初始化); 默认为: undefined;
    4. 对同一个变量可以重复声明;
    推荐语法:
    var a = a || 10;    //已声明则用原值,未声明用默认值
    var a ;     // 已声明未初始化,默认值:undefined
    var a = 40;  // 40  // 初始化40

--------------------------------------------------------------

二、变量与引用
    1. 变量分为: 基本类型, 引用类型;
    2. 变量赋值: 值传递, 引用传递;
    3. 基本类型变量也叫值型变量,复制采用值传递,二者是完全独立的;
    4. 引用类型变量与叫引用变量,类似于C语言指针,二者共同指向同一对象;

    基本类型:
    var a = 123;
    var b = a;  // a 值 传递 给 b
    b++ // b 自增1
    b   // b=124
    a   // a无变化

    引用类型
    var a = {x: 10, y: 20};
    b = a;  // 将对象a复制到b中,对象是引用赋值,a和b指向同一个对象
    b.x     // 10
    b.x = 30;  // 将b.x 属性重新设置为30
    a.x         // a.x 属性同步被更新为30
    a = {a: 88, b: 99}  // 改变a变量的值,使其引用另一个对象
    a   // 查看对象a, 它的值已发生变化: {a: 88, b: 99}
    b   // 查看b,发现仍是原来的对象内容:{x:30,y:20}
    此时原对象的引用保存在变量b中,这与证明了对象变量的确是引用类型


    函数的参数
    1. 函数传参是使用值传递方式进行;
    2. 经典案例:交换二个变量的值

    var a = 100;
    var b = 200;
    //swap()实现交换
    function swap(a,b) {
        return [b, a];
    }

    [a,b] = swap(a,b);  //执行交换操作

    a   // a等于200
    b   // b等于100

    字符串与引用
    1. 字符串是基本类型,基本类型的值都是不可改变的;
    2. 字符串内部仍是按引用方式来实现的,但表现为值传递;

    引用总结
    1. 赋值应该是从右向左看: var a = {x:1,y:2};
    2. 应该是先有一个对象{x:1,y:2},然后再声明一个标识符a来引用它;
    3. 所以无论是否存在变量a, 对象{}都是客观存在的;
    4. 因此,即使变量a指向了其它对象: var a = {m:5,n:6},而对象{x:1,y:2}仍存在
    5. 当对象{x:1,y:2}没有任何引用指向时,系统将启动回收机制销毁该对象

--------------------------------------------------------------

二、变量与属性

    (1)全局变量与全局对象之间的关系:
        1. 在js中一切皆对象,所有变量就是属性,属性就是变量;
        2. 变量或属性名的用途: 获取值[右值] 或者 被赋值[左值];
        3. 根据作用域: '全局变量' 和 '局部变量(函数参数)';
        4. 全局变量: 函数之外声明的变量;
        5. 局部变量: 函数内部声明的变量;
        6. 全局变量(包括全局函数名)是"全局对象"的属性;
        7. 全局对象: 程序一旦开始运行,就会被自动创建;
        8. 证明: 全局变量 === 全局对象的属性
        var x = 'foo'   // 声明全局变量并初始化'foo'
        x   // 以全局变量方式访问 'foo'
        this    // 查看当前全局对象, 浏览器中的js是: window
        this.x  // 以对象属性方式访问全局变量x

        9. 如果将全局对象,赋值给一个全局变量,做为该对象的引用的话
        var global = this   // 声明全局变量global, 用全局对象this初始化

        10.这时,全局变量,他具有双重身份: 1. 全局变量; 2. 全局对象this的引用
        这就是传说中的: 自己引用自己
        'global' in this    // 返回: true, 说明全局变量global的确是this(全局对象)的属性
        global  // 返回 window对象, 说明 global 本身的确是全局对象

        11. 这种自引用关系,在js中非常常用,例如在客户端javascript中,就提供了一个引用了全局对象的
        全局变量:window, 这个window 就类似于我们上面创建的全局变量global的作用.
        12. 全局对象和全局变量的生命周期: 从脚本开始运行直到脚本结束(关闭当前页面).

    (2)局部变量与对象之间的关系
        1. 函数内部声明的变量,以及函数的参数都是局部变量;
        2. 与全局变量一样,局部变量也会被隐式的声明为某个对象的属性;
        3. 这个隐式的对象就是: call;
        4. 局部变量的生命周期: 通常从函数调用直到函数执行结束返回调用者;
        5. 可以通过一种称作:"闭包"的技术,打破这个约束,使局部变量离开函数仍可以使用.

--------------------------------------------------------------

四、变量的查找
    1. 无论是左值,还是右值操作,都会触发对变量名称的查询操作;
    2. 在最外层代码(函数之外)的变量查找,实际上查找的是全局对象的属性(全局变量与全局函数);
    3. 在函数内部的变量名查找,因为在函数内部可以使用全局变量,所以首先是查找call对象的属性,
        如果没找到,再到全局对象属性上查找,是由内到外的顺序进行: call对象 --> global对象

--------------------------------------------------------------

五、对变量或属性是否存在的检测
    (1):对变量是否存在进行检测(以全局变量为例):
        1. 常用语法: var a = a || 10; // a有值由用原值,否则使用默认值:10
        2. 变量复制: var a; var b = a || 10;  // 原理同上
        3. 变量复制: var a; var b = a != undefined ? a : 10; // 判断a是否有值
        4. 利用js没有块级作用域特征,使用typeof 进行再精确的判断
        var a
        if (typeof a != undefined) {
            var b = a
        } else {
            var b = 10
        }
        b++     //因为没有块级作用域,所以这里可以使用变量 b
        5.以上都必须先对a进行声明,其实可以用 'in' 判断是否是某对象的属性来判断:in this
        if ( 'm' in this) {var n = m} else {var n = 20} //然后就可以使用变量n了

    （2):对属性是否存在进行检测:
        1. 属性存在时,与变量一样,返回它的值;
        2. 当属性不存在时,与变量的返回完全不同;
        3. 访问不存在的变量会返回错误,而属性只会返回undefined

        age     // 返回错误
        this.age    // undefined

---------------------------------------------------------------------------------------

js中的流程控制:
与其它编程语言一样,也有分支与循环二大类,语法与php基本一致
1. 判断
    (1).单分支: if () {}
    (2).双分支: if(){} else {}
    (3).多分支: if(){} else if () {} else {}
    (4).switch: switch(n) {
            case 1:
                break;
            ...
            default:
            break;
        }
2. 循环
    (1). for(let i=0; i<n; i++) {...}
    (2). while(){...}   /  do {...} while()
    (3). for in:   for (let var in obj)



















