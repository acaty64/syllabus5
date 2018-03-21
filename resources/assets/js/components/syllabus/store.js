import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export const store = new Vuex.Store({
	state:{
        lineas: [
//
{'tipo': 'titulo0', 'data': [{ 'reg': 11, 'subtipo': '', 'row' :1, 'col': 1, 'rows': 1, 'cols': 8, 'align': 'center', 'texto': 'CONTABILIDAD GERENCIAL', 'offset':1}, ],  },
{'tipo': 'titulo1', 'data': [{ 'reg': 21, 'subtipo': 'generales', 'row' :2, 'col': 1, 'rows': 1, 'cols': 8, 'align': 'left', 'texto': 'I. DATOS GENERALES', 'offset':1}, ],  },

{'tipo': 'generales', 'data': [{ 'reg': 35, 'subtipo': '', 'row' :3, 'col': 2, 'rows': 1, 'cols': 2, 'align': 'left', 'texto': 'Código:', 'offset':2}, { 'reg': 85, 'subtipo': '', 'row' :3, 'col': 3, 'rows': 1, 'cols': 2, 'align': 'left', 'texto': '100048', 'offset':1}, ],  },

{'tipo': 'generales', 'data': [{ 'reg': 130, 'subtipo': '', 'row' :4, 'col': 2, 'rows': 1, 'cols': 2, 'align': 'left', 'texto': 'Pre‐ Requisito :', 'offset':2}, { 'reg': 7, 'subtipo': '', 'row' :4, 'col': 3, 'rows': 1, 'cols': 2, 'align': 'left', 'texto': 'Contabilidad General', 'offset':1}, ],  },

{'tipo': 'generales', 'data': [{ 'reg': 109, 'subtipo': '', 'row' :5, 'col': 2, 'rows': 1, 'cols': 2, 'align': 'left', 'texto': 'Créditos : ', 'offset':2}, { 'reg': 13, 'subtipo': '', 'row' :5, 'col': 3, 'rows': 1, 'cols': 2, 'align': 'left', 'texto': '03', 'offset':1}, ],  },

{'tipo': 'generales', 'data': [{ 'reg': 128, 'subtipo': '', 'row' :6, 'col': 2, 'rows': 1, 'cols': 2, 'align': 'left', 'texto': 'Horas :', 'offset':2}, { 'reg': 91, 'subtipo': '', 'row' :6, 'col': 3, 'rows': 1, 'cols': 2, 'align': 'left', 'texto': '04 horas', 'offset':1}, ],  },

{'tipo': 'generales', 'data': [{ 'reg': 24, 'subtipo': '', 'row' :7, 'col': 2, 'rows': 1, 'cols': 2, 'align': 'left', 'texto': 'Semestre académico : ', 'offset':2}, { 'reg': 86, 'subtipo': '', 'row' :7, 'col': 3, 'rows': 1, 'cols': 2, 'align': 'left', 'texto': '2017‐ I', 'offset':1}, ],  },

{'tipo': 'generales', 'data': [{ 'reg': 81, 'subtipo': '', 'row' :8, 'col': 2, 'rows': 1, 'cols': 2, 'align': 'left', 'texto': 'Ciclo :', 'offset':2}, { 'reg': 103, 'subtipo': '', 'row' :8, 'col': 3, 'rows': 1, 'cols': 2, 'align': 'left', 'texto': 'III', 'offset':1}, ],  },
{'tipo': 'titulo1', 'data': [{ 'reg': 45, 'subtipo': 'sumillas', 'row' :9, 'col': 1, 'rows': 1, 'cols': 8, 'align': 'left', 'texto': 'II. SUMILLA', 'offset':1}, ],  },
{'tipo': 'sumillas', 'data': [{ 'reg': 36, 'subtipo': '', 'row' :10, 'col': 1, 'rows': 1, 'cols': 8, 'align': 'justify', 'texto': 'El curso tiene como propósito integrar las teorías, las técnicas y las herramientas adquiridas en las materias de contabilidad general y administración que le permita llegar al alumno a desarrollar las habilidades de análisis, integración de la información para la construcción de propuestas y soluciones que llevan al logro de los objetivos de la organización. Se pondrá énfasis en el análisis financiero de los estados financieros y su relación con los costos empresariales.', 'offset':1}, ],  },
{'tipo': 'titulo1', 'data': [{ 'reg': 82, 'subtipo': 'competencias', 'row' :11, 'col': 1, 'rows': 1, 'cols': 8, 'align': 'left', 'texto': 'III. SISTEMA DE COMPETENCIAS', 'offset':1}, ],  },
{'tipo': 'titulo2', 'data': [{ 'reg': 37, 'subtipo': '', 'row' :12, 'col': 1, 'rows': 1, 'cols': 8, 'align': 'left', 'texto': 'COMPETENCIAS GENERALES', 'offset':1}, ],  },
{'tipo': 'competencias', 'data': [{ 'reg': 10, 'subtipo': '', 'row' :13, 'col': 2, 'rows': 1, 'cols': 7, 'align': 'justify', 'texto': 'Comprende el papel de la información contable en los Negocios. Relación entre la contabilidad y la Administración y la toma de decisiones.', 'offset':2}, ],  },
{'tipo': 'competencias', 'data': [{ 'reg': 13, 'subtipo': '', 'row' :14, 'col': 2, 'rows': 1, 'cols': 7, 'align': 'justify', 'texto': 'Conoce y ejecuta los Estados Financieros de una empresa comercial, industrial y de servicios.', 'offset':2}, ],  },
{'tipo': 'competencias', 'data': [{ 'reg': 81, 'subtipo': '', 'row' :15, 'col': 2, 'rows': 1, 'cols': 7, 'align': 'justify', 'texto': 'Toma de decisiones, en base a un análisis financiero, dentro de las funciones de operación, inversión y financiamiento y análisis de los costos.', 'offset':2}, ],  },
{'tipo': 'competencias', 'data': [{ 'reg': 41, 'subtipo': '', 'row' :16, 'col': 2, 'rows': 1, 'cols': 7, 'align': 'justify', 'texto': 'Planifica la gestión de la empresa a futuro.', 'offset':2}, ],  },
{'tipo': 'competencias', 'data': [{ 'reg': 77, 'subtipo': '', 'row' :17, 'col': 2, 'rows': 1, 'cols': 7, 'align': 'justify', 'texto': 'Capacidad de trabajo en equipo.', 'offset':2}, ],  },
{'tipo': 'titulo2', 'data': [{ 'reg': 9, 'subtipo': '', 'row' :18, 'col': 1, 'rows': 1, 'cols': 8, 'align': 'left', 'texto': 'COMPETENCIAS ESPECÍFICAS', 'offset':1}, ],  },
{'tipo': 'competencias', 'data': [{ 'reg': 84, 'subtipo': '', 'row' :19, 'col': 2, 'rows': 1, 'cols': 7, 'align': 'justify', 'texto': 'Conoce, Analiza y describe las diferentes empresas que se desarrollan en nuestro país y la importancia que tiene en ellas la contabilidad gerencia, desde la óptica de los estados financieros: Estado de Situación Financiera y Estado de Resultados.', 'offset':2}, ],  },
{'tipo': 'competencias', 'data': [{ 'reg': 32, 'subtipo': '', 'row' :20, 'col': 2, 'rows': 1, 'cols': 7, 'align': 'justify', 'texto': 'Analiza y diagnostica los Estados financieros básicos de diferentes empresas, mediante el análisis vertical y horizontal así como los ratios financieros. ', 'offset':2}, ],  },
{'tipo': 'competencias', 'data': [{ 'reg': 111, 'subtipo': '', 'row' :21, 'col': 2, 'rows': 1, 'cols': 7, 'align': 'justify', 'texto': 'Desarrolla un plan financiero para una empresa: Presupuesto de ventas, Presupuesto de cobranzas, presupuesto de producción, presupuesto de compras, presupuesto de pagos, presupuesto de pagos, presupuesto de gastos, entre otros.', 'offset':2}, ],  },
{'tipo': 'competencias', 'data': [{ 'reg': 28, 'subtipo': '', 'row' :22, 'col': 2, 'rows': 1, 'cols': 7, 'align': 'justify', 'texto': 'Estudia la importancia de la estructura de costos de una empresa y su implicancia en la planificación financiera.', 'offset':2}, ],  },
{'tipo': 'competencias', 'data': [{ 'reg': 27, 'subtipo': '', 'row' :23, 'col': 2, 'rows': 1, 'cols': 7, 'align': 'justify', 'texto': 'Elabora estados financieros proyectados, para diagnosticar el futuro de la empresa.', 'offset':2}, ],  },
{'tipo': 'titulo1', 'data': [{ 'reg': 126, 'subtipo': 'contenidos', 'row' :24, 'col': 1, 'rows': 1, 'cols': 8, 'align': 'left', 'texto': 'IV. PROGRAMACIÓN DE CONTENIDOS', 'offset':1}, ],  },
{'tipo': 'unidades', 'data': [{ 'reg': 22, 'subtipo': '', 'row' :25, 'col': 1, 'rows': 1, 'cols': 8, 'align': 'center', 'texto': 'UNIDAD I: LA CONTABILIDAD GERENCIAL.', 'offset':1}, ],  },



{'tipo': 'titulo3', 'data': [{ 'reg': 35, 'subtipo': '', 'row' :26, 'col': 1, 'rows': 1, 'cols': 1, 'align': 'center', 'texto': 'SEMANA', 'offset':1}, { 'reg': 48, 'subtipo': '', 'row' :26, 'col': 2, 'rows': 1, 'cols': 3, 'align': 'center', 'texto': 'CONCEPTUAL', 'offset':1}, { 'reg': 14, 'subtipo': '', 'row' :26, 'col': 4, 'rows': 1, 'cols': 2, 'align': 'center', 'texto': 'PROCEDIMENTAL', 'offset':1}, { 'reg': 25, 'subtipo': '', 'row' :26, 'col': 6, 'rows': 1, 'cols': 2, 'align': 'center', 'texto': 'ACTIVIDAD DE APRENDIZAJE', 'offset':1}, ],  },



{'tipo': 'contenidos', 'data': [{ 'reg': 99, 'subtipo': '', 'row' :27, 'col': 1, 'rows': 1, 'cols': 1, 'align': 'center', 'texto': '1', 'offset':1}, { 'reg': 127, 'subtipo': '', 'row' :27, 'col': 2, 'rows': 1, 'cols': 3, 'align': 'left', 'texto': 'La contabilidad gerencial.\n‐ Qué es la contabilidad. El ciclo contable. Los Estados Financieros.\n‐Qué es la contabilidad gerencial. Objetivos e importancia de la contabilidad gerencial.\n‐Diferencias entre la contabilidad gerencial y la contabilidad financiera. Usuarios de la información. Tipo de información. Normas de regulación.', 'offset':1}, { 'reg': 91, 'subtipo': '', 'row' :27, 'col': 4, 'rows': 1, 'cols': 2, 'align': 'left', 'texto': 'Reconoce el recorrido de las operaciones empresariales en el ciclo contable de una empresa. Evalúa la utilidad de la información financiera y gerencial.', 'offset':1}, { 'reg': 115, 'subtipo': '', 'row' :27, 'col': 6, 'rows': 1, 'cols': 2, 'align': 'left', 'texto': 'Exposición dialogada\nTaller', 'offset':1}, ],  },



{'tipo': 'contenidos', 'data': [{ 'reg': 62, 'subtipo': '', 'row' :28, 'col': 1, 'rows': 1, 'cols': 1, 'align': 'center', 'texto': '2', 'offset':1}, { 'reg': 17, 'subtipo': '', 'row' :28, 'col': 2, 'rows': 1, 'cols': 3, 'align': 'left', 'texto': 'La Contabilidad de Costos Empresariales.\n‐ Concepto. Importancia y su aplicación. Relación entre la contabilidad Gerencial y la Contabilidad de Costos.', 'offset':1}, { 'reg': 102, 'subtipo': '', 'row' :28, 'col': 4, 'rows': 1, 'cols': 2, 'align': 'left', 'texto': 'Determinación, distribución y aplicación de los costos en una empresa mercantil.', 'offset':1}, { 'reg': 126, 'subtipo': '', 'row' :28, 'col': 6, 'rows': 1, 'cols': 2, 'align': 'left', 'texto': 'Dinámica grupal/debate en clase', 'offset':1}, ],  },



{'tipo': 'contenidos', 'data': [{ 'reg': 39, 'subtipo': '', 'row' :29, 'col': 1, 'rows': 1, 'cols': 1, 'align': 'center', 'texto': '3', 'offset':1}, { 'reg': 124, 'subtipo': '', 'row' :29, 'col': 2, 'rows': 1, 'cols': 3, 'align': 'left', 'texto': 'Elementos de los Estados Financieros:\n‐ Balance General: Activo, pasivo y patrimonio.\n‐ Estado de Resultados: Ingresos y Gastos', 'offset':1}, { 'reg': 26, 'subtipo': '', 'row' :29, 'col': 4, 'rows': 1, 'cols': 2, 'align': 'left', 'texto': 'Analizar y aplicar el marco legal normativo para la elaboración de los Estados Financieros.', 'offset':1}, { 'reg': 40, 'subtipo': '', 'row' :29, 'col': 6, 'rows': 1, 'cols': 2, 'align': 'left', 'texto': 'Exposición dialogada', 'offset':1}, ],  },



{'tipo': 'contenidos', 'data': [{ 'reg': 43, 'subtipo': '', 'row' :30, 'col': 1, 'rows': 1, 'cols': 1, 'align': 'center', 'texto': '4', 'offset':1}, { 'reg': 62, 'subtipo': '', 'row' :30, 'col': 2, 'rows': 1, 'cols': 3, 'align': 'left', 'texto': 'Análisis de los Estados Financieros\n‐Análisis Horizontal.\n‐Análisis Vertical.\n‐Desarrollo de casos de aplicación.\n‐ Elaboración de un informe gerencial.', 'offset':1}, { 'reg': 10, 'subtipo': '', 'row' :30, 'col': 4, 'rows': 1, 'cols': 2, 'align': 'left', 'texto': 'Evalúa los resultados obtenidos. Demuestra la aplicación del análisis vertical y horizontal.', 'offset':1}, { 'reg': 82, 'subtipo': '', 'row' :30, 'col': 6, 'rows': 1, 'cols': 2, 'align': 'left', 'texto': 'Clase Expositiva\n Taller\n  Discusión de caso', 'offset':1}, ],  },
{'tipo': 'evaluaciones', 'data': [{ 'reg': 19, 'subtipo': '', 'row' :31, 'col': 2, 'rows': 1, 'cols': 7, 'align': 'center', 'texto': 'EVALUACIÓN PARCIAL 1 ', 'offset':2}, ],  },



{'tipo': 'contenidos', 'data': [{ 'reg': 82, 'subtipo': '', 'row' :32, 'col': 1, 'rows': 1, 'cols': 1, 'align': 'center', 'texto': '5', 'offset':1}, { 'reg': 61, 'subtipo': '', 'row' :32, 'col': 2, 'rows': 1, 'cols': 3, 'align': '', 'texto': 'Trabajos de aplicación\n ‐Análisis de todo el proceso aplicado hasta el informe gerencial.', 'offset':1}, { 'reg': 39, 'subtipo': '', 'row' :32, 'col': 4, 'rows': 1, 'cols': 2, 'align': '', 'texto': 'Propicia un debate acerca de la toma de decisiones en una empresa.', 'offset':1}, { 'reg': 69, 'subtipo': '', 'row' :32, 'col': 6, 'rows': 1, 'cols': 2, 'align': '', 'texto': 'Exposición dialogada', 'offset':1}, ],  },
{'tipo': 'unidades', 'data': [{ 'reg': 124, 'subtipo': '', 'row' :33, 'col': 1, 'rows': 1, 'cols': 8, 'align': 'center', 'texto': 'UNIDAD II: ANALISIS E INTERPRETACION DE LOS ESTADOS FINANCIEROS', 'offset':1}, ],  },



{'tipo': 'titulo3', 'data': [{ 'reg': 62, 'subtipo': '', 'row' :34, 'col': 1, 'rows': 1, 'cols': 1, 'align': 'center', 'texto': 'SEMANA', 'offset':1}, { 'reg': 61, 'subtipo': '', 'row' :34, 'col': 2, 'rows': 1, 'cols': 3, 'align': 'center', 'texto': 'CONCEPTUAL', 'offset':1}, { 'reg': 73, 'subtipo': '', 'row' :34, 'col': 4, 'rows': 1, 'cols': 2, 'align': 'center', 'texto': 'PROCEDIMENTAL', 'offset':1}, { 'reg': 27, 'subtipo': '', 'row' :34, 'col': 6, 'rows': 1, 'cols': 2, 'align': 'center', 'texto': 'ACTIVIDAD DE APRENDIZAJE', 'offset':1}, ],  },
{'tipo': 'titulo1', 'data': [{ 'reg': 6, 'subtipo': 'estrategias', 'row' :35, 'col': 1, 'rows': 1, 'cols': 8, 'align': 'left', 'texto': 'V. ESTRATEGIAS METODOLÓGICAS', 'offset':1}, ],  },
{'tipo': 'titulo1', 'data': [{ 'reg': 75, 'subtipo': 'evaluaciones', 'row' :36, 'col': 1, 'rows': 1, 'cols': 8, 'align': 'left', 'texto': 'VI. EVALUACIÓN', 'offset':1}, ],  },
{'tipo': 'titulo1', 'data': [{ 'reg': 102, 'subtipo': 'bibliografias', 'row' :37, 'col': 1, 'rows': 1, 'cols': 8, 'align': 'left', 'texto': 'VII. BIBLIOGRAFÍA', 'offset':1}, ],  },
//
        ],

        columnas: [
             '10%' ,
             '15%' ,
             '15%' ,
             '10%' ,
             '15%' ,
             '10%' ,
             '15%' ,
             '10%' ,
        ],

        status: 'vista',

	},
	mutations:{
        view(state, tipo){
            state.status = tipo
        },
        changeSumilla(state, item){
            var i = findByTipo(state.lineas, 'sumillas');
            state.lineas[i].data[0].texto = item.texto;
            state.status = 'vista';
        },

	},
	getters: {
        generales: (state) => {
            var array = state.lineas;
            var items = array.filter( (linea) => linea.tipo == 'generales' );
            return items;
        },
        sumillas: (state) => {
            var array = state.lineas;
            var item = array.filter( (linea) => linea.tipo == 'sumillas' );
            return item[0].data[0];
        },
	},
    actions: {
        grabarSumilla: (context, item) => {
            context.commit('changeSumilla',item);
        },

    },
});

function findByTipo(items, tipo) {
        for (var i in items) {
            if (items[i].tipo == tipo) {
                return i;
            }
        }
        return null;
    }
