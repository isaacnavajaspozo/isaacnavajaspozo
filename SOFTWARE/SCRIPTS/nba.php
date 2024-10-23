<?php
// Función para leer entrada desde la consola
function leerDesdeConsola($mensaje) {
    echo $mensaje;
    $entrada = trim(fgets(STDIN)); // Lee y elimina espacios en blanco alrededor
    return $entrada;
}

function obtenerDato($mensaje, $tipo = 'string') {
    do {
        $dato = leerDesdeConsola($mensaje);

        // Eliminar espacios en blanco al inicio y al final
        $dato = trim($dato);

        if ($tipo === 'numeric' && !is_numeric($dato)) {
            echo "¡El dato debe ser un número! Por favor, vuelve a introducir un valor.\n";
        } elseif (empty($dato)) {
            echo "¡El dato no puede estar vacío! Por favor, vuelve a introducir un valor.\n";
        }
    } while (empty($dato) || ($tipo === 'numeric' && !is_numeric($dato)));

    return $dato;
}

function limpiarCodigoANSI($contenido) {
    // Expresión regular para eliminar códigos ANSI
    return preg_replace('/\e\[[^m]*m/', '', $contenido);
}

// Colores para la consola
$naranja = "\033[33m";
$rojo = "\033[31m";
$verde = "\033[32m";
$amarillo = "\033[33m";
$azul = "\033[34m";
$reset = "\033[0m"; // Para resetear el color

$stats = "https://www.nba.com/stats/teams/traditional?sort=PTS&dir=-1";

echo "\n";
echo "🤖[Bt-33]$:\n";
echo "\n";
echo "\n";
echo "                   ..ee77777ee..\n";
echo "              .e$*       $      *7e.\n";
echo "             z$*.        $         77c\n";
echo "           z$    *.      $       .P  ^7c\n";
echo "          d       *      $      z       b\n";
echo "         $         b     $     4%       ^$ \n";
echo "        d%         *     $     P         '$\n";
echo "       .$          'F    $    J           7r\n";
echo "       4L...........b....$....$...........J$\n";
echo "       7F           F    $    $           4$\n";
echo "       4F          4F    $    4r          4P\n";
echo "       ^$          $     $     b          $%\n";
echo "        3L        .F     $     'r        JP\n";
echo "         *c       $      $      3.      z$\n";
echo "          *b     J       $       3r    dP\n";
echo "           ^7c  z%       $        xc z$\n";
echo "             x*7L        $        .d$\n";
echo "                x*7ee..  $   ..ze7P\n";
echo "                    ************\n";
echo "\n";

echo "🤖[Bt-33]$:" . $verde . " Hola soy Bt-33 y he sido programado para calcular estadisticas de la NBA.\n" . $reset;
echo "\n";
echo "🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀\n";
echo "🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀\n";
echo "\n";
echo $naranja . "Soy un programa con la capacidad de calcular el ganador de un partido de NBA.\n";
echo $naranja . "En tres meses de laboratorío se predijo un 78% de partidos ganados\n";
echo $naranja . "te haré unas preguntas y finalmente te daré una estimación en porcentaje del equipo ganador\n" . $reset;
echo "\n";
$equipo1 = obtenerDato("Dime el nombre del equipo que juega " . $rojo . "en casa" . $reset . ": ") . $reset;
$equipo2 = obtenerDato(ucfirst($equipo1) . " juega contra el equipo: ") . $reset;

echo "Visita este enlace: " . $azul . " $stats \n" . $reset;

echo "\n";
echo "🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀\n";
echo "\n";
echo "🤖[Bt-33]$:" . $verde . " A partir de ahora escribe los valores de la misma forma que en la web.\n" . $reset;

// recojo datos del equipo 1
echo "\n";
echo ("procesando equipo " . ucfirst($equipo1) . "...\n");
sleep(1);
echo ("Me dispongo a calcular el índice de Potencia del equipo " . $naranja . ucfirst($equipo1) . "\n") . $reset;

