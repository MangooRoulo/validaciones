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

            <!-- Pregunta 1 -->
            <div class="question-step" id="step-1">
                <p class="subtitle" style="text-align: left; font-weight: 600; color: var(--text-color);">Pregunta 1 de 10</p>
                <label>Alan Turing nació en:</label>
                <div class="radio-group">
                    <label class="radio-item"><input type="radio" name="p1" value="1920"> <span>1920</span></label>
                    <label class="radio-item"><input type="radio" name="p1" value="1912"> <span>1912</span></label>
                    <label class="radio-item"><input type="radio" name="p1" value="1918"> <span>1918</span></label>
                    <label class="radio-item"><input type="radio" name="p1" value="1915"> <span>1915</span></label>
                </div>
                <div class="nav-buttons">
                    <button type="button" class="button" onclick="nextStep(2)">Siguiente Pregunta</button>
                </div>
            </div>

            <!-- Pregunta 2 -->
            <div class="question-step" id="step-2">
                <p class="subtitle" style="text-align: left; font-weight: 600; color: var(--text-color);">Pregunta 2 de 10</p>
                <label>¿En qué ciudad nació Alan Turing?</label>
                <div class="radio-group">
                    <label class="radio-item"><input type="radio" name="p2" value="Londres"> <span>Londres</span></label>
                    <label class="radio-item"><input type="radio" name="p2" value="Manchester"> <span>Manchester</span></label>
                    <label class="radio-item"><input type="radio" name="p2" value="Liverpool"> <span>Liverpool</span></label>
                    <label class="radio-item"><input type="radio" name="p2" value="Birmingham"> <span>Birmingham</span></label>
                </div>
                <div class="nav-buttons">
                    <button type="button" class="button button-outline" onclick="prevStep(1)">Anterior</button>
                    <button type="button" class="button" onclick="nextStep(3)">Siguiente Pregunta</button>
                </div>
            </div>

            <!-- Pregunta 3 -->
            <div class="question-step" id="step-3">
                <p class="subtitle" style="text-align: left; font-weight: 600; color: var(--text-color);">Pregunta 3 de 10</p>
                <label>¿Qué profesión tenía el papá de Alan Turing?</label>
                <div class="radio-group">
                    <label class="radio-item"><input type="radio" name="p3" value="Profesor de Cambridge"> <span>Profesor de Cambridge</span></label>
                    <label class="radio-item"><input type="radio" name="p3" value="Funcionario de Indian Civil Service"> <span>Funcionario de Indian Civil Service</span></label>
                    <label class="radio-item"><input type="radio" name="p3" value="Ingeniero quimico"> <span>Ingeniero químico</span></label>
                    <label class="radio-item"><input type="radio" name="p3" value="Diplomatico"> <span>Diplomático</span></label>
                </div>
                <div class="nav-buttons">
                    <button type="button" class="button button-outline" onclick="prevStep(2)">Anterior</button>
                    <button type="button" class="button" onclick="nextStep(4)">Siguiente Pregunta</button>
                </div>
            </div>

            <!-- Pregunta 4 -->
            <div class="question-step" id="step-4">
                <p class="subtitle" style="text-align: left; font-weight: 600; color: var(--text-color);">Pregunta 4 de 10</p>
                <label>¿Dónde estudió Alan Turing durante su juventud antes de Cambridge?</label>
                <div class="radio-group">
                    <label class="radio-item"><input type="radio" name="p4" value="King's College"> <span>King's College</span></label>
                    <label class="radio-item"><input type="radio" name="p4" value="Sherborne School"> <span>Sherborne School</span></label>
                    <label class="radio-item"><input type="radio" name="p4" value="Universidad de Gotinga"> <span>Universidad de Gotinga</span></label>
                    <label class="radio-item"><input type="radio" name="p4" value="Universidad de Oxford"> <span>Universidad de Oxford</span></label>
                </div>
                <div class="nav-buttons">
                    <button type="button" class="button button-outline" onclick="prevStep(3)">Anterior</button>
                    <button type="button" class="button" onclick="nextStep(5)">Siguiente Pregunta</button>
                </div>
            </div>

            <!-- Pregunta 5 -->
            <div class="question-step" id="step-5">
                <p class="subtitle" style="text-align: left; font-weight: 600; color: var(--text-color);">Pregunta 5 de 10</p>
                <label>Turing tenía interés principalmente en:</label>
                <div class="radio-group">
                    <label class="radio-item"><input type="radio" name="p5" value="Logica matematica"> <span>Lógica matemática</span></label>
                    <label class="radio-item"><input type="radio" name="p5" value="Numeros binarios"> <span>Números binarios</span></label>
                    <label class="radio-item"><input type="radio" name="p5" value="Teoria de numeros"> <span>Teoría de números</span></label>
                    <label class="radio-item"><input type="radio" name="p5" value="Programacion"> <span>Programación</span></label>
                </div>
                <div class="nav-buttons">
                    <button type="button" class="button button-outline" onclick="prevStep(4)">Anterior</button>
                    <button type="button" class="button" onclick="nextStep(6)">Siguiente Pregunta</button>
                </div>
            </div>

            <!-- Pregunta 6 -->
            <div class="question-step" id="step-6">
                <p class="subtitle" style="text-align: left; font-weight: 600; color: var(--text-color);">Pregunta 6 de 10</p>
                <label>¿Qué establece el Teorema de Análisis de Kleene?</label>
                <div class="radio-group">
                    <label class="radio-item"><input type="radio" name="p6" value="Todo lenguaje regular puede ser descrito por una gramática libre de contexto"> <span>Todo lenguaje regular puede ser descrito por una gramática libre de contexto</span></label>
                    <label class="radio-item"><input type="radio" name="p6" value="Los lenguajes aceptados por autómatas finitos son exactamente los descritos por expresiones regulares"> <span>Los lenguajes aceptados por autómatas finitos son exactamente los descritos por expresiones regulares</span></label>
                    <label class="radio-item"><input type="radio" name="p6" value="Todo autómata finito puede convertirse en una máquina de Turing"> <span>Todo autómata finito puede convertirse en una máquina de Turing</span></label>
                    <label class="radio-item"><input type="radio" name="p6" value="Los autómatas finitos deterministas son más potentes que los no deterministas"> <span>Los autómatas finitos deterministas son más potentes que los no deterministas</span></label>
                </div>
                <div class="nav-buttons">
                    <button type="button" class="button button-outline" onclick="prevStep(5)">Anterior</button>
                    <button type="button" class="button" onclick="nextStep(7)">Siguiente Pregunta</button>
                </div>
            </div>

            <!-- Pregunta 7 -->
            <div class="question-step" id="step-7">
                <p class="subtitle" style="text-align: left; font-weight: 600; color: var(--text-color);">Pregunta 7 de 10</p>
                <label>¿Cómo se construye el sistema de ecuaciones en el Teorema de Análisis de Kleene?</label>
                <div class="radio-group">
                    <label class="radio-item"><input type="radio" name="p7" value="Usando derivaciones de gramáticas libres de contexto"> <span>Usando derivaciones de gramáticas libres de contexto</span></label>
                    <label class="radio-item"><input type="radio" name="p7" value="A partir de las transiciones del autómata expresadas en términos de expresiones regulares"> <span>A partir de las transiciones del autómata expresadas en términos de expresiones regulares</span></label>
                    <label class="radio-item"><input type="radio" name="p7" value="Mediante la enumeración de todos los estados finales"> <span>Mediante la enumeración de todos los estados finales</span></label>
                    <label class="radio-item"><input type="radio" name="p7" value="Aplicando directamente el algoritmo de minimización de autómatas"> <span>Aplicando directamente el algoritmo de minimización de autómatas</span></label>
                </div>
                <div class="nav-buttons">
                    <button type="button" class="button button-outline" onclick="prevStep(6)">Anterior</button>
                    <button type="button" class="button" onclick="nextStep(8)">Siguiente Pregunta</button>
                </div>
            </div>

            <!-- Pregunta 8 -->
            <div class="question-step" id="step-8">
                <p class="subtitle" style="text-align: left; font-weight: 600; color: var(--text-color);">Pregunta 8 de 10</p>
                <label>¿Qué garantiza el Teorema de Síntesis de Kleene?</label>
                <div class="radio-group">
                    <label class="radio-item"><input type="radio" name="p8" value="Todo lenguaje regular puede ser aceptado por una máquina de Turing"> <span>Todo lenguaje regular puede ser aceptado por una máquina de Turing</span></label>
                    <label class="radio-item"><input type="radio" name="p8" value="Toda expresión regular puede transformarse en un autómata finito equivalente"> <span>Toda expresión regular puede transformarse en un autómata finito equivalente</span></label>
                    <label class="radio-item"><input type="radio" name="p8" value="Los autómatas finitos deterministas siempre tienen menos estados que los no deterministas"> <span>Los autómatas finitos deterministas siempre tienen menos estados que los no deterministas</span></label>
                    <label class="radio-item"><input type="radio" name="p8" value="Los autómatas finitos pueden aceptar lenguajes infinitos no regulares"> <span>Los autómatas finitos pueden aceptar lenguajes infinitos no regulares</span></label>
                </div>
                <div class="nav-buttons">
                    <button type="button" class="button button-outline" onclick="prevStep(7)">Anterior</button>
                    <button type="button" class="button" onclick="nextStep(9)">Siguiente Pregunta</button>
                </div>
            </div>

            <!-- Pregunta 9 -->
            <div class="question-step" id="step-9">
                <p class="subtitle" style="text-align: left; font-weight: 600; color: var(--text-color);">Pregunta 9 de 10</p>
                <label>¿Cuál es el propósito de añadir estados especiales como "f" y "ERROR" en la construcción de un autómata?</label>
                <div class="radio-group">
                    <label class="radio-item"><input type="radio" name="p9" value="Simplificar la notación matemática"> <span>Simplificar la notación matemática</span></label>
                    <label class="radio-item"><input type="radio" name="p9" value="Garantizar que el autómata sea determinista"> <span>Garantizar que el autómata sea determinista</span></label>
                    <label class="radio-item"><input type="radio" name="p9" value="Facilitar la construcción de un autómata equivalente a una expresión regular"> <span>Facilitar la construcción de un autómata equivalente a una expresión regular</span></label>
                    <label class="radio-item"><input type="radio" name="p9" value="Reducir el número de transiciones"> <span>Reducir el número de transiciones</span></label>
                </div>
                <div class="nav-buttons">
                    <button type="button" class="button button-outline" onclick="prevStep(8)">Anterior</button>
                    <button type="button" class="button" onclick="nextStep(10)">Siguiente Pregunta</button>
                </div>
            </div>

            <!-- Pregunta 10 -->
            <div class="question-step" id="step-10">
                <p class="subtitle" style="text-align: left; font-weight: 600; color: var(--text-color);">Pregunta 10 de 10</p>
                <label>Según el Teorema de Síntesis, ¿cómo se obtiene un autómata finito a partir de una expresión regular?</label>
                <div class="radio-group">
                    <label class="radio-item"><input type="radio" name="p10" value="Usando derivaciones de gramáticas libres de contexto"> <span>Usando derivaciones de gramáticas libres de contexto</span></label>
                    <label class="radio-item"><input type="radio" name="p10" value="Aplicando un algoritmo de construcción paso a paso que traduce la expresión en estados y transiciones"> <span>Aplicando un algoritmo de construcción paso a paso que traduce la expresión en estados y transiciones</span></label>
                    <label class="radio-item"><input type="radio" name="p10" value="Transformando la expresión en una máquina de Turing"> <span>Transformando la expresión en una máquina de Turing</span></label>
                    <label class="radio-item"><input type="radio" name="p10" value="Eliminando los estados no deterministas"> <span>Eliminando los estados no deterministas</span></label>
                </div>
                <div class="nav-buttons">
                    <button type="button" class="button button-outline" onclick="prevStep(9)">Anterior</button>
                    <button type="submit" class="button">Finalizar Quiz</button>
                </div>
            </div>
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
                currentStep = 0; // asegurar que empieza desde 0
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
                    const radios = document.getElementsByName('p' + currentStep);
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