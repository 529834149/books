# 命名约定

### 标识符类型的规则

 - ##### 包名
 
	包名全部小写，连续的单词只是简单地连接起来，不使用下划线。
	
	采用反域名命名规则，全部使用小写字母。一级包名为com，二级包名为xx（可以是公司或则个人的随便），三级包名根据应用进行命名，四级包名为模块名或层级名。
	
	例如：com.blogchina.kitchen
	
| 包名 | 此包中包含 |
| :------ | :------------ |
| com.xx.应用名称缩写.activity | 页面用到的Activity类 (activitie层级名用户界面层) |
| com.xx.应用名称缩写.base | 基础共享的类 |
| com.xx.应用名称缩写.adapter | 页面用到的Adapter类 (适配器的类) |
| com.xx.应用名称缩写.util | 此包中包含：公共工具方法类（util模块名） |
| com.xx.应用名称缩写.bean | 下面可分：vo、po、dto 此包中包含：JavaBean类 |
| com.xx.应用名称缩写.model | 此包中包含：模型类 |
| com.xx.应用名称缩写.db | 数据库操作类 |
| com.xx.应用名称缩写.view (或者 com.xx.应用名称缩写.widget ) | 自定义的View类等 |
| com.xx.应用名称缩写.service | Service服务 |
| com.xx.应用名称缩写.receiver | BroadcastReceiver服务 |

	如果项目采用MVP，所有M、V、P抽取出来的接口都放置在相应模块的i包下，所有的实现都放置在相应模块的impl下
 
 - ##### 类名
 
	类名都以UpperCamelCase风格编写。
	类名通常是名词或名词短语，接口名称有时可能是形容词或形容词短语。现在还没有特定的规则或行之有效的约定来命名注解类型。

	名词，采用大驼峰命名法，尽量避免缩写，除非该缩写是众所周知的， 比如HTML,URL，如果类名称中包含单词缩写，则单词缩写的每个字母均应大写。
	
| 类 | 描述 | 例如 |
| :------ | :------------ | :------- |
| Activity 类 | Activity为后缀标识 | 欢迎页面类WelcomeActivity |
| Adapter类 | Adapter 为后缀标识 | 新闻详情适配器 NewsDetailAdapter |
| 解析类 | Parser为后缀标识 | 首页解析类HomePosterParser |
| 工具方法类 | Util或Manager为后缀标识（与系统或第三方的Utils区分）或功能+Util | 线程池管理类：ThreadPoolManager日志工具类：LogUtil（Logger也可）打印工具类：PrinterUtil |
| 数据库类 | 以DBHelper后缀标识 | 新闻数据库：NewsDBHelper |
| Service类 | 以Service为后缀标识 | 时间服务TimeService |
| Receiver类 | 以Receiver为后缀标识 | 推送接收JPushReceiver |
| ContentProvider | 以Provider为后缀标识 |  |
| 自定义的共享基础类 | 以Base开头 | BaseActivity,BaseFragment |
| Fragment类 | Fragment为后缀标识 | 新闻内容碎片NewsContentFragment |
| 自定义组件类 | My为前缀标识 | 自定义ReclyerView MyReclyerView |
 

测试类的命名以它要测试的类的名称开始，以Test结束。

例如：
```
HashTest 或 HashIntegrationTest。
```
接口（interface）：命名规则与类一样采用大驼峰命名法，多以able或ible结尾，如
```
interface Runnable ;
interface Accessible。
```
	
 - ##### 方法名
 
	方法名都以 LowerCamelCase 风格编写。

	方法名通常是动词或动词短语。
	