echo "\n";
$GP1 = obtenerDato("[ ⛹🏾][#juegos-jugados] - Dato GP (ej:.4) :");
$W1 = obtenerDato("[ ⛹🏾][#victorias] - Dato W (ej:.2) :");
$WIN1 = obtenerDato("[ ⛹🏾][#porcentaje-victorias] - Dato WIN% (ej:.500) :");
$PTS1 = obtenerDato("[ ⛹🏾][#puntos] - Dato PTS (ej:124.0) :");
$FGA1 = obtenerDato("[ ⛹🏾][#tiros-campo] - Dato FGA (ej:50.7) :");
$FG1 = obtenerDato("[ ⛹🏾][#porcentaje-tiros-campo] - Dato FG% (ej:50.7) :");
$PM31 = obtenerDato("[ ⛹🏾][#tiros-tres-puntos-anotdos] - Dato 3PM (ej:13.5) :");
$PA31 = obtenerDato("[ ⛹🏾][#intentos-tiros-tres-puntos] - Dato 3PA (ej:37.0) :");
$P31 = obtenerDato("[ ⛹🏾][#intentos-tiros-tres-puntos] - Dato 3P% (ej:37.0) :");
$FT1 = obtenerDato("[ ⛹🏾][#porcentaje-tiros-libres] - Dato FT% (ej:71.3) :");
$OREB1 = obtenerDato("[ ⛹🏾][#rebotes-ofensivos] - Dato OREB% (ej:12.0) :");
$DREB1 = obtenerDato("[ ⛹🏾][#rebotes-defensivos] - Dato DREB% (ej:33.0) :");
$REB1 = obtenerDato("[ ⛹🏾][#rebotes-totales] - Dato REB (ej:33.0) :");
$AST1 = obtenerDato("[ ⛹🏾][#asistencias] - Dato AST (ej:33.0) :");
$TOV1 = obtenerDato("[ ⛹🏾][#pérdidas-balón] - Dato TOV (ej:33.0) :");

// recojo datos del equipo 2
echo "\n";
echo ("procesando equipo " . ucfirst($equipo2) . "...\n");
sleep(1);

echo ("Me dispongo a calcular el índice de Potencia del equipo " . $naranja . ucfirst($equipo2) . "\n") . $reset;

echo "\n";
$GP2 = obtenerDato("[ ⛹️ ][#juegos-jugados] - Dato GP (ej:.4) :");
$W2 = obtenerDato("[ ⛹️ ][#victorias] - Dato W (ej:.2) :");
$WIN2 = obtenerDato("[ ⛹️ ][#porcentaje-victorias] - Dato WIN% (ej:.500) :");
$PTS2 = obtenerDato("[ ⛹️ ][#puntos] - Dato PTS (ej:124.0) :");
$FGA2 = obtenerDato("[ ⛹️ ][#tiros-campo] - Dato FGA (ej:50.7) :");
$FG2 = obtenerDato("[ ⛹️ ][#porcentaje-tiros-campo] - Dato FG% (ej:50.7) :");
$PM32 = obtenerDato("[ ⛹️ ][#tiros-tres-puntos-anotdos] - Dato 3PM (ej:13.5) :");
$PA32 = obtenerDato("[ ⛹️ ][#intentos-tiros-tres-puntos] - Dato 3PA (ej:37.0) :");
$P32 = obtenerDato("[ ⛹️ ][#intentos-tiros-tres-puntos] - Dato 3P% (ej:37.0) :");
$FT2 = obtenerDato("[ ⛹️ ][#porcentaje-tiros-libres] - Dato FT% (ej:71.3) :");
$OREB2 = obtenerDato("[ ⛹️ ][#rebotes-ofensivos] - Dato OREB% (ej:12.0) :");
$DREB2 = obtenerDato("[ ⛹️ ][#rebotes-defensivos] - Dato DREB% (ej:33.0) :");
$REB2 = obtenerDato("[ ⛹️ ][#rebotes-totales] - Dato REB (ej:33.0) :");
$AST2 = obtenerDato("[ ⛹️ ][#asistencias] - Dato AST (ej:33.0) :");
$TOV2 = obtenerDato("[ ⛹️ ][#pérdidas-balón] - Dato TOV (ej:33.0) :");

