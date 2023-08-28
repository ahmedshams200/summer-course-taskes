<?php
class Product {
    public $id;
    public $name;
    public $price;

    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function showInfo() {
        echo "ID: {$this->id}\n";
        echo "Name: {$this->name}\n";
        echo "Price: {$this->price}\n";
    }
}


$products = [
    new Product(1, "Product A", 10),
    new Product(2, "Product B", 20),
    new Product(3, "Product C", 15),
    new Product(4, "Product D", 25),
    new Product(5, "Product E", 30),
    new Product(6, "Product F", 12),
    new Product(7, "Product G", 18),
    new Product(8, "Product H", 22)
];


$totalPrice = 0;
$numObjects = count($products);

foreach ($products as $product) {
    $totalPrice += $product->price;
    $product->showInfo(); 
    echo "\n";
}

echo "Total Price: $totalPrice\n";
echo "Number of Objects: $numObjects\n";






