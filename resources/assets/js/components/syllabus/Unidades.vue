<template>
    <div>
        <h1>UNIDADES</h1>
        <table>
            <thead>

            </thead>
            <tbody>
                <tr v-for="linea in items">
                    <div class="row">
                        <span v-if="linea.editing">
                            <span v-for="item in linea.data">                   
                                <textarea rows="6" wrap="hard" :class="rowclass(item, linea)" :align="item.align" v-model="item.texto">{{item.texto}}</textarea>
                            </span>
                            <button type="submit" class="btn btn-default col-4 unidades col-xs-push-8" @click='grabar(linea)'>Grabar</button>
                        </span>
                        <span v-else>
                            <span v-for="item in linea.data" class="notEdit">                   
                                <span rows="6" wrap="hard":class="rowclass(item, linea)" :align="item.align" v-html="viewTexto(item)"></span>
                            </span>
                            <button type="submit" class="btn btn-default" @click='editar(linea)'>Editar</button>
                        </span>
                    </div>
                </tr>
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
            }),

            items(){ 
                var lineas = this.$store.getters.unidades;
                /* Modifica col y cols del texto */
                for(var linea in lineas){
                    lineas[linea]['data'][1].col = 2;
                    lineas[linea]['data'][1].cols = 4;
                    lineas[linea]['data'][1].offset = 2;
                } 
                return lineas; 
            },

        },
        methods: {
/*
            setTitulo(subtipo) {
                this.$store.dispatch('setTitulo', subtipo);
            },
*/
            rowclass(item, linea) {
                if (linea.editing){
                    return 'editing col-'+item.col+' unid col-xs-' + item.cols + ' col-xs-offset-' + item.offset;
                }else{
                    return 'notEditing col-'+item.col+' unid col-xs-' + item.cols + ' col-xs-offset-' + item.offset;                    
                }
                //return 'col-'+item.col+' '+ tipo+' col-xs-' + item.cols;
            },
            grabar(linea) {
                /* Renumera row */
                var week = linea.semana;
                if(!isNaN(week)){                
                    var week = parseInt(linea.semana);
                    var rowUnidades = this.lineas.filter(function (xlinea) {
                        return xlinea.tipo == 'titulo1' && xlinea.subtipo == 'contenidos';
                    });
                    var rowTitulo1 = parseInt(rowUnidades[0].row.toString().substring(0,1)) * 10000;
                    var row = rowTitulo1 + (week * 100);
                    linea.row = row ;
                    linea.semana = week; 
                    /* Modifica col y cols del texto */
console.log('Unidades.grabar.lineas: ', this.lineas);
                    for(var xlinea in this.lineas){
console.log('Unidades.grabar.xlinea: ', xlinea);
console.log('Unidades.grabar.this.lineas[xlinea]: ', this.lineas[xlinea]);
                        this.lineas[xlinea]['data'][1].col = 1;
                        this.lineas[xlinea]['data'][1].cols = 8;
                        this.lineas[xlinea]['data'][1].offset = 1;
                    }
                    this.$store.dispatch('GrabarContenido', linea);
                }else{
                    alert('La semana debe ser un número entero.');
                };
            },
            viewTexto(item){
                var newText = item.texto.toString().replace(/\n/g, '<br>');
                return newText;
            },
            editar(linea) {
                this.$store.dispatch('EditarContenido', linea);
console.log("this.items", this.items);
            },           
        } 
    };

</script>

<style>
    .unid {
        border: 0px solid black;
    }
    .editing {
        background: yellow;
        margin-left: 0px;
    }
    .notEditing {
        background: white;
        margin-left: 0px;
    }
/*
    .col-2, .col-3,  .col-4,
    {
        margin-left: 0px;
    }
*/
</style>


