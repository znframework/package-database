<p align="center">
<a href="https://packagist.org/packages/znframework/package-database" rel="nofollow">
	<img src="https://img.shields.io/packagist/dt/znframework/package-database?style=flat-square" style="max-width:100%;"></a>
<a href="//packagist.org/packages/znframework/package-database" rel="nofollow">
	<img src="https://img.shields.io/github/v/release/znframework/package-database?style=flat-square&color=00BFFF" style="max-width:100%;"></a>
<a href="//packagist.org/packages/znframework/package-database" rel="nofollow">
	<img src="https://img.shields.io/github/release-date/znframework/package-database?style=flat-square" style="max-width:100%;"></a>
<a href="//packagist.org/packages/znframework/package-database" rel="nofollow">
	<img src="https://img.shields.io/github/license/znframework/package-database?style=flat-square" style="max-width:100%;"></a>
</p>

<h2>ZN Framework Database Package</h2>
<p>
Follow the steps below for installation and use.
</p>

<h3>Installation</h3>
<p>
You only need to run the following code for the installation.
</p>

```
composer require znframework/package-database
```

<h3>Documentation</h3>
<p>
Click for <a href="https://docs.znframework.com/veritabani-kullanimi/veritabani-kutuphanesi-bolum-1">documentation</a> of your library.
</p>

<h3>Example Usage</h3>
<p>
Basic level usage is shown below.
</p>

```php
<?php require 'vendor/autoload.php';

ZN\ZN::run();

# The default settings are in the ZN\Database\DatabaseDefaultConfiguration file. 
# You can make your settings in this file.
# The Config::set() method should be used if you need to configure settings externally.
Config::database('database', 
[
    'driver'   => 'mysqli',
    'host'     => 'localhost', 
    'database' => 'test',
    'user'     => 'root',
    'password' => '',
    'prefix'   => ''
]);

$persons = DB::persons();

Output::display($persons->result());
```
