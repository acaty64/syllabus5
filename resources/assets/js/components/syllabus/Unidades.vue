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
                /* Reconstruir campos 'semana', 'texto', 'logro'  */
                var items = [];
                for(var linea in lineas){
                    var datos = { 
                        editing: lineas[linea].editing,
                        id: lineas[linea].id,
                        row: lineas[linea].row,
                        pre_row: lineas[linea].pre_row,
                        tipo: lineas[linea].tipo,
                        data: [
                            {
                                align: "left",
                                col: 1,
                                cols: 1,
                                offset: 1,
                                texto: lineas[linea].semana,
                            },
                            {
                                align: "left",
                                col: 2,
                                cols: 4,
                                offset: 2,
                                texto: lineas[linea].data[0].texto,
                            },
                            {
                                align: "left",
                                col: 3,
                                cols: 4,
                                offset: 3,
                                texto: lineas[linea].data[0].logro,
                            },
                        ],
                    };
                    items.push(datos);
                };
console.log("items: ", items);
                return items; 
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
                /* Reconstruir lineas */
                var xlinea = {
                    data: [
                        {
                            align: "center",
                            col: 1,
                            cols: 8,
                            offset: 1,
                            texto: linea.data[1].texto,
                            logro: linea.data[2].texto,
                        }
                    ],
                    editing: linea.editing,
                    id: linea.id,
                    logro: linea.data[2].texto,
                    pre_row: linea.pre_row,
                    row: linea.row,
                    semana: linea.data[0].texto,
                    tipo: linea.tipo,
                    
                };
                /* Renumera row */
                var week = xlinea.semana;
                if(!isNaN(week)){                
                    var week = parseInt(xlinea.semana);
                    var rowUnidades = this.lineas.filter(function (linea) {
                        return linea.tipo == 'titulo1' && linea.subtipo == 'contenidos';
                    });
                    var rowTitulo1 = parseInt(rowUnidades[0].row.toString().substring(0,1)) * 10000;
                    var row = rowTitulo1 + (week * 100);
                    xlinea.row = row ;
                    xlinea.semana = week; 
                    this.$store.dispatch('GrabarContenido', xlinea);
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


