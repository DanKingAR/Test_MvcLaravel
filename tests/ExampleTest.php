<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Laravel');
    }
    
    public function testProductoStore()
    {
        $this->post('/api/productos/producto', [
            'nombre' => 'Leche',
            'categoria' => 'Lacteos',
            'cantidad' => 1
        ])
            ->seeJson([
                'Mensaje' => 'El Producto se Creo Correctamente'
            ]);
    }
    
    public function testProductoUpdate()
    {
        $this->put('/api/productos/producto/4', [
            'nombre' => 'Res',
            'categoria' => 'Carne',
            'cantidad' => 4
        ])
            ->seeJson([
                'Mensaje' => 'El Registro se Actualizo con Exito!'
            ]);
    }
    
    public function testProductoShow()
    {
        $this->get('/api/productos/producto/2')
            ->seeJson([
                'nombre' => 'Costilla de Cerdo',
                'categoria' => 'Carne',
                'cantidad' => 2
            ]);
    }
}
