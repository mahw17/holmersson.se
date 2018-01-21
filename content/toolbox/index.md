---
views:
    main:
        template: default/article
        data:
            class: blog

    byline: false
    share-this: false
    block-about: false
    article-toc: false

    blog-list:
        region: main
        template: default/blog-list
        sort: 2
        data:
            dateFormat: j F Y
            meta:
                type: toc
                items: 10

    blog-toc:
        region: sidebar-right
        template: default/blog-toc
        sort: 2
        data:
            meta:
                type: copy
                view: blog-list

...
Toolbox
===========================

The intention of this toolbox 'blog' is to describe some of the tools that
have been used when the applications have been created.

The choice of tools is mainly based of the courses given at Blekinge Tekniska Högskola
(BTH) so that it will be easy for students to help us to update/create applications
within existing school assignments. 
