<?php require 'views/templates/header_2.php' ?>

<div class="container">

        <div  class="heaven">

            <a href="<?php echo constant('URL') . 'index/riesgos' ?>">
                <img src="<?php echo constant('URL') . 'public/images/Piezas/1.png' ?>" />

                <div class="texto1"> RIESGOS Y OPORTUNIDADES </div>
            </a>

        </div>

        <div style='text-align:center;' class="heaven2">

            <a href="<?php echo constant('URL') . 'index/objetivos' ?>">
                <img  transition: width 2s, height 2s, transform 2s; src="<?php echo constant('URL') . 'public/images/Piezas/2.png' ?>" />
                <div class="texto2"> OBJETIVOS <br>
                    <br>GENERAL 
                    <br>ESPECÍFICOS
                </div>
            </a>
        </div>

        <div style='text-align:center;' class="heaven3">

            <a href="<?php echo constant('URL') . 'index/Mission_vision' ?>">
                <img src="<?php echo constant('URL') . 'public/images/Piezas/3.png' ?>" />
                <div class="texto3"> MISIÓN <br> Y <br> VISIÓN </div>
            </a>

        </div>

        <div class="cuadros1">
            <a href="<?php echo constant('URL') . 'index/strategic_context' ?>">
                <img src="<?php echo constant('URL') . 'public/images/Cuadros/Azul1.png' ?>" />
                <div class="contex"> CONTEXTO ESTRATÉGICO </div>
            </a>
        </div>

        <div class="cuadros2">
            <img src="<?php echo constant('URL') . 'public/images/Cuadros/Azul2.png' ?>" />
        </div>

        <div class="cuadros3">
            <img src="<?php echo constant('URL') . 'public/images/Cuadros/Azul3.png' ?>" />
        </div>

        <div class="cuadros4">
            <a href="<?php echo constant('URL') . 'index/Ideal_situation' ?>">
                <img src="<?php echo constant('URL') . 'public/images/Cuadros/Azul4.png' ?>" />
                <div class="situacion1">SITUACIÓN IDEAL DE T.I </div>
            </a>
        </div>

        <div class="barra">
            <a href="<?php echo constant('URL') . 'index/marc_norma' ?>">
                <img src="<?php echo constant('URL') . 'public/images/Barras/Barra1.png' ?>" />
                <div class="barra1"> MARCO NORMATIVO </div>
            </a>

        </div>

        <div class="Barra">
            <a href="<?php echo constant('URL') . 'index/vista' ?>">
                <img src="<?php echo constant('URL') . 'public/images/Barras/Barra2.png' ?>" .img-fluid />
                <div class="Barra1"> BRECHAS DE T.I </div>
            </a>

        </div>

        <div class="flecha1">
            <img src="<?php echo constant('URL') . 'public/images/Flechas/Derecha1.png' ?>" />
        </div>

        <div class="flecha2">
            <img src="<?php echo constant('URL') . 'public/images/Flechas/Derecha2.png' ?>" />
        </div>

        <div class="flecha3">
            <img src="<?php echo constant('URL') . 'public/images/Flechas/flecha1.png' ?>" />
        </div>

        <div class="flecha4">
            <img src="<?php echo constant('URL') . 'public/images/Flechas/flecha2.png' ?>" />
        </div>

        <div class="slider1">
            <button onclick="adelantar()" type="submit" id="cantidad"> <img src="<?php echo constant('URL') . 'public/images/Slider/flecha1.png' ?>" /> </button>
            <script>
                let numero = 0;

                function adelantar() {
                    numero++;
                    // location.reload();
                    console.log(numero);
                }
                // setTimeout(function() {
                //     window.location.reload();
                // }, 60000);

                function atras() {
                    numero = numero - 1;
                    console.log(numero);
                }
                console.log(numero);
                bottom.onclick = () => {
                    numero++;
                    cantidad.value = numero;
                }
            </script>


        </div>
        <div class="slider2">
            <button onclick="atras()" type="submit"> <img src="<?php echo constant('URL') . 'public/images/Slider/flecha2.png' ?>" /> </button>
        </div>



        <?php

        $j = 2;
        for ($i = 4; $i <= 9; $i++) {
            $proyecto = $this->list[$j];
            // print_r($proyecto);
        ?>

            <div class="heaven<?php echo $i ?>">
                <img src="<?php echo constant('URL') . 'public/images/Piezas/' . $i . '.png' ?>" />
                <div class="container">
                    <div class="texto<?php echo $i ?>"><?php echo $proyecto['Nombre_Projects'] ?></div>

                    <div class="handle"></div>

                </div>

            </div>
        <?php
            // print_r($j); # code...
            $j++;
        }
        ?>
</div>
<?php require 'views/templates/footer.php' ?>