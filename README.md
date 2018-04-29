<p align="center">
    <a href="https://codeigniter.com/" target="_blank">
        <img src="https://codeigniter.com/assets/images/ci-logo-big.png" height="100px">
    </a>
    <h1 align="center">CodeIgniter PHPUnit Test</h1>
    <br>
</p>

CodeIgniter 3 PHPUnit Test extension library

[![Latest Stable Version](https://poser.pugx.org/yidas/codeigniter-phpunit/v/stable?format=flat-square)](https://packagist.org/packages/yidas/codeigniter-phpunit)
[![Latest Unstable Version](https://poser.pugx.org/yidas/codeigniter-phpunit/v/unstable?format=flat-square)](https://packagist.org/packages/yidas/codeigniter-phpunit)
[![License](https://poser.pugx.org/yidas/codeigniter-phpunit/license?format=flat-square)](https://packagist.org/packages/yidas/codeigniter-phpunit)

FEATURES
--------

- ***PHPUnit Test** in **Codeigniter 3** Framework*

- *Easy to install into your Codeigniter project by Composer*

---

OUTLINE
-------

- [Requirements](#requirements)
- [Installation](#installation)
- [Directory Structure](#directory-structure)
- [Configuration](#configuration)
- [Usage](#usage)
- [Test Case](#test-case)


REQUIREMENTS
------------

This library requires the following:

- PHP 5.3.0+
- CodeIgniter 3.0.0+

---

INSTALLATION
------------

Run Composer in your Codeigniter project under the folder `\application`:

    composer require yidas/codeigniter-phpunit

---

DIRECTORY STRUCTURE
-------------------

```
codeigniter/
└── application/
    ├── tests/          Test cases
    ├── vendor/         Vendor included yidas/codeigniter-phpunit
    └── phpunit.xml     PHPUnit XML
```

---

CONFIGURATION
-------------

According to [Directory Structure](#directory-structure), create and configure `phpunit.xml` under `application` directory:

```xml
<?xml version="1.0" encoding="UTF-8" ?>
<phpunit bootstrap="vendor/yidas/codeigniter-phpunit/bootstrap.php">
  <testsuites>
    <testsuite name="TestSuite">
      <directory>tests</directory>
    </testsuite>
  </testsuites>
</phpunit>
```

For this `phpunit.xml` template, the test cases directory is `application/test`, make sure you would create every test cases under it.

---

USAGE
-----

In the `application` directory of this library, run `phpunit` from vendor:

```
./vendor/bin/phpunit
```

Then the result would like:

```
PHPUnit 5.7.27 by Sebastian Bergmann and contributors.



Time: 40 ms, Memory: 2.75MB

No tests executed!
```

---

TEST CASE
---------

With this extension libaray, you could write test cases with loading Codeigniter framework.

For example, write a test case `application/tests/CodeigniterTest.php` for testing Codeigniter config component:

```php
<?php

use PHPUnit\Framework\TestCase;

final class CodeigniterTest extends TestCase
{
    function __construct() 
    {
        parent::__construct();
        // Load CI application
        $this->CI = & get_instance();
    }
    
    public function testConfigItem()
    {
        $indexPage = $this->CI->config->item('index_page');
        
        $this->assertSame('index.php', $indexPage);
    }
}
```

Then you would get the result `OK (1 test, 1 assertion)` by running PHPUnit test.
