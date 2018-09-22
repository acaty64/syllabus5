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
        newItem: '',
        active_line: 0,
	},

	mutations:{
        setDefault(state){
            state.active_line = 0;
            state.switchEdit = false;
            var array = state.lineas;
            var item = array.filter( (linea) => linea.tipo == 'sumillas' );
            if(item.length > 0){
                state.nuevo.sumillas = false;
            }
            var item = array.filter( (linea) => linea.tipo == 'estrategias' );
            if(item.length > 0){
                state.nuevo.estrategias = false;
            }
        },
        active_line(state, id){
            state.active_line = id;
        },
        eliminarLinea(state, xlinea){
            state.lineas = state.lineas.
                filter(linea => linea != xlinea );
        },

        eliminar(state, componente){
            //console.log('antes de eliminar: ', state.lineas);
            state.lineas = state.lineas.
                filter(function(linea) { return linea.tipo != componente }).
                filter(function(linea) { return linea.subtipo != componente });
            //console.log('despues de eliminar: ', state.lineas);
        },
        agregar (state, newLineas){
console.log('antes de agregar: ', state.lineas);
console.log('newLineas: ', newLineas);
            for(var xlinea in newLineas){
                state.lineas.push(newLineas[xlinea]);
            }
console.log('despues de agregar: ', state.lineas);
        },
        setNewItemValue(state, data){
            console.info('setNewItemValue data:', data);
            var field = data[0];
            var value = data[1];
            switch (field){
                case 'button':{
                    state.newItem.button = value;
                }
            }
        },
        nuevo(state, valor){
            var tipo = state.status;
            state.nuevo.tipo = valor;
        },

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
            state.switchEdit = true;
        },

        saveLinea(state, linea){
            var i = findByRow(state.lineas, linea.pre_row, linea.id);
            state.lineas[i] = linea;
            state.lineas[i].pre_row = linea.row;
            state.switchEdit = false;
        },

        sortLineasRow(state){
            state.lineas.sort(function (a, b){
                return (a.row - b.row);
            });
//console.log('sortLineasRow:', state.lineas);
        },

        sortAutor(state){
            var titulo1 = state.lineas.filter( (linea) => linea.tipo == 'titulo1' && linea.subtipo == 'bibliografias');
            var row_titulo = titulo1[0].row;
            var rows = state.lineas.filter( (linea) => linea.tipo == 'bibliografias' );
//console.log('sortAutor rows 0: ', rows);
            rows.sort(function (a, b) {
//console.log('sortAutor a.data[1].texto: ', a.data[1].texto);
//console.log('sortAutor b.data[1].texto: ', b.data[1].texto);
                return (a.data[1].texto > b.data[1].texto);
            });
//console.log('sortAutor rows 1: ', rows);
            var count = 0;
            for (var x in rows) {
//console.log('sortAutor row: ', row);
                count ++ ;
                rows[x].data[0].texto = count;
                rows[x].row =  row_titulo + count * 1000;
            }
//console.log('sortAutor rows 2: ', rows);
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

        setNewItem(state, item){
            state.newItem = item;
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
                        button: 'Editar',
                        id:'new',
                        tipo: state.status,
                        semestre: state.semestre,
                        cod_curso: state.cod_curso,
                        data: [],
                        orden: 1
                    };
                    item.data.push({
                        texto: "",
                        view: true,
                        col: 1,
                        cols: 7,
                        offset: 2,
                        align: 'justify',                        
                    });
                    break;
                case 'estrategias':
                    var item = {
                        button: 'Editar',
                        id:'new',
                        tipo: state.status,
                        semestre: state.semestre,
                        cod_curso: state.cod_curso,
                        data: [],
                        orden: 1
                    };
                    item.data.push({
                        texto: "",
                        view: true,
                        col: 1,
                        cols: 7,
                        offset: 2,
                        align: 'justify',                        
                    });
                    break;
                case 'unidades':
                    var item = {
                        button: 'Editar',
                        id:'new',
                        semestre: state.semestre,
                        cod_curso: state.cod_curso,
                        tipo: state.status,
                        subtipo: state.status,
                        pre_row: 0,
                        semana: 0,
                        editing: false,
                        data: []
                    };
                    // semana
                    item.data.push({
                        view:  true,
                        col:  1,
                        cols:  1,
                        offset:  1,
                        align:  'center',
                        texto: '0',
                    });
                    // texto                
                    item.data.push({
                        view:  true,
                        col:  2,
                        cols:  4,
                        offset:  1,
                        align:  'left',
                        texto: '',
                    });
                    // logro                
                    item.data.push({
                        view:  true,
                        col:  3,
                        cols:  4,
                        offset:  1,
                        align:  'left',
                        texto: '',
                    });
                    break;
                case 'contenidos':
                    var item = {
                        button: 'Editar',
                        id:'new',
                        semestre: state.semestre,
                        cod_curso: state.cod_curso,
                        tipo: state.status,
                        subtipo: state.status,
                        pre_row: 0,
                        semana: 0,
                        editing: false,
                        data: []
                    };
                    // semana
                    item.data.push({
                        view:  true,
                        col:  1,
                        cols:  1,
                        offset:  1,
                        align:  'center',
                        texto: '0',
                    });
                    // conceptual                
                    item.data.push({
                        view:  true,
                        col:  2,
                        cols:  4,
                        offset:  1,
                        align:  'left',
                        texto: '',
                    });
                    // procedimiento                
                    item.data.push({
                        view:  true,
                        col:  4,
                        cols:  2,
                        offset:  1,
                        align:  'left',
                        texto: '',
                    });                
                    // actividad                
                    item.data.push({
                        view:  true,
                        col:  6,
                        cols:  2,
                        offset:  1,
                        align:  'left',
                        texto: '',
                    });
                    break;
                case 'bibliografias':
                    var item = {
                        button: 'Editar',
                        id:'new',
                        semestre: state.semestre,
                        cod_curso: state.cod_curso,
                        tipo: state.status,
                        subtipo: state.status,
                        pre_row: 0,
                        semana: 0,
                        editing: false,
                        data: []
                    };
                    // orden
                    item.data.push({
                        view:  true,
                        col:  1,
                        cols:  1,
                        offset:  1,
                        align:  'center',
                        texto: '0',
                    });
                    // autor                
                    item.data.push({
                        view:  true,
                        col:  2,
                        cols:  2,
                        offset:  2,
                        align:  'left',
                        texto: '',
                    });
                    // titulo                
                    item.data.push({
                        view:  true,
                        col:  3,
                        cols:  2,
                        offset:  1,
                        align:  'left',
                        texto: '',
                    });                
                    // editorial                
                    item.data.push({
                        view:  true,
                        col:  4,
                        cols:  2,
                        offset:  1,
                        align:  'left',
                        texto: '',
                    });
                    // year                
                    item.data.push({
                        view:  true,
                        col:  5,
                        cols:  1,
                        offset:  1,
                        align:  'left',
                        texto: '',
                    });
                    // codigo                
                    item.data.push({
                        view:  true,
                        col:  6,
                        cols:  2,
                        offset:  1,
                        align:  'left',
                        texto: '',
                    });
                    break;
                default:
                    var newItem = {};
                    // code block
                    break;
            }
