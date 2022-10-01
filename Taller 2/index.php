<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller 2</title>
</head>
    <body>
        <header>
            <h1>MENU TALLER</h1>
        </header>
        <hr>
        <body>
            <ul>
                <details>
                    <summary>
                        7.2
                    </summary>
                    <br>
                    <table border = "1px">
                        <tbody>
                            <tr>
                            <?php
                                $positivos = 0;
                                $elementos = array();
                                for ($i = 0; $i < 10; $i++)
                                    array_push($elementos, rand(-9, 9));
                                for ($i = 0; $i < count($elementos); $i++) {
                                    echo "<td>" . $elementos[$i] . "</td>";
                                    if ($elementos[$i] > 0)
                                        $positivos += 1;
                                }
                            ?>
                            </tr>
                        </tbody>
                    </table>
                    <?php
                        echo "Elementos positivos: " . $positivos . "<br>";
                    ?>
                    <br>
                </details>
                <details>
                    <summary>
                        7.5
                    </summary>
                    <br>
                    <table border="1px">
                        <tbody>
                            <tr>
                            <?php
                                $suma = 0;
                                $elementos = array();
                                for ($i = 0; $i < 10; $i++)
                                    array_push($elementos, rand(0, 9));
                                for ($i = 0; $i < count($elementos); $i++) {
                                    print "<td>" . $elementos[$i] . "</td>";
                                    $suma += $elementos[$i];
                                }
                            ?>
                            </tr>
                        </tbody>
                    </table>
                    <?php
                        print "Suma de los elementos: " . $suma . "<br>
                        Media de los elementos: " . ($suma / count($elementos)) . "<br>";
                    ?>
                    <br>
                </details>
                <details>
                    <summary>
                        7.6 
                    </summary>
                    <br>
                    <table border = "1px">
                        <tbody>
                            <tr>
                            <?php
                                $positivos = 0;
                                $negativos = 0;
                                $ceros = 0;
                                $elementos = array();
                                for ($i = 0; $i < 60; $i++)
                                    array_push($elementos, rand(-9, 9));
                                for ($i = 0; $i < count($elementos); $i++) {
                                    echo "<td>" . $elementos[$i] . "</td>";
                                    if ($elementos[$i] > 0)
                                        $positivos += 1;
                                    else if ($elementos[$i] < 0)
                                        $negativos += 1;
                                    else
                                        $ceros += 1;
                                }
                            ?>
                            </tr>
                        </tbody>
                    </table>
                    <?php
                        echo "Elementos positivos: " . $positivos . 
                        "<br>Elementos negativos: " . $negativos . 
                        "<br>Elementos cero: " . $ceros . "<br>";
                    ?>
                    <br>
                </details>
                <details>
                    <summary>
                        7.8
                    </summary>
                    <br>
                    <form method="POST" action="">
                        <input type = "number" name = "divisor">
                        <input type="submit">
                        <table border = "1px">
                            <tbody>
                                <tr>
                                <?php
                                    $elementos = array();
                                    for ($i = 0; $i < 50; $i++) {
                                        if (isset($_POST["divisor"])) {
                                            array_push($elementos, rand(-getrandmax(), getrandmax()));
                                            print "<td>" . $elementos[$i] . "</td>";
                                        }
                                    } 
                                ?>
                                </tr>
                                <tr>
                                <?php
                                    $elementosDivididos = array();
                                    for ($i = 0; $i < 50; $i++) {
                                        if (isset($_POST["divisor"])) {
                                            array_push($elementosDivididos, $elementos[$i] / $_POST["divisor"]);
                                            print "<td>" . $elementosDivididos[$i] . "</td>";
                                        }
                                    } 
                                ?>
                                </tr>
                            </tbody>
                        </table>
                    </form> 
                    <br>
                </details>
                <details>
                    <summary>
                        7.12
                    </summary>
                    <br>
                    <table border = "1px">
                        <tbody>
                            <tr>
                            <?php
                                $elementos = array();
                                for ($i = 0; $i < 100; $i++) {
                                    array_push($elementos, pow($i, 2));
                                    print "<td>" . $elementos[$i] . "</td>";
                                } 
                            ?>   
                            </tr>
                        </tbody>
                    </table>               
                    <br>
                </details>
                <details>
                    <summary>
                        7.13
                    </summary>
                    <br>
                    <table border = "1px">
                        <tbody>
                            <tr>
                            <?php
                                $temperaturas = array();
                                for ($i = 0; $i < 10; $i++) {
                                    array_push($temperaturas, rand(-90, 55));
                                    print "<td>" . $temperaturas[$i] . "</td>";
                                }
                            ?>   
                            </tr>
                        </tbody>
                    </table>
                    <?php
                        $suma = 0;
                        for ($i = 0; $i < 10; $i++) {
                            $suma += $temperaturas[$i];
                        }
                        $media = $suma / count($temperaturas);
                        echo "<br>" . "Media: " . $media;
                    ?>
                    <br>
                    <br>
                    <table border = "1px">
                        <tbody>
                            <tr>
                            <?php
                                $mayores = array();
                                for ($i = 0; $i < 10; $i++) {
                                    if ($temperaturas[$i] > $media || $temperaturas[$i] == $media)
                                        array_push($mayores, $temperaturas[$i]);
                                }
                                for ($i = 0; $i < count($mayores); $i++)
                                    print "<td>" . $mayores[$i] . "</td>";
                            ?>   
                            </tr>
                        </tbody>
                    </table>
                    <br>
                </details>
                <details>
                    <summary>
                        7.21
                    </summary>
                    <br>
                    <form action="" method="POST">
                        <table>
                            <tbody>
                                <tr>
                                    Almacen 1
                                    <input type = "number" name = "almacen1">
                                </tr>
                                <br>
                                <tr>
                                    Almacen 2
                                    <input type = "number" name = "almacen2">
                                </tr>
                                <br>
                                <tr>
                                    Almacen 3
                                    <input type = "number" name = "almacen3">
                                </tr>
                                <br>
                                <tr>
                                    Almacen 4
                                    <input type = "number" name = "almacen4">
                                </tr>
                                <br>
                                <tr>
                                    Almacen 5
                                    <input type = "number" name = "almacen5">
                                </tr>
                                <br>
                                <tr>
                                    Almacen 6
                                    <input type = "number" name = "almacen6">
                                </tr>
                                <br>
                                <tr>
                                    Almacen 7
                                    <input type = "number" name = "almacen7">
                                </tr>
                                <br>
                                <tr>
                                    Almacen 8
                                    <input type = "number" name = "almacen8">
                                </tr>
                                <br>
                                <tr>
                                    Almacen 9
                                    <input type = "number" name = "almacen9">
                                </tr>
                                <br>
                                <tr>
                                    Almacen 10
                                    <input type = "number" name = "almacen10">
                                </tr>
                                <br>
                                <tr>
                                    <input type="submit">
                                </tr>
                            </tbody>
                        </table>
                    </form>
                    <?php
                        $suma = 0;
                        if (isset($_POST["almacen1"]) && isset($_POST["almacen2"]) && isset($_POST["almacen3"]) && isset($_POST["almacen4"]) && isset($_POST["almacen5"]) && isset($_POST["almacen6"]) && isset($_POST["almacen7"]) && isset($_POST["almacen8"]) && isset($_POST["almacen9"]) && isset($_POST["almacen10"])) {
                            $ventas = array($_POST["almacen1"], $_POST["almacen2"], $_POST["almacen3"], $_POST["almacen4"], $_POST["almacen5"], $_POST["almacen6"], $_POST["almacen7"], $_POST["almacen8"], $_POST["almacen9"], $_POST["almacen10"]);
                            for ($i = 0; $i < count($ventas); $i++) 
                                $suma += $ventas[$i];
                            $media = $suma / count($ventas);
                            echo "<br>Media: " . $media;
                        }
                    ?>
                    <br>
                    <br>
                    <table border = "1px">
                        <tbody>
                            <tr>
                                <?php
                                    if (isset($ventas)) {
                                        $mayores = array();
                                        for ($i = 0; $i < count($ventas); $i++) {
                                            if ($ventas[$i] > $media) 
                                                array_push($mayores, $i);
                                        }
                                        for ($i = 0; $i < count($mayores); $i++) 
                                            echo "<td>Almacen " . ($mayores[$i] + 1) . "</td>";
                                    }
                                ?>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                </details>
                <details>
                    <summary>
                        7.22
                    </summary>
                    <br>
                    <table border="1px">
                        <tbody>
                            <tr>
                                <?php
                                    $numeros = array();
                                    for ($i = 0; $i < 100; $i++) {
                                        array_push($numeros, rand(0, 99));
                                        echo "<td>" . $numeros[$i] . "</td>";
                                    }
                                ?>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <?php
                        $maximo = max($numeros);
                        echo "Valor maximo: " . $maximo . "<br>";
                        for ($i = 0; $i < count($numeros); $i++)
                            if ($numeros[$i] == $maximo)
                                echo "Posicion: " . $i . "<br>";
                    ?>
                    <br>                    
                </details>
                <details>
                    <summary>
                        7.27
                    </summary>
                    <form action="" method="POST">
                        <input type="number" name="elemento">
                        <input type="submit">
                        <?php
                            $numeros = array();
                            if (isset($_POST["elemento"]))
                                array_push($numeros, $_POST["elemento"]);
                            for ($i = 0; $i < count($numeros); $i++)
                                echo $numeros[$i];
                        ?>
                    </form>
                    <table border="1px">
                        <tbody>
                            <tr>
                                <?php
                                    for ($i = 0; $i < count($numeros); $i++)
                                        echo "<td>" . $numeros[$i] . "</td>";
                                ?>
                            </tr>
                        </tbody>
                    </table>
                    <?php
                    ?>
                </details>
                <details>
                    <summary>
                        7.8
                    </summary>
                    
                </details>
            </ul>
        </body>
    </body>
</html>