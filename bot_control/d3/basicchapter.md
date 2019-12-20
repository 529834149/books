# d3.js基础介绍


###什么是d3.js

######如何使用d3.js

```
d3.js其实就是一个 JavaScript 的函数库，使用它主要是用来做数据可视化的
d3.js下载地址:http://d3js.org/d3.v3.min.js。在head头直接引入直接引入d3.js即可
例如:<script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
https://github.com/d3/d3/wiki/Gallery一些d3实现的效果及应用可以在这里下载

```
###d3的基本语法介绍

######使用d3对标签进行操作

```
修改body中所有p标签中的内容
d3.select("body").selectAll("p").text("blog.china");
修改p标签中的元素的样式
.nodetext {
 	font-size: 16px ;
 	font-family: SimSun;
 	fill:#ccc;
}
var change = d3.select("body").selectAll("p")
	change.style("color":"#ccc")
		  .style("font-size" :"14px")
		  .attr("class":".nodetext")//直接class属性
```
######d3中选择/绑定元素介绍

```
		var body = d3.select("body"); //选择文档中的body元素
		var p1 = body.select("p");      //选择body中的第一个p元素
		var p = body.selectAll("p");    //选择body中的所有p元素
		var svg = body.select("svg");   //选择body中的svg元素
		var rects = svg.selectAll("rect");  //选择svg中所有的svg元素
		
		datum()：绑定一个数据到选择集上
		data()：绑定一个数组到选择集上，数组的各项值分别与选择集的各元素绑定
		datum用法:
			var str = 'blog';
			d3.select("body");
			var p = d3.selectAll("p");//选中所有p标签
			p.datum(str);
			p.text(function(d, i){
				//d代表数据i代表索引值
		    	return "第 "+ i + " 个元素绑定的数据是 " + d;
			});
		data用法:
			var list = ["I like dogs","I like cats","I like snakes"];
			var body = d3.select("body");
			var p = body.selectAll("p");
			p.data(list)
		  	.text(function(d, i){
		      return d;
		  	});



```
######d3中元素的选择/插入/删除

```
		如何选择第一个和第二个元素:
		var p1 = body.select("p");//也可以按着id来选择标签select("#id")
			p1.style("color":"red");
			
		使用opend insert插入文本操作:	
		body.append("p").text("append p element");
		body.insert("p").text("insert p element ");
		移除操作
		var p = body.select("#myid").remove();
```
######d3中enter、 update、exit概念详解

```
		在开发时常会用到enter、update、exit，这三个概念及用法:
		概念:
			如果数组为 [3, 6, 9, 12, 15]，将此数组绑定到三个 p 元素的选择集上。
			可以想象，会有两个数据没有元素与之对应，这时候 D3 会建立两个空的元素与数据对应，
			这一部分就称为 Enter。而有元素与数据对应的部分称为 Update。如果数组为 [3]，
			则会有两个元素没有数据绑定，那么没有数据绑定的部分被称为 Exit。
		用法:
			代码实例演示update、enter用法:
				var dataset = [ 3 , 6 , 9 , 12 , 15 ];
				//选择body中的p元素
				var p = d3.select("body").selectAll("p");
				//获取update部分
				var update = p.data(dataset);
				//获取enter部分
				var enter = update.enter();
				//update部分的处理：更新属性值
				update.text(function(d){
				    return "update " + d;
				});
				
				//enter部分的处理：添加元素后赋予属性值
				enter.append("p")
				    .text(function(d){
				        return "enter " + d;
				});
			代码实例演示update、exit的使用
				var dataset = [ 3 ];
				//选择body中的p元素
				var p = d3.select("body").selectAll("p");
				//获取update部分
				var update = p.data(dataset);
				//获取exit部分
				var exit = update.exit();
				//update部分的处理：更新属性值
				update.text(function(d){
				    return "update " + d;
				});
				//exit部分的处理：修改p元素的属性
				exit.text(function(d){
				        return "exit";
				    });
				//exit部分的处理通常是删除元素
				// exit.remove();

			
```
######d3中交互介绍

```
		click - 鼠标单击某元素时，相当于 mousedown 和 mouseup 组合在一起。
		mouseover - 光标放在某元素上。
		mouseout - 光标从某元素上移出来时。
		mousemove - 鼠标被移动的时候。
		mousedown - 鼠标按钮被按下。
		mouseup - 鼠标按钮被松开。
		注意：没有 dblclick 双击事件，要实现的话需要用click + 延迟判定 来模拟
		键盘常用的事件有三个：
		keydown - 当用户按下任意键时触发，按住不放会重复触发此事件。该事件不会区分字母的大小写，例如“A”和“a”被视为一致。
		keypress - 当用户按下字符键（大小写字母、数字、加号、等号、回车等）时触发，按住不放会重复触发此事件。该事件区分字母的大小写。
		keyup - 当用户释放键时触发，不区分字母的大小写。
		触屏常用的事件有三个：
		touchstart - 当触摸点被放在触摸屏上时。
		touchmove - 当触摸点在触摸屏上移动时。
		touchend - 当触摸点从触摸屏上拿开时。

```