// calculo el índice de potencia con los datos recogidos
// calculo los datos máximos entre los dos equipos
echo "\n";
echo ("procesando índice de potencia de los dos equipos...\n");
sleep(1);
$MAXpts = max($PTS1, $PTS2);
$MAXfg = max($FG1, $FG2);
$MAXft = max($FT1, $FT2);

$indicePotenciaEquipo1 = ($WIN1 * 40) + ($PTS1 / $MAXpts * 30) + ($FG1 / $MAXfg * 20) + ($FT1 / $MAXft * 10);

$indicePotenciaEquipo2 = ($WIN2 * 40) + ($PTS2 / $MAXpts * 30) + ($FG2 / $MAXfg * 20) + ($FT2 / $MAXft * 10);

// mostrar potencia del equipo
echo "\n";
echo "🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀\n";
echo "\n";
echo "🤖[Bt-33]$: El resultado del índice de potencia (sencillo) del equipo " . ucfirst($equipo1) . " es de: " . number_format($indicePotenciaEquipo1, 2) . "\n";
echo "🤖[Bt-33]$: El resultado del índice de potencia (sencillo) del equipo " . ucfirst($equipo2) . " es de: " . number_format($indicePotenciaEquipo2, 2) . "\n";
echo "\n";

// mostrar probabilidad de ganar
$array_indice_potencia = [
    ucfirst($equipo1) => $indicePotenciaEquipo1,
    ucfirst($equipo2) => $indicePotenciaEquipo2,
];

// Sumar todos los índices de potencia
$SumaTotal = array_sum($array_indice_potencia);

// Calcular las probabilidades de ganar para cada equipo
$probEquipo1 = $array_indice_potencia[ucfirst($equipo1)] / $SumaTotal;
$probEquipo2 = $array_indice_potencia[ucfirst($equipo2)] / $SumaTotal;

// Imprimir las probabilidades
echo "🤖[Bt-33]$: " . ucfirst($equipo1) . " tiene una probabilidad de ganar de " . number_format($probEquipo1 * 100, 2) . "%\n";
echo "🤖[Bt-33]$: " . ucfirst($equipo2) . " tiene una probabilidad de ganar de " . number_format($probEquipo2 * 100, 2) . "%\n";

echo "\n";
echo "🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀\n";

############################################################################################################
################################################ EQUIPO 1 ##################################################
############################################################################################################

echo "\n";
echo "\n";
echo ucfirst($equipo1) . " - " . number_format($probEquipo1 * 100, 2) . "%" . " - juega en casa" . ":\n";
echo "--------------------------------------------------------------------------------\n";

// Diferencial de puntos
$PuntosPermitidos1 = $PTS1 - ($DREB1 / ($REB1 * 1.5) * $PTS1);
$PromedioPTS1 = $PTS1 - $PuntosPermitidos1;
echo ucfirst($equipo1) . " - Diferencial de puntos: " . number_format($PromedioPTS1, 3) . " \n";

// Eficiencia Ofensiva y Defensiva
// Defensiva
$EficienciaDefensiva1 = ($PuntosPermitidos1 * 100) / $FGA2;
echo ucfirst($equipo1) . " - Eficiencia defensiva: " . number_format($EficienciaDefensiva1, 3) . " \n";

// Ofensiva
$posesiones1 = $FGA1 + 0.44 * $FT1 + $TOV1 - $OREB1;
$EficienciaOfensiva1 = ($PTS1 / $posesiones1) * 100;
echo ucfirst($equipo1) . " - Eficiencia ofensiva: " . number_format($EficienciaOfensiva1, 3) . " \n";

