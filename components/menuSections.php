<?php
if ($section == "lunch") {
    echo <<< EOT
        <div class="row m-0 portfolio-container">
            <div class="col-lg-4 col-md-6 p-0 portfolio-item lunch">
                <div class="position-relative overflow-hidden">
                    <h3 class="menu">Especiales</h3>
                    <ol>
                        <p> <b class="menu">Lonches de milanesa de pollo</b>
                            <br>Lonche dorado con milanesa de pollo, aguacate, jitomate, costra de queso, chipotle.
                        </p>
                        <p>
                            <b class="menu">Tradicional súper especial</b>
                            <br> Lonche tradicional dorado con pierna y lomo, carne molida de res, queso, jitomate, cebolla asada, mostaza y crema extra.
                        </p>
                        <p>
                            <b class="menu">Hamburguesa súper</b>
                            <br> Arrachera, queso, tocino, jitomate, cebolla, lechuga, mostaza, catsup, crema.
                        </p>
                        <p>
                            <b class="menu">Lonche de camarón</b>
                            <br> Elige entre: camarón Karlo's o camarón a la diabla.
                        </p>
                        <p>
                            <b class="menu">Hamburguesa de camarón con queso</b>
                            <br> Elige entre: camarón Karlo's o camarón a la diabla.
                        </p>
                        <p>
                            <b class="menu">Hot dog de camarón</b>
                            <br> Elige entre: camarón Karlo's o camarón a la diabla.
                        </p>
                    </ol>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item lunch">
                <div class="position-relative overflow-hidden">
                    <h3 class="menu">Los Legendarios</h3>
                    <ol>
                        <p> <b class="menu">Lonche tradicional</b>
                            <br>Combinación de pierna y lomo, jitomate, cebolla, crema y mostaza.
                        </p>
                        <p>
                            <b class="menu">Lonche de pierna</b>
                            <br> Pierna, jitomate, lechuga, mayonesa y mostaza.
                        </p>
                        <p>
                            <b class="menu">Lonche de panela</b>
                            <br> Panela, jitomate, cebolla, lechuga, mayonesa y mostaza.
                        </p>
                    </ol>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item lunch">
                <div class="position-relative overflow-hidden">
                    <h3 class="menu">Favoritos</h3>
                    <ol>
                        <p> <b class="menu">Lonche de cochinita</b>
                            <br> Lonche doradito con cochinita al estilo Karlo's, jitomate, mayonesa, mostaza y una deliciosa ensalada de cebolla morada, zanahoria, pepina y un pequeño toque de habanero.
                        </p>
                        <p>
                            <b class="menu">Lonche de pierna</b>
                            <br> Pierna, jitomate, lechuga, mayonesa y mostaza.
                        </p>
                        <p>
                            <b class="menu">Lonche de panela</b>
                            <br> Panela, jitomate, cebolla, lechuga, mayonesa y mostaza.
                        </p>
                    </ol>

                </div>
            </div>
        </div>
    EOT;
} else if ($section == "other") {
    echo <<< EOT
    <div class="row justify-content-between m-0 portfolio-container">
        <div class="col-lg-4 col-md-6 p-0 portfolio-item other">
            <div class="position-relative overflow-hidden">
                <h3 class="menu">¡No todo es lonche!</h3>
                <ol>
                    <p> <b class="menu">Hamburguesa</b>
                        <br> Con queso.
                    </p>
                    <p>
                        <b class="menu">Hot dog</b>
                        <br> Con tocino.
                    </p>
                </ol>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 p-0 portfolio-item dessert">
            <div class="position-relative overflow-hidden">
                <h3 class="menu">Postres</h3>
                <ol>
                    <p> <b class="menu">Flan</b>
                    </p>
                    <p>
                        <b class="menu">Jericalla</b>
                    </p>
                </ol>
            </div>
        </div>
    </div>
    EOT;
}
