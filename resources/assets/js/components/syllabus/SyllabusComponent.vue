<template>
    <main class="SyllabusComponent">
        <img src="/images/if_Loading_throbber_103105.png" v-if="loading" />
        <span v-if="!loading">        
            <button type="button" class="btn btn-default" @click='view("vista")'>Vista</button>
            <button type="button" class="btn btn-default" @click='view("generales")'>Generalidades</button>
            <button type="button" class="btn btn-default" @click='view("sumillas")'>Sumillas</button>
            <button type="button" class="btn btn-default" @click='view("unidades")'>Unidades</button>
            <button type="button" class="btn btn-default" @click='view("contenidos")'>Contenidos</button>
            <button type="button" class="btn btn-default" @click='view("estrategias")'>Estrategias</button>
            <button type="button" class="btn btn-default" @click='view("evaluaciones")'>Evaluaciones</button>
            <button type="button" class="btn btn-default" @click='view("bibliografias")'>Bibliografias</button>
        </span>
        <div v-if="status == 'vista'">
            <vista></vista>
        </div>
        <div v-if="status == 'generales'">
            <generales></generales>
        </div>
        <div v-if="status == 'sumillas'">
            <sumillas></sumillas>
        </div>
        <div v-if="status == 'unidades'">
            <unidades></unidades>
        </div>
        <div v-if="status == 'contenidos'">
            <contenidos></contenidos>
        </div>
        <div v-if="status == 'estrategias'">
            <estrategias></estrategias>
        </div>
        <div v-if="status == 'evaluaciones'">
            <evaluaciones></evaluaciones>
        </div>
        <div v-if="status == 'bibliografias'">
            <bibliografias></bibliografias>
        </div>
    </main>
</template>
<script>
    import vista from './Vista';
	import generales from './Generales';
    import sumillas  from './Sumillas';
    import unidades  from './Unidades';
    import competencias  from './Competencias';
    import contenidos  from './Contenidos';
    import estrategias from './Estrategias';
    import evaluaciones from './Evaluaciones';
    import bibliografias from './Bibliografias';
    import {mapState} from 'vuex';
    import axios from 'axios'

    export default {
        props:['semestre', 'cod_curso'],
        mounted() {
            console.log('SyllabusComponent.vue mounted.');
            this.getData();
        },
        components: {
            vista, generales, sumillas, unidades, competencias, contenidos, estrategias, evaluaciones, bibliografias
        },
        computed: mapState(['status', 'loading']),
        methods:{
            view(tipo){
                this.$store.commit('view', tipo);
            },
            getData: function() {
                var request = {
                      'cod_curso': this.cod_curso,
                      'semestre' : this.semestre
                  };
//console.log('request: ',request);
                var URLdomain = window.location.host;
                var protocol = window.location.protocol;
                var url = protocol+'//'+URLdomain+'/api/index/';
                axios.post(url, request).then(response=>{
//console.log('response: ',response.data.data);
                    //this.lineas = response.data.data;
                    this.$store.commit('setLineas', response.data.data);
                    this.$store.commit('sortLineasRow');
                    this.$store.commit('loaded');
                }).catch(function (error) {
                    console.log(error);
                    this.$store.commit('loaded');
                });
            },
        },
    }
</script>


<style>
    .titulo0 {
        font-size: 25px;
        font-weight: bold;
    }
    .titulo1 {
        font-size: 15px;
        font-weight: bold;
        margin-top: 20px;
    }
    .unidades {
        border: 1px solid black;
    }

    .col-2.titulo3, .col-3.titulo3,  .col-4.titulo3,  .col-6.titulo3, 
    .col-2.contenidos,  .col-3.contenidos,  .col-4.contenidos,  .col-6.contenidos,
    .col-3.generales, .col-2.bibliografias
    {
        margin-left: 0px;
    }

    .examenes {
        border: 0.5px solid black;
    }

</style>