// perdidas de balón
$PerdidasBalon1 = $AST1 / $TOV1;
echo ucfirst($equipo1) . " - Creación de jugadas: " . number_format($PerdidasBalon1, 3) . " \n";

// Porcentje de conversión de tiro
$PromedioPTS1 = ($FG1 + 0.5 * $PM31) / $FGA1;
echo ucfirst($equipo1) . " - Conversión de tiro: " . number_format($PromedioPTS1, 3) . " \n";

// Porcentaje de tiros de tres puntos
$PorcentajeTriples1 = ($PM31 / $PA31) * 100;
echo ucfirst($equipo1) . " - Porcentaje de intento de triples: " . number_format($PorcentajeTriples1, 3) . " \n";

// Turnovers
$Turnovers1 = $TOV1 / $GP1;
echo ucfirst($equipo1) . " - Porcentaje perdidas de balón: " . number_format($Turnovers1, 3) . " \n";

// Rebotes totales
$RebotesTotales1 = ($OREB1 + $DREB1) / $REB1;
echo ucfirst($equipo1) . " - Rebotes totales: " . number_format($RebotesTotales1, 3) . " \n";

// asistencias
$asistencias1 = $AST1 / $TOV1;
echo ucfirst($equipo1) . " - oportunidades de tiro (asistencias): " . number_format($asistencias1, 3) . " \n";

// predicción
echo "\n";
echo "\n";
echo "Modelo simplificado de predicción \n";
echo "Cargando... \n";
echo "\n";
$TotalPrediccion1 = ($W1 / $GP1) + ($PTS1 / $FGA1) + $FG1 + $P31 + $FT1 + (($OREB1 + $DREB1) / $REB1) - $TOV1;
echo "🤖[Bt-33]$: La predicción del equipo " . ucfirst($equipo1) . " es de :" . number_format($TotalPrediccion1) . "%\n";

############################################################################################################
################################################ EQUIPO 2 ##################################################
############################################################################################################

echo "\n";
echo "\n";
echo ucfirst($equipo2) . " - " . number_format($probEquipo2 * 100, 2) . "%" . " - visitante" . ":\n";
echo "--------------------------------------------------------------------------------\n";

// Diferencial de puntos
$PuntosPermitidos2 = $PTS2 - ($DREB2 / ($REB2 * 1.5) * $PTS2);
$PromedioPTS2 = $PTS2 - $PuntosPermitidos2;
echo ucfirst($equipo2) . " - Diferencial de puntos: " . number_format($PromedioPTS2, 3) . " \n";

// Eficiencia Ofensiva y Defensiva
// Defensiva
$EficienciaDefensiva2 = ($PuntosPermitidos2 * 100) / $FGA1;
echo ucfirst($equipo2) . " - Eficiencia defensiva: " . number_format($EficienciaDefensiva2, 3) . " \n";

// Ofensiva
$posesiones2 = $FGA2 + 0.44 * $FT2 + $TOV2 - $OREB2;
$EficienciaOfensiva2 = ($PTS2 / $posesiones2) * 100;
echo ucfirst($equipo2) . " - Eficiencia ofensiva: " . number_format($EficienciaOfensiva2, 3) . " \n";

// perdidas de balón
$PerdidasBalon2 = $AST2 / $TOV2;
echo ucfirst($equipo2) . " - Creación de jugadas: " . number_format($PerdidasBalon2, 3) . " \n";

// Porcentje de conversión de tiro
$PromedioPTS2 = ($FG2 + 0.5 * $PM32) / $FGA2;
echo ucfirst($equipo2) . " - Conversión de tiro: " . number_format($PromedioPTS2, 3) . " \n";

