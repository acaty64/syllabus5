<?php
use App\Sumilla;
use Illuminate\Database\Seeder;
class SumillasTableSeeder extends Seeder
{
    public function run()
    {
        Sumilla::create([
			'plan' => '8', 
			'cod_curso' => '100048', 
			'texto' => 'El curso tiene como propósito integrar las teorías, las técnicas y las herramientas adquiridas en las materias de contabilidad general y administración que le permita llegar al alumno a desarrollar las habilidades de análisis, integración de la información para la construcción de propuestas y soluciones que llevan al logro de los objetivos de la organización. Se pondrá énfasis en el análisis financiero de los estados financieros y su relación con los costos empresariales.',
		]);

        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '140002',
	            'texto' => 'La asignatura está orientada a dotar al estudiante de instrumentos básicos que le permitan visualizar la realidad socioeconómica de nuestro país y comprender, en base al análisis de los fenómenos económicos, sus posibles soluciones.
	            Los contenidos funtamentales serán: Fundamentos y características de la economía de mercado, la teoría de la demanda, de la oferta y la determinación de precios, intervención del Estado, la empresa en un mercado competitivo, la inflación, desempleo y sus efectos en la economía del país, así como una introducción al comercio internacional.'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '140042',
	            'texto' => 'La estructura  del curso esta  diseñada para introducir al estudiante  en el conocimiento,  comprensión y análisis del funcionamiento  de las principales formas de mercado tanto  de bienes y servicios como de los factores productivos,  empleando  para ello  un marco conceptual e instrumental teórico  y práctico  como  que le permitirá al estudiante comprender y evaluar aspectos relevantes de nuestra realidad socioeconómica, sobre como actúan y toman decisiones económicas los consumidores y las empresas. En ese sentido, el curso persigue ampliar  los conocimientos fundamentales  del análisis  macroeconómico como son la teoría del consumidor, la teoría de la empresa y la producción, las estructuras del mercado y los efectos derivados  de la intervención del Estado  en los mercados de bienes y servicios.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '140006',
	            'texto' => 'Macroeconomía es un curso básico en la carrera profesional del Contador Público, Administrador de Empresas y Economista. A nivel de  estudios universitarios de Pre-grado permite que el alumno conozca la teoría y las aplicaciones de la macroteoría, tanto de los agregados, como del equilibrio y el desequilibrio económicos en escenarios de economía cerrada y abierta. Conceptos básicos y metodología. Cuentas nacionales y financieras en una economía abierta. La oferta y la demanda agregada: el enfoque clásico y el enfoque keynesiano. El mercado de bienes. La demanda agregada y la producción: el multiplicador, los inventarios. El sector público y la política fiscal. El gasto, la tasa de interés y la curva IS. Mercado monetario: la oferta y la demanda de dinero. El dinero, la tasa de interés y la curva LM. El mercado de bienes y el mercado monetario: el modelo ISLM. La incorporación del sector externo: el modelo Mundell-Fleming con tipo de cambio fijo y perfecta movilidad de capitales. Equilibrio interno, equilibrio externo y políticas macroeconómicas.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '140033',
	            'texto' => 'Métodos Matemáticos Económicos, es un curso básico y fundamental en la carrera profesional del Economista  ya que permite que el alumno de Pre-grado conozca las principales Herramientas y aplicaciones del análisis dinámico. En este curso nos proponemos estudiar las herramientas matemáticas utilizadas en los modelos en los que el tiempo es una variable fundamental, dado que el uso de la misma en los modelos económicos es un casi relativamente reciente. Convexidad en Rn. Sistema de ecuaciones diferenciales: equilibrio y estabilidad. Punto de silla y dinámica económica. Sistema de ecuaciones en diferencias: equilibrio y estabilidad. Diagramas de fases. Elementos de teoría de juegos. Optimización dinámica: cálculo de variaciones, elementos de teoría de control y de programación dinámica.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '140043',
	            'texto' => 'Mientras que el primer curso de Microeconomía estuvo orientado a proporcionar los conceptos básicos para entender el comportamiento de los consumidores y de las empresas, el segundo curso tiene más bien una orientación global y más práctica.  Así, se tratarán temas referidos a los mercados de factores productivos, el equilibrio general y la eficiencia económica, a la intervención del Estado, las externalidades los bienes públicos y el bienestar social.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '140001',
	            'texto' => 'Econometría es un curso básico en la carrera profesional del Contador Público, Administrador de Empresas y con mayor énfasis en la formación profesional del Economista. A nivel de estudios  universitarios de Pre-grado permite que el alumno conozca, elabore y analice modelos econométricos, así como su tratamiento estimativo a través de diferentes técnicas. Para ello se enfatizará en las pruebas de relevancia individual y global para darle validez a los supuestos en los modelos econométricos, análisis de las predicciones y ajustes para su posterior interpretación. Modelo Lineal General, los vicios econométricos clásicos, predicción econométrica.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '140027',
	            'texto' => 'El curso de Macroeconomía abierta esta enfocada íntegramente en la economía global y los aspectos internacionales de la macroeconomía  mas que en la economiza de un país en particular. En tal sentido, abarca los mercados de bienes, servicios, capitales y sus derivaciones de política económica para un funcionamiento macroeconómico eficiente. Finalmente, incorpora avances recientes en teoría macroeconómica, particularmente en lo que se refiere  al enfoque de las expectativas, teoría moderna de política económica, ciclo y crecimiento económico. El modelo Mundell-Fleming con tipo de cambio flexible y perfecta movilidad de capitales. Dinero, precios y tipo de cambio: la discusión de los regímenes cambiarios. Extensiones: modelos de selección de portafolio y sustitución monetaria. Expectativas y los  microfundamentos  de la macroeconomía: las firmas, las familias, el gobierno y el sector externo. Teorías alternativas de la oferta agregada. Los salarios, los precios y el empleo: la curva de Philips. La nueva macroeconomía clásica: la información imperfecta y el modelo de ciclos económicos reales. La nueva economía keynesiana: la microeconomía de los salarios y la rigidez de los precios. Macroeconomía dinámica: modelos con expectativas adaptativas, expectativas racionales y generaciones superpuestas. La teoría de la política macroeconómica. Introducción a la teoría del crecimiento económico.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '220037',
	            'texto' => 'El presente Seminario Taller de Ingles Técnico (para estudiantes de Ciencias Económicas y Comerciales) pretende internalizar en el alumno participante, la importancia de comprender razonablemente un texto o artículo especializado en Economía, Finanzas, Administración y Comercio Internacional propios su carrera. En ese sentido, un Seminario Taller como el presente, enfatiza esencialmente mejorar las habilidades de comprensión y redacción de un texto, artículo y/o revista publicada en idioma inglés sobre temas especializados. Esto se basara en una revisión pormenorizada de las estructuras gramaticales básicas del idioma Inglés y otras técnicas que buscan minimizar el uso del diccionario.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '140034',
	            'texto' => 'A nivel de estudios  universitarios de Pre-grado permite que el alumno conozca, elabore y analice modelos econométricos, así como su tratamiento estimativo a través de diferentes técnicas. Para ello se enfatizará en las pruebas de relevancia individual y global para darle validez a los supuestos en los modelos econométricos, análisis de las predicciones y ajustes para su posterior interpretación. Ecuaciones simultáneas: identificación, estimación e inferencia. Aplicaciones. Series de tiempo univariadas. Modelos AR, MA, ARMA y ARIMA: identificación, estimación y predicción. Modelos dinámicos: modelos con variables dependientes rezagadas, modelos con retardos distribuidos, modelos de volatilidad estocástica (ARCH, GARCH). El Método de lo general a lo específico. Series de tiempo multivariadas: modelos de vectores autoregresivos (VAR). Raíces unitarias, integración y cointegración. Modelo de corrección de errores. Análisis de datos de corte transversal y de Panel Data. Modelos de efectos fijos y de efectos aleatorios. Modelos Probit, Logit y Tobit. Datos censurados y truncados. Sesgo de selección.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '140020',
	            'texto' => 'A nivel de estudios  universitarios de Pre-grado permite que el alumno conozca los elementos básicos acerca de la teoría económica del comercio internacional. En ese sentido, el curso brinda los conocimientos teóricos y prácticos necesarios para comprender las transacciones económicas y financieras que se realizan entre las diversas economías en el ámbito internacional. Las "nuevas" causas del comercio internacional. El modelo ricardiano con más de dos bienes, con un continuo de bienes. Aprendizaje, brechas tecnológicas y comercio internacional. Rendimientos crecientes, competencia monopolística y comercio intraindustrial. Política comercial y la nueva teoría del comercio. Desarrollo, subdesarrollo y comercio. Crecimiento económico endógeno y comercio; innovación. Imitación, histéresis, introducción de nuevos productos, calidad. Organización industrial y comercio internacional.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '100018',
	            'texto' => 'La presente asignatura cubre los principales elementos del marco institucional regulado por el Banco Central de Reserva del Perú, en el que se desarrollan las actividades monetarias y financieras. Enfatizan el estudio de los diversos agentes que crean y regulan la oferta de activos monetarios, explica la emisión primaria y los factores que la determinan. Se estudia los determinantes del programa monetario y los factores que determinan la tasa de interés. Se define la variable de tipo de cambio y las características del mercado cambiario, así como se explica las principales causas de las crisis cambiarias. Se profundiza el estudio de la política monetaria, sus mecanismos de transmisión y su rol en economías dolarizadas entre otros aspectos.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '100052',
	            'texto' => 'El curso es de carácter teórico práctico, orientado a facilitar a los estudiantes una visión amplia del mundo empresarial. En este curso se aborda el estudio tanto de aspectos financieros, como contables, de marketing, jurídicos, producción, laborales, de recursos humanos, con el objeto de que los alumnos obtengan una visión integral de las diferentes áreas de las PYMES.

Este curso cumple un objetivo primordial consistente en dar a conocer todas las áreas de la empresa de forma global, dado que en una PYME no es sencillo poder contar con personal especializado en cada función y es en la mayoría de los casos el propio empresario quien debe responsabilizarse de varias funciones simultáneamente.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '140038',
	            'texto' => 'El curso busca brindar a los estudiantes de economía un conjunto de herramientas informáticas aplicadas que les permitan utilizar eficientemente y con seguridad las características básicas de los entornos de trabajo Eviews, Stata y MS Excel con Visual Basic. Se busca que al final del curso, el alumno disponga de habilidades suficientes en el manejo de estos paquetes estadísticos, que serán de utilidad en la aplicación de métodos cuantitativos a la economía.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '140041',
	            'texto' => 'Revisión de los enfoques de la elección y de las preferencias en la teoría del consumidor. Revisión de la teoría de la firma y la oferta. Equilibrio parcial competitivo. El excedente del consumidor y el excedente del productor. Política microeconómica y bienestar. Revisión de los mercados de competencia imperfecta. Equilibrio general: intercambio puro versus intercambio y producción. Eficiencia y competencia perfecta. Competencia imperfecta y equilibrio general. Teoría básica del bienestar social. La incertidumbre y el riesgo. Equilibrio competitivo bajo incertidumbre. Economía de la información: información asimétrica, selección adversa, escrutinio y señalización. Seguros y contratos. Teoría de los Juegos: juegos estáticos con información completa y equilibrio de Nash; juegos dinámicos con información completa y equilibrio de Nash de Subjuego Perfecto; juegos estáticos de información incompleta y equilibrio bayesiano. Fallas de mercados: externalidades y bienes públicos

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '100067',
	            'texto' => 'Se abarca los temas de análisis de mercado para la identificación de la demanda y oferta para el bien o servicio, la determinación de precios, de los sistemas de comercialización y promoción. La localización del proyecto y su tamaño. La definición de la estructura, calendarización y reposición de las inversiones. La determinación de las estructuras de costos e ingresos, así como el análisis y selección de fuentes de financiamiento. Se enfoca la evaluación desde los puntos de vista empresarial, en la determinación de los flujos de fondos para el periodo de estimación y los indicadores y sistemas de evaluación; y social, en la determinación de los criterios, indicadores y métodos de ajustes. Para ambos enfoques se presenta diferentes metodologías para desarrollar el análisis de sensibilidad.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '140013',
	            'texto' => 'Historia del Pensamiento  Económico es un curso básico en la carrera profesional del   Economista. A nivel de estudios  universitarios de Pre-grado permite que el alumno conozca las principales corrientes del pensamiento económico, las doctrinas propugnadas por  las escuelas a través del tiempo y el espacio;  las teorías y  modelos  formuladas por los pensadores de mayor renombre. El curso no sólo examina las  teorías y los postulados que a través de la historia del  pensamiento económico se han elaborado por las diferentes escuelas económicas sino que también contrasta dichas teorías con los problemas concretos que viven los países de todas las latitudes en la búsqueda  de la interpretación más adecuada para el crecimiento económico, el bienestar general y  el desarrollo  sostenible de nuestras realidades en un mundo  interdependiente y globalizado, pero también mas humano. Metodología de las ciencias sociales. Los fisiócratas. Adam Smith y la emergencia de la escuela clásica. La contribución de Ricardo. Las raíces  del pensamiento económico liberal. De los clásicos a Marx. Marshall y los marginalistas. Walras y los fundamentos del paradigma neoclásico. La revolución Keynesiana: Keynes, Kalecki y Hicks. La escuela neoricardiana. Los monetaristas. Desarrollos contemporáneos.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '140037',
	            'texto' => 'Estructura Económica Mundial es un curso básico en la carrera profesional del Contador Público, Administrador de Empresas y Economista. Al nivel de estudios universitarios de Pre-grado permite que el alumno conozca las causas de la formación de las estructuras económicas y sociales, el desarrollo histórico de las mismas, así como su situación actual y proyección futuras. Sin embargo, la asignatura también estudia las relaciones económicas internacionales que devienen del proceso mismo de desarrollo económico del mundo en cualquiera de las estructuras económicas que se presentan en el tiempo y el espacio .

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '100068',
	            'texto' => 'Con el curso se propone comparar los tópicos de la vida económica, y de la actividad de las empresas con los principios de la Doctrina Social de la Iglesia, para fortalecer en los alumnos la conciencia de la realidad contemporánea, y fomentar la búsqueda de un  rol de auténtico protagonismo económico y social. Igualmente se busca estudiar los temas referentes al trabajo, al dinero, la propiedad privada, al mercado, la empresa, las empresas no lucrativas, al desarrollo, las relaciones internacionales y la deuda, al poder y  a la política. Cada tema será tratado desde el punto de vista histórico y de la actualidad buscando las referencias adecuadas en el Magisterio Social de la Iglesia.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '140050',
	            'texto' => 'Crecimiento Económico  es un curso básico y fundamental en la carrera profesional del Economista  ya que permite que el alumno de pre-grado conozca las principales teorías modelos y aplicaciones del crecimiento bajo una concepción moderna. El crecimiento económico: análisis de la evolución económica a través del tiempo y en el largo plazo. La contabilidad del crecimiento y el desempeño de las economías: regularidades y divergencias vis-a-vis de la hipótesis de convergencia. El estado de la Teoría del Crecimiento: los enfoques clásicos, la teoría "moderna" y la "nueva" Teoría del Crecimiento. Los modelos básicos de crecimiento exógeno, sin cambio técnico, y con cambio técnico y con tasas de ahorro exógenas. La "nueva" teoría: el Capital Humano. La optimización del consumo y el crecimiento endógeno. Los rendimientos crecientes, externalidades, la consideración del comercio exterior, de la política pública y de cambios técnicos endógenos. El análisis empírico del crecimiento y las implicaciones de política.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '140044',
	            'texto' => 'Desarrollar métodos de evaluación y diseño de los productos de microcrédito y de la operación e impacto de las organizaciones microfinancieras con base en las metas principales de estas empresas, de sus socios y de sus accionistas. Es un curso de especialización en las nociones teórica de la empresa y finanzas al ámbito  de las instituciones de microfinanzas como las ONG, EDPYMES y otras.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '140040',
	            'texto' => 'La asignatura de Mercado de Capitales y Derivados pretende preparar al alumno para que adquiera conocimientos generales acerca del significado y la importancia del mercado de capitales local e internacional y de las variables que afectan su comportamiento. Asimismo, durante la asignatura se desarrollarán los aspectos relevantes de las escuelas fundamentalistas y técnica, que se toman en cuenta durante el proceso de inversión. Por último durante la asignatura se desarrollarán los principales tipos de instrumentos tanto de renta variable, renta fija como de derivados, enfocándose no sólo en desarrollar los conceptos sino en la valorización de los mismos.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '110019',
	            'texto' => 'El curso abarca los siguientes temas centrales: panorama de los negocios y el comercio internacional, entorno e instituciones del comercio internacional, integración económica y comercial, comercialización internacional, medios de pago internacionales, administración del riesgo internacional, el tránsito aéreo y marítimo, sistema de adunas en el Perú. Globalización y comercio internacional.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '140045',
	            'texto' => 'El  curso presenta los fines e instrumentos de la política económica de largo plazo, su eficacia relativa como la elaboración de la política económica. El mercado y la planificación central, los modelos de equilibrio general y la teoría de las fallas e imperfección  de mercados asociado ha los aspectos sectorial de la economía. La cuestión social de la distribución del ingreso, el financiamiento y endeudamiento económico. La integración económica y la política económica. Los sistemas financieros y la asimetría en la elaboración de la política económica.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '270024',
	            'texto' => 'Permite al futuro Administrador, Contador o Economista poner en práctica sus conocimientos y destrezas, así como observar y participar de cerca de la organización y desarrollo de las empresas experimentando y afrontando situaciones reales que le permitan adquirir experiencias.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '100023',
	            'texto' => 'Al final del seminario el alumno será capaz de realizar una adecuada revisión y selección de la  literatura, trabajos de investigación, informes, memorias y otras fuentes relacionadas con el tema de investigación a ejecutar; manejar las técnicas de fichaje así como el análisis del contenido en el registro de información de la bibliografía y fuentes especializadas; evaluar el proceso metodológico de ejecución en relación al proceso del planeamiento.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '140047',
	            'texto' => 'Introducción del participante en la teoría y práctica de la formulación y evaluación de proyectos de inversión. Se desarrolla las definiciones, objetivos, etapas e instrumentos que contribuyan al desarrollo de un proyecto a lo largo del desarrollo del curso. Se abarca los temas de análisis de mercado para la identificación de la demanda y oferta para el bien o servicio (considerando las técnicas de investigación de mercado y el uso del planeamiento estratégico), la determinación de precios, de los sistemas de comercialización y promoción (haciendo uso de un plan de marketing). La localización del proyecto y su tamaño. La definición de la estructura, calendarización y reposición de las inversiones. La determinación de las estructuras de costos e ingresos, así como el análisis y selección de fuentes de financiamiento. Se enfoca la evaluación desde los puntos de vista empresarial, en la determinación de los flujos de fondos para el periodo de estimación y los indicadores y sistemas de evaluación. Se hará uso de la metodología de BID (Banco Interamericano de Desarrollo) para el desarrollo del curso.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '100060',
	            'texto' => 'El curso corresponde al área finanzas, siendo una asignatura complementaria a los cursos de finanzas, pretende preparar a nuestros estudiantes sobre la importancia del mercado de capitales tanto local como internacional en la gestión financiera de la empresa. Se propone, desarrollar cuales son las variables que afectan el movimiento del mercado de capitales de un país. Abarca los siguientes aspectos: escuelas fundamentalistas y técnica. Los distintos instrumentos que se negocian en este mercado, como renta fija, renta variable. Valorización de los instrumentos Financieros.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '140039',
	            'texto' => 'Los alumnos podrán tener al final del curso elementos analíticos básicos para entender problemas actuales. Es imprescindible que los alumnos sigan de cerca los desarrollos más recientes a través de una lectura cotidiana de The Economist. Incertidumbre y la formación de expectativas. Modelos de crecimiento bajo certidumbre con horizonte finito: el modelo de Solow-Swan. Modelos de crecimiento bajo certidumbre con horizonte infinito: el modelo de Ramsey y el modelo de generaciones traslapadas. La nueva teoría del crecimiento: modelos de crecimiento endógeno. La teoría del ciclo de negocios real y la teoría keynesiana de las fluctuaciones económicas: modelos de ciclos económicos reales y los nuevos keynesianos. Fundamentos microeconómicos de la macroeconomía. El consumo: en condiciones de certidumbre y en condiciones de incertidumbre. La hipótesis del ingreso permanente. Restricciones de liquidez versus ahorro por motivo precaución. La inversión: modelos de inversión con costos de ajuste, el modelo de inversión de la "q de Tobin". Inversión e incertidumbre. Teorías del desempleo y modelos de búsqueda. Política monetaria y política fiscal. El problema de la inconsistencia dinámica.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '140026',
	            'texto' => 'El curso esta diseñado para que el estudiante conozca y analice críticamente los problemas económicos que aquejan a nuestro país dentro del marco de los instrumentos y conceptos del análisis económico. En ese sentido se trataran aspectos fundamentales de la Macroeconomía para luego considerar a las Políticas Económicas implementadas, las Reformas Estructurales, las Políticas Sociales en nuestro país, la estructura económica nacional y sus grandes problemas aun sin resolver  especialmente en la última década y un análisis de los sectores económicos mas representativos de la economía. Bases metodológicas en la investigación sobre la economía peruana. Formulación, estructura y método en los proyectos de investigación  académica y en los trabajos de consultoría. Discusión del método y del contenido de investigaciones económicas realizadas y de proyectos en curso. Revisión de las fuentes de información disponibles para estudios futuros. Elaboración de proyectos de investigación por los estudiantes.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '140049',
	            'texto' => 'Fallas de mercado y la intervención del Estado. Regulación de monopolios naturales. Competencia por el mercado: las concesiones. Regulación de mercados potencialmente competitivos. Antitrust. Diseño regulatorio. Economía política de la regulación. Experiencia regulatoria en el Perú.Fundamentos de economía y finanzas: decisiones bajo incertidumbre, economía de la   información, modelos de precios de activos. Gerencia de instituciones financieras: visión del negocio y análisis de riesgos. La teoría de la regulación prudencial. El Comité de Basilea: supervisión de la administración de los riesgos de mercado, y la supervisión consolidada. Ley del sistema financiero y de seguros en el Perú. La legislación comparada en los sistemas financieros de América Latina.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '270025',
	            'texto' => 'La Práctica Pre Profesional proporciona al estudiante la capacidad de análisis, desarrollar su capacidad de creación é imaginación para superar problemas relacionados con la Toma de Decisiones que puedan presentarse durante el desarrollo de su actividad profesional al formar parte de una organización, además participando en los procesos de Planificación, Ejecución y Supervisión de las acciones afines al quehacer de las Ciencias Económicas.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '100025',
	            'texto' => 'Este curso tiene el propósito de hacer que el alumno se adentre en el campo de la investigación científica, mostrando el marco filosófico e instrumental desarrollo por los investigadores y presentado en las obras de la especialidad. Se tratará de canalizar las inquietudes y esfuerzos de los alumnos sobre los temas de su interés por particulares que estos sean con un enfoque multidisciplinario.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '140046',
	            'texto' => 'El curso muestra los fines e instrumentos de la política económica de corto plazo en el contexto de la política económica general. Objetivos y metas de la política económica, conflictos entre objetivos e instrumentos. Diseño de la política monetaria, política fiscal, política de precios e ingresos, política de ajuste de la balanza de pagos, política comercial e integración de mercados, política financiera y mercados financieros.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '140048',
	            'texto' => 'El curso pretende que el estudiante aprenda la manera de realizar proyectos para el Estado ( Gobierno Central y Regional) haciendo uso de la metodología preparada de acuerdo a Ley  Nº 274293 y el DS N 086-2000 EF que se refieren al Sistema Nacional de Inversión Publica SNIP la formulación de dichos proyectos siguen las directivas de las normas y son también trabajadas por la Cooperación Internacional, se hace uso también de la metodología del Banco Mundial para el desarrollo del curso en cuanto a la evaluación social, se hacen uso de los criterios, indicadores y métodos de ajustes.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '100063',
	            'texto' => 'El curso corresponde al área de finanzas siendo una signatura complementaria. Este curso  permitirá a nuestros estudiantes interrelacionar los conocimientos adquiridos en los cursos de finanzas y poder aplicarlos en la toma de decisiones dentro de la gestión financiera  con el objetivo de poder administrar adecuadamente el riesgo. Abarca los siguientes aspectos: La globalización. Coberturas frente a las fluctuaciones de la tasa de interés, tipo de cambio, tasa de inflación. Mercados de Derivados. Instituciones que participan en el mercado internacional.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '140035',
	            'texto' => 'Distinción analítica entre recursos naturales y medio ambiente. La economía del patrón óptimo de explotación de recursos naturales. El rol de la tasa de interés. Extensiones al modelo: incertidumbre, impuestos, mercados imperfectos. La contabilidad de recursos naturales. La economía del medio ambiente. Las externalidades y la intervención del Estado. Instrumentos de política ambiental. El rol de los derechos de propiedad. La valoración económica del medio ambiente.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '100071',
	            'texto' => 'El curso brinda unos contenidos básicos introductivos a la descripción de la actividad económica nacional e internacional, de su evolución histórica y de las perspectivas y desafíos futuros.  Se desarrollará también la descripción de las actividades de las empresas, en particular la formulación de la visión estratégica y el diseño de una fórmula empresarial con todos sus elementos.



'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '110001',
	            'texto' => 'El curso de Contabilidad Básica I es de carácter teórico -  practico orientado a conocer aspectos generales de la contabilidad.

El propósito del curso es brindar al estudiante los conocimientos sobre el sistema de información contable para llegar a la correcta presentación de los Estados Financieros.

El desarrollo del curso comprende: El concepto de contabilidad como ciencia , importancia y funciones, conocimiento de las cuentas contables, libros de contabilidad, aplicaciones mediante ejercicios, desarrollo de monografías desde el inicio de las operaciones de la empresa hasta obtener los Estados Financieros básicos.

Las lecturas  serán   parte importante del  aprendizaje.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '110002',
	            'texto' => 'Es un curso teórico - práctico orientado a profundizar y consolidar los fundamentos de la contabilidad desde la partida doble, hasta la formulación de los Estados Financieros.

El propósito del curso es brindar al estudiante los conocimientos y destrezas para el uso correcto de los libros principales y auxiliares y formular los estados financieros básicos.

El desarrollo del curso comprende: Conocimiento del proceso contable, aplicación correcta de la dinámica de las cuentas según el Plan Contable General Revisado, uso de los libros principales y auxiliares. La aplicación de las normas internacionales para contabilizar Existencias, Activos Fijos. Elaboración de Planillas de Remuneraciones teniendo en cuenta los aspectos tributarios y laborales. La formulación de los Estados Financieros básicos.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '110028',
	            'texto' => 'El curso de Normas Internacionales Contables I es de carácter teórico-práctico orientado al conocimiento de los Principios de Contabilidad Generalmente Aceptados (PCGA) y las Normas Internacionales de Contabilidad (NICs) de mayor aplicación en nuestro medio, en los procesos de registro, valuación, presentación y revelación de la información financiera de una entidad.

El propósito del curso es estimular el estudio y análisis de las Normas Internacionales de Contabilidad (NICs), así como facilitar a los estudiantes los criterios fundamentales para la correcta aplicación de dichas normas en el registro y valuación de las transacciones económicas y para la presentación razonable de los estados financieros de una entidad.

El desarrollo del curso comprende el estudio del Marco conceptual de las NICs, NIC I Presentación de Estados Financieros, NIC 2 Existencias, NIC 11 Contratos de Construcción, NIC 16 Inmuebles Maquinaria y Equipo y NIC 18 Ingresos.



'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '120006',
	            'texto' => 'Tiene por finalidad el estudio de las partes más importantes de la ley de Sociedades Mercantiles; específicamente de la Sociedad Anónima,  Ley de Títulos y Valores,  Legislación Bancaria e Instituciones Financieras actuales. Entre sus tópicos se destacarán: Constitución de Sociedades; Balance, distribución, aumento y reducción de utilidades; Transformación, fusión y disolución; Títulos  y valores; La letra, el pagaré o vale y el cheque; Legislación sobre instituciones financieras.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '110003',
	            'texto' => 'El curso de Contabilidad de Costos I  es de carácter teórico - práctico, orientado al estudio de los elementos de costos industriales y la formulación de los estados de costos de producción y de ventas.

El propósito del curso es brindar al estudiante los conocimientos y herramientas acerca de la Contabilidad de Costos, fomentando el desarrollo de su capacidad de análisis crítico en la elaboración y presentación  de los Estados de Costos.

El desarrollo del curso comprende el estudio del Proceso Productivo,  la Clasificación de los Costos  fabriles, el costeo de los materiales, el costeo de la Mano de obra directa,  la asignación de los costos indirectos de fabricación y la asignación del costo de los departamentos de servicios a los departamentos productivos.

Asimismo el procedimiento de la aplicación del plan contable general revisado en las Empresas manufactureras.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '110005',
	            'texto' => 'El curso de Contabilidad Intermedia I es un curso teórico - práctico, orientado principalmente al estudio de la Ley General de Sociedades y el manejo de las reglas de presentación del Balance General y Estado de Ganancias y Pérdidas, aplicando las Normas Internacionales de Contabilidad.  .

El propósito del curso es brindar a los estudiantes los conocimientos sobre la constitución societaria de las empresas, las operaciones mercantiles relacionadas y la distribución de utilidades de acuerdo a la Ley General de Sociedades.

El desarrollo del curso comprende: Conocimiento del proceso de constitución, tipos de sociedades, distribución de utilidades, formas de reorganización de sociedades, identificación y aplicación de las normas legales vigentes y herramientas para el manejo de las operaciones especiales que se presentan en las sociedades mercantiles. Uso del Balance de Comprobación hasta la formulación del Balance General y estado de Ganancias y Pérdidas.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '110030',
	            'texto' => 'La Asignatura proporcionará la teoría y práctica de las Normas Internacionales de Contabilidad NIC 7, NIC 8, NIC 10, NIC 17, NIC 21, NIC 27, NIC 32, NIC 33, NIC 38 y NIC 39.

El propósito es permitir el conocimiento de los aspectos generales y específicos de Las Normas Internacionales que encuentran vigentes y que son aplicables al Perú de acuerdo a la legislación vigente.

Comprenderá el análisis y desarrollo de los casos prácticos y permitirá una adecuada aplicación  en la Empresas.



'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '120007',
	            'texto' => 'Otorga al alumno los conocimientos suficientes y necesarios para conocer el tratamiento tributario en el país y el Código Tributario que determina los procedimientos y la relación entre el acreedor y el deudor tributario. Se desarrollarán estudios teóricos y prácticos de las contribuciones al Instituto Peruano de Seguridad Social, Fondo Nacional de Vivienda, Impuesto al Patrimonio Predial y otros tributos.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '110004',
	            'texto' => 'El curso  de Contabilidad de Costos II, es de carácter teórico-practico, orientado al afianzamiento de la contabilidad de costos I; al análisis, diseño y puesta en marcha de los sistemas de contabilidad de costos históricos y predeterminados; preparación de la información interna; definición y uso de la contabilidad analítica de explotación (Clase 9 del plan contable general revisado).

El propósito del curso es brindar al estudiante los conocimientos sólidos sobre los sistemas de contabilidad de costos, la aplicación de la contabilidad analítica de explotación y la preparación de la información interna.

El desarrollo del curso comprende: Costo por Orden de Producción; Costo por Procesos; Costo Estimado y Estándar; Implementación de un Sistema de Contabilidad de Costos.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '100006',
	            'texto' => 'El curso de Contabilidad Intermedia II es un curso teórico-práctico orientado al conocimiento de los conceptos y teorías referidas a la preparación y presentación de los Estados Financieros de conformidad con las NICs. y NIIFs vigentes en el país y el Reglamento para la Preparación de Información Financiera según la CONASEV.

El propósito del curso es brindar a los estudiantes los criterios fundamentales para la preparación y presentación de la información financiera para propósitos generales y específicos.

El curso está referido a la formulación de los estados financieros básicos (Balance General, El Estado de Ganancias y Pérdidas, El Estado de Cambios en el Patrimonio Neto y El Estado de Flujo de Efectivo); las Notas a los Estados Financieros y la Información Complementaria a los Estados Financieros. Los métodos de análisis e interpretación de los Estados Financieros.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '110041',
	            'texto' => 'El curso de Normas Internacionales de Información Financiera es de carácter teórico-práctico, orientado a conocer las Normas Internacionales de información Financiera (NIIFs) y consolidar los conocimientos de las Normas Internacionales de Contabilidad (NICs)  vigentes en el País.

El propósito del curso es que el estudiante consolide y profundice sus conocimientos de las NICs, y las NIIFs vigentes, las interprete, analice y aplique de forma correcta en el registro y valuación de las transacciones económicas para la presentación razonable de los estados financieros de una entidad.

El desarrollo del curso comprende el estudio de las NIC 14, NIC 21, NIC 28, NIC 29, NIC 32, NIC 37, NIC 39, NIC 40 y NIC 41; así como la NIIF 1.- Adopción por Primera vez de las Normas Internacionales de Información Financiera, NIIF 2.- Pagos Basados en Acciones, NIIF 3.- Combinaciones de Negocios, NIIF 4.- Contratos  de Seguros, NIIF 5.- Activos No Corrientes Mantenidos para la Venta y Explotaciones con Interrupción Definitiva, NIIF 6.- Exploración y Evaluación de Recursos Minerales, NIIF 7.- Instrumentos Financieros: Información a Revelar.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '110038',
	            'texto' => 'El curso de Contabilidad de Entidades Financieras y de Seguros es de carácter teórico - práctico, orientado a conocer el sistema contable de las Entidades Financieras y de Seguros en el marco de la Ley General de Banca y Seguros.

El propósito del curso es brindar al estudiante los conocimientos sobre la legislación de las entidades del sector financiero y de seguros, la contabilización de sus operaciones y la formulación de sus estados financieros.

El desarrollo del curso comprende: El estudio de la Ley General de Banca y Seguros, del Plan Contable para Entidades Financieras, los procesos contables y la formulación de los Estados Financieros de las entidades bancarias, las Administradoras de Fondos de Pensiones, las Compañías de Seguros y otras entidades  oficiales relacionadas.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '120009',
	            'texto' => 'El curso de Derecho Laboral, tiene por objeto proporcionar al alumno un conocimiento

integral de las normas legales que rigen las relaciones laborales entre trabajadores y

empleadores de la actividad privada. Se estudiará la naturaleza jurídica, fuentes y autonomía del Derecho Laboral analizando los principales derechos y obligaciones del trabajador y del empleador dentro del régimen laboral de la actividad privada, con especial referencia a la relación individual de trabajo. Y se  analizarán el contrato de trabajo los sujetos, derechos obligaciones y beneficios que se originan en el mismo.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '110009',
	            'texto' => 'El curso de Contabilidad de Costos III es de carácter teórico - práctico orientados a aplicar y usar los costos para la toma de decisiones  en las diferentes ramas de la actividad económica.

El propósito del curso es brindar al estudiante los conocimientos sobre la concepción integral  del funcionamiento y operatividad de los costos de distribución, con fines de pronóstico, análisis de alternativas y control gerencial.

El desarrollo del curso comprende: Relación Costo, Volumen, Beneficio; Variabilidad de los Costos; Costos Unitarios y Costos Totales; Control y Error de las Predicciones; Análisis de los Costos y Fijación de los Precios; Análisis de Costos en las inversiones.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '110039',
	            'texto' => 'El curso de Contabilidad Gubernamental I es de carácter teórico - práctico orientado a conocer aspectos generales, principios y fundamentos que sustentan la doctrina y técnica de la contabilidad de las entidades que conforman el Sector Público Nacional.

El propósito del curso es brindar al estudiante los conocimientos sobre el manejo del Plan contable gubernamental, del SIAF SP, para ser utilizados en la elaboración de los Estados Financieros y Presupuestarios.

El desarrollo del curso comprende: los conocimientos básicos de la contabilidad pública, operaciones contables del sector, presentación de Estados Financieros y análisis de partidas presupuestarias.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '110011',
	            'texto' => 'El curso de Contabilidad Superior I es de carácter teórico - práctico orientado a la profundización del conocimiento de las Normas Internacionales de Contabilidad. y de la elaboración y presentación de los Estados Financieros.

El propósito del curso es que el estudiante aplique correctamente las Normas Internacionales de Contabilidad a situaciones reales con la finalidad de que se presente razonablemente los Estados Financieros.

El desarrollo del curso comprende:: Objetivos de los Estados Financieros, Normas Internacionales de Contabilidad (NIC1 Presentación de Estados Financieros, Nic 2 Existencias, Nic 11 Contratos de Construcción, Nic 16 Inmuebles Maquinaria y Equipo y Nic 18 ngresos) ; Presentación de los Estados Financieros, Revelación de Políticas de Contabilidad e Información que debe darse en los Estados Financieros.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '110035',
	            'texto' => 'El curso es de carácter teórico práctico orientado a conocer los conceptos y elementos del sistema de control interno, así como las  metodologías para su elaboración en todos los niveles y áreas administrativas y operativas de las empresas.

El propósito del curso es brindar al estudiante los conocimientos necesarios y suficientes a fin de que esté capacitado para implementar un Sistema de Control Interno en una empresa de acuerdo con las características  administrativas y operacionales.

El desarrollo del curso comprende: Conceptos básicos de control interno, Objetivos, Componentes, Evaluación de Riesgos, Las Actividades de Control y Supervisión, las Normas Generales de Control, tomando como base el "Informe COSO" y el Sistema Nacional de Control para las entidades del Estado.



'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '110006',
	            'texto' => 'El curso de Técnica Contable Tributaria I es de carácter teórico - práctico orientado al conocimiento de la legislación tributaria sobre los impuestos internos, (Impuesto a la renta e  Impuestos patrimoniales)

El propósito del curso es brindar al estudiante los conocimientos  relativos al Impuesto a la Renta y a los Impuestos patrimoniales, en vinculación con las disposiciones de promoción sectorial y su aplicación para la correcta determinación del impuesto. .

El desarrollo del curso comprende el estudio de: Impuesto a la Renta, Régimen de Personas Naturales, Régimen de Personas Jurídicas y las Leyes Sectoriales relacionadads, así como los impuesto patrimoniales vigentes.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '110033',
	            'texto' => 'El curso de Auditoria I (Financiera)es de carácter teórico práctico orientado impartir los conocimientos básicos relativos a la especialidad contable relativos a la Auditoria Financiera externa.

El propósito del curso es brindar al estudiante los conocimientos, en sus aspectos generales, marco teórico, proceso y evaluación del Control Contable Interno y formulación de los informes de auditoría..

El desarrollo del curso comprende: Función de la Auditoría y Marco de Trabajo de la Auditoria Financiera; Normas de Auditoria Generalmente Aceptadas; Las Normas Internacionales de Auditoría. El Proceso de la Auditoria Financiera; El Planeamiento, las técnicas, los Procedimientos, los Programas y los Papeles de Trabajo; Evaluación del Sistema de Control Interno Contable, así como los informes de auditoría y los dictámenes.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '110015',
	            'texto' => 'El curso de Contabilidad Superior II es de carácter teórico - práctico orientado a la profundización del conocimiento de las Normas Internacionales de Contabilidad. y de la elaboración y presentación de los Estados Financieros.

El propósito del curso es que el estudiante aplique correctamente las Normas Internacionales de Contabilidad, Normas Internacionales de Información Financiera a situaciones reales con la finalidad de que se presente razonablemente los Estados Financieros.

El desarrollo del curso comprende:: Aplicación práctica de las Normas Internacionales de Contabilidad:  NIC 12  Impuesto a la Renta, NIC 27 Estados Financieros Consolidados y Contabilización de Inversiones en Subsidiarias, NIC 32 Instrumentos Financieros, Presentación e Información a Revelar, NIC 33 Utilidad por Acción, NIC 38 Activos Intangibles, NIC 39 Instrumentos Financieros, Reconocimientos y Medición.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '100017',
	            'texto' => 'Permitirá al alumno conocer los criterios de presentación de las cuentas anuales en el Perú y los métodos habituales de análisis financiero. Sus contenidos principales son: El balance de situación y la Cuenta de Ganancias y Pérdidas; La Memoria, el Informe de Gestión y de Auditoría; El cuadro de financiación y de flujos de Tesorería;  Las Cuentas Consolidadas de los grupos de sociedades; Análisis de los Estados Financieros; Liquidez y Solvencia a corto plazo; Endeudamiento y Solvencia a largo plazo; Productividad; Rentabilidad y Costo de Capital.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '110018',
	            'texto' => 'El curso de Técnica Contable Tributaria II es de carácter teórico - práctico orientado al conocimiento de normas legales y reglamentarias de impuestos internos y su aplicación.

El propósito del curso es brindar al estudiante, los conocimientos sobre los impuestos al consumo, tales como, Impuesto General a las Ventas; Impuesto Selectivo al Consumo; y sobre la Tributación Municipal, que incluye los impuestos, contribuciones y tasas municipales.

El desarrollo del curso comprende: análisis de la ley del Impuesto general a las Ventas e Impuesto Selectivo al Consumo y su respectivo reglamento, así como el análisis de la Ley de Tributación Municipal y  normatividad vigente conexa, así como la realización de ejercicios prácticos.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '110034',
	            'texto' => 'El curso de Auditoria II es de carácter teórico - práctico orientado a conocer los aspectos fundamentales de la Auditoria Operacional en el Sector Público.

El propósito del curso es brindar al estudiante, las herramientas  de Metodología,  Normas y Técnicas de la Auditoria Operacional, para el planeamiento, ejecución y la elaboración del Informe y de las recomendaciones.

El desarrollo del curso comprende: El estudio del planeamiento, ejecución y los informes de Auditoria de las Entidades del Sector Público Nacional, en el marco de la aplicación de las Normas de Auditoria Generalmente Aceptadas (NAGU) y el Manual de Auditoria Gubernamental (MAGU).

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '270005',
	            'texto' => 'El curso de Prácticas Pre Profesionales I es de carácter teórico - práctico dirigido a proporcionar al estudiante la oportunidad de identificar, definir y aplicar el manejo administrativo- contable de una empresa organizada sea  esta grande o pequeña.

El propósito del curso es brindar la orientación a fin de que el alumno pueda insertarse eficientemente en el campo laboral

El desarrollo del curso comprende: elaboración de informes basándose en el estudio y análisis de la organización de las diferentes áreas, hasta llegar al conocimiento de todo el proceso contable para la elaboración de la Información Financiera a ser reportados a la Gerencia.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '110040',
	            'texto' => 'El curso de Contabilidad Gubernamental II es de carácter teórico - práctico orientado al afianzamiento de los conocimientos básicos de las entidades que conforman el Sector Público Nacional.

El propósito del curso es lograr que el estudiante aplique correctamente el plan contable gubernamental en las operaciones del gobierno central y gobiernos locales.

El desarrollo del curso comprende: Aplicación del plan contable gubernamental en las operaciones contables del Encargante y operaciones contables del Encargado, aspectos generales de los gobiernos locales, conocimiento del SIAF para gobiernos locales, presentación de los Estados Financieros y Estados Presupuestales de las Municipalidades.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '110036',
	            'texto' => 'El curso de Auditoria Operativa (Integral), es de carácter teórico - práctico orientado al conocimiento de la naturaleza, contenido, metodología y sistema de evaluación del desarrollo de la Auditoria Integral.

El propósito del curso es la de brindar, los conocimientos sobre estudio y consolidación de los distintos tipos de Auditoria como son: Auditoria de Gestión, Auditoria de Sistemas, Auditoria Tributaria, Auditoria Operativa, Auditoria Ambiental, Auditoria de Riesgos, aplicables a las diversas organizaciones empresariales en el contexto de la competitividad y la globalización de la economía.

El desarrollo del curso comprende: Marco conceptual, criterios, principios, objetivos y Normas de Auditoria, Fases de la Auditoria, Diagnóstico y Plan Estratégico de la Auditoría.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '100037',
	            'texto' => 'El curso de Ética Profesional propone el estudio y el diálogo en torno a los principales problemas de conducta profesional en su actuación como Contador Público, en la empresa, en sociedad y ante sus colegas.

El propósito del curso es proporcionar al alumno las bases sólidas para un correcto desempeño profesional .

El desarrollo del curso comprende: Concepto de profesión. El Contador Público ante la ética. Legislación pertinente; Deontología. Teorías de la Obligatoriedad Moral; Ética Profesional del Contador Público; Actitud, responsabilidad y obligaciones éticas;  El Código de Ética Profesional del Contador Público Colegiado;  Normas de Ética Profesional;  Aspectos Normativos del Código de Ética del Contador Público.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '110042',
	            'texto' => 'El curso de Organización y Diseño de Sistemas Contables es de carácter teórico - práctico orientado a conocer la metodología de desarrollo de sistemas que faciliten la administración y control de los sistemas contables.

El propósito del curso es brindar al estudiante los conocimientos necesarios para la utilización de herramientas manuales y automatizadas para el diseño de sistemas contables.

El desarrollo del curso comprende el Planeamiento y Diseño de sistemas de información, tanto operativos como gerenciales.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '270006',
	            'texto' => 'El curso de Práctica Pre Profesional II es de carácter teórico - práctico que proporciona al estudiante la capacidad de análisis, desarrollar su capacidad de creación e imaginación para superar problemas relacionados con la toma de decisiones que puedan presentarse durante el desarrollo de su actividad profesional al formar parte de una organización.

El propósito del curso es lograr que el estudiante participe en los procesos de planificación ejecución y supervisión de las acciones afines al que hacer de la administración y la contabilidad.

El desarrollo del curso comprende: elaboración de informes parciales sobre las actividades organizativas de las empresas, elaboración y sustentación de un Informe final que contenga propuestas que contribuyan a generar un eficiente sistema contable.



'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '110043',
	            'texto' => 'La Asignatura proporcionará la teoría y práctica de los principios de contabilidad generalmente aceptados que son empleados en las Empresas de producción extractiva (Minera y Petrolera), Hotelera y de Servicios Turísticos así como de la Agropecuaria.

El propósito es permitir el conocimiento de los aspectos generales y específicos de la Legislación Nacional para este tipo de actividades favoreciendo la comparación con otras legislaciones Latino Americanas.

Comprenderá el análisis y desarrollo de los casos prácticos y permitirá un adecuado análisis e interpretación de las áreas correspondientes; minera, petrolera, hotelera, servicios turísticos y agraria.



'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '100040',
	            'texto' => 'El curso presenta los aspectos conceptuales fundamentales de la administración   como ciencia aplicativa. Con el propósito del desarrollo de las diversas teorías escuelas y enfoques de la administración, que constituyen base de las ciencias administrativas hasta la actualidad y las nuevas tendencias modernas de la administración.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '100041',
	            'texto' => 'El curso presenta una visión del desarrollo del proceso administrativo y sus fundamentos teóricos-prácticos, tienen el propósito de mostrando a la empresa como sistema dentro de un entorno medioambiental, relacionando el proceso administrativo con las áreas funcionales de la empresa.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '100044',
	            'texto' => 'El curso pertenece al área de Formación Profesional Administración, de naturaleza teórico-práctica, busca que el participante conozca, haga uso y valore los conceptos, métodos y técnicas aplicadas a las personas, asimismo, contribuye al entendimiento de los aspectos humanos, sociales, técnicos y administrativos de la gestión de personas para mantener competitivas a las organizaciones que crea o de las que forma parte.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '100042',
	            'texto' => 'El curso de Contabilidad General es un curso teórico -  practico orientado a conocer aspectos generales de la contabilidad.

El propósito del curso es brindar al estudiante los conocimientos sobre el sistema de información contable para llegar a la correcta presentación de los Estados Financieros.

El desarrollo del curso comprende: El concepto de contabilidad como ciencia, importancia y funciones, conocimiento de las cuentas contables que conforman los estados financieros básicos, los libros de contabilidad, aplicaciones prácticas, desarrollo de monografías integrales hasta obtener los estados financieros básicos.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '110037',
	            'texto' => 'El curso es de carácter teórico-practico, orientado al tratamiento los costos empresariales; su planificación y control, al análisis de los costos históricos y predeterminados y a la formulación de la información de costos con fines de Gestión empresarial.

Comprende el estudio de conceptos básicos de costos, objetivos, elementos de costos industriales y su clasificación; control y costeo de los materiales, de la mano de obra; de los costos indirectos de fabricación; desarrollo de los sistemas de costos históricos y predeterminados, el sistema de costos ABC.; la formulación de los estados de costos de producción y los estados de resultados.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '100048',
	            'texto' => 'El entorno actual le impone a las empresas, requerimientos que le den el nivel de competitividad necesario para mantenerse en un mercado globalizado. El reto de las empresas es la búsqueda constante de estrategias que le permitan liderazgo, ventaja competitiva, mayor productividad. Esto obliga a las empresas a generar y renovar constantemente sus sistemas de información contable-administrativos que apoyen a la formulación e implementación de estrategias competitivas. La materia de Contabilidad Gerencial tiene como propósito integrar las teorías, las técnicas y herramientas adquiridas en las materias de contabilidad de costos, administración, economía, informática y estadística que le permitan al alumno desarrollar las habilidades de análisis, integración, visualización de contextos para la construcción de propuestas y soluciones que llevan al logro de las metas de la organización. Abarca las siguientes aspectos: El papel de la información contable en las empresas competitivas, clasificación y comportamiento de los costos, modelo costo-volumen-utilidad, sistemas alternativos de costos, el papel de la información administrativa en las organizaciones en el corto plazo, sistemas de control administrativos, costos de calidad  en la medición del desempeño.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '240004',
	            'texto' => 'En el  desarrollo de la asignatura se impartirán los conocimientos teórico-prácticos  que se dan en las operaciones financieras del corto, mediano y largo plazo; de tal manera que un profesional pueda con destreza resuelva los problemas de aplicación que se presentan en el transcurso de sus  actividades.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '100003',
	            'texto' => 'El curso corresponde al área finanzas de Formación General siendo de carácter teórico-práctico. Se propone desarrollar los conceptos básicos sobre las finanzas modernas.

Abarca los siguientes aspectos: El sistema financiero nacional e internacional. El valor del dinero en el tiempo. El Riesgo. Análisis financiero. Planeamiento y control financiero. Política de capital de trabajo. Gestión de tesorería y valores negociables. Gestión de cuentas por cobrar (créditos). Gestión de inventarios. Financiamiento de corto plazo. Casuística para cada tema.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '100043',
	            'texto' => 'El curso esta orientado a la Aplicación del Marketing  en el conocimiento de la oferta y demanda del mercado ; para tal fin es necesario que el alumno conozca las diferentes definiciones que tienen que ver con: mercado,, mercado potencial, mercado negativo, necesidad deseo, a sí como la evolución del marketing, sus funciones y, la segmentación de mercados, deberá alcanzara conocimientos que le permitan el diseño, desarrollo y aplicación de los métodos y técnicas de la investigación de mercados. Asimismo se debe enseñar a tomar decisiones óptimas conducentes a mejorar la eficiencia y rentabilidad de las empresas y/o proyectos, hacer hincapié en el desarrollo de investigaciones que conduzcan a mejorar la calidad de los servicios y productos que se ofrecen en nuestro país a los turistas tanto nacionales como extranjeros, deberá lograr un conocimiento general de las variables manejables del marketing: producto, plaza, precio y promoción. Deberá aprender a desarrollar un plan de marketing operativo.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '200023',
	            'texto' => 'Proporciona a los participantes los principios y técnicas básicas fundamentales sobre formulación y evaluación del costo total de producción de una empresa y su incidencia en los resultados o utilidades para un período económico determinado.

Brinda, el conocimiento básico de las técnicas de elaboración y administración presupuestal, capacitándolo en el uso del presupuesto como herramienta de gestión financiera y control empresarial.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '100047',
	            'texto' => 'El curso pertenece al área de Formación Profesional / Administración, de naturaleza teórico-práctica, estudia en forma rigurosa los cambios planeados en las organizaciones para el desarrollo organizacional, a nivel individual, grupal y organizacional, así como los procesos, las intervenciones y la evaluación de los mismos, con énfasis en la creación y mantenimiento de una cultura y un clima organizacional sinérgico, competitivo y saludable, para impulsar la competitividad de las organizaciones que crea o de las que forma parte.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '100069',
	            'texto' => 'Proporciona al estudiante un conjunto de elementos que le permite prevenir los defectos y minimizar la variedad de los procesos. El estudiante aprenderá los conceptos, filosofía y herramientas que permitan implementar y administrar el proceso de mejoramiento continuo de cualquier organización.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '100004',
	            'texto' => 'El curso corresponde al área de finanzas de Formación General siendo de carácter teórico-práctico,  siendo complementario  al curso de Administración Financiera I. Se propone, en este curso desarrollar los siguientes aspectos: Los criterios financieros para la selección de un portafolio inversiones. Elaboración del presupuesto de capital por certidumbre. El riesgo para toma de decisiones e incertidumbre. El costo de Capital. Es estructura de capital y apalancamiento. La política de distribución de dividendos. Financiamiento de Largo Plazo. Casuística para cada tema.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '100046',
	            'texto' => 'El curso acerca al estudiante al conocimiento teórico práctico del Consumidor en el contexto actual de un mundo globalizado, con lo cual llegado el momento podrá tomar decisiones a la ejecución de un Plan de Comercialización ya sea este de productos tangibles o intangibles.

El curso a sido diseñado para que el estudiante comprenda los diferentes temas del comportamiento del consumidor como son:

Enfoques clásicos del comportamiento del consumidor, Modelo de Engel-Blackwell-Kollat, modelo de comportamiento de compra, clasificación de grupos sociales, la familia, ciclo de vida familiar, decisión de compra, modelo motivacional, características personales: Motivación,  Percepción,  Aprendizaje, memoria y  Actitudes.

Asimismo se revisará segmentación de mercado tanto de compra como industrial, así como variables de segmentación en especial valores y  estilos de vida.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '100073',
	            'texto' => 'Proporcionará el marco teórico conceptual del planeamiento y control gerencial, como su relación e importancia en la gestión de las empresas. El curso comprende temas referentes a las funciones administrativas de organización y planificación, respectivamente: La Organización como elemento del proceso administrativo; Departamentalización, centralización, descentralización, desconcentración; La formalización: organigramas, manuales, reglamentos, flujogramas; El cambio organizacional; Los Sistemas de planificación y el proceso administrativo; Planes, clasificación, principios; Programación, métodos, técnicas; Control, conceptos, clasificación.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '110010',
	            'texto' => 'Considera la dirección estratégica como paradigma actual del sistema de dirección de las empresas y de las organizaciones en general. Consideraremos como contenidos principales: Fundamentos de Dirección Estratégica; Orígenes y Evolución del Concepto de Estrategia Empresarial; Concepto y método de la Dirección Estratégica; Las Escuelas de la Dirección Estratégica: Teorías principales; El Análisis Estratégico: El Diagnostico Externo; El entorno general de la empresa; El entorno particular de la empresa: Análisis de los sectores industriales; Análisis de la competitividad de la empresa: Ventajas Competitivas; El Análisis Estratégico: El Diagnostico Interno; Misión y objetivos de la empresa; Los recursos y las capacidades de la empresa; El Diagnostico Estratégico de la Empresa: Enfoques y Técnicas Principales.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '200030',
	            'texto' => 'El curso busca proporcionar los conceptos básicos involucrados en la investigación de mercados que permitan ser un usuario más efectivo de los resultados de la misma. En el curso se desarrolla los siguientes temas: Papel de la investigación de mercados, etapas de la investigación de mercados, recolección de datos y diseño de cuestionarios, métodos de entrevista, medición de actitudes y construcción de escalas, análisis y uso de la información.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '100010',
	            'texto' => 'El curso corresponde al área de finanzas siendo su carácter teórico - práctico, Este curso permitirá a nuestros alumnos interrelacionar los conocimientos adquiridos en Administración financiera I y II así efectuar un análisis de los problemas relacionados con las transacciones financieras que realizan las sociedades anónimas en el mercado. En su primera parte, la asignatura  trata sobre conceptos introductorios de economía financiera, para luego enfocar en tres grandes temas: el financiamiento vía deuda, el financiamiento vía capital y fusiones y adquisiciones.

A modo de complementario, el curso desarrolla también conceptos introductorios sobre instrumentos  de cobertura financiera (hedging) y temas de gobierno corporativo.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '100074',
	            'texto' => 'Este curso pertenece al área de Administración.  De naturaleza teórico - práctica, cuyo objetivo es enseñar, capacitar y entrenar al estudiante en técnicas y metodologías modernas que actualicen tanto el entorno de la racionalización, como la distribución del trabajo en la estructura organizacional. Su propósito es lograr alcanzar los objetivos, metas o fines del proceso administrativo; dando un enfoque organizacional, de trabajo en equipo, liderazgo y manejo del cambio.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '100014',
	            'texto' => 'Se resaltará la importancia de la información como un recurso estratégico para la dirección de empresas. A partir de los fundamentos y métodos básicos para la gestión de la información, se abordarán los temas de mayor actualidad para la administración de los recursos informáticos en una organización moderna.  Entre sus tópicos consideraremos: Los Sistemas de Información en la empresa; Los procesos de decisión empresarial y las clases de Sistemas de Información; Las tecnologías de la Información, plan estratégico; La administración de proyectos de sistemas de información; La infraestructura informática de la empresa; El control de los servicios de información.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '110031',
	            'texto' => 'El curso de Contabilidad Pública es de carácter teórico - práctico, orientado a conocer los aspectos básicos, principios y fundamentos que sustentan la doctrina y técnica de la Administración  Presupuestaria en los entes que conforman el Sector Público Nacional.

El propósito del curso es brindar al estudiante los conocimientos de sobre la formación de las cuentas nacionales, partiendo de la aplicación de la contabilidad gubernamental en las entidades del Sector Público Nacional.

El desarrollo del curso comprende: Aspecto funcional y organizacional del Estado; Sistemas Administrativos de la Actividad Pública; Proceso Presupuestario y Contable; Normatividad del Sistema presupuestal y del Sistema de  Contabilidad Gubernamental en el marco del SIAF. (Sistema Integral de Información Financiera).

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '110016',
	            'texto' => 'Permite enfocar las técnicas del proceso de formulación de la estrategia, analizando las distintas estrategias genéricas y su planificación. Entre sus temas destacan: La Formulación de la Estrategia; El Proceso Estratégico: Enfoques Principales; La evaluación de la Estrategia; Elección de una Estrategia; Análisis de Estrategias Empresariales; Estrategias Genéricas; Estrategias de Diversificación; Estrategias de Innovación y de Reestructuración; El Sistema de Planificación y Acción Estratégica; El Proceso de Planificación y Control Estratégico; Implantación de la Estrategia en la organización; Sistemas de apoyo en la acción estratégica.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '100028',
	            'texto' => 'Tiene por finalidad favorecer el manejo de  las más importantes metodologías cuantitativas de planificación y toma de decisiones empresariales. Son temas principales del curso: El proceso de planificación y toma de decisiones; Fundamentos de informática y herramientas informáticas de cálculo; Modelos basados en Hojas de Cálculo; Modelización y resolución de modelos de Programación Lineal, Entera y Mixta; Modelización y resolución de modelos de Simulación; Utilización de los modelos anteriores a problemas de producción, financiación, marketing y organización.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '140018',
	            'texto' => 'El curso corresponde al área finanzas, siendo una asignatura complementaría a los cursos de finanzas, en el cual le va a permitir al estudiante tener un panorama general acerca del sistema financiero. Se propone presentar como nuestro sistema financiero ha evolucionado ante los cambios ocurridos a nivel internacional.

Abarca los siguientes aspectos: El sistema financiero nacional e internacional. Marco legal. Organismos de supervisión. Metodologías de evaluación.  Retos derivados del acuerdo de Basilea (Basilea II). El impacto de la Microfinanzas en la evolución del Sistema Financiero. Empresas Subsidiarias. Rol del sistema financiero como motor de crecimiento.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '100056',
	            'texto' => 'La presente asignatura comprende aspectos teóricos prácticos orientados a proporcionar al estudiante los elementos necesarios para realizar la administración logística de entrada y de salida, que comprenden operaciones de suministro de materiales y distribución de las mercancías, aplicadas a la empresa industrial, servicios y comercial

El curso en su primera parte desarrolla el sistema de administración logística y los sistemas de control de inventarios; así como los métodos para planear el requerimiento de materiales y aplicar el justo a tiempo y las operaciones sincronizadas, conjuntamente con las técnicas en gestión de compras.

La segunda parte comprende la gestión de almacenamiento, sistemas y las operaciones de almacenaje; conjuntamente con las técnicas de distribución física de mercancías y los medios para realizar el transporte respectivo.  Finalmente se estudiarán las operaciones inherentes a la logística internacional que comprenden las gestiones de exportación e importación de bienes.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '100057',
	            'texto' => 'El curso de publicidad pondrá al estudiante en contacto con el proceso comunicacional publicitario de una manera teórica - práctica, lo cual es importante en su formación, logrando de esta forma desarrollar actitudes positivas con respecto a productos y servicios, los temas a desarrollar estarán relacionados con la publicidad así como la actividad comercial, conocimientos desde el punto teórico de la comunicación efectiva , en especial determinar el determinar el publico objetivo, como la concientización  de la necesidad y la forma de convertirla en una estrategia creativa para después llevarla a la estrategia de medios mas conveniente, los cuales deberán contemplar la organización, el análisis y la evaluación de medios, todos desde el punto práctico.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '100070',
	            'texto' => 'Este curso tiene como objeto complementar la formación del alumno y enfrentarlo a las diferentes situaciones gerenciales y su aplicación práctica.

Durante el desarrollo del mismo se revisará el enfoque de Marketing Estratégico y sus diferentes enfoques en relación a la situación del mercado,  así como la aplicación del Plan de Marketing Estratégico y Táctico, de otro lado desarrollará y aplicará las diferentes matrices de toma decisión, teniendo presente las posiciones competitivas, de igual forma podrá obtener y organizar la información gerencial.

Logrando la formación que aporte valor a las empresas, debido a que el entorno es cada vez más competitivo y complejo, por lo que las empresas deben ser dinámicas y saber orientarse al mercado.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '100011',
	            'texto' => 'La presente asignatura comprende aspectos teóricos prácticos orientados a proporcionar al estudiante los elementos necesarios para realizar la administración de las operaciones aplicada a empresas industriales, de servicios y comerciales.

El curso en su primera parte desarrolla las técnicas de administración de las operaciones y sus estrategias, así como los métodos para realizar el diseño de un producto, el diseño de las operaciones de los servicios y el diseño de los procesos de una empresa.

La segunda parte comprende las estrategias para seleccionar la tecnología, técnicas para el análisis de las operaciones, desarrollar la capacidad, la localización y distribución, para su respectiva aplicación.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '100059',
	            'texto' => 'La Gerencia  Administrativa, es el órgano encargado de programar, organizar y dirigir las actividades en apoyo de la Gerencia General, en las distintas áreas de una empresa; en busca de la optimización de los recursos. El curso, teórico práctico se propone brindar a nuestros alumnos determinadas capacidades y habilidades. Abarca los siguientes aspectos: Las decisiones en la empresa. La evolución de la teoría micro-económica. La toma de decisiones de la gerencia administrativa clásica, análisis de problemas gerenciales. El entorno en las decisiones. Trampas en la toma de decisiones. El árbol de decisiones. El método Hoshni-Karmi, Las técnicas de decisiones cuadro de mando gerencial. Método la espina del pescado. La toma de decisiones con el enfoque de riesgo. La toma de decisiones y la planificación, método PES. El control interno de la empresa. La evaluación, el Control, el seguimiento y el monitoreo.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '100066',
	            'texto' => 'Este curso pertenece al área de Administración, de naturaleza teórico - práctica,  cuyo objetivo proporciona a los participantes una visión global y especializada en relación con las Ciencias de la Administración; así como métodos, técnicas y procedimientos; respecto al planeamiento, organización, dirección y control de organismos, instituciones y proyectos de índole nacional e internacional.  Su propósito es alcanzar los objetivos, metas o fines relacionados con el control de las organizaciones a fin de asistir a la administración de las empresas en la optimización de los resultados propuestos, la de relación existente entre la producción de bienes, servicios y los factores productivos, a través de recomendaciones o sugerencias para mejorar debilidades y deficiencias e irregularidades;  evaluando y determinando el grado de eficiencia, efectividad dentro de la competitividad en el mundo globalizado para desarrollar la gestión administrativa y operativa de la empresa. Está organizada en tres unidades didácticas.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '100072',
	            'texto' => 'El curso desarrolla conceptos del marketing desde la perspectiva de los mercados internacionales. En el curso se desarrolla los siguientes temas: Tareas del marketing internacional, Etapas en la participación del marketing internacional, variables de la mezcla de marketing.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '100075',
	            'texto' => 'La asignatura es de carácter teórico-práctico, orientada a estudiar aspectos relacionados con el comercio internacional como alternativa para ampliar mercados e incrementar la rentabilidad de las empresas. Posibilitando que el estudiante se familiarice con la operatividad del comercio internacional, las formas de contratación internacional, medios de pago, reglamentaciones aduaneras.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '100019',
	            'texto' => 'La presente asignatura es una continuación de Administración Operaciones I que comprende aspectos teóricos prácticos orientados a proporcionar al estudiante los elementos necesarios para realizar la administración de las operaciones aplicada a empresas industriales, de servicios y comerciales.

El curso en su primera parte desarrolla las técnicas inherentes al pronóstico de la demanda y producción, estudio de tiempos o medición del trabajo; así como los métodos para la planeación agregada, programación y control de las operaciones.

La segunda parte comprende la planeación y control de proyectos, desarrollo de la productividad y la medición del desempeño, técnicas de control de calidad, como soportes principales para la competitividad de una empresa.  Incluye además el mantenimiento y la seguridad industrial en la empresa.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '170001',
	            'texto' => 'El curso apunta a comprender la estructura profunda del ser humano, su esencia. A partir de la observación de la realidad el curso enfocará la dimensión más original y universal del hombre: la exigencia de un sentido, la búsqueda de un significado último de la vida.

Se verá como el descubrimiento de estas interrogantes profundas cambia la relación con la realidad y abre la aventura de la interpretación del mundo en una incondicionada simpatía hacia lo verdadero, bueno y bello que caracteriza la experiencia humana.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '170028',
	            'texto' => 'La asignatura propone analizar y reflexionar sobre los principios universales que orientan los actos humanos, de modo que el estudiante pueda reconocer y valorarse así mismo, asumiendo una conducta de vida que responda a su propia naturaleza. Serán contenidos principales del curso: la naturaleza y objeto de la Ética; El bien moral y su fundamento metafísico; El fin último del hombre; El orden moral; El obrar moral; La sociedad y el bien común: Fundamento de la sociabilidad humana, la familia, el estado, el orden de la justicia.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '190001',
	            'texto' => 'La presente asignatura comprende el estudio de los procesos históricos del Perú mediante el análisis de temas de larga permanencia y continuidad en la historia nacional.

El temario abarca el estudio, a modo de introducción, de la Historia como ciencia y, con más amplitud y profundidad el análisis histórico del Perú desde la formación y desarrollo de las sociedades pre-hispánicas hasta la época colonial.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '210001',
	            'texto' => 'La asignatura de Lengua  introduce al estudiante en la problemática de los procesos de información, comunicación y lenguaje. A partir de un análisis del proceso informativo, vinculado a la adaptación del hombre a su medio ambiente, se explica la teoría de la comunicación y su importancia. En una segunda parte, la asignatura sitúa el fenómeno de la comunicación de masa en el mundo contemporáneo. Finalmente, se analiza la comunicación lingüística, relacionando al lenguaje con el fenómeno genérico de la comunicación en el contexto de la realidad sociocultural.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '250001',
	            'texto' => 'La asignatura tiene por finalidad acompañar al alumno en el trabajo intelectual académico propio de los estudios universitarios. Para ello, el curso se desarrollará sobre la base de lecturas y estará orientado, en especial, al mejoramiento de las capacidades comunicativas (oral y escrita). Asimismo, se introducirá al alumno en la investigación académica y se le preparará para la elaboración de trabajos académicos. El estudiante, al final de la asignatura, estará preparado para el trabajo académico (análisis e interpretación), la selección y formulación de propuestas de investigación y de artículos y ensayos argumentativos.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '210002',
	            'texto' => 'El curso desarrollará en el estudiante su competencia en el dominio de la lengua escrita a partir de la observación de textos y de su experiencia como actuante lingüístico. En este sentido, el curso dará las herramientas necesarias para que el alumno se desempeñe adecuadamente en la redacción de textos académicos, competencia fundamental para su formación profesional.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '170009',
	            'texto' => 'La asignatura esta orientada a situar al estudiante frente a la hipótesis cristiana, centrando su atención en el cambio radical del método religioso determinado por Jesucristo, como hecho en la historia. Se profundizarán los términos de dicho fenómeno  para reconocer su carácter ineludible, recorriendo paso a paso la experiencia de quienes conocieron a Jesús y las posibles trayectorias de la persuasión o del rechazo.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '170010',
	            'texto' => 'El curso, partiendo de la problemática de cómo es posible hoy tener la misma experiencia de los primeros apóstoles y alcanzar una certeza sobre la persona de Cristo, analiza en la primera parte tres distintos métodos, en la última, aquello específico de la experiencia católica.

La Iglesia, continuación sacramental de la presencia de Cristo, constituye el cumplimiento de la promesa de Jesús: "Estoy con vosotros todos los días hasta la consumación  de los siglos", posibilidad histórica de un encuentro humano con el Dios encarnado.

Ante  la propuesta  de la Iglesia y  su lenguaje, el hombre  de hoy  vive una dificultad  que  no es posible  censura,  por eso, el  curso  dedica  un  capítulo para profundizar en el origen de tal incomprensión.

La Iglesia católica ¿es la iglesia que Cristo quiso y fundó y que los primeros cristianos constituyeron? Esta es la pregunta implícita sobre la cual se desarrolla el último capítulo sobre los factores constitutivos de la Iglesia.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '200045',
	            'texto' => 'El alumno después de conocer los distintos elementos que componen el Sistema Informático (hardware más software), aprenderá a utilizar correctamente las herramientas que éste les proporciona, para interactuar así con el Sistema de Información Automatizado de la Empresa.

Conocerá los sistemas operativos más utilizados, las redes locales, los servicios de Internet, herramientas ofimáticas de productividad -fundamentalmente- las hojas de  cálculo, y los gestores de bases de datos.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '170002',
	            'texto' => 'El curso tratará de plantearse desde un orden interno, desde el punto de vista mismo de la Historia de la Iglesia. Planteando como la doctrina social de la Iglesia viene formándose en el tiempo, enfrentando los diferentes problemas que encuentra en su camino. Por eso los dos pilares del estudio serán, de un lado, los documentos oficiales de la doctrina social y, por el otro, las obras sociales, los hechos y la vida de los Santos.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '120008',
	            'texto' => 'Introducirá al estudiante en el conocimiento del ordenamiento jurídico peruano y, en especial, en las materias relativas a la contabilidad, economía, empresa y presupuestos generales del estado, para lograr que el alumno maneje con propiedad los conceptos esenciales de las relaciones jurídico privadas y públicas. El curso es de carácter panorámico y comprende los tópicos de: teoría jurídica básica del derecho; nociones jurídicas básicas sobre el ordenamiento constitucional peruano; régimen jurídico de las personas, de los actos jurídicos, de las obligaciones, de los contratos en general, de los registros públicos y de los bienes en general.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '160004',
	            'texto' => 'La asignatura tiene por finalidad proporcionar al estudiante los conceptos y los métodos que se utilizan en el análisis  de datos numéricos así como la utilización de los gráficos y de las medidas de resumen.

Además contiene la introducción de la Teoría de Probabilidades que es el soporte teórico de la Inferencia Estadística.

Comprende también  números Índices  lo que permiten realizar comparaciones de variaciones de precios, producción etc.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '160002',
	            'texto' => 'En esta asignatura se trata de que el alumno desarrolle una comprensión intuitiva de la estadística y del razonamiento estadístico. El curso comprende las nociones de muestreo, los conceptos básicos de estimación de parámetros así como la contrastación de hipótesis acerca de una, dos medias y proporciones poblacionales. Comprende también  la prueba de la Ji Cuadrado como el análisis de varianza.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '160005',
	            'texto' => 'Esta asignatura motiva al estudiante a dejar a un lado el muestreo no probabilístico al contar con la opción de utilizar las diferentes técnicas de muestreo probabilístico, los cuales producen resultados cuya precisión puede ser medida estadísticamente.  Comprende básicamente la presentación de las diferentes técnicas de muestreo tales como el muestreo aleatorio simple (sin reposición), muestreo aleatorio estrataificado, estimación de razón, regresión y diferencia, muestreo sistemático y muestreo por conglomerados.  En resumen, la asignatura trata de las peculiaridades de muestreo e inferencia a menudo encontrados en el comercio, las ciencias sociales y la administración de recursos naturales.  Asimismo se describen posprincipios básicos de un diseño experimental.  Finalmente se desarrolla un capítulo de los principales métodos no paramétricos como alternativas de análisis de datos.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '240005',
	            'texto' => 'Es una asignatura básica y formativa que se realiza en el Primer Semestre Académico de Estudios Generales.

Esta Asignatura imparte los conocimientos necesarios para que los estudiantes puedan resolver problemas en otros campos de su especialidad utilizando el razonamiento lógico matemático y el manejo de la información con criterio científico.

El contenido de la asignatura esta constituido por: Conjuntos, el Sistema de los Números Reales, Relaciones y   Funciones, puntos importantes que tendrán aplicaciones en asignaturas de nivel superior.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '240006',
	            'texto' => 'Comprende los siguientes temas: Nociones de Geometría Analítica; operaciones con matrices, matrices especiales, resolver sistemas de ecuaciones lineales, Determinante; funciones exponencial y logarítmica; Logaritmos.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '240001',
	            'texto' => 'Es una asignatura formativa de carácter teórico - práctico, que se realiza en el tercer ciclo, para que el alumno pueda aplicar los conocimientos adquiridos en otras asignaturas de su respectiva especialidad.

El contenido de la presente asignatura está formada por los siguientes temas: Funciones- Límites, Continuidad, Derivadas, Aplicaciones de la Derivada. Diferenciación Para funciones de una o dos variables. Curvas de nivel.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '240009',
	            'texto' => 'El   curso de Análisis Matemático II, comprende los siguientes temas: Integral Indefinida, Integral Definida, Integrales Impropias, Aplicaciones de la Integral Definida, Ecuaciones Diferenciales de Primer Orden, Funciones de dos o más variables, Derivadas Parciales, Máximo y Mínimo de Funciones de dos Variables, etc.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '100049',
	            'texto' => 'Este curso introduce al alumno con los principios, técnicas y filosofía de la Investigación de Operaciones. Se concentra en la programación matemática presentando modelos lineales. Se enfatiza el modelamiento, el análisis por computadora y la interpretación de los resultados. Sus tópicos principales son: Programación Lineal; Representación gráfica; El Método Simplex; Teoría de Dualidad, interpretación económica; Análisis de Sensibilidad; Teorías de Redes.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '140036',
	            'texto' => 'Análisis del entorno general de la empresa en sus aspectos económico, político, social y tecnológico. Especial  énfasis en el entorno económico, estudiando la naturaleza y objetivos de la empresa, los distintos tipos de empresa, sus diversas formas de desarrollo y sus interrelaciones con otros agentes económicos. Introducción a las distintas áreas funcionales de la empresa, buscando ofrecer una visión de conjunto de todas sus actividades.  En la  asignatura se presenta como una visión global de la empresa el microentorno  desde los fundamentos de la gestión empresarial y sus distintas áreas funcionales así como del microentorno como son las estructuras de mercado local e internacional.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '270021',
	            'texto' => 'El curso de Prácticas Pre Profesionales I es de carácter teórico - práctico dirigido a proporcionar al estudiante la oportunidad de identificar, definir y aplicar el manejo administrativo de una empresa organizada sea  esta grande o pequeña.

El propósito del curso es brindar la orientación a fin de que el alumno pueda insertarse eficientemente en el campo laboral

El desarrollo del curso comprende: elaboración de informes basándose en el estudio y análisis de la organización de las diferentes áreas, hasta llegar al conocimiento de todo el proceso contable para la elaboración de la Información Financiera a ser reportados a la Gerencia.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '270022',
	            'texto' => 'El curso de Práctica Pre Profesional II es de carácter teórico - práctico que proporciona al estudiante la capacidad de análisis, desarrollar su capacidad de creación e imaginación para superar problemas relacionados con la toma de decisiones que puedan presentarse durante el desarrollo de su actividad profesional al formar parte de una organización.

El propósito del curso es lograr que el estudiante participe en los procesos de planificación ejecución y supervisión de las acciones afines al que hacer de la administración.

El desarrollo del curso comprende: elaboración de informes parciales sobre las actividades organizativas de las empresas, elaboración y sustentación de un Informe final que contenga propuestas que contribuyan a una acertada toma de decisiones.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '100065',
	            'texto' => 'La presente asignatura pondrá  el estudiante en contacto con los  rasgos históricos de  y la nueva gestión pública, contexto mundial, concepciones y perspectivas actuales sobre la gestión pública. Estructura Político Administrativa del Estado Peruano. Fines y Funciones del Estado. El poder ejecutivo  como ente administrador del Estado. Las acciones administrativas: Sectorización, noción; los Sectores de la Administración Pública; Sistematización: noción, clases de sistemas administrativos; Descentralización; Regionalización, noción, organización y funciones de las regiones, y Desconcentración: noción, clases. La función Pública peruana: generalidades. - eficacia social - Compromiso - Participación - El potencial humano en la Administración Pública - La función pública en la Constitución. La responsabilidad en la función pública - El servidor y el  funcionamiento público. La carrera administrativa.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '100055',
	            'texto' => 'El curso busca brindar al estudiante de administración un conjunto de herramientas informáticas aplicadas que les permitan utilizar eficientemente y con seguridad las características básicas del entorno de trabajo, permitiéndole conocer los distintos elementos que componen los Sistemas Informáticos (hardware más software) y aprenda a utilizar correctamente las herramientas que éstos le proporcionan, tanto las de tipo estándar como las de diseño a medida.

Debiendo conocer las distintas configuraciones de equipos informáticos, los sistemas operativos más utilizados, las redes locales, los servicios de Internet, las posibilidades de negocio del e-commerce; así como de los nuevos instrumentos del Sistemas de Información Aplicada, desde las herramientas ofimáticas de productividad – fundamentalmente- las hojas de cálculo, y los entornos de bases de datos, hasta el e-business y los aplicados a la Gestión Empresarial.

Análisis de modelos de Control, Planificación y Simulación, realizados con hoja de cálculo, basados en casos prácticos con datos reales y de complejidad creciente, como herramientas eficaces de apoyo a la toma de decisiones.



'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '180001',
	            'texto' => 'Se tiene como finalidad el desarrollo de sus habilidades creativas, motoras y artísticas,  a fin de contribuir en el estado bio-psico-social del alumno. Se combina los aspectos prácticos y teóricos que requiere el manejo de las disciplinas deportivas, de danza, teatro y arte.

'		]);
        Sumilla::create([
	            'plan' => '6',
	            'cod_curso' => '180002',
	            'texto' => 'Su finalidad es complementar y afianzar las habilidades creativas, motoras y artísticas del alumno. Se establecen actividades tales como exposiciones, puestas de escena, campeonatos deportivos con el propósito de integrar los conocimientos teóricos prácticos aprendidos con el desarrollo aplicativo de cada disciplina.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100207',
	            'texto' => 'Este curso tiene como objeto complementar la formación del alumno y enfrentarlo a las diferentes situaciones gerenciales y su aplicación práctica. Durante el desarrollo del mismo el enfoque desarrolla la capacidad de organizar y planificar mediante el conocimiento sobre el área y profesión de Marketing Estratégico y sus diferentes enfoques en relación a la situación del mercado, así como la aplicación del Plan de Marketing Estratégico y Táctico, de otro lado desarrollará y aplicará las diferentes matrices que desarrollen su capacidad y habilidad para la  toma decisión, teniendo presente las posiciones competitivas, de igual forma podrá obtener y organizar la información gerencial. Logrando la formación que aporte valor a las empresas, debido a que el entorno es cada vez más competitivo y complejo, por lo que las empresas deben ser dinámicas y saber orientarse al mercado, con compromiso con su medio socio cultural.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100037',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100047',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100048',
	            'texto' => 'El curso tiene como propósito integrar las teorías, las técnicas y las herramientas adquiridas en las materias de contabilidad general y  administración que le permita llegar al alumno a desarrollar las habilidades de análisis, integración de la información para la construcción de propuestas y soluciones que llevan al logro de los objetivos de la organización.  Se pondrá énfasis en el análisis financiero de los estados financieros y su relación con los costos empresariales.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100049',
	            'texto' => 'El curso brinda los contenidos esenciales para comprender las técnicas y filosofía de Investigación de Operaciones en las empresas, se enfatiza el modelamiento de programación lineal e interpretación de los resultados  de la actividad administrativa.  Se pondrá énfasis a la rrepresentación gráfica; El Método Simplex; Teoría de Dualidad, interpretación económica; Análisis de Sensibilidad; Teorías de Redes.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100053',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100070',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100166',
	            'texto' => 'La asignatura comprende aspectos teóricos prácticos de reingeniería de procesos empresariales, orientados a proporcionar al estudiante los elementos necesarios para la aplicación del rediseño radical de los procesos para alcanzar mejoras espectaculares en una empresa que haga posible la satisfacción del cliente con el uso eficiente de recursos y poder mantenerse competitiva en el mercado.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100075',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100090',
	            'texto' => 'El curso de Administración I comprende el análisis del ambiente general en el que compiten las empresas. Se analiza la teoría general de la administración y la empresa, desde la planeación, organización, dirección y control. Introduce al alumno en el uso de casos como método de enseñanza-aprendizaje, promoviendo el desarrollo de habilidades sociales e incidiendo en la práctica de valores a toma de decisiones.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '110016',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '110047',
	            'texto' => 'Proporciona a los participantes las capacidades para entender finalidades, características, procesos y componentes de un sistema de control de gestión, para utilizar las técnicas básicas fundamentales de relevación de los costos, de cálculo de costos de un producto y para enfrentar análisis para toma de decisiones.

Brinda  el conocimiento básico de las técnicas de elaboración y administración presupuestal, capacitándoles en el uso del presupuesto como herramienta de gestión financiera y control  empresarial.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '110052',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '110053',
	            'texto' => 'Las Finanzas Corporativas no solo es un concepto; si no es una serie de procedimientos, técnicas, actividades, responsabilidades,  metas, misiones, encaminadas a crear estrategias para mejorar el desarrollo financiero de las organizaciones y de esa manera lograr la creación de valor.

Las Finanzas Corporativas es el área específica de las finanzas que se ocupa de las decisiones financieras que toman las empresas, y los instrumentos y análisis utilizados para tomar esas decisiones. Está dividida entre el largo plazo o decisiones de inversión de capital, y el corto plazo, la gestión del capital. Los dos están relacionados con el valor de la empresa que será mayor cuando el rendimiento del capital, en función de la gestión del capital de trabajo, excede al coste de capital, que resulta de las decisiones de capital a largo plazo. Las Finanzas Corporativas están estrechamente relacionadas con las finanzas de gestión, que es un término más amplio, que describe las técnicas financieras disponibles para todas las formas de empresa comercial, empresarial o no.



'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '120001',
	            'texto' => 'El contenido del presente curso está orientado a introducir a los alumnos en los aspectos más importantes del Derecho Comercial como instrumento regulador de los intercambios comerciales realizados tanto individualmente como en masa.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '120003',
	            'texto' => 'Es una asignatura teórica que brinda al estudiante los conocimientos sobre la Teoría general del Derecho Tributario, desde el punto de vista doctrinario, a fin que el alumno comprenda y reflexione acerca de su importancia en el desarrollo de las relaciones jurídico comerciales, como fuente indispensable en su formación profesional y así aportar valores de responsabilidad, legalidad y honestidad a la sociedad peruana.

Incluye los Principios del Derecho tributario, los conceptos de carácter general, sus efectos en la vida económica y financiera del país y el Sistema Tributario Peruano.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '120008',
	            'texto' => 'Introducir al estudiante en el conocimiento del ordenamiento jurídico peruano, para lograr que el alumno maneje con propiedad los conceptos esenciales de las relaciones jurídicas privadas y públicas. El curso es de carácter panorámico y comprende los tópicos de: teoría jurídica básica del derecho; nociones jurídicas básicas sobre el ordenamiento constitucional peruano; régimen jurídico de las personas naturales y jurídicas, de los actos jurídicos, de las obligaciones, de los contratos en general y de los bienes en general.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '120009',
	            'texto' => 'El curso de Derecho Laboral, tiene por objeto proporcionar al alumno un conocimiento

integral de las normas legales que rigen las relaciones laborales entre trabajadores y

empleadores de la actividad privada. Se estudiará la naturaleza jurídica, fuentes y autonomía del Derecho Laboral analizando los principales derechos y obligaciones del trabajador y del empleador dentro del régimen laboral de la actividad privada, con especial referencia a la relación individual de trabajo. Y se  analizarán el contrato de trabajo los sujetos, derechos obligaciones y beneficios que se originan en el mismo.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '140041',
	            'texto' => 'El curso brinda los contenidos esenciales para explorar los temas avanzados del enfoque microeconómico de la actividad económica. Brindando al educando, un medio de ampliar la fuente teórica disponible para mejorar el análisis económico aplicado de la economía peruana.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '140049',
	            'texto' => 'La asignatura tiene como propósito que el estudiante conozca los conceptos básicos de la teoría de la regulación y la relación del Estado con las empresas privadas en el marco de la economía de mercado. Además, proveer las bases de conocimiento necesarias para analizar las políticas regulatorias en industrias con segmentos caracterizados como monopolios naturales, buscando identificar las formas específicas de la regulación y los beneficios y costos de su implementación.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '140051',
	            'texto' => 'La asignatura de Economía tiene un carácter teórico-práctico. Se orienta a dotar al estudiante los conceptos e instrumentos básicos para observar y comprender la realidad socioeconómica del país

El contenido de la asignatura está organizado en cuatro unidades que son las siguientes: (i) Conceptos y problemas fundamentales de la Economía, (ii) El comportamiento del consumidor y la demanda, (iii) La empresa: producción, costos y beneficios, (iv) La Macroeconomía y las fluctuaciones económicas.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '160001',
	            'texto' => 'Esta asignatura motiva al estudiante a utilizar las diferentes técnicas de muestreo y distribuciones de probabilidad de los estadísticos, que sirve de base para determinar las estimaciones de los parámetros, las pruebas de hipótesis, independencia de variables. Asimismo se describen los principios básicos de regresión lineal simple y múltiple.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '160004',
	            'texto' => 'La asignatura tiene por finalidad proporcionar al estudiante los conceptos y los

métodos que se utilizan en el análisis de datos numéricos así como la utilización de los gráficos y de las medidas de resumen.

Además contiene la introducción de la Teoría de Probabilidades que es el soporte teórico de la Inferencia Estadística.

Comprende también números Índices lo que permiten realizar comparaciones de variaciones de precios, producción etc.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '170001',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '170009',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '170010',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '180001',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '180002',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '210001',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '210002',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '240001',
	            'texto' => 'Esta Asignatura imparte los conocimientos necesarios para que los estudiantes desarrollen competencias que le permitan resolver problemas básicos de su especialidad, utilizando el razonamiento lógico matemático y el manejo de la información con criterio científico.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '240005',
	            'texto' => 'Esta Asignatura imparte los conocimientos necesarios para que los estudiantes desarrollen competencias que le permitan resolver problemas básicos de su especialidad, utilizando el razonamiento lógico matemático y el manejo de la información con criterio científico.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '240006',
	            'texto' => 'Esta Asignatura imparte los conocimientos necesarios para que los estudiantes desarrollen competencias que le permitan resolver problemas básicos de su especialidad, utilizando el razonamiento lógico matemático y el manejo de la información con criterio científico.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '250001',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '140063',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100159',
	            'texto' => 'El curso brinda los contenidos esenciales para comprender la actividad económica nacional e internacional, y su interacción con las actividades más importantes de la empresa. Se pondrá énfasis en el diseño de la fórmula empresarial, como herramienta para entender la dinámica de las organizaciones con su entorno.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '110069',
	            'texto' => 'El curso brinda los contenidos teórico-práctico orientado a conocer aspectos generales de la contabilidad.

Brinda al estudiante los conocimientos sobre el sistema de información contable para llegar a la correcta presentación de los Estados Financieros y finalmente sobre estos efectuar la toma de decisiones.  Se pondrá énfasis en la aplicación del sistema de partida doble y elaboración de Estados Financieros.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100162',
	            'texto' => 'El curso de Administración II comprende el análisis de conceptos e ideas claves en relación a las teorías, estrategias y  análisis del  diseño organizacional; relacionado con  el enfoque, descripción y representación gráfica de los procesos dentro de la organización.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100160',
	            'texto' => 'La asignatura de Macroeconomía tiene un carácter teórico-práctico. Comprende la determinación y evaluación de los grandes agregados macroeconómicos, así la Macroeconomía presenta una visión simplificada de la realidad  con el fin de explicar la conducta de las variables y de los agentes agregados. Para ello se presentan modelos que pretenden ilustrar el funcionamiento de la economía y observar cómo influyen las políticas económicas sobre la economía en su conjunto.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '140064',
	            'texto' => 'En el  desarrollo de la asignatura se impartirán los conocimientos teórico-prácticos  que se dan en las operaciones financieras del corto, mediano y largo plazo; de tal manera que un profesional pueda con destreza resolver los problemas de aplicación que se presentan en el transcurso de sus  actividades.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '140066',
	            'texto' => 'El curso es de carácter teórico-práctico, orientado al tratamiento los costos empresariales; su planificación y control, al análisis de los costos históricos y predeterminados y a la

formulación   de la información de costos con fines de Gestión empresarial.

Comprende el estudio de conceptos básicos de costos, objetivos, elementos de costos

Industriales  y su clasificación; control y costeo de los materiales, de la mano de obra; de los costos indirectos de fabricación; desarrollo de los sistemas de costos históricos, el sistema de costos ABC.; la formulación de los estados de costos de producción y los estados de resultados.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '140065',
	            'texto' => 'La asignatura de Microeconomía tiene un carácter teórico-práctico. Busca examinar las temáticas mas importantes del funcionamiento de los mercados con el propósito de que el estudiante pueda manejar los conceptos, las definiciones, la representación y el análisis grafico del funcionamiento del mercado, desde la perspectiva del comportamiento de los agentes económicos individuales.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100161',
	            'texto' => 'La asignatura comprende aspectos teóricos prácticos de herramientas de informática para administración, orientados a proporcionar al estudiante los elementos necesarios para la aplicación de tecnología y sistemas de información que haga posible el procesamiento óptimo de datos de la empresa y generar información confiable y oportuna en apoyo a la toma de decisiones.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '140067',
	            'texto' => 'La asignatura se orienta a la presentación  de herramientas financieras, tanto teóricas como técnicas que permitan a nuestros alumnos el análisis y la evaluación con la finalidad de tomar adecuadas decisiones financieras, en el contexto de los negocios empresariales en un entorno globalizado.

Se presentaran herramientas que permitan dar a conocer el medio financiero moderno, a corto y a largo plazo,  que un directivo debe conocer para una exitosa ges tión financiera de la empresa, en concordancia con el plan estratégico de la empresa.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100206',
	            'texto' => 'La asignatura pertenece al área curricular de formación profesional básica empresarial, es teórico-práctica y tiene el propósito de utilizar e interpretar herramientas de gestión de talento humano en una organización empresarial.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100163',
	            'texto' => 'El curso brinda aspectos teóricos prácticos para realizar la administración de las operaciones y producción aplicada en las empresas industriales, servicios y comerciales. En la primera parte se estudia la fase preoperativa donde se construye la empresa hasta su puesta en marcha. En la segunda parte se estudia la fase operativa que comprende funciones básicas y complementarias requeridas para asegurar la armonía del sistema cuando está en plena actividad.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100167',
	            'texto' => 'La asignatura comprende aspectos teóricos prácticos de formulación y evaluación de proyectos de inversión, orientados a proporcionar al estudiante los elementos y métodos relacionados con el diseño de tecnologías y sistemas de información, alineadas con la estrategia empresarial, como fuente de ventajas competitivas y como soporte a la toma de decisiones en las organizaciones modernas.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100164',
	            'texto' => 'El curso busca proporcionar los conocimientos básicos sobre el área de estudios y profesión,  involucrados en la investigación de mercados desarrollar sus habilidades de organizar y planificar proyectos de investigación de mercados... En el curso se desarrolla los siguientes temas: Papel de la investigación de mercados, etapas de la investigación de mercados, recolección de datos y diseño de cuestionarios, métodos de entrevista, medición de actitudes y construcción de escalas, análisis y uso de la información.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100165',
	            'texto' => 'La asignatura comprende aspectos teóricos prácticos de administración de la cadena de suministro, orientados a proporcionar al estudiante los elementos y operaciones necesarias para realizar los procesos la logística de entrada y logística de salida de manera eficiente y lograr el aprovisionamiento adecuado de materiales y productos en proceso en la producción y la distribución física de los productos terminados a los clientes externos de la empresa.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100170',
	            'texto' => 'La asignatura comprende aspectos teóricos prácticos de gestión de la calidad, orientados a proporcionar al estudiante los elementos necesarios para la aplicación de la mejora continua e implementación de un sistema de gestión de calidad en una empresa que haga posible la satisfacción del cliente con el uso eficiente de recursos a fin de mantenerse competitiva en el mercado.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '110072',
	            'texto' => 'La asignatura comprende aspectos teóricos prácticos de formulación y evaluación de proyectos de inversión, orientados a proporcionar al estudiante los elementos y métodos necesarios para determinar su demanda, tamaño, localización, tecnología, inversión, financiamiento, presupuestos, evaluación empresarial y riesgo del proyecto y decidir la factibilidad del proyecto de inversión.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100168',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100168',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100198',
	            'texto' => 'Permite al futuro Administrador desarrollar capacidad de análisis y síntesis, así como capacidad de aplicar los conocimientos del área de estudio y la profesión en forma práctica, desarrolla en el futuro profesional capacidad crítica y autocrítica que le permita actuar en nuevas situaciones permitiéndole desarrollar su capacidad de organización y planificación  afrontando situaciones  reales que le permitan formular y gestionar proyectos.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '110075',
	            'texto' => 'El Seminario permite una formación especializada de carácter teórico- práctico y comprende la revisión de pautas de investigación científica, a la vez se enfatiza la importancia de la tesis en la formación integral del estudiante; uso de fuentes de información relacionadas con el tema a ejecutar; manejo de técnicas de fichaje así como el análisis del contenido en el registro de información de la bibliografía y fuentes especializadas; evaluar el proceso metodológico de ejecución en relación al proceso del planeamiento.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100199',
	            'texto' => 'Permite al futuro Administrador desarrollar capacidad de análisis y síntesis, así como capacidad creativa  de capacidad de comunicación tanto oral como escrita y le permite aplicar las habilidades interpersonales,  desarrolla capacidad de toma de decisiones en el futuro profesional mostrando capacidad crítica y autocrítica que le permita actuar con responsabilidad social y compromiso ciudadano, desarrollando capacidades que le permitan trabajar con compromiso en la calidad y el medio socio cultural.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100201',
	            'texto' => 'Este Seminario gestará un ejercicio metodológico que busca orientar técnicamente al estudiante en el desarrollo de su proyecto de tesis previamente aprobado en el Seminario de Tesis I. Se incidirá en el uso de normas científicas de presentación y raciocinio. El curso tratará de canalizar las inquietudes y esfuerzos de los alumnos sobre los temas de su interés por particulares que estos sean con un enfoque multidisciplinario.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100200',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100204',
	            'texto' => 'La asignatura pertenece al área curricular de formación gerencial, es teórico - práctica y tiene el propósito de valorar la responsabilidad social corporativa en la sociedad global y proponer un programa de intervención.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100202',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100184',
	            'texto' => 'El curso de Contabilidad Comercial es un curso teórico - práctico orientado a profundizar el proceso contable en una empresa comercial, un mayor entendimiento de la contabilización de las actividades y el impacto en los Estados Financieros.

El desarrollo del curso comprende el análisis de la estructura del Estado de la Situación Financiera y del Estado de resultados.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100185',
	            'texto' => 'El curso de Contabilidad Industrial  es un curso  orientado al conocimiento de los conceptos y teorías referidas al proceso contable en una empresa industrial.

Tomando como referencia los procesos ya aprendidos en el curso de Contabilidad Comercial se aplicará estos conocimientos como base para el registro  de operaciones en las empresas industriales con la aplicación debida de los principios y normas contables vigentes.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100186',
	            'texto' => 'El curso teórico y práctico que estudia la contabilidad de costos de las empresas industriales, está enfocado a la aplicación de los conceptos teóricos  y aplicación práctica a la realidad concreta industrial,  como: industria de la construcción, industria porcina y otras del sector.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '110070',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100187',
	            'texto' => 'El propósito del curso es brindar al estudiante los conocimientos necesarios para la aplicación de tecnología en sistemas de información utilizando  herramientas manuales y automatizadas que haga posible el procesamiento óptimo de datos de la empresa  a través de sistemas contables generando información confiable y oportuna en apoyo a la toma de decisiones.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100188',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100189',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100190',
	            'texto' => 'El curso es de carácter teórico práctico orientado a conocer los conceptos y elementos del sistema de control interno, así como las  metodologías para su elaboración en todos los niveles y áreas administrativas y operativas de las empresas.

El propósito del curso es brindar al estudiante los conocimientos necesarios y suficientes a fin de que esté capacitado para implementar un Sistema de Control Interno en una empresa de acuerdo con las características  administrativas y operacionales; así como también en las entidades del estado.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100193',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100192',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '110071',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100197',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100196',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100195',
	            'texto' => 'El curso de Auditoría Financiera es de carácter teórico práctico orientado impartir los conocimientos básicos relativos a la especialidad contable relativos a la Auditoria Financiera externa.

El propósito del curso es brindar al estudiante los conocimientos, en sus aspectos generales, marco teórico, proceso y evaluación del Control Contable Interno y formulación de los informes de auditoría.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '110060',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100194',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '110074',
	            'texto' => 'El curso brinda los contenidos esenciales para comprender el manejo administrativo-contable de una entidad.

El propósito del curso es brindar toda la orientación necesaria a fin de que el estudiante pueda insertarse y desarrollarse eficientemente en el campo laboral y pueda convertirse en un soporte sólido en cualquier organización.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '110073',
	            'texto' => 'El curso es de naturaleza teórico - practico, orientado a obtener una visión global y especializada de la auditoria en relación con las Ciencias de la administración, así como métodos, técnicas y procedimientos, respecto al planeamiento, organización, dirección y control de organismos, instituciones y proyectos de índole nacional e internacional.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '110076',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '240040',
	            'texto' => 'Esta Asignatura imparte los conocimientos necesarios para que los estudiantes desarrollen competencias que le permitan resolver problemas básicos de su especialidad, utilizando el razonamiento lógico matemático y el manejo de la información con criterio científico.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '140068',
	            'texto' => 'Esta asignatura motiva al estudiante a utilizar las diferentes técnicas de muestreo probabilística, los cuales producen resultados cuya precisión puede ser medida estadísticamente. Comprende básicamente la presentación de las diferentes técnicas de muestreo tales como el muestreo aleatorio simple (sin reposición), muestreo aleatorio estratificado, estimación de razón, muestreo sistemático y muestreo por conglomerados.

Asimismo se describen los principios básicos de un diseño experimental.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '140069',
	            'texto' => 'La asignatura de Historia del Pensamiento Económico es de naturaleza teórica y  pretende lograr que el estudiante conozca y entienda los alcances e influencia de las  diferentes escuelas de pensamiento económico y sus grandes postulados; el contexto en que surgieron, de las fuerzas impulsoras, de los problemas que  trataron, de sus fundamentos, y de su  evolución.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '140070',
	            'texto' => 'El curso de Macroeconomía Aplicada está enfocado íntegramente en la economía global y los aspectos internacionales de la macroeconomía más que en la economía de un país en particular. En tal sentido, abarca los mercados de bienes, servicios, capitales y sus derivaciones de política económica para un funcionamiento macroeconómico eficiente. Finalmente, incorpora avances recientes en teoría macroeconómica, particularmente en lo que se refiere al enfoque de las expectativas, teoría moderna de política económica, ciclo y crecimiento económico.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '160018',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '140071',
	            'texto' => 'La asignatura es de carácter teórico - práctico y ayuda a conocer la relación que existe entre la ciencia económica, el medio ambiente, y la visión del desarrollo sustentable; para que a partir de ella se muestren cuáles serían los principales instrumentos económicos que permitan la conservación y preservación de los recursos medioambientales; por lo que el curso presenta los principales instrumentos de política económica que están relacionadas con la conservación del medio ambiente.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '140072',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '140075',
	            'texto' => 'El curso brinda los contenidos esenciales para explorar el principal objetivo de esta línea de investigación es el contraste y estudio de hipótesis económicas por medio de experimentos en los que los participantes toman decisiones en escenarios controlados por el investigador. Así como, Poseer habilidades de programación a nivel básico es un elemento fundamental para desarrollar investigación moderna, útil e informativa en economía. La producción de resultados interesantes para la comunidad científica exige estar, en no pocos casos, próximos a la frontera del conocimiento de nuestra especialidad.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '140074',
	            'texto' => 'El curso pretende que los participantes aprendan un conjunto básico de elementos conceptuales y prácticos necesarios para una correcta interpretación de los resultados de las estimaciones econométricas de los modelos. Así como, una evaluación de la pertinencia y grado de validez de las hipótesis referidas a la relación entre variables de carácter económico, los datos disponibles y la observación de la realidad económica actual.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100176',
	            'texto' => 'El curso brinda los contenidos esenciales para explorar los diferentes problemas que los ejecutivos enfrentan en el comercio internacional, ayudara a introducir a los participantes a pensar y actuar en el contexto actual del intercambio internacional de bienes y personas. Se usaran durante el desarrollo del curso, casos prácticos de diferentes empresas e industrias del mundo, para con ello alcanzar la capacidad analítica con criterio propio para la solución de problemas relacionados con la temática del comercio con responsabilidad social a nivel internacional.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '140020',
	            'texto' => 'La asignatura de Economía Internacional tiene un carácter teórico-práctico. En ese sentido busca brindar los conocimientos teóricos y prácticos para entender cómo es que los flujos comerciales imperantes se explican por la dinámica de los mercados financieros internacionales que los financian, para así entender la realidad de las relaciones económicas y financieras internacionales que constituyen una característica marcada de la globalización de las economías, dentro de las cuales se encuentra la nuestra.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '140080',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '140078',
	            'texto' => 'La asignatura le permitirá al alumno conocer los  instrumentos básicos de la gerencia social, que le permitan desarrollar propuestas de inversión social, considerando la realidad socioeconómica de nuestro país. Los contenidos están orientados a establecer las diferencias metodológicas entre proyectos de inversión privada y los proyectos de inversión social; a introducir el marco lógico como instrumento de formulación de proyectos; a identificar los principios básicos para la evaluación de estos proyectos, y dar a conocer el Sistema Nacional de Inversión pública.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '140079',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100016',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100182',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '140076',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '140083',
	            'texto' => 'La asignatura está orientada a complementar y fortalecer el manejo de los instrumentos básicos que le permitan formular propuestas de inversión social, considerando la realidad socioeconómica de nuestro país, y las características propias de los sistemas que con este fin se han implementado; así como adaptar este conocimiento a propuestas ulteriores.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '140081',
	            'texto' => 'La asignatura tiene como propósito desarrollar potencialidades que complementen su formación académica y lo ayuden a insertarse con mayor facilidad al mercado de trabajo. Comprende cuatro unidades: imagen personal y pautas de comportamiento; habilidades sociales y relaciones humanas; estrategias de marketing personal en la carrera profesional de economía y herramientas básicas para el desarrollo de artículos científicos.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '120019',
	            'texto' => 'El curso contribuirá a la formación de nuestros alumnos para el mejoramiento de la gestión y el desarrollo de una visión diferente del Estado y de la Gestión Publica basada en la creación del valor público. Provee las herramientas en la formulación y gestión del presupuesto público, compras y adquisiciones públicas, en la formulación y evaluación de proyectos de inversión, política económica estatal, el estudio de las políticas de inclusión de las minorías, relaciones internacionales, entre otras.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '140082',
	            'texto' => 'Es un curso teórico- práctico que contribuye a que el estudiante potencie sus competencias generales en investigación académica. Se busca desarrollar instrumentos para la producción de información científica y la redacción de artículos de investigación. Considera uso de laboratorio de computación. El curso considera: el uso de herramientas básicas de la informática para el desarrollo de artículos científicos; el artículo científico, el análisis científico y la redacción científica.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '110062',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '110064',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '110063',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '110066',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100171',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100175',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100174',
	            'texto' => 'El actual escenario económico mundial, en donde la globalización nos hace pensar en la necesidad de ampliar nuestros mercados es que proponemos este curso como Introducción al curso de Técnicas de Comercio Exterior. Las capacidades que busca desarrollar son habilidades de buscar, procesar y analizar información procedente de diferentes fuentes con el objeto generar capacidades para formular  y gestionar proyectos como el Plan de Negocios Internacionales y Objetivos del Plan de Marketing. Diferencias entre marketing estratégico y marketing táctico para el marketing internacional. Desarrollar capacidades de abstracción análisis y síntesis, aplicando para ello las capacidades de conocimiento prácticos capaces de desarrollar conocimientos sobre el área de estudio y la profesión. Desarrollar la capacidad de investigación, así como la capacidad crítica y autocrítica, con habilidades para trabajar en el contexto internacional respetando la diversidad y la multiculturalidad.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100172',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100173',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100181',
	            'texto' => 'El curso desarrolla conceptos e ideas claves en relación al liderazgo y al trabajo en equipo, así como las diversas aproximaciones teóricas al respecto. Igualmente se buscará conocer, desarrollar y potenciar en los alumnos las habilidades vinculadas al liderazgo y al trabajo en equipo que le permitan en el futuro desempeñarse como referente de su grupo y como un directivo eficaz.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100183',
	            'texto' => 'El curso busca integrar los conocimientos impartidos en el curso de Derecho Laboral  con la finalidad de que el alumno, logre vincular todos los conceptos y eso le permita convertirse en una herramienta importante en el planeamiento de las relaciones laborales en la empresa, así como en la prevención y en el manejo de conflictos.

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '120018',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '100205',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '110068',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '110061',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '110067',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '7',
	            'cod_curso' => '140084',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'ADM009',
	            'texto' => 'Este curso tiene como objeto complementar la formación del alumno y enfrentarlo a las diferentes situaciones gerenciales y su aplicación práctica. Durante el desarrollo del mismo el enfoque desarrolla la capacidad de organizar y planificar mediante el conocimiento sobre el área y profesión de Marketing Estratégico y sus diferentes enfoques en relación a la situación del mercado, así como la aplicación del Plan de Marketing Estratégico y Táctico, de otro lado desarrollará y aplicará las diferentes matrices que desarrollen su capacidad y habilidad para la  toma decisión, teniendo presente las posiciones competitivas, de igual forma podrá obtener y organizar la información gerencial. Logrando la formación que aporte valor a las empresas, debido a que el entorno es cada vez más competitivo y complejo, por lo que las empresas deben ser dinámicas y saber orientarse al mercado, con compromiso con su medio socio cultural.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'ADM002',
	            'texto' => 'El curso pertenece al área de Formación Profesional / Administración, de naturaleza teórico-práctica, estudia en forma rigurosa los cambios planeados en las organizaciones para el desarrollo organizacional, a nivel individual, grupal y organizacional, así como

los procesos, las intervenciones y la evaluación de los mismos, con énfasis en la creación y mantenimiento de una cultura y un clima organizacional sinérgico, competitivo y saludable, para impulsar la competitividad de las organizaciones que crea o de las que forma parte.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => '100070',
	            'texto' => 'Este curso tiene como objeto complementar la formación del alumno y enfrentarlo a las diferentes situaciones gerenciales y su aplicación práctica.

Durante el desarrollo del mismo se revisará el enfoque de Marketing Estratégico y sus diferentes enfoques en relación a la situación del mercado, así como la aplicación del Plan de Marketing Estratégico y Táctico, de otro lado desarrollará y aplicará las diferentes matrices de toma decisión, teniendo presente las posiciones competitivas, de igual forma podrá obtener y organizar la información gerencial.

Logrando la formación que aporte valor a las empresas, debido a que el entorno es cada vez más competitivo y complejo, por lo que las empresas deben ser dinámicas y saber orientarse al mercado.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => '100166',
	            'texto' => 'La asignatura comprende aspectos teóricos prácticos de reingeniería de procesos empresariales, orientados a proporcionar al estudiante los elementos necesarios para la aplicación del rediseño radical de los procesos para alcanzar mejoras espectaculares en una empresa que haga posible la satisfacción del cliente con el uso eficiente de recursos y poder mantenerse competitiva en el mercado.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => '100081',
	            'texto' => 'El curso de Administración I comprende el análisis del ambiente general en el que compiten las empresas. Se analiza la teoría general de la administración y la empresa, desde la planeación, organización, dirección y control. Introduce al alumno en el uso de casos como método de enseñanza-aprendizaje, promoviendo el desarrollo de habilidades sociales e incidiendo en la práctica de valores a toma de decisiones.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'ADM004',
	            'texto' => 'Permite enfocar las técnicas del proceso de formulación de la estrategia, analizando las distintas estrategias genéricas y su planificación. Entre sus temas destacan: La Formulación de la Estrategia; El Proceso Estratégico: Enfoques Principales; La evaluación de la Estrategia; Elección de una Estrategia; Análisis de Estrategias Empresariales; Estrategias Genéricas; Estrategias de Diversificación; Estrategias de Innovación y de Reestructuración; El Sistema de Planificación y Acción Estratégica; El Proceso de Planificación y Control Estratégico; Implantación de la Estrategia en la organización; Sistemas de apoyo en la acción estratégica.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'EG013',
	            'texto' => 'Proporciona a los participantes las capacidades para entender finalidades, características, procesos y componentes de un sistema de control de gestión, para utilizar las técnicas básicas fundamentales de relevación de los costos, de cálculo de costos de un producto y para enfrentar análisis para toma de decisiones.

Brinda  el conocimiento básico de las técnicas de elaboración y administración presupuestal, capacitándoles en el uso del presupuesto como herramienta de gestión financiera y control  empresarial.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => '110052',
	            'texto' => 'El curso corresponde al área de finanzas siendo una asignatura complementaria a los cursos de finanzas. Este curso permitirá a nuestros alumnos interrelacionar los conocimientos adquiridos en los cursos de finanzas y poder aplicarlos en la toma de decisiones dentro de la gestión financiera con el objetivo de poder administrar adecuadamente el riesgo.

Abarca los siguientes aspectos: La Globalización. Coberturas frente a las fluctuaciones de tasa de interés, tipo de cambio, tasa de inflación. Mercados de Derivados. Instituciones que Participan en el Mercado Internacional.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => '110053',
	            'texto' => 'Las Finanzas Corporativas no solo es un concepto; si no es una serie de procedimientos, técnicas, actividades, responsabilidades,  metas, misiones, encaminadas a crear estrategias para mejorar el desarrollo financiero de las organizaciones y de esa manera lograr la creación de valor.

Las Finanzas Corporativas es el área específica de las finanzas que se ocupa de las decisiones financieras que toman las empresas, y los instrumentos y análisis utilizados para tomar esas decisiones. Está dividida entre el largo plazo o decisiones de inversión de capital, y el corto plazo, la gestión del capital. Los dos están relacionados con el valor de la empresa que será mayor cuando el rendimiento del capital, en función de la gestión del capital de trabajo, excede al coste de capital, que resulta de las decisiones de capital a largo plazo. Las Finanzas Corporativas están estrechamente relacionadas con las finanzas de gestión, que es un término más amplio, que describe las técnicas financieras disponibles para todas las formas de empresa comercial, empresarial o no.



'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => '120012',
	            'texto' => 'El contenido del presente curso está orientado a introducir a los alumnos en los aspectos más importantes del Derecho Comercial como instrumento regulador de los intercambios comerciales realizados tanto individualmente como en masa.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'CON006',
	            'texto' => 'Es una asignatura teórica que brinda al estudiante los conocimientos sobre la Teoría general del Derecho Tributario, desde el punto de vista doctrinario, a fin que el alumno comprenda y reflexione acerca de su importancia en el desarrollo de las relaciones jurídico comerciales, como fuente indispensable en su formación profesional y así aportar valores de responsabilidad, legalidad y honestidad a la sociedad peruana.

Incluye los Principios del Derecho tributario, los conceptos de carácter general, sus efectos en la vida económica y financiera del país y el Sistema Tributario Peruano.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => '120009',
	            'texto' => 'El curso de Derecho Laboral, tiene por objeto proporcionar al alumno un conocimiento

integral de las normas legales que rigen las relaciones laborales entre trabajadores y

empleadores de la actividad privada. Se estudiará la naturaleza jurídica, fuentes y autonomía del Derecho Laboral analizando los principales derechos y obligaciones del trabajador y del empleador dentro del régimen laboral de la actividad privada, con especial referencia a la relación individual de trabajo. Y se  analizarán el contrato de trabajo los sujetos, derechos obligaciones y beneficios que se originan en el mismo.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'ECO001',
	            'texto' => 'El curso brinda los contenidos esenciales para explorar los temas avanzados del enfoque microeconómico de la actividad económica. Brindando al educando, un medio de ampliar la fuente teórica disponible para mejorar el análisis económico aplicado de la economía peruana.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'EG008',
	            'texto' => 'Esta asignatura motiva al estudiante a utilizar las diferentes técnicas de muestreo y distribuciones de probabilidad de los estadísticos, que sirve de base para determinar las estimaciones de los parámetros, las pruebas de hipótesis, independencia de variables. Asimismo se describen los principios básicos de regresión lineal simple y múltiple.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'EG007',
	            'texto' => 'La asignatura tiene por finalidad proporcionar al estudiante los conceptos y los

métodos que se utilizan en el análisis de datos numéricos así como la utilización de los gráficos y de las medidas de resumen.

Además contiene la introducción de la Teoría de Probabilidades que es el soporte teórico de la Inferencia Estadística.

Comprende también números Índices lo que permiten realizar comparaciones de variaciones de precios, producción etc.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => '170001',
	            'texto' => 'El curso apunta a comprender la estructura profunda del ser humano, su esencia. A partir de la observación de la realidad el curso enfocará la dimensión más original y universal del hombre: la exigencia de un sentido, la búsqueda de un significado último

de la vida.

Se verá como el descubrimiento de estas interrogantes profundas cambia la relación con la realidad y abre la aventura de la interpretación del mundo en una incondicionada simpatía hacia lo verdadero, bueno y bello que caracteriza la experiencia humana.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => '170009',
	            'texto' => 'La asignatura esta orientada a situar al estudiante frente a la hipótesis cristiana, centrando su atención en el cambio radical del método religioso determinado por Jesucristo, como hecho en la historia. Se profundizarán los términos de dicho fenómeno para reconocer su carácter ineludible, recorriendo paso a paso la experiencia de quienes conocieron a Jesús y las posibles trayectorias de la persuasión o del rechazo.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => '170010',
	            'texto' => 'El curso, partiendo de la problemática de cómo es posible hoy tener la misma experiencia de los primeros apóstoles y alcanzar una certeza sobre la persona de Cristo, analiza en la primera parte tres distintos métodos, en la última, aquello específico de la experiencia católica.

La Iglesia, continuación sacramental de la presencia de Cristo, constituye el cumplimiento de la promesa de Jesús: "Estoy con vosotros todos los días hasta la consumación de los siglos", posibilidad histórica de un encuentro humano con el Dios encarnado.

Ante la propuesta de la Iglesia y su lenguaje, el hombre de hoy vive una dificultad que no es posible censura, por eso, el curso dedica un capítulo para profundizar en el origen de tal incomprensión.

La Iglesia católica ¿es la iglesia que Cristo quiso y fundó y que los primeros cristianos constituyeron? Esta es la pregunta implícita sobre la cual se desarrolla el último capítulo sobre los factores constitutivos de la Iglesia.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'EG000',
	            'texto' => 'Se tiene como finalidad el desarrollo de sus habilidades creativas, motoras y artísticas, a fin de contribuir en el estado bio-psico-social del alumno. Se combina los aspectos prácticos y teóricos que requiere el manejo de las disciplinas deportivas.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'EG004',
	            'texto' => 'La asignatura de Lengua introduce al estudiante en la problemática de los procesos de información, comunicación y lenguaje. A partir de un análisis del proceso informativo, vinculado a la adaptación del hombre a su medio ambiente, se explica la teoría de la comunicación y su importancia. En una segunda parte, la asignatura sitúa el fenómeno de la comunicación de masa en el mundo contemporáneo. Finalmente, se analiza la comunicación lingüística, relacionando al lenguaje con el fenómeno genérico de la comunicación en el contexto de la realidad sociocultural.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'EG005',
	            'texto' => 'El curso desarrollará en el estudiante su competencia en el dominio de la lengua escrita a partir de la observación de textos y de su experiencia como actuante lingüístico. En este sentido, el curso dará las herramientas necesarias para que el alumno se desempeñe adecuadamente en la redacción de textos académicos, competencia fundamental para su formación profesional.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'EG003',
	            'texto' => 'Esta Asignatura imparte los conocimientos necesarios para que los estudiantes desarrollen competencias que le permitan resolver problemas básicos de su especialidad, utilizando el razonamiento lógico matemático y el manejo de la información con criterio científico.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'EG001',
	            'texto' => 'Esta Asignatura imparte los conocimientos necesarios para que los estudiantes desarrollen competencias que le permitan resolver problemas básicos de su especialidad, utilizando el razonamiento lógico matemático y el manejo de la información con criterio científico.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'EG002',
	            'texto' => 'Esta Asignatura imparte los conocimientos necesarios para que los estudiantes desarrollen competencias que le permitan resolver problemas básicos de su especialidad, utilizando el razonamiento lógico matemático y el manejo de la información con criterio científico.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'EG016',
	            'texto' => 'La asignatura tiene por finalidad acompañar al alumno en el trabajo intelectual académico propio de los estudios universitarios. Para ello, el curso se desarrollará sobre la base de lecturas y estará orientado, en especial, al mejoramiento de las capacidades comunicativas (oral y escrita). Asimismo, se introducirá al alumno en la investigación académica y se le preparará para la elaboración de trabajos académicos. El estudiante, al

final de la asignatura, estará preparado para el trabajo académico (análisis e interpretación), la selección y formulación de propuestas de investigación y de artículos y ensayos argumentativos.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => '100071',
	            'texto' => 'El curso brinda los contenidos esenciales para comprender la actividad económica nacional e internacional, y su interacción con las actividades más importantes de la empresa. Se pondrá énfasis en el diseño de la fórmula empresarial, como herramienta para entender la dinámica de las organizaciones con su entorno.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'EG006',
	            'texto' => 'El curso brinda los contenidos teórico-práctico orientado a conocer aspectos generales de la contabilidad.

Brinda al estudiante los conocimientos sobre el sistema de información contable para llegar a la correcta presentación de los Estados Financieros y finalmente sobre estos efectuar la toma de decisiones.  Se pondrá énfasis en la aplicación del sistema de partida doble y elaboración de Estados Financieros.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'ADM001',
	            'texto' => 'El curso de Administración II comprende el análisis de conceptos e ideas claves en relación a las teorías, estrategias y  análisis del  diseño organizacional; relacionado con  el enfoque, descripción y representación gráfica de los procesos dentro de la organización.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => '100160',
	            'texto' => 'La asignatura de Macroeconomía tiene un carácter teórico-práctico. Comprende la determinación y evaluación de los grandes agregados macroeconómicos, así la Macroeconomía presenta una visión simplificada de la realidad  con el fin de explicar la conducta de las variables y de los agentes agregados. Para ello se presentan modelos que pretenden ilustrar el funcionamiento de la economía y observar cómo influyen las políticas económicas sobre la economía en su conjunto.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'EG010',
	            'texto' => 'En el  desarrollo de la asignatura se impartirán los conocimientos teórico-prácticos  que se dan en las operaciones financieras del corto, mediano y largo plazo; de tal manera que un profesional pueda con destreza resolver los problemas de aplicación que se presentan en el transcurso de sus  actividades.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'EG012',
	            'texto' => 'El curso es de carácter teórico-práctico, orientado al tratamiento los costos empresariales; su planificación y control, al análisis de los costos históricos y predeterminados y a la

formulación   de la información de costos con fines de Gestión empresarial.

Comprende el estudio de conceptos básicos de costos, objetivos, elementos de costos

Industriales  y su clasificación; control y costeo de los materiales, de la mano de obra; de los costos indirectos de fabricación; desarrollo de los sistemas de costos históricos, el sistema de costos ABC.; la formulación de los estados de costos de producción y los estados de resultados.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => '140065',
	            'texto' => 'La asignatura de Microeconomía tiene un carácter teórico-práctico. Busca examinar las temáticas mas importantes del funcionamiento de los mercados con el propósito de que el estudiante pueda manejar los conceptos, las definiciones, la representación y el análisis grafico del funcionamiento del mercado, desde la perspectiva del comportamiento de los agentes económicos individuales.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'EG011',
	            'texto' => 'La asignatura se orienta a la presentación  de herramientas financieras, tanto teóricas como técnicas que permitan a nuestros alumnos el análisis y la evaluación con la finalidad de tomar adecuadas decisiones financieras, en el contexto de los negocios empresariales en un entorno globalizado.

Se presentaran herramientas que permitan dar a conocer el medio financiero moderno, a corto y a largo plazo,  que un directivo debe conocer para una exitosa ges tión financiera de la empresa, en concordancia con el plan estratégico de la empresa.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => '100206',
	            'texto' => 'La asignatura pertenece al área curricular de formación profesional básica empresarial, es teórico-práctica y tiene el propósito de utilizar e interpretar herramientas de gestión de talento humano en una organización empresarial.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => '100163',
	            'texto' => 'El curso brinda aspectos teóricos prácticos para realizar la administración de las operaciones y producción aplicada en las empresas industriales, servicios y comerciales. En la primera parte se estudia la fase preoperativa donde se construye la empresa hasta su puesta en marcha. En la segunda parte se estudia la fase operativa que comprende funciones básicas y complementarias requeridas para asegurar la armonía del sistema cuando está en plena actividad.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => '100164',
	            'texto' => 'El curso busca proporcionar los conocimientos básicos sobre el área de estudios y profesión,  involucrados en la investigación de mercados desarrollar sus habilidades de organizar y planificar proyectos de investigación de mercados... En el curso se desarrolla los siguientes temas: Papel de la investigación de mercados, etapas de la investigación de mercados, recolección de datos y diseño de cuestionarios, métodos de entrevista, medición de actitudes y construcción de escalas, análisis y uso de la información.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => '100165',
	            'texto' => 'La asignatura comprende aspectos teóricos prácticos de administración de la cadena de suministro, orientados a proporcionar al estudiante los elementos y operaciones necesarias para realizar los procesos la logística de entrada y logística de salida de manera eficiente y lograr el aprovisionamiento adecuado de materiales y productos en proceso en la producción y la distribución física de los productos terminados a los clientes externos de la empresa.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => '100170',
	            'texto' => 'La asignatura comprende aspectos teóricos prácticos de gestión de la calidad, orientados a proporcionar al estudiante los elementos necesarios para la aplicación de la mejora continua e implementación de un sistema de gestión de calidad en una empresa que haga posible la satisfacción del cliente con el uso eficiente de recursos a fin de mantenerse competitiva en el mercado.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'EG019',
	            'texto' => 'La asignatura comprende aspectos teóricos prácticos de formulación y evaluación de proyectos de inversión, orientados a proporcionar al estudiante los elementos y métodos necesarios para determinar su demanda, tamaño, localización, tecnología, inversión, financiamiento, presupuestos, evaluación empresarial y riesgo del proyecto y decidir la factibilidad del proyecto de inversión.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'EG014',
	            'texto' => 'las empresas y de las organizaciones en general. Consideraremos como contenidos principales: Fundamentos de Dirección Estratégica; Orígenes y Evolución del Concepto de Estrategia Empresarial; Concepto y método de la Dirección Estratégica; Las Escuelas de la Dirección Estratégica: Teorías principales; El Análisis Estratégico: El Diagnostico Externo; El entorno general de la empresa; El entorno particular de la empresa: Análisis

de los sectores industriales; Análisis de la competitividad de la empresa: Ventajas Competitivas; El Análisis Estratégico: El Diagnostico Interno; Misión y objetivos de la empresa; Los recursos y las capacidades de la empresa; El Diagnostico Estratégico de la Empresa: Enfoques y Técnicas Principales.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => '100198',
	            'texto' => 'Permite al futuro Administrador desarrollar capacidad de análisis y síntesis, así como capacidad de aplicar los conocimientos del área de estudio y la profesión en forma práctica, desarrolla en el futuro profesional capacidad crítica y autocrítica que le permita actuar en nuevas situaciones permitiéndole desarrollar su capacidad de organización y planificación  afrontando situaciones  reales que le permitan formular y gestionar proyectos.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'EG017',
	            'texto' => 'El Seminario permite una formación especializada de carácter teórico- práctico y comprende la revisión de pautas de investigación científica, a la vez se enfatiza la importancia de la tesis en la formación integral del estudiante; uso de fuentes de información relacionadas con el tema a ejecutar; manejo de técnicas de fichaje así como el análisis del contenido en el registro de información de la bibliografía y fuentes especializadas; evaluar el proceso metodológico de ejecución en relación al proceso del planeamiento.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => '100199',
	            'texto' => 'Permite al futuro Administrador desarrollar capacidad de análisis y síntesis, así como capacidad creativa  de capacidad de comunicación tanto oral como escrita y le permite aplicar las habilidades interpersonales,  desarrolla capacidad de toma de decisiones en el futuro profesional mostrando capacidad crítica y autocrítica que le permita actuar con responsabilidad social y compromiso ciudadano, desarrollando capacidades que le permitan trabajar con compromiso en la calidad y el medio socio cultural.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'EG018',
	            'texto' => 'Este Seminario gestará un ejercicio metodológico que busca orientar técnicamente al estudiante en el desarrollo de su proyecto de tesis previamente aprobado en el Seminario de Tesis I. Se incidirá en el uso de normas científicas de presentación y raciocinio. El curso tratará de canalizar las inquietudes y esfuerzos de los alumnos sobre los temas de su interés por particulares que estos sean con un enfoque multidisciplinario.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'ADM003',
	            'texto' => 'El curso presenta conocimientos, conceptos, herramientas y técnicas de la gerencia de proyectos, establecidos en base al estándar del Project Management Institute. De modo tal que el estudiante pueda conocer y aplicar los elementos de planeación, programación, coordinación y gestión que se requiere en la gerencia de proyectos, para lograr niveles de eficiencia y eficacia.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'ADM005',
	            'texto' => 'El curso brinda contenidos y herramientas esenciales para dotar de capacidades, de acuerdo a estandares internacionales, la planificacion, ejecucion, direccion ] control, y cierre de proyectos publicos y privados. Este curso es de corte teorico . practico y su proposito es comprender y utilizar las metodologias propuestas por el Project Management Institute (PMI) para la Gestion de proyectos. El curso comprende: Una revision a las principales areas de conocimiento para la Direccion de Proyectos comprendidas en el Project Managemente Body of Knowledge (PMBOK

version 5). Durante el curso han de desarrollarse nueve casos aplicativos donde se expondran las herramientas y tecnicas de las distintas areas de conocimiento. Adicionalmente se revisa la Guia de Direccion de Proyectos de la Universidad de Harvard.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => '100184',
	            'texto' => 'El curso de Contabilidad Comercial es un curso teórico - práctico orientado a profundizar el proceso contable en una empresa comercial, un mayor entendimiento de la contabilización de las actividades y el impacto en los Estados Financieros.

El desarrollo del curso comprende el análisis de la estructura del Estado de la Situación Financiera y del Estado de resultados.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => '100185',
	            'texto' => 'El curso de Contabilidad Industrial  es un curso  orientado al conocimiento de los conceptos y teorías referidas al proceso contable en una empresa industrial.

Tomando como referencia los procesos ya aprendidos en el curso de Contabilidad Comercial se aplicará estos conocimientos como base para el registro  de operaciones en las empresas industriales con la aplicación debida de los principios y normas contables vigentes.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'CON002',
	            'texto' => 'El curso teórico y práctico que estudia la contabilidad de costos de las empresas industriales, está enfocado a la aplicación de los conceptos teóricos  y aplicación práctica a la realidad concreta industrial,  como: industria de la construcción, industria porcina y otras del sector.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'CON009',
	            'texto' => 'El curso de Contabilidad Intermedia  es un curso teórico-práctico orientado al conocimiento de los conceptos y teorías referidas a la preparación y presentación de los Estados Financieros de conformidad con las NICs. y NIIFs vigentes en el país y el Reglamento para la Preparación de Información Financiera según la Superintendencia del Mercado de Valores.

El propósito del curso es brindar a los estudiantes los criterios fundamentales para la preparación y presentación de la información financiera para propósitos generales y específicos, referido a la formulación de los estados financieros básicos (Estado de Situación Financiera, Estado de Resultados, Estado de Cambios en el Patrimonio Neto y Estado de Flujo de Efectivo); las Notas a los Estados Financieros y la Información Complementaria a los Estados Financieros.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'CON001',
	            'texto' => 'El curso de Contabilidad Superior es de carácter teórico - práctico, orientado al conocimiento, manejo y aplicación de las Normas Internacionales de Información Financiera en la formulación y presentación de los Estados Financieros de las empresas en el contexto de una economía abierta.

El propósito del curso es lograr que el estudiante aplique correctamente las Normas Internacionales de Información Financiera, diseñe y aplique las políticas contables a situaciones reales con la finalidad de presentar información financiera razonable y de utilidad para los usuarios externos.

El desarrollo del curso comprende: Análisis y aplicación de las Normas Internacionales de Contabilidad, las Normas Internacionales de Información Financiera y sus interpretaciones. Diseño, implementación y aplicación de las políticas contables de acuerdo a la realidad de cada empresa, con énfasis en el valor razonable.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'CON008',
	            'texto' => 'El curso de Impuestos Indirectos y Tributación Municipal es de carácter teórico - práctico orientado al conocimiento de la legislación tributaria en su primera parte sobre los impuestos indirectos, dentro de los cuales se encuentra el Impuesto General a las Ventas y el Impuesto Selectivo al Consumo.

En la segunda parte conocer la legislación sobre los principales tributos de los Gobiernos Locales.

El propósito del curso es brindar al estudiante los conocimientos relativos a los principales impuestos indirectos asi como conocer la normatividad sobre tributación en gobiernos locales y su aplicación práctica.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => '100197',
	            'texto' => 'El curso de Contabilidad Gubernamental es de carácter teórico - práctico orientado a desarrollar en el estudiante las habilidades, actitudes y competencias que le permitan analizar, interpretar y aplicar los principios, normas y procedimientos contables, con la finalidad de registrar y consolidar las operaciones económicas y financieras de las entidades de Sector Público y elaborar sus Estados Financieros y presupuestarios.

El desarrollo del curso comprende el estudio de los Fundamentos de la Contabilidad Gubernamental, El Sistema Integrado de Administración Financiera (SIAF-SP), el Plan Contable Gubernamental y la elaboración de los Estados Financieros y Presupuestarios del Sector Público.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'CON005',
	            'texto' => 'El curso brinda los conocimientos más relevantes sobre aspectos contables, tributarios, laborales y financieros de los distintos tipos de actividades económicas más representativas en nuestro país tales como el sector agrícola, minero, construcción y sector hotelero-turístico.

El propósito del curso es permitir que los alumnos apliquen las diferentes normas contables y legales que afectan a estos sectores a través del análisis y desarrollo de casos prácticos.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'CON003',
	            'texto' => 'El curso de Auditoría Financiera es de carácter teórico práctico orientado impartir los conocimientos básicos relativos a la especialidad contable relativos a la Auditoria Financiera externa.

El propósito del curso es brindar al estudiante los conocimientos, en sus aspectos generales, marco teórico, proceso y evaluación del Control Contable Interno y formulación de los informes de auditoría.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'CON007',
	            'texto' => 'El curso de Impuesto a la Renta es de carácter teórico - práctico orientado al conocimiento de la legislación tributaria sobre los impuestos internos, dentro de los cuales se encuentra el Impuesto a la Renta.

El propósito del curso es brindar al estudiante los conocimientos relativos al Impuesto a la Renta y su aplicación para la correcta determinación del impuesto.

El desarrollo del curso comprende el estudio de: Impuesto a la Renta Personas Naturales y  Personas Jurídicas.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => '110074',
	            'texto' => 'El curso brinda los contenidos esenciales para comprender el manejo administrativo-contable de una entidad.

El propósito del curso es brindar toda la orientación necesaria a fin de que el estudiante pueda insertarse y desarrollarse eficientemente en el campo laboral y pueda convertirse en un soporte sólido en cualquier organización.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'CON004',
	            'texto' => 'El curso es de naturaleza teórico - practico, orientado a obtener una visión global y especializada de la auditoria en relación con las Ciencias de la administración, así como métodos, técnicas y procedimientos, respecto al planeamiento, organización, dirección y control de organismos, instituciones y proyectos de índole nacional e internacional.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => '110076',
	            'texto' => 'El curso de Práctica Pre Profesional II es de carácter teórico - práctico, tipo seminario, que proporciona al estudiante la capacidad de análisis, desarrollar su capacidad de creación e imaginación para superar problemas relacionados con la toma de decisiones que puedan presentarse durante el desarrollo de su actividad profesional al formar parte de una organización.

El propósito del curso es lograr que el estudiante participe en los procesos de planificación ejecución y supervisión de las acciones afines al que hacer de la administración y la contabilidad.

El desarrollo del curso comprende: elaboración de informes parciales sobre las actividades organizativas de las empresas, elaboración y sustentación de un Informe final que contenga propuestas que contribuyan a generar un eficiente sistema contable.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'ECO007',
	            'texto' => 'Esta Asignatura imparte los conocimientos necesarios para que los estudiantes desarrollen competencias que le permitan resolver problemas básicos de su especialidad, utilizando el razonamiento lógico matemático y el manejo de la información con criterio científico.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'ECO008',
	            'texto' => 'Esta asignatura motiva al estudiante a utilizar las diferentes técnicas de muestreo probabilística, los cuales producen resultados cuya precisión puede ser medida estadísticamente. Comprende básicamente la presentación de las diferentes técnicas de muestreo tales como el muestreo aleatorio simple (sin reposición), muestreo aleatorio estratificado, estimación de razón, muestreo sistemático y muestreo por conglomerados.

Asimismo se describen los principios básicos de un diseño experimental.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => '140069',
	            'texto' => 'La asignatura de Historia del Pensamiento Económico es de naturaleza teórica y  pretende lograr que el estudiante conozca y entienda los alcances e influencia de las  diferentes escuelas de pensamiento económico y sus grandes postulados; el contexto en que surgieron, de las fuerzas impulsoras, de los problemas que  trataron, de sus fundamentos, y de su  evolución.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'ECO002',
	            'texto' => 'El curso de Macroeconomía Aplicada está enfocado íntegramente en la economía global y los aspectos internacionales de la macroeconomía más que en la economía de un país en particular. En tal sentido, abarca los mercados de bienes, servicios, capitales y sus derivaciones de política económica para un funcionamiento macroeconómico eficiente. Finalmente, incorpora avances recientes en teoría macroeconómica, particularmente en lo que se refiere al enfoque de las expectativas, teoría moderna de política económica, ciclo y crecimiento económico.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'ECO009',
	            'texto' => 'La asignatura de Estadística Paramétrica brindara a los alumnos los conocimientos y capacidades necesarias para poder solucionar problemas en un contexto de análisis netamente numérico en los temas de Todo ello que le permita al alumno desarrollar sus habilidades para la toma de decisiones, en donde esté presente la incertidumbre.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'EG009',
	            'texto' => 'El curso pretende que los participantes aprendan un conjunto básico de elementos conceptuales y prácticos necesarios para una correcta interpretación de los resultados de las estimaciones econométricas de los modelos. Así como, una evaluación de la pertinencia y grado de validez de las hipótesis referidas a la relación entre variables de carácter económico, los datos disponibles y la observación de la realidad económica actual.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => '100176',
	            'texto' => 'El curso brinda los contenidos esenciales para explorar los diferentes problemas que los ejecutivos enfrentan en el comercio internacional, ayudara a introducir a los participantes a pensar y actuar en el contexto actual del intercambio internacional de bienes y personas. Se usaran durante el desarrollo del curso, casos prácticos de diferentes empresas e industrias del mundo, para con ello alcanzar la capacidad analítica con criterio propio para la solución de problemas relacionados con la temática del comercio con responsabilidad social a nivel internacional.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'ECO003',
	            'texto' => 'Este curso se desarrolla a través de clases teóricas y prácticas. Los contenidos temáticos son: La Política Económica: Concepto, naturaleza y problemas de la política económica; Los juicios de valor en la política económica; Secuencia lógica del proceso de la política económica; Estructura y Acciones de la política económica: Analizar y formular un modelo de política económica; Los métodos de análisis de política económica; Políticas Económicas en el Perú.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'ECO004',
	            'texto' => 'La asignatura le permitirá al alumno conocer los  instrumentos básicos de la gerencia social, que le permitan desarrollar propuestas de inversión social, considerando la realidad socioeconómica de nuestro país. Los contenidos están orientados a establecer las diferencias metodológicas entre proyectos de inversión privada y los proyectos de inversión social; a introducir el marco lógico como instrumento de formulación de proyectos; a identificar los principios básicos para la evaluación de estos proyectos, y dar a conocer el Sistema Nacional de Inversión pública.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'ECO005',
	            'texto' => 'El curso presenta sistemática y analíticamente las diferencias teóricas, enfoques y experiencias del crecimiento económico así como estudia las bases para salir del subdesarrollo frente a un mundo globalizado. Permite que el futuro profesional tenga una perspectiva de las principales tendencias del desarrollo peruano dentro del contexto mundial.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'ECO006',
	            'texto' => 'El curso pretende que los participantes aprendan un conjunto avanzado de elementos conceptuales y prácticos del enfoque econométrico necesarios para una correcta interpretación de los resultados de la investigación econométrica aplicada. Así como, una evaluación de la pertinencia y grado de validez de las hipótesis económicas referidas a la relación entre variables de carácter económico, los datos disponibles y la observación de la realidad económica actual dentro de un enfoque integral (cuantitativo-cualitativo).

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'ECO004',
	            'texto' => 'La asignatura está orientada a complementar y fortalecer el manejo de los instrumentos básicos que le permitan formular propuestas de inversión social, considerando la realidad socioeconómica de nuestro país, y las características propias de los sistemas que con este fin se han implementado; así como adaptar este conocimiento a propuestas ulteriores.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => '140081',
	            'texto' => 'La asignatura tiene como propósito desarrollar potencialidades que complementen su formación académica y lo ayuden a insertarse con mayor facilidad al mercado de trabajo. Comprende cuatro unidades: imagen personal y pautas de comportamiento; habilidades sociales y relaciones humanas; estrategias de marketing personal en la carrera profesional de economía y herramientas básicas para el desarrollo de artículos científicos.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => '120019',
	            'texto' => 'El curso contribuirá a la formación de nuestros alumnos para el mejoramiento de la gestión y el desarrollo de una visión diferente del Estado y de la Gestión Publica basada en la creación del valor público. Provee las herramientas en la formulación y gestión del presupuesto público, compras y adquisiciones públicas, en la formulación y evaluación de proyectos de inversión, política económica estatal, el estudio de las políticas de inclusión de las minorías, relaciones internacionales, entre otras.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => '140082',
	            'texto' => 'Es un curso teórico- práctico que contribuye a que el estudiante potencie sus competencias generales en investigación académica. Se busca desarrollar instrumentos para la producción de información científica y la redacción de artículos de investigación. Considera uso de laboratorio de computación. El curso considera: el uso de herramientas básicas de la informática para el desarrollo de artículos científicos; el artículo científico, el análisis científico y la redacción científica.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => '100174',
	            'texto' => 'El actual escenario económico mundial, en donde la globalización nos hace pensar en la necesidad de ampliar nuestros mercados es que proponemos este curso como Introducción al curso de Técnicas de Comercio Exterior. Las capacidades que busca desarrollar son habilidades de buscar, procesar y analizar información procedente de diferentes fuentes con el objeto generar capacidades para formular  y gestionar proyectos como el Plan de Negocios Internacionales y Objetivos del Plan de Marketing. Diferencias entre marketing estratégico y marketing táctico para el marketing internacional. Desarrollar capacidades de abstracción análisis y síntesis, aplicando para ello las capacidades de conocimiento prácticos capaces de desarrollar conocimientos sobre el área de estudio y la profesión. Desarrollar la capacidad de investigación, así como la capacidad crítica y autocrítica, con habilidades para trabajar en el contexto internacional respetando la diversidad y la multiculturalidad.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => '100068',
	            'texto' => 'Con el curso se propone comparar los tópicos de la vida económica, y de la actividad de las empresas con los principios de la Doctrina Social de la Iglesia, para fortalecer en los alumnos la conciencia de la realidad contemporánea, y fomentar la búsqueda de un  rol de auténtico protagonismo económico y social. Igualmente se busca estudiar los temas referentes al trabajo, al dinero, la propiedad privada, al mercado, la empresa, las empresas no lucrativas, al desarrollo, las relaciones internacionales y la deuda, al poder y  a la política. Cada tema será tratado desde el punto de vista histórico y de la actualidad buscando las referencias adecuadas en el Magisterio Social de la Iglesia.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'ADM006',
	            'texto' => 'La asignatura proporciona al alumno los conocimientos técnicos referidos a los envases, etiquetado, empaque y embalajes, así como los medios facilitantes de la distribución física internacional, principalmente para la exportación, resaltando los materiales usados; la importancia del diseño de los envases y embalajes no sólo por las funciones intrínsecas de proteger, porcionar, contener sino más aún como parte de desarrollo del producto y estrategia de marketing, se enfatizará a las reglamentaciones internacionales de los mercados internacionales referido a la protección de la salud adaptándose a los requerimientos de cada mercado, así como seguridad medioambiental, ecológica etc. por tipos de productos y materiales usados.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'ADM007',
	            'texto' => 'La asignatura es de naturaleza práctica, tiene como propósito desarrollar las habilidades y destrezas en el manejo de los métodos y técnicas para efectuar cálculos de costos, la determinación de precios de exportación y la utilización de formas apropiadas para la presentación y evaluación de la cotización de bienes y servicios. La asignatura prioriza y consolida el estudio del proceso de exportación, el análisis del producto/mercado y los incoterms para la exportación, el cálculo: costos, seguros, transporte y fletes, así como precios y cotizaciones, análisis, clasificación, negociación y competitividad de las cotizaciones en el ámbito internacional, medio: financiamiento, de pago y control de la actividades de comercio internacional.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'ADM008',
	            'texto' => 'La asignatura permite al alumno el aprendizaje teórico-práctico de una operación de exportación, para lo cual los alumnos participantes crearan una agencia de importación-exportación actuando como agentes de la misma y podrán en práctica todos los conocimientos adquiridos en otras asignaturas que tiene relación con una actividad de exportación, su contenido se centra en desarrollar la metodología y el proceso integral de exportación de bienes y servicios, teniendo en cuenta las diversa modalidades de exportación que existen y los instrumentos legales que regulan su operatividad.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => '140055',
	            'texto' => 'La asignatura está diseñada para determinar las estrategias de inversión, financiamiento y riesgo a través del sistema bancario y de seguros y su incidencia en los negocios globales. Su temática comprende al estudio de la dinámica del sistema bancario y de seguros, productos financieros que ofrece el sistema bancario, indicadores de riesgo para las instituciones financieras, criterios para la clasificación y evaluación de riesgos, tipos de seguros que se emplean en los negocios internacionales, modalidades de financiamiento del comercio internacional.

Abarca los siguientes aspectos: El sistema financiero nacional e internacional. Marco legal. Organismos de supervisión. Metodologías de evaluación. Retos derivados del acuerdo de Basilea (Basilea II). El impacto de la Microfinanzas en la evolución del Sistema Financiero. Empresas Subsidiarias. Rol del sistema financiero como motor de crecimiento.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'CON010',
	            'texto' => 'El curso corresponde al área de finanzas siendo su carácter teórico - práctico, Este curso permitirá a nuestros alumnos interrelacionar los conocimientos adquiridos en Administración financiera I y II así efectuar un análisis de los problemas relacionados con las transacciones financieras que realizan las sociedades anónimas en el mercado. En su primera parte, la asignatura trata sobre conceptos introductorios de economía financiera, para luego enfocar en tres grandes temas: el financiamiento vía deuda, el financiamiento vía capital y fusiones y adquisiciones.

A modo de complementario, el curso desarrolla también conceptos introductorios sobre instrumentos de cobertura financiera (hedging) y temas de gobierno corporativo.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => '100192',
	            'texto' => 'El curso de Contabilidad de Entidades Financieras y de Seguros es de carácter teórico - práctico, orientado a conocer el sistema contable de las Entidades Financieras y de Seguros en el marco de la Ley General de Banca y Seguros.

El propósito del curso es brindar al estudiante los conocimientos sobre la legislación de las entidades del sector financiero y de seguros, la contabilización de sus operaciones y la formulación de sus estados financieros.

El desarrollo del curso comprende: El estudio de la Ley General de Banca y Seguros, del Plan Contable para Entidades Financieras, los procesos contables y la formulación de los Estados Financieros de las entidades bancarias, las Administradoras de Fondos de Pensiones, las Compañías de Seguros y otras entidades oficiales relacionadas.

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'ING01',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'ING02',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'ING03',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'ING04',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'ING05',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'ING06',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'ING07',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'ING08',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'ING09',
	            'texto' => '

'		]);
        Sumilla::create([
	            'plan' => '8',
	            'cod_curso' => 'ING10',
	            'texto' => '

'		]);
    }
}
