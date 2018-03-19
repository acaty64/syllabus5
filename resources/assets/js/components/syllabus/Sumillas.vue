<template>
    <div>
        <h1>I. SUMILLA (editable)</h1>
        <button type="submit" class="btn btn-default" @click='grabar'>Grabar</button>
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
                            <textarea rows="6" wrap="hard" :class="rowclass(item)" :align="item.align" :value="item.texto">{{item.texto}}</textarea>
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
            console.log('Sumillas.vue mounted');
        },
        computed: {
            ...mapState({
                lineas: (state) => state.lineas,
                columnas: (state) => state.columnas,
            }),
            items(){ return this.$store.getters.sumillas },
        },
        methods: {
            rowclass(item) {
                return 'col-'+item.col+' '+item.tipo+' col-xs-' + item.cols + ' col-xs-offset-' + item.offset;
            },
            grabar(item) {
                console.log('item: ', item);
            }
        } 
    }
</script>