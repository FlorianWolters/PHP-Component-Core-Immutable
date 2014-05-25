# Component\Core\Immutable

**FlorianWolters\Component\Core\Immutable** is a simple-to-use [PHP][1] component that implements the **Immutable Object** implementation pattern.

[![Build Status](https://travis-ci.org/FlorianWolters/PHP-Component-Core-Immutable.svg?branch=master)](https://travis-ci.org/FlorianWolters/PHP-Component-Core-Immutable)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/FlorianWolters/PHP-Component-Core-Immutable/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/FlorianWolters/PHP-Component-Core-Immutable/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/FlorianWolters/PHP-Component-Core-Immutable/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/FlorianWolters/PHP-Component-Core-Immutable/?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/9f1eee4b-fb13-466d-a4b0-2696a954f82b/mini.png)](https://insight.sensiolabs.com/projects/9f1eee4b-fb13-466d-a4b0-2696a954f82b)
[![Coverage Status](https://coveralls.io/repos/FlorianWolters/PHP-Component-Core-Immutable/badge.png?branch=master)](https://coveralls.io/r/FlorianWolters/PHP-Component-Core-Immutable?branch=master)

[![Latest Stable Version](https://poser.pugx.org/florianwolters/component-core-immutable/v/stable.png)](https://packagist.org/packages/florianwolters/component-core-immutable)
[![Total Downloads](https://poser.pugx.org/florianwolters/component-core-immutable/downloads.png)](https://packagist.org/packages/florianwolters/component-core-immutable)
[![Monthly Downloads](https://poser.pugx.org/florianwolters/component-core-immutable/d/monthly.png)](https://packagist.org/packages/florianwolters/component-core-immutable)
[![Daily Downloads](https://poser.pugx.org/florianwolters/component-core-immutable/d/daily.png)](https://packagist.org/packages/florianwolters/component-core-immutable)
[![Latest Unstable Version](https://poser.pugx.org/florianwolters/component-core-immutable/v/unstable.png)](https://packagist.org/packages/florianwolters/component-core-immutable)
[![License](https://poser.pugx.org/florianwolters/component-core-immutable/license.png)](https://packagist.org/packages/florianwolters/component-core-immutable)

[![Stories in Ready](https://badge.waffle.io/florianwolters/php-component-core-immutable.png?label=ready&title=Ready)](https://waffle.io/florianwolters/php-component-core-immutable)
[![Dependency Status](https://versioneye.com/user/projects/51c33102007fcd0002000439/badge.png)](https://versioneye.com/user/projects/51c33102007fcd0002000439)
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

-- [Immutable Objects (The Java Tutorials)][53]

## Features

* Artifacts tested with both static and dynamic test procedures:
    * Dynamic component tests (unit and integration tests) implemented with [PHPUnit][41].
    * Static code analysis performed using the following tools:
        * [PHP_CodeSniffer][40]: Style Checker
        * [PHP Mess Detector (PHPMD)][44]: Code Analyzer
        * [PHP Depend][45]: Code Metrics
        * [phpcpd][42]: Copy/Paste Detector (CPD)
        * [phpdcd][43]: Dead Code Detector (DCD)
        * [SensioLabs Security Checker][47]: Security Checker
    * Continuous Integration (CI) using the following web services:
        * [Scrutinizer CI][21]
        * [SensioLabsInsight][22]
        * [Coveralls][23]
        * [VersionEye][24]
        * [Depending][25]
        * [Waffle][26]
* Provides a [Packagist][3] package which can be installed using the dependency manager [Composer][2]. Click [here][51] for the package on [Packagist][3].
* Provides a complete Application Programming Interface (API) documentation generated with the documentation generator [phpDocumentor][46]. Click [here][52] for the API documentation.
* Follows the following "standards" from the [PHP Framework Interoperability Group (FIG)][10]. PSR stands for PHP Standards Recommendation:
    * [PSR-0][11]: Autoloading Standards

        > Aims to provide a standard file, class and namespace convention to allow plug-and-play code.
    * [PSR-1][12]: Basic Coding Standard

        > Aims to ensure a high level of technical interoperability between shared PHP code.
    * [PSR-2][13]: Coding Style Guide

        > Provides a Coding Style Guide for projects looking to standardize their code.
    * [PSR-4][14]: Autoloader

        > A more modern take on autoloading reflecting advances in the ecosystem.
* Follows the [Semantic Versioning][4] (SemVer) specification version 2.0.0.

## Requirements

### Production

* [PHP][1] >= 5.4
* [Composer][2]
* [FlorianWolters/PHP-Component-Core-Immutable][54]

### Development

* [PHPUnit][41]
* [phpcpd][42]
* [phpdcd][43]
* [PHP_CodeSniffer][40]
* [PHP Mess Detector (PHPMD)][44]
* [PDepend][45]
* [phpDocumentor][46]
* [SensioLabs Security Checker][47]
* [php-coveralls][48]

## Usage

The best documentation for **FlorianWolters\Component\Core\Immutable** are the unit tests, which are shipped in the package.

## Installation

**FlorianWolters\Component\Core\Immutable** should be installed using the dependency manager [Composer][2].

> [Composer][2] is a tool for dependency management in [PHP][1]. It allows you to declare the dependent libraries your project needs and it will install them in your project for you.

The [Composer][2] installer can be downloaded with `php`.

    php -r "readfile('https://getcomposer.org/installer');" | php

> This will just check a few [PHP][1] settings and then download `composer.phar` to your working directory. This file is the [Composer][2] binary. It is a PHAR ([PHP][1] archive), which is an archive format for [PHP][1] which can be run on the command line, amongst other things.

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

* [Florian Wolters][9]
* [All Contributors][50]

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

[1]: https://php.net
     "PHP: Hypertext Preprocessor"
[2]: https://getcomposer.org
     "Composer"
[3]: https://packagist.org
     "Packagist"
[4]: http://semver.org
     "Semantic Versioning"
[9]: https://github.com/FlorianWolters
     "FlorianWolters · GitHub"
[10]: http://php-fig.org
      "PHP-FIG — PHP Framework Interop Group"
[11]: http://php-fig.org/psr/psr-0
      "PSR-0 requirements for autoloader interoperability"
[12]: http://php-fig.org/psr/psr-1
      "PSR-1 basic coding style guide"
[13]: http://php-fig.org/psr/psr-2
      "PSR-2 coding style guide"
[14]: http://php-fig.org/psr/psr-4
      "PSR-4: Improved Autoloading"
[20]: https://travis-ci.org
      "Travis CI"
[21]: https://scrutinizer-ci.com
      "Scrutinizer CI"
[22]: https://insight.sensiolabs.com
      "SensioLabsInsight"
[23]: https://coveralls.io
      "Coveralls"
[24]: https://versioneye.com
      "VersionEye"
[25]: https://depending.in
      "Depending"
[26]: https://waffle.io
      "Waffle"
[27]: http://hhvm.h4cc.de
      "HHVM Support in PHP Projects"
[40]: https://pear.php.net/package/PHP_CodeSniffer
      "PHP_CodeSniffer"
[41]: https://phpunit.de
      "PHPUnit"
[42]: https://github.com/sebastianbergmann/phpcpd
      "sebastianbergmann/phpcpd · GitHub"
[43]: https://github.com/sebastianbergmann/phpdcd
      "sebastianbergmann/phpdcd · GitHub"
[44]: http://phpmd.org
      "PHPMD - PHP Mess Detector"
[45]: http://pdepend.org
      "PHP Depend - Software Metrics for PHP"
[46]: http://phpdoc.org
      "phpDocumentor"
[47]: https://github.com/sensiolabs/security-checker
      "SensioLabs Security Checker"
[48]: https://github.com/satooshi/php-coveralls
      "satooshi/php-coveralls · GitHub"
[50]: https://github.com/FlorianWolters/PHP-Component-Core-Immutable/contributors
      "Contributors to FlorianWolters/PHP-Component-Core-Immutable"
[51]: https://packagist.org/packages/florianwolters/component-core-immutable
      "florianwolters/component-core-immutable - Packagist"
[52]: http://blog.florianwolters.de/PHP-Component-Core-Immutable
      "Application Programming Interface (API) documentation"
[53]: http://docs.oracle.com/javase/tutorial/essential/concurrency/immutable.html
      "Immutable Objects (The Java Tutorials)"
[54]: https://github.com/FlorianWolters/PHP-Component-Core-Immutable
      "FlorianWolters/PHP-Component-Core-Immutable · GitHub"