| 方法 | 说明 |
| :------ | :------------ |
| initXX() | 初始化相关方法,使用init为前缀标识，如初始化布局initView() |
| isXX()或checkXX() | 方法返回值为boolean型的请使用is或check为前缀标识 |
| getXX() | 返回某个值的方法，使用get为前缀标识 |
| handleXX() | 对数据进行处理的方法，尽量使用handle为前缀标识 |
| displayXX()或showXX() | 弹出提示框和提示信息，使用display/show为前缀标识 |
| saveXX() | 与保存数据相关的，使用save为前缀标识 |
| resetXX() | 对数据重组的，使用reset前缀标识 |
| clearXX() | 清除数据相关的 |
| removeXXX() | 删除数据相关的 |
| drawXXX() | 绘制数据或效果相关的，使用draw前缀标识 |

 - ##### 常量名
 
	常量名命名模式为CONSTANT_CASE，全部字母大写，用下划线分隔单词。这些名字通常是名词或名词短语。
	```
	private static final String NAME_CAL = "nick";
	```
	
 - ##### 非常量字段名

	非常量字段名以LowerCamelCase风格的基础上改造为如下风格：基本结构为scopeVariableNameType。

	非公有，非静态字段命名以m开头。

	静态字段命名以s开头。

	公有非静态字段命名以p开头。

	公有静态字段（全局变量）命名以g开头。

	public static final 字段(常量) 全部大写，并用下划线连起来。
	
	```
	public class MyClass {  
		public static final int SOME_CONSTANT = 42;  
		public int pField;  
		private static MyClass sSingleton;  
		int mPackagePrivate;  
		private int mPrivate;  
		protected int mProtected; 
		public static int gField; 
	}
	```
	
	使用1字符前缀来表示作用范围，1个字符的前缀必须小写，前缀后面是由表意性强的一个单词或多个单词组成的名字，而且每个单词的首写字母大写，其它字母小写，这样保证了对变量名能够进行正确的断句。
	
	考虑到Android中使用很多UI控件，为避免控件和普通成员变量混淆以及更好达意，所有用来表示控件的成员变量统一加上控件缩写作为后缀。
	
| 控件 | 缩写 | 例子 |
| :------ | :------------ | :------- |
| LinearLayout | ll | llFriend或者mFriendLL |
| RelativeLayout | rl | rlMessage或mMessageRL |
| Button | btn | btnHome或mHomeBtn |
| ImageButton | ibtn | ibtnPlay或mPlayIBtn |
| TextView | tv | tvName或mNameTV |
| ListView | lv | lvCart或mCartLV |
| GridView | gv | gvPhoto或mPhotoGV |
| FrameLayout | fl | flCart或mCartFL |
| TableLayout | tl | tlTab或mTabTL |
| EditText | et | etName或mNameET |
| ImageView | iv | ivHead或mHeadIV |

常见的英文缩写

| 名称 | 缩写 |
| :--------- | :--------- |
| icon | ic （主要用在app的图标） |
| color | cl（主要用于颜色值） |
| divider | di（主要用于分隔线，不仅包括Listview中的divider，还包括普通布局中的线） |
| selector | sl（主要用于某一view多种状态，不仅包括Listview中的selector，还包括按钮的selector） |
| average | avg |
| background | bg（主要用于布局和子布局的背景） |
| buffer | buf |
| control | ctrl |
| delete | del |
| document | doc |
| error | err |
| escape | esc |
| increment | inc |
| infomation | info |
| initial | init |
| image | img |
| Internationalization | I18N |
| length | len |
| library | lib |
| message | msg |
| password | pwd |
| position | pos |
| server | srv |
| string | str |
| temp | tmp |
| window | wnd(win) |

对于普通变量一般不添加类型后缀，如果统一添加类型后缀，请参考文末的缩写表。

用统一的量词通过在结尾处放置一个量词，就可创建更加统一的变量，它们更容易理解，也更容易搜索。

例如，请使用 mCustomerStrFirst 和 mCustomerStrLast，而不要使用mFirstCustomerStr和mLastCustomerStr。

量词列表：量词后缀说明

First 一组变量中的第一个
Last 一组变量中的最后一个
Next 一组变量中的下一个变量
Prev 一组变量中的上一个
Cur 一组变量中的当前变量。

说明：

集合添加如下后缀：List、Map、Set

