<template>
    <div>
        <h1>UNIDADES
            <span v-if="!switchEdit && active_line == 0">
                <!-- boton Nuevo Registro -->
                <button name="newButton" type="submit" :class="buttonClass(newItem.button, newItem)" @click="editar(newItem)">Nuevo Registro</button>
            </span>
            <span v-if="switchEdit && active_line == 'new'">
                <!-- boton Grabar Nuevo Registro -->
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
                        <span v-if="switchEdit && active_line == 'new'">
                            <span v-for="item in newItem.data">
                                <textarea name="newText" rows="6" wrap="hard" :class="rowClass(item, newItem)" :align="align(item)" v-model="item.texto">"{{item.texto}}"</textarea>
                            </span>                            
                        </span>
                    </div>
                </tr>
                <tr v-for="linea in items">
                    <div class="row">
                        <span v-for="item in linea.data">                  
                            <span v-if="!switchEdit && active_line != linea.id && active_line != 'new'">
                                <!-- view -->
                                <span :class="rowClass(item, linea)" :align="align(item)" v-html="viewTexto(item)"></span>
                            </span>
                            <span v-if="switchEdit && active_line == linea.id && linea.tipo == status">
                                <!-- edit -->
                                <textarea rows="6" wrap="hard" :class="rowClass(item, linea)" :align="align(item)" v-model="item.texto">{{item.texto}}</textarea>
                            </span>
                        </span>
                        <span v-if="!switchEdit && active_line == 0">
                            <!-- boton editar -->
                            <button type="submit" :class="buttonClass('Edit', linea)" @click='editar(linea)'>Editar</button>
                        </span>              
                        <span v-if="switchEdit && active_line == linea.id && linea.tipo == status">
                            <!-- boton grabar registro editado -->
                            <button type="submit" :class="buttonClass('Save', linea)" @click='grabar(linea, false)'>Grabar</button>
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
            console.log('Unidades.vue mounted');
            //this.setTitulo('unidades');
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
                switchEdit: (state) => state.switchEdit,
                status: (state) => state.status,
            }),
            items(){ return this.$store.getters.unidades },
            newItem(){ return this.$store.getters.newItem },
        }),
        methods: {
            align(item){
                switch (item.col){
                    case 1:
                        var align = 'center';
                        break;
                    case 2:
                        var align = 'justify';
                        break;
                    case 3:
                        var align = 'justify';
                        break;
                    case 4:
                        var align = 'center';
                        break;
                }
                return align;
            },
            setDefault(){
                this.$store.commit('setDefault');
            },
            editar(linea) {
                if(linea.id == 'new'){
                    this.$store.dispatch('SetNewItemValue', ['button', 'Grabar']);
                }else{
                    this.$store.dispatch('EditarContenido', linea);
                }
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
                    mess = 'Inserte el texto UNIDAD.';
                }
                var check = linea.data[2].texto;
                if(check.trim().length > 0){
                    consistencia = consistencia + 1;
                }else{
                    mess = 'Inserte el texto LOGRO.';
                }
                if(consistencia == 3){
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
                        this.$store.dispatch('SaveNewLinea', this.newItem).then(function () {
                            toastr.success('Contenido grabado.');
                        }).catch(function () {
                            toastr.error('El registro no ha sido grabado.');
                        });
                    }else{
                        linea.semana = linea.data[0].texto;
//console.log('unidades grabar linea a:', linea);
                        var linea = this.recalcRow(linea);
//console.log('unidades grabar linea b:', linea);
                        this.$store.dispatch('SaveLinea', linea).then(function() {
                                toastr.success('Unidad grabada.');
                        }).catch(function () {
                            toastr.error('El registro no ha sido grabado.');
                        });

                    }
                };
            },
            recalcRow(oldLinea){
                var xsemana = oldLinea.semana;
                var titulo = this.lineas.filter((linea) => linea.tipo == 'titulo1' && linea.subtipo == 'contenidos');
                var rowTitulo = titulo[0].row;
                //var semanas = this.lineas.filter((linea) => linea.tipo == this.status && linea.subtipo == this.status && linea.semana == xsemana).length;
                //var newRow =  rowTitulo + (xsemana * 100) + semanas;
                var newRow =  rowTitulo + (xsemana * 100);
                oldLinea.row = newRow;
                return oldLinea;
            },
            viewTexto(item){
                var newText = item.texto.toString().replace(/\n/g, '<br>');
                return newText;
            },
            rowClass(item, linea) {
                if(linea.tipo == 'unidades'){
                    switch(item.col){
                        case 1:
                            var xcols = 1;
                            break;
                        case 2:
                            var xcols = 4;
                            break;
                        case 3:
                            var xcols = 4;
                            break;
                        case 4:
                            var xcols = 1;
                            break;
                    }
                    return 'id'+linea.id + ' col-'+item.col+' '+linea.tipo+' col-xs-' + xcols + ' col-xs-offset-' + item.offset;
                }else{
                    return 'col-1 unidades col-xs-8 col-xs-offset-1';
                }
            },

            buttonClass(type, linea) {
                if(linea.tipo == 'unidades'){
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
    .col-1.unidades, .col-2.unidades, .col-3.unidades, .col-4.unidades, .col-6.unidades
    {
        margin-left: 0px;
    } 

    .unidades {
        border: 0px solid black;
    }

    #viewTexto {
        white-space: pre-wrap;
    }

</style>