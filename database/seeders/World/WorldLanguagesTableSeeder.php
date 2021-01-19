<?php

namespace Database\Seeders\World;

use Illuminate\Database\Seeder;

class WorldLanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('world_languages')->truncate();

        \DB::table('world_languages')->insert([
            ['iso_language_name' => 'Abkhazian', 'native_name' => 'аҧсуа бызшәа, аҧсшәа', 'iso2' => 'ab', 'iso3' => 'abk'],
            ['iso_language_name' => 'Afar', 'native_name' => 'Afaraf', 'iso2' => 'aa', 'iso3' => 'aar'],
            ['iso_language_name' => 'Afrikaans', 'native_name' => 'Afrikaans', 'iso2' => 'af', 'iso3' => 'afr'],
            ['iso_language_name' => 'Akan', 'native_name' => 'Akan', 'iso2' => 'ak', 'iso3' => 'aka'],
            ['iso_language_name' => 'Albanian', 'native_name' => 'Shqip', 'iso2' => 'sq', 'iso3' => 'sqi'],
            ['iso_language_name' => 'Amharic', 'native_name' => 'አማርኛ', 'iso2' => 'am', 'iso3' => 'amh'],
            ['iso_language_name' => 'Arabic', 'native_name' => 'العربية', 'iso2' => 'ar', 'iso3' => 'ara'],
            ['iso_language_name' => 'Aragonese', 'native_name' => 'aragonés', 'iso2' => 'an', 'iso3' => 'arg'],
            ['iso_language_name' => 'Armenian', 'native_name' => 'Հայերեն', 'iso2' => 'hy', 'iso3' => 'hye'],
            ['iso_language_name' => 'Assamese', 'native_name' => 'অসমীয়া', 'iso2' => 'as', 'iso3' => 'asm'],
            ['iso_language_name' => 'Avaric', 'native_name' => 'авар мацӀ, магӀарул мацӀ', 'iso2' => 'av', 'iso3' => 'ava'],
            ['iso_language_name' => 'Avestan', 'native_name' => 'avesta', 'iso2' => 'ae', 'iso3' => 'ave'],
            ['iso_language_name' => 'Aymara', 'native_name' => 'aymar aru', 'iso2' => 'ay', 'iso3' => 'aym'],
            ['iso_language_name' => 'Azerbaijani', 'native_name' => 'azərbaycan dili', 'iso2' => 'az', 'iso3' => 'aze'],
            ['iso_language_name' => 'Bambara', 'native_name' => 'bamanankan', 'iso2' => 'bm', 'iso3' => 'bam'],
            ['iso_language_name' => 'Bashkir', 'native_name' => 'башҡорт теле', 'iso2' => 'ba', 'iso3' => 'bak'],
            ['iso_language_name' => 'Basque', 'native_name' => 'euskara, euskera', 'iso2' => 'eu', 'iso3' => 'eus'],
            ['iso_language_name' => 'Belarusian', 'native_name' => 'беларуская мова', 'iso2' => 'be', 'iso3' => 'bel'],
            ['iso_language_name' => 'Bengali', 'native_name' => 'বাংলা', 'iso2' => 'bn', 'iso3' => 'ben'],
            ['iso_language_name' => 'Bihari languages', 'native_name' => 'भोजपुरी', 'iso2' => 'bh', 'iso3' => 'bih'],
            ['iso_language_name' => 'Bislama', 'native_name' => 'Bislama', 'iso2' => 'bi', 'iso3' => 'bis'],
            ['iso_language_name' => 'Bosnian', 'native_name' => 'bosanski jezik', 'iso2' => 'bs', 'iso3' => 'bos'],
            ['iso_language_name' => 'Breton', 'native_name' => 'brezhoneg', 'iso2' => 'br', 'iso3' => 'bre'],
            ['iso_language_name' => 'Bulgarian', 'native_name' => 'български език', 'iso2' => 'bg', 'iso3' => 'bul'],
            ['iso_language_name' => 'Burmese', 'native_name' => 'ဗမာစာ', 'iso2' => 'my', 'iso3' => 'mya'],
            ['iso_language_name' => 'Catalan, Valencian', 'native_name' => 'català, valencià', 'iso2' => 'ca', 'iso3' => 'cat'],
            ['iso_language_name' => 'Chamorro', 'native_name' => 'Chamoru', 'iso2' => 'ch', 'iso3' => 'cha'],
            ['iso_language_name' => 'Chechen', 'native_name' => 'нохчийн мотт', 'iso2' => 'ce', 'iso3' => 'che'],
            ['iso_language_name' => 'Chichewa, Chewa, Nyanja', 'native_name' => 'chiCheŵa, chinyanja', 'iso2' => 'ny', 'iso3' => 'nya'],
            ['iso_language_name' => 'Chinese', 'native_name' => '中文 (Zhōngwén), 汉语, 漢語', 'iso2' => 'zh', 'iso3' => 'zho'],
            ['iso_language_name' => 'Chuvash', 'native_name' => 'чӑваш чӗлхи', 'iso2' => 'cv', 'iso3' => 'chv'],
            ['iso_language_name' => 'Cornish', 'native_name' => 'Kernewek', 'iso2' => 'kw', 'iso3' => 'cor'],
            ['iso_language_name' => 'Corsican', 'native_name' => 'corsu, lingua corsa', 'iso2' => 'co', 'iso3' => 'cos'],
            ['iso_language_name' => 'Cree', 'native_name' => 'ᓀᐦᐃᔭᐍᐏᐣ', 'iso2' => 'cr', 'iso3' => 'cre'],
            ['iso_language_name' => 'Croatian', 'native_name' => 'hrvatski jezik', 'iso2' => 'hr', 'iso3' => 'hrv'],
            ['iso_language_name' => 'Czech', 'native_name' => 'čeština, český jazyk', 'iso2' => 'cs', 'iso3' => 'ces'],
            ['iso_language_name' => 'Danish', 'native_name' => 'dansk', 'iso2' => 'da', 'iso3' => 'dan'],
            ['iso_language_name' => 'Divehi, Dhivehi, Maldivian', 'native_name' => 'ދިވެހި', 'iso2' => 'dv', 'iso3' => 'div'],
            ['iso_language_name' => 'Dutch, Flemish', 'native_name' => 'Nederlands, Vlaams', 'iso2' => 'nl', 'iso3' => 'nld'],
            ['iso_language_name' => 'Dzongkha', 'native_name' => 'རྫོང་ཁ', 'iso2' => 'dz', 'iso3' => 'dzo'],
            ['iso_language_name' => 'English', 'native_name' => 'English', 'iso2' => 'en', 'iso3' => 'eng'],
            ['iso_language_name' => 'Esperanto', 'native_name' => 'Esperanto', 'iso2' => 'eo', 'iso3' => 'epo'],
            ['iso_language_name' => 'Estonian', 'native_name' => 'eesti, eesti keel', 'iso2' => 'et', 'iso3' => 'est'],
            ['iso_language_name' => 'Ewe', 'native_name' => 'Eʋegbe', 'iso2' => 'ee', 'iso3' => 'ewe'],
            ['iso_language_name' => 'Faroese', 'native_name' => 'føroyskt', 'iso2' => 'fo', 'iso3' => 'fao'],
            ['iso_language_name' => 'Fijian', 'native_name' => 'vosa Vakaviti', 'iso2' => 'fj', 'iso3' => 'fij'],
            ['iso_language_name' => 'Finnish', 'native_name' => 'suomi, suomen kieli', 'iso2' => 'fi', 'iso3' => 'fin'],
            ['iso_language_name' => 'French', 'native_name' => 'français, langue française', 'iso2' => 'fr', 'iso3' => 'fra'],
            ['iso_language_name' => 'Fulah', 'native_name' => 'Fulfulde, Pulaar, Pular', 'iso2' => 'ff', 'iso3' => 'ful'],
            ['iso_language_name' => 'Galician', 'native_name' => 'Galego', 'iso2' => 'gl', 'iso3' => 'glg'],
            ['iso_language_name' => 'Georgian', 'native_name' => 'ქართული', 'iso2' => 'ka', 'iso3' => 'kat'],
            ['iso_language_name' => 'German', 'native_name' => 'Deutsch', 'iso2' => 'de', 'iso3' => 'deu'],
            ['iso_language_name' => 'Greek, Modern (1453-)', 'native_name' => 'ελληνικά', 'iso2' => 'el', 'iso3' => 'ell'],
            ['iso_language_name' => 'Guarani', 'native_name' => 'Avañe\'ẽ', 'iso2' => 'gn', 'iso3' => 'grn'],
            ['iso_language_name' => 'Gujarati', 'native_name' => 'ગુજરાતી', 'iso2' => 'gu', 'iso3' => 'guj'],
            ['iso_language_name' => 'Haitian, Haitian Creole', 'native_name' => 'Kreyòl ayisyen', 'iso2' => 'ht', 'iso3' => 'hat'],
            ['iso_language_name' => 'Hausa', 'native_name' => '(Hausa) هَوُسَ', 'iso2' => 'ha', 'iso3' => 'hau'],
            ['iso_language_name' => 'Hebrew', 'native_name' => 'עברית', 'iso2' => 'he', 'iso3' => 'heb'],
            ['iso_language_name' => 'Herero', 'native_name' => 'Otjiherero', 'iso2' => 'hz', 'iso3' => 'her'],
            ['iso_language_name' => 'Hindi', 'native_name' => 'हिन्दी, हिंदी', 'iso2' => 'hi', 'iso3' => 'hin'],
            ['iso_language_name' => 'Hiri Motu', 'native_name' => 'Hiri Motu', 'iso2' => 'ho', 'iso3' => 'hmo'],
            ['iso_language_name' => 'Hungarian', 'native_name' => 'magyar', 'iso2' => 'hu', 'iso3' => 'hun'],
            ['iso_language_name' => 'Interlingua (International Auxiliary Language Association)', 'native_name' => 'Interlingua', 'iso2' => 'ia', 'iso3' => 'ina'],
            ['iso_language_name' => 'Indonesian', 'native_name' => 'Bahasa Indonesia', 'iso2' => 'id', 'iso3' => 'ind'],
            ['iso_language_name' => 'Interlingue, Occidental', 'native_name' => '(originally:) Occidental, (after WWII:) Interlingue', 'iso2' => 'ie', 'iso3' => 'ile'],
            ['iso_language_name' => 'Irish', 'native_name' => 'Gaeilge', 'iso2' => 'ga', 'iso3' => 'gle'],
            ['iso_language_name' => 'Igbo', 'native_name' => 'Asụsụ Igbo', 'iso2' => 'ig', 'iso3' => 'ibo'],
            ['iso_language_name' => 'Inupiaq', 'native_name' => 'Iñupiaq, Iñupiatun', 'iso2' => 'ik', 'iso3' => 'ipk'],
            ['iso_language_name' => 'Ido', 'native_name' => 'Ido', 'iso2' => 'io', 'iso3' => 'ido'],
            ['iso_language_name' => 'Icelandic', 'native_name' => 'Íslenska', 'iso2' => 'is', 'iso3' => 'isl'],
            ['iso_language_name' => 'Italian', 'native_name' => 'Italiano', 'iso2' => 'it', 'iso3' => 'ita'],
            ['iso_language_name' => 'Inuktitut', 'native_name' => 'ᐃᓄᒃᑎᑐᑦ', 'iso2' => 'iu', 'iso3' => 'iku'],
            ['iso_language_name' => 'Japanese', 'native_name' => '日本語 (にほんご)', 'iso2' => 'ja', 'iso3' => 'jpn'],
            ['iso_language_name' => 'Javanese', 'native_name' => 'ꦧꦱꦗꦮ, Basa Jawa', 'iso2' => 'jv', 'iso3' => 'jav'],
            ['iso_language_name' => 'Kalaallisut, Greenlandic', 'native_name' => 'kalaallisut, kalaallit oqaasii', 'iso2' => 'kl', 'iso3' => 'kal'],
            ['iso_language_name' => 'Kannada', 'native_name' => 'ಕನ್ನಡ', 'iso2' => 'kn', 'iso3' => 'kan'],
            ['iso_language_name' => 'Kanuri', 'native_name' => 'Kanuri', 'iso2' => 'kr', 'iso3' => 'kau'],
            ['iso_language_name' => 'Kashmiri', 'native_name' => 'कश्मीरी, كشميري‎', 'iso2' => 'ks', 'iso3' => 'kas'],
            ['iso_language_name' => 'Kazakh', 'native_name' => 'қазақ тілі', 'iso2' => 'kk', 'iso3' => 'kaz'],
            ['iso_language_name' => 'Central Khmer', 'native_name' => 'ខ្មែរ, ខេមរភាសា, ភាសាខ្មែរ', 'iso2' => 'km', 'iso3' => 'khm'],
            ['iso_language_name' => 'Kikuyu, Gikuyu', 'native_name' => 'Gĩkũyũ', 'iso2' => 'ki', 'iso3' => 'kik'],
            ['iso_language_name' => 'Kinyarwanda', 'native_name' => 'Ikinyarwanda', 'iso2' => 'rw', 'iso3' => 'kin'],
            ['iso_language_name' => 'Kirghiz, Kyrgyz', 'native_name' => 'Кыргызча, Кыргыз тили', 'iso2' => 'ky', 'iso3' => 'kir'],
            ['iso_language_name' => 'Komi', 'native_name' => 'коми кыв', 'iso2' => 'kv', 'iso3' => 'kom'],
            ['iso_language_name' => 'Kongo', 'native_name' => 'Kikongo', 'iso2' => 'kg', 'iso3' => 'kon'],
            ['iso_language_name' => 'Korean', 'native_name' => '한국어', 'iso2' => 'ko', 'iso3' => 'kor'],
            ['iso_language_name' => 'Kurdish', 'native_name' => 'Kurdî, کوردی‎', 'iso2' => 'ku', 'iso3' => 'kur'],
            ['iso_language_name' => 'Kuanyama, Kwanyama', 'native_name' => 'Kuanyama', 'iso2' => 'kj', 'iso3' => 'kua'],
            ['iso_language_name' => 'Latin', 'native_name' => 'latine, lingua latina', 'iso2' => 'la', 'iso3' => 'lat'],
            ['iso_language_name' => 'Luxembourgish, Letzeburgesch', 'native_name' => 'Lëtzebuergesch', 'iso2' => 'lb', 'iso3' => 'ltz'],
            ['iso_language_name' => 'Ganda', 'native_name' => 'Luganda', 'iso2' => 'lg', 'iso3' => 'lug'],
            ['iso_language_name' => 'Limburgan, Limburger, Limburgish', 'native_name' => 'Limburgs', 'iso2' => 'li', 'iso3' => 'lim'],
            ['iso_language_name' => 'Lingala', 'native_name' => 'Lingála', 'iso2' => 'ln', 'iso3' => 'lin'],
            ['iso_language_name' => 'Lao', 'native_name' => 'ພາສາລາວ', 'iso2' => 'lo', 'iso3' => 'lao'],
            ['iso_language_name' => 'Lithuanian', 'native_name' => 'lietuvių kalba', 'iso2' => 'lt', 'iso3' => 'lit'],
            ['iso_language_name' => 'Luba-Katanga', 'native_name' => 'Kiluba', 'iso2' => 'lu', 'iso3' => 'lub'],
            ['iso_language_name' => 'Latvian', 'native_name' => 'latviešu valoda', 'iso2' => 'lv', 'iso3' => 'lav'],
            ['iso_language_name' => 'Manx', 'native_name' => 'Gaelg, Gailck', 'iso2' => 'gv', 'iso3' => 'glv'],
            ['iso_language_name' => 'Macedonian', 'native_name' => 'македонски јазик', 'iso2' => 'mk', 'iso3' => 'mkd'],
            ['iso_language_name' => 'Malagasy', 'native_name' => 'fiteny malagasy', 'iso2' => 'mg', 'iso3' => 'mlg'],
            ['iso_language_name' => 'Malay', 'native_name' => 'Bahasa Melayu, بهاس ملايو‎', 'iso2' => 'ms', 'iso3' => 'msa'],
            ['iso_language_name' => 'Malayalam', 'native_name' => 'മലയാളം', 'iso2' => 'ml', 'iso3' => 'mal'],
            ['iso_language_name' => 'Maltese', 'native_name' => 'Malti', 'iso2' => 'mt', 'iso3' => 'mlt'],
            ['iso_language_name' => 'Maori', 'native_name' => 'te reo Māori', 'iso2' => 'mi', 'iso3' => 'mri'],
            ['iso_language_name' => 'Marathi', 'native_name' => 'मराठी', 'iso2' => 'mr', 'iso3' => 'mar'],
            ['iso_language_name' => 'Marshallese', 'native_name' => 'Kajin M̧ajeļ', 'iso2' => 'mh', 'iso3' => 'mah'],
            ['iso_language_name' => 'Mongolian', 'native_name' => 'Монгол хэл', 'iso2' => 'mn', 'iso3' => 'mon'],
            ['iso_language_name' => 'Nauru', 'native_name' => 'Dorerin Naoero', 'iso2' => 'na', 'iso3' => 'nau'],
            ['iso_language_name' => 'Navajo, Navaho', 'native_name' => 'Diné bizaad', 'iso2' => 'nv', 'iso3' => 'nav'],
            ['iso_language_name' => 'North Ndebele', 'native_name' => 'isiNdebele', 'iso2' => 'nd', 'iso3' => 'nde'],
            ['iso_language_name' => 'Nepali', 'native_name' => 'नेपाली', 'iso2' => 'ne', 'iso3' => 'nep'],
            ['iso_language_name' => 'Ndonga', 'native_name' => 'Owambo', 'iso2' => 'ng', 'iso3' => 'ndo'],
            ['iso_language_name' => 'Norwegian Bokmål', 'native_name' => 'Norsk Bokmål', 'iso2' => 'nb', 'iso3' => 'nob'],
            ['iso_language_name' => 'Norwegian Nynorsk', 'native_name' => 'Norsk Nynorsk', 'iso2' => 'nn', 'iso3' => 'nno'],
            ['iso_language_name' => 'Norwegian', 'native_name' => 'Norsk', 'iso2' => 'no', 'iso3' => 'nor'],
            ['iso_language_name' => 'Sichuan Yi, Nuosu', 'native_name' => 'ꆈꌠ꒿ Nuosuhxop', 'iso2' => 'ii', 'iso3' => 'iii'],
            ['iso_language_name' => 'South Ndebele', 'native_name' => 'isiNdebele', 'iso2' => 'nr', 'iso3' => 'nbl'],
            ['iso_language_name' => 'Occitan', 'native_name' => 'occitan, lenga d\'òc', 'iso2' => 'oc', 'iso3' => 'oci'],
            ['iso_language_name' => 'Ojibwa', 'native_name' => 'ᐊᓂᔑᓈᐯᒧᐎᓐ', 'iso2' => 'oj', 'iso3' => 'oji'],
            ['iso_language_name' => 'Church Slavic, Old Slavonic, Church Slavonic, Old Bulgarian, Old Church Slavonic', 'native_name' => 'ѩзыкъ словѣньскъ', 'iso2' => 'cu', 'iso3' => 'chu'],
            ['iso_language_name' => 'Oromo', 'native_name' => 'Afaan Oromoo', 'iso2' => 'om', 'iso3' => 'orm'],
            ['iso_language_name' => 'Oriya', 'native_name' => 'ଓଡ଼ିଆ', 'iso2' => 'or', 'iso3' => 'ori'],
            ['iso_language_name' => 'Ossetian, Ossetic', 'native_name' => 'ирон æвзаг', 'iso2' => 'os', 'iso3' => 'oss'],
            ['iso_language_name' => 'Punjabi, Panjabi', 'native_name' => 'ਪੰਜਾਬੀ, پنجابی‎', 'iso2' => 'pa', 'iso3' => 'pan'],
            ['iso_language_name' => 'Pali', 'native_name' => 'पालि, पाळि', 'iso2' => 'pi', 'iso3' => 'pli'],
            ['iso_language_name' => 'Persian', 'native_name' => 'فارسی', 'iso2' => 'fa', 'iso3' => 'fas'],
            ['iso_language_name' => 'Polish', 'native_name' => 'język polski, polszczyzna', 'iso2' => 'pl', 'iso3' => 'pol'],
            ['iso_language_name' => 'Pashto, Pushto', 'native_name' => 'پښتو', 'iso2' => 'ps', 'iso3' => 'pus'],
            ['iso_language_name' => 'Portuguese', 'native_name' => 'Português', 'iso2' => 'pt', 'iso3' => 'por'],
            ['iso_language_name' => 'Quechua', 'native_name' => 'Runa Simi, Kichwa', 'iso2' => 'qu', 'iso3' => 'que'],
            ['iso_language_name' => 'Romansh', 'native_name' => 'Rumantsch Grischun', 'iso2' => 'rm', 'iso3' => 'roh'],
            ['iso_language_name' => 'Rundi', 'native_name' => 'Ikirundi', 'iso2' => 'rn', 'iso3' => 'run'],
            ['iso_language_name' => 'Romanian, Moldavian, Moldovan', 'native_name' => 'Română', 'iso2' => 'ro', 'iso3' => 'ron'],
            ['iso_language_name' => 'Russian', 'native_name' => 'русский', 'iso2' => 'ru', 'iso3' => 'rus'],
            ['iso_language_name' => 'Sanskrit', 'native_name' => 'संस्कृतम्', 'iso2' => 'sa', 'iso3' => 'san'],
            ['iso_language_name' => 'Sardinian', 'native_name' => 'sardu', 'iso2' => 'sc', 'iso3' => 'srd'],
            ['iso_language_name' => 'Sindhi', 'native_name' => 'सिन्धी, سنڌي، سندھی‎', 'iso2' => 'sd', 'iso3' => 'snd'],
            ['iso_language_name' => 'Northern Sami', 'native_name' => 'Davvisámegiella', 'iso2' => 'se', 'iso3' => 'sme'],
            ['iso_language_name' => 'Samoan', 'native_name' => 'gagana fa\'a Samoa', 'iso2' => 'sm', 'iso3' => 'smo'],
            ['iso_language_name' => 'Sango', 'native_name' => 'yângâ tî sängö', 'iso2' => 'sg', 'iso3' => 'sag'],
            ['iso_language_name' => 'Serbian', 'native_name' => 'српски језик', 'iso2' => 'sr', 'iso3' => 'srp'],
            ['iso_language_name' => 'Gaelic, Scottish Gaelic', 'native_name' => 'Gàidhlig', 'iso2' => 'gd', 'iso3' => 'gla'],
            ['iso_language_name' => 'Shona', 'native_name' => 'chiShona', 'iso2' => 'sn', 'iso3' => 'sna'],
            ['iso_language_name' => 'Sinhala, Sinhalese', 'native_name' => 'සිංහල', 'iso2' => 'si', 'iso3' => 'sin'],
            ['iso_language_name' => 'Slovak', 'native_name' => 'Slovenčina, Slovenský Jazyk', 'iso2' => 'sk', 'iso3' => 'slk'],
            ['iso_language_name' => 'Slovenian', 'native_name' => 'Slovenski Jezik, Slovenščina', 'iso2' => 'sl', 'iso3' => 'slv'],
            ['iso_language_name' => 'Somali', 'native_name' => 'Soomaaliga, af Soomaali', 'iso2' => 'so', 'iso3' => 'som'],
            ['iso_language_name' => 'Southern Sotho', 'native_name' => 'Sesotho', 'iso2' => 'st', 'iso3' => 'sot'],
            ['iso_language_name' => 'Spanish, Castilian', 'native_name' => 'Español', 'iso2' => 'es', 'iso3' => 'spa'],
            ['iso_language_name' => 'Sundanese', 'native_name' => 'Basa Sunda', 'iso2' => 'su', 'iso3' => 'sun'],
            ['iso_language_name' => 'Swahili', 'native_name' => 'Kiswahili', 'iso2' => 'sw', 'iso3' => 'swa'],
            ['iso_language_name' => 'Swati', 'native_name' => 'SiSwati', 'iso2' => 'ss', 'iso3' => 'ssw'],
            ['iso_language_name' => 'Swedish', 'native_name' => 'Svenska', 'iso2' => 'sv', 'iso3' => 'swe'],
            ['iso_language_name' => 'Tamil', 'native_name' => 'தமிழ்', 'iso2' => 'ta', 'iso3' => 'tam'],
            ['iso_language_name' => 'Telugu', 'native_name' => 'తెలుగు', 'iso2' => 'te', 'iso3' => 'tel'],
            ['iso_language_name' => 'Tajik', 'native_name' => 'тоҷикӣ, toçikī, تاجیکی‎', 'iso2' => 'tg', 'iso3' => 'tgk'],
            ['iso_language_name' => 'Thai', 'native_name' => 'ไทย', 'iso2' => 'th', 'iso3' => 'tha'],
            ['iso_language_name' => 'Tigrinya', 'native_name' => 'ትግርኛ', 'iso2' => 'ti', 'iso3' => 'tir'],
            ['iso_language_name' => 'Tibetan', 'native_name' => 'བོད་ཡིག', 'iso2' => 'bo', 'iso3' => 'bod'],
            ['iso_language_name' => 'Turkmen', 'native_name' => 'Türkmen, Түркмен', 'iso2' => 'tk', 'iso3' => 'tuk'],
            ['iso_language_name' => 'Tagalog', 'native_name' => 'Wikang Tagalog', 'iso2' => 'tl', 'iso3' => 'tgl'],
            ['iso_language_name' => 'Tswana', 'native_name' => 'Setswana', 'iso2' => 'tn', 'iso3' => 'tsn'],
            ['iso_language_name' => 'Tonga (Tonga Islands)', 'native_name' => 'Faka Tonga', 'iso2' => 'to', 'iso3' => 'ton'],
            ['iso_language_name' => 'Turkish', 'native_name' => 'Türkçe', 'iso2' => 'tr', 'iso3' => 'tur'],
            ['iso_language_name' => 'Tsonga', 'native_name' => 'Xitsonga', 'iso2' => 'ts', 'iso3' => 'tso'],
            ['iso_language_name' => 'Tatar', 'native_name' => 'татар теле, tatar tele', 'iso2' => 'tt', 'iso3' => 'tat'],
            ['iso_language_name' => 'Twi', 'native_name' => 'Twi', 'iso2' => 'tw', 'iso3' => 'twi'],
            ['iso_language_name' => 'Tahitian', 'native_name' => 'Reo Tahiti', 'iso2' => 'ty', 'iso3' => 'tah'],
            ['iso_language_name' => 'Uighur, Uyghur', 'native_name' => 'ئۇيغۇرچە‎, Uyghurche', 'iso2' => 'ug', 'iso3' => 'uig'],
            ['iso_language_name' => 'Ukrainian', 'native_name' => 'Українська', 'iso2' => 'uk', 'iso3' => 'ukr'],
            ['iso_language_name' => 'Urdu', 'native_name' => 'اردو', 'iso2' => 'ur', 'iso3' => 'urd'],
            ['iso_language_name' => 'Uzbek', 'native_name' => 'Oʻzbek, Ўзбек, أۇزبېك‎', 'iso2' => 'uz', 'iso3' => 'uzb'],
            ['iso_language_name' => 'Venda', 'native_name' => 'Tshivenḓa', 'iso2' => 've', 'iso3' => 'ven'],
            ['iso_language_name' => 'Vietnamese', 'native_name' => 'Tiếng Việt', 'iso2' => 'vi', 'iso3' => 'vie'],
            ['iso_language_name' => 'Volapük', 'native_name' => 'Volapük', 'iso2' => 'vo', 'iso3' => 'vol'],
            ['iso_language_name' => 'Walloon', 'native_name' => 'Walon', 'iso2' => 'wa', 'iso3' => 'wln'],
            ['iso_language_name' => 'Welsh', 'native_name' => 'Cymraeg', 'iso2' => 'cy', 'iso3' => 'cym'],
            ['iso_language_name' => 'Wolof', 'native_name' => 'Wollof', 'iso2' => 'wo', 'iso3' => 'wol'],
            ['iso_language_name' => 'Western Frisian', 'native_name' => 'Frysk', 'iso2' => 'fy', 'iso3' => 'fry'],
            ['iso_language_name' => 'Xhosa', 'native_name' => 'isiXhosa', 'iso2' => 'xh', 'iso3' => 'xho'],
            ['iso_language_name' => 'Yiddish', 'native_name' => 'ייִדיש', 'iso2' => 'yi', 'iso3' => 'yid'],
            ['iso_language_name' => 'Yoruba', 'native_name' => 'Yorùbá', 'iso2' => 'yo', 'iso3' => 'yor'],
            ['iso_language_name' => 'Zhuang, Chuang', 'native_name' => 'Saɯ cueŋƅ, Saw cuengh', 'iso2' => 'za', 'iso3' => 'zha'],
            ['iso_language_name' => 'Zulu', 'native_name' => 'isiZulu', 'iso2' => 'zu', 'iso3' => 'zul'],
        ]);
    }
}
