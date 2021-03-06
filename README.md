# laravel-capital

> 基于`trendsoft/capital`的Laravel金额转中文大写

[![Build Status](https://travis-ci.org/trendsoft/laravel-capital.svg?branch=master)](https://travis-ci.org/trendsoft/laravel-capital)
[![Latest Stable Version](https://poser.pugx.org/trendsoft/laravel-capital/v/stable)](https://packagist.org/packages/trendsoft/laravel-capital)
[![Latest Unstable Version](https://poser.pugx.org/trendsoft/laravel-capital/v/unstable)](https://packagist.org/packages/trendsoft/laravel-capital)
[![StyleCI](https://styleci.io/repos/113957453/shield?branch=master)](https://styleci.io/repos/113957453)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/trendsoft/laravel-capital/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/trendsoft/laravel-capital/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/trendsoft/laravel-capital/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/trendsoft/laravel-capital/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/trendsoft/laravel-capital/badges/build.png?b=master)](https://scrutinizer-ci.com/g/trendsoft/laravel-capital/build-status/master)
[![License](https://poser.pugx.org/trendsoft/laravel-capital/license)](https://packagist.org/packages/trendsoft/laravel-capital)
[![Total Downloads](https://poser.pugx.org/trendsoft/laravel-capital/downloads)](https://packagist.org/packages/trendsoft/laravel-capital)
[![Monthly Downloads](https://poser.pugx.org/trendsoft/laravel-capital/d/monthly)](https://packagist.org/packages/trendsoft/laravel-capital)
[![Daily Downloads](https://poser.pugx.org/trendsoft/laravel-capital/d/daily)](https://packagist.org/packages/trendsoft/laravel-capital)

## 要求
- PHP >=7.0
- Composer

## 安装

```
$ composer require "trendsoft/laravel-capital" -vvv
```

## 配置

Laravel 应用

- 在 config/app.php 注册 ServiceProvider 和 Facade (Laravel 5.5 无需手动注册)

```
'providers' => [
    // ...
    LaravelCapital\ServiceProvider::class,
],
'aliases' => [
    // ...
    'Capital'=>LaravelCapital\Money::class
],
```

Lumen 应用

在 bootstrap/app.php 中 82 行左右：

```
$app->register(LaravelCapital\ServiceProvider::class);
```

## 使用示例

```
\LaravelCapital\Money::parse(2003.2) //贰仟零叁元贰角
```

## Contribution

[Contribution Guide](.github/CONTRIBUTING.md)

## License
MIT
