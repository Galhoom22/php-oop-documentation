<?php 

declare(strict_types=1);

class Product{
    public function __construct(
        public string $name,
        public float $price,
    ){}

    public function getNameAndPrice(): string{
        return "{$this->name} - {$this->price}";
    }
}

$product = new Product('Laptop', 10.99);

echo $product->getNameAndPrice();