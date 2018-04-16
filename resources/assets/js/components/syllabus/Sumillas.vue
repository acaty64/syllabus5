<template>
    <div>
        <h1>{{ titulo }}</h1>
        <table>
            <thead>
                <tr v-for="columna in columnas">
                    <th :width="columna"></th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="linea in items">
                    <div class="row">
                        <span v-for="item in linea.data">
                            <textarea rows="6" wrap="hard" :class="rowclass(item)" :align="item.align" v-model="item.texto">{{item.texto}}</textarea>
                            <button type="submit" class="btn btn-default" @click='grabar(linea)'>Grabar</button>
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
            console.log('Sumillas.vue mounted');
            this.setTitulo('sumillas');
        },
        computed: {
            ...mapState({
                lineas: (state) => state.lineas,
                columnas: (state) => state.columnas,
                titulo: (state) => state.titulo,
            }),

            items(){ return this.$store.getters.sumillas },

        },
        methods: {
            setTitulo(subtipo) {
                this.$store.dispatch('setTitulo', subtipo);
            },
            rowclass(item) {
                return 'col-'+item.col+' '+item.tipo+' col-xs-' + item.cols + ' col-xs-offset-' + item.offset;
            },
            grabar(linea) {
                this.$store.dispatch('saveData', linea);
            },
        } 
    }
</script>