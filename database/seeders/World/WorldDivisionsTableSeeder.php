<?php

namespace Database\Seeders\World;

use Illuminate\Database\Seeder;

class WorldDivisionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('world_divisions')->truncate();

        \DB::table('world_divisions')->insert([
            0 =>
            [
                'code' => '43',
                'country_id' => 58,
                'full_name' => null,
                'has_city' => 1,
                'id' => 1,
                'name' => 'Chungcheongbuk-do',
            ],
            1 =>
            [
                'code' => '44',
                'country_id' => 58,
                'full_name' => null,
                'has_city' => 1,
                'id' => 2,
                'name' => 'Chungcheongnam-do',
            ],
            2 =>
            [
                'code' => '27',
                'country_id' => 58,
                'full_name' => null,
                'has_city' => 1,
                'id' => 3,
                'name' => 'Daegu',
            ],
            3 =>
            [
                'code' => '42',
                'country_id' => 58,
                'full_name' => null,
                'has_city' => 1,
                'id' => 4,
                'name' => 'Gangwon-do',
            ],
            4 =>
            [
                'code' => '49',
                'country_id' => 58,
                'full_name' => null,
                'has_city' => 1,
                'id' => 5,
                'name' => 'Gyeonggi-do',
            ],
            5 =>
            [
                'code' => '47',
                'country_id' => 58,
                'full_name' => null,
                'has_city' => 1,
                'id' => 6,
                'name' => 'Gyeongsangbuk-do',
            ],
            6 =>
            [
                'code' => '48',
                'country_id' => 58,
                'full_name' => null,
                'has_city' => 1,
                'id' => 7,
                'name' => 'Gyeongsangnam-do',
            ],
            7 =>
            [
                'code' => '45',
                'country_id' => 58,
                'full_name' => null,
                'has_city' => 1,
                'id' => 8,
                'name' => 'Jeollabuk-do',
            ],
            8 =>
            [
                'code' => '46',
                'country_id' => 58,
                'full_name' => null,
                'has_city' => 1,
                'id' => 9,
                'name' => 'Jeollanam-do',
            ],
            9 =>
            [
                'code' => 'jh',
                'country_id' => 87,
                'full_name' => null,
                'has_city' => 1,
                'id' => 10,
                'name' => 'Johor',
            ],
            10 =>
            [
                'code' => 'kd',
                'country_id' => 87,
                'full_name' => null,
                'has_city' => 1,
                'id' => 11,
                'name' => 'Kedah',
            ],
            11 =>
            [
                'code' => 'kn',
                'country_id' => 87,
                'full_name' => null,
                'has_city' => 1,
                'id' => 12,
                'name' => 'Kelantan',
            ],
            12 =>
            [
                'code' => 'kl',
                'country_id' => 87,
                'full_name' => null,
                'has_city' => 1,
                'id' => 13,
                'name' => 'Kuala Lumpur',
            ],
            13 =>
            [
                'code' => 'lb',
                'country_id' => 87,
                'full_name' => null,
                'has_city' => 1,
                'id' => 14,
                'name' => 'Labuan',
            ],
            14 =>
            [
                'code' => 'ml',
                'country_id' => 87,
                'full_name' => null,
                'has_city' => 1,
                'id' => 15,
                'name' => 'Malacca',
            ],
            15 =>
            [
                'code' => 'ns',
                'country_id' => 87,
                'full_name' => null,
                'has_city' => 1,
                'id' => 16,
                'name' => 'Negeri Sembilan',
            ],
            16 =>
            [
                'code' => 'pg',
                'country_id' => 87,
                'full_name' => null,
                'has_city' => 1,
                'id' => 17,
                'name' => 'Pahang',
            ],
            17 =>
            [
                'code' => 'pk',
                'country_id' => 87,
                'full_name' => null,
                'has_city' => 1,
                'id' => 18,
                'name' => 'Perak',
            ],
            18 =>
            [
                'code' => 'ps',
                'country_id' => 87,
                'full_name' => null,
                'has_city' => 1,
                'id' => 19,
                'name' => 'Perlis',
            ],
            19 =>
            [
                'code' => 'ph',
                'country_id' => 87,
                'full_name' => null,
                'has_city' => 1,
                'id' => 20,
                'name' => 'Pulau Pinang',
            ],
            20 =>
            [
                'code' => 'sb',
                'country_id' => 87,
                'full_name' => null,
                'has_city' => 1,
                'id' => 21,
                'name' => 'Sabah',
            ],
            21 =>
            [
                'code' => 'sr',
                'country_id' => 87,
                'full_name' => null,
                'has_city' => 1,
                'id' => 22,
                'name' => 'Sarawak',
            ],
            22 =>
            [
                'code' => 'sl',
                'country_id' => 87,
                'full_name' => null,
                'has_city' => 1,
                'id' => 23,
                'name' => 'Selangor',
            ],
            23 =>
            [
                'code' => 'tr',
                'country_id' => 87,
                'full_name' => null,
                'has_city' => 1,
                'id' => 24,
                'name' => 'Terengganu',
            ],
            24 =>
            [
                'code' => '34',
                'country_id' => 101,
                'full_name' => null,
                'has_city' => 1,
                'id' => 25,
                'name' => 'Anhui',
            ],
            25 =>
            [
                'code' => '11',
                'country_id' => 101,
                'full_name' => null,
                'has_city' => 1,
                'id' => 26,
                'name' => 'Beijing',
            ],
            26 =>
            [
                'code' => '50',
                'country_id' => 101,
                'full_name' => null,
                'has_city' => 1,
                'id' => 27,
                'name' => 'Chongqing',
            ],
            27 =>
            [
                'code' => '35',
                'country_id' => 101,
                'full_name' => null,
                'has_city' => 1,
                'id' => 28,
                'name' => 'Fujian',
            ],
            28 =>
            [
                'code' => '62',
                'country_id' => 101,
                'full_name' => null,
                'has_city' => 1,
                'id' => 29,
                'name' => 'Gansu',
            ],
            29 =>
            [
                'code' => '44',
                'country_id' => 101,
                'full_name' => null,
                'has_city' => 1,
                'id' => 30,
                'name' => 'Guangdong',
            ],
            30 =>
            [
                'code' => '45',
                'country_id' => 101,
                'full_name' => null,
                'has_city' => 1,
                'id' => 31,
                'name' => 'Guangxi',
            ],
            31 =>
            [
                'code' => '52',
                'country_id' => 101,
                'full_name' => null,
                'has_city' => 1,
                'id' => 32,
                'name' => 'Guizhou',
            ],
            32 =>
            [
                'code' => '46',
                'country_id' => 101,
                'full_name' => null,
                'has_city' => 1,
                'id' => 33,
                'name' => 'Hainan',
            ],
            33 =>
            [
                'code' => '13',
                'country_id' => 101,
                'full_name' => null,
                'has_city' => 1,
                'id' => 34,
                'name' => 'Hebei',
            ],
            34 =>
            [
                'code' => '23',
                'country_id' => 101,
                'full_name' => null,
                'has_city' => 1,
                'id' => 35,
                'name' => 'Heilongjiang',
            ],
            35 =>
            [
                'code' => '41',
                'country_id' => 101,
                'full_name' => null,
                'has_city' => 1,
                'id' => 36,
                'name' => 'Henan',
            ],
            36 =>
            [
                'code' => '42',
                'country_id' => 101,
                'full_name' => null,
                'has_city' => 1,
                'id' => 37,
                'name' => 'Hubei',
            ],
            37 =>
            [
                'code' => '43',
                'country_id' => 101,
                'full_name' => null,
                'has_city' => 1,
                'id' => 38,
                'name' => 'Hunan',
            ],
            38 =>
            [
                'code' => '15',
                'country_id' => 101,
                'full_name' => null,
                'has_city' => 1,
                'id' => 39,
                'name' => 'Inner Mongolia',
            ],
            39 =>
            [
                'code' => '32',
                'country_id' => 101,
                'full_name' => null,
                'has_city' => 1,
                'id' => 40,
                'name' => 'Jiangsu',
            ],
            40 =>
            [
                'code' => '36',
                'country_id' => 101,
                'full_name' => null,
                'has_city' => 1,
                'id' => 41,
                'name' => 'Jiangxi',
            ],
            41 =>
            [
                'code' => '22',
                'country_id' => 101,
                'full_name' => null,
                'has_city' => 1,
                'id' => 42,
                'name' => 'Jilin',
            ],
            42 =>
            [
                'code' => '21',
                'country_id' => 101,
                'full_name' => null,
                'has_city' => 1,
                'id' => 43,
                'name' => 'Liaoning',
            ],
            43 =>
            [
                'code' => '64',
                'country_id' => 101,
                'full_name' => null,
                'has_city' => 1,
                'id' => 44,
                'name' => 'Ningxia',
            ],
            44 =>
            [
                'code' => '63',
                'country_id' => 101,
                'full_name' => null,
                'has_city' => 1,
                'id' => 45,
                'name' => 'Qinghai',
            ],
            45 =>
            [
                'code' => '61',
                'country_id' => 101,
                'full_name' => null,
                'has_city' => 1,
                'id' => 46,
                'name' => 'Shaanxi',
            ],
            46 =>
            [
                'code' => '37',
                'country_id' => 101,
                'full_name' => null,
                'has_city' => 1,
                'id' => 47,
                'name' => 'Shandong',
            ],
            47 =>
            [
                'code' => '31',
                'country_id' => 101,
                'full_name' => null,
                'has_city' => 1,
                'id' => 48,
                'name' => 'Shanghai',
            ],
            48 =>
            [
                'code' => '14',
                'country_id' => 101,
                'full_name' => null,
                'has_city' => 1,
                'id' => 49,
                'name' => 'Shanxi',
            ],
            49 =>
            [
                'code' => '51',
                'country_id' => 101,
                'full_name' => null,
                'has_city' => 1,
                'id' => 50,
                'name' => 'Sichuan',
            ],
            50 =>
            [
                'code' => '71',
                'country_id' => 101,
                'full_name' => null,
                'has_city' => 1,
                'id' => 51,
                'name' => 'Taiwan',
            ],
            51 =>
            [
                'code' => '12',
                'country_id' => 101,
                'full_name' => null,
                'has_city' => 1,
                'id' => 52,
                'name' => 'Tianjin',
            ],
            52 =>
            [
                'code' => '54',
                'country_id' => 101,
                'full_name' => null,
                'has_city' => 1,
                'id' => 53,
                'name' => 'Tibet',
            ],
            53 =>
            [
                'code' => '65',
                'country_id' => 101,
                'full_name' => null,
                'has_city' => 1,
                'id' => 54,
                'name' => 'Xinjiang',
            ],
            54 =>
            [
                'code' => '53',
                'country_id' => 101,
                'full_name' => null,
                'has_city' => 1,
                'id' => 55,
                'name' => 'Yunnan',
            ],
            55 =>
            [
                'code' => '33',
                'country_id' => 101,
                'full_name' => null,
                'has_city' => 1,
                'id' => 56,
                'name' => 'Zhejiang',
            ],
            56 =>
            [
                'code' => 'eng',
                'country_id' => 148,
                'full_name' => null,
                'has_city' => 1,
                'id' => 57,
                'name' => 'England',
            ],
            57 =>
            [
                'code' => 'nir',
                'country_id' => 148,
                'full_name' => null,
                'has_city' => 1,
                'id' => 58,
                'name' => 'Northern Ireland',
            ],
            58 =>
            [
                'code' => 'sct',
                'country_id' => 148,
                'full_name' => null,
                'has_city' => 1,
                'id' => 59,
                'name' => 'Scotland',
            ],
            59 =>
            [
                'code' => 'wls',
                'country_id' => 148,
                'full_name' => null,
                'has_city' => 1,
                'id' => 60,
                'name' => 'Wales',
            ],
            60 =>
            [
                'code' => 'al',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 61,
                'name' => 'Alabama',
            ],
            61 =>
            [
                'code' => 'ak',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 62,
                'name' => 'Alaska',
            ],
            62 =>
            [
                'code' => 'az',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 63,
                'name' => 'Arizona',
            ],
            63 =>
            [
                'code' => 'ar',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 64,
                'name' => 'Arkansas',
            ],
            64 =>
            [
                'code' => 'ca',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 65,
                'name' => 'California',
            ],
            65 =>
            [
                'code' => 'co',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 66,
                'name' => 'Colorado',
            ],
            66 =>
            [
                'code' => 'ct',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 67,
                'name' => 'Connecticut',
            ],
            67 =>
            [
                'code' => 'de',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 68,
                'name' => 'Delaware',
            ],
            68 =>
            [
                'code' => 'dc',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 69,
                'name' => 'District of Columbia',
            ],
            69 =>
            [
                'code' => 'fl',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 70,
                'name' => 'Florida',
            ],
            70 =>
            [
                'code' => 'ga',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 71,
                'name' => 'Georgia',
            ],
            71 =>
            [
                'code' => 'hi',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 72,
                'name' => 'Hawaii',
            ],
            72 =>
            [
                'code' => 'id',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 73,
                'name' => 'Idaho',
            ],
            73 =>
            [
                'code' => 'il',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 74,
                'name' => 'Illinois',
            ],
            74 =>
            [
                'code' => 'in',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 75,
                'name' => 'Indiana',
            ],
            75 =>
            [
                'code' => 'ia',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 76,
                'name' => 'Iowa',
            ],
            76 =>
            [
                'code' => 'ks',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 77,
                'name' => 'Kansas',
            ],
            77 =>
            [
                'code' => 'ky',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 78,
                'name' => 'Kentucky',
            ],
            78 =>
            [
                'code' => 'la',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 79,
                'name' => 'Louisiana',
            ],
            79 =>
            [
                'code' => 'me',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 80,
                'name' => 'Maine',
            ],
            80 =>
            [
                'code' => 'md',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 81,
                'name' => 'Maryland',
            ],
            81 =>
            [
                'code' => 'ma',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 82,
                'name' => 'Massachusetts',
            ],
            82 =>
            [
                'code' => 'mi',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 83,
                'name' => 'Michigan',
            ],
            83 =>
            [
                'code' => 'mn',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 84,
                'name' => 'Minnesota',
            ],
            84 =>
            [
                'code' => 'ms',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 85,
                'name' => 'Mississippi',
            ],
            85 =>
            [
                'code' => 'mo',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 86,
                'name' => 'Missouri',
            ],
            86 =>
            [
                'code' => 'mt',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 87,
                'name' => 'Montana',
            ],
            87 =>
            [
                'code' => 'ne',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 88,
                'name' => 'Nebraska',
            ],
            88 =>
            [
                'code' => 'nv',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 89,
                'name' => 'Nevada',
            ],
            89 =>
            [
                'code' => 'nh',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 90,
                'name' => 'New Hampshire',
            ],
            90 =>
            [
                'code' => 'nj',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 91,
                'name' => 'New Jersey',
            ],
            91 =>
            [
                'code' => 'nm',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 92,
                'name' => 'New Mexico',
            ],
            92 =>
            [
                'code' => 'ny',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 93,
                'name' => 'New York',
            ],
            93 =>
            [
                'code' => 'nc',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 94,
                'name' => 'North Carolina',
            ],
            94 =>
            [
                'code' => 'nd',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 95,
                'name' => 'North Dakota',
            ],
            95 =>
            [
                'code' => 'oh',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 96,
                'name' => 'Ohio',
            ],
            96 =>
            [
                'code' => 'ok',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 97,
                'name' => 'Oklahoma',
            ],
            97 =>
            [
                'code' => 'or',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 98,
                'name' => 'Oregon',
            ],
            98 =>
            [
                'code' => 'pa',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 99,
                'name' => 'Pennsylvania',
            ],
            99 =>
            [
                'code' => 'ri',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 100,
                'name' => 'Rhode Island',
            ],
            100 =>
            [
                'code' => 'sc',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 101,
                'name' => 'South Carolina',
            ],
            101 =>
            [
                'code' => 'sd',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 102,
                'name' => 'South Dakota',
            ],
            102 =>
            [
                'code' => 'tn',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 103,
                'name' => 'Tennessee',
            ],
            103 =>
            [
                'code' => 'tx',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 104,
                'name' => 'Texas',
            ],
            104 =>
            [
                'code' => 'ut',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 105,
                'name' => 'Utah',
            ],
            105 =>
            [
                'code' => 'vt',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 106,
                'name' => 'Vermont',
            ],
            106 =>
            [
                'code' => 'va',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 107,
                'name' => 'Virginia',
            ],
            107 =>
            [
                'code' => 'wa',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 108,
                'name' => 'Washington',
            ],
            108 =>
            [
                'code' => 'wv',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 109,
                'name' => 'West Virginia',
            ],
            109 =>
            [
                'code' => 'wi',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 110,
                'name' => 'Wisconsin',
            ],
            110 =>
            [
                'code' => 'wy',
                'country_id' => 167,
                'full_name' => null,
                'has_city' => 1,
                'id' => 111,
                'name' => 'Wyoming',
            ],
            111 =>
            [
                'code' => 'act',
                'country_id' => 170,
                'full_name' => null,
                'has_city' => 1,
                'id' => 112,
                'name' => 'Australian Capital Territory',
            ],
            112 =>
            [
                'code' => 'nsw',
                'country_id' => 170,
                'full_name' => null,
                'has_city' => 1,
                'id' => 113,
                'name' => 'New South Wales',
            ],
            113 =>
            [
                'code' => 'nt',
                'country_id' => 170,
                'full_name' => null,
                'has_city' => 1,
                'id' => 114,
                'name' => 'Northern Territory',
            ],
            114 =>
            [
                'code' => 'qld',
                'country_id' => 170,
                'full_name' => null,
                'has_city' => 1,
                'id' => 115,
                'name' => 'Queensland',
            ],
            115 =>
            [
                'code' => 'sa',
                'country_id' => 170,
                'full_name' => null,
                'has_city' => 1,
                'id' => 116,
                'name' => 'South Australia',
            ],
            116 =>
            [
                'code' => 'tas',
                'country_id' => 170,
                'full_name' => null,
                'has_city' => 1,
                'id' => 117,
                'name' => 'Tasmania',
            ],
            117 =>
            [
                'code' => 'vic',
                'country_id' => 170,
                'full_name' => null,
                'has_city' => 1,
                'id' => 118,
                'name' => 'Victoria',
            ],
            118 =>
            [
                'code' => 'wa',
                'country_id' => 170,
                'full_name' => null,
                'has_city' => 1,
                'id' => 119,
                'name' => 'Western Australia',
            ],
            119 =>
            [
                'code' => 'hk',
                'country_id' => 101,
                'full_name' => null,
                'has_city' => 0,
                'id' => 121,
                'name' => 'Hongkong',
            ],
            120 =>
            [
                'code' => 'mo',
                'country_id' => 101,
                'full_name' => null,
                'has_city' => 0,
                'id' => 122,
                'name' => 'Macau',
            ],
        ]);
    }
}
