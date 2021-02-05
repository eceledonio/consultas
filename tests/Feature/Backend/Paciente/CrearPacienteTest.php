<?php

namespace Tests\Feature\Backend\Paciente;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;
use Tests\TestCase;

class CrearPacienteTest extends TestCase
{
    use RefreshDatabase;


    /** @test */
    public function an_admin_can_access_the_create_patient_page()
    {
        $this->loginAsAdmin();

        $response = $this->get('admin/paciente/create');

        $response->assertOk();
    }

    /** @test */
    public function create_patient_requires_validation()
    {
        $this->loginAsAdmin();

        $response = $this->post('admin/paciente');

        $response->assertSessionHasErrors(['nombres', 'apellidos', 'sexo', 'dob', 'pais']);
    }

    /** @test */
    public function admin_can_create_new_patient()
    {
        Event::fake();

        $this->loginAsAdmin();

        $response = $this->post('admin/paciente', [
            'nombres' => 'John',
            'apellidos' => 'Doe',
            'sexo' => 'Masculino',
            'dob' => '2021-01-06',
            'pais' => '1',
            'direccion' => 'Carretera Mella km 9',
            'celular' => '(333) 333-3333',
            'ars_id' => '1',
        ]);


        $this->assertDatabaseHas(
            'pacientes',
            [
                'nombres' => 'John',
                'apellidos' => 'Doe',
                'sexo' => 'Masculino',
                'dob' => '2021-01-06',
                'pais_id' => '1',
                'direccion' => 'Carretera Mella km 9',
                'celular' => '(333) 333-3333',
                'ars_id' => '1',
            ]
        );

        $response->assertSessionHas(['flash_success' => ('El paciente se ha creado correctamente.')]);
    }
}
