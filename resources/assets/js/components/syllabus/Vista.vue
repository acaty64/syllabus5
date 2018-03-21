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
                            <div :class="rowclass(item, fila.tipo)" :align="item.align">
                                {{item.texto}}
                            </div>
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
            //
            // Reemplazar chr(13) con <br>
            //
        },
        methods: {
            rowclass(item, tipo){
                return 'col-'+item.col+' '+tipo+' col-xs-' + item.cols + ' col-xs-offset-' + item.offset;
            }
        }    
    }
</script>

<style>
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
    .col-3.generales 
    {
        margin-left: 0px;
    }

    .evaluaciones {
        border: 0.5px solid black;
    }

</style>