<template>
    <div class="register-form-area">
        <form class="contact_form" action="#" method="POST" enctype="multipart/form-data">
            <div class="contact-info">
                <input class="name" name="name" type="text" placeholder="Nombre Completo.">
            </div>
            <div class="contact-info">
                <input class="nbm" name="nbm" type="number" placeholder="Celular">
            </div>
            <div class="contact-info">
                <input class="email" name="email" type="email" placeholder="Email.">
            </div>
            <select>
                <option value="9">Seleccione Curso.</option>
                <option value="10" selected>BIM en edificaciones</option>
                <option value="11">BIM en infraestructura</option>
                <option value="12">PMI</option>
            </select>
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
                <button type="submit" value="Submit">ENVIAR </button>
            </div>
        </form>
    </div>
</template>

<script>
import { ref, computed } from "vue";
    export default {
        setup(){
            const departamento = ref([]);
            const provincia = ref([]);
            const distrito = ref([]);

            const departamento_model = ref([]);
            const provincia_model = ref([]);
            const distrito_model = ref([]);


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
                departamento,
                provincia,
                distrito,

                departamento_model,
                provincia_model,
                distrito_model,


                filteredPro,
                filteredDis

            }

        }
    }
</script>
