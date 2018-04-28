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
                return 'col-'+item.col+' '+tipo+' col-xs-' + item.cols + ' col-xs-offset-' + item.offset;
            },
            //
            // Reemplazar chr(13) con <br>
            //
            viewTexto(item){                         
                var newText = item.texto.toString().replace(/\n/g, '<br>');
                return newText;
            },
            viewUnidad(item){                         
                var newText = item.texto + '<br> Logro: ' +item.logro;
                return newText;
            },
        }    
    }
</script>

<style>

    #viewTexto {
        white-space: pre-wrap;
    }

</style>