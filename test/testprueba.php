<?php
    use PHPUnit\Framework\TestCase;
    class testprueba extends TestCase {
        public function testCone() {
            include(__DIR__.'/abdomen.php'); //Archivo a probar
            $this->assertIsString('<span class="title">Health_up</span>'); //Añadir y validar el testeo.
        }
    }
    //Para probar fragmentos de etiquetas HTML: assertStringContainsString. Usar ob_start() antes de include() y ob_get_clean() como segundo parámetro.
    //Para probar tipos de variables: 
        //assertIsBool
        //assertIsArray
        //assertIsString
        //assertIsInt
