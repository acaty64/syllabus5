<template>
	<div>
        <h1>I. CONTENIDOS (editable)</h1>
        <table>
            <thead>
                <tr v-for="columna in columnas">
                    <th :width="columna"></th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="linea in items">
                    <div class="row">
                        <span v-if='linea.editing'>
                            <span v-for="item in linea.data">                            
                                <textarea rows="6" wrap="hard" :class="rowclass(item, linea.tipo)" :align="item.align" v-model="item.texto">{{item.texto}}</textarea>
                            </span>
                            <button type="submit" class="btn btn-default" @click='grabar(linea)'>Grabar</button>
                        </span>
                        <span v-else>
                            <span v-for="item in linea.data">                            
                                <span :class="rowclass(item, linea.tipo)" :align="item.align" v-html="viewTexto(item)"></span>
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
    import {mapState} from 'vuex';

    export default {
    	mounted() {
    		console.log('Contenidos.vue mounted');
    	},
    	computed: mapState({
            ...mapState({
                lineas: (state) => state.lineas,
                columnas: (state) => state.columnas,
            }),
            items(){ return this.$store.getters.contenidos },
        }),
        methods: {
            rowclass(item, tipo) {
                return 'col-'+item.col+' '+tipo+' col-xs-' + item.cols + ' col-xs-offset-' + item.offset;
            },
            editar(linea) {
                this.$store.dispatch('editarContenido', linea);
            },            
            grabar(linea) {
                this.$store.dispatch('grabarContenido', linea);
            },
            viewTexto(item){
                var newText = item.texto.replace(/\n/g, '<br>');
                return newText;
            },
        } 
    }
</script>
<style>
    .col-2.titulo3, .col-3.titulo3,  .col-4.titulo3,  .col-6.titulo3, 
    .col-2.contenidos,  .col-3.contenidos,  .col-4.contenidos,  .col-6.contenidos,
    .col-3.generales 
    {
        margin-left: 0px;
    }    
</style>