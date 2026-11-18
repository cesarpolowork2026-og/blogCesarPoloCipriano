<?php
/**
 * Portafolio personal — César Polo Cipriano
 * Página única renderizada desde PHP (Vercel: vercel-php@0.7.3).
 * Edita el array $perfil para actualizar el contenido.
 */

// --- Servidor local (php -S): deja que los archivos estáticos de public/ se sirvan solos.
if (PHP_SAPI === 'cli-server') {
    $ruta = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    if ($ruta !== '/' && is_file(__DIR__ . '/../public' . $ruta)) {
        return false;
    }
}

// ============================================================================
//  DATOS DEL CV — edita aquí
// ============================================================================
$perfil = [
    'nombre'     => 'César Polo Cipriano',
    'iniciales'  => 'CP',
    'titulo'     => 'Ingeniero de Sistemas e Informática · Data Science & Machine Learning',
    'ubicacion'  => 'Chimbote, Perú',
    'foto'       => '/foto.jpg',
    'foto_alt'   => '/foto-workspace.jpg',
    'roles'      => [
        'Data Scientist',
        'Ingeniero MLOps',
        'Desarrollador Full Stack',
        'Especialista en Microsoft Azure',
    ],
    'resumen'    => 'Estudiante de último ciclo de Ingeniería de Sistemas e Informática (X ciclo, egreso previsto en diciembre de 2026) con experiencia aplicada en ciencia de datos, MLOps y desarrollo full stack. Desarrollé de extremo a extremo un módulo de predicción de fuga de clientes bancarios con XGBoost, explicabilidad SHAP y reentrenamiento automático, y desplegué en Microsoft Azure soluciones de monitoreo de datos IoT.',
    'tesis'      => 'Realicé una estancia de investigación en LLMs y NLP en el grupo PRHLT de la Universitat Politècnica de València (España), vinculada a mi tesis, que aborda la robustez de sistemas RAG en español ante variaciones del lenguaje: informalidad, errores ortográficos y regionalismos.',
    'contacto'   => [
        'email'    => 'polociprianouns@gmail.com',
        'telefono' => '+51 929 055 707',
        'github'   => 'https://github.com/alexiscipriann',
        'linkedin' => 'https://www.linkedin.com/in/c%C3%A9sar-polo-cipriano-0b5753256',
    ],
    'metricas'   => [
        ['valor' => '40%',  'texto' => 'menos tiempo de procesamiento optimizando consultas PostgreSQL'],
        ['valor' => 'E2E',  'texto' => 'módulo de churn bancario: modelo, API, frontend y MLOps'],
        ['valor' => '1.º',  'texto' => 'puesto en Emprende UNS 2024 con visión por computadora'],
        ['valor' => 'Azure','texto' => 'modelos desplegados en la nube con datos IoT y series de tiempo'],
    ],
    'servicios'  => [
        ['icono' => 'model', 'titulo' => 'Machine Learning', 'texto' => 'Modelos predictivos y de clasificación con XGBoost, Random Forest, scikit-learn, TensorFlow y PyTorch, con explicabilidad SHAP.'],
        ['icono' => 'cloud', 'titulo' => 'MLOps y Cloud', 'texto' => 'Versionado en MLflow, reentrenamiento automático, champion/challenger y despliegue en Microsoft Azure.'],
        ['icono' => 'code',  'titulo' => 'Desarrollo Full Stack', 'texto' => 'APIs con FastAPI y Spring Boot, interfaces en React + TypeScript y bases de datos PostgreSQL.'],
        ['icono' => 'chart', 'titulo' => 'Datos y BI', 'texto' => 'Procesos ETL, SQL Server y PostgreSQL, dashboards en Power BI e integración de datos IoT.'],
    ],
    'experiencia' => [
        [
            'cargo'   => 'Pasante de Investigación en NLP / LLMs',
            'empresa' => 'Grupo PRHLT – Universitat Politècnica de València (UPV), España',
            'periodo' => 'Oct. 2026 – Nov. 2026',
            'logros'  => [
                'Estancia de investigación internacional en el grupo PRHLT (Pattern Recognition and Human Language Technology) de la Universitat Politècnica de València, bajo la supervisión del Prof. Paolo Rosso, especialista en procesamiento de lenguaje natural.',
                'Profundicé en modelos de lenguaje de gran escala (LLMs) y técnicas de procesamiento de lenguaje natural, trabajando con modelos en español como BETO y sus variantes.',
                'Apliqué lo aprendido a mi tesis sobre la robustez de sistemas RAG ante variaciones del español: informalidad, errores ortográficos y regionalismos.',
            ],
            'stack'   => ['LLMs', 'NLP', 'BETO', 'Hugging Face Transformers', 'RAG'],
            'fotos'   => [
                ['src' => '/upv-campus.jpg',      'alt' => 'Campus de Vera de la Universitat Politècnica de València'],
                ['src' => '/upv-laboratorio.jpg', 'alt' => 'Sesión de trabajo en un laboratorio de la UPV'],
            ],
        ],
        [
            'cargo'   => 'Desarrollador MLOps / Cloud',
            'empresa' => 'Freelance',
            'periodo' => 'Ago. 2025 – Dic. 2025',
            'logros'  => [
                'Desarrollé modelos predictivos para la detección de temperatura en motores síncronos de imán permanente.',
                'Desplegué en Microsoft Azure modelos para el monitoreo de temperatura en edificios, integrando datos IoT y series de tiempo.',
            ],
            'stack'   => ['Azure ML', 'Blob Storage', 'IoT', 'Series de tiempo'],
        ],
        [
            'cargo'   => 'Analista de Datos',
            'empresa' => 'Distribuidora Líder — Nuevo Chimbote',
            'periodo' => 'Mar. 2025 – Jul. 2025',
            'logros'  => [
                'Recolecté, limpié y consolidé datos de ventas e inventario de múltiples fuentes en SQL Server.',
                'Elaboré dashboards e informes en Power BI para el seguimiento de ventas, rotación de productos y desempeño comercial.',
            ],
            'stack'   => ['SQL Server', 'Power BI', 'ETL'],
        ],
    ],
    'proyectos' => [
        [
            'titulo'   => 'Reconocimiento de lenguaje de señas peruano en tiempo real',
            'texto'    => 'Sistema de visión por computadora y Machine Learning que reconoce señas en tiempo real.',
            'etiqueta' => 'Ganador Emprende UNS 2024',
            'tags'     => ['Visión por computadora', 'Machine Learning'],
        ],
        [
            'titulo'   => 'Detección de enfermedades neurodegenerativas',
            'texto'    => 'Modelos de clasificación a partir de imágenes de resonancia magnética.',
            'etiqueta' => 'Salud',
            'tags'     => ['Clasificación', 'Imágenes médicas'],
        ],
        [
            'titulo'   => 'Chatbot con LLM para atención al cliente',
            'texto'    => 'Asistente conversacional basado en modelos de lenguaje aplicado al sector veterinario.',
            'etiqueta' => 'IA generativa',
            'tags'     => ['LLM', 'NLP'],
        ],
    ],
    'habilidades' => [
        'Machine Learning' => ['XGBoost', 'Random Forest', 'SHAP', 'scikit-learn', 'TensorFlow / PyTorch', 'YOLO', 'Hugging Face Transformers', 'RAG'],
        'MLOps y nube'     => ['MLflow (DagsHub)', 'Reentrenamiento y monitoreo', 'Azure Machine Learning', 'Azure Blob Storage', 'Cloudflare'],
        'Desarrollo'       => ['Python', 'Java', 'FastAPI', 'Spring Boot', 'React', 'TypeScript / JavaScript', 'Git'],
        'Datos'            => ['PostgreSQL', 'SQL Server', 'ETL', 'Power BI', 'IoT y series de tiempo'],
        'Metodologías'     => ['Scrum'],
    ],
    'educacion' => [
        [
            'titulo'      => 'Ingeniería de Sistemas e Informática',
            'institucion' => 'Universidad Nacional del Santa (UNS)',
            'periodo'     => '2022 – Dic. 2026 (previsto)',
            'detalle'     => 'X ciclo',
        ],
    ],
    'idiomas' => [
        ['idioma' => 'Español', 'nivel' => 'Nativo',     'pct' => 100],
        ['idioma' => 'Inglés',  'nivel' => 'Intermedio', 'pct' => 60],
    ],
    'blog' => [
        // Imágenes referenciales de Unsplash (licencia libre), guardadas en public/
        // El texto de cada artículo está en $articulos (abajo), con la misma clave 'slug'.
        [
            'slug'      => 'mlops-mlflow-reentrenamiento-automatico',
            'titulo'    => 'Del notebook a producción: MLOps con MLflow y reentrenamiento automático',
            'categoria' => 'MLOps',
            'imagen'    => '/blog-mlops.jpg',
            'fecha'     => '2026-11-18',
            'resumen'   => 'Cómo construir un ciclo MLOps que versiona modelos, vigila el recall, reentrena solo y promueve al mejor modelo sin detener la API.',
        ],
        [
            'slug'      => 'explicar-modelo-churn-shap-negocio',
            'titulo'    => 'Explicar un modelo de churn con SHAP para equipos de negocio',
            'categoria' => 'Machine Learning',
            'imagen'    => '/blog-shap.jpg',
            'fecha'     => '2026-11-18',
            'resumen'   => 'Cómo convertir una probabilidad de fuga en razones claras y accionables que el área comercial entienda y en las que pueda confiar.',
        ],
        [
            'slug'      => 'robustez-rag-espanol-informal',
            'titulo'    => '¿Qué tan robusto es un sistema RAG frente al español informal?',
            'categoria' => 'NLP / LLMs',
            'imagen'    => '/blog-rag.jpg',
            'fecha'     => '2026-11-18',
            'resumen'   => 'Informalidad, errores ortográficos y regionalismos: dónde se rompe un RAG, cómo medirlo y qué estrategias lo hacen más robusto.',
        ],
    ],
];

