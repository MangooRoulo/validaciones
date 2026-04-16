<?php
// banco de preguntas centralizado
$preguntas_banco = [
    "p1" => [
        "pregunta" => "¿En qué año nació Alan Turing?",
        "opciones" => ["1920", "1912", "1918", "1915"],
        "correcta" => "1912"
    ],
    "p2" => [
        "pregunta" => "¿En qué ciudad nació Alan Turing?",
        "opciones" => ["Londres", "Manchester", "Liverpool", "Birmingham"],
        "correcta" => "Londres"
    ],
    "p3" => [
        "pregunta" => "¿Qué profesión tenía el papá de Alan Turing?",
        "opciones" => ["Profesor de Cambridge", "Funcionario de Indian Civil Service", "Ingeniero quimico", "Diplomatico"],
        "correcta" => "Funcionario de Indian Civil Service"
    ],
    "p4" => [
        "pregunta" => "¿Dónde estudió Alan Turing durante su juventud antes de Cambridge?",
        "opciones" => ["King's College", "Sherborne School", "Universidad de Gotinga", "Universidad de Oxford"],
        "correcta" => "Sherborne School"
    ],
    "p5" => [
        "pregunta" => "¿Qué le interesaba principalmente a Turing?",
        "opciones" => ["Logica matematica", "Numeros binarios", "Teoria de numeros", "Programacion"],
        "correcta" => "Teoria de numeros"
    ],
    "p6" => [
        "pregunta" => "¿Qué establece el Teorema de Análisis de Kleene?",
        "opciones" => [
            "Todo lenguaje regular puede ser descrito por una gramática libre de contexto",
            "Los lenguajes aceptados por autómatas finitos son exactamente los descritos por expresiones regulares",
            "Todo autómata finito puede convertirse en una máquina de Turing",
            "Los autómatas finitos deterministas son más potentes que los no deterministas"
        ],
        "correcta" => "Los lenguajes aceptados por autómatas finitos son exactamente los descritos por expresiones regulares"
    ],
    "p7" => [
        "pregunta" => "¿Cómo se construye el sistema de ecuaciones en el Teorema de Análisis de Kleene?",
        "opciones" => [
            "Usando derivaciones de gramáticas libres de contexto",
            "A partir de las transiciones del autómata expresadas en términos de expresiones regulares",
            "Mediante la enumeración de todos los estados finales",
            "Aplicando directamente el algoritmo de minimización de autómatas"
        ],
        "correcta" => "A partir de las transiciones del autómata expresadas en términos de expresiones regulares"
    ],
    "p8" => [
        "pregunta" => "¿Qué garantiza el Teorema de Síntesis de Kleene?",
        "opciones" => [
            "Todo lenguaje regular puede ser aceptado por una máquina de Turing",
            "Toda expresión regular puede transformarse en un autómata finito equivalente",
            "Los autómatas finitos deterministas siempre tienen menos estados que los no deterministas",
            "Los autómatas finitos pueden aceptar lenguajes infinitos no regulares"
        ],
        "correcta" => "Toda expresión regular puede transformarse en un autómata finito equivalente"
    ],
    "p9" => [
        "pregunta" => "¿Cuál es el propósito de añadir estados especiales como 'f' y 'ERROR' en la construcción de un autómata?",
        "opciones" => [
            "Simplificar la notación matemática",
            "Garantizar que el autómata sea determinista",
            "Facilitar la construcción de un autómata equivalente a una expresión regular",
            "Reducir el número de transiciones"
        ],
        "correcta" => "Facilitar la construcción de un autómata equivalente a una expresión regular"
    ],
    "p10" => [
        "pregunta" => "Según el Teorema de Síntesis, ¿cómo se obtiene un autómata finito a partir de una expresión regular?",
        "opciones" => [
            "Usando derivaciones de gramáticas libres de contexto",
            "Aplicando un algoritmo de construcción paso a paso que traduce la expresión en estados y transiciones",
            "Transformando la expresión en una máquina de Turing",
            "Eliminando los estados no deterministas"
        ],
        "correcta" => "Aplicando un algoritmo de construcción paso a paso que traduce la expresión en estados y transiciones"
    ]
];
?>
