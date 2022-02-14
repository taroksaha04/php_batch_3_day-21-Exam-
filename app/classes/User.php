<?php


namespace App\classes;
class User
{
    public function getAllUser()
    {
        return [
            0=>[
                'id'=>1,
                'name'=>'Tarok saha',
                'email'=>'tarok@gmail.com',
                'password'=>'123456'
            ],
            1=>[
                'id'=>2,
                'name'=>'Abul Khan',
                'email'=>'abul@gmail.com',
                'password'=>'111222'

            ]

            ];
    }

}