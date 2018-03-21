<template>
    <div>
        <h1>I. SUMILLA (editable)</h1>
        <button type="submit" class="btn btn-default" @click='grabar(item)'>Grabar</button>
        <table>
            <thead>
                <tr v-for="columna in columnas">
                    <th :width="columna"></th>
                </tr>
            </thead>
            <tbody>
                <div class="row">                            
                    <textarea rows="6" wrap="hard" :class="rowclass(item)" :align="item.align" v-model="item.texto">{{item.texto}}</textarea>
                </div>
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
            item(){ return this.$store.getters.sumillas },
        },
        methods: {
            rowclass(item) {
                return 'col-'+item.col+' '+item.tipo+' col-xs-' + item.cols + ' col-xs-offset-' + item.offset;
            },
            grabar(item) {
                this.$store.dispatch('grabarSumilla', item);
            }
        } 
    }
</script>