<?php


namespace App\classes;


class Product
{
    protected $products = [];
    public function getAllProduct(){
        return [
            0=> [
                'id'=>1,
                'name'=>'T-shirt',
                'category'=>'Man Fashion',
                'brand'=>'Yellow',
                'price'=>'3500',
                'description'=>'This is a very nice product you can buy it',
                'image'=>'p1.jpg'
            ],
            1=> [
                'id'=>2,
                'name'=>'Smart shirt',
                'category'=>'WomenMan Fasion',
                'brand'=>'Yellow',
                'price'=>'3900',
                'description'=>'This is a very nice product you can buy it',
                'image'=>'p2.jpg'
            ],
            2=> [
                'id'=>3,
                'name'=>'Bengali Sari',
                'category'=>'Electronics',
                'brand'=>'Samsung',
                'price'=>'3500',
                'description'=>'This is a very nice product you can buy it',
                'image'=>'p4.jpg'
            ],
            3=> [
                'id'=>3,
                'name'=>'food',
                'category'=>'Electronics',
                'brand'=>'Samsung',
                'price'=>'35000',
                'description'=>'This is a very nice product you can buy it',
                'image'=>'p5.jpg'
            ],
            4=> [
                'id'=>3,
                'name'=>'Laptop',
                'category'=>'Electronics',
                'brand'=>'Samsung',
                'price'=>'670000',
                'description'=>'This is a very nice product you can buy it',
                'image'=>'p6.jpg'
            ],
            5=> [
                'id'=>3,
                'name'=>'Mobile',
                'category'=>'Electronics',
                'brand'=>'Samsung',
                'price'=>'45608',
                'description'=>'This is a very nice product you can buy it',
                'image'=>'p7.jpg'
            ],
        ];
    }
    public function getProductById($id){
        $this->products = $this->getAllProduct();
        foreach($this->products as $product){
            if($product['id']==$id){
                return $product;
            }
        }


    }

}