function e(string $s): string { return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }

function icono(string $n): string {
    $p = [
        'model' => '<path d="M12 3v3m0 12v3M3 12h3m12 0h3M5.6 5.6l2.1 2.1m8.6 8.6 2.1 2.1M5.6 18.4l2.1-2.1m8.6-8.6 2.1-2.1"/><circle cx="12" cy="12" r="3.5"/>',
        'cloud' => '<path d="M7 18h10a4 4 0 0 0 .6-7.95A6 6 0 0 0 6.2 9.5 4.25 4.25 0 0 0 7 18Z"/>',
        'code'  => '<path d="m8 8-4 4 4 4m8-8 4 4-4 4M14 5l-4 14"/>',
        'chart' => '<path d="M4 20h16M7 16v-5m5 5V7m5 9v-8"/>',
        'mail'  => '<rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/>',
        'github'=> '<path d="M9 19c-4 1.3-4-2-6-2.5m12 5v-3.4a3 3 0 0 0-.8-2.3c2.7-.3 5.6-1.4 5.6-6a4.7 4.7 0 0 0-1.3-3.2 4.3 4.3 0 0 0-.1-3.2s-1-.3-3.4 1.3a11.6 11.6 0 0 0-6 0C6.6 2.9 5.6 3.2 5.6 3.2a4.3 4.3 0 0 0-.1 3.2A4.7 4.7 0 0 0 4.2 9.6c0 4.6 2.8 5.7 5.5 6a3 3 0 0 0-.8 2.3V22"/>',
        'linkedin' => '<rect x="3" y="3" width="18" height="18" rx="2"/><path d="M8 10v7M8 7v.01M12 17v-4a2 2 0 0 1 4 0v4m-4-7v7"/>',
        'download' => '<path d="M12 4v11m0 0-4-4m4 4 4-4M5 20h14"/>',
        'phone' => '<path d="M5 4h4l2 5-2.5 1.5a11 11 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2"/>',
        'pin'   =>'<path d="M12 21s-7-6.2-7-11.5A7 7 0 0 1 19 9.5C19 14.8 12 21 12 21Z"/><circle cx="12" cy="9.5" r="2.5"/>',
        'cap'   => '<path d="m2 9 10-5 10 5-10 5L2 9Z"/><path d="M6 11v5c3 2 9 2 12 0v-5"/>',
        'arrow' => '<path d="M5 12h14m-5-5 5 5-5 5"/>',
    ];
    return '<svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . ($p[$n] ?? '') . '</svg>';
}

// ============================================================================
//  ARTÍCULOS DEL BLOG — cada uno se publica en /blog/{slug}
// ============================================================================
$articulos = [];

$articulos['mlops-mlflow-reentrenamiento-automatico'] = [
    'cuerpo' => <<<'HTML'
<p>Entrenar un buen modelo en un notebook es la parte fácil. Lo difícil empieza el día después de ponerlo en producción: los datos cambian, el comportamiento de los usuarios cambia y el modelo que ayer tenía un recall excelente hoy empieza a fallar sin que nadie lo note. MLOps es, en esencia, la disciplina de hacer que ese deterioro sea <strong>visible, medible y corregible</strong> de forma automática.</p>
<p>En este artículo explico un ciclo MLOps práctico construido con MLflow: versionado de modelos, monitoreo de una métrica clave, reentrenamiento automático, comparación <em>champion/challenger</em> y recarga del modelo sin detener la API.</p>

<h2>1. Todo experimento se registra</h2>
<p>El primer principio es simple: si un modelo no está registrado, no existe. Cada entrenamiento debe dejar rastro de sus parámetros, métricas, datos usados y el artefacto final. MLflow lo resuelve con muy poco código, y servicios como DagsHub ofrecen un servidor de tracking remoto sin necesidad de montar infraestructura propia.</p>
<pre><code>import mlflow
import mlflow.xgboost
from xgboost import XGBClassifier
from sklearn.metrics import recall_score, f1_score

mlflow.set_experiment("churn")

with mlflow.start_run() as run:
    params = {"max_depth": 5, "n_estimators": 400, "learning_rate": 0.05}
    model = XGBClassifier(**params).fit(X_train, y_train)

    y_pred = model.predict(X_val)
    mlflow.log_params(params)
    mlflow.log_metrics({
        "recall": recall_score(y_val, y_pred),
        "f1": f1_score(y_val, y_pred),
    })
    mlflow.xgboost.log_model(model, "model", registered_model_name="churn")</code></pre>
<p>Con <code>registered_model_name</code>, cada ejecución crea una nueva versión en el <strong>Model Registry</strong>. Ese registro es la fuente de verdad: la API nunca carga un archivo suelto, siempre carga “la versión que hoy es campeona”.</p>

<h2>2. Champion y challenger con alias</h2>
<p>En lugar de mover archivos entre carpetas, uso <strong>alias</strong> del registro. El alias <code>champion</code> apunta a la versión que está sirviendo predicciones; cualquier versión nueva es un <code>challenger</code> hasta que demuestre ser mejor sobre el mismo conjunto de evaluación.</p>
<pre><code>from mlflow import MlflowClient

client = MlflowClient()

def promover_si_mejora(nueva_version: str, metrica: str = "recall", margen: float = 0.01):
    champion = client.get_model_version_by_alias("churn", "champion")
    m_champion = client.get_run(champion.run_id).data.metrics[metrica]

    challenger = client.get_model_version("churn", nueva_version)
    m_challenger = client.get_run(challenger.run_id).data.metrics[metrica]

    if m_challenger &gt;= m_champion + margen:
        client.set_registered_model_alias("churn", "champion", nueva_version)
        return True
    return False</code></pre>
<p>El <strong>margen</strong> evita promover modelos que solo son “mejores” por ruido estadístico. Y como la comparación se hace con datos recientes y con el mismo criterio, la decisión es reproducible y auditable.</p>

<h2>3. Monitorear la métrica que le importa al negocio</h2>
<p>En un problema de fuga de clientes, el error más caro suele ser no detectar a un cliente que se va. Por eso la métrica de vigilancia es el <strong>recall</strong>, no la exactitud. Cuando llegan las etiquetas reales (por ejemplo, quién canceló efectivamente al cierre del mes), se calcula el recall del modelo en producción y se compara contra un umbral.</p>
<pre><code>UMBRAL_RECALL = 0.75

def revisar_y_reentrenar(datos_recientes):
    recall_actual = evaluar_champion(datos_recientes)
    if recall_actual &lt; UMBRAL_RECALL:
        version = entrenar_y_registrar(datos_recientes)   # nuevo challenger
        promover_si_mejora(version)</code></pre>
<p>Este disparador puede ejecutarse como tarea programada. Lo importante es que la decisión de reentrenar no depende de que alguien recuerde revisar un dashboard.</p>

<h2>4. Recargar el modelo sin detener el servicio</h2>
<p>La última pieza es que la API se entere del cambio. Si el servicio carga <code>models:/churn@champion</code>, basta con volver a resolver el alias para obtener la nueva versión. En FastAPI se puede exponer un endpoint interno de recarga o revisar periódicamente si el alias cambió:</p>
<pre><code>import mlflow.pyfunc
from fastapi import FastAPI

app = FastAPI()
estado = {"modelo": mlflow.pyfunc.load_model("models:/churn@champion")}

@app.post("/internal/reload")
def recargar():
    nuevo = mlflow.pyfunc.load_model("models:/churn@champion")
    estado["modelo"] = nuevo          # reemplazo atómico de la referencia
    return {"status": "ok"}

@app.post("/predict")
def predecir(cliente: dict):
    return {"churn": float(estado["modelo"].predict([cliente])[0])}</code></pre>
<p>El modelo nuevo se carga completo en memoria <em>antes</em> de reemplazar la referencia, así que las peticiones en curso siguen usando el modelo anterior y ninguna falla durante el cambio.</p>

<h2>Lo que me llevo</h2>
<ul>
  <li><strong>El registro de modelos es el contrato</strong> entre ciencia de datos e ingeniería: la API solo conoce un alias.</li>
  <li><strong>Monitorea la métrica de negocio</strong>, no la que se ve bonita en el reporte.</li>
  <li><strong>Automatiza la decisión, no solo el entrenamiento</strong>: champion/challenger con un margen explícito.</li>
  <li><strong>Despliega sin downtime</strong>: carga primero, reemplaza después.</li>
</ul>
<p>Con estas cuatro piezas, un modelo deja de ser un experimento y se convierte en un producto que se mantiene sano por sí mismo.</p>
HTML,
];

