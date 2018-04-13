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

	},

	mutations:{
        view(state, tipo){
            state.status = tipo
        },
        saveSumilla(state, item){
            var i = findByTipo(state.lineas, 'sumillas');
            state.lineas[i].data[0].texto = item.texto;
            state.status = 'vista';
        },
        switchEditingContenido(state, linea){
            var i = findByRow(state.lineas, linea.row);
            state.lineas[i].editing = !state.lineas[i].editing;
        },
        saveLinea(state, linea){
            var i = findByRow(state.lineas, linea.row);
            state.lineas[i] = linea;
        },

        sortLineasRow(state){
            state.lineas.sort(function (a, b){
                return (a.row - b.row);
            });

        },

        sortLineasWeek(state, tipo){
            var array = state.lineas;
            var rows = array.filter( (linea) => linea.tipo == tipo );            
console.log('sortLineasWeek rows: ', rows);
            
            /* sortByWeek  */
            var numLinea = rows[0].row;
            var items = rows.sort(function (a, b){
                return (a.data[0].texto - b.data[0].texto);
            });
console.log('sortLineasWeek-1 items: ', items);
            
            /* Renumber row */
            items.forEach(function (elemento, indice) {
                items[indice].row = numLinea++;
            });
console.log('sortLineasWeek-2 items: ', items);

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
        contenidos: (state) => {
            var array = state.lineas;
            var items = array.filter( (linea) => linea.tipo == 'contenidos' || linea.tipo == 'examenes');
            return items;
        },
    },

    actions: {
        grabarSumilla: (context, item) => {
            context.commit('saveSumilla',item);
        },
        editarContenido: (context, linea) => {
            context.commit('switchEditingContenido', linea);
        },
        grabarContenido: (context, linea) => {
            context.commit('saveLinea', linea);
            context.commit('sortLineasWeek', 'contenidos');
            context.commit('switchEditingContenido', linea);
        },
        loaded: (context) => {
            context.commit('loaded');
        },

    },

/*
    sortByWeek(lineas){
        lineas.sort(function (a, b){
            return (a.semana - b.semana)
        });
        return lineas;
    },
*/
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

