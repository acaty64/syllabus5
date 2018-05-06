import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export const store = new Vuex.Store({
	state:{
        lineas: [],

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

        switchEditingContenido(state, linea){
            var i = findByRow(state.lineas, linea.row);
            state.lineas[i].editing = !state.lineas[i].editing;
        },

        saveLinea(state, linea){
            var i = findByRow(state.lineas, linea.pre_row);
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
            var item = array.filter( (linea) => linea.tipo == 'estrategias' );
            return item;
        },
    },

    actions: {
        SaveLinea: (context, linea) => {
            var request = {
                'data': linea,
            };
            var URLdomain = window.location.host;
            var protocol = window.location.protocol;
            var url = protocol+'//'+URLdomain+'/api/saveData/';
            axios.post(url, request).then(response=>{
//console.log('response: ',response.data);
                var save = response.data.proceso + 'Saved';
                context.commit('saveLinea', linea);
                context.commit('changePre_row', linea.row);
            }).catch(function (error) {
                console.log('error SaveLinea: ', error);
            });
        },

        EditarContenido: (context, linea) => {
            context.commit('switchEditingContenido', linea);
        },

        GrabarContenido: (context, linea) => {
console.log('GrabarContenido.linea 1: ', linea);
            //context.commit('saveLinea', linea);
            context.dispatch("SaveLinea", linea);
            //context.commit('sortLineasTipo', 'contenidos');
            context.commit('sortLineasRow');
            context.commit('switchEditingContenido', linea);
        },

        Loaded: (context) => {
            context.commit('loaded');
        },

        SetTitulo: (context , subtipo) => {
            var linea = context.state.lineas.filter( (linea) => linea.tipo == 'titulo1' && linea.subtipo == subtipo);
            var titulo = context.state.romanos[linea[0].orden]+'. '+linea[0].data[0].texto;
            context.commit('setTitulo', titulo);
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

function findByRow(lineas, row) {
        for (var i in lineas) {
            if (lineas[i].row == row) {
                return i;
            }
        }
        return null;
    }

