<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('countries')->truncate();

        $sort = [
            [
                'iso' => 'AF',
                'descripcion' => 'Afganistán',
                'nacionalidad' => 'Afgana',
            ],
            [
                'iso' => 'AL',
                'descripcion' => 'Albania',
                'nacionalidad' => 'Albana',
            ],
            [
                'iso' => 'DE',
                'descripcion' => 'Alemania',
                'nacionalidad' => 'Alemana',
            ],
            [
                'iso' => 'AD',
                'descripcion' => 'Andorra',
                'nacionalidad' => 'Andorrana',
            ],
            [
                'iso' => 'AO',
                'descripcion' => 'Angola',
                'nacionalidad' => 'Angolana',
            ],
            [
                'iso' => 'AI',
                'descripcion' => 'Anguila',
                'nacionalidad' => 'Anguilana',
            ],
            [
                'iso' => 'AQ',
                'descripcion' => 'Antártida',
                'nacionalidad' => 'Antártica',
            ],
            [
                'iso' => 'AG',
                'descripcion' => 'Antigua y Barbuda',
                'nacionalidad' => 'Antiguana',
            ],
            [
                'iso' => 'AN',
                'descripcion' => 'Antillas Neerlandesas',
                'nacionalidad' => 'Neerlandesa',
            ],
            [
                'iso' => 'SA',
                'descripcion' => 'Arabia Saudita',
                'nacionalidad' => 'Saudí',
            ],
            [
                'iso' => 'DZ',
                'descripcion' => 'Argelia',
                'nacionalidad' => 'Argelina',
            ],
            [
                'iso' => 'AR',
                'descripcion' => 'Argentina',
                'nacionalidad' => 'Argentina',
            ],
            [
                'iso' => 'AM',
                'descripcion' => 'Armenia',
                'nacionalidad' => 'Armenia',
            ],
            [
                'iso' => 'AW',
                'descripcion' => 'Aruba',
                'nacionalidad' => 'Arubiana',
            ],
            [
                'iso' => 'AU',
                'descripcion' => 'Australia',
                'nacionalidad' => 'Australiana',
            ],
            [
                'iso' => 'AT',
                'descripcion' => 'Austria',
                'nacionalidad' => 'Austriaca',
            ],
            [
                'iso' => 'AZ',
                'descripcion' => 'Azerbaiyán',
                'nacionalidad' => 'Azerbaiyana',
            ],
            [
                'iso' => 'BS',
                'descripcion' => 'Bahamas',
                'nacionalidad' => 'Bahameña',
            ],
            [
                'iso' => 'BH',
                'descripcion' => 'Baréin',
                'nacionalidad' => 'Bareiní',
            ],
            [
                'iso' => 'BD',
                'descripcion' => 'Bangladés',
                'nacionalidad' => 'Bangladesí',
            ],
            [
                'iso' => 'BB',
                'descripcion' => 'Barbados',
                'nacionalidad' => 'Barbadense',
            ],
            [
                'iso' => 'BY',
                'descripcion' => 'Belarús',
                'nacionalidad' => 'Bielorusa',
            ],
            [
                'iso' => 'BE',
                'descripcion' => 'Bélgica',
                'nacionalidad' => 'Belga',
            ],
            [
                'iso' => 'BZ',
                'descripcion' => 'Belice',
                'nacionalidad' => 'Beliceña',
            ],
            [
                'iso' => 'BJ',
                'descripcion' => 'Benin',
                'nacionalidad' => 'Beninés',
            ],
            [
                'iso' => 'BM',
                'descripcion' => 'Bermudas',
                'nacionalidad' => 'Bermudeña',
            ],
            [
                'iso' => 'BT',
                'descripcion' => 'Bhután',
                'nacionalidad' => 'Butanésa',
            ],
            [
                'iso' => 'BO',
                'descripcion' => 'Bolivia',
                'nacionalidad' => 'Boliviana',
            ],
            [
                'iso' => 'BA',
                'descripcion' => 'Bosnia y Herzegovina',
                'nacionalidad' => 'Bosnia',
            ],
            [
                'iso' => 'BW',
                'descripcion' => 'Botsuana',
                'nacionalidad' => 'Botsuana',
            ],
            [
                'iso' => 'BR',
                'descripcion' => 'Brasil',
                'nacionalidad' => 'Brasileña',
            ],
            [
                'iso' => 'BN',
                'descripcion' => 'Brunéi',
                'nacionalidad' => 'Bruneana',
            ],
            [
                'iso' => 'BG',
                'descripcion' => 'Bulgaria',
                'nacionalidad' => 'Búlgara',
            ],
            [
                'iso' => 'BF',
                'descripcion' => 'Burkina Faso',
                'nacionalidad' => 'Burkinesa',
            ],
            [
                'iso' => 'BI',
                'descripcion' => 'Burundi',
                'nacionalidad' => 'Burundesa',
            ],
            [
                'iso' => 'CV',
                'descripcion' => 'Cabo Verde',
                'nacionalidad' => 'Caboverdiana',
            ],
            [
                'iso' => 'KH',
                'descripcion' => 'Camboya',
                'nacionalidad' => 'Camboyesa',
            ],
            [
                'iso' => 'CM',
                'descripcion' => 'Camerún',
                'nacionalidad' => 'Camerunésa',
            ],
            [
                'iso' => 'CA',
                'descripcion' => 'Canadá',
                'nacionalidad' => 'Canadiense',
            ],
            [
                'iso' => 'TD',
                'descripcion' => 'Chad',
                'nacionalidad' => 'Chadiana',
            ],
            [
                'iso' => 'CL',
                'descripcion' => 'Chile',
                'nacionalidad' => 'Chilena',
            ],
            [
                'iso' => 'CN',
                'descripcion' => 'China',
                'nacionalidad' => 'China',
            ],
            [
                'iso' => 'CY',
                'descripcion' => 'Chipre',
                'nacionalidad' => 'Chipriota',
            ],
            [
                'iso' => 'VA',
                'descripcion' => 'Ciudad del Vaticano',
                'nacionalidad' => 'Vaticana',
            ],
            [
                'iso' => 'CO',
                'descripcion' => 'Colombia',
                'nacionalidad' => 'Colombiana',
            ],
            [
                'iso' => 'KM',
                'descripcion' => 'Comoras',
                'nacionalidad' => 'Comorense',
            ],
            [
                'iso' => 'CG',
                'descripcion' => 'Congo',
                'nacionalidad' => 'Congoleña',
            ],
            [
                'iso' => 'KP',
                'descripcion' => 'Corea del Norte',
                'nacionalidad' => 'Norcoreana',
            ],
            [
                'iso' => 'KR',
                'descripcion' => 'Corea del Sur',
                'nacionalidad' => 'Surcoreana',
            ],
            [
                'iso' => 'CI',
                'descripcion' => 'Costa de Marfil',
                'nacionalidad' => 'Marfileña',
            ],
            [
                'iso' => 'CR',
                'descripcion' => 'Costa Rica',
                'nacionalidad' => 'Costarricense',
            ],
            [
                'iso' => 'HR',
                'descripcion' => 'Croacia',
                'nacionalidad' => 'Croata',
            ],
            [
                'iso' => 'CU',
                'descripcion' => 'Cuba',
                'nacionalidad' => 'Cubana',
            ],
            [
                'iso' => 'DK',
                'descripcion' => 'Dinamarca',
                'nacionalidad' => 'Danés',
            ],
            [
                'iso' => 'DM',
                'descripcion' => 'Dominica',
                'nacionalidad' => 'Dominiqués',
            ],
            [
                'iso' => 'EC',
                'descripcion' => 'Ecuador',
                'nacionalidad' => 'Ecuatoriana',
            ],
            [
                'iso' => 'EG',
                'descripcion' => 'Egipto',
                'nacionalidad' => 'Egipcia',
            ],
            [
                'iso' => 'SV',
                'descripcion' => 'El Salvador',
                'nacionalidad' => 'Salvadoreña',
            ],
            [
                'iso' => 'AE',
                'descripcion' => 'Emiratos Árabes Unidos',
                'nacionalidad' => 'Arabe',
            ],
            [
                'iso' => 'ER',
                'descripcion' => 'Eritrea',
                'nacionalidad' => 'Eritrea',
            ],
            [
                'iso' => 'SK',
                'descripcion' => 'Eslovaquia',
                'nacionalidad' => 'Eslovaca',
            ],
            [
                'iso' => 'SI',
                'descripcion' => 'Eslovenia',
                'nacionalidad' => 'Eslovaca',
            ],
            [
                'iso' => 'ES',
                'descripcion' => 'España',
                'nacionalidad' => 'Española',
            ],
            [
                'iso' => 'US',
                'descripcion' => 'Estados Unidos de América',
                'nacionalidad' => 'Estadounidense',
            ],
            [
                'iso' => 'EE',
                'descripcion' => 'Estonia',
                'nacionalidad' => 'Estonia',
            ],
            [
                'iso' => 'ET',
                'descripcion' => 'Etiopía',
                'nacionalidad' => 'Etíope',
            ],
            [
                'iso' => 'FJ',
                'descripcion' => 'Fiji',
                'nacionalidad' => 'Fiyiana',
            ],
            [
                'iso' => 'PH',
                'descripcion' => 'Filipinas',
                'nacionalidad' => 'Filipina',
            ],
            [
                'iso' => 'FI',
                'descripcion' => 'Finlandia',
                'nacionalidad' => 'Finlandés',
            ],
            [
                'iso' => 'FR',
                'descripcion' => 'Francia',
                'nacionalidad' => 'Francesa',
            ],
            [
                'iso' => 'GA',
                'descripcion' => 'Gabón',
                'nacionalidad' => 'Gabonésa',
            ],
            [
                'iso' => 'GM',
                'descripcion' => 'Gambia',
                'nacionalidad' => 'Gambiana',
            ],
            [
                'iso' => 'GE',
                'descripcion' => 'Georgia',
                'nacionalidad' => 'Georgiana',
            ],
            [
                'iso' => 'GS',
                'descripcion' => 'Georgia del Sur e Islas Sandwich del Sur',
                'nacionalidad' => 'Georgiana',
            ],
            [
                'iso' => 'GH',
                'descripcion' => 'Ghana',
                'nacionalidad' => 'Ghanésa',
            ],
            [
                'iso' => 'GI',
                'descripcion' => 'Gibraltar',
                'nacionalidad' => 'Británica',
            ],
            [
                'iso' => 'GD',
                'descripcion' => 'Granada',
                'nacionalidad' => 'Granadina',
            ],
            [
                'iso' => 'GR',
                'descripcion' => 'Grecia',
                'nacionalidad' => 'Greca',
            ],
            [
                'iso' => 'GL',
                'descripcion' => 'Groenlandia',
                'nacionalidad' => 'Groenlandésa',
            ],
            [
                'iso' => 'GP',
                'descripcion' => 'Guadalupe',
                'nacionalidad' => 'Francésa',
            ],
            [
                'iso' => 'GU',
                'descripcion' => 'Guam',
                'nacionalidad' => 'Agañésa',
            ],
            [
                'iso' => 'GT',
                'descripcion' => 'Guatemala',
                'nacionalidad' => 'Guatemalteca',
            ],
            [
                'iso' => 'GY',
                'descripcion' => 'Guyana',
                'nacionalidad' => 'Francésa',
            ],
            [
                'iso' => 'GF',
                'descripcion' => 'Guayana Francesa',
                'nacionalidad' => 'Francésa',
            ],
            [
                'iso' => 'GG',
                'descripcion' => 'Guernsey',
                'nacionalidad' => 'Británica',
            ],
            [
                'iso' => 'GN',
                'descripcion' => 'Guinea',
                'nacionalidad' => 'Guineana',
            ],
            [
                'iso' => 'GQ',
                'descripcion' => 'Guinea Ecuatorial',
                'nacionalidad' => 'Ecuatoguineana',
            ],
            [
                'iso' => 'GW',
                'descripcion' => 'Guinea-Bissau',
                'nacionalidad' => 'Guineana',
            ],
            [
                'iso' => 'HT',
                'descripcion' => 'Haití',
                'nacionalidad' => 'Haitiana',
            ],
            [
                'iso' => 'HN',
                'descripcion' => 'Honduras',
                'nacionalidad' => 'Hondureña',
            ],
            [
                'iso' => 'HK',
                'descripcion' => 'Hong Kong',
                'nacionalidad' => 'Japonésa',
            ],
            [
                'iso' => 'HU',
                'descripcion' => 'Hungría',
                'nacionalidad' => 'Húngara',
            ],
            [
                'iso' => 'IN',
                'descripcion' => 'India',
                'nacionalidad' => 'India',
            ],
            [
                'iso' => 'ID',
                'descripcion' => 'Indonesia',
                'nacionalidad' => 'Indonésa',
            ],
            [
                'iso' => 'IQ',
                'descripcion' => 'Irak',
                'nacionalidad' => 'Iraquí',
            ],
            [
                'iso' => 'IR',
                'descripcion' => 'Irán',
                'nacionalidad' => 'Iraní',
            ],
            [
                'iso' => 'IE',
                'descripcion' => 'Irlanda',
                'nacionalidad' => 'Irlandésa',
            ],
            [
                'iso' => 'BV',
                'descripcion' => 'Isla Bouvet',
                'nacionalidad' => 'Noruega',
            ],
            [
                'iso' => 'IM',
                'descripcion' => 'Isla de Man',
                'nacionalidad' => 'Manlandésa',
            ],
            [
                'iso' => 'IS',
                'descripcion' => 'Islandia',
                'nacionalidad' => 'Islandésa',
            ],
            [
                'iso' => 'AX',
                'descripcion' => 'Islas Áland',
                'nacionalidad' => 'Alandésa',
            ],
            [
                'iso' => 'KY',
                'descripcion' => 'Islas Caimán',
                'nacionalidad' => 'Caimanésa',
            ],
            [
                'iso' => 'CX',
                'descripcion' => 'Islas de Navidad',
                'nacionalidad' => 'Navidense',
            ],
            [
                'iso' => 'CC',
                'descripcion' => 'Islas Cocos',
                'nacionalidad' => 'Malayésa',
            ],
            [
                'iso' => 'CK',
                'descripcion' => 'Islas Cook',
                'nacionalidad' => 'Neozelandésa',
            ],
            [
                'iso' => 'FO',
                'descripcion' => 'Islas Feroe',
                'nacionalidad' => 'Feroense',
            ],
            [
                'iso' => 'HM',
                'descripcion' => 'Islas Heard y McDonald',
                'nacionalidad' => 'Heardésana',
            ],
            [
                'iso' => 'FK',
                'descripcion' => 'Islas Malvinas',
                'nacionalidad' => 'Malvidensa',
            ],
            [
                'iso' => 'MH',
                'descripcion' => 'Islas Marshall',
                'nacionalidad' => 'Marshalésa',
            ],
            [
                'iso' => 'NF',
                'descripcion' => 'Islas NorkFolk',
                'nacionalidad' => 'Neozelandésa',
            ],
            [
                'iso' => 'PW',
                'descripcion' => 'Islas Palao',
                'nacionalidad' => 'Paluana',
            ],
            [
                'iso' => 'PN',
                'descripcion' => 'Islas Pitcairn',
                'nacionalidad' => 'Norfolkense',
            ],
            [
                'iso' => 'SB',
                'descripcion' => 'Islas Solomón',
                'nacionalidad' => 'Salomonensa',
            ],
            [
                'iso' => 'SJ',
                'descripcion' => 'Islas Svalbard y Jan Mayen',
                'nacionalidad' => 'Noruega',
            ],
            [
                'iso' => 'TC',
                'descripcion' => 'Islas Turcas y Caicos',
                'nacionalidad' => 'Británica',
            ],
            [
                'iso' => 'VG',
                'descripcion' => 'Islas Virgenes Británicas',
                'nacionalidad' => 'Británica',
            ],
            [
                'iso' => 'VI',
                'descripcion' => 'Islas Virgenes de los Estados Unidos de América',
                'nacionalidad' => 'Estadounidense',
            ],
            [
                'iso' => 'IL',
                'descripcion' => 'Israel',
                'nacionalidad' => 'Israelí',
            ],
            [
                'iso' => 'IT',
                'descripcion' => 'Italia',
                'nacionalidad' => 'Italiana',
            ],
            [
                'iso' => 'JM',
                'descripcion' => 'Jamaica',
                'nacionalidad' => 'Jamaiquina',
            ],
            [
                'iso' => 'JP',
                'descripcion' => 'Japón',
                'nacionalidad' => 'Japonésa',
            ],
            [
                'iso' => 'JE',
                'descripcion' => 'Jersey',
                'nacionalidad' => 'Británica',
            ],
            [
                'iso' => 'JO',
                'descripcion' => 'Jordania',
                'nacionalidad' => 'Jordana',
            ],
            [
                'iso' => 'KZ',
                'descripcion' => 'Kazajstán',
                'nacionalidad' => 'Kazaja',
            ],
            [
                'iso' => 'KE',
                'descripcion' => 'Kenia',
                'nacionalidad' => 'Kenia',
            ],
            [
                'iso' => 'KG',
                'descripcion' => 'Kirguistán',
                'nacionalidad' => 'Kirguís',
            ],
            [
                'iso' => 'KI',
                'descripcion' => 'Kiribati',
                'nacionalidad' => 'Kiribatiana',
            ],
            [
                'iso' => 'KW',
                'descripcion' => 'Kuwait',
                'nacionalidad' => 'Kuwaití',
            ],
            [
                'iso' => 'LA',
                'descripcion' => 'Laos',
                'nacionalidad' => 'Laosiana',
            ],
            [
                'iso' => 'LS',
                'descripcion' => 'Lesotho',
                'nacionalidad' => 'Lesotensa',
            ],
            [
                'iso' => 'LV',
                'descripcion' => 'Letonia',
                'nacionalidad' => 'Letoniana',
            ],
            [
                'iso' => 'LB',
                'descripcion' => 'Líbano',
                'nacionalidad' => 'Libanésa',
            ],
            [
                'iso' => 'LR',
                'descripcion' => 'Liberia',
                'nacionalidad' => 'Liberiana',
            ],
            [
                'iso' => 'LY',
                'descripcion' => 'Libia',
                'nacionalidad' => 'Libia',
            ],
            [
                'iso' => 'LI',
                'descripcion' => 'Liechtenstein',
                'nacionalidad' => 'Liechtensteiniana',
            ],
            [
                'iso' => 'LT',
                'descripcion' => 'Lituania',
                'nacionalidad' => 'Lituaniana',
            ],
            [
                'iso' => 'LU',
                'descripcion' => 'Luxemburgo',
                'nacionalidad' => 'Luxemburgésa',
            ],
            [
                'iso' => 'MO',
                'descripcion' => 'Macao',
                'nacionalidad' => 'China',
            ],
            [
                'iso' => 'MK',
                'descripcion' => 'Macedonia',
                'nacionalidad' => 'Macedonia',
            ],
            [
                'iso' => 'MG',
                'descripcion' => 'Madagascar',
                'nacionalidad' => 'Malgache',
            ],
            [
                'iso' => 'MY',
                'descripcion' => 'Malasia',
                'nacionalidad' => 'Malaya',
            ],
            [
                'iso' => 'MW',
                'descripcion' => 'Malawi',
                'nacionalidad' => 'Malauí',
            ],
            [
                'iso' => 'MV',
                'descripcion' => 'Maldivas',
                'nacionalidad' => 'Maldiva',
            ],
            [
                'iso' => 'ML',
                'descripcion' => 'Mali',
                'nacionalidad' => 'Maliense',
            ],
            [
                'iso' => 'MT',
                'descripcion' => 'Malta',
                'nacionalidad' => 'Maltés',
            ],
            [
                'iso' => 'MA',
                'descripcion' => 'Marruecos',
                'nacionalidad' => 'Marroquí',
            ],
            [
                'iso' => 'MQ',
                'descripcion' => 'Martinica',
                'nacionalidad' => 'Francésa',
            ],
            [
                'iso' => 'MU',
                'descripcion' => 'Mauricio',
                'nacionalidad' => 'Mauriciana',
            ],
            [
                'iso' => 'MR',
                'descripcion' => 'Mauritania',
                'nacionalidad' => 'Mauritana',
            ],
            [
                'iso' => 'YT',
                'descripcion' => 'Mayotte',
                'nacionalidad' => 'Francésa',
            ],
            [
                'iso' => 'MX',
                'descripcion' => 'México',
                'nacionalidad' => 'Mexicana',
            ],
            [
                'iso' => 'FM',
                'descripcion' => 'Micronesia',
                'nacionalidad' => 'Micronesa',
            ],
            [
                'iso' => 'MD',
                'descripcion' => 'Moldova',
                'nacionalidad' => 'Moldava',
            ],
            [
                'iso' => 'MC',
                'descripcion' => 'Mónaco',
                'nacionalidad' => 'Monaquésa',
            ],
            [
                'iso' => 'MN',
                'descripcion' => 'Mongolia',
                'nacionalidad' => 'Mongóla',
            ],
            [
                'iso' => 'ME',
                'descripcion' => 'Montenegro',
                'nacionalidad' => 'Montenegrina',
            ],
            [
                'iso' => 'MS',
                'descripcion' => 'Montserrat',
                'nacionalidad' => 'Británica',
            ],
            [
                'iso' => 'MZ',
                'descripcion' => 'Mozambique',
                'nacionalidad' => 'Mozambiqueña',
            ],
            [
                'iso' => 'MM',
                'descripcion' => 'Myanmar',
                'nacionalidad' => 'Birmana',
            ],
            [
                'iso' => 'NA',
                'descripcion' => 'Namibia',
                'nacionalidad' => 'Namibia',
            ],
            [
                'iso' => 'NR',
                'descripcion' => 'Nauru',
                'nacionalidad' => 'Nauruana',
            ],
            [
                'iso' => 'NP',
                'descripcion' => 'Nepal',
                'nacionalidad' => 'Nepalí',
            ],
            [
                'iso' => 'NI',
                'descripcion' => 'Nicaragua',
                'nacionalidad' => 'Nicaraguense',
            ],
            [
                'iso' => 'NE',
                'descripcion' => 'Níger',
                'nacionalidad' => 'Nigeriana',
            ],
            [
                'iso' => 'NG',
                'descripcion' => 'Nigeria',
                'nacionalidad' => 'Nigeriana',
            ],
            [
                'iso' => 'NE',
                'descripcion' => 'Niue',
                'nacionalidad' => 'Niuana',
            ],
            [
                'iso' => 'NO',
                'descripcion' => 'Noruega',
                'nacionalidad' => 'Noruega',
            ],
            [
                'iso' => 'NC',
                'descripcion' => 'Nueva Caledonia',
                'nacionalidad' => 'Francésa',
            ],
            [
                'iso' => 'NZ',
                'descripcion' => 'Nueva Zelanda',
                'nacionalidad' => 'Neozelandésa',
            ],
            [
                'iso' => 'OM',
                'descripcion' => 'Omán',
                'nacionalidad' => 'Omana',
            ],
            [
                'iso' => 'NL',
                'descripcion' => 'Paises Bajos',
                'nacionalidad' => 'Holendésa',
            ],
            [
                'iso' => 'PK',
                'descripcion' => 'Pakistán',
                'nacionalidad' => 'Pakistaní',
            ],
            [
                'iso' => 'PS',
                'descripcion' => 'Palestina',
                'nacionalidad' => 'Palestina',
            ],
            [
                'iso' => 'PA',
                'descripcion' => 'Panamá',
                'nacionalidad' => 'Panaméña',
            ],
            [
                'iso' => 'PG',
                'descripcion' => 'Papúa Nueva Guinea',
                'nacionalidad' => 'Papú',
            ],
            [
                'iso' => 'PY',
                'descripcion' => 'Paraguay',
                'nacionalidad' => 'Paraguaya',
            ],
            [
                'iso' => 'PE',
                'descripcion' => 'Perú',
                'nacionalidad' => 'Peruana',
            ],
            [
                'iso' => 'PF',
                'descripcion' => 'Polinesia Francesa',
                'nacionalidad' => 'Francesa',
            ],
            [
                'iso' => 'PL',
                'descripcion' => 'Polonia',
                'nacionalidad' => 'Polaca',
            ],
            [
                'iso' => 'PT',
                'descripcion' => 'Portugal',
                'nacionalidad' => 'Portuguésa',
            ],
            [
                'iso' => 'PR',
                'descripcion' => 'Puerto Rico',
                'codigo_telefono' => 'Estadounidense',
            ],
            [
                'iso' => 'QA',
                'descripcion' => 'Qatar',
                'nacionalidad' => 'Katarí',
            ],
            [
                'iso' => 'GB',
                'descripcion' => 'Reino Unido',
                'nacionalidad' => 'Británica',
            ],
            [
                'iso' => 'CF',
                'descripcion' => 'República Centro-Africana',
                'nacionalidad' => 'Centroafricana',
            ],
            [
                'iso' => 'CZ',
                'descripcion' => 'República Checa',
                'nacionalidad' => 'Checa',
            ],
            [
                'iso' => 'DO',
                'descripcion' => 'República Dominicana',
                'nacionalidad' => 'Dominicana',
            ],
            [
                'iso' => 'RE',
                'descripcion' => 'Reunión',
                'nacionalidad' => 'Francésa',
            ],
            [
                'iso' => 'RW',
                'descripcion' => 'Ruanda',
                'nacionalidad' => 'Ruandésa',
            ],
            [
                'iso' => 'RO',
                'descripcion' => 'Rumanía',
                'nacionalidad' => 'Rumana',
            ],
            [
                'iso' => 'RU',
                'descripcion' => 'Rusia',
                'nacionalidad' => 'Rusa',
            ],
            [
                'iso' => 'EH',
                'descripcion' => 'Sahara Occidental',
                'nacionalidad' => 'Saharauis',
            ],
            [
                'iso' => 'WS',
                'descripcion' => 'Samoa',
                'nacionalidad' => 'Samoana',
            ],
            [
                'iso' => 'AS',
                'descripcion' => 'Samoa Americana',
                'nacionalidad' => 'Samoana',
            ],
            [
                'iso' => 'BL',
                'descripcion' => 'San Bartolomé',
                'nacionalidad' => 'Francesa',
            ],
            [
                'iso' => 'KN',
                'descripcion' => 'San Cristóbal y Nieves',
                'nacionalidad' => 'Británica',
            ],
            [
                'iso' => 'SM',
                'descripcion' => 'San Marino',
                'nacionalidad' => 'Dálmata',
            ],
            [
                'iso' => 'PM',
                'descripcion' => 'San Pedro y Miquelón',
                'nacionalidad' => 'Francésa',
            ],
            [
                'iso' => 'VC',
                'descripcion' => 'San Vicente y las Granadinas',
                'nacionalidad' => 'Británica',
            ],
            [
                'iso' => 'SH',
                'descripcion' => 'Santa Elena',
                'nacionalidad' => 'Ecuatoriana',
            ],
            [
                'iso' => 'LC',
                'descripcion' => 'Santa Lucía',
                'nacionalidad' => 'Británica',
            ],
            [
                'iso' => 'ST',
                'descripcion' => 'Santo Tomé y Príncipe',
                'nacionalidad' => 'Portuguésa',
            ],
            [
                'iso' => 'SN',
                'descripcion' => 'Senegal',
                'nacionalidad' => 'Senegalésa',
            ],
            [
                'iso' => 'RS',
                'descripcion' => 'Serbia y Montenegro',
                'nacionalidad' => 'Serbia',
            ],
            [
                'iso' => 'SC',
                'descripcion' => 'Seychelles',
                'nacionalidad' => 'Seychelense',
            ],
            [
                'iso' => 'SL',
                'descripcion' => 'Sierra Leona',
                'nacionalidad' => 'Sierraleonesa',
            ],
            [
                'iso' => 'SG',
                'descripcion' => 'Singapur',
                'nacionalidad' => 'Singapurense',
            ],
            [
                'iso' => 'SY',
                'descripcion' => 'Siria',
                'nacionalidad' => 'Siria',
            ],
            [
                'iso' => 'SO',
                'descripcion' => 'Somalia',
                'nacionalidad' => 'Somalí',
            ],
            [
                'iso' => 'LK',
                'descripcion' => 'Sri Lanka',
                'nacionalidad' => 'Ceilandésa',
            ],
            [
                'iso' => 'SZ',
                'descripcion' => 'Suazilandia',
                'nacionalidad' => 'Suazi',
            ],
            [
                'iso' => 'ZA',
                'descripcion' => 'Sudáfrica',
                'nacionalidad' => 'Sudafricana',
            ],
            [
                'iso' => 'SD',
                'descripcion' => 'Sudán',
                'nacionalidad' => 'Sudanésa',
            ],
            [
                'iso' => 'SE',
                'descripcion' => 'Suecia',
                'nacionalidad' => 'Sueca',
            ],
            [
                'iso' => 'CH',
                'descripcion' => 'Suiza',
                'nacionalidad' => 'Suiza',
            ],
            [
                'iso' => 'SR',
                'descripcion' => 'Surinam',
                'nacionalidad' => 'Surinamésa',
            ],
            [
                'iso' => 'TH',
                'descripcion' => 'Tailandia',
                'nacionalidad' => 'Tailandésa',
            ],
            [
                'iso' => 'TW',
                'descripcion' => 'Taiwán',
                'nacionalidad' => 'Taiwanésa',
            ],
            [
                'iso' => 'TH',
                'descripcion' => 'Tanzania',
                'nacionalidad' => 'Tanzana',
            ],
            [
                'iso' => 'TJ',
                'descripcion' => 'Tayikistán',
                'nacionalidad' => 'Tayika',
            ],
            [
                'iso' => 'IO',
                'descripcion' => 'Territorio Británico del Océano Índico',
                'nacionalidad' => 'Británica',
            ],
            [
                'iso' => 'TF',
                'descripcion' => 'Territorios Australes Franceses',
                'nacionalidad' => 'Francésa',
            ],
            [
                'iso' => 'TL',
                'descripcion' => 'Timor-Leste',
                'nacionalidad' => 'Portuguésa',
            ],
            [
                'iso' => 'TG',
                'descripcion' => 'Togo',
                'nacionalidad' => 'Togolésa',
            ],
            [
                'iso' => 'TK',
                'descripcion' => 'Tokelau',
                'nacionalidad' => 'Neozelandésa',
            ],
            [
                'iso' => 'TO',
                'descripcion' => 'Tonga',
                'nacionalidad' => 'Tongana',
            ],
            [
                'iso' => 'TT',
                'descripcion' => 'Trinidad y Tobago',
                'nacionalidad' => 'Trinitense',
            ],
            [
                'iso' => 'TN',
                'descripcion' => 'Túnez',
                'nacionalidad' => 'Tunecina',
            ],
            [
                'iso' => 'TM',
                'descripcion' => 'Turkmenistán',
                'nacionalidad' => 'Turca',
            ],
            [
                'iso' => 'TR',
                'descripcion' => 'Turquía',
                'nacionalidad' => 'Turca',
            ],
            [
                'iso' => 'TV',
                'descripcion' => 'Tuvalu',
                'nacionalidad' => 'Tuvaluana',
            ],
            [
                'iso' => 'UA',
                'descripcion' => 'Ucrania',
                'nacionalidad' => 'Ucraniana',
            ],
            [
                'iso' => 'UG',
                'descripcion' => 'Uganda',
                'nacionalidad' => 'Ugandésa',
            ],
            [
                'iso' => 'UY',
                'descripcion' => 'Uruguay',
                'nacionalidad' => 'Uruguaya',
            ],
            [
                'iso' => 'UZ',
                'descripcion' => 'Uzbekistán',
                'nacionalidad' => 'Uzbeca',
            ],
            [
                'iso' => 'VU',
                'descripcion' => 'Vanuatu',
                'nacionalidad' => 'Vanuatuense',
            ],
            [
                'iso' => 'VE',
                'descripcion' => 'Venezuela',
                'nacionalidad' => 'Venezolana',
            ],
            [
                'iso' => 'VN',
                'descripcion' => 'Vietnam',
                'nacionalidad' => 'Vietnamita',
            ],
            [
                'iso' => 'WF',
                'descripcion' => 'Wallis y Futuna',
                'nacionalidad' => 'Francésa',
            ],
            [
                'iso' => 'YE',
                'descripcion' => 'Yemen',
                'nacionalidad' => 'Jemení',
            ],
            [
                'iso' => 'DJ',
                'descripcion' => 'Yibuti',
                'nacionalidad' => 'Francésa',
            ],
        ];
        DB::table('countries')->insert($sort);
    }
}
