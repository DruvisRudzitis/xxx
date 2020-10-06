<?php

declare(strict_types=1);

require_once 'Product.php';
require_once 'Store.php';
require_once 'ProductFormatter.php';
require_once 'ProductStorage.php';
require_once 'Person.php';

$person = new Person('Druvis', 1000);
$storage = new ProductStorage('./Products.txt');
$store = new Store('Narvesen Kengarags', $storage->load());

echo $person->name() . ' ' . ProductFormatter::price($person->funds());
echo PHP_EOL;
echo PHP_EOL;

foreach ($store->getAllProducts() as $product)
{
    /** @var Product $product */
    echo $product->name() . ' ';
    echo ProductFormatter::price($product->price()). ' ';
    echo ProductFormatter::amount($product->amount()) . ' ';
    echo PHP_EOL;
}
