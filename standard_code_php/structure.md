# 控制结构

控制结构的基本规范如下：

- 控制结构关键词后必须有一个空格。
- 左括号 ( 后一定不能有空格。
- 右括号 ) 前也一定不能有空格。
- 右括号 ) 与开始花括号 { 间一定有一个空格。
- 结构体主体一定要有一次缩进。
- 结束花括号 } 一定在结构体主体后单独成行。

每个结构体的主体都必须被包含在成对的花括号之中，这能让结构体更加结构话，以及减少加入新行时，出错的可能性。

### 1.if 、 elseif 和 else

标准的` if` 结构如下代码所示，留意 括号、空格以及花括号的位置， 注意 `else` 和 `elseif` 都与前面的结束花括号在同一行。

```php
<?php
if ($expr1) {
    // if body
} elseif ($expr2) {
    // elseif body
} else {
    // else body;
}
```

应该使用关键词 `elseif` 代替所有 `else if`,以使得所有的控制关键字都像是单独的一个词。

### 2.switch 和 case

标准的`switch`结构如下代码所示，留意括号、空格以及花括号的位置。`case`语句必须相对`switch`进行一次缩进，而` break` 语句以及 `case `内的其它语句都 必须 相对 `case` 进行一次缩进。 如果存在非空的` case` 直穿语句，主体里必须有类似` // no break` 的注释。


```php
<?php
switch ($expr) {
    case 0:
        echo 'First case, with a break';
        break;
    case 1:
        echo 'Second case, which falls through';
        // no break
    case 2:
    case 3:
    case 4:
        echo 'Third case, return instead of break';
        return;
    default:
        echo 'Default case';
        break;
}
```
### 3.while 和 do while

一个规范的 `while` 语句应该如下所示，注意其 括号、空格以及花括号的位置。

```php
<?php
while ($expr) {
    // structure body
}
```

标准的 `do while` 语句如下所示，同样的，注意其 括号、空格以及花括号的位置。

```php
<?php
do {
    // structure body;
} while ($expr);
```
### 4.for

标准的 `for` 语句如下所示，注意其 括号、空格以及花括号的位置。

```php
<?php
for ($i = 0; $i < 10; $i++) {
    // for body
}
```
### 5.foreach

标准的` foreach` 语句如下所示，注意其 括号、空格以及花括号的位置。

```php
<?php
foreach ($iterable as $key => $value) {
    // foreach body
}
```
### 6.try, catch

标准的`try catch`语句如下所示，注意其 括号、空格以及花括号的位置。

```php
<?php
try {
    // try body
} catch (FirstExceptionType $e) {
    // catch body
} catch (OtherExceptionType $e) {
    // catch body
}
```