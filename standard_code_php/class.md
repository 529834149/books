# 类、属性和方法

此处的“类”泛指所有的`class`类、接口以及`traits`可复用代码块。

### 1.扩展与继承

关键词 `extends` 和`implements`必须写在类名称的同一行。

类的开始花括号必须独占一行，结束花括号也必须在类主体后独占一行。

```php
<?php
namespace Vendor\Package;

use FooClass;
use BarClass as Bar;
use OtherVendor\OtherPackage\BazClass;

class ClassName extends ParentClass implements \ArrayAccess, \Countable
{
    // constants, properties, methods
}

```

`implements`的继承列表也可以分成多行，这样的话，每个继承接口名称都必须分开独立成行，包括第一个。


```php
<?php
namespace Vendor\Package;

use FooClass;
use BarClass as Bar;
use OtherVendor\OtherPackage\BazClass;

class ClassName extends ParentClass implements
    \ArrayAccess,
    \Countable,
    \Serializable
{
    // constants, properties, methods
}
```

### 2.属性

每个属性都必须添加访问修饰符。

一定不可使用关键字 `var` 声明一个属性。

每条语句一定不可定义超过一个属性。

不要使用下划线作为前缀，来区分属性是` protected` 或` private`。

以下是属性声明的一个范例：

```php
<?php
namespace Vendor\Package;

class ClassName
{
    public $foo = null;
}
```

### 3.方法

所有方法都必须添加访问修饰符。

不要使用下划线作为前缀，来区分方法是 `protected` 或` private`。

方法名称后一定不能有空格符，其开始花括号必须独占一行，结束花括号也必须在方法主体后单独成一行。参数左括号后和右括号前一定不能有空格。

一个标准的方法声明可参照以下范例，留意其括号、逗号、空格以及花括号的位置。
 
```php
<?php
namespace Vendor\Package;

class ClassName
{
    public function fooBarBaz($arg1, &$arg2, $arg3 = [])
    {
        // method body
    }
}
```
### 4.方法的参数

参数列表中，每个参数后面必须要有一个空格，而前面一定不能有空格。

有默认值的参数，必须放到参数列表的末尾。

```php
<?php
namespace Vendor\Package;

class ClassName
{
    public function foo($arg1, &$arg2, $arg3 = [])
    {
        // method body
    }
}
```

参数列表可以分列成多行，这样，包括第一个参数在内的每个参数都必须单独成行。

拆分成多行的参数列表后，结束括号以及方法开始花括号 必须写在同一行，中间用一个空格分隔。


```php
<?php
namespace Vendor\Package;

class ClassName
{
    public function aVeryLongMethodName(
        ClassTypeHint $arg1,
        &$arg2,
        array $arg3 = []
    ) {
        // method body
    }
}
```
### 5.abstract、final、以及static

需要添加 `abstract `或 `final` 声明时， 必须写在访问修饰符前，而 static则必须写在其后。

```php
<?php
namespace Vendor\Package;

abstract class ClassName
{
    protected static $foo;

    abstract protected function zim();

    final public static function bar()
    {
        // method body
    }
}
```
### 6.方法及函数调用

方法及函数调用时，方法名或函数名与参数左括号之间一定不能有空格，参数右括号前也一定不能有空格。每个参数前一定不能有空格，但其后必须有一个空格。

```php
<?php
bar();
$foo->bar($arg1);
Foo::bar($arg2, $arg3);
```
参数可以分列成多行，此时包括第一个参数在内的每个参数都必须单独成行。

```php
<?php
$foo->bar(
    $longArgument,
    $longerArgument,
    $muchLongerArgument
);
```
