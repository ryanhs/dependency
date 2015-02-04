# Dependency
very very small dependency class

maybe you will find it as a joke haha :-)


# Installation
you can download this with composer (packagist)
<pre><code>composer require ryanhs/dependency</code></pre>


#### example
<pre><code>require 'vendor/autoload.php'; // composer autoload

use \Ryanhs\Dependency\Dependency;

$d = new Dependency;
$d->app = new MyApp();
$d->router = new MyRouter();
$d->controller = new MyController();


$d->app->run();
</code></pre>

# License
MIT License
			
