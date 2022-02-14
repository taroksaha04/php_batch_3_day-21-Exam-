<?php


namespace App\classes;
class Student
{
    protected $text;
    protected $students;
    protected $result =[];

    public function __construct($post = null)
    {
        if(isset($post['search']))
        {
        $this->text = $post['search'];
        }
    }

    public function getAllStudent()
    {
//        return [
//            0=>[
//                'name'    =>  'tarok saha',
//                'mobile'  =>  '1234568',
//                'email'   =>  'tarok@gmail.com',
//                'address' =>  'old Dhaka'
//            ],
//            1=>[
//                'name'    =>  'abul',
//                'mobile'  =>  '568098',
//                'email'   =>  'abul@gmail.com',
//                'address' =>  'old Dhaka'
//            ],
//            2=>[
//                'name'    =>  'Mokhless',
//                'mobile'  =>  '23456',
//                'email'   =>  'mokhless@gmail.com',
//                'address' =>  'old Dhaka'
//            ],
//            3=>[
//                'name'    =>  'rahim',
//                'mobile'  =>  '67890',
//                'email'   =>  'rahim@gmail.com',
//                'address' =>  'Gazipur'
//            ],
//            4=>[
//                'name'    =>  'shykot',
//                'mobile'  =>  '012345',
//                'email'   =>  'shykot@gmail.com',
//                'address' =>  'Narayanganj'
//            ],
//            5=>[
//                'name'    =>  'abir',
//                'mobile'  =>  '56789',
//                'email'   =>  'abul@gmail.com',
//                'address' =>  'panthapath'
//            ],
//        ];
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
                'id'=>4,
                'name'=>'food',
                'category'=>'Electronics',
                'brand'=>'Samsung',
                'price'=>'35000',
                'description'=>'This is a very nice product you can buy it',
                'image'=>'p5.jpg'
            ],
            4=> [
                'id'=>5,
                'name'=>'Laptop',
                'category'=>'Electronics',
                'brand'=>'Samsung',
                'price'=>'670000',
                'description'=>'This is a very nice product you can buy it',
                'image'=>'p6.jpg'
            ],
            5=> [
                'id'=>6,
                'name'=>'Mobile',
                'category'=>'Electronics',
                'brand'=>'Samsung',
                'price'=>'45608',
                'description'=>'This is a very nice product you can buy it',
                'image'=>'p7.jpg'
            ],
        ];
    }
    public function getStudentBySearchText()
    {
        //echo 'ok';
       // echo $this->text;
        $this->students =$this->getAllStudent();
        foreach($this->students as $student)
        {
            if($this->text == $student['id'])
            {
                $this->result = $student;
                break;
            }
        }
        return $this->result;


    }
}