console.log('setNewItem', item);
            state.newItem = item;
            return item;
        }
    },

    actions: {
        OrdenarPorAutor: (context) => {
            context.commit('sortAutor');
            context.commit('sortLineasTipo', 'bibliografias');
        },
        BorrarContenido: (context, linea) => {
            var request = {
                'data': {
                    'tipo': linea.tipo,
                    'id' : linea.id,
                    'semestre': context.state.semestre,
                    'cod_curso': context.state.cod_curso,
                },
            };
            var URLdomain = window.location.host;
            var protocol = window.location.protocol;
            var url = protocol+'//'+URLdomain+'/api/deleteData/';
            axios.post(url, request).then(response=>{
                context.commit('eliminarLinea', linea);
                if( linea.tipo == 'sumillas' || linea.tipo == 'estrategias' ){
                    //context.commit('switchEdit');
                    context.commit('setNuevo', [linea.tipo, true]);
                    context.commit('active_line', 0);
                };
            }).catch(function (error) {
                console.log('error BorrarContenido: ', error);
            });
        },
        RecallTitulo3: (context) =>{            
            var request = {
                'data': {
                    'tipo': 'titulo3',
                },
                'semestre': context.state.semestre,
                'cod_curso': context.state.cod_curso,
                'new': false
            };
//console.log('RecallTitulo3 request:', request);
            var URLdomain = window.location.host;
            var protocol = window.location.protocol;
            var url = protocol+'//'+URLdomain+'/api/saveData/';
            axios.post(url, request).then(response=>{
                var titulo3 = response.data.data;
//console.log('RecallTitulo3 titulo3:', titulo3);
                context.commit('eliminar', 'titulo3');
                context.commit('agregar', titulo3);
                context.commit('sortLineasRow');
            }).catch(function (error) {
                console.log('error RecallTitulo3: ', error);
            });
        },
        SetDefault: (context) =>{
            context.commit('setDefault');
        },
        SetNewItemValue: (context, data) => {
            context.commit('setNewItemValue', data);
            context.commit('switchEdit');
            context.commit('active_line', 'new');
        },
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
//console.log('SaveLinea response: ',response.data);
                var save = response.data.proceso + 'Saved';
                context.commit('saveLinea', linea);
                context.commit('changePre_row', linea.row);
                if(context.state.status == 'unidades'){
                    context.dispatch('RecallTitulo3');
                }
                context.commit('setDefault');
            }).catch(function (error) {
                console.log('error SaveLinea: ', error);
            });
        },
        SaveNewLinea: (context, linea) => {
            var request = {
                'data': linea,
                'new': true
            };
//console.log('SaveNewLinea request: ', request);
            var URLdomain = window.location.host;
            var protocol = window.location.protocol;
            var url = protocol+'//'+URLdomain+'/api/saveData/';
            axios.post(url, request).then(response=>{
console.log('SaveNewLinea response: ', response.data);
                context.commit('agregar', response.data.data);
                context.commit('setNewItemValue', ['button', 'Editar']);
                context.dispatch('RecallTitulo3');
                context.commit('setDefault');
            }).catch(function (error) {
                console.log('error SaveNewLinea: ', error);
            });
        },

        EditarContenido: (context, linea) => {
            context.commit('switchEditingContenido', linea);
            context.commit('active_line', linea['id']);
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

