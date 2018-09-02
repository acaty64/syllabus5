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
                            <button :class="buttonclass('Save', linea)" type="submit"@click='grabar(linea)'>Grabar</button>
                        </span>
                        <span v-else>
                            <span v-for="item in linea.data" class="notEdit">                   
                                <span rows="6" wrap="hard":class="rowclass(item, linea)" :align="item.align" v-html="viewTexto(item)"></span>
                            </span>
                            <div v-if="!switchEdit">
                                <button :class="buttonclass('Edit', linea)" type="submit" @click='editar(linea)'>Editar</button>
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
                    return 'id' + linea.id + ' editing col-'+item.col+' unid col-xs-' + item.cols + ' col-xs-offset-' + item.offset;
                }else{
                    return 'notEditing col-'+item.col+' unid col-xs-' + item.cols + ' col-xs-offset-' + item.offset;                    
                }
            },

            buttonclass(type, linea) {
                return 'btn'+ type + linea.id + ' btn btn-default col-4 unidades col-xs-push-8';
            },

            grabar(linea) {
                toastr.closeButton = false;
                toastr.debug = false;
                toastr.showDuration = 300;
                var mess = '';
                var consistencia = 0;
                var check = parseInt(linea.data[0].texto);
                if(!isNaN(check) && check > 0 && check < 17){ 
                    consistencia = consistencia + 1;
                }else{
                    mess = 'La SEMANA debe ser un número entero mayor que 0 y menor a 17.';
                }

                var check = linea.data[1].texto;
                if(check.trim().length > 0){
                    consistencia = consistencia + 1;
                }else{
                    mess = 'Inserte el texto de la UNIDAD.';
                }

                var check = linea.data[2].texto;
                if(check.trim().length > 0){
                    consistencia = consistencia + 1;
                }else{
                    mess = 'Inserte el texto del LOGRO.';
                }


                if(consistencia == 3){                
                    /* Renumera row */

                    var week = parseInt(linea.data[0].texto);
                    var rowUnidades = this.lineas.filter(function (xlinea) {
                        return xlinea.tipo == 'titulo1' && xlinea.subtipo == 'contenidos';
                    });
                    var rowTitulo1 = parseInt(rowUnidades[0].row.toString().substring(0,1)) * 10000;
                    var row = rowTitulo1 + (week * 100);
                    linea.row = row ;
                    linea.semana = week;
                    var check = this.$store.dispatch('GrabarContenido', linea);
                    if(check){                    
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
/*                        
                        toastr.closeButton = false;
                        toastr.debug = false;
                        toastr.showDuration = 300;
*/
                        toastr.success('Unidad grabada.');
                    }else{
/*
                        toastr.closeButton = false;
                        toastr.debug = false;
                        toastr.showDuration = 300;
*/
                        toastr.error('El registro no ha sido grabado.');
                    }
                }else{
/*
                    toastr.closeButton = false;
                    toastr.debug = false;
                    toastr.showDuration = 300;
*/
                    toastr.error(mess);
                }

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


