<template>
    <div>
        <h1>UNIDADES</h1>
        <table>
            <thead>
                <tr>                    
                    <div class="row">                
                        <span class="notEditing col-1 unid col-xs-1 col-xs-offset-1" align='center'><b>Semana</b></span>
                        <span class="notEditing col-2 unid col-xs-4 col-xs-offset-2" align='center'><b>Unidad</b></span>
                        <span class="notEditing col-3 unid col-xs-4 col-xs-offset-3" align='center'><b>Logro</b></span>
                    </div>                
                </tr>                
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
                            <div v-if="!switchEdit">
                                <button type="submit" class="btn btn-default" @click='editar(linea)'>Editar</button>
                            </div>
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
        },
        computed: {
            ...mapState({
                lineas: (state) => state.lineas,
                columnas: (state) => state.columnas,
                switchEdit: (state) => state.switchEdit,
            }),

            items(){ 
                var lineas = this.$store.getters.unidades;
                /* Modifica col y cols del texto */
                for(var linea in lineas){
                    lineas[linea]['data'][1].col = 2;
                    lineas[linea]['data'][1].cols = 4;
                    lineas[linea]['data'][1].offset = 2;
                    lineas[linea]['data'][1].align = 'left';

                    lineas[linea]['data'][2].align = 'justify';
                } 
                return lineas; 
            },

        },
        methods: {
            rowclass(item, linea) {
                if (linea.editing){
                    return 'editing col-'+item.col+' unid col-xs-' + item.cols + ' col-xs-offset-' + item.offset;
                }else{
                    return 'notEditing col-'+item.col+' unid col-xs-' + item.cols + ' col-xs-offset-' + item.offset;                    
                }
            },
            grabar(linea) {
                /* Renumera row */
                var week = linea.data[0].texto;
                var oldWeek = linea.semana;
                if(!isNaN(week)){                
                    var week = parseInt(linea.data[0].texto);
                    var rowUnidades = this.lineas.filter(function (xlinea) {
                        return xlinea.tipo == 'titulo1' && xlinea.subtipo == 'contenidos';
                    });
                    var rowTitulo1 = parseInt(rowUnidades[0].row.toString().substring(0,1)) * 10000;
                    var row = rowTitulo1 + (week * 100);
                    linea.row = row ;
                    linea.semana = week;
                    this.$store.dispatch('GrabarContenido', linea);
                    /* Renumerar titulo3 */
                    var oldRow = linea.pre_row + 1;
                    var newRow = linea.row + 1;
                    for (var i in this.lineas) {
                        if (this.lineas[i].row == oldRow) {
                            var ylinea = this.lineas[i];
                        }
                    }
                    ylinea.semana = week;
                    ylinea.row = newRow;
                    this.$store.dispatch('GrabarContenido', ylinea);
                    this.$store.commit('switchEdit');
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
                this.$store.commit('switchEdit');
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
</style>


