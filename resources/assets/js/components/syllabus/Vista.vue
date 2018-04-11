<template>
	<div>
        <table>
            <thead>
                <tr v-for="columna in columnas">
                    <th :width="columna"></th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="fila in items">
                    <div class="row">
                        <span v-for="item in fila.data">                            
                            <span :class="rowclass(item, fila.tipo)" :align="item.align" v-html="viewTexto(item)"></span>
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
            }),

        },
        methods: {
            rowclass(item, tipo){
                return 'col-'+item.col+' '+tipo+' col-xs-' + item.cols + ' col-xs-offset-' + item.offset;
            },
            //
            // Reemplazar chr(13) con <br>
            //
            viewTexto(item){
//console.log('viewTexto typeof(item.texto): ', typeof item.texto );                          
                var newText = item.texto.toString().replace(/\n/g, '<br>');
                return newText;
//return item.texto;
            },
        }    
    }
</script>

<style>

    #viewTexto {
        white-space: pre-wrap;
    }

    .titulo0 {
        font-size: 25px;
        font-weight: bold;
    }
    .titulo1 {
        font-size: 15px;
        font-weight: bold;
    }
    .unidades {
        border: 1px solid black;
    }

    .col-2.titulo3, .col-3.titulo3,  .col-4.titulo3,  .col-6.titulo3, 
    .col-2.contenidos,  .col-3.contenidos,  .col-4.contenidos,  .col-6.contenidos,
    .col-3.generales,  .col-2.bibliografias
    {
        margin-left: 0px;
    }

    .examenes {
        border: 0.5px solid black;
    }

</style>