// Porcentaje de tiros de tres puntos
$PorcentajeTriples2 = ($PM32 / $PA32) * 100;
echo ucfirst($equipo2) . " - Porcentaje de intento de triples: " . number_format($PorcentajeTriples2, 3) . " \n";

// Turnovers
$Turnovers2 = $TOV2 / $GP2;
echo ucfirst($equipo2) . " - Porcentaje perdidas de balón: " . number_format($Turnovers2, 3) . " \n";

// Rebotes totales
$RebotesTotales2 = ($OREB2 + $DREB2) / $REB2;
echo ucfirst($equipo2) . " - Rebotes totales: " . number_format($RebotesTotales2, 3) . " \n";

// asistencias
$asistencias2 = $AST2 / $TOV2;
echo ucfirst($equipo2) . " - oportunidades de tiro (asistencias): " . number_format($asistencias2, 3) . " \n";

// predicción
echo "\n";
echo "\n";
echo "Modelo simplificado de predicción \n";
echo "Cargando... \n";
echo "\n";
$TotalPrediccion2 = ($W2 / $GP2) + ($PTS2 / $FGA2) + $FG2 + $P32 + $FT2 + (($OREB2 + $DREB2) / $REB2) - $TOV2;
echo "🤖[Bt-33]$: La predicción del equipo " . ucfirst($equipo2) . " es de :" . number_format($TotalPrediccion2) . "%\n";


// Tabla de Contenidos
echo "\n";
echo "\n";
echo "################################################################################\n";
echo $rojo . "[x] Diferencial de puntos = si es alto sugiere que el equipo es fuerte, mientras que uno bajo indica lo contrario. Si es negativo, el equipo tiende a perder.\n" . $reset;
echo $naranja . "[x] Un equipo con más rebotes defensivos permite menos puntos.\n" . $reset;
echo $naranja . "[x] Eficiencia ofensiva = Puntos anotados por 100 posesiones. Esto te da una mejor idea de cuántos puntos anota el equipo por posesión. \n" . $reset;
echo $naranja . "[x] Eficiencia defensiva = si es bajo (<105) significa que el equipo es muy bueno defendiendo.\n" . $reset;
echo $naranja . "[x] Mide la efectividad del equipo en sus intentos de tres puntos. \n" . $reset;
echo $naranja . "[x] El número de turnovers (pérdidas de balón) afecta el control del juego. Un número bajo de turnovers indica un mejor control del balón. \n" . $reset;
echo "################################################################################\n";

############################################################################################################
################################################ ¿Seguir? ##################################################
############################################################################################################

echo "\n";
echo "🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀\n";
echo "\n";
$preguntaSeguir = obtenerDato("¿Quieres seguir perfeccionando la medición de estos equipos? si/no\n");

