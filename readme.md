<h2>ZN Framework Database Package</h2>
<p>
Follow the steps below for installation and use.
</p>

<h3>Installation</h3>
<p>
You only need to run the following code for the installation.
</p>

```
composer create-project znframework/custom-edition
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

ZN\Autoloader::register('standart');

$persons = DB::persons();

Output::display($persons->result());
```