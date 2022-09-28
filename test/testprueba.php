<?php
    use PHPUnit\Framework\TestCase;
    class testprueba extends TestCase {
        public function testCone() {
            include(__DIR__.'/config/config.php'); //Archivo a probar
            $this->assertIsNotBool($con); //Añadir y validar el testeo.
        }
    }
    //Para probar fragmentos de etiquetas HTML: assertStringContainsString. Usar ob_start() antes de include() y ob_get_clean() como segundo parámetro.
    //Para probar tipos de variables: 
        //assertIsBool
        //assertIsArray
        //assertIsString
        //assertIsInt
