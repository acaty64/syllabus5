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
                var check = this.$store.dispatch('SaveLinea', linea);
                if(check){    
                    toastr.closeButton = false;
                    toastr.debug = false;
                    toastr.showDuration = 300;
                    toastr.success('Estrategias grabadas.');
                }else{                                            
                    toastr.closeButton = false;
                    toastr.debug = false;
                    toastr.showDuration = 300;
                    toastr.danger('El registro no ha sido grabado.');
                }
            },
        }
    }
</script>