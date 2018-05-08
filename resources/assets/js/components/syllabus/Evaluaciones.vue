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
                        <span class="notEditing col-2 col-xs-4 col-xs-offset-1 evaluaciones" align='center'><b>Evaluación</b></span>
                        <span class="notEditing col-3 col-xs-2 col-xs-offset-1 evaluaciones" align='center'><b>Porcentaje</b></span>
                        <span class="notEditing col-4 col-xs-2 col-xs-offset-1 evaluaciones" align='center'><b>Semana</b></span>
                        <span class="notEditing col-5 col-xs-1 col-xs-offset-1 evaluaciones" align='center'></span>
                    </div>                
                </tr>
                <tr v-for="linea in items">
                    <div class="row">
                        <span v-if="linea.editing">
                            <span v-for="item in linea.data">                   
                                <textarea rows="1" wrap="hard" :class="rowclass(item, linea)" :align="item.align" v-model="item.texto">{{item.texto}}</textarea>
                            </span>
                            <button type="submit" class="btn btn-default col-4 unidades col-xs-push-8" @click='grabar(linea)'>Grabar</button>
                        </span>
                        <span v-else>
                            <span v-for="item in linea.data" class="notEdit">                   
                                <span rows="1" wrap="hard" :class="rowclass(item, linea)" :align="item.align" v-html="viewTexto(item)"></span>
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
            console.log('Evaluaciones.vue mounted');
        },
        computed: {
            ...mapState({
                lineas: (state) => state.lineas,
                columnas: (state) => state.columnas,
                titulo: (state) => state.titulo,
                switchEdit: (state) => state.switchEdit,
            }),

            items(){ 
                var lineas = this.$store.getters.evaluaciones;
                /* Modifica col y cols del texto */ 
                for(var linea in lineas){
                    lineas[linea]['data'][0].col = 2;
                    lineas[linea]['data'][0].cols = 4;
                    lineas[linea]['data'][0].offset = 1;
                    lineas[linea]['data'][0].align = 'left';

                    lineas[linea]['data'][1].col = 3;
                    lineas[linea]['data'][1].cols = 2;
                    lineas[linea]['data'][1].offset = 1;
                    lineas[linea]['data'][1].align = 'center';

                    lineas[linea]['data'][2].col = 4;
                    lineas[linea]['data'][2].cols = 2;
                    lineas[linea]['data'][2].offset = 1;
                    lineas[linea]['data'][2].align = 'center';
                }
                return lineas; 
            },

        },
        methods: {
            rowclass(item, linea) {
                if (linea.editing){
                    return 'editing col-'+item.col+' col-xs-' + item.cols + ' col-xs-offset-' + item.offset;
                }else{
                    return 'notEditing col-'+item.col+' evaluaciones col-xs-' + item.cols + ' col-xs-offset-' + item.offset;                    
                }
            },
            grabar(linea) {
                /* Renumera row */
                var week = linea.data[2].texto;
                var oldWeek = linea.semana;
                if(!isNaN(week)){                
                    var week = parseInt(linea.data[2].texto);
                    var rowUnidades = this.lineas.filter(function (xlinea) {
                        return xlinea.tipo == 'titulo1' && xlinea.subtipo == 'evaluaciones';
                    });
                    var rowTitulo1 = parseInt(rowUnidades[0].row.toString().substring(0,1)) * 10000;
                    var row = rowTitulo1 + (week * 100);
                    linea.row = row ;
                    linea.semana = week;
                    this.$store.dispatch('GrabarContenido', linea);
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
    .evaluaciones {
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


