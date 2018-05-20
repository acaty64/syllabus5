<template>
	<div class="Vista">
        <table>
            <thead>
                <tr v-for="columna in columnas">
                    <th :width="columna"></th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="fila in items">
                    <div class="row">
                        <span v-if="fila['tipo'] == 'titulo1'">
                            <span v-for="item in fila.data">
                                <span :class="rowclass(item, fila.tipo)" :align="item.align" v-html="getTitulo(fila)"></span>
                            </span>    
                        </span>
                        <span v-else-if="fila['tipo'] == 'unidades'">
                            <span v-for="item in fila.data">
                                <span v-if="item['view']==true">
                                    <span :class="rowclass(item, fila.tipo)" :align="item.align" v-html="viewUnidad(item)"></span>
                                </span>
                            </span>
                        </span>
                        <span v-else-if="fila['tipo'] == 'evaluaciones'">
                            <span v-for="item in fila.data">
                                <span :class="rowclass(item, fila.tipo)" :align="item.align" v-html="viewEvaluacion(item)"></span>
                            </span>                            
                        </span>
                        <span v-else-if="fila['tipo'] == 'bibliografias'">
                            <span v-for="item in fila.data">
                                <span :class="rowclass(item, fila.tipo)" :align="item.align" v-html="viewBibliografia(fila, item)"></span>
                            </span>
                        </span>
                        <span v-else>
                            <span v-for="item in fila.data">
                                <span :class="rowclass(item, fila.tipo)" :align="item.align" v-html="viewTexto(item)"></span>
                            </span>
                        </span>
                    </div>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
    import { mapState } from 'vuex';

    export default {
        mounted() {
            console.log('Vista.vue mounted');
        },

        computed: {
            ...mapState({
                items: (state) => state.lineas,
                columnas: (state) => state.columnas,
                romanos: (state) => state.romanos,
            }),
        },

        methods: {
            getTitulo(linea){
                var titulo = this.romanos[linea.orden]+'. '+linea.data[0].texto; 
                return titulo;
            },

            rowclass(item, tipo){
                if(tipo == 'unidades'){
                    return 'col-1 unidades col-xs-8 col-xs-offset-1';
                }else{
                    return 'col-'+item.col+' '+tipo+' col-xs-' + item.cols + ' col-xs-offset-' + item.offset;
                }
            },

            viewTexto(item){                         
                var newText = item.texto.toString().replace(/\n/g, '<br>');
                return newText;
            },

            viewUnidad(item){                         
                var newText = item.texto + '<br>Logro: ' +item.logro;
                return newText;
            },

            viewEvaluacion(item){
                switch(item.type){
                    case 'texto': {
                        return item.texto;
                        break;
                    };
                    case 'porcentaje': {
                        return item.texto + ' %';
                        break;
                    };
                    case 'semana': {
                        var texto = 'semana ' + item.texto;
                        if(item.texto == 0){
                            texto = '';
                        }
                        return texto;
                        break;
                    };
                }
            },

            viewBibliografia(fila, item){

                switch(item.tipo){
                    case '': {
                        return '';
                        break;
                    };
                    case 'orden': {
                        return item.texto;
                        break;
                    };
                    case 'autor': {
                        return 'Autor(es): ' + fila.data[1].texto + '<br>' + 
                            'Título: ' + fila.data[2].texto + '<br>' + 
                            'Editorial: ' + fila.data[3].texto + '<br>' + 
                            'Año: ' + fila.data[4].texto + '<br>' + 
                            'Ubicación: ' + fila.data[5].texto ;
                        break;
                    };
                    default: {
                        return '';
                        break;
                    };
                }
/*
                    case 'titulo': {
                        return 'Título: ' + item.texto; 
                        break;
                    };
                    case 'editorial': {
                        return 'Editorial: '+ item.texto;
                        break;
                    };
                    case 'año': {
                        return 'Año: ' + item.texto;
                        break;
                    };
                    case 'ubicacion': {
                        return 'Ubicación: '+ item.texto;
                        break;
                    };
                }
*/
            },
        },
            
    }
</script>

<style>

    #viewTexto {
        white-space: pre-wrap;
    }

</style>