数组添加如下后缀：Arr

 - ##### 参数名
 
	参数名以LowerCamelCase风格编写
	
 - ##### 局部变量名
 
	局部变量名以LowerCamelCase风格编写，比起其它类型的名称，局部变量名可以有更为宽松的缩写。

	虽然缩写更宽松，但还是要避免用单字符进行命名，除了临时变量和循环变量。

	即使局部变量是final和不可改变的，也不应该把它示为常量，自然也不能用常量的规则去命名它。

	临时变量通常被取名为i，j，k，m和n，它们一般用于整型；c，d，e，它们一般用于字符型。 如： 
	```
	for (int i = 0; i < len ; i++)。
	```
	
 - ##### 类型变量名
 
	类型变量可用以下两种风格之一进行命名：

	1. 单个的大写字母，后面可以跟一个数字(如：E, T, X, T2)。
    2. 以类命名方式，后面加个大写的T(如：RequestT, FooBarT)。
	
 - ##### 资源文件命名规范
	
	1. 资源布局文件（XML文件（layout布局文件））：

		全部小写，采用下划线命名法
		1) contentview 命名
		必须以全部单词小写，单词间以下划线分割，使用名词或名词词组。
		所有Activity或Fragment的contentView必须与其类名对应，对应规则为：
		将所有字母都转为小写，将类型和功能调换（也就是后缀变前缀）。
		例如：activity_main.xml

		2) Dialog命名：dialog_描述.xml
		例如：dialog_hint.xml

		3) PopupWindow命名：ppw_描述.xml
		例如：ppw_info.xml

		4) 列表项命名：item_描述.xml
		例如：item_city.xml

		5) 包含项命名：模块_(位置)描述.xml
		例如：activity_main_head.xml、activity_main_bottom.xml
		注意：通用的包含项命名采用：项目名称缩写_描述.xml
		例如：xxxx_title.xml
		
	2. 资源文件（图片drawable文件夹下）：

		全部小写，采用下划线命名法，加前缀区分
		命名模式：可加后缀 _small 表示小图, _big表示大图，逻辑名称可由多个单词加下划线组成，采用以下规则：
		用途_模块名_逻辑名称
		用途_模块名_颜色
		用途_逻辑名称
		用途_颜色
		说明：用途也指控件类型
		例如：
		```
		btn_main_home.png 按键
		divider_maket_white.png 分割线
		ic_edit.png 图标
		bg_main.png 背景
		btn_red.png 红色按键
		btn_red_big.png 红色大按键
		ic_head_small.png 小头像
		bg_input.png 输入框背景
		divider_white.png 白色分割线
		```
		如果有多种形态如按钮等除外如 btn_xx.xml（selector）
		
| 名称 | 功能 |
| :--------- | :--------- |
| btn_xx | 按钮图片使用btn_整体效果（selector） |
| btn_xx_normal | 按钮图片使用btn_正常情况效果 |
| btn_xx_pressed | 按钮图片使用btn_点击时候效果 |
| btn_xx_focused | state_focused聚焦效果 |
| btn_xx_disabled | state_enabled (false)不可用效果 |
| btn_xx_checked | state_checked选中效果 |
| btn_xx_selected | state_selected选中效果 |
| btn_xx_hovered | state_hovered悬停效果 |
| btn_xx_checkable | state_checkable可选效果 |
| btn_xx_activated | state_activated激活的 |
| btn_xx_windowfocused | state_window_focused |
| bg_head | 背景图片使用bg_功能_说明 |
| def_search_cell | 默认图片使用def_功能_说明 |
| ic_more_help | 图标图片使用ic_功能_说明 |
| seg_list_line | 具有分隔特征的图片使用seg_功能_说明 |
| sel_ok | 选择图标使用sel_功能_说明 |

注意：使用AndroidStudio的插件SelectorChapek可以快速生成selector，前提是命名要规范。

3. 动画文件（anim文件夹下）：

全部小写，采用下划线命名法，加前缀区分。
具体动画采用以下规则：
模块名_逻辑名称
逻辑名称
refresh_progress.xml
market_cart_add.xml
market_cart_remove.xml
普通的tween动画采用如下表格中的命名方式
// 前面为动画的类型，后面为方向

| 动画命名例子 | 规范写法 |
| :--------- | :--------- |
| fade_in | 淡入 |
| fade_out | 淡出 |
| push_down_in | 从下方推入 |
| push_down_out | 从下方推出 |
| push_left | 推向左方 |
| slide_in_from_top | 从头部滑动进入 |
| zoom_enter | 变形进入 |
| slide_in | 滑动进入 |
| shrink_to_middle | 中间缩小 |

4. values中name命名

| 类别 | 命名 | 示例 |
| :--------- | :--------- | :--------- |
| strings | strings的name命名使用下划线命名法，采用以下规则：模块名+逻辑名称 | main_menu_about 主菜单按键文字friend_title 好友模块标题栏friend_dialog_del 好友删除提示login_check_email 登录验证 dialog_title 弹出框标题 button_ok 确认键 loading 加载文字 |
| colors | colors的name命名使用下划线命名法，采用以下规则：模块名+逻辑名称 颜色 | friend_info_bg friend_bg transparent gray |
| styles | styles的name命名使用 Camel命名法，采用以下规则：模块名+逻辑名称 | main_tabBottom |

5. layout中的id命名

命名模式为：view缩写_view的逻辑名称
使用 AndroidStudio 的插件 ButterKnife Zelezny，生成注解非常方便。
如果不使用 ButterKnife Zelezny，则建议使用 view 缩写做后缀，如：username_tv（展示用户名的TextView）
