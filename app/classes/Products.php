<?php
namespace App\classes;
class Products
{
    protected $products;


    public function getAllProducts(){
        return [
            0=>[
                'name' => 'Bull tees',
                'price' => '10.00$',
                'brand' => 'ETSY',
                'image' => 'p1.jpg',
                'category' => 'tees',
                'id' => '1001'
            ],
            1=>[
                'name' => 'Flower',
                'price' => '10.00$',
                'brand' => 'ETSY',
                'image' => 'p2.jpg',
                'category' => 'tees',
                'id' => '1002'
            ],
            2=>[
                'name' => 'Who Dey',
                'price' => '10.00$',
                'brand' => 'ETSY',
                'image' => 'p3.jpg',
                'category' => 'tees',
                'id' => '1003'
            ],
            3=>[
                'name' => 'Thrifted',
                'price' => '10.00$',
                'brand' => 'ETSY',
                'image' => 'p4.jpg',
                'category' => 'tees',
                'id' => '1004'
            ],
            4=>[
                'name' => 'Led Zapplin',
                'price' => '10.00$',
                'brand' => 'ETSY',
                'image' => 'p5.jpg',
                'category' => 'tees',
                'id' => '1005'
            ],
            5=>[
                'name' => 'Control Freak',
                'price' => '10.00$',
                'brand' => 'ETSY',
                'image' => 'p6.jpg',
                'category' => 'tees',
                'id' => '1006'
            ],
            6=>[
                'name' => 'Everyone',
                'price' => '10.00$',
                'brand' => 'ETSY',
                'image' => 'p7.jpg',
                'category' => 'tees',
                'id' => '1007'
            ],
            7=>[
                'name' => 'Canadian Trucker',
                'price' => '10.00$',
                'brand' => 'ETSY',
                'image' => 'p8.jpg',
                'category' => 'tees',
                'id' => '1008'
            ],
            8=>[
                'name' => 'The Weekend',
                'price' => '10.00$',
                'brand' => 'ETSY',
                'image' => 'p9.jpg',
                'category' => 'tees',
                'id' => '1009'
            ],
            9=>[
                'name' => 'Superbowl',
                'price' => '10.00$',
                'brand' => 'ETSY',
                'image' => 'p10.jpg',
                'category' => 'tees',
                'id' => '1010'
            ],
        ];
    }

}