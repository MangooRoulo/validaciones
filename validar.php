<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de la Evaluación</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" style="text-align: center;">
        <?php
            // Redirigir si el formulario no fue enviado correctamente
            if ($_SERVER['REQUEST_METHOD'] !== 'POST' || empty($_POST['nombre']) || !isset($_POST['p1'])) {
                header('Location: index.php');
                exit;
            }

            $nombre = $_REQUEST['nombre'];
            $preguntas = [
                "p1"  => ["titulo" => "1. Alan Turing nació en:", "correcta" => "1912"],
                "p2"  => ["titulo" => "2. ¿En qué ciudad nació Alan Turing?", "correcta" => "Londres"],
                "p3"  => ["titulo" => "3. ¿Qué profesión tenía el papá de Alan Turing?", "correcta" => "Funcionario de Indian Civil Service"],
                "p4"  => ["titulo" => "4. ¿Dónde estudió Turing antes de Cambridge?", "correcta" => "Sherborne School"],
                "p5"  => ["titulo" => "5. Turing tenía interés principalmente en:", "correcta" => "Teoria de numeros"],
                "p6"  => ["titulo" => "6. ¿Qué establece el Teorema de Análisis de Kleene?", "correcta" => "Los lenguajes aceptados por autómatas finitos son exactamente los descritos por expresiones regulares"],
                "p7"  => ["titulo" => "7. ¿Cómo se construye el sistema de ecuaciones en el Teorema de Análisis de Kleene?", "correcta" => "A partir de las transiciones del autómata expresadas en términos de expresiones regulares"],
                "p8"  => ["titulo" => "8. ¿Qué garantiza el Teorema de Síntesis de Kleene?", "correcta" => "Toda expresión regular puede transformarse en un autómata finito equivalente"],
                "p9"  => ["titulo" => "9. ¿Cuál es el propósito de añadir estados 'f' y 'ERROR' en un autómata?", "correcta" => "Facilitar la construcción de un autómata equivalente a una expresión regular"],
                "p10" => ["titulo" => "10. ¿Cómo se obtiene un autómata finito a partir de una expresión regular?", "correcta" => "Aplicando un algoritmo de construcción paso a paso que traduce la expresión en estados y transiciones"]
            ];
            
            $aciertos = 0;
            $resumen_html = "";
            
            foreach ($preguntas as $key => $info) {
                $user_ans = $_REQUEST[$key] ?? '';
                $is_correct = ($user_ans === $info['correcta']);
                if ($is_correct) $aciertos++;
                
                $status_icon = $is_correct ? "✅" : "❌";
                $status_class = $is_correct ? "text-success" : "text-error";
                
                $resumen_html .= "
                <div class='result-item'>
                    <div>
                        <div style='font-size: 0.8rem; color: var(--text-light);'>{$info['titulo']}</div>
                        <div class='{$status_class}'>{$user_ans}</div>
                    </div>
                    <div class='result-status'>{$status_icon}</div>
                </div>";
            }
            
            $total = count($preguntas);
            $score_pct = ($aciertos / $total) * 100;
            $nota = number_format(($aciertos / $total) * 5, 1);
            $aprobado = $nota >= 3.0;
            $header_title = $aprobado ? "¡Buen Trabajo!" : "Sigue Practicando";
            $header_icon_color = $aprobado ? "var(--success-color)" : "#ef4444";
            $header_icon_bg = $aprobado ? "#dcfce7" : "#fee2e2";

            // Guardar en archivo
            $ar = fopen("datos.txt", "a") or die("Error al abrir el archivo");
            fputs($ar, "Estudiante: " . $nombre . "\n");
            fputs($ar, "Nota: " . $nota . "/5.0 ({$aciertos}/{$total} aciertos)\n");
            
            // Guardar cada respuesta con su estado para el historial
            foreach ($preguntas as $key => $info) {
                $user_ans = $_REQUEST[$key] ?? '';
                $is_correct = ($user_ans === $info['correcta']);
                $tag = $is_correct ? "[CORRECTO]" : "[INCORRECTO]";
                fputs($ar, "{$info['titulo']}: {$user_ans} {$tag}\n");
            }

            fputs($ar, "--------------------------------------------------------\n");
            fclose($ar);
        ?>

        <div class="success-icon" style="background: <?php echo $header_icon_bg; ?>; color: <?php echo $header_icon_color; ?>;">
            <?php if ($score_pct >= 60): ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <?php else: ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            <?php endif; ?>
        </div>

        <h1><?php echo $header_title; ?></h1>
        <div class="score-badge">Calificación: <?php echo $nota; ?> / 5.0</div>
        <br>
        <div class="score-badge">Aciertos: <?php echo $aciertos; ?> / 10</div>
        
        <div style="margin-bottom: 2rem;">
            <?php echo $resumen_html; ?>
        </div>
        
        <div style="display: flex; gap: 1rem;">
            <a href="index.php" class="button" style="margin-top: 0; flex: 1;">Reintentar</a>
            <a href="leer.php" class="button button-outline" style="margin-top: 0; flex: 1;">Ver Historial</a>
        </div>
    </div>
</body>
</html>

