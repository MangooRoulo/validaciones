<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Estudiantes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" style="max-width: 700px;">
        <h1>Estudiantes Registrados</h1>
        <p class="subtitle">Listado histórico de intereses académicos</p>

        <?php
        if (file_exists("datos.txt")) {
            $ar = fopen("datos.txt", "r") or die("No se pudo abrir el archivo");
            $current_student = "";
            $details = [];
            
            echo '<div class="data-list">';
            while (!feof($ar)) {
                $linea = trim(fgets($ar));
                if (empty($linea)) continue;

                if (strpos($linea, "Estudiante:") === 0) {
                    $current_student = str_replace("Estudiante: ", "", $linea);
                    $details = [];
                } elseif (strpos($linea, "Puntaje:") === 0) {
                    $score_line = $linea;
                } elseif (strpos($linea, "-------------------") === 0) {
                    if (!empty($current_student)) {
                        echo '<div class="data-card">';
                        echo '<div class="data-name">' . htmlspecialchars($current_student) . '</div>';
                        if (isset($score_line)) {
                            echo '<div class="text-success" style="margin-bottom: 0.5rem;">' . htmlspecialchars($score_line) . '</div>';
                        }
                        echo '<div class="data-content">' . implode("<br>", $details) . "</div>";
                        echo '</div>';
                        unset($score_line);
                    }
                } else {
                    // Procesar si es una pregunta con estado
                    if (strpos($linea, "[CORRECTO]") !== false) {
                        $clean_line = str_replace("[CORRECTO]", "✅", $linea);
                        $details[] = "<span class='text-success'>{$clean_line}</span>";
                    } elseif (strpos($linea, "[INCORRECTO]") !== false) {
                        $clean_line = str_replace("[INCORRECTO]", "❌", $linea);
                        $details[] = "<span class='text-error'>{$clean_line}</span>";
                    } else {
                        $details[] = htmlspecialchars($linea);
                    }
                }
            }
            echo '</div>';
            fclose($ar);
        } else {
            echo '<p style="text-align: center; color: var(--text-light);">No hay registros disponibles aún.</p>';
        }
        ?>

        <div style="margin-top: 2rem; text-align: center;">
            <a href="index.php" class="button button-outline">Volver al Formulario</a>
        </div>
    </div>
</body>
</html>
