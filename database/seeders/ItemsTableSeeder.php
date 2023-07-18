<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'id' => 1,
                'name' => 'Lettuce - Boston Bib - Organic',
                'image' => 'http://dummyimage.com/198x100.png/cc0000/ffffff',
                'price' => 7.92,
                'category' => 'vegetables',
            ],
            [
                'id' => 2,
                'name' => 'Beef - Top Sirloin',
                'image' => 'http://dummyimage.com/136x100.png/ff4444/ffffff',
                'price' => 89.66,
                'category' => 'meat',
            ],
            [
                'id' => 3,
                'name' => 'Beef Flat Iron Steak',
                'image' => 'http://dummyimage.com/223x100.png/dddddd/000000',
                'price' => 27.87,
                'category' => 'meat',
            ],
            [
                'id' => 4,
                'name' => 'Container - Hngd Cll Blk 7x7x3',
                'image' => 'http://dummyimage.com/170x100.png/5fa2dd/ffffff',
                'price' => 77.84,
                'category' => 'miscellaneous',
            ],
            [
                'id' => 5,
                'name' => 'Broom And Brush Rack Black',
                'image' => 'http://dummyimage.com/100x100.png/dddddd/000000',
                'price' => 75.28,
                'category' => 'miscellaneous',
            ],
            [
                'id' => 6,
                'name' => 'Pasta - Spaghetti',
                'image' => 'http://dummyimage.com/195x100.png/5fa2dd/ffffff',
                'price' => 9.8,
                'category' => 'pasta',
            ],
            [
                'id' => 7,
                'name' => 'Olives - Morracan Dired',
                'image' => 'http://dummyimage.com/203x100.png/dddddd/000000',
                'price' => 26.41,
                'category' => 'fruits',
            ],
            [
                'id' => 8,
                'name' => 'Emulsifier',
                'image' => 'http://dummyimage.com/159x100.png/dddddd/000000',
                'price' => 73.97,
                'category' => 'drinks',
            ],
            [
                'id' => 9,
                'name' => 'Salad Dressing',
                'image' => 'http://dummyimage.com/127x100.png/dddddd/000000',
                'price' => 12.29,
                'category' => 'vinaigrette',
            ],
            [
                'id' => 10,
                'name' => 'Cheese - Gouda Smoked',
                'image' => 'http://dummyimage.com/154x100.png/5fa2dd/ffffff',
                'price' => 41.6,
                'category' => 'meat',
            ],
            [
                'id' => 11,
                'name' => 'Hagen Daza - Dk Choocolate',
                'image' => 'http://dummyimage.com/148x100.png/cc0000/ffffff',
                'price' => 97.9,
                'category' => 'dairy',
            ],
            [
                'id' => 12,
                'name' => 'Squash - Acorn',
                'image' => 'http://dummyimage.com/115x100.png/cc0000/ffffff',
                'price' => 86.65,
                'category' => 'vegetables',
            ],
            [
                'id' => 13,
                'name' => 'Veal - Brisket',
                'image' => 'http://dummyimage.com/227x100.png/ff4444/ffffff',
                'price' => 94.51,
                'category' => 'meat',
            ],
            [
                'id' => 14,
                'name' => 'Duck - Legs',
                'image' => 'http://dummyimage.com/119x100.png/cc0000/ffffff',
                'price' => 17.85,
                'category' => 'meat',
            ],
            [
                'id' => 15,
                'name' => 'Corn Kernels - Frozen',
                'image' => 'http://dummyimage.com/179x100.png/5fa2dd/ffffff',
                'price' => 79.06,
                'category' => 'vegetables',
            ],
            [
                'id' => 16,
                'name' => 'Soup - Campbells',
                'image' => 'http://dummyimage.com/197x100.png/dddddd/000000',
                'price' => 81.04,
                'category' => 'dairy',
            ],
            [
                'id' => 17,
                'name' => 'Sauce - Gravy',
                'image' => 'http://dummyimage.com/131x100.png/ff4444/ffffff',
                'price' => 23.41,
                'category' => 'sauces',
            ],
            [
                'id' => 18,
                'name' => 'Salt - Sea',
                'image' => 'http://dummyimage.com/137x100.png/5fa2dd/ffffff',
                'price' => 11.21,
                'category' => 'dairy',
            ],
            [
                'id' => 19,
                'name' => 'Pork - Back',
                'image' => 'http://dummyimage.com/149x100.png/5fa2dd/ffffff',
                'price' => 19.33,
                'category' => 'meat',
            ],
            [
                'id' => 20,
                'name' => 'Brownies - Two Bite',
                'image' => 'http://dummyimage.com/137x100.png/ff4444/ffffff',
                'price' => 2.5,
                'category' => 'dairy',
            ],
            [
                'id' => 21,
                'name' => 'Appetizer - Shrimp Puff',
                'image' => 'http://dummyimage.com/239x100.png/ff4444/ffffff',
                'price' => 11.09,
                'category' => 'meat',
            ],
            [
                'id' => 22,
                'name' => 'Chef Hat 25cm',
                'image' => 'http://dummyimage.com/223x100.png/dddddd/000000',
                'price' => 60.37,
                'category' => 'miscellaneous',
            ],
            [
                'id' => 23,
                'name' => 'Beef - Inside Round',
                'image' => 'http://dummyimage.com/166x100.png/dddddd/000000',
                'price' => 27.82,
                'category' => 'meat',
            ],
            [
                'id' => 24,
                'name' => 'Wine - White',
                'image' => 'http://dummyimage.com/190x100.png/cc0000/ffffff',
                'price' => 69.42,
                'category' => 'drinks',
            ],
            [
                'id' => 25,
                'name' => 'Mangoes',
                'image' => 'http://dummyimage.com/241x100.png/5fa2dd/ffffff',
                'price' => 65.7,
                'category' => 'fruit',
            ],
            [
                'id' => 26,
                'name' => 'Loaf Pan - 2 Lb',
                'image' => 'http://dummyimage.com/107x100.png/cc0000/ffffff',
                'price' => 78.74,
                'category' => 'breads',
            ],
            [
                'id' => 27,
                'name' => 'Container - Hngd Cll Blk 7x7x3',
                'image' => 'http://dummyimage.com/133x100.png/cc0000/ffffff',
                'price' => 1.85,
                'category' => 'miscellaneous',
            ],
            [
                'id' => 28,
                'name' => 'Milk - Homo',
                'image' => 'http://dummyimage.com/230x100.png/ff4444/ffffff',
                'price' => 72.39,
                'category' => 'drinks',
            ],
            [
                'id' => 29,
                'name' => 'Pizza Pizza Dough',
                'image' => 'http://dummyimage.com/149x100.png/5fa2dd/ffffff',
                'price' => 64.65,
                'category' => 'dairy',
            ],
            [
                'id' => 30,
                'name' => 'Bananas',
                'image' => 'http://dummyimage.com/220x100.png/cc0000/ffffff',
                'price' => 4.45,
                'category' => 'fruits',
            ],
            [
                'id' => 31,
                'name' => 'Plate Foam Laminated 9in Blk',
                'image' => 'http://dummyimage.com/169x100.png/ff4444/ffffff',
                'price' => 9.67,
                'category' => 'miscellaneous',
            ],
            [
                'id' => 32,
                'name' => 'Star Anise',
                'image' => 'http://dummyimage.com/158x100.png/ff4444/ffffff',
                'price' => 72.33,
                'category' => 'species',
            ],
            [
                'id' => 33,
                'name' => 'Chocolate - Liqueur Cups With Foil',
                'image' => 'http://dummyimage.com/116x100.png/ff4444/ffffff',
                'price' => 17.75,
                'category' => 'dairy',
            ],
            [
                'id' => 34,
                'name' => 'Rootbeer',
                'image' => 'http://dummyimage.com/125x100.png/dddddd/000000',
                'price' => 13.81,
                'category' => 'drinks',
            ],
            [
                'id' => 35,
                'name' => 'Beef - Top Butt Aaa',
                'image' => 'http://dummyimage.com/196x100.png/ff4444/ffffff',
                'price' => 56.05,
                'category' => 'meat',
            ],
            [
                'id' => 36,
                'name' => 'Muffin Hinge - 211n',
                'image' => 'http://dummyimage.com/163x100.png/ff4444/ffffff',
                'price' => 79.19,
                'category' => 'dairy',
            ],
            [
                'id' => 37,
                'name' => 'Eggplant - Asian',
                'image' => 'http://dummyimage.com/149x100.png/5fa2dd/ffffff',
                'price' => 66,
                'category' => 'fruits',
            ],
            [
                'id' => 38,
                'name' => 'Turkey Tenderloin Frozen',
                'image' => 'http://dummyimage.com/174x100.png/5fa2dd/ffffff',
                'price' => 10.39,
                'category' => 'meat',
            ],
            [
                'id' => 39,
                'name' => 'Sugar - Palm',
                'image' => 'http://dummyimage.com/175x100.png/cc0000/ffffff',
                'price' => 96.88,
                'category' => 'bakery',
            ],
            [
                'id' => 40,
                'name' => 'Tea - Vanilla Chai',
                'image' => 'http://dummyimage.com/239x100.png/cc0000/ffffff',
                'price' => 15.54,
                'category' => 'drinks',
            ],
            [
                'id' => 41,
                'name' => 'Beef - Montreal Smoked Brisket',
                'image' => 'http://dummyimage.com/158x100.png/dddddd/000000',
                'price' => 46.58,
                'category' => 'meat',
            ],
            [
                'id' => 42,
                'name' => 'Goldschläger',
                'image' => 'http://dummyimage.com/107x100.png/5fa2dd/ffffff',
                'price' => 4.44,
                'category' => 'drinks',
            ],
            [
                'id' => 43,
                'name' => 'Cointreau',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSC1RsXoNKI85ml64gSrV6-fArUEFiTdGBTiw&usqp=CAU',
                'price' => 48.16,
                'category' => 'drinks',
            ],
            [
                'id' => 44,
                'name' => 'Bok Choy - Baby',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7jltynrm6nJTV1ZZqSaM2R-On9yt40lvrfQ&usqp=CAU',
                'price' => 38.61,
                'category' => 'vegetables',
            ],
            [
                'id' => 45,
                'name' => 'Alize Gold Passion',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSQWXySyT7XwSEZkv81I4urEHLKy4LJmBskQ&usqp=CAU',
                'price' => 15.69,
                'category' => 'drinks',
            ],
            [
                'id' => 46,
                'name' => 'Campari',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQR8P-OPpinBc_3zcFyMpk2a4-cly1YW29Ytw&usqp=CAU',
                'price' => 77.33,
                'category' => 'drinks',
            ],
            [
                'id' => 47,
                'name' => 'Ginger - Fresh',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRelwRt813Lrt1xRl8UZoz1BDCJ6EWE-qTNIQ&usqp=CAU',
                'price' => 33.48,
                'category' => 'vegetables',
            ],
            [
                'id' => 48,
                'name' => 'Sauce - Vodka Blush',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNcHEwHJrYldv8Nue0VUX-Dj1ovno2IMeEiQ&usqp=CAU',
                'price' => 78.23,
                'category' => 'sauces',
            ],
            [
                'id' => 49,
                'name' => 'Sea Bass - Whole',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT67eFVuaJv7tt5d3ckpPZS5pUo856BdIknsg&usqp=CAU',
                'price' => 83.45,
                'category' => 'meat',
            ],
            [
                'id' => 50,
                'name' => 'Plums - Red',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfVGkkZ3n9ZIWpNKP84zW0AxF1oNLCESWnng&usqp=CAU',
                'price' => 30.96,
                'category' => 'fruits',
            ],
        ];

        DB::table('items')->insert($items);
    }
}
