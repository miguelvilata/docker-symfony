<?php

declare(strict_types=1);

namespace App\Entity;

final class Product
{
    private $id;
    private $reference;
    private $name;
    private $description;

    private function __construct(string $reference, string $name, string $description)
    {
        $this->reference = $reference;
        $this->name = $name;
        $this->description = $description;
    }

//    public static function create(CreateProductRequestDTO $createProductRequestDTO): Product
//    {
//        return new Product(
//            $createProductRequestDTO->reference(),
//            $createProductRequestDTO->name()
//        );
//    }
}