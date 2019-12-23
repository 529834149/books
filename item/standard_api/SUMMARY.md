# 介绍

此文档为博客中国技术部 REST API 开发规范，技术部后端开发人员须按此规范进行开发。此文档正在完善中，大家在使用的过程中发现有不合理的地方或需要补充的地方，请与我联系:entere@126.com 谢谢

# API设计理念

1.将涉及的实体抽象成资源, 即按id访问资源, 在url上做文章, 以后再也不用为url起名字而苦恼了.

2.使用HTTP动词对资源进行CRUD(增删改查); get->查, post->增, put->改, delete->删.

3.URL命名规则, 对于资源无法使用一个单数名词表示的情况, 我使用中横线(-)连接.

    > 资源采用名词命名, e.g: 产品 -> product
    > 新增资源, e.g: 新增产品, url -> /product , verb -> POST
    > 修改资源, e.g: 修改产品, url -> /products/{id} , verb -> PUT
    > 资源详情, e.g: 指定产品详情, url -> /products/{id} , verb -> GET
    > 删除资源, e.g: 删除产品, url -> /products/{id} , verb -> DELETE
    > 资源列表, e.g: 产品列表, url -> /products , verb -> GET
    > 资源关联关系, e.g: 收藏产品, url -> /products/{id}/star , verb -> PUT
    > 资源关联关系, e.g: 删除收藏产品, url -> /products/{id}/star , verb -> DELETE


写此文档的目的，在于统计后端api风格，减少API维护成本，提高团队开发效率。






