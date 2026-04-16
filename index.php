<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz de Tecnología Académica</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Evaluación de Teoría</h1>

        <div class="progress-container">
            <div id="progress" class="progress-bar"></div>
        </div>

        <form id="quiz-form" action="validar.php" method="post">
            <div class="form-group" id="name-step">
                <label for="nombre">Para comenzar, dinos tu nombre:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Tu nombre aquí..." required
                    onkeydown="if(event.key==='Enter'){event.preventDefault();startQuiz();}">
                <button type="button" class="button" onclick="startQuiz()">Comenzar Quiz</button>
            </div>

            <?php
            // mix de preguntas
            require_once 'preguntas.php';
            $keys = array_keys($preguntas_banco);
            shuffle($keys);
            
            $step_num = 1;
            $total_q = count($keys);
            foreach ($keys as $id_pregunta) {
                $info = $preguntas_banco[$id_pregunta];
                $opciones = $info['opciones'];
                shuffle($opciones);
                ?>
                <div class="question-step" id="step-<?php echo $step_num; ?>">
                    <p class="subtitle" style="text-align: left; font-weight: 600; color: var(--text-color);">Pregunta <?php echo $step_num; ?> de <?php echo $total_q; ?></p>
                    <label><?php echo htmlspecialchars($info['pregunta']); ?></label>
                    <div class="radio-group">
                        <?php foreach ($opciones as $opcion): ?>
                            <label class="radio-item">
                                <input type="radio" name="<?php echo $id_pregunta; ?>" value="<?php echo htmlspecialchars($opcion); ?>"> 
                                <span><?php echo htmlspecialchars($opcion); ?></span>
                            </label>
                        <?php endforeach; ?>
                    </div>
                    <div class="nav-buttons">
                        <?php if ($step_num > 1): ?>
                            <button type="button" class="button button-outline" onclick="prevStep(<?php echo $step_num - 1; ?>)">Anterior</button>
                        <?php endif; ?>
                        
                        <?php if ($step_num < $total_q): ?>
                            <button type="button" class="button" onclick="nextStep(<?php echo $step_num + 1; ?>)">Siguiente Pregunta</button>
                        <?php else: ?>
                            <button type="submit" class="button">Finalizar Quiz</button>
                        <?php endif; ?>
                    </div>
                </div>
                <?php
                $step_num++;
            }
            ?>
        </form>

        <script>
            let currentStep = 0;
            const totalSteps = 10;

            // Evitar que el formulario se envíe accidentalmente (ej. al presionar Enter)
            document.getElementById('quiz-form').addEventListener('submit', function(e) {
                // Solo permitir envío si estamos en el último paso
                if (currentStep !== totalSteps) {
                    e.preventDefault();
                }
            });

            function startQuiz() {
                const nombre = document.getElementById('nombre').value.trim();
                if (!nombre) {
                    alert('Por favor, ingresa tu nombre');
                    return;
                }
                document.getElementById('name-step').style.display = 'none';
                // asegurar que empieza desde 0
                currentStep = 0;
                showStep(1);
            }

            function showStep(step) {
                document.querySelectorAll('.question-step').forEach(s => s.classList.remove('active'));
                const el = document.getElementById('step-' + step);
                if (el) {
                    el.classList.add('active');
                    currentStep = step;
                    updateProgress();
                }
            }

            function nextStep(step) {
                // Validar que se haya seleccionado una respuesta antes de avanzar
                if (currentStep > 0) {
                    const stepDiv = document.getElementById('step-' + currentStep);
                    const radios = stepDiv.querySelectorAll('input[type="radio"]');
                    let checked = false;
                    for (let r of radios)
                        if (r.checked) checked = true;
                    if (!checked) {
                        alert('Por favor, selecciona una respuesta antes de continuar');
                        return;
                    }
                }
                showStep(step);
            }

            function prevStep(step) {
                showStep(step);
            }

            function updateProgress() {
                const pct = (currentStep / totalSteps) * 100;
                document.getElementById('progress').style.width = pct + '%';
            }
        </script>


        <a href="leer.php" class="footer-link">Ver Historial</a>
    </div>
</body>

</html>