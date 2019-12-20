# 概览

- 代码必须遵循 PSR-1 中的编码规范 。

- 代码必须使用4个空格符而不是 tab键 进行缩进。

- 每行的字符数应该软性保持在80个之内， 理论上一定不可多于120个， 但一定不能有硬性限制。

- 每个 namespace 命名空间声明语句和 use 声明语句块后面，必须插入一个空白行。

- 类的开始花括号({)必须写在函数声明后自成一行，结束花括号(})也必须写在函数主体后自成一行。

- 方法的开始花括号({)必须写在函数声明后自成一行，结束花括号(})也必须写在函数主体后自成一行。

- 类的属性和方法必须添加访问修饰符（private、protected 以及 public）， abstract 以及 final 必须声明在访问修饰符之前，而 static 必须声明在访问修饰符之后。

- 控制结构的关键字后必须要有一个空格符，而调用方法或函数时则一定不能有。

- 控制结构的开始花括号({)必须写在声明的同一行，而结束花括号(})必须写在主体后自成一行。

- 控制结构的开始左括号后和结束右括号前，都一定不能有空格符。


以下例子程序简单地展示了以上大部分规范：

```php
<?php
namespace Vendor\Package;

use FooInterface;
use BarClass as Bar;
use OtherVendor\OtherPackage\BazClass;

class Foo extends Bar implements FooInterface
{
    public function sampleFunction($a, $b = null)
    {
        if ($a === $b) {
            bar();
        } elseif ($a > $b) {
            $foo->bar($arg1);
        } else {
            BazClass::bar($arg2, $arg3);
        }
    }

    final public static function bar()
    {
        // method body
    }
}
```
