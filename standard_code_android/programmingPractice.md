# 编程实践

### @Override：能用则用

	只要是合法的，就把@Override注解给用上。

### 捕获的异常：不能忽视

	除了下面的例子，对捕获的异常不做响应是极少正确的。(典型的响应方式是打印日志，或者如果它被认为是不可能的，则把它当作一个 AssertionError 重新抛出。)

	如果它确实是不需要在catch块中做任何响应，需要做注释加以说明(如下面的例子)。

	try {
		int i = Integer.parseInt(response);
		return handleNumericResponse();
	} catch (NumberFormatException ok) {
		// it's not numeric; that's fine, just continue
	}
	return handleTextResponse(response);
	例外：在测试中，如果一个捕获的异常被命名为expected，则它可以被不加注释地忽略。下面是一种非常常见的情形，用以确保所测试的方法会抛出一个期望中的异常，因此在这里就没有必要加注释。

	try {
		emptyStack.pop();
		fail();
	} catch (NoSuchElementException expected) {
	}

### 静态成员：使用类进行调用

	使用类名调用静态的类成员，而不是具体某个对象或表达式。

	Foo aFoo = ...;
	Foo.aStaticMethod(); // 正确
	aFoo.aStaticMethod(); // 错误
	somethingThatYieldsAFoo().aStaticMethod(); // 错误

### Finalizers: 禁用

	极少会去重载Object.finalize。

	不要使用finalize。如果你非要使用它，请先仔细阅读和理解Effective Java 第7条款：”Avoid Finalizers”，然后不要使用它。