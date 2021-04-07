<template>
    <div class="register-form-area">

            <div class="contact-info">
                <input class="name" name="name" type="text" placeholder="Nombre Completo." v-model="nombre">
            </div>
            <div class="contact-info">
                <input class="nbm" name="nbm" type="number" placeholder="Celular" v-model="celular">
            </div>
            <div class="contact-info">
                <input class="email" name="email" type="email" placeholder="Email." v-model="email">
            </div>
<!--            <select v-model="curso">-->
<!--                <option value="9">Seleccione Curso.</option>-->
<!--                <option value="10" selected>BIM en edificaciones</option>-->
<!--                <option value="11">BIM en infraestructura</option>-->
<!--                <option value="12">PMI</option>-->
<!--            </select>-->
            <span class="text-white font-weight-bold">Seleccione un departamento</span>
            <select  v-model="departamento_model">
                <option selected value="">Seleccione un departamento</option>
                <template v-for="dept in departamento">
                    <option :value="dept.id">
                        {{ dept.departamento }}</option>
                </template>
            </select>
            <span class="text-white font-weight-bold">Seleccione provincia</span>
            <select  v-model="provincia_model">
                <option selected value="">Seleccione un provincia</option>
                <template v-for="prov in filteredPro">
                    <option :value="prov.id">
                        {{ prov.provincia }}</option>
                </template>
            </select>
            <span class="text-white font-weight-bold">Seleccione distrito</span>
            <select  v-model="distrito_model">
                <option selected value="">Seleccione un distrito</option>
                <template v-for="dis in filteredDis">
                    <option :value="dis.id">
                        {{ dis.distrito }}</option>
                </template>
            </select>

            <div class="nws-button text-uppercase text-center white text-capitalize">
                <button type="button" @click="onSubmitAll()">ENVIAR <i class="fas fa-circle-notch fa-spin" v-show="spin"></i></button>
            </div>
        <div class="alert alert-danger mt-2" v-if="error_v.length > 0">
            <ul>
                <li v-for="er in error_v" :key="er">
                    - {{er}}
                </li>
            </ul>
        </div>
        <div class="alert alert-success mt-2" v-show="exito">
            <ul>
                <li class="font-weight-bold">
                    Gracias por tu registro
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
import { ref, computed, toRefs, reactive } from "vue";
import axios from "axios";
    export default {
        setup(){
            const nombre = ref([]);
            const celular = ref([]);
            const email = ref([]);

            const departamento_model = ref([]);
            const provincia_model = ref([]);
            const distrito_model = ref([]);

            const departamento = ref([]);
            const provincia = ref([]);
            const distrito = ref([]);

            const exito = ref(false);
            const spin = ref(false);

            const formState = reactive({
                error_v: [],
            });


            function onSubmitAll() {
                formState.error_v = [];

                if (nombre.value.length === 0){
                    formState.error_v.push('Nombre es obligatorio')
                }
                if (celular.value.length === 0){
                    formState.error_v.push('Numero de celular es obligatorio')
                }
                if (email.value.length === 0){
                    formState.error_v.push('Email es obligatorio')
                }
                if (departamento_model.value.length === 0){
                    formState.error_v.push('Departamento es obligatorio')
                }
                if (provincia_model.value.length === 0){
                    formState.error_v.push('Provincia es obligatorio')
                }
                if (distrito_model.value.length === 0){
                    formState.error_v.push('Distrito es obligatorio')
                }
                if (formState.error_v.length === 0){
                    spin.value = true
                    let form = {
                        nombre: nombre.value,
                        celular: celular.value,
                        email: email.value,
                        departamento: departamento_model.value,
                        provincia: provincia_model.value,
                        distrito: distrito_model.value,
                    };
                    axios.post('/bim-register-landing', {form_data: form })
                        .then(function(response) {

                                // window.location = '/client/pedidos';
                                // sessionStorage.clear();
                            exito.value = true
                            spin.value = false

                            nombre.value = [];
                            celular.value = [];
                            email.value = [];

                            departamento_model.value = [];
                            provincia_model.value = [];
                            distrito_model.value = [];

                        }, function (er) {
                            error.value = er.response.data
                        });
                }
            }


            fetch("/ubigeoDe")
                .then(res => res.json())
                .then(data => {
                    departamento.value = data;
                });

            const filteredPro = computed(() => {

                if (departamento_model.value != "") {
                    return provincia.value.filter(pro =>
                        pro.idDepa == departamento_model.value
                    );
                }
            });

            const filteredDis = computed(() => {

                if (provincia_model.value != "") {
                    return distrito.value.filter(dis =>
                        dis.idProv == provincia_model.value
                    );
                }
            });


            // function departamento_ch(event){
                fetch("/ubigeoPr")
                    .then(res => res.json())
                    .then(data => {
                        provincia.value = data;
                    });
            // }
            // function provincia_ch(event){
                    fetch("/ubigeoDi/")
                        .then(res => res.json())
                        .then(data => {
                            distrito.value = data;
                        });
            //
            // }


            return{
                ...toRefs(formState),
                nombre,
                celular,
                email,

                departamento_model,
                provincia_model,
                distrito_model,

                departamento,
                provincia,
                distrito,


                filteredPro,
                filteredDis,
                onSubmitAll,

                exito,
                spin

            }

        }
    }
</script>
