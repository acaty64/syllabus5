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
                <tr>                    
                    <div class="row">                
                        <span class="notEditing col-1 col-xs-1 col-xs-offset-1 bibliografias" align='center'><b>Orden</b></span>
                        <span class="notEditing col-2 col-xs-2 col-xs-offset-1 bibliografias" align='center'><b>Autor(es)</b></span>
                        <span class="notEditing col-3 col-xs-3 col-xs-offset-1 bibliografias" align='center'><b>Título</b></span>
                        <span class="notEditing col-4 col-xs-2 col-xs-offset-1 bibliografias" align='center'><b>Editorial</b></span>
                        <span class="notEditing col-5 col-xs-1 col-xs-offset-1 bibliografias" align='center'><b>Año</b></span>
                        <span class="notEditing col-6 col-xs-2 col-xs-offset-1 bibliografias" align='center'><b>Ubicación</b></span>
                        <span class="notEditing col-7 col-xs-1 col-xs-offset-1 bibliografias" align='center'></span>
                    </div>                
                </tr>
                <tr v-for="linea in items">
                    <div class="row">
                        <span v-if="linea.editing">
                            <span v-for="item in linea.data">                   
                                <textarea rows="3" wrap="hard" :class="rowclass(item, linea)" :align="item.align" v-model="item.texto">{{item.texto}}</textarea>
                            </span>
                            <button type="submit" :class="buttonclass('Save', linea)" @click='grabar(linea)'>Grabar</button>
                        </span>
                        <span v-else>
                            <span v-for="item in linea.data" class="notEdit">                   
                                <span rows="3" wrap="hard" :class="rowclass(item, linea)" :align="item.align" v-html="viewTexto(item)"></span>
                            </span>
                            <div v-if="!switchEdit">
                                <button type="submit" :class="buttonclass('Edit', linea)" @click='editar(linea)'>Editar</button>
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
            console.log('Bibliografias.vue mounted');
            this.setTitulo('bibliografias');
        },
        computed: {
            ...mapState({
                lineas: (state) => state.lineas,
                columnas: (state) => state.columnas,
                titulo: (state) => state.titulo,
                switchEdit: (state) => state.switchEdit,
            }),

            items(){ 
                var lineas = this.$store.getters.bibliografias;
                /* Modifica col y cols del texto */ 
                for(var linea in lineas){
                    lineas[linea]['data'][0].col = 1;
                    lineas[linea]['data'][0].cols = 1;
                    lineas[linea]['data'][0].offset = 1;
                    lineas[linea]['data'][0].align = 'center';

                    lineas[linea]['data'][1].col = 2;
                    lineas[linea]['data'][1].cols = 2;
                    lineas[linea]['data'][1].offset = 1;
                    lineas[linea]['data'][1].align = 'left';

                    lineas[linea]['data'][2].col = 3;
                    lineas[linea]['data'][2].cols = 3;
                    lineas[linea]['data'][2].offset = 1;
                    lineas[linea]['data'][2].align = 'left';

                    lineas[linea]['data'][3].col = 4;
                    lineas[linea]['data'][3].cols = 2;
                    lineas[linea]['data'][3].offset = 1;
                    lineas[linea]['data'][3].align = 'left';

                    lineas[linea]['data'][4].col = 5;
                    lineas[linea]['data'][4].cols = 1;
                    lineas[linea]['data'][4].offset = 1;
                    lineas[linea]['data'][4].align = 'center';

                    lineas[linea]['data'][5].col = 6;
                    lineas[linea]['data'][5].cols = 2;
                    lineas[linea]['data'][5].offset = 1;
                    lineas[linea]['data'][5].align = 'left';
                }
                return lineas; 
            },

        },
        methods: {
            grabar(linea) {
                toastr.closeButton = false;
                toastr.debug = false;
                toastr.showDuration = 300;

                var mess = '';
                var consistencia = 0;
                var check = linea.data[1].texto;
                if(check.trim().length > 0){
                    consistencia = consistencia + 1;
                }else{
                    mess = 'Inserte el texto AUTOR(ES).';
                }
                var check = linea.data[2].texto;
                if(check.trim().length > 0){
                    consistencia = consistencia + 1;
                }else{
                    mess = 'Inserte el texto TÍTULO.';
                }
                var check = linea.data[3].texto;
                if(check.trim().length > 0){
                    consistencia = consistencia + 1;
                }else{
                    mess = 'Inserte el texto EDITORIAL.';
                }
                var check = linea.data[4].texto;
                if(!isNaN(check) && check > 1900){
                    consistencia = consistencia + 1;
                }else{
                    mess = 'El AÑO debe ser un número entero mayor a 1900.';
                }
                var check = linea.data[5].texto;
                if(check.trim().length > 0){
                    consistencia = consistencia + 1;
                }else{
                    mess = 'Inserte el texto UBICACIÓN.';
                }

                if(consistencia == 5){   
                    /* Renumera row */
                
                        var week = parseInt(linea.data[0].texto);
                        var rowUnidades = this.lineas.filter(function (xlinea) {
                            return xlinea.tipo == 'titulo1' && xlinea.subtipo == 'bibliografias';
                        });
                        var rowTitulo1 = parseInt(rowUnidades[0].row.toString().substring(0,1)) * 10000;
                        var row = rowTitulo1 + (week * 100);
                        linea.row = row ;
                        linea.semana = week;
                        var check = this.$store.dispatch('GrabarContenido', linea);
                        if(check){
                            this.$store.commit('switchEdit');
                            toastr.success('Bibliografía grabada.');
                        }else{
                            toastr.error('El registro no ha sido grabado.');
                        }
                }else{
                    toastr.error(mess);
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
            rowclass(item, linea) {
                if (linea.editing){
                    return 'id'+linea.id+' editing col-'+item.col+' bibliografias col-xs-' + item.cols + ' col-xs-offset-' + item.offset;
                }else{
                    return 'notEditing col-'+item.col+' bibliografias col-xs-' + item.cols + ' col-xs-offset-' + item.offset;                    
                }
            },
            buttonclass(type, linea) {
                return 'btn'+ type + linea.id + ' btn btn-default';
            },            
            setTitulo(subtipo) {
                this.$store.dispatch('SetTitulo', subtipo);
            },         
        } 
    };
</script>

<style>

    .editing {
        background: yellow;
        margin-left: 0px;
    }

    .notEditing {
        background: white;
        margin-left: 0px;
    }    
</style>