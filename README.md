README
======

This example project was created to compare performance of [Nette Forms][3] to [Symfony Forms][4]. It is based on @webmozart's [Symfony2 standalone forms example][2].

Symfony Forms offer some cool features, that are not present in Nette Forms (like mapping), but with great power comes great overhead. Nette Forms seem to me as a good alternative for simpler forms.

Installation
------------

1. [Download Composer][1].

2. Install the Composer dependencies.

   ```
   php composer.phar install
   ```

3. Add the project to your web server configuration.

4. Launch web/index.php

Measurements
------------

This example:

   ```
   $ php -S localhost:8080 web/index.php
   $ ab -n 1000 http://localhost:8080/
   
   Concurrency Level:      1
   Time taken for tests:   13.594 seconds
   Complete requests:      1000
   Failed requests:        0
   Total transferred:      1469000 bytes
   HTML transferred:       1348000 bytes
   Requests per second:    73.56 [#/sec] (mean)
   Time per request:       13.594 [ms] (mean)
   Time per request:       13.594 [ms] (mean, across all concurrent requests)
   Transfer rate:          105.53 [Kbytes/sec] received
   ```

Symfony Forms example:

   ```
   $ cd ../standalone-forms
   $ php -S localhost:8080 web/index.php
   $ ab -n 1000 http://localhost:8080/

   Concurrency Level:      1
   Time taken for tests:   229.876 seconds
   Complete requests:      1000
   Failed requests:        0
   Total transferred:      1262000 bytes
   HTML transferred:       946000 bytes
   Requests per second:    4.35 [#/sec] (mean)
   Time per request:       229.876 [ms] (mean)
   Time per request:       229.876 [ms] (mean, across all concurrent requests)
   Transfer rate:          5.36 [Kbytes/sec] received
   ```


[1]: http://getcomposer.org/doc/00-intro.md
[2]: https://github.com/webmozart/standalone-forms
[3]: https://github.com/nette/forms
[4]: http://symfony.com/doc/current/components/form/introduction.html
