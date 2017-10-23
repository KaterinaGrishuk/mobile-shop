<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createUsers();
        $this->createProducts();
        $this->createTransactions();
    }

    public function createUsers(){
        DB::table('users')->delete();
        DB::table('users')->insert([
            [
                'user_name'=>'Ольга',
                'email'=>'olga@mail.ru',
                'password'=> bcrypt('000000'),
                'phone' => '+375 29 4567891'
            ],
            [
                'user_name'=>'Сергей',
                'email'=>'serg@mail.ru',
                'password'=>bcrypt('000000'),
                'phone' => '+375 44 7894561'
            ],
            [
                'user_name'=>'Павел',
                'email'=>'pavel@mail.ru',
                'password'=>bcrypt('000000'),
                'phone' => '+375 25 6741289'
            ],
            [
                'user_name'=>'Александр',
                'email'=>'user@mail.ru',
                'password'=>bcrypt('000000'),
                'phone' => '+375 29 6874167'
            ]
        ]);
    }

    public function createProducts(){
        DB::table('products')->delete();
        $data = [
            [
                'name'=> 'Samsung Galaxy A5 Black Onyx',
                'price' => '690.00',
                'amount' => 11,
                'image' => '/img/mob/mob01.jpg',
                'description' => "Дата выхода на рынок: 2017; Операционная система: Android; Размер экрана: 5.2\"; Оперативная память: 3 ГБ; Количество SIM-карт: 2; Тактовая частота процессора: 1 900 МГц; Количество ядер: 8; Ёмкость аккумулятора: 3 000 мА·ч;",
                'user_id' => '1',
                'status' => 1
            ],
            [
                'name'=> 'Samsung Galaxy A5 Gold Platinum',
                'price' => '676.00',
                'amount' => 10,
                'image' => '/img/mob/mob02.jpg',
                'description' => "Дата выхода на рынок: 2017; Операционная система: Android; Размер экрана: 5.2\"; Оперативная память: 3 ГБ; Количество SIM-карт: 2; Тактовая частота процессора: 1 900 МГц; Количество ядер: 8; Ёмкость аккумулятора: 3 000 мА·ч;",
                'user_id' => '2',
                'status' => 1
            ],
            [
                'name'=> 'Samsung Galaxy S7 Edge Black Onyx',
                'price' => '1100.00',
                'amount' => 5,
                'image' => '/img/mob/mob03.jpg',
                'description' => "Дата выхода на рынок: 2017; Операционная система: Android; Размер экрана: 5.5\"; Оперативная память: 4 ГБ; Количество SIM-карт: 1; Тактовая частота процессора: 2 300 МГц; Количество ядер: 8; Ёмкость аккумулятора: 3 600 мА·ч;",
                'user_id' => '3',
                'status' => 1
            ],
            [
                'name'=> 'Samsung Galaxy S7 Edge Gold Platinum',
                'price' => '1080.00',
                'amount' => 7,
                'image' => '/img/mob/mob04.jpg',
                'description' => "Дата выхода на рынок: 2017; Операционная система: Android; Размер экрана: 5.5\"; Оперативная память: 4 ГБ; Количество SIM-карт: 1; Тактовая частота процессора: 2 300 МГц; Количество ядер: 8; Ёмкость аккумулятора: 3 600 мА·ч;",
                'user_id' => '4',
                'status' => 1
            ],
            [
                'name'=> 'Samsung Galaxy S7 Edge Pink Gold',
                'price' => '1021.00',
                'amount' => 6,
                'image' => '/img/mob/mob05.jpg',
                'description' => "Дата выхода на рынок: 2017; Операционная система: Android; Размер экрана: 5.5\"; Оперативная память: 4 ГБ; Количество SIM-карт: 1; Тактовая частота процессора: 2 300 МГц; Количество ядер: 8; Ёмкость аккумулятора: 3 600 мА·ч;",
                'user_id' => '1',
                'status' => 1
            ],
            [
                'name'=> 'Samsung Galaxy S7 Edge Silver titanium',
                'price' => '1050.00',
                'amount' => 4,
                'image' => '/img/mob/mob06.jpg',
                'description' => "Дата выхода на рынок: 2017; Операционная система: Android; Размер экрана: 5.5\"; Оперативная память: 4 ГБ; Количество SIM-карт: 1; Тактовая частота процессора: 2 300 МГц; Количество ядер: 8; Ёмкость аккумулятора: 3 600 мА·ч;",
                'user_id' => '2',
                'status' => 1
            ],
            [
                'name'=> 'Samsung Galaxy S7 Edge Blue Coral',
                'price' => '710.00',
                'amount' => 9,
                'image' => '/img/mob/mob07.jpg',
                'description' => "Дата выхода на рынок: 2017; Операционная система: Android; Размер экрана: 5.5\"; Оперативная память: 4 ГБ; Количество SIM-карт: 1; Тактовая частота процессора: 2 300 МГц; Количество ядер: 8; Ёмкость аккумулятора: 3 600 мА·ч;",
                'user_id' => '3',
                'status' => 1
            ],
            [
                'name'=> 'Samsung Galaxy J7 Max Black onyx',
                'price' => '650.00',
                'amount' => 15,
                'image' => '/img/mob/mob08.jpg',
                'description' => "Дата выхода на рынок: 2016; Операционная система: Android; Размер экрана: 5.5\"; Оперативная память: 2 ГБ; Количество SIM-карт: 2; Тактовая частота процессора: 1 600 МГц; Количество ядер: 8; Ёмкость аккумулятора: 3 300 мА·ч;",
                'user_id' => '4',
                'status' => 1
            ],
            [
                'name'=> 'Samsung Galaxy J7 Max Gold platinum',
                'price' => '620.00',
                'amount' => 13,
                'image' => '/img/mob/mob09.jpg',
                'description' => "Дата выхода на рынок: 2016; Операционная система: Android; Размер экрана: 5.5\"; Оперативная память: 2 ГБ; Количество SIM-карт: 2; Тактовая частота процессора: 1 600 МГц; Количество ядер: 8; Ёмкость аккумулятора: 3 300 мА·ч;",
                'user_id' => '1',
                'status' => 1
            ],
            [
                'name'=> 'Samsung Galaxy Note 8 Black onyx',
                'price' => '2150.00',
                'amount' => 17,
                'image' => '/img/mob/mob10.jpg',
                'description' => "Дата выхода на рынок: 2017; Операционная система: Android; Размер экрана: 6.3\"; Оперативная память: 6 ГБ; Количество SIM-карт: 2; Тактовая частота процессора: 2 300 МГц; Количество ядер: 8; Ёмкость аккумулятора: 3 300 мА·ч;",
                'user_id' => '2',
                'status' => 1
            ],
            [
                'name'=> 'Xiaomi Mi A1 Black onyx',
                'price' => '588.00',
                'amount' => 15,
                'image' => '/img/mob/mob11.jpeg',
                'description' => "Дата выхода на рынок: 2017; Операционная система: Android; Размер экрана: 5.5\"; Оперативная память: 4 ГБ; Количество SIM-карт: 1; Тактовая частота процессора: 2 000 МГц; Количество ядер: 8; Ёмкость аккумулятора: 3 080 мА·ч;",
                'user_id' => '3',
                'status' => 1
            ],
            [
                'name'=> 'Xiaomi Mi A1 Gold platinum',
                'price' => '588.50',
                'amount' => 11,
                'image' => '/img/mob/mob12.jpeg',
                'description' => "Дата выхода на рынок: 2017; Операционная система: Android; Размер экрана: 5.5\"; Оперативная память: 4 ГБ; Количество SIM-карт: 1; Тактовая частота процессора: 2 000 МГц; Количество ядер: 8; Ёмкость аккумулятора: 3 080 мА·ч;",
                'user_id' => '4',
                'status' => 1
            ],
            [
                'name'=> 'Huawei P8 lite 2017 Black onyx',
                'price' => '630.70',
                'amount' => 15,
                'image' => '/img/mob/mob13.jpeg',
                'description' => "Дата выхода на рынок: 2017; Операционная система: Android; Размер экрана: 5.2\"; Оперативная память: 3 ГБ; Количество SIM-карт: 2; Тактовая частота процессора: 2 100 МГц; Количество ядер: 8; Ёмкость аккумулятора: 3 000 мА·ч;",
                'user_id' => '1',
                'status' => 1
            ],
            [
                'name'=> 'Huawei P8 lite 2017 Gold platinum',
                'price' => '612.00',
                'amount' => 6,
                'image' => '/img/mob/mob14.jpeg',
                'description' => "Дата выхода на рынок: 2017; Операционная система: Android; Размер экрана: 5.2\"; Оперативная память: 3 ГБ; Количество SIM-карт: 2; Тактовая частота процессора: 2 100 МГц; Количество ядер: 8; Ёмкость аккумулятора: 3 000 мА·ч;",
                'user_id' => '2',
                'status' => 1
            ],
            [
                'name'=> 'Huawei P8 lite 2017 GWhite',
                'price' => '580.30',
                'amount' => 7,
                'image' => '/img/mob/mob15.jpeg',
                'description' => "Дата выхода на рынок: 2017; Операционная система: Android; Размер экрана: 5.2\"; Оперативная память: 3 ГБ; Количество SIM-карт: 2; Тактовая частота процессора: 2 100 МГц; Количество ядер: 8; Ёмкость аккумулятора: 3 000 мА·ч;",
                'user_id' => '3',
                'status' => 1
            ],
            [
                'name'=> 'Huawei P8 lite 2017 Blue coral',
                'price' => '605.00',
                'amount' => 11,
                'image' => '/img/mob/mob16.jpeg',
                'description' => "Дата выхода на рынок: 2017; Операционная система: Android; Размер экрана: 5.2\"; Оперативная память: 3 ГБ; Количество SIM-карт: 2; Тактовая частота процессора: 2 100 МГц; Количество ядер: 8; Ёмкость аккумулятора: 3 000 мА·ч;",
                'user_id' => '4',
                'status' => 1
            ],
        ];
        DB::table('products')->insert($data);
    }

    public function createTransactions(){
        DB::table('transactions')->delete();
        DB::table('transactions')->insert([
            [
                'product_id'=>'1',
                'seller_id'=>'1',
                'buyer_id'=>'2'
            ],
            [
                'product_id'=>'1',
                'seller_id'=>'1',
                'buyer_id'=>'3'
            ],
            [
                'product_id'=>'1',
                'seller_id'=>'1',
                'buyer_id'=>'2'
            ],
            [
                'product_id'=>'2',
                'seller_id'=>'2',
                'buyer_id'=>'4'
            ],
            [
                'product_id'=>'2',
                'seller_id'=>'2',
                'buyer_id'=>'4'
            ],
            [
                'product_id'=>'2',
                'seller_id'=>'2',
                'buyer_id'=>'1'
            ],
            [
                'product_id'=>'3',
                'seller_id'=>'3',
                'buyer_id'=>'2'
            ],
            [
                'product_id'=>'3',
                'seller_id'=>'3',
                'buyer_id'=>'1'
            ],
            [
                'product_id'=>'4',
                'seller_id'=>'4',
                'buyer_id'=>'3'
            ],
            [
                'product_id'=>'4',
                'seller_id'=>'4',
                'buyer_id'=>'2'
            ],
            [
                'product_id'=>'5',
                'seller_id'=>'1',
                'buyer_id'=>'4'
            ],
            [
                'product_id'=>'5',
                'seller_id'=>'1',
                'buyer_id'=>'2'
            ],
            [
                'product_id'=>'6',
                'seller_id'=>'2',
                'buyer_id'=>'1'
            ],
            [
                'product_id'=>'6',
                'seller_id'=>'2',
                'buyer_id'=>'4'
            ],
            [
                'product_id'=>'7',
                'seller_id'=>'3',
                'buyer_id'=>'2'
            ],
            [
                'product_id'=>'7',
                'seller_id'=>'3',
                'buyer_id'=>'4'
            ],
            [
                'product_id'=>'8',
                'seller_id'=>'4',
                'buyer_id'=>'3'
            ],
            [
                'product_id'=>'8',
                'seller_id'=>'4',
                'buyer_id'=>'1'
            ],
            [
                'product_id'=>'9',
                'seller_id'=>'1',
                'buyer_id'=>'3'
            ],
            [
                'product_id'=>'9',
                'seller_id'=>'1',
                'buyer_id'=>'2'
            ],
            [
                'product_id'=>'10',
                'seller_id'=>'2',
                'buyer_id'=>'3'
            ],
            [
                'product_id'=>'10',
                'seller_id'=>'2',
                'buyer_id'=>'4'
            ],
            [
                'product_id'=>'11',
                'seller_id'=>'3',
                'buyer_id'=>'1'
            ],
            [
                'product_id'=>'11',
                'seller_id'=>'3',
                'buyer_id'=>'2'
            ],
            [
                'product_id'=>'12',
                'seller_id'=>'4',
                'buyer_id'=>'1'
            ],
            [
                'product_id'=>'12',
                'seller_id'=>'4',
                'buyer_id'=>'2'
            ],
            [
                'product_id'=>'13',
                'seller_id'=>'1',
                'buyer_id'=>'4'
            ],
            [
                'product_id'=>'13',
                'seller_id'=>'1',
                'buyer_id'=>'4'
            ],
            [
                'product_id'=>'13',
                'seller_id'=>'1',
                'buyer_id'=>'4'
            ],
            [
                'product_id'=>'13',
                'seller_id'=>'1',
                'buyer_id'=>'3'
            ],
            [
                'product_id'=>'14',
                'seller_id'=>'2',
                'buyer_id'=>'1'
            ],
            [
                'product_id'=>'14',
                'seller_id'=>'2',
                'buyer_id'=>'3'
            ],
            [
                'product_id'=>'15',
                'seller_id'=>'3',
                'buyer_id'=>'4'
            ],
            [
                'product_id'=>'15',
                'seller_id'=>'3',
                'buyer_id'=>'1'
            ],
            [
                'product_id'=>'15',
                'seller_id'=>'3',
                'buyer_id'=>'2'
            ],
            [
                'product_id'=>'16',
                'seller_id'=>'4',
                'buyer_id'=>'2'
            ],
            [
                'product_id'=>'16',
                'seller_id'=>'4',
                'buyer_id'=>'3'
            ],
            [
                'product_id'=>'16',
                'seller_id'=>'4',
                'buyer_id'=>'1'
            ],
            [
                'product_id'=>'1',
                'seller_id'=>'1',
                'buyer_id'=>'3'
            ],
            [
                'product_id'=>'2',
                'seller_id'=>'2',
                'buyer_id'=>''
            ],
            [
                'product_id'=>'3',
                'seller_id'=>'3',
                'buyer_id'=>'4'
            ],
            [
                'product_id'=>'7',
                'seller_id'=>'3',
                'buyer_id'=>'2'
            ],
            [
                'product_id'=>'4',
                'seller_id'=>'4',
                'buyer_id'=>'1'
            ],
            [
                'product_id'=>'8',
                'seller_id'=>'4',
                'buyer_id'=>'3'
            ],
            [
                'product_id'=>'5',
                'seller_id'=>'1',
                'buyer_id'=>'2'
            ],
            [
                'product_id'=>'6',
                'seller_id'=>'2',
                'buyer_id'=>'1'
            ],
            [
                'product_id'=>'9',
                'seller_id'=>'1',
                'buyer_id'=>'3'
            ],
            [
                'product_id'=>'10',
                'seller_id'=>'2',
                'buyer_id'=>'4'
            ],
            [
                'product_id'=>'11',
                'seller_id'=>'3',
                'buyer_id'=>'2'
            ],

        ]);
    }
}