if (strtolower($preguntaSeguir) == "no") {
    exit();
} else {
    echo "\n";
    echo "Tomando en cuenta otros valores...\n";
    echo "Generando informe avanzado de Bt-33...\n";
    echo "🤖[Bt-33]$: Hola, voy a darte una estimación que viene de los datos que he recogido. \n";
    echo "🤖[Bt-33]$: Evaluo los porcentajes de cada dato y los transformo dependiendo de sus posibilidades en gráficos. \n";
    echo "\n";

    // estadisticas extras
    // + 5 juega en casa
    //Ventaja de jugar en casa: +4 puntos.
    //Desgaste por viajes: -3 puntos al equipo visitante.
    //Racha reciente: +2 puntos por cada victoria consecutiva.
    //Motivación especial: +3 puntos si es un partido de rivalidad.
    //Fatiga por calendario: -3 puntos si es un "back-to-back".
    //Clutch factor: +2 puntos si hay un jugador estrella conocido por rendir en momentos importantes.
    //Química del equipo: -4 puntos si hay rumores de problemas internos.



    $RendimientoOfensivo1 = $EficienciaOfensiva1 + ($Asistencias1 * $FactorAsistencias) + ($PorcentajeTriples1 * $FactorPorcentajeTriples);
    $RendimientoDefensivo1 = $EficienciaDefensiva1 + ($RebotesTotales1 * $FactorRebotes) - ($PorcentajePérdidas1 * $FactorPérdidas);
    $RendimientoOfensivo1 = $EficienciaOfensiva2 - $EficienciaDefensiva1;
    $RendimientoDefensivo1 = $EficienciaOfensiva2 - $EficienciaDefensiva1;
    $EficienciaGeneral1 = (($EficienciaOfensiva1 / $EficienciaDefensiva1) * $PromedioPTS1) * 100;
    $IndiceTiro1 = ($PromedioPTS1 * (1 / $PorcentajeTriples1)) * 1000;
    $ValorEquipo1 = $EficienciaGeneral1 + $IndiceTiro1 + ($RebotesTotales1 * $asistencias1);

    $RendimientoOfensivo2 = $EficienciaOfensiva2 + ($Asistencias2 * $FactorAsistencias) + ($PorcentajeTriples2 * $FactorPorcentajeTriples);
    $RendimientoDefensivo2 = $EficienciaDefensiva2 + ($RebotesTotales2 * $FactorRebotes) - ($PorcentajePérdidas2 * $FactorPérdidas);
    $RendimientoOfensivo2 = $EficienciaOfensiva2 - $EficienciaDefensiva2;
    $RendimientoDefensivo2 = $EficienciaOfensiva2 - $EficienciaDefensiva2;
    $EficienciaGeneral2 = (($EficienciaOfensiva2 / $EficienciaDefensiva2) * $PromedioPTS2) * 100;
    $IndiceTiro2 = ($PromedioPTS2 * (2 / $PorcentajeTriples2)) * 1000;
    $ValorEquipo2 = $EficienciaGeneral2 + $IndiceTiro2 + ($RebotesTotales2 * $asistencias2);

    // Generador de gráficos
    $equipo1Graf = [
        'EFICIENCIA EQUIPO     ' => number_format($EficienciaGeneral1, 2, '.', ''),
        'ÍNDICE DE TIRO        ' => number_format($IndiceTiro1, 2, '.', ''),
        'VALOR TOTAL DEL EQUIPO' => number_format($ValorEquipo1, 2, '.', ''),
        'RENDIMIENTO OFENSIVO  ' => number_format($RendimientoOfensivo1, 2, '.', ''),
        'RENDIMIENTO DEFENSIVO ' => number_format($RendimientoOfensivo1, 2, '.', ''),
    ];

    // Datos del equipo 2
    $equipo2Graf = [
        'EFICIENCIA EQUIPO     ' => number_format($EficienciaGeneral2, 2, '.', ''),
        'ÍNDICE DE TIRO        ' => number_format($IndiceTiro2, 2, '.', ''),
        'VALOR TOTAL DEL EQUIPO' => number_format($ValorEquipo2, 2, '.', ''),
        'RENDIMIENTO OFENSIVO  ' => number_format($RendimientoOfensivo2, 2, '.', ''),
        'RENDIMIENTO DEFENSIVO ' => number_format($RendimientoOfensivo2, 2, '.', ''),
    ];

    // Función para generar gráfico de barras
    function mostrarGraficoConsola($equipo, $data) {
        echo "\n";
        echo "Gráfico para $equipo\n";
        echo str_repeat('=', 80) . "\n";
        foreach ($data as $producto => $valor) {
            if ($producto !== key($data)) {
                echo str_repeat('-', 80) . "\n";
            }
            $barra = str_repeat('█', $valor / 2);
            echo "$producto | $barra $valor\n";
        }
        echo str_repeat('=', 80) . "\n";
    }

    // Mostrar gráficos para ambos equipos
    mostrarGraficoConsola(ucfirst($equipo1), $equipo1Graf);
    mostrarGraficoConsola(ucfirst($equipo2), $equipo2Graf);

}

