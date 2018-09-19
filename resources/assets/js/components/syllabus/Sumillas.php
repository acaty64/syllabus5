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
                    <span v-if="nuevo.sumillas && acceso.sumillas">
                        <span v-for="item in newItem.data">
                            <textarea name="newText" rows="6" wrap="hard" class="col-1 sumillas col-xs-6 col-xs-offset-1" align="justify" v-model="item.texto">{{item.texto}}</textarea>
                            <button name="newButton" type="submit" class="btnSave btn btn-default" @click='grabar(newItem, nuevo)'>Grabar</button>
                        </span>
                    </span>
                </tr>
                <tr v-for="linea in items">
                    <div class="row">
                        <span v-for="item in linea.data">
                            <span v-if="acceso.sumillas">
                                <textarea :name="rowName()" rows="6" wrap="hard" :class="rowclass(item)" :align="item.align" v-model="item.texto">{{item.texto}}</textarea>
                                <button type="submit" class="btnSave btn btn-default"" @click='grabar(linea, nuevo)'>Grabar</button>
                            </span>
                            <span v-else>
                                <textarea rows="6" wrap="hard" :class="rowclass(item)" :align="item.align" v-html="viewTexto(item)"></textarea>
                            </span>
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
            console.log('Sumillas.vue mounted');
            this.setTitulo('sumillas');
            this.setNuevo();
        },
        computed: {
            ...mapState({
                lineas: (state) => state.lineas,
                columnas: (state) => state.columnas,
                titulo: (state) => state.titulo,
                acceso: (state) => state.acceso,
                nuevo: (state) => state.nuevo,
            }),

            items(){ return this.$store.getters.sumillas },

            newItem(){ return this.$store.getters.newItem },
        },
        methods: {
            consistencia(linea){
                toastr.closeButton = false;
                toastr.debug = false;
                toastr.showDuration = 50;                
                var consistencia = 0;
                var xitem = linea['data'][0];
                if(xitem.texto.trim().length > 0){
                    consistencia = consistencia + 1;
                }
                if(consistencia == 1){                
                    return true;
                }else{
                    toastr.error('Inserte el texto.');
                    return false;
                }
            },
            grabar(linea, nuevo) {
                toastr.closeButton = false;
                toastr.debug = false;
                toastr.showDuration = 50;
                if(this.consistencia(linea)){                
                    if(nuevo.sumillas){
                        this.$store.dispatch('SaveNewLinea', this.newItem).then(function () {
                            toastr.success('Sumilla grabada.');
                        }).catch(function () {
                            toastr.error('El registro no ha sido grabado.');
                        });
                    }else{
                        var check = this.$store.dispatch('SaveLinea', linea).then(function () {
                            toastr.success('Sumilla grabada.');
                        }).catch(function () {
                            toastr.error('El registro no ha sido grabado.');
                        });
                    }
                }
            },
            setTitulo(subtipo) {
                this.$store.dispatch('SetTitulo', subtipo);
            },
            rowclass(item) {
                return 'col-'+item.col+' sumillas col-xs-' + item.cols + ' col-xs-offset-' + item.offset + ' componente';
            },
            viewTexto(item){
                var newText = item.texto.toString().replace(/\n/g, '<br>');
                return newText;
            },
            setNuevo(){
                if(this.items.length == 0){
                    this.$store.dispatch('SetNuevo',['sumillas', true]);
                }else{                    
                    this.$store.dispatch('SetNuevo',['sumillas', false]);
                }
            },
            rowName(){
                if(this.acceso.sumillas == true){
                    if(this.nuevo.sumillas){
                        return "new";
                    }else{
                        return "old";
                    }
                }else{
                    return "notAcceso";
                }
            },
        } 
    }
</script>