<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PaginaTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_pagina_contacto()
    {
        $response = $this->get('/contacto');

        $response->assertStatus(200);

        $response->assertSeeText(['Nombre', 'Correo', 'Comentario']);
    }

    //con la línea de abajo podemos especificar que la sig función es un test sin colocar la palabra test_ al inicio del nombre de la función
    /** @test */
    public function validacion_formulario()
    {
        $response = $this->post('/recibe-form-contacto', [
            'nombre' => '1',
            'correo' => 'correo@no@valido',
            'comentario' => '*',
        ]);

        $response->assertSessionHasErrors([
            'nombre',
            'correo',
            'comentario',
        ]);
    }

    /** @test */
    public function prellenado_form_contacto()
    {
        $response = $this->get('/contacto/1234');
        $response->assertStatus(200);
        $this->assertEquals('Miguel', $response['nombre']);
        $this->assertEquals('miguel.mendoza@gmail.com', $response['correo']);
        $this->assertEquals('¿Por dónde puedo enviarles mi CV para ver si puedo trabajar con ustedes?', $response['comentario']);
    }
}
