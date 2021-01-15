Laravel Hammer 🔨
============

## 介绍

Laravel 的 Artisan 命令扩展包，增加清理缓存、刷新应用等功能。

## 安装

```shell
composer require nookery/laravel-hammer --dev
```

## 使用
```shell
php artisan ping

# 输出
pang
```

可用的命令：

| 命令         | 用途|
|  ----       | ---- |
| ping        | 输出：pang| 
| foo         | 输出：bar| 
| version     | 输出重要组件的版本号| 
| clear       | 清理一切缓存 |
| fresh       | 清理缓存，重装依赖，刷新应用|