############################################################################################################
########################################## guardar en txt ##################################################
############################################################################################################

echo "\n";
echo "🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀\n";
echo "\n";
$preguntaGuardar = obtenerDato("¿Quieres guardar las estadísticas de este partido? si/no\n");

if (strtolower($preguntaGuardar) == "no") {
    exit();
} else {
    echo "Generando archivo...\n";
    // Determinamos el sistema operativo usando PHP_OS_FAMILY
    $so = PHP_OS_FAMILY;
    $archivo = "Bt33-prediccion-NBA.txt";
    echo $archivo;
    $path = "";
    $contenido = "";

    // Obtenemos la ruta del directorio del usuario actual
    $homeDir = '';

    if ($so === 'Windows') {
        // En Windows, obtenemos el escritorio del usuario actual
        $homeDir = getenv('HOMEDRIVE') . getenv('HOMEPATH');
        $path = $homeDir . "\\Desktop\\$archivo";
        $rutaGuardada = "Tu archivo se a guardado en el escritorio.";
    } elseif ($so === 'Darwin') {
        // En macOS, obtenemos el escritorio del usuario actual
        $homeDir = getenv('HOME');
        $path = $homeDir . "/Desktop/$archivo";
        $rutaGuardada = "Tu archivo se a guardado en el escritorio.";
    } elseif ($so === 'Linux') {
        // En Linux, guardamos en /tmp
        $path = "/tmp/$archivo";
        $rutaGuardada = "Tu archivo se a guardado en la carpeta /tmp.";
    } else {
        // Si es otro sistema, usamos una carpeta local
        $path = "$archivo";
        $rutaGuardada = "Tu archivo se a guardado en la carpeta local.";
    }

    $contenido .= "\n";
    $contenido .= "🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀\n";
    $contenido .= "\n";
    $contenido .= "🤖[Bt-33]$: El resultado del índice de potencia (sencillo) del equipo " . ucfirst($equipo1) . " es de: " . number_format($indicePotenciaEquipo1, 2) . "\n";
    $contenido .= "🤖[Bt-33]$: El resultado del índice de potencia (sencillo) del equipo " . ucfirst($equipo2) . " es de: " . number_format($indicePotenciaEquipo2, 2) . "\n";
    $contenido .= "\n";
    $contenido .= "🤖[Bt-33]$: " . ucfirst($equipo1) . " tiene una probabilidad de ganar de " . number_format($probEquipo1 * 100, 2) . "%\n";
    $contenido .= "🤖[Bt-33]$: " . ucfirst($equipo2) . " tiene una probabilidad de ganar de " . number_format($probEquipo2 * 100, 2) . "%\n";
    $contenido .= "\n";
    $contenido .= "🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀\n";
    $contenido .= "\n";
    $contenido .= "\n";
    $contenido .= ucfirst($equipo1) . " - " . number_format($probEquipo1 * 100, 2) . "%" . " - juega en casa" . ":\n";
    $contenido .= "----------------------------------------------------------------------------------\n";
    $contenido .= ucfirst($equipo1) . " - Eficiencia defensiva: " . number_format($EficienciaDefensiva1, 3) . " \n";
    $contenido .= ucfirst($equipo1) . " - Eficiencia ofensiva: " . number_format($EficienciaOfensiva1, 3) . " \n";
    $contenido .= ucfirst($equipo1) . " - Conversión de tiro: " . number_format($PromedioPTS1, 3) . " \n";
    $contenido .= ucfirst($equipo1) . " - Porcentaje triples: " . number_format($PorcentajeTriples1, 3) . " \n";
    $contenido .= ucfirst($equipo1) . " - Porcentaje perdidas de balón: " . number_format($PorcentajeTriples1, 3) . " \n";
    $contenido .= ucfirst($equipo1) . " - Rebotes totales: " . number_format($RebotesTotales1, 3) . " \n";
    $contenido .= ucfirst($equipo1) . " - oportunidades de tiro (asistencias): " . number_format($asistencias1, 3) . " \n";
    $contenido .= "\n";
    $contenido .= "🤖[Bt-33]$: La predicción del equipo " . ucfirst($equipo1) . " es de :" . number_format($TotalPrediccion1) . "%\n";
    $contenido .= "\n";
    $contenido .= "\n";

    $contenido .= ucfirst($equipo2) . " - " . number_format($probEquipo2 * 100, 2) . "%" . " - visitante" . ":\n";
    $contenido .= "----------------------------------------------------------------------------------\n";
    $contenido .= ucfirst($equipo2) . " - Eficiencia defensiva: " . number_format($EficienciaDefensiva2, 3) . " \n";
    $contenido .= ucfirst($equipo2) . " - Eficiencia ofensiva: " . number_format($EficienciaOfensiva2, 3) . " \n";
    $contenido .= ucfirst($equipo2) . " - Conversión de tiro: " . number_format($PromedioPTS2, 3) . " \n";
    $contenido .= ucfirst($equipo2) . " - Porcentaje triples: " . number_format($PorcentajeTriples2, 3) . " \n";
    $contenido .= ucfirst($equipo2) . " - Porcentaje perdidas de balón: " . number_format($PorcentajeTriples2, 3) . " \n";
    $contenido .= ucfirst($equipo2) . " - Rebotes totales: " . number_format($RebotesTotales2, 3) . " \n";
    $contenido .= ucfirst($equipo2) . " - oportunidades de tiro (asistencias): " . number_format($asistencias2, 3) . " \n";
    $contenido .= "\n";
    $contenido .= "🤖[Bt-33]$: La predicción del equipo " . ucfirst($equipo2) . " es de :" . number_format($TotalPrediccion2) . "%\n";
    $contenido .= "\n";
    $contenido .= "\n";
    $contenido .= "🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀🏀\n";
    $contenido .= "\n";
    $contenido .= "\n";
    $contenido .= "Tomando en cuenta otros valores...\n";
    $contenido .= "Generando informe avanzado de Bt-33...\n";
    $contenido .= "🤖[Bt-33]$: Hola, voy a darte una estimación que viene de los datos que he recogido. \n";
    $contenido .= "🤖[Bt-33]$: Evaluo los porcentajes de cada dato y los transformo dependiendo de sus posibilidades. \n";
    $contenido .= "\n";
    $contenido .= "🤖[Bt-33]$: Evaluo los porcentajes de cada dato y los transformo dependiendo de sus posibilidades. \n";
    $contenido .= "\n";

    function guardarGraficoConsola($equipo, $data) {
        global $contenido;
        $contenido .= "\n";
        $contenido .= "Gráfico para $equipo\n";
        $contenido .= str_repeat('=', 80) . "\n";
        foreach ($data as $producto => $valor) {
            if ($producto !== key($data)) {
                $contenido .= str_repeat('-', 80) . "\n";
            }
            $barra = str_repeat('█', $valor / 2);
            $contenido .= "$producto | $barra $valor\n";
        }
        $contenido .= str_repeat('=', 80) . "\n";
    }

    // Mostrar gráficos para ambos equipos
    guardarGraficoConsola(ucfirst($equipo1), $equipo1Graf);
    guardarGraficoConsola(ucfirst($equipo2), $equipo2Graf);



    // Abre el archivo para escribir
    $handle = fopen($path, "w");

    if ($handle) {
        $contenidoLimpio = limpiarCodigoANSI($contenido);
        fwrite($handle, $contenidoLimpio);
        fclose($handle);
        echo "Archivo creado.";
        echo "\n";
        echo "Archivo creado correctamente en la ruta: $path";
        echo "\n";
        echo "Saliendo de Bt-33...";
    } else {
        echo "No se pudo crear el archivo en la ruta: $path";
    }

}


