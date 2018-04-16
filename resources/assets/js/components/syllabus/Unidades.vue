<template>
    <div>
        <h1>UNIDADES</h1>
        <table>
            <thead>
                <tr>
                    <th v-for="columna in columnas" :width="columna"></th>
                </tr>
                <tr>
                    <th class="col-1 col-xs-1">Semana</th>
                    <th class="col-2 col-xs-6">Texto</th>
                    <th class="col-7 col-xs-2">Logro</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="linea in items">
                    <div class="row">
                        <span v-if="linea.editing">
                            <span v-for="item in linea.data">                            
                                <textarea :class="rowclass(item, linea.tipo)" :align="item.align" v-model="item.texto">{{item.texto}}</textarea>
                            </span>
                            <button type="submit" class="btn btn-default" @click='grabar(linea)'>Grabar</button>
                        </span>
                        <span v-else>
                            <span v-for="item in linea.data">                            
                                <span :class="rowclass(item, linea.tipo)" :align="item.align" v-html="viewTexto(item)"></span>
                            </span>
                            <button type="submit" class="btn btn-default" @click='editar(linea)'>Editar</button>
                        </span>
                    </div>
                </tr>
                <div class="row">                            
                </div>
            </tbody>
        </table>        
    </div>
</template>
<script>
    import { mapState, mapGetters } from 'vuex';

    export default {
        mounted() {
            console.log('Unidades.vue mounted');
//            this.setTitulo('unidades');
        },
        computed: {
            ...mapState({
                lineas: (state) => state.lineas,
                columnas: (state) => state.columnas,
//                titulo: (state) => state.titulo,
            }),

            items(){ 
                var items = this.$store.getters.unidades; 
                /* Reconstruir campos 'semana', 'texto', 'logro'  */
console.log('items: ', items);
                return items; 
            },

        },
        methods: {
/*
            setTitulo(subtipo) {
                this.$store.dispatch('setTitulo', subtipo);
            },
*/
            rowclass(item, tipo) {
                return 'col-'+item.col+' '+tipo+' col-xs-' + item.cols + ' col-xs-offset-' + item.offset;
            },
            grabar(item) {
                /* Reconstruir lineas */
                this.$store.dispatch('grabarSumilla', item);
            },
            viewTexto(item){
                var newText = item.texto.toString().replace(/\n/g, '<br>');
                return newText;
            },
            editar(linea) {
                this.$store.dispatch('editarContenido', linea);
            },            
        } 
    }
</script>