$articulos['explicar-modelo-churn-shap-negocio'] = [
    'cuerpo' => <<<'HTML'
<p>Un modelo de fuga de clientes puede tener un AUC excelente y, aun así, no servir para nada si el equipo comercial no confía en él. La pregunta que siempre llega es la misma: <em>“¿por qué el modelo dice que este cliente se va a ir?”</em>. SHAP es la herramienta que uso para responderla de forma rigurosa y, sobre todo, comprensible.</p>

<h2>Qué es SHAP en una frase</h2>
<p>SHAP (<em>SHapley Additive exPlanations</em>) reparte la predicción de un modelo entre sus variables, de modo que la suma de las contribuciones más un valor base da exactamente la predicción. Viene de la teoría de juegos: cada variable es un “jugador” y SHAP calcula cuánto aportó cada una al resultado.</p>
<p>Para modelos de árboles como XGBoost o Random Forest, <code>TreeExplainer</code> calcula estos valores de forma exacta y rápida, lo que permite explicar miles de clientes en segundos.</p>
<pre><code>import shap

explainer = shap.TreeExplainer(modelo)
valores = explainer(X_clientes)        # un objeto Explanation por cliente

# Explicación global: qué variables pesan más en todo el portafolio
shap.plots.beeswarm(valores)

# Explicación local: por qué ESTE cliente tiene riesgo alto
shap.plots.waterfall(valores[42])</code></pre>

<h2>Dos niveles de explicación</h2>
<p><strong>Global</strong>: ¿qué factores impulsan la fuga en general? El gráfico <em>beeswarm</em> muestra, por ejemplo, si la antigüedad, el número de productos contratados o la actividad reciente son los factores dominantes. Esto le sirve a la gerencia para definir estrategia.</p>
<p><strong>Local</strong>: ¿por qué este cliente en particular? El gráfico <em>waterfall</em> parte del riesgo promedio y muestra cómo cada variable lo sube o lo baja. Esto le sirve al ejecutivo que va a llamar al cliente mañana.</p>

<h2>Traducir valores SHAP a lenguaje de negocio</h2>
<p>Un gerente no necesita ver “<code>Balance: +0.37</code>”. Necesita una frase. Por eso, al servir las explicaciones desde una API, transformo las contribuciones principales en texto:</p>
<pre><code>def explicar_cliente(idx, top=3):
    v = valores[idx]
    orden = abs(v.values).argsort()[::-1][:top]
    razones = []
    for i in orden:
        nombre = NOMBRES_NEGOCIO[v.feature_names[i]]
        sentido = "aumenta" if v.values[i] &gt; 0 else "reduce"
        razones.append(f"{nombre} {sentido} el riesgo de fuga")
    return razones

# ["Tener un solo producto contratado aumenta el riesgo de fuga",
#  "La inactividad en los últimos meses aumenta el riesgo de fuga",
#  "La antigüedad del cliente reduce el riesgo de fuga"]</code></pre>
<p>El diccionario <code>NOMBRES_NEGOCIO</code> es pequeño pero crucial: convierte nombres técnicos de columnas en conceptos que el área comercial reconoce.</p>

<h2>De la explicación a la acción</h2>
<p>La explicación más útil es la que sugiere qué hacer. Si el principal factor de riesgo de un cliente es tener un único producto, la acción natural es una oferta de venta cruzada; si es la inactividad, una campaña de reactivación. Agrupar a los clientes por su razón principal de riesgo permite diseñar <strong>campañas de retención segmentadas</strong> en lugar de un mensaje genérico para todos.</p>

<h2>Precauciones que siempre comunico</h2>
<ul>
  <li><strong>SHAP explica el modelo, no la realidad.</strong> Indica qué variables usa el modelo para decidir, no que esas variables <em>causen</em> la fuga.</li>
  <li><strong>Las variables correlacionadas se reparten el crédito.</strong> Si dos variables dicen casi lo mismo, su importancia puede verse diluida entre ambas.</li>
  <li><strong>Una explicación no corrige un mal modelo.</strong> Si los datos tienen sesgos, SHAP los hará visibles, que es justamente parte de su valor.</li>
</ul>

<h2>Conclusión</h2>
<p>La explicabilidad no es un adorno académico: es lo que convierte una probabilidad en una conversación con el cliente. Con SHAP, cada predicción viene acompañada de sus razones, y eso es lo que hace que un modelo pase de ser una caja negra a una herramienta de trabajo diaria.</p>
HTML,
];

