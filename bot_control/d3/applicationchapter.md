# d3.js应用实例


###使用d3完成一个小案例

######d3中的布局详解

```
	D3 总共提供了 12 个布局：饼状图（Pie）、力导向图（Force）、弦图（Chord）、树状图（Tree）、
	集群图（Cluster）、捆图（Bundle）、打包图（Pack）、直方图（Histogram）、
	分区图（Partition）、堆栈图（Stack）、矩阵树图（Treemap）、层级图（Hierarchy）。
	12 个布局中，层级图（Hierarchy）不能直接使用。集群图、打包图、分区图、树状图、
	矩阵树图是由层级图扩展来的。如此一来，能够使用的布局是 11 个（有 5 个是由层级图扩展而来）。
	这些布局的作用都是将某种数据转换成另一种数据，而转换后的数据是利于可视化的。
```
######d3中完成简单的图表开发

```
	var width = 300;	//画布的宽度
	var height = 300;	//画布的高度
	var svg = d3.select("body")		//选择文档中的body元素
		.append("svg")				//添加一个svg元素
		.attr("width", width)		//设定宽度
		.attr("height", height);	//设定高度
	var dataset = [ 250 , 210 , 170 , 130 , 90 ];
	var rectHeight = 25;	//每个矩形所占的像素高度(包括空白)
	svg.selectAll("rect")
		  .data(dataset)
		  .enter()
		  .append("rect")
		  .attr("x",20)
		  .attr("y",function(d,i){
				return i * rectHeight;
		  })
		  .attr("width",function(d){
		   		return d;
		  })
		  .attr("height",rectHeight-2)
		  .attr("fill","steelblue");
	上述提到了画布的概念:画布 、；里面的xy参数介绍
		画布分为 SVG 和 Canvas两种具体可参考:http://www.w3school.com.cn/html5/html_5_canvas_vs_svg.asp
		x - 矩形左上角的 x 坐标
		y - 矩形左上角的 y 坐标
		width - 矩形的宽度
		height - 矩形的高度
```