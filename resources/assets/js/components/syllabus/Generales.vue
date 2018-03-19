<template>
    <div>
        <h1>I. DATOS GENERALES (no editable)</h1>
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
                            <div :class="rowclass(item)" :align="item.align">
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
    import {mapState} from 'vuex';

    export default {
    	mounted() {
    		console.log('Generales.vue mounted');
    	},
        computed: {
            ...mapState({
                lineas: (state) => state.lineas,
                columnas: (state) => state.columnas,
            }),
            items(){ return this.$store.getters.generales },
        },
        methods: {
            rowclass(item) {
                return 'col-'+item.col+' '+item.tipo+' col-xs-' + item.cols + ' col-xs-offset-' + item.offset;
            },
        } 
    }
</script>