$articulos['robustez-rag-espanol-informal'] = [
    'cuerpo' => <<<'HTML'
<p>Los sistemas RAG (<em>Retrieval-Augmented Generation</em>) se evalúan casi siempre con preguntas bien escritas. Pero los usuarios reales no escriben así. Escriben <em>“q requisitos piden pa sacar mi credito”</em>, usan expresiones locales y cometen errores de tipeo. La pregunta que motiva mi tesis es directa: <strong>¿cuánto se degrada un sistema RAG cuando la consulta está en español informal?</strong></p>

<h2>Cómo funciona un RAG y dónde puede romperse</h2>
<p>Un sistema RAG tiene dos etapas. Primero, un <strong>recuperador</strong> convierte la pregunta en un vector (<em>embedding</em>) y busca los fragmentos de documentos más parecidos. Después, un <strong>generador</strong> (un LLM) redacta la respuesta usando esos fragmentos como contexto.</p>
<p>La variación lingüística puede afectar a las dos etapas, pero el punto más frágil suele ser el recuperador: si la consulta informal produce un embedding alejado del documento correcto, el LLM nunca recibe la información que necesita, y ningún generador, por bueno que sea, puede responder bien sin el contexto adecuado.</p>

<h2>Tres tipos de variación</h2>
<ul>
  <li><strong>Informalidad:</strong> abreviaturas y registro coloquial (“q”, “pa”, “xq”, “porfa”), omisión de tildes y signos de puntuación.</li>
  <li><strong>Errores ortográficos:</strong> letras cambiadas, omitidas o duplicadas, confusiones como b/v, s/c/z o ll/y.</li>
  <li><strong>Regionalismos:</strong> palabras propias de un país o región que no aparecen en los documentos formales; por ejemplo, “chamba” por <em>trabajo</em> en Perú.</li>
</ul>

<h2>Cómo medir la robustez</h2>
<p>La idea es comparar el mismo sistema con dos versiones de cada pregunta: la formal y su variante perturbada. Para que la comparación sea justa, ambas deben tener la misma respuesta correcta.</p>
<pre><code>def perturbar(texto: str) -&gt; dict:
    return {
        "formal":     texto,
        "informal":   a_registro_informal(texto),    # abreviaturas, sin tildes
        "ortografia": inyectar_errores(texto, p=0.08),
        "regional":   sustituir_regionalismos(texto),
    }

def recall_at_k(recuperador, consultas, k=5):
    aciertos = sum(doc_correcto in recuperador.buscar(q, k) for q, doc_correcto in consultas)
    return aciertos / len(consultas)</code></pre>
<p>Las métricas que conviene seguir son:</p>
<ul>
  <li><strong>Recall@k y MRR</strong> para el recuperador: ¿aparece el documento correcto entre los primeros resultados y en qué posición?</li>
  <li><strong>Fidelidad y exactitud de la respuesta</strong> para el generador: ¿la respuesta se apoya en el contexto y es correcta?</li>
  <li><strong>Caída relativa</strong> entre la versión formal y cada tipo de perturbación, que es el indicador directo de robustez.</li>
</ul>

<h2>Estrategias para hacerlo más robusto</h2>
<ul>
  <li><strong>Normalizar o reescribir la consulta</strong> antes de buscar: un LLM o un corrector puede convertir “q requisitos piden pa sacar mi credito” en una pregunta formal.</li>
  <li><strong>Búsqueda híbrida:</strong> combinar BM25 (léxica) con búsqueda densa (semántica), ya que cada una falla ante tipos distintos de variación.</li>
  <li><strong>Modelos entrenados en español</strong>, como BETO y sus variantes, o embeddings multilingües que hayan visto texto informal.</li>
  <li><strong>Aumentar los datos de ajuste</strong> con consultas perturbadas, para que el recuperador aprenda que ambas formas significan lo mismo.</li>
</ul>

<h2>Por qué importa</h2>
<p>Hay cerca de 500 millones de hablantes nativos de español, con enormes diferencias entre países y registros. Si los asistentes basados en RAG solo funcionan bien con español “de manual”, quienes escriben de forma más coloquial reciben peores respuestas. Medir y mejorar la robustez no es solo una cuestión técnica: es una condición para que estas herramientas sean útiles para todos.</p>
<p>En próximos artículos compartiré cómo construyo el conjunto de evaluación y qué aprendí comparando distintas estrategias.</p>
HTML,
];

// Metadatos del blog: se combinan con los títulos/categorías/imágenes de $perfil['blog']
foreach ($perfil['blog'] as $b) {
    $articulos[$b['slug']] += $b;
    $articulos[$b['slug']]['minutos'] = max(1, (int) ceil(str_word_count(strip_tags($articulos[$b['slug']]['cuerpo'])) / 200));
}

// --- Enrutamiento: /blog/{slug} muestra un artículo; el resto, la portada.
$ruta = rtrim(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH), '/');
$articulo = null;
if (preg_match('#^/blog(?:/([a-z0-9-]+))?$#', $ruta, $m)) {
    if (!empty($m[1]) && isset($articulos[$m[1]])) {
        $articulo = $articulos[$m[1]];
    } else {
        header('Location: /#blog', true, 302);
        exit;
    }
}

function fecha_es(string $iso): string {
    $meses = ['enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre'];
    [$y, $mo, $d] = explode('-', $iso);
    return (int)$d . ' de ' . $meses[(int)$mo - 1] . ' de ' . $y;
}

$c = $perfil['contacto'];
$anio = date('Y');
$base = $articulo ? '/' : '';
$meta_titulo = $articulo ? $articulo['titulo'] . ' — ' . $perfil['nombre'] : $perfil['nombre'] . ' — Data Science & Machine Learning';
$meta_desc   = $articulo ? $articulo['resumen'] : $perfil['nombre'] . ' · ' . $perfil['titulo'];
$meta_img    = $articulo ? $articulo['imagen'] : $perfil['foto'];
?><!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= e($meta_titulo) ?></title>
<meta name="description" content="<?= e($meta_desc) ?>">
<meta property="og:title" content="<?= e($meta_titulo) ?>">
<meta property="og:description" content="<?= e($meta_desc) ?>">
<meta property="og:image" content="<?= e($meta_img) ?>">
<meta property="og:type" content="<?= $articulo ? 'article' : 'website' ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@500&family=Manrope:wght@600;700;800&display=swap" rel="stylesheet">
<style>
:root{
  --navy-950:#071226; --navy-900:#0b1b36; --navy-800:#12274a; --navy-700:#1c3766;
  --blue:#2563eb; --blue-600:#1d4ed8; --sky:#60a5fa; --accent:#0ea5e9;
  --ink:#0f172a; --body:#334155; --muted:#64748b; --line:#e2e8f0;
  --bg:#ffffff; --bg-soft:#f6f8fb; --card:#ffffff;
  --radius:14px; --shadow:0 1px 2px rgba(15,23,42,.05),0 8px 24px -12px rgba(15,23,42,.18);
  --font:'Inter',system-ui,-apple-system,'Segoe UI',sans-serif;
  --display:'Manrope','Inter',sans-serif; --mono:'JetBrains Mono',ui-monospace,monospace;
}
*{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth;scroll-padding-top:76px}
body{font-family:var(--font);color:var(--body);background:var(--bg);line-height:1.65;font-size:16px;-webkit-font-smoothing:antialiased}
img{max-width:100%;display:block}
a{color:inherit;text-decoration:none}
.ico{width:20px;height:20px;flex:none}
.wrap{max-width:1160px;margin:0 auto;padding:0 24px}
section{padding:104px 0}
.soft{background:var(--bg-soft)}
.eyebrow{font-family:var(--mono);font-size:12.5px;letter-spacing:.14em;text-transform:uppercase;color:var(--blue);display:inline-flex;align-items:center;gap:10px}
.eyebrow::before{content:"";width:24px;height:2px;background:currentColor}
h1,h2,h3{font-family:var(--display);color:var(--ink);line-height:1.15;letter-spacing:-.02em}
h2{font-size:clamp(28px,3.6vw,40px);margin:14px 0 16px}
.lead{font-size:18px;color:var(--muted);max-width:640px}
.head{margin-bottom:56px}

