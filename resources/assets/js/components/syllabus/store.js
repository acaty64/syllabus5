import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export const store = new Vuex.Store({
	state:{
        semestre: "",
        cod_curso: "",
        lineas: [],
        acceso: [],
        nuevo: {
            'sumillas': true,
            'competencias': [false, true],
            'unidades': false,
            'contenidos': true,
            'estrategias': true,
            'evaluaciones': false,
            'bibliografias': true
        },

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
        loading: true,

        romanos: [ '','I','II','III','IV','V','VI','VII','VIII','IX','X' ],

        titulo: '',
        switchEdit: false,
	},

	mutations:{
        view(state, tipo){
            state.status = tipo;
        },

        sumillasSaved(state, linea){
            var i = findByTipo(state.lineas, 'sumillas');
            state.lineas[i].data[0].texto = linea.data[0].texto;
            state.status = 'vista';
        },

        unidadesSaved(state, linea){
            state.status = 'vista';
        },

        estrategiasSaved(state, linea){
            var i = findByTipo(state.lineas, 'estrategias');
            state.lineas[i].data[0].texto = linea.data[0].texto;
            state.status = 'vista';
        },

        evaluacionesSaved(state, linea){
            state.status = 'vista';
        },

        switchEditingContenido(state, linea){
            var i = findByRow(state.lineas, linea.row, linea.id);
            state.lineas[i].editing = !state.lineas[i].editing;
        },

        saveLinea(state, linea){
            var i = findByRow(state.lineas, linea.pre_row, linea.id);
            state.lineas[i] = linea;
            state.lineas[i].pre_row = linea.row;
        },

        sortLineasRow(state){
            state.lineas.sort(function (a, b){
                return (a.row - b.row);
            });
        },

        sortLineasTipo(state, tipo){
            var array = state.lineas;
            var rows = array.filter( (linea) => linea.tipo == tipo );            

            /* SortByRow */
            state.lineas.sort(function (a, b){
                return (a.row - b.row);
            });
        },

        setLineas(state, lineas){
            state.lineas = lineas;
        },

        setAcceso(state, acceso){
            state.acceso = acceso;
        },

        loaded(state){
            state.loading = false;
        },

        setTitulo(state, titulo){
            state.titulo = titulo;
        },
        
        changePre_row(state, row){
            state.pre_row = row;
        },

        switchEdit(state){
            state.switchEdit = !state.switchEdit;
        },

        setNuevo(state, [type, value]){
            state.nuevo[type] = value;
        },

        setSemestre(state, semestre){
            state.semestre = semestre;
        },

        setCod_curso(state, cod_curso){
            state.cod_curso = cod_curso;
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
            return item;
        },
        competencias: (state) => {
            var array = state.lineas;
            var item = array.filter( (linea) => linea.tipo == 'competencias' 
                                                || linea.tipo == 'titulo2');
            return item;
        },
        unidades: (state) => {
            var array = state.lineas;
            var items = array.filter( (linea) => linea.tipo == 'unidades' );
            return items;
        },
        contenidos: (state) => {
            var array = state.lineas;
            var items = array.filter( (linea) => linea.tipo == 'contenidos' 
                                                || linea.tipo == 'examenes'
                                                || linea.tipo == 'unidades');
            return items;
        },
        estrategias: (state) => {
            var array = state.lineas;
            var items = array.filter( (linea) => linea.tipo == 'estrategias' );
            return items;
        },
        evaluaciones: (state) => {
            var array = state.lineas;
            var items = array.filter( (linea) => linea.tipo == 'evaluaciones' );
            return items;
        },
        bibliografias: (state) => {
            var array = state.lineas;
            var items = array.filter( (linea) => linea.tipo == 'bibliografias' );
            return items;
        },
        newItem: (state) => {
            switch (state.status){
                case 'sumillas':
                    var item = {
                        tipo: state.status,
                        semestre: state.semestre,
                        cod_curso: state.cod_curso,
                        data: {texto: ""},
                        orden: 1
                    };
                    break;
                default:
                    var newItem = {};
                    // code block
                    break;
            }
            return item;
        }
    },

    actions: {
        SaveLinea: (context, linea) => {
            var request = {
                'data': linea,
                'new': false
            };
//console.log('store.SaveLinea.request: ', request);
            var URLdomain = window.location.host;
            var protocol = window.location.protocol;
            var url = protocol+'//'+URLdomain+'/api/saveData/';
            axios.post(url, request).then(response=>{
//console.log('response: ',response.data);
                var save = response.data.proceso + 'Saved';
                context.commit('saveLinea', linea);
                context.commit('changePre_row', linea.row);
                return true;
            }).catch(function (error) {
                console.log('error SaveLinea: ', error);
                return false;
            });
        },
        SaveNewLinea: (context, linea) => {
            var request = {
                'data': linea,
                'new': true
            };
            var URLdomain = window.location.host;
            var protocol = window.location.protocol;
            var url = protocol+'//'+URLdomain+'/api/saveData/';
            axios.post(url, request).then(response=>{
                var save = response.data.proceso + 'Saved';
                return true;
//                context.commit('saveLinea', linea);
//                context.commit('changePre_row', linea.row);
            }).catch(function (error) {
                console.log('error SaveLinea: ', error);
                return false;
            });
        },

        EditarContenido: (context, linea) => {
            context.commit('switchEditingContenido', linea);
        },

        GrabarContenido: (context, linea) => {
            var check = context.dispatch("SaveLinea", linea);
            if(check){                
                context.commit('sortLineasRow');
                context.commit('switchEditingContenido', linea);
                return true;
            }else{
                return false;
            }

        },

        Loaded: (context) => {
            context.commit('loaded');
        },

        SetTitulo: (context , subtipo) => {
            var linea = context.state.lineas.filter( (linea) => linea.tipo == 'titulo1' && linea.subtipo == subtipo);
            var titulo = context.state.romanos[linea[0].orden]+'. '+linea[0].data[0].texto;
            context.commit('setTitulo', titulo);
        },

        RenumeraExamen: (context, linea) => {
            /* Busca evaluacion en Contenidos */
            for(var xlinea in context.state.lineas){
                if(context.state.lineas[xlinea].tipo == 'examenes' 
                    && context.state.lineas[xlinea].id == linea.id){
                    var ylinea = context.state.lineas[xlinea];
                }
                if(context.state.lineas[xlinea].tipo == 'titulo1' 
                    && context.state.lineas[xlinea].subtipo == 'contenidos'){
                    var row_titulo = context.state.lineas[xlinea].row;
                }
            }

            ylinea.data[0].texto = linea.data[0].texto;
            ylinea.row = linea.semana * 100 + row_titulo + 99;

            context.commit('saveLinea', ylinea);
            context.commit('sortLineasRow');
        },

        SetNuevo : (context, [type, value]) => {
            context.commit('setNuevo', [type, value]);
        }
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

function findByRow(lineas, row, id) {
        for (var i in lineas) {
            if (lineas[i].row == row && lineas[i].id == id) {
                return i;
            }
        }
        return null;
    }

