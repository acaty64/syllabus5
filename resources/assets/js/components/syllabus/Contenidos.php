<template>
    <div>
        <h1>{{ titulo }}
            <span v-if="newItem.button == 'Editar' && acceso.contenidos">
                <button name="newButton" type="submit" :class="buttonClass(newItem.button, newItem)" @click="editar(newItem)">Nuevo Registro</button>
            </span>
            <span v-if="newItem.button == 'Grabar'">
                <button name="newButton" type="submit" :class="buttonClass(newItem.button, newItem)" @click="grabar(newItem, true)">{{ newItem.button }}</button>
            </span>
        </h1>
        <table>
            <thead>
                <tr v-for="columna in columnas">
                    <th :width="columna"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <div class="row">
                        <span v-if="newItem.button == 'Grabar'">
                            <span v-for="item in newItem.data">
                                <textarea name="newText" rows="6" wrap="hard" :class="rowClass(item, newItem)" :align="item.align" v-model="item.texto">"{{item.texto}}"</textarea>
                            </span>                            
                        </span>
                    </div>
                </tr>
                <span v-if="newItem.button == 'Editar'">
                    <tr v-for="linea in items">
                        <div class="row">
                            <span v-if="linea.editing">
                                <span v-for="item in linea.data">                          
                                    <textarea rows="6" wrap="hard" :class="rowClass(item, linea)" :align="item.align" v-model="item.texto">{{item.texto}}</textarea>
                                </span>
                                <span v-if="active_line == linea.id">
                                    <button type="submit" :class="buttonClass('Save', linea)" @click='grabar(linea, false)'>Grabar</button>
                                </span>
                            </span>
                            <span v-else>
                                <span v-for="item in linea.data">    
                                    <span v-if="item.view">
                                        <span :class="rowClass(item, linea)" :align="item.align" v-html="viewTexto(item)"></span>
                                    </span>                        
                                </span>
                                <span v-if="linea.tipo == 'contenidos'">
                                    <button type="submit" :class="buttonClass('Edit', linea)" @click='editar(linea)'>Editar</button>                            
                                </span>
                            </span>
                        </div>
                    </tr>
                </span>
            </tbody>
        </table>            
    </div>  
</template>
<script>
    import {mapState} from 'vuex';

    export default {
        mounted() {
            console.log('Contenidos.vue mounted');
            this.setTitulo('contenidos');
            this.setDefault();
        },
        computed: mapState({
            ...mapState({
                lineas: (state) => state.lineas,
                columnas: (state) => state.columnas,
                titulo: (state) => state.titulo,
                acceso: (state) => state.acceso,
                nuevo: (state) => state.nuevo,
                active_line: (state) => state.active_line,
            }),
            items(){ return this.$store.getters.contenidos },
            newItem(){ return this.$store.getters.newItem },
        }),
        methods: {
            setDefault(){
                this.$store.commit('setDefault');
            },
            editar(linea) {
                if(linea.id == 'new'){
                    this.$store.dispatch('SetNewItemValue', ['button', 'Grabar']);
                }else{
                    this.$store.dispatch('EditarContenido', linea);
                }
                //this.nuevo.contenidos = false;
            },
            consistencia(linea){
                toastr.closeButton = false;
                toastr.debug = false;
                toastr.showDuration = 100;
                var mess = '';
                var consistencia = 0;

                var check = linea.data[0].texto;
                if(!isNaN(check) && check > 0 && check < 17){ 
                    consistencia = consistencia + 1;
                }else{
                    mess = 'La SEMANA debe ser un número entero mayor que 0 y menor a 17.';
                }
                var check = linea.data[1].texto;
                if(check.trim().length > 0){
                    consistencia = consistencia + 1;
                }else{
                    mess = 'Inserte el texto CONCEPTUAL.';
                }
                var check = linea.data[2].texto;
                if(check.trim().length > 0){
                    consistencia = consistencia + 1;
                }else{
                    mess = 'Inserte el texto PROCEDIMENTAL.';
                }
                var check = linea.data[3].texto;
                if(check.trim().length > 0){
                    consistencia = consistencia + 1;
                }else{
                    mess = 'Inserte el texto ACTIVIDAD.';
                }
                if(consistencia == 4){                
                    return true;
                }else{
                    toastr.error(mess);
                    return false;
                }
            },            
            grabar(linea) {
                toastr.closeButton = false;
                toastr.debug = false;
                toastr.showDuration = 100;
                if(this.consistencia(linea)){                
                    if(linea.id == 'new'){
//console.log('contenidos dispatch linea new: ', linea);
                        this.$store.dispatch('SaveNewLinea', this.newItem).then(function () {
//console.log('Antes de dispatch');
                            //this.$store.commit('setNewItemValue', ['button', 'Editar']);
//console.log('Despues de dispatch');
                            toastr.success('Contenido grabado.');
                        }).catch(function () {
                            toastr.error('El registro no ha sido grabado.');
                        });
                    }else{
//console.log('contenidos dispatch linea old: ', linea);
/*
                        this.$store.dispatch('SaveLinea', linea).then(function() {
                            this.$store.dispatch('EditarContenido', linea).then(function() {
                                toastr.success('Contenido grabado.');
                            }).catch(function() {
                                toastr.error('No se puede editar el contenido grabado.');
                            });
                        }).catch(function () {
                            toastr.error('El registro no ha sido grabado.');
                        });
*/
                        this.$store.dispatch('SaveLinea', linea).then(function() {
                                toastr.success('Contenido grabado.');
                        }).catch(function () {
                            toastr.error('El registro no ha sido grabado.');
                        });

                    }
                };
            },
            viewTexto(item){
                var newText = item.texto.toString().replace(/\n/g, '<br>');
                return newText;
            },
            rowClass(item, linea) {
                if(linea.tipo == 'contenidos'){
                    return 'id'+linea.id + ' col-'+item.col+' '+linea.tipo+' col-xs-' + item.cols + ' col-xs-offset-' + item.offset;
                }else{
                    return 'col-1 unidades col-xs-8 col-xs-offset-1';
                }
            },

            buttonClass(type, linea) {
                if(linea.tipo == 'contenidos'){
                    return 'btn'+ type + linea.id + ' btn btn-default';
                }else{
                    return 'hidden';
                }
            },

            setTitulo(subtipo) {
                this.$store.dispatch('SetTitulo', subtipo);
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

    .examenes {
        border: 0.5px solid black;
    }

    #viewTexto {
        white-space: pre-wrap;
    }

</style>