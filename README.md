# StaffimDateTimeBundle

[![Build Status](https://travis-ci.org/staffim/StaffimDateTimeBundle.svg?branch=master)](https://travis-ci.org/staffim/StaffimDateTimeBundle) [![SensioLabsInsight](https://insight.sensiolabs.com/projects/c02d5741-8d81-4c03-be1d-7d2260bc8aee/mini.png)](https://insight.sensiolabs.com/projects/c02d5741-8d81-4c03-be1d-7d2260bc8aee)

[StaffimDateTime](https://github.com/staffim/DateTime) for Symfony.
Bundle presents Timestampable interface/trait for models, [Serializer](http://jmsyst.com/libs/serializer) handler,
Doctrine MongoDB type handlers for Staffim\DateTime classes.

## Installation

### Install StaffimDateTimeBundle

The preferred way to install this bundle is to rely on [Composer](http://getcomposer.org).
Just check on [Packagist](http://packagist.org/packages/staffim/datetime-bundle) the version you want to install and add it to your `composer.json`:

``` js
{
    "require": {
        // ...
        "staffim/datetime-bundle": "1.0"
    }
}
```

Enable the bundle in the kernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Staffim\DateTimeBundle\StaffimDateTimeBundle(),
    );
}
```