/* Botones */
.btn{display:inline-flex;align-items:center;gap:10px;padding:13px 22px;border-radius:10px;font-weight:600;font-size:15px;transition:.2s;border:1px solid transparent;cursor:pointer}
.btn-primary{background:var(--blue);color:#fff;box-shadow:0 8px 20px -8px rgba(37,99,235,.6)}
.btn-primary:hover{background:var(--blue-600);transform:translateY(-1px)}
.btn-ghost{border-color:rgba(255,255,255,.25);color:#fff}
.btn-ghost:hover{background:rgba(255,255,255,.08)}
.btn-outline{border-color:var(--line);color:var(--ink);background:#fff}
.btn-outline:hover{border-color:var(--blue);color:var(--blue)}

/* Navegación */
.nav{position:fixed;inset:0 0 auto;z-index:50;transition:.25s;border-bottom:1px solid transparent}
.nav.scrolled{background:rgba(255,255,255,.92);backdrop-filter:blur(12px);border-color:var(--line)}
.nav .wrap{display:flex;align-items:center;justify-content:space-between;height:72px}
.brand{display:flex;align-items:center;gap:12px;font-family:var(--display);font-weight:800;color:#fff;font-size:17px}
.brand .mark{width:38px;height:38px;border-radius:50%;object-fit:cover;object-position:center 25%;border:2px solid var(--sky);box-shadow:0 0 0 3px rgba(96,165,250,.2)}
.nav.scrolled .brand{color:var(--ink)}
.menu{display:flex;gap:4px;list-style:none;align-items:center}
.menu a{padding:8px 12px;border-radius:8px;font-size:14.5px;font-weight:500;color:rgba(255,255,255,.8);transition:.2s}
.menu a:hover,.menu a.active{color:#fff;background:rgba(255,255,255,.08)}
.nav.scrolled .menu a{color:var(--body)}
.nav.scrolled .menu a:hover,.nav.scrolled .menu a.active{color:var(--blue);background:#eff4ff}
.menu .btn{padding:9px 16px;margin-left:8px;color:#fff!important;background:var(--blue)!important}
.burger{display:none;background:none;border:0;color:#fff;cursor:pointer;padding:8px}
.nav.scrolled .burger{color:var(--ink)}
.burger svg{width:26px;height:26px}

/* Hero */
.hero{position:relative;background:radial-gradient(1200px 600px at 85% -10%,rgba(37,99,235,.35),transparent 60%),radial-gradient(800px 500px at -10% 110%,rgba(14,165,233,.18),transparent 60%),var(--navy-950);color:#cbd5e1;padding:160px 0 120px;overflow:hidden}
.hero::after{content:"";position:absolute;inset:0;background-image:linear-gradient(rgba(255,255,255,.035) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,.035) 1px,transparent 1px);background-size:56px 56px;mask-image:linear-gradient(to bottom,#000 30%,transparent);pointer-events:none}
.hero .wrap{position:relative;z-index:1;display:grid;grid-template-columns:1.15fr .85fr;gap:64px;align-items:center}
.badge{display:inline-flex;align-items:center;gap:10px;padding:7px 14px;border-radius:99px;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.12);font-size:13.5px;color:#e2e8f0}
.badge i{width:8px;height:8px;border-radius:50%;background:#22c55e;box-shadow:0 0 0 4px rgba(34,197,94,.2)}
.hero h1{color:#fff;font-size:clamp(40px,6vw,66px);margin:22px 0 14px;font-weight:800}
.hero .role{font-family:var(--display);font-size:clamp(20px,2.4vw,26px);font-weight:600;color:#e2e8f0;min-height:1.4em}
.hero .role .typed{color:var(--sky)}
.hero .role .caret{display:inline-block;width:2px;height:1em;background:var(--sky);margin-left:3px;vertical-align:-3px;animation:blink 1s steps(1) infinite}
@keyframes blink{50%{opacity:0}}
.hero p.intro{margin:20px 0 34px;font-size:17.5px;max-width:560px;color:#94a3b8}
.hero .ctas{display:flex;gap:12px;flex-wrap:wrap}
.hero .meta{display:flex;gap:22px;margin-top:40px;flex-wrap:wrap;font-size:14px;color:#94a3b8}
.hero .meta span,.hero .meta a{display:inline-flex;align-items:center;gap:8px}
.hero .meta a:hover{color:#fff}
.portrait{position:relative;justify-self:end;width:100%;max-width:420px}
.portrait .frame{border-radius:24px;overflow:hidden;border:1px solid rgba(255,255,255,.14);box-shadow:0 30px 60px -20px rgba(0,0,0,.6);aspect-ratio:4/5;background:var(--navy-800)}
.portrait .frame img{width:100%;height:100%;object-fit:cover;object-position:center 20%}
.portrait::before{content:"";position:absolute;inset:-14px -14px 14px 14px;border-radius:28px;border:1px solid rgba(96,165,250,.35);z-index:-1}
.float{position:absolute;background:#fff;color:var(--ink);border-radius:12px;padding:12px 16px;box-shadow:var(--shadow);font-size:13px;display:flex;gap:12px;align-items:center}
.float b{font-family:var(--display);font-size:20px;color:var(--blue)}
.float.f1{left:-36px;bottom:56px}
.float.f2{right:-20px;top:36px}
.float .dot{width:34px;height:34px;border-radius:9px;background:#eff4ff;color:var(--blue);display:grid;place-items:center}

/* Métricas */
.stats{margin-top:-56px;position:relative;z-index:2}
.stats .grid{display:grid;grid-template-columns:repeat(4,1fr);background:#fff;border:1px solid var(--line);border-radius:var(--radius);box-shadow:var(--shadow)}
.stat{padding:28px 26px;border-right:1px solid var(--line)}
.stat:last-child{border-right:0}
.stat b{display:block;font-family:var(--display);font-size:34px;color:var(--ink);font-weight:800;letter-spacing:-.02em}
.stat span{font-size:14px;color:var(--muted)}

/* Sobre mí */
.about{display:grid;grid-template-columns:.9fr 1.1fr;gap:72px;align-items:center}
.about .pic{border-radius:20px;overflow:hidden;box-shadow:var(--shadow);aspect-ratio:4/3}
.about .pic img{width:100%;height:100%;object-fit:cover}
.about p{margin-bottom:16px;font-size:17px}
.quote{border-left:3px solid var(--blue);padding:4px 0 4px 18px;color:var(--ink);font-weight:500;margin:24px 0}
.facts{display:grid;grid-template-columns:1fr 1fr;gap:14px;margin-top:28px}
.fact{display:flex;gap:12px;align-items:flex-start;padding:14px;border:1px solid var(--line);border-radius:12px;background:#fff}
.fact .ico{color:var(--blue);margin-top:2px}
.fact small{display:block;color:var(--muted);font-size:12.5px}
.fact strong{color:var(--ink);font-size:14.5px;font-weight:600}

/* Servicios */
.cards{display:grid;grid-template-columns:repeat(4,1fr);gap:20px}
.card{background:var(--card);border:1px solid var(--line);border-radius:var(--radius);padding:28px;transition:.25s}
.card:hover{transform:translateY(-4px);box-shadow:var(--shadow);border-color:#c7d7fe}
.card .ic{width:46px;height:46px;border-radius:12px;background:#eff4ff;color:var(--blue);display:grid;place-items:center;margin-bottom:20px}
.card .ic .ico{width:24px;height:24px}
.card h3{font-size:18px;margin-bottom:10px}
.card p{font-size:15px;color:var(--muted)}

/* Experiencia */
.timeline{position:relative;max-width:900px}
.timeline::before{content:"";position:absolute;left:11px;top:8px;bottom:8px;width:2px;background:linear-gradient(var(--blue),var(--line))}
.job{position:relative;padding-left:52px;margin-bottom:28px}
.job::before{content:"";position:absolute;left:4px;top:26px;width:16px;height:16px;border-radius:50%;background:#fff;border:3px solid var(--blue)}
.job .box{background:#fff;border:1px solid var(--line);border-radius:var(--radius);padding:28px 30px;transition:.25s}
.job .box:hover{box-shadow:var(--shadow)}
.job .top{display:flex;justify-content:space-between;gap:16px;flex-wrap:wrap;margin-bottom:4px}
.job h3{font-size:19px}
.job .date{font-family:var(--mono);font-size:12.5px;color:var(--blue);background:#eff4ff;padding:4px 10px;border-radius:6px;white-space:nowrap;height:fit-content}
.job .co{color:var(--muted);font-weight:500;margin-bottom:14px}
.job ul{list-style:none;display:grid;gap:8px}
.job li{position:relative;padding-left:22px;font-size:15.5px}
.job li::before{content:"";position:absolute;left:4px;top:.7em;width:7px;height:7px;border-radius:2px;background:var(--sky)}
.chips{display:flex;flex-wrap:wrap;gap:8px;margin-top:18px}
.gallery{display:grid;grid-template-columns:1.6fr 1fr;gap:12px;margin-top:22px}
.gallery figure{border-radius:10px;overflow:hidden;height:230px;border:1px solid var(--line)}
.gallery img{width:100%;height:100%;object-fit:cover;transition:transform .5s}
.gallery figure:hover img{transform:scale(1.04)}
@media (max-width:560px){.gallery{grid-template-columns:1fr}.gallery figure{height:200px}}
.chip{font-size:12.5px;font-weight:500;padding:5px 11px;border-radius:7px;background:var(--bg-soft);border:1px solid var(--line);color:var(--body)}

/* Proyectos */
.projects{display:grid;grid-template-columns:repeat(3,1fr);gap:22px}
.project{position:relative;background:#fff;border:1px solid var(--line);border-radius:var(--radius);padding:30px;display:flex;flex-direction:column;overflow:hidden;transition:.3s}
.project::before{content:"";position:absolute;inset:0 0 auto;height:4px;background:linear-gradient(90deg,var(--blue),var(--accent));transform:scaleX(0);transform-origin:left;transition:.35s}
.project:hover{transform:translateY(-6px);box-shadow:0 24px 48px -24px rgba(15,23,42,.35)}
.project:hover::before{transform:scaleX(1)}
.project .num{font-family:var(--mono);font-size:13px;color:var(--muted)}
.project .tag{align-self:flex-start;font-size:12px;font-weight:600;color:var(--blue);background:#eff4ff;padding:5px 10px;border-radius:99px;margin:14px 0 16px}
.project .tag.win{color:#a16207;background:#fef9c3}
.project h3{font-size:19px;margin-bottom:10px}
.project p{color:var(--muted);font-size:15px;flex:1}

/* Stack */
.skills{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:20px}
.skill{background:#fff;border:1px solid var(--line);border-radius:var(--radius);padding:26px}
.skill h3{font-size:15px;font-family:var(--mono);font-weight:500;color:var(--blue);text-transform:uppercase;letter-spacing:.08em;margin-bottom:16px}

/* Educación */
.edu{display:grid;grid-template-columns:1.3fr 1fr;gap:22px}
.edu .card{display:flex;gap:20px;align-items:flex-start}
.edu .card .ic{margin:0;flex:none}
.edu h3{margin-bottom:4px}
.edu .date{font-family:var(--mono);font-size:12.5px;color:var(--blue);margin-top:10px}
.lang{margin-bottom:18px}
.lang:last-child{margin-bottom:0}
.lang .row{display:flex;justify-content:space-between;font-size:15px;margin-bottom:8px}
.lang .row strong{color:var(--ink)}
.bar{height:8px;border-radius:99px;background:var(--bg-soft);overflow:hidden;border:1px solid var(--line)}
.bar i{display:block;height:100%;width:0;background:linear-gradient(90deg,var(--blue),var(--accent));border-radius:99px;transition:width 1.2s ease}

/* Blog */
.posts{display:grid;grid-template-columns:repeat(3,1fr);gap:22px}
.post{border:1px solid var(--line);border-radius:var(--radius);overflow:hidden;background:#fff;transition:.25s}
.post:hover{box-shadow:var(--shadow)}
.post .cover{height:180px;background:var(--navy-900);position:relative;overflow:hidden}
.post .cover img{width:100%;height:100%;object-fit:cover;transition:transform .5s}
.post .cover::after{content:"";position:absolute;inset:0;background:linear-gradient(180deg,rgba(7,18,38,.1),rgba(7,18,38,.55))}
.post:hover .cover img{transform:scale(1.05)}
.post .soon{position:absolute;z-index:1;top:14px;right:14px;font-family:var(--font);font-size:11.5px;font-weight:600;letter-spacing:.04em;color:#fff;background:rgba(7,18,38,.55);backdrop-filter:blur(6px);border:1px solid rgba(255,255,255,.25);padding:4px 10px;border-radius:99px}
.post{display:flex;flex-direction:column}
.post:hover{transform:translateY(-4px)}
.post .body{padding:24px;display:flex;flex-direction:column;flex:1}
.post small{color:var(--blue);font-weight:600;font-size:12.5px;text-transform:uppercase;letter-spacing:.06em}
.post h3{font-size:17px;margin-top:8px}
.post p{font-size:14.5px;color:var(--muted);margin:10px 0 18px;flex:1}
.post .read{display:inline-flex;align-items:center;gap:8px;font-weight:600;font-size:14.5px;color:var(--blue)}
.post .read .ico{width:16px;height:16px;transition:transform .2s}
.post:hover .read .ico{transform:translateX(4px)}

/* Página de artículo */
.narrow{max-width:760px}
.article-head{background:var(--bg-soft);border-bottom:1px solid var(--line);padding:130px 0 48px}
.back{display:inline-flex;align-items:center;gap:8px;font-size:14px;font-weight:500;color:var(--muted);margin-bottom:28px}
.back:hover{color:var(--blue)}
.back .ico{width:16px;height:16px}
.article-head h1{font-size:clamp(30px,4.4vw,44px);font-weight:800;margin:14px 0 16px}
.dek{font-size:19px;color:var(--muted)}
.byline{display:flex;align-items:center;gap:14px;margin-top:28px}
.byline img{width:44px;height:44px;border-radius:50%;object-fit:cover;object-position:center 25%}
.byline strong{display:block;color:var(--ink);font-size:15px}
.byline span{font-size:13.5px;color:var(--muted)}
.article-cover{margin:40px 0 8px;border-radius:var(--radius);overflow:hidden;aspect-ratio:16/9;box-shadow:var(--shadow)}
.article-cover img{width:100%;height:100%;object-fit:cover}
.prose{font-size:17.5px;line-height:1.8;color:var(--body);padding:24px 0 8px}
.prose p{margin:0 0 22px}
.prose h2{font-size:26px;margin:44px 0 16px}
.prose strong{color:var(--ink)}
.prose ul{margin:0 0 22px 22px;display:grid;gap:10px}
.prose li::marker{color:var(--blue)}
.prose code{font-family:var(--mono);font-size:.86em;background:#eff4ff;color:var(--blue-600);padding:2px 6px;border-radius:5px}
.prose pre{background:var(--navy-950);color:#e2e8f0;border-radius:12px;padding:22px 24px;overflow-x:auto;margin:0 0 26px;font-size:14px;line-height:1.65;border:1px solid var(--navy-800)}
.prose pre code{background:none;color:inherit;padding:0;font-size:inherit}
.article-cta{display:flex;align-items:center;justify-content:space-between;gap:20px;flex-wrap:wrap;background:var(--navy-950);color:#94a3b8;border-radius:var(--radius);padding:28px 30px;margin:32px 0 56px}
.article-cta strong{display:block;color:#fff;font-family:var(--display);font-size:19px}
.more-title{font-size:22px;margin-bottom:18px}
.more{display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-bottom:96px}
.more-item{border:1px solid var(--line);border-radius:12px;padding:20px;transition:.2s}
.more-item:hover{border-color:var(--blue);box-shadow:var(--shadow)}
.more-item small{display:block;color:var(--blue);font-weight:600;font-size:12px;text-transform:uppercase;letter-spacing:.06em;margin-bottom:6px}
.more-item strong{color:var(--ink);font-size:15.5px;line-height:1.4}
@media (max-width:560px){.more{grid-template-columns:1fr}.prose{font-size:16.5px}.prose pre{font-size:13px;padding:18px}.article-head{padding-top:110px}}

/* Contacto */
.contact{background:var(--navy-950);color:#94a3b8;position:relative;overflow:hidden}
.contact::before{content:"";position:absolute;inset:0;background:radial-gradient(700px 400px at 80% 0,rgba(37,99,235,.3),transparent 60%)}
.contact .wrap{position:relative;display:grid;grid-template-columns:1fr 1fr;gap:64px;align-items:center}
.contact h2{color:#fff}
.contact .eyebrow{color:var(--sky)}
.channels{display:grid;gap:14px}
.channel{display:flex;align-items:center;gap:16px;padding:18px 20px;border-radius:12px;background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.1);color:#e2e8f0;transition:.2s}
.channel:hover{background:rgba(255,255,255,.08);border-color:rgba(96,165,250,.5)}
.channel .ic{width:42px;height:42px;border-radius:10px;background:rgba(37,99,235,.2);color:var(--sky);display:grid;place-items:center}
.channel small{display:block;color:#64748b;font-size:12.5px}
.channel span{word-break:break-all}
.channel .arrow{margin-left:auto;opacity:.5}
footer{background:var(--navy-950);border-top:1px solid rgba(255,255,255,.08);color:#64748b;font-size:14px;padding:26px 0}
footer .wrap{display:flex;justify-content:space-between;gap:12px;flex-wrap:wrap}

/* Animaciones */
.reveal{opacity:0;transform:translateY(22px);transition:opacity .7s ease,transform .7s ease}
.reveal.in{opacity:1;transform:none}
@media (prefers-reduced-motion:reduce){*{animation:none!important;transition:none!important}.reveal{opacity:1;transform:none}}

/* Responsive */
@media (max-width:1024px){
  .cards{grid-template-columns:repeat(2,1fr)}
  .float.f1{left:-10px}.float.f2{right:-6px}
}
@media (max-width:900px){
  section{padding:80px 0}
  .menu{position:fixed;top:72px;left:0;right:0;flex-direction:column;align-items:stretch;background:#fff;padding:14px 16px 20px;border-bottom:1px solid var(--line);box-shadow:var(--shadow);display:none}
  .menu.open{display:flex}
  .menu a{color:var(--body)!important;padding:12px}
  .menu .btn{margin:8px 0 0;justify-content:center}
  .burger{display:block}
  .hero{padding:130px 0 110px}
  .hero .wrap,.about,.contact .wrap,.edu{grid-template-columns:1fr;gap:48px}
  .portrait{justify-self:center;max-width:360px}
  .stats .grid{grid-template-columns:repeat(2,1fr)}
  .stat:nth-child(2){border-right:0}
  .stat:nth-child(-n+2){border-bottom:1px solid var(--line)}
  .projects,.posts{grid-template-columns:1fr}
}
@media (max-width:560px){
  .wrap{padding:0 16px}
  .cards,.facts{grid-template-columns:1fr}
  .stats .grid{grid-template-columns:1fr}
  .stat{border-right:0;border-bottom:1px solid var(--line)}
  .stat:last-child{border-bottom:0}
  .float{display:none}
  .job{padding-left:36px}
  .job .box{padding:22px}
  .timeline::before{left:7px}.job::before{left:0}
  .hero .ctas .btn{flex:1;justify-content:center}
}
</style>
</head>
<body>

<nav class="nav<?= $articulo ? ' scrolled' : '' ?>" id="nav">
  <div class="wrap">
    <a href="<?= $base ?>#inicio" class="brand"><img class="mark" src="<?= e($perfil['foto']) ?>" alt="" width="38" height="38"><?= e($perfil['nombre']) ?></a>
    <button class="burger" id="burger" aria-label="Abrir menú"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M4 7h16M4 12h16M4 17h16"/></svg></button>
    <ul class="menu" id="menu">
      <li><a href="<?= $base ?>#sobre-mi">Sobre mí</a></li>
      <li><a href="<?= $base ?>#servicios">Servicios</a></li>
      <li><a href="<?= $base ?>#experiencia">Experiencia</a></li>
      <li><a href="<?= $base ?>#proyectos">Proyectos</a></li>
      <li><a href="<?= $base ?>#habilidades">Stack</a></li>
      <li><a href="<?= $base ?>#educacion">Educación</a></li>
      <li><a href="<?= $base ?>#blog">Blog</a></li>
      <li><a href="<?= $base ?>#contacto" class="btn">Contacto</a></li>
    </ul>
  </div>
</nav>

<?php if ($articulo): ?>
<main class="article">
  <header class="article-head">
    <div class="wrap narrow">
      <a href="/#blog" class="back"><span style="display:inline-flex;transform:rotate(180deg)"><?= icono('arrow') ?></span> Volver al blog</a>
      <span class="eyebrow"><?= e($articulo['categoria']) ?></span>
      <h1><?= e($articulo['titulo']) ?></h1>
      <p class="dek"><?= e($articulo['resumen']) ?></p>
      <div class="byline">
        <img src="<?= e($perfil['foto']) ?>" alt="" width="44" height="44">
        <div><strong><?= e($perfil['nombre']) ?></strong><span><?= fecha_es($articulo['fecha']) ?> · <?= $articulo['minutos'] ?> min de lectura</span></div>
      </div>
    </div>
  </header>
  <div class="wrap narrow">
    <figure class="article-cover"><img src="<?= e($articulo['imagen']) ?>" alt=""></figure>
    <div class="prose"><?= $articulo['cuerpo'] ?></div>
    <div class="article-cta">
      <div><strong>¿Te interesa este tema?</strong><span>Conversemos sobre cómo aplicarlo en tu equipo o proyecto.</span></div>
      <a href="mailto:<?= e($c['email']) ?>" class="btn btn-primary"><?= icono('mail') ?> Escríbeme</a>
    </div>
    <h2 class="more-title">Otros artículos</h2>
    <div class="more">
      <?php foreach ($perfil['blog'] as $b): if ($b['slug'] === $articulo['slug']) continue; ?>
        <a class="more-item" href="/blog/<?= e($b['slug']) ?>"><small><?= e($b['categoria']) ?></small><strong><?= e($b['titulo']) ?></strong></a>
      <?php endforeach; ?>
    </div>
  </div>
</main>
<?php else: ?>

<header class="hero" id="inicio">
  <div class="wrap">
    <div>
      <span class="badge"><i></i> Disponible para nuevas oportunidades</span>
      <h1><?= e($perfil['nombre']) ?></h1>
      <div class="role">Soy <span class="typed" id="typed"></span><span class="caret"></span></div>
      <p class="intro"><?= e($perfil['titulo']) ?>. Construyo soluciones de datos e inteligencia artificial de extremo a extremo: del modelo a producción.</p>
      <div class="ctas">
        <a href="#contacto" class="btn btn-primary">Hablemos <?= icono('arrow') ?></a>
        <a href="#proyectos" class="btn btn-ghost">Ver proyectos</a>
      </div>
      <div class="meta">
        <span><?= icono('pin') ?> <?= e($perfil['ubicacion']) ?></span>
        <a href="<?= e($c['linkedin']) ?>" target="_blank" rel="noopener"><?= icono('linkedin') ?> LinkedIn</a>
        <a href="<?= e($c['github']) ?>" target="_blank" rel="noopener"><?= icono('github') ?> GitHub</a>
      </div>
    </div>
    <div class="portrait">
      <div class="frame"><img src="<?= e($perfil['foto']) ?>" alt="Fotografía de <?= e($perfil['nombre']) ?>"></div>
      <div class="float f1"><span class="dot"><?= icono('model') ?></span><div><b>ML + MLOps</b><br>Del modelo a producción</div></div>
      <div class="float f2"><span class="dot"><?= icono('cloud') ?></span><div><b>Azure</b><br>Cloud &amp; IoT</div></div>
    </div>
  </div>
</header>

<div class="stats">
  <div class="wrap">
    <div class="grid reveal">
      <?php foreach ($perfil['metricas'] as $m): ?>
        <div class="stat"><b><?= e($m['valor']) ?></b><span><?= e($m['texto']) ?></span></div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<section id="sobre-mi">
  <div class="wrap about">
    <div class="pic reveal"><img src="<?= e($perfil['foto_alt']) ?>" alt="<?= e($perfil['nombre']) ?> en su espacio de trabajo" loading="lazy"></div>
    <div class="reveal">
      <span class="eyebrow">Sobre mí</span>
      <h2>Datos, modelos y software que generan valor de negocio</h2>
      <p><?= e($perfil['resumen']) ?></p>
      <p class="quote"><?= e($perfil['tesis']) ?></p>
      <div class="facts">
        <div class="fact"><?= icono('cap') ?><div><small>Formación</small><strong>Ing. de Sistemas — UNS</strong></div></div>
        <div class="fact"><?= icono('pin') ?><div><small>Ubicación</small><strong><?= e($perfil['ubicacion']) ?></strong></div></div>
        <div class="fact"><?= icono('model') ?><div><small>Especialidad</small><strong>Data Science &amp; ML</strong></div></div>
        <div class="fact"><?= icono('code') ?><div><small>Idiomas</small><strong>Español · Inglés</strong></div></div>
      </div>
    </div>
  </div>
</section>

<section id="servicios" class="soft">
  <div class="wrap">
    <div class="head reveal">
      <span class="eyebrow">Áreas de especialización</span>
      <h2>Lo que puedo aportar a tu equipo</h2>
      <p class="lead">Experiencia práctica en todo el ciclo de vida de una solución de IA: datos, modelado, despliegue y producto.</p>
    </div>
    <div class="cards">
      <?php foreach ($perfil['servicios'] as $s): ?>
        <div class="card reveal">
          <div class="ic"><?= icono($s['icono']) ?></div>
          <h3><?= e($s['titulo']) ?></h3>
          <p><?= e($s['texto']) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section id="experiencia">
  <div class="wrap">
    <div class="head reveal">
      <span class="eyebrow">Trayectoria</span>
      <h2>Experiencia profesional</h2>
    </div>
    <div class="timeline">
      <?php foreach ($perfil['experiencia'] as $x): ?>
        <article class="job reveal">
          <div class="box">
            <div class="top"><h3><?= e($x['cargo']) ?></h3><span class="date"><?= e($x['periodo']) ?></span></div>
            <div class="co"><?= e($x['empresa']) ?></div>
            <ul><?php foreach ($x['logros'] as $l): ?><li><?= e($l) ?></li><?php endforeach; ?></ul>
            <div class="chips"><?php foreach ($x['stack'] as $t): ?><span class="chip"><?= e($t) ?></span><?php endforeach; ?></div>
            <?php if (!empty($x['fotos'])): ?>
              <div class="gallery"><?php foreach ($x['fotos'] as $f): ?><figure><img src="<?= e($f['src']) ?>" alt="<?= e($f['alt']) ?>" loading="lazy"></figure><?php endforeach; ?></div>
            <?php endif; ?>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section id="proyectos" class="soft">
  <div class="wrap">
    <div class="head reveal">
      <span class="eyebrow">Portafolio</span>
      <h2>Proyectos destacados</h2>
      <p class="lead">Soluciones de inteligencia artificial aplicadas a problemas reales.</p>
    </div>
    <div class="projects">
      <?php foreach ($perfil['proyectos'] as $i => $p): ?>
        <article class="project reveal">
          <span class="num"><?= sprintf('%02d', $i + 1) ?></span>
          <span class="tag<?= stripos($p['etiqueta'], 'ganador') !== false ? ' win' : '' ?>"><?= e($p['etiqueta']) ?></span>
          <h3><?= e($p['titulo']) ?></h3>
          <p><?= e($p['texto']) ?></p>
          <div class="chips"><?php foreach ($p['tags'] as $t): ?><span class="chip"><?= e($t) ?></span><?php endforeach; ?></div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section id="habilidades">
  <div class="wrap">
    <div class="head reveal">
      <span class="eyebrow">Stack tecnológico</span>
      <h2>Habilidades técnicas</h2>
    </div>
    <div class="skills">
      <?php foreach ($perfil['habilidades'] as $cat => $items): ?>
        <div class="skill reveal">
          <h3><?= e($cat) ?></h3>
          <div class="chips" style="margin-top:0"><?php foreach ($items as $t): ?><span class="chip"><?= e($t) ?></span><?php endforeach; ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section id="educacion" class="soft">
  <div class="wrap">
    <div class="head reveal">
      <span class="eyebrow">Formación</span>
      <h2>Educación e idiomas</h2>
    </div>
    <div class="edu">
      <?php foreach ($perfil['educacion'] as $ed): ?>
        <div class="card reveal">
          <div class="ic"><?= icono('cap') ?></div>
          <div>
            <h3><?= e($ed['titulo']) ?></h3>
            <p><?= e($ed['institucion']) ?> — <?= e($ed['detalle']) ?></p>
            <div class="date"><?= e($ed['periodo']) ?></div>
          </div>
        </div>
      <?php endforeach; ?>
      <div class="card reveal">
        <?php foreach ($perfil['idiomas'] as $l): ?>
          <div class="lang">
            <div class="row"><strong><?= e($l['idioma']) ?></strong><span><?= e($l['nivel']) ?></span></div>
            <div class="bar"><i data-w="<?= (int)$l['pct'] ?>"></i></div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<section id="blog">
  <div class="wrap">
    <div class="head reveal">
      <span class="eyebrow">Blog</span>
      <h2>Artículos y notas técnicas</h2>
      <p class="lead">Aprendizajes y notas prácticas sobre ciencia de datos, MLOps e IA generativa.</p>
    </div>
    <div class="posts">
      <?php foreach ($perfil['blog'] as $b): $a = $articulos[$b['slug']]; ?>
        <a class="post reveal" href="/blog/<?= e($b['slug']) ?>">
          <div class="cover"><img src="<?= e($b['imagen']) ?>" alt="" loading="lazy"><span class="soon"><?= $a['minutos'] ?> min de lectura</span></div>
          <div class="body">
            <small><?= e($b['categoria']) ?></small>
            <h3><?= e($b['titulo']) ?></h3>
            <p><?= e($b['resumen']) ?></p>
            <span class="read">Leer artículo <?= icono('arrow') ?></span>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section id="contacto" class="contact">
  <div class="wrap">
    <div class="reveal">
      <span class="eyebrow">Contacto</span>
      <h2>¿Construimos algo juntos?</h2>
      <p class="lead" style="color:#94a3b8">Abierto a oportunidades en ciencia de datos, Machine Learning, MLOps y desarrollo de software. Escríbeme y conversemos.</p>
      <div class="ctas" style="margin-top:30px;display:flex;gap:12px;flex-wrap:wrap">
        <a href="mailto:<?= e($c['email']) ?>" class="btn btn-primary"><?= icono('mail') ?> Enviar correo</a>      </div>
    </div>
    <div class="channels reveal">
      <a class="channel" href="mailto:<?= e($c['email']) ?>"><span class="ic"><?= icono('mail') ?></span><div><small>Correo</small><span><?= e($c['email']) ?></span></div><span class="arrow"><?= icono('arrow') ?></span></a>
      <a class="channel" href="tel:<?= e(preg_replace('/[^+\d]/', '', $c['telefono'])) ?>"><span class="ic"><?= icono('phone') ?></span><div><small>Teléfono</small><span><?= e($c['telefono']) ?></span></div><span class="arrow"><?= icono('arrow') ?></span></a>
      <a class="channel" href="<?= e($c['linkedin']) ?>" target="_blank" rel="noopener"><span class="ic"><?= icono('linkedin') ?></span><div><small>LinkedIn</small><span>césar-polo-cipriano</span></div><span class="arrow"><?= icono('arrow') ?></span></a>
      <a class="channel" href="<?= e($c['github']) ?>" target="_blank" rel="noopener"><span class="ic"><?= icono('github') ?></span><div><small>GitHub</small><span><?= e(str_replace('https://', '', $c['github'])) ?></span></div><span class="arrow"><?= icono('arrow') ?></span></a>
    </div>
  </div>
</section>
<?php endif; ?>

<footer>
  <div class="wrap">
    <span>© <?= $anio ?> <?= e($perfil['nombre']) ?>. Todos los derechos reservados.</span>
    <span>Data Science · Machine Learning · MLOps</span>
  </div>
</footer>

<script>
(() => {
  // Efecto máquina de escribir
  const roles = <?= json_encode($perfil['roles'], JSON_UNESCAPED_UNICODE) ?>;
  const el = document.getElementById('typed');
  let r = 0, i = 0, borrando = false;
  const tick = () => {
    if (!el) return;
    const txt = roles[r];
    i += borrando ? -1 : 1;
    el.textContent = txt.slice(0, i);
    let espera = borrando ? 40 : 85;
    if (!borrando && i === txt.length) { borrando = true; espera = 1800; }
    else if (borrando && i === 0) { borrando = false; r = (r + 1) % roles.length; espera = 350; }
    setTimeout(tick, espera);
  };
  tick();

  // Menú fijo
  const nav = document.getElementById('nav');
  const fijo = <?= $articulo ? 'true' : 'false' ?>;
  const onScroll = () => nav.classList.toggle('scrolled', fijo || window.scrollY > 20);
  window.addEventListener('scroll', onScroll, { passive: true }); onScroll();

  const menu = document.getElementById('menu');
  document.getElementById('burger').addEventListener('click', () => menu.classList.toggle('open'));
  menu.querySelectorAll('a').forEach(a => a.addEventListener('click', () => menu.classList.remove('open')));

  // Animación al hacer scroll
  const io = new IntersectionObserver(entries => entries.forEach(en => {
    if (!en.isIntersecting) return;
    en.target.classList.add('in');
    en.target.querySelectorAll('.bar i').forEach(b => b.style.width = b.dataset.w + '%');
    io.unobserve(en.target);
  }), { threshold: 0.12 });
  document.querySelectorAll('.reveal').forEach(n => io.observe(n));

  // Enlace activo en el menú
  const links = [...menu.querySelectorAll('a[href^="#"]')];
  const spy = new IntersectionObserver(entries => entries.forEach(en => {
    if (en.isIntersecting) links.forEach(a => a.classList.toggle('active', a.getAttribute('href') === '#' + en.target.id));
  }), { rootMargin: '-45% 0px -50% 0px' });
  document.querySelectorAll('section[id]').forEach(s => spy.observe(s));
})();
</script>
</body>
</html>
