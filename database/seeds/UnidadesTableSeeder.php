<?php
use App\Unidad;
use Illuminate\Database\Seeder;
class UnidadesTableSeeder extends Seeder
{
    public function run()
    {
		/************************************************/
    	/**********************************************/
        Unidad::create([
			'semestre' => '20191', 
			'cod_curso' => '100048', 
			'semana' => 1,
			'texto' => 'LA CONTABILIDAD GERENCIAL.',
			'logro' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac nunc facilisis, aliquet elit vitae, dapibus ipsum. Nulla ut quam ultrices, suscipit nulla a, tristique sapien.',
			'orden' => 1,
		]);
		Unidad::create([
			'semestre' => '20191', 
			'cod_curso' => '100048', 
			'semana' => 6,
			'texto' => 'ANALISIS E INTERPRETACION DE LOS ESTADOS FINANCIEROS.',
			'logro' => 'Quisque vitae sapien pharetra, ullamcorper quam nec, pellentesque tellus. Phasellus scelerisque augue sed volutpat lobortis.',
			'orden' => 2,
		]);


        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG001',
	            'semana' => '1',
	            'texto' => 'TEORÍA DE ECUACIONES',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG001',
	            'semana' => '4',
	            'texto' => 'MATRICES',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG001',
	            'semana' => '7',
	            'texto' => 'DETERMINANTES',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG001',
	            'semana' => '11',
	            'texto' => 'DESIGUALDADES E INECUACIONES',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG002',
	            'semana' => '1',
	            'texto' => 'NOCIONES DE GEOMETRÍA ANALÍTICA',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG002',
	            'semana' => '9',
	            'texto' => 'FUNCIONES DE VARIABLE REAL',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG003',
	            'semana' => '1',
	            'texto' => 'FUNCIONES',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG003',
	            'semana' => '4',
	            'texto' => 'LÍMITE DE UNA FUNCIÓN',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG003',
	            'semana' => '6',
	            'texto' => 'DERIVADAS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG003',
	            'semana' => '11',
	            'texto' => 'APLICACIONES DE LAS DERIVADAS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100071',
	            'semana' => '1',
	            'texto' => 'LA ECONOMÍA, LA EVOLUCIÓN DEL ESCENARIO ECONÓMICO Y LAS CULTURAS ECONÓMICAS.',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100071',
	            'semana' => '6',
	            'texto' => 'LAS EMPRESAS Y LOS EMPRESARIOS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100071',
	            'semana' => '8',
	            'texto' => 'LOS COSTOS EN LAS EMPRESAS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100071',
	            'semana' => '10',
	            'texto' => 'EL MARKETING: FUNDAMENTOS Y APLICACIONES',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100071',
	            'semana' => '12',
	            'texto' => 'LA FORMULA EMPRESARIAL',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100071',
	            'semana' => '14',
	            'texto' => 'LA GLOBALIZACION E INTERNET',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100081',
	            'semana' => '1',
	            'texto' => 'LA ADMINISTRACIÓN EN EL ENTORNO GLOBAL DE LAS ORGANIZACIONES',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100081',
	            'semana' => '6',
	            'texto' => 'LA PLANEACIÓN Y SUS ELEMENTOS ESENCIALES PARA EL BUEN DESEMPEÑO DE LAS ORGANIZACIONES',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100081',
	            'semana' => '9',
	            'texto' => 'LA ORGANIZACIÓN Y SU ESTRUCTURA BÁSICA',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100081',
	            'semana' => '11',
	            'texto' => 'INTEGRACIÓN Y DIRECCIÓN DE PERSONAS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100081',
	            'semana' => '14',
	            'texto' => 'CONTROL DE LA ACCIÓN EMPRESARIAL',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG006',
	            'semana' => '1',
	            'texto' => 'FUNDAMENTOS TEÓRICOS CONTABLES EN TODA EMPRESA',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG006',
	            'semana' => '6',
	            'texto' => 'LOS LIBROS EN CONTABILIDAD',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG006',
	            'semana' => '8',
	            'texto' => 'EL LIBRO DIARIO Y EL LIBRO MAYOR',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG006',
	            'semana' => '10',
	            'texto' => 'HOJA DE TRABAJO Y ESTADOS FINANCIEROS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG006',
	            'semana' => '13',
	            'texto' => 'LOS LIBROS AUXILIARES',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ADM009',
	            'semana' => '1',
	            'texto' => 'CONCEPTOS BÁSICOS – INTRODUCCIÓN AL MARKETING',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ADM009',
	            'semana' => '5',
	            'texto' => 'COMPORTAMIENTO DEL CONSUMIDOR',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ADM009',
	            'semana' => '7',
	            'texto' => 'COMPORTAMIENTO DEL CONSUMIDOR',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ADM009',
	            'semana' => '9',
	            'texto' => 'EL MARKETING: FUNDAMENTOS Y APLICACIONES',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100160',
	            'semana' => '1',
	            'texto' => 'VARIABLES Y CONCEPTOS MACROECONÓMICOS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100160',
	            'semana' => '4',
	            'texto' => 'LA ECONOMÍA REAL: EL MERCADO DE BIENES',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100160',
	            'semana' => '9',
	            'texto' => 'LOS MERCADOS FINANCIEROS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100160',
	            'semana' => '13',
	            'texto' => 'INFLACIÓN Y MERCADO CAMBIARIO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '140065',
	            'semana' => '1',
	            'texto' => 'EL COMPORTAMIENTO DEL CONSUMIDOR Y FORMACIÓN DE LA DEMANDA',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '140065',
	            'semana' => '7',
	            'texto' => 'EL COMPORTAMIENTO DE LA EMPRESA Y LA FORMACIÓN DE LA OFERTA',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '140065',
	            'semana' => '11',
	            'texto' => 'EL FUNCIONAMIENTO DE LOS MERCADOS: LA COMPETENCIA PERFECTA',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '140065',
	            'semana' => '14',
	            'texto' => 'ESTRUCTURAS DE MERCADOS CONCENTRADOS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG007',
	            'semana' => '1',
	            'texto' => 'CONCEPTOS DE ESTADÍSTICA, DISTRIBUCIÓN DE FRECUENCIAS Y GRÁFICOS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG007',
	            'semana' => '4',
	            'texto' => 'MEDIDAS DE POSICIÓN Y VARIABILIDAD',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG007',
	            'semana' => '8',
	            'texto' => 'NÚMEROS ÍNDICES',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG007',
	            'semana' => '10',
	            'texto' => 'PROBABILIDAD',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG008',
	            'semana' => '1',
	            'texto' => 'LA ESTADÍSTICA CONCEPTOS DE INFERENCIA, DISTRIBUCIONES DE ESTADÍSTICOS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG008',
	            'semana' => '6',
	            'texto' => 'ESTIMACIÓN PUNTUAL Y POR INTERVALO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG008',
	            'semana' => '10',
	            'texto' => 'PUEBA DE HIPÓTESIS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG008',
	            'semana' => '14',
	            'texto' => 'REGRESIÓN LINEAL SIMPLE Y MÚLTIPLE',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '120012',
	            'semana' => '1',
	            'texto' => 'CONCEPTOS FUNDAMENTALES DEL DERECHO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '120012',
	            'semana' => '2',
	            'texto' => 'LA PERSONA HUMANA',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '120012',
	            'semana' => '3',
	            'texto' => 'LAS PERSONAS JURIDICAS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '120012',
	            'semana' => '4',
	            'texto' => 'EL ACTO JURÍDICO Y  LOS DERECHOS REALES',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '120012',
	            'semana' => '6',
	            'texto' => 'LAS OBLIGACIONES  Y  LOS CONTRATOS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '120012',
	            'semana' => '8',
	            'texto' => 'LA EMPRESA INDIVIDUAL DE RESPONSABILIDAD LIMITADA   SOCIEDADES COMERCIALES',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '120012',
	            'semana' => '11',
	            'texto' => 'EXTINCIÓN DE LA SOCIEDAD. DERECHO CONCURSAL Y LEY DE REESTRUCTURACIÓN PATRIMONIAL',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '120012',
	            'semana' => '12',
	            'texto' => 'AUXILIARES DEL COMERCIO Y DEL COMERCIANTE',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '120012',
	            'semana' => '13',
	            'texto' => 'CONTRATOS DE FINANCIAMIENTO Y CONTRATOS MERCANTILES MODERNOS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '120012',
	            'semana' => '14',
	            'texto' => 'TÍTULOS VALORES',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '120009',
	            'semana' => '1',
	            'texto' => 'EL DERECHO DEL TRABAJO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '120009',
	            'semana' => '5',
	            'texto' => 'ESTABILIDAD LABORAL  SUSPENSIÓN Y EXTINCIÓN DEL CONTRATO DE TRABAJO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '120009',
	            'semana' => '9',
	            'texto' => 'JORNADA Y HORARIO DE TRABAJO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '120009',
	            'semana' => '11',
	            'texto' => 'REMUNERACIÓN  Y OTROS INGRESOS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '120009',
	            'semana' => '13',
	            'texto' => 'BENEFICIOS SOCIALES',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '120009',
	            'semana' => '15',
	            'texto' => 'LIQUIDACION DE BENEFICIOS SOCIALES',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100068',
	            'semana' => '1',
	            'texto' => 'EL TRABAJO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100068',
	            'semana' => '5',
	            'texto' => 'OBRAS Y EMPRESAS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100068',
	            'semana' => '9',
	            'texto' => 'EL DINERO Y EL CRÉDITO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100068',
	            'semana' => '11',
	            'texto' => 'EL AMBIENTE INTERNACIONAL',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100068',
	            'semana' => '15',
	            'texto' => 'EL PODER Y EL PAPEL DEL ESTADO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG010',
	            'semana' => '1',
	            'texto' => 'INTRODUCCIÓN E INTERÉS SIMPLE',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG010',
	            'semana' => '4',
	            'texto' => 'INTERES COMPUESTO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG010',
	            'semana' => '10',
	            'texto' => 'ANUALIDADES',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG010',
	            'semana' => '14',
	            'texto' => 'INVERSIONES',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG011',
	            'semana' => '1',
	            'texto' => 'LAS FINANZAS Y EL SISTEMA FINANCIERO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG011',
	            'semana' => '3',
	            'texto' => 'METODOS DE ANÁLISIS FINANCIERO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG011',
	            'semana' => '5',
	            'texto' => 'ANALISIS DEL FLUJO DE FONDOS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG011',
	            'semana' => '9',
	            'texto' => 'ADMINSITRACION DE CAPITAL DE TRABAJO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG011',
	            'semana' => '16',
	            'texto' => 'POLITICA DE DIVIDENDOS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '110053',
	            'semana' => '1',
	            'texto' => 'PRINCIPIOS DE LAS FINANZAS CORPORATIVAS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '110053',
	            'semana' => '4',
	            'texto' => 'GESTION DEL CAPITAL TRABAJO O FONDO DE MANIOBRA',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '110053',
	            'semana' => '7',
	            'texto' => 'DECISIONES DE INVERSIÓN',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '110053',
	            'semana' => '14',
	            'texto' => 'GESTION DE RIESGO FINANCIERO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG012',
	            'semana' => '1',
	            'texto' => 'GENERALIDADES  Y ANALISIS DE LOS ELEMETOS DELCOSTO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG012',
	            'semana' => '7',
	            'texto' => 'SISTEMAS DE COSTOS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG012',
	            'semana' => '13',
	            'texto' => 'OTROS METODOS DE COSTEO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG013',
	            'semana' => '1',
	            'texto' => 'INTRODUCCION A LA ADMINISTRACION DE COSTOS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG013',
	            'semana' => '6',
	            'texto' => 'ANALISIS DE COSTOS Y TOMA DE DECICIONES',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG013',
	            'semana' => '9',
	            'texto' => 'PRESUPUESTO PLANIFICACION Y CONTROL',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG013',
	            'semana' => '15',
	            'texto' => 'DECISIONES DE CORTO Y MEDIANO PLAZO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG019',
	            'semana' => '1',
	            'texto' => 'ELEMENTOS DEL PROYECTO Y ESTUDIO DE MERCADO.',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG019',
	            'semana' => '5',
	            'texto' => 'TAMAÑO, LOCALIZACIÓN  E INGENIERÍA DEL PROYECTO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG019',
	            'semana' => '9',
	            'texto' => 'ESTUDIO ECONÓMICO DEL PROYECTO DE INVERSIÓN',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG019',
	            'semana' => '13',
	            'texto' => 'EVALUACIÓN EMPRESARIAL, SENSIBILIDAD  Y RIESGO DEL PROYECTO.',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG019',
	            'semana' => '1',
	            'texto' => 'CONCEPTOS Y ANTECEDENTES DE LA ESTRATEGIA',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG019',
	            'semana' => '3',
	            'texto' => 'EL SECTOR INDUSTRIAL Y LAS CINCO FUERZAS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG019',
	            'semana' => '10',
	            'texto' => 'ANÁLISIS ESTRUCTURAL DEL SECTOR INDUSTRIAL',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG019',
	            'semana' => '15',
	            'texto' => 'LA CADENA DE VALOR',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG017',
	            'semana' => '1',
	            'texto' => 'IMPORTANCIA DE LA TESIS EN LA FORMACIÓN INTEGRAL DEL ALUMNO: ANTECEDENTES TEÓRICOS-PRÁCTICOS EN EL PROCESO DE INVESTIGACIÓN',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG017',
	            'semana' => '6',
	            'texto' => 'ELECCIÓN DEL TEMA DE INVESTIGACIÓN',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG017',
	            'semana' => '8',
	            'texto' => 'JUSTIFICACIÓN Y OBJETIVOS DE LA INVESTIGACIÓN',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG017',
	            'semana' => '12',
	            'texto' => 'MARCO TEÓRICO, HIPÓTESIS, DISEÑO METODOLÓGICO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG018',
	            'semana' => '1',
	            'texto' => 'LA IMPORTANCIA DE LA TESIS EN LA FORMACIÓN INTEGRAL DEL ALUMNO Y FORMALIZACIÓN DEL PROYECTO DE INVESTIGACIÓN',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG018',
	            'semana' => '6',
	            'texto' => 'DISEÑO METODOLÓGICO: ANÁLISIS Y RECOLECCIÓN DE DATOS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG018',
	            'semana' => '12',
	            'texto' => 'METODOLOGÍA: ANÁLISIS DE DATOS ACORDE A LAS HIPOTESIS DESCRITAS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'EG018',
	            'semana' => '14',
	            'texto' => 'DISEÑO DEL INFORME FINAL DE LA TESIS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100198',
	            'semana' => '1',
	            'texto' => 'TOMAR CONOCIMIENTO DE LAS ACTIVIDADES ECONÓMICAS DE LA EMPRESA.',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100198',
	            'semana' => '6',
	            'texto' => 'INFORMACIÓN DE LA EMPRESA REFERENTE A SU ORGANIZACIÓN.',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100199',
	            'semana' => '1',
	            'texto' => 'DIAGNOSTICO EXHAUSTIVO DEL SISTEMA ADMINISTRATIVO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100199',
	            'semana' => '6',
	            'texto' => 'CONOCIIMIETNO DE LAS ESTRATEGIAS PARA INTEGRACIÓN DE RECURSOS.',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ADM001',
	            'semana' => '1',
	            'texto' => 'LA ORGANIZACIÓN Y LAS DIMENSIONES DE SU DISEÑO ESTRUCTURAL',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ADM001',
	            'semana' => '8',
	            'texto' => 'INTRODUCCIÓN A LOS PROCESOS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ADM001',
	            'semana' => '10',
	            'texto' => 'LOS PROCESOS INTERFUNCIONALES',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ADM001',
	            'semana' => '15',
	            'texto' => 'REPRESENTACIÓN GRÁFICA DE PROCESOS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100070',
	            'semana' => '1',
	            'texto' => 'GESTIÓN Y ENTORNO DE MARKETING',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100070',
	            'semana' => '5',
	            'texto' => 'ESTRATEGIAS CORPORATIVAS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100070',
	            'semana' => '10',
	            'texto' => 'ESTRATEGIAS DE MARKETING MIX.',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100206',
	            'semana' => '1',
	            'texto' => 'LA GESTIÓN ESTRATÉGICA Y OPERATIVA DE RECURSOS HUMANOS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100206',
	            'semana' => '5',
	            'texto' => 'ENFOQUE SISTÉMICO DE LA ADMINISTRACIÓN DE RECURSOS HUMANOS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100206',
	            'semana' => '9',
	            'texto' => 'LA GESTIÓN POR COMPETENCIAS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100206',
	            'semana' => '13',
	            'texto' => 'LAS RELACIONES DE TRABAJO COMO FACTOR DE ÉXITO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100163',
	            'semana' => '1',
	            'texto' => 'LA ADMINISTRACIÓN DE LAS OPERACIONES.',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100163',
	            'semana' => '3',
	            'texto' => 'DISEÑO DEL PRODUCTO Y DISEÑO DEL PROCESO.',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100163',
	            'semana' => '7',
	            'texto' => 'TAMAÑO, LOCALIZACIÓN Y DISTRIBUCIÓN DE PLANTA.',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100163',
	            'semana' => '13',
	            'texto' => 'ESTUDIO DEL TRABAJO Y PLAN DE PRODUCCIÓN.',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100170',
	            'semana' => '1',
	            'texto' => 'ORGANIZACIONES PARA COMPETIR Y ADMINISTRACIÓN DE LA CALIDAD.',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100170',
	            'semana' => '5',
	            'texto' => 'CONTROL DE CALIDAD DEL PRODUCTO Y CONTROL DE CALIDAD DEL PROCESO.',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100170',
	            'semana' => '9',
	            'texto' => 'DISEÑO DE PRODUCTOS DE CALIDAD Y GESTIÓN POR PROCESOS.',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100170',
	            'semana' => '13',
	            'texto' => 'MEJORA DE CALIDAD Y SISTEMA DE GESTIÓN DE COSTOS.',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100165',
	            'semana' => '1',
	            'texto' => 'ADMINISTRACIÓN DE LA CADENA DE SUMINISTRO Y GESTIÓN DE INVENTARIOS.',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100165',
	            'semana' => '5',
	            'texto' => 'PLAN DE REQUERIMIENTO DE MATERIALES Y JUSTO A TIEMPO Y OPERACIONES SINCRONIZADAS.',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100165',
	            'semana' => '9',
	            'texto' => 'GESTIÓN DE COMPRAS Y GESTIÓN DE ALMACENAMIENTO.',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100165',
	            'semana' => '13',
	            'texto' => 'DISTRIBUCIÓN FÍSICA Y LOGÍSTICA INTERNACIONAL.',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100164',
	            'semana' => '1',
	            'texto' => 'PAPEL DE LA INVESTIGACIÓN DE MERCADOS EN LA TOMA DE DECISIONES DE MARKETING',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100164',
	            'semana' => '7',
	            'texto' => 'FASES DE UN ESTUDIO DE MERCADO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100166',
	            'semana' => '1',
	            'texto' => 'GENERALIDADES DE LA REINGENIERÍA DE PROCESOS.',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100166',
	            'semana' => '5',
	            'texto' => 'METODOLOGÍA DE REINGENIERÍA DE PROCESOS DE NEGOCIOS.',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100166',
	            'semana' => '11',
	            'texto' => 'CALIDAD TOTAL, BENCHMARKING Y HERRAMIENTAS PARA LA REINGENIERÍA DE PROCESOS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100166',
	            'semana' => '15',
	            'texto' => 'REINGENIERÍA DE PROCESOS Y LA NUEVA ECONOMÍA.',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ADM002',
	            'semana' => '1',
	            'texto' => 'FUNDAMENTOS SOBRE EL COMPORTAMIENTO ORGANIZACIONAL',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ADM002',
	            'semana' => '5',
	            'texto' => 'PROCESOS INDIVIDUALES Y ORGANIZACIONALES',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ADM002',
	            'semana' => '9',
	            'texto' => 'GRUPOS Y PROCESOS INTERPERSONALES',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ADM002',
	            'semana' => '13',
	            'texto' => 'VALORES Y COMPORTAMIENTO ÉTICO. ACCIONES DE ANTICIPACIÓN AL CONFLICTO ORGANIZACIONAL - DISONANCIA COGNOSCITIVA.',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ADM004',
	            'semana' => '1',
	            'texto' => 'EL PROCESO FORMAL DE LA PLANIFICACIÓN ESTRATÉGICA',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ADM004',
	            'semana' => '5',
	            'texto' => 'LA ESTRATEGIA CORPORATIVA',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ADM004',
	            'semana' => '9',
	            'texto' => 'LA CREACIÓN Y DINÁMICA DE LA VENTAJA CORPORATIVA',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ADM004',
	            'semana' => '13',
	            'texto' => 'EL BALANCED SCORECARD Y EL FODA MATEMÁTICO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ADM005',
	            'semana' => '1',
	            'texto' => 'MARCO GENERAL DEL PROJECT MANAGEMENT EN EL MUNDO E INTRODUCCIÓN A LAS 10 ÁREAS DE CONOCIMIENTO DEL PMBOK.',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ADM005',
	            'semana' => '5',
	            'texto' => 'INTRODUCCIÓN A LAS 10 ÁREAS DE CONOCIMIENTO DEL PMBOK Y LA PLANIFICACIÓN EN LOS PROYECTOS.',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ADM005',
	            'semana' => '9',
	            'texto' => 'DIRECCIÓN Y CONTROL EN LOS PROYECTOS.',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ADM005',
	            'semana' => '13',
	            'texto' => 'PROYECTOS, PROGRAMAS Y PORTAFOLIOS Y SU RELACIÓN CON LAS CORPORACIONES.',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100184',
	            'semana' => '1',
	            'texto' => 'APLICACIÓN DE POLITICAS CONTABLES Y LIBROS AUXILIARES',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100184',
	            'semana' => '6',
	            'texto' => 'CONTROL DE LOS INVENTARIOS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100184',
	            'semana' => '8',
	            'texto' => 'EL LIBRO DIARIO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100184',
	            'semana' => '10',
	            'texto' => 'EL PROCESO CONTABLE COMPLETO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100184',
	            'semana' => '12',
	            'texto' => 'CONTROL DE ACTIVOS NO CORRIENTES',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100184',
	            'semana' => '14',
	            'texto' => 'ANALISIS DE LAS DEUDAS EN LA EMPRESA',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'CON009',
	            'semana' => '1',
	            'texto' => 'LA APLICACIÓN DE LAS POLÍTICAS CONTABLES EN LA ELABORACIÓN DE LA INFORMACIÓN FINANCIERA. MARCO CONCEPTUAL',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'CON009',
	            'semana' => '6',
	            'texto' => 'EL ESTADO DE RESULTADOS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'CON009',
	            'semana' => '8',
	            'texto' => 'EL ESTADO DE CAMBIOS EN EL PATRIMONIO NETO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'CON009',
	            'semana' => '10',
	            'texto' => 'EL ESTADO DE FLUJOS DE EFECTIVO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'CON009',
	            'semana' => '12',
	            'texto' => 'INFORMACION COMPLEMENTARIA A LOS ESTADOS FINANCIEROS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'CON009',
	            'semana' => '14',
	            'texto' => 'PROCESO INTEGRAL CONTABLE',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'CON001',
	            'semana' => '1',
	            'texto' => 'RECONOCIMIENTO Y MEDICIÓN DE ACTIVOS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'CON001',
	            'semana' => '5',
	            'texto' => 'RECONOCIMIENTO DE INGRESOS Y AJUSTES DE SALDOS AL VALOR RAZONABLE',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'CON001',
	            'semana' => '8',
	            'texto' => 'CONTABILIDAD DE GRUPOS EMPRESARIALES',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100185',
	            'semana' => '1',
	            'texto' => 'CONCEPTOS Y FUNDAMENTOS DE LA CONTABILIDAD INDUSTRIAL',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100185',
	            'semana' => '5',
	            'texto' => 'ANALISIS DEL PLAN CONTABLE EMPRESARIAL Y SU APLICACIÓN EN LAS EMPRESAS INDUSTRIALES',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100185',
	            'semana' => '9',
	            'texto' => 'ANALISIS DE LOS ELEMENTOS DEL COSTO EN EMPRESAS MANUFACTURERAS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100185',
	            'semana' => '13',
	            'texto' => 'ANALISIS DEL PROCESO CONTABLE EN LAS EMPRESAS INDUSTRIALES',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'CON006',
	            'semana' => '1',
	            'texto' => 'MARCO CONCEPTUAL DEL DERECHO TRIBUTARIO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'CON006',
	            'semana' => '6',
	            'texto' => 'LEY TRIBUTARIA',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'CON006',
	            'semana' => '8',
	            'texto' => 'OBLIGACIÓN TRIBUTARIA',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'CON006',
	            'semana' => '10',
	            'texto' => 'DERECHOS Y OBLIGACIONES DE LOS ADMINISTRADORES',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'CON006',
	            'semana' => '12',
	            'texto' => 'PRESCRIPCIÓN',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'CON006',
	            'semana' => '14',
	            'texto' => 'DERECHO ADMINISTRATIVO TRIBUTARIO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'CON007',
	            'semana' => '1',
	            'texto' => 'LA CONTABILIDAD Y LA TRIBUTACIÓN, RENTAS DE CAPITAL',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'CON007',
	            'semana' => '6',
	            'texto' => 'RENTAS DEL TRABAJO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'CON007',
	            'semana' => '7',
	            'texto' => 'RENTA EMPRESARIAL',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'CON008',
	            'semana' => '1',
	            'texto' => 'LA TRIBUTACIÓN EN EL PERÚ',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'CON008',
	            'semana' => '6',
	            'texto' => 'CRÉDITO FISCAL – IMPUESTO SELECTIVO AL CONSUMO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'CON003',
	            'semana' => '1',
	            'texto' => 'GENERALIDADES Y NORMATIVIDAD DE AUDITORIA',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'CON003',
	            'semana' => '6',
	            'texto' => 'PLANEAMIENTO DE AUDITORIA',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'CON003',
	            'semana' => '7',
	            'texto' => 'FASE DE EJECUCION DE AUDITORIA DE LOS ELEMENTOS DE LOS ESTADOS FINANCIEROS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'CON002',
	            'semana' => '1',
	            'texto' => 'LAS INDUSTRIAS Y LA CONTABILIDAD DE COSTOS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'CON002',
	            'semana' => '5',
	            'texto' => 'LOS COSTOS EN LA INDUSTRIA DE CONSTRUCCION',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'CON002',
	            'semana' => '9',
	            'texto' => 'LOS COSTOS EN LA INDUSTRIA PORCINA',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'CON002',
	            'semana' => '13',
	            'texto' => 'LOS COSTOS EN LA INDUSTRIA DE LA CONFECCION',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'CON005',
	            'semana' => '1',
	            'texto' => 'LA ACTIVIDAD AGROPECUARIA Y AGRO INDUSTRIAL',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'CON005',
	            'semana' => '6',
	            'texto' => 'LA INDUSTRIA MINERA EN EL PERÚ',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'CON005',
	            'semana' => '10',
	            'texto' => 'LA ACTIVIDAD DE LA INDUSTRIA HOTELERA, SERVICIOS TURÍSTICOS Y AFINES EN EL PAÍS.',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'CON005',
	            'semana' => '14',
	            'texto' => 'LA ACTIVIDAD DE CONSTRUCCIÓN EN EL PERÚ',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'CON004',
	            'semana' => '1',
	            'texto' => 'FUNDAMENTOS DE LA AUDITORIA ADMINISTRATIVA.',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'CON004',
	            'semana' => '5',
	            'texto' => 'DISEÑO Y PLANEAMIENTO DE AUDITORIA ADMINISTRATIVA',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'CON004',
	            'semana' => '10',
	            'texto' => 'EJECUCION DE LA AUDITORIA ADMINISTRATIVA',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'CON004',
	            'semana' => '15',
	            'texto' => 'PREPARACION DE INFORMES',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100197',
	            'semana' => '1',
	            'texto' => 'FUNDAMENTOS DE LA CONTABILIDAD GUBERNAMENTAL',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100197',
	            'semana' => '5',
	            'texto' => 'EL SISTEMA INTEGRADO DE ADMINISTRACIÓN FINANCIERA DEL SECTOR PÚBLICO (SIAF-SP)',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100197',
	            'semana' => '10',
	            'texto' => 'EL PLAN CONTABLE GUBERNAMENTAL',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100197',
	            'semana' => '15',
	            'texto' => 'INFORMACIÓN FINANCIERA Y PRESUPUESTARIA DEL SECTOR PÚBLICO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '110052',
	            'semana' => '1',
	            'texto' => 'EL SISTEMA FINANCIERO INTERNACIONAL Y LA CONTABILIDAD DE LA BALANZA DE PAGOS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '110052',
	            'semana' => '5',
	            'texto' => 'EL MERCADO DE DIVISAS Y EL COMERCIO INTERNACIONAL',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '110052',
	            'semana' => '10',
	            'texto' => 'LAS CRISIS FINANCIERAS Y LA GESTIÓN DE RIESGOS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '110052',
	            'semana' => '14',
	            'texto' => 'MERCADO DE DERIVADOS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100192',
	            'semana' => '1',
	            'texto' => 'CONCEPTO, ORGANIZACIÓN DEL SISTEMA FINANCIERO Y ORGANIZACIÓN Y FUNCIÓN CONTABLE',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100192',
	            'semana' => '5',
	            'texto' => 'MANUAL DE CONTABILIDAD PARA EMPRESAS DEL SISTEMA FINANCIERO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100192',
	            'semana' => '15',
	            'texto' => 'INFORMACIÓN FINANCIERA',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ECO007',
	            'semana' => '1',
	            'texto' => 'FUNCIONES DE DOS O MÁS VARIABLES',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ECO007',
	            'semana' => '4',
	            'texto' => 'LA INTEGRAL INDEFINIDA',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ECO007',
	            'semana' => '7',
	            'texto' => 'LA INTEGRAL DEFINIDA',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ECO007',
	            'semana' => '10',
	            'texto' => 'ECUACIONES DIFEFRENCIALES ORDINARIAS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100176',
	            'semana' => '1',
	            'texto' => 'INTRODUCCIÓN A LOS FUNDAMENTOS DE COMERCIO INTERNACIONAL Y SU ENTORNO CON EL NIVEL EMPRESARIAL Y SU ASOCIACIÓN DE LOS TEMAS DE INTELIGENCIA COMERCIAL',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100176',
	            'semana' => '5',
	            'texto' => 'EVOLUCIÓN DE LOS NEGOCIOS GLOBALES Y LOS PROCESOS DE INTERNACIONALIZACIÓN EMPRESARIAL',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100176',
	            'semana' => '9',
	            'texto' => 'MODELOS DE DESARROLLO Y LAS NUEVAS TENDENCIAS DEL COMERCIO INTERNACIONAL ASOCIADOS AL MEDIO AMBIENTE Y LOS DERECHOS DE PROPIEDAD',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100176',
	            'semana' => '13',
	            'texto' => 'EL DESARROLLO DE ESTRATEGIA COMPETITIVA DEL COMERCIO EXTERIOR Y LA POLÍTICA COMERCIAL PERUANA ASÍ COMO LA PROMOCIÓN DE LAS EXPORTACIONES.',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '140069',
	            'semana' => '1',
	            'texto' => 'PENSAMIENTO ECONÓMICO EN LA ANTIGÜEDAD, MEDIEVAL Y LA ESCUELA CLÁSICA',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '140069',
	            'semana' => '6',
	            'texto' => 'LOS NEOCLÁSICOS  Y LOS KEYNESIANOS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '140069',
	            'semana' => '11',
	            'texto' => 'OTRAS ESCUELAS DE PENSAMIENTO ECONÓMICO Y DESARROLLOS CONTEMPORÁNEOS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ECO008',
	            'semana' => '1',
	            'texto' => 'ELEMENTOS DE MUESTREO. CONCEPTOS BÁSICOS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ECO008',
	            'semana' => '5',
	            'texto' => 'TÉCNICAS DE MUESTREO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ECO008',
	            'semana' => '9',
	            'texto' => 'MUESTREO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ECO008',
	            'semana' => '14',
	            'texto' => 'DISEÑOS EXPERIMENTALES Y REGRESIÓN LOGISTICA',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ECO001',
	            'semana' => '1',
	            'texto' => 'TEORÍA AVANZADA DEL CONSUMO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ECO001',
	            'semana' => '5',
	            'texto' => 'TEORÍA AVANZADA DE LA EMPRESA',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ECO001',
	            'semana' => '9',
	            'texto' => 'EQUILIBRIO GENERAL Y ECONOMÍA DEL BIENESTAR',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ECO001',
	            'semana' => '13',
	            'texto' => 'TEORÍA AVANZADA DE MERCADO Y TEMAS AFINES',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ECO006',
	            'semana' => '1',
	            'texto' => 'TRATAMIENTO DE SERIES TEMPORALES Y MODELOS NO LINEALES',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ECO006',
	            'semana' => '5',
	            'texto' => 'MODELOS DINÁMICOS Y DE VOLATILIDAD AVANZADOS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ECO006',
	            'semana' => '9',
	            'texto' => 'MODELO DE PANEL DE DATOS Y ESTIMACIÓN CUALITATIVA CON MICRODATOS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ECO006',
	            'semana' => '13',
	            'texto' => 'TÉCNICAS AVANZADAS DE ESTADÍSTICA EN INVESTIGACIÓN ECONOMÉTRICA',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ECO009',
	            'semana' => '1',
	            'texto' => 'PRUEBAS DE LA CHI-CUADRADA',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ECO009',
	            'semana' => '6',
	            'texto' => 'PRUEBAS NO PARÁMETRICAS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ECO009',
	            'semana' => '8',
	            'texto' => 'ANÁLISIS DE VARIANZA',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ECO009',
	            'semana' => '10',
	            'texto' => 'PRUEBAS DE NORMALIDAD',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ECO009',
	            'semana' => '12',
	            'texto' => 'PRUEBAS DE CORRELACIÓN',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ECO009',
	            'semana' => '14',
	            'texto' => 'COEFICIENTES DE CORRELACIÓN',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ECO002',
	            'semana' => '1',
	            'texto' => 'RAZONES DEL CRECIMIENTO ECONÓMICO DE LA ECONOMÍA PERUANA',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ECO002',
	            'semana' => '5',
	            'texto' => 'ELEMENTOS DE MACRODINÁMICA',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ECO002',
	            'semana' => '9',
	            'texto' => 'INTRODUCCIÓN A LOS MODELOS DINÁMICOS DEL CRECIMIENTO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ECO002',
	            'semana' => '13',
	            'texto' => 'FORMULACIÓN DE LA POLÍTICA MACROECONÓMICA ABIERTA',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ECO003',
	            'semana' => '1',
	            'texto' => 'LA POLITICA ECONÓMICA.',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ECO003',
	            'semana' => '5',
	            'texto' => 'OBJETIVOS DE POLITICA ECONOMICA',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ECO003',
	            'semana' => '8',
	            'texto' => 'INSTRUMENTOS DE POLITICAS ECONOMICAS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ECO003',
	            'semana' => '12',
	            'texto' => 'POLITICA ECONOMICA EN UNA ECONOMIA ABIERTA',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ECO004',
	            'semana' => '1',
	            'texto' => 'PROYECTOS SOCIALES- GENERALIDADES.',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ECO004',
	            'semana' => '6',
	            'texto' => 'IDENTIFICACION',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ECO004',
	            'semana' => '8',
	            'texto' => 'MARCO LÓGICO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ECO004',
	            'semana' => '11',
	            'texto' => 'FORMULACIÓN DE PROYECTOS DE INVERSIÓN SOCIAL',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ECO005',
	            'semana' => '1',
	            'texto' => 'CONCEPTOS Y MODELOS DE CRECIMIENTO ECONOMICO.',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ECO005',
	            'semana' => '6',
	            'texto' => 'INSTITUCIONES, CRECIMIENTO Y DESARROLLO HUMANO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ECO005',
	            'semana' => '9',
	            'texto' => 'MODELOS Y ESTRATEGIAS DE DESARROLLO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ECO005',
	            'semana' => '14',
	            'texto' => 'ANALISIS DE LOS PROBLEMAS CENTRALES DEL DESARROLLO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '120019',
	            'semana' => '1',
	            'texto' => 'INTRODUCCIÓN Y PRESENTACIÓN DEL CURSO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '120019',
	            'semana' => '5',
	            'texto' => 'EL QUE HACER DE LOS ESTADOS: LAS POLITICAS PUBLICAS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '120019',
	            'semana' => '11',
	            'texto' => 'ROL DEL ESTADO EN LAS POLITICAS PUBLICAS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '120019',
	            'semana' => '13',
	            'texto' => 'LA GESTIÓN PÚBLICA',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '120019',
	            'semana' => '16',
	            'texto' => 'POLITICAS SOCIALES',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '110074',
	            'semana' => '1',
	            'texto' => 'CONOCIMIENTO DE LAS ACTIVIDADES ECONÓMICAS DE LA EMPRESA',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '110074',
	            'semana' => '6',
	            'texto' => 'LEVANTAMIENTO DE INFORMACIÓN DE LA EMPRESA EN RELACIÓN A SU ORGANIZACIÓN',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '110074',
	            'semana' => '10',
	            'texto' => 'EL ESTUDIANTE COMO PARTE DE LA ORGANIZACIÓN',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '110074',
	            'semana' => '14',
	            'texto' => 'MANUAL DE PROCEDIMIENTOS ADMINISTRATIVOS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '110076',
	            'semana' => '1',
	            'texto' => 'DIAGNÓSTICO DEL SISTEMA CONTABLE DE LA EMPRESA EN LA QUE REALIZA SU PRÁCTICA O TRABAJA',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '110076',
	            'semana' => '5',
	            'texto' => 'DIAGNÓSTICO DE LA CONTABILIDAD ANALÍTICA DE EXPLOTACIÓN. EL SISTEMA DE COSTOS.',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '110076',
	            'semana' => '9',
	            'texto' => 'DIAGNÓSTICO DE LA CONTABILIDAD ANALÍTICA DE EXPLOTACIÓN. EL SISTEMA DE COSTOS.',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '110076',
	            'semana' => '13',
	            'texto' => 'PROPUESTAS DE UN NUEVO SISTEMA DE CONTABILIDAD, DE UN NUEVO SISTEMA DE COSTOS Y DE UN NUEVO SISTEMA DE CONTROL INTERNO.',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '140081',
	            'semana' => '1',
	            'texto' => 'LA IMAGEN PERSONAL Y PAUTAS DE COMPORTAMIENTO.',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '140081',
	            'semana' => '6',
	            'texto' => 'HABILIDADES SOCIALES Y RELACIONES HUMANAS. – ETIQUETA SOCIAL Y PROTOCOLO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '140081',
	            'semana' => '10',
	            'texto' => 'ESTRATEGIAS DE MARKETING PERSONAL EN LA CARRERA PROFESIONAL DE ECONOMÍA',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '140081',
	            'semana' => '15',
	            'texto' => 'HERRAMIENTAS BÁSICAS PARA EL DESARROLLO DE ARTÍCULOS CIENTÍFICOS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '140082',
	            'semana' => '1',
	            'texto' => 'EL USO DE HERRAMIENTAS BÁSICAS DE LA INFORMÁTICA PARA EL DESARROLLO DE ARTÍCULOS CIENTÍFICOS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '140082',
	            'semana' => '5',
	            'texto' => 'EL ARTÍCULO CIENTÍFICO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '140082',
	            'semana' => '8',
	            'texto' => 'EL ANÁLISIS CIENTÍFICO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '140082',
	            'semana' => '12',
	            'texto' => 'LA REDACCIÓN CIENTÍFICA',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'CON010',
	            'semana' => '1',
	            'texto' => 'INTRODUCCIÓN',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'CON010',
	            'semana' => '3',
	            'texto' => 'PLANEACION ESTRATEGICA FINANCIERA',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'CON010',
	            'semana' => '5',
	            'texto' => 'EL DIAGNÓSTICO EMPRESARIAL',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'CON010',
	            'semana' => '7',
	            'texto' => 'EMPRESAS EN DIFICULTADES',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'CON010',
	            'semana' => '9',
	            'texto' => 'FUSIONES Y ADQUISICIONES',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'CON010',
	            'semana' => '16',
	            'texto' => 'DERIVADOS FINANCIEROS EN EL SISTEMA FINANCIERO PERUANO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ADM006',
	            'semana' => '1',
	            'texto' => 'LAS INSTITUCIONES RECTORAS DEL COMERCIO EXTERIOR.',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ADM006',
	            'semana' => '5',
	            'texto' => 'DISEÑO DE ENVASES',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ADM008',
	            'semana' => '1',
	            'texto' => 'EL COMERCIO INTERNACIONAL',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ADM008',
	            'semana' => '2',
	            'texto' => 'LA EXPORTACION EN EL MARCO DE LOS NEGOCIOS INTERNACIONALES',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ADM008',
	            'semana' => '3',
	            'texto' => 'DECRETO LEGISLATIVO N°1050 LEY GENERAL DE ADUANAS Y REGLAMENTO - REGIMENES PROMOCIONALES DE EXPORTACION',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ADM008',
	            'semana' => '4',
	            'texto' => 'COMO  EXPORTAR',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ADM008',
	            'semana' => '9',
	            'texto' => 'ORIGEN Y ANTECEDENTES DEL DERECHO ADUANERO, SU INTERRELACIÓN CON CIENCIAS JURÍDICAS.',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ADM008',
	            'semana' => '10',
	            'texto' => 'INTEGRACIÓN Y GLOBALIZACIÓN',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ADM008',
	            'semana' => '11',
	            'texto' => 'RÉGIMEN DE IMPORTACIÓN D.L. 1053 Y SU REGLAMENTO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100174',
	            'semana' => '1',
	            'texto' => 'INTRODUCCIÓN AL MARKETING INTERNACIONAL, DIFERENCIA ENTRE PLAN DE NEGOCIOS Y PLAN DE MARKETING',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100174',
	            'semana' => '6',
	            'texto' => 'SEGMENTACIÓN DE MERCADO Y PRONÓSTICO DE LA DEMANDA',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100174',
	            'semana' => '8',
	            'texto' => 'ETAPAS DEL PLAN DE MARKETING',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100174',
	            'semana' => '11',
	            'texto' => 'EL MARKETING: ESTRUCTURA DEL PLAN DE MARKETING',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ADM007',
	            'semana' => '1',
	            'texto' => 'ASPECTOS DE LOS COSTOS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ADM007',
	            'semana' => '4',
	            'texto' => 'COSTOS Y PRECIOS DE IMPORTACIONES',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ADM007',
	            'semana' => '8',
	            'texto' => 'COSTOS DE DISTRIBUCIÓN FÍSICA INTERNACIONAL',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => 'ADM007',
	            'semana' => '13',
	            'texto' => 'COSTOS Y FIJACIÓN DE PRECIOS DE EXPORTACIONES',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '140055',
	            'semana' => '1',
	            'texto' => 'EL SISTEMA FINANCIERO - ORGANISMOS REGULADORES',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100192',
	            'semana' => '3',
	            'texto' => 'OPERACIONES BANCARIAS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100192',
	            'semana' => '7',
	            'texto' => 'VALORES MOBILIARIOS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100192',
	            'semana' => '10',
	            'texto' => 'DERIVADOS FINANCIEROS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100192',
	            'semana' => '11',
	            'texto' => 'PROTECCIÓN AL INVERSIONISTA',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100192',
	            'semana' => '14',
	            'texto' => 'EVALUACIÓN DE RIESGO',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
        Unidad::create([
	            'semestre' => '20191',
	            'cod_curso' => '100192',
	            'semana' => '16',
	            'texto' => 'EMPRESAS SUBSIDIARIAS',
	            'logro' => 'aaaaa',
	            'orden' => '1',
		]);
    }
}
