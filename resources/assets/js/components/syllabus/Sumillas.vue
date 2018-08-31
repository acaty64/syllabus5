<!--SI (acceso.sumillas == true) 
        =>  SI (linea.data == empty) 
            =>  NEW --- v-model (blank) ---
                button SAVE
            NO (linea.data == empty)
            => EDIT --- v-model (old) ---
                button SAVE
    NO (acceso.sumillas == true)
        => VIEW --- v-html ---
            NO button
-->


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
                        <textarea name="newText" rows="6" wrap="hard" class="'col-1 sumillas col-xs-6 col-xs-offset-1" align="justify" v-model="newItem.texto">{{newItem.texto}}</textarea>
                            <button name="newButton" type="submit" class="btnSave btn btn-default"" @click='SaveNewItem()'>Grabar</button>
                    </span>
                </tr>
                <tr v-for="linea in items">
                    <div class="row">
                        <span v-for="item in linea.data">
                            <span v-if="acceso.sumillas">
                                <textarea :name="rowName()" rows="6" wrap="hard" :class="rowclass(item)" :align="item.align" v-model="item.texto">{{item.texto}}</textarea>
                                <button type="submit" class="btnSave btn btn-default"" @click='grabar(linea)'>Grabar</button>
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
            setTitulo(subtipo) {
                this.$store.dispatch('SetTitulo', subtipo);
            },
            rowclass(item) {
                return 'col-'+item.col+' sumillas col-xs-' + item.cols + ' col-xs-offset-' + item.offset;
            },
            grabar(linea) {
                var check = this.$store.dispatch('SaveLinea', linea);
                if(check){    
                    toastr.closeButton = false;
                    toastr.debug = false;
                    toastr.showDuration = 300;
                    toastr.success('Sumilla grabada.');
                }else{                                            
                    toastr.closeButton = false;
                    toastr.debug = false;
                    toastr.showDuration = 300;
                    toastr.danger('El registro no ha sido grabado.');
                }
            },
            SaveNewItem(){
                this.$store.dispatch('SaveNewLinea', this.newItem);
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