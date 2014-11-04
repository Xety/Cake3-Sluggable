# Cake3 Sluggable
A simple Cake3 plugin to slug fields and find records by slug.

[![Build Status](https://img.shields.io/travis/Xety/Cake3-Sluggable.svg?style=flat-square)](https://travis-ci.org/Xety/Cake3-Sluggable)
[![Coverage Status](https://img.shields.io/coveralls/Xety/Cake3-Sluggable/master.svg?style=flat-square)](https://coveralls.io/r/xety/Cake3-Sluggable)
[![Scrutinizer](https://img.shields.io/scrutinizer/g/Xety/Cake3-Sluggable.svg?style=flat-square)](https://scrutinizer-ci.com/g/Xety/Cake3-Sluggable)
[![Latest Stable Version](https://img.shields.io/packagist/v/Xety/Cake3-Sluggable.svg?style=flat-square)](https://packagist.org/packages/xety/cake3-sluggable)
[![Total Downloads](https://img.shields.io/packagist/dt/xety/cake3-sluggable.svg?style=flat-square)](https://packagist.org/packages/xety/cake3-sluggable)
[![License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](https://packagist.org/packages/xety/cake3-sluggable)

## Requirements
* CakePHP 3.X

## Installation
Run : `composer require xety/cake3-sluggable:1.*`
Or add it in your `composer.json`:
``` php
"require": {
	"xety/cake3-sluggable": "1.*"
},
```

## Usage
In your `config/bootstrap.php` add :
``` php
Plugin::load('Xety/Cake3Sluggable');
```
In your model `initialize()`:
``` php
$this->addBehavior('Xety/Cake3Sluggable.Sluggable', [
		'field' => 'username'
	]
);
```

## Contribute
[Follow this guide to contribute](https://github.com/Xety/Cake3-Upload/blob/master/CONTRIBUTING.md)
