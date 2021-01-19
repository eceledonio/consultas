<?php

namespace Database\Seeders\Tipos;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SegurosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('seguros')->truncate();

        $seguro = [
            [
                'nombre' => 'Primera ARS',
                'descripcion' => 'Empresa del Grupo Asegurador Humano, enfocada en tu bienestar y protección, especializados en la prestación exclusiva de servicios de salud para los afiliados de la seguridad social.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'ARS SeNaSa',
                'descripcion' => 'Seguro Nacional de Salud. Institución responsable del aseguramiento social en salud, garantizando la entrega oportuna de servicios de calidad, con eficiencia, eficacia y trato humano.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Medicard',
                'descripcion' => 'Plan de servicios de salud que se ajusta a tu bolsillo y necesidades, sin papeleos y con aceptación garantizada, a través de cómodas cuotas mensuales.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'ARS Universal',
                'descripcion' => 'Aseguradora cuyo objetivo es ofrecer planes de salud que garanticen a sus clientes la tranquilidad y bienestar que necesitan.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'ARS Palic Salud',
                'descripcion' => 'Somos una empresa de servicios enmarcada bajo la Ley 87-01 del Sistema de Seguridad Social Dominicana, la cual ofrece servicios de Planes de Salud, a través de una red de prestadores,para garantizar protección en salud de alta calidad a nuestros afiliados.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'ARS Futuro',
                'descripcion' => 'Administradoras de Riesgos de Salud. Asesores de salud para orientarles en el difícil momento de la enfermedad, ofreciéndoles una oportuna y adecuada atención médica.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'ARS MetaSalud',
                'descripcion' => 'Empresa administradora de riesgos de salud con patrimonio propio y personería jurídica, creada bajo el amparo de la ley 87-01 que establece el Sistema Dominicano de Seguridad Social y autorizada por la Superintendencia de Salud y Riesgos Laborales.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'WorldWide Seguros',
                'descripcion' => 'Compañía de seguros de salud internacional cuya mision es garantizar el acceso a la mejor atención médica mundial para sus clientes de seguros de salud internacional y ser una respuesta sólida para sus asegurados en vida.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'ARS Simag',
                'descripcion' => 'ARS Simag es una empresa con mas de 25 años de experiencia ofreciendo servicios de salud de primera calidad y alta eficiencia.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'ARS Semma',
                'descripcion' => 'Administradora de Riesgos de Salud de los profesores públicos activos, jubilados, empleados administrativos y sus respectivos dependientes.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'ARS Monumental',
                'descripcion' => 'Administradora de Riesgos de Salud cuya misión es mantener sana nuestra población afiliada, proporcionándoles servicios de salud oportunos y de calidad, a través de una red nacional de prestadores de servicios de salud eficientes y eficaces.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'ARS GMA',
                'descripcion' => 'Empresa dedicada a la administración de planes de salud, creada el 12 de Octubre del año 1967, pionera en esta especialidad.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Bupa Dominicana, S.A.',
                'descripcion' => 'Compañía subsidiaria del grupo Bupa, una aseguradora líder en el cuidado de la salud, cuya mision esta orientada a facilitar el acceso a la mejor atención médica para sus asegurados, garantizando el cuidado de la salud y mejorando la competitividad de sus productos.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Claria Internacional, SRL',
                'descripcion' => 'Con sede en Barbados, Claria es la compañía líder en seguros de salud internacional, con transacciones comerciales en 45 países de América Latina, el Caribe y el mundo.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'ARS Renacer',
                'descripcion' => 'Ofertamos planes y servicios medicos con atencion personalizada a traves de nuestros medicos especialistas y nuestro programa de domis, que permite la visita en la casa ofreciendote un servicio personalizado y con los mejores standares de calidad.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'APS Asmar Planes de Salud',
                'descripcion' => 'APS es una ars acreditada que lleva más de 10 años entregando servicios de salud al pueblo Dominicano, siempre comprometidos con nuestros afiliados entregándoles una atención personalizada que permita satisfacer sus necesidades.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'ARS Asemap',
                'descripcion' => 'La Administradora de Servicios Médicos, Amor y Paz, S.A. tiene como misión ofrecer servicios de una manera amplia y eficiente que satisfaga las aspiraciones y expectativas de los asegurados en cuanto a calidad y costo.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Salud Dominicana',
                'descripcion' => 'Empresa que nació para ofrecer a los dominicanos de la diáspora la oportunidad de asegurar la salud de sus seres amados mediante las ARS más serias y calificadas de República Dominicana.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Pladent',
                'descripcion' => 'Prestadora de Servicios de Salud (PSS) en el área de la odontología, con una presencia de más de diez años en el mercado dominicano.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Serena Salud',
                'descripcion' => 'Red de prestadores de servicios de salud que brinda todos los servicios contenidos en el plan básico de salud de la ley de Seguridad Social, teniendo como fuerte la atención primaria en sus aspectos asistenciales y preventivos y brindando los demás servicios de forma directa o a través de alianzas estratégicas con otros prestadores.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'ARS Reservas',
                'descripcion' => 'Empresa del Grupo Financiero Reservas, con más de 15 años de experiencia administrando los servicios de salud de los empleados y dependientes del grupo corporativo.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Administradora de Riesgos de Salud Yunén',
                'descripcion' => 'Planes médicos con la idea de extender a sus afiliados las coberturas médicas más adecuadas a cada necesidad, con una tarifa competitiva y al alcance de todos.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'ARS Plan Salud Banco Central',
                'descripcion' => 'Administradora de Riesgos de Salud para el personal activo y pasivo del Banco Central y sus dependientes.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'BMI Companies',
                'descripcion' => 'Somos Filial de BMI Financial Group, Inc. Establecida desde 1972 en Coral Gables, Florida, BMI Financial Group es una compañía matriz de seguros y servicios financieros que proporciona seguros de alta calidad en vida, salud y productos financieros para la comunidad profesional de América Latina.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Telemed',
                'descripcion' => 'Asistencia Médica Telefónica las 24 horas del día, los 365 días del año.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('seguros')->insert($seguro);
    }
}
