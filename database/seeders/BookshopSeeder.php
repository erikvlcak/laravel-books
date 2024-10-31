<?php

namespace Database\Seeders;

use App\Models\Bookshop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookshopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('bookshops')->truncate();
        $data = [

            'Prague' => [

                'Knihy Dobrovský',

                'Kosmas',

                'Neoluxor'

            ],

            'London' => [

                'Blackwell\'s',

                'Daunt Books',

                'Foyles',

                'John Smith & Son',

                'W H Smith',

                'Waterstones',

                'The Works'

            ],

            'New York' => [

                'Amazon Books',

                'Anderson\'s Bookshops',

                'Barnes & Noble',

                'Bookmans',

                'Books-A-Million',

                'Books, Inc.',

                'Deseret Book, also operates Seagull Book',

                'Follett\'s',

                'Half Price Books',

                'Hudson News',

                'Joseph-Beth Booksellers',

                'Kinokuniya',

                'Mardel Christian Stores',

                'Powell\'s Books',

                'Schuler Books & Music',

                'Tattered Cover'

            ]

        ];

        foreach ($data as $cityName => $city) {
            foreach ($city as $bookshopName) {
                $bookshop = new Bookshop();
                $bookshop->city = $cityName;
                $bookshop->name = $bookshopName;
                $bookshop->save();
            }
        }
    }
}
