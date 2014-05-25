# Component\Core\Immutable

**FlorianWolters\Component\Core\Immutable** is a simple-to-use [PHP][17] component that implements the **Immutable Object** implementation pattern.

[![Build Status](https://travis-ci.org/FlorianWolters/PHP-Component-Core-Immutable.svg?branch=master)](https://travis-ci.org/FlorianWolters/PHP-Component-Core-Immutable)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/FlorianWolters/PHP-Component-Core-Immutable/badges/quality-score.png?s=0744ad1bafd52212a1611a009fba51c30e43269f)](https://scrutinizer-ci.com/g/FlorianWolters/PHP-Component-Core-Immutable/)
[![Code Coverage](https://scrutinizer-ci.com/g/FlorianWolters/PHP-Component-Core-Immutable/badges/coverage.png?s=994c9213d82eeadd3ecd8516a87d30cd95e07771)](https://scrutinizer-ci.com/g/FlorianWolters/PHP-Component-Core-Immutable/)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/9f1eee4b-fb13-466d-a4b0-2696a954f82b/mini.png)](https://insight.sensiolabs.com/projects/9f1eee4b-fb13-466d-a4b0-2696a954f82b)
[![Coverage Status](https://coveralls.io/repos/FlorianWolters/PHP-Component-Core-Immutable/badge.png?branch=master)](https://coveralls.io/r/FlorianWolters/PHP-Component-Core-Immutable?branch=master)

[![Latest Stable Version](https://poser.pugx.org/florianwolters/component-core-immutable/v/stable.png)](https://packagist.org/packages/florianwolters/component-core-immutable)
[![Total Downloads](https://poser.pugx.org/florianwolters/component-core-immutable/downloads.png)](https://packagist.org/packages/florianwolters/component-core-immutable)
[![Monthly Downloads](https://poser.pugx.org/florianwolters/component-core-immutable/d/monthly.png)](https://packagist.org/packages/florianwolters/component-core-immutable)
[![Daily Downloads](https://poser.pugx.org/florianwolters/component-core-immutable/d/daily.png)](https://packagist.org/packages/florianwolters/component-core-immutable)
[![Latest Unstable Version](https://poser.pugx.org/florianwolters/component-core-immutable/v/unstable.png)](https://packagist.org/packages/florianwolters/component-core-immutable)
[![License](https://poser.pugx.org/florianwolters/component-core-immutable/license.png)](https://packagist.org/packages/florianwolters/component-core-immutable)

[![Stories in Ready](https://badge.waffle.io/florianwolters/php-component-core-immutable.png?label=ready&title=Ready)](https://waffle.io/florianwolters/php-component-core-immutable)
[![Dependency Status](https://www.versioneye.com/user/projects/51c33102007fcd0002000439/badge.png)](https://www.versioneye.com/user/projects/51c33102007fcd0002000439)
[![Dependencies Status](https://depending.in/FlorianWolters/PHP-Component-Core-Immutable.png)](http://depending.in/FlorianWolters/PHP-Component-Core-Immutable)
[![HHVM Status](http://hhvm.h4cc.de/badge/florianwolters/component-core-immutable.png)](http://hhvm.h4cc.de/package/florianwolters/component-core-immutable)

## Table of Contents (ToC)

* [Introduction](#introduction)
* [Features](#features)
* [Requirements](#requirements)
* [Usage](#usage)
* [Installation](#installation)
* [As A Dependency On Your Component](#as-a-dependency-on-your-component)
* [Contributing](#contributing)
* [Credits](#credits)
* [License](#license)

## Introduction

> An object is considered immutable if its state cannot change after it is
> constructed. Maximum reliance on immutable objects is widely accepted as a
> sound strategy for creating simple, reliable code.
>
> [...]
>
> Programmers are often reluctant to employ immutable objects, because they worry
> about the cost of creating a new object as opposed to updating an object in
> place. The impact of object creation is often overestimated, and can be offset
> by some of the efficiencies associated with immutable objects. These include
> decreased overhead due to garbage collection, and the elimination of code
> needed to protect mutable objects from corruption.
(Quoted from [Immutable Objects (The Java Tutorials)][28])

## Features

* Artifacts tested with both static and dynamic test procedures:
    * Dynamic component tests (unit tests) implemented using [PHPUnit][19].
    * Static code analysis performed using the following tools:
        * [PHP_CodeSniffer][14]: Style Checker
        * [PHP Mess Detector (PHPMD)][18]: Code Analyzer
        * [phpcpd][4]: Copy/Paste Detector (CPD)
        * [phpdcd][5]: Dead Code Detector (DCD)
* Provides a [Packagist][25] package which can be installed using the dependency manager [Composer][3]. Click [here][24] for the package on [Packagist][25].
* Provides a complete Application Programming Interface (API) documentation generated with the documentation generator [phpDocumentor][2]. Click [here][1] for the API documentation.
* Follows the following "standards" from the [PHP Framework Interoperability Group (FIG)][27]. PSR stands for PHP Standards Recommendation:
    * [PSR-0][6]: Autoloading Standards

        > Aims to provide a standard file, class and namespace convention to allow plug-and-play code.
    * [PSR-1][7]: Basic Coding Standard

        > Aims to ensure a high level of technical interoperability between shared PHP code.
    * [PSR-2][8]: Coding Style Guide

        > Provides a Coding Style Guide for projects looking to standardize their code.
    * [PSR-4][26]: Autoloader

        > A more modern take on autoloading reflecting advances in the ecosystem.
* Follows the [Semantic Versioning][20] Specification (SemVer) 2.0.0.

## Requirements

### Production

* [PHP][17] >= 5.4
* [Composer][3]
* [FlorianWolters/PHP-Component-Core-Cloneable][11] 0.*

### Development

* [PHPUnit][19]
* [phpcpd][4]
* [phpdcd][5]
* [PHP_CodeSniffer][14]
* [PHP Mess Detector (PHPMD)][18]
* [PDepend][9]
* [phpDocumentor][2]
* [SensioLabs Security Checker][12]
* [php-coveralls][10]

## Usage

The best documentation for **FlorianWolters\Component\Core\Immutable** are the unit tests, which are shipped in the package.

## Installation

**FlorianWolters\Component\Core\Immutable** should be installed using the dependency manager [Composer][3].

> [Composer][3] is a tool for dependency management in [PHP][17]. It allows you to declare the dependent libraries your project needs and it will install them in your project for you.

The [Composer][3] installer can be downloaded with `php`.

    php -r "readfile('https://getcomposer.org/installer');" | php

> This will just check a few [PHP][17] settings and then download `composer.phar` to your working directory. This file is the [Composer][3] binary. It is a PHAR ([PHP][17] archive), which is an archive format for [PHP][17] which can be run on the command line, amongst other things.

> To resolve and download dependencies, run the `install` command:

    php composer.phar install

## As A Dependency On Your Component

If you are creating a component that relies on **FlorianWolters\Component\Core\Immutable**, please make sure that you add **FlorianWolters\Component\Core\Immutable** to your component's `composer.json` file:

```json
{
    "require": {
        "florianwolters/component-core-immutable": "0.2.*"
    }
}
```

## Contributing

See [`CONTRIBUTING.md`](CONTRIBUTING.md).

## Credits

* [Florian Wolters](https://github.com/FlorianWolters)
* [All Contributors](https://github.com/FlorianWolters/PHP-Component-Util-Command/contributors)

## License

This program is free software: you can redistribute it and/or modify it under the
terms of the GNU Lesser General Public License as published by the Free Software
Foundation, either version 3 of the License, or (at your option) any later
version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
PARTICULAR PURPOSE.  See the GNU Lesser General Public License for more details.

You should have received a copy of the GNU Lesser General Public License along
with this program. If not, see <http://gnu.org/licenses/lgpl.txt>.

[1]: http://blog.florianwolters.de/PHP-Component-Core-Immutable
     "Application Programming Interface (API) documentation"
[2]: http://phpdoc.org
     "phpDocumentor 2"
[3]: http://getcomposer.org
     "Composer"
[4]: https://github.com/sebastianbergmann/phpcpd
     "sebastianbergmann/phpcpd · GitHub"
[5]: https://github.com/sebastianbergmann/phpdcd
     "sebastianbergmann/phpdcd · GitHub"
[6]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md
     "PSR-0 requirements for autoloader interoperability"
[7]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md
     "PSR-1 basic coding style guide"
[8]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md
     "PSR-2 coding style guide"
[9]: http://pdepend.org
     "PHP Depend - Software Metrics for PHP"
[10]: https://github.com/satooshi/php-coveralls
      "satooshi/php-coveralls · GitHub"
[11]: https://github.com/FlorianWolters/PHP-Component-Core-Cloneable
      "FlorianWolters/PHP-Component-Core-Cloneable · GitHub"
[12]: https://github.com/sensiolabs/security-checker
      "sensiolabs/security-checker · GitHub"
[14]: http://pear.php.net/package/PHP_CodeSniffer
      "PHP_CodeSniffer"
[16]: https://github.com/stuartherbert/phix4componentdev
      "stuartherbert/phix4componentdev · GitHub"
[17]: http://php.net
      "PHP: Hypertext Preprocessor"
[18]: http://phpmd.org
      "PHPMD - PHP Mess Detector"
[19]: http://phpunit.de
      "sebastianbergmann/phpunit · GitHub"
[20]: http://semver.org
      "Semantic Versioning"
[24]: http://packagist.org/packages/florianwolters/component-core-immutable
      "florianwolters/component-core-immutable - Packagist"
[25]: http://packagist.org
      "Packagist"
[26]: http://php-fig.org/psr/psr-4
      "PSR-4: Improved Autoloading"
[27]: http://php-fig.org
      "PHP-FIG — PHP Framework Interop Group"
[28]: http://docs.oracle.com/javase/tutorial/essential/concurrency/immutable.html
      "Immutable Objects (The Java Tutorials)"
