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
                <tr v-for="linea in items">
                    <div class="row">
                        <span v-for="item in linea.data">
                            <textarea rows="6" wrap="hard" :class="rowclass(item, linea.tipo)" :align="item.align" v-model="item.texto">{{item.texto}}</textarea>
                            <button type="submit" class="btnSave btn-default" @click='grabar(linea)'>Grabar</button>
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
    		console.log('Estrategias.vue mounted');
            this.setTitulo('estrategias');
    	},
        computed: {
            ...mapState({
                lineas: (state) => state.lineas,
                columnas: (state) => state.columnas,
                titulo: (state) => state.titulo,
            }),

            items(){ return this.$store.getters.estrategias },

        },
        methods: {
            setTitulo(subtipo) {
                this.$store.dispatch('SetTitulo', subtipo);
            },
            rowclass(item, tipo) {
                return 'col-'+item.col+' '+tipo+' col-xs-' + item.cols + ' col-xs-offset-' + item.offset;
            },
            grabar(linea) {
                toastr.closeButton = false;
                toastr.debug = false;
                toastr.showDuration = 50;
                var mess = '';
                var consistencia = 0;
                var check = linea.data[0].texto;
                if(check.trim().length > 0){
                    consistencia = consistencia + 1;
                }else{
                    mess = 'Inserte el texto.';
                }
                if(consistencia == 1){ 
                    var check = this.$store.dispatch('SaveLinea', linea);
                    if(check){    
                        toastr.success('Estrategias grabadas.');
                    }else{                                            
                        toastr.error('El registro no ha sido grabado.');
                    }
                }else{
                    toastr.error(mess);
                }
            },
        }
    }
</script>