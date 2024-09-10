<?php
        class mesa {
         
            public function Calcular() {
           
                if (isset($_POST['Calcular'])) {
                    $resultado = $_POST['v2']/ $_POST['v1'];
                        return "Cada pessoa da mesa  ". $_POST['v1']. " irá pagar ". $resultado;
                    }
                }
            }
        ?>