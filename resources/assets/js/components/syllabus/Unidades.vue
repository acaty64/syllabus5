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
                                <textarea rows="6" wrap="hard" :class="rowclass(item, linea.tipo)" :align="item.align" v-model="item.texto">{{item.texto}}</textarea>
                            </span>
                            <button type="submit" class="btn btn-default col-4 unidades col-xs-push-8" @click='grabar(linea)'>Grabar</button>
                        </span>
                        <span v-else>
                            <span v-for="item in linea.data">                            
                                <span rows="6" wrap="hard":class="rowclass(item, linea.tipo)" :align="item.align" v-html="viewTexto(item)"></span>
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
console.log('Unidades.lineas: ', lineas);
                /* Reconstruir campos 'semana', 'texto', 'logro'  */
                var items = [];
                for(var linea in lineas){
console.log('Unidades.items.linea: ', lineas[linea]);
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
                //return 'col-'+item.col+' '+ tipo+' col-xs-' + item.cols;
            },
            grabar(linea) {
                /* Reconstruir lineas */
console.log("linea: ", linea);
                var xlinea = {
                    editing: false,
                    id: linea.id,
                    logro: linea.data[2].texto,
                    row: linea.row,
                    pre_row: linea.pre_row,
                    semana: linea.data[0].texto,
                    tipo: linea.tipo,
                    data: [
                        {
                            align: "center",
                            col: 1,
                            cols: 8,
                            offset: 1,
                            texto: linea.data[1].texto,
                            logro: linea.data[2].texto,
                        }
                    ]
                };

console.log('linea antes: ', xlinea);
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
console.log('linea despues: ', xlinea);
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
            },            
        } 
    }
</script>

<style>
    .unidades {
        border: 0px solid black;
    }
/*
    .col-2, .col-3,  .col-4,
    {
        margin-left: 0px;
    }
*/
</style>