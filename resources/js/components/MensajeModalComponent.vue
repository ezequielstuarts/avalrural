<template>
    <div class="modal fade" id="mensajeModalComponent" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content modals-mensajes">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle"><b>Mensaje recibido el: </b> {{date}} </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p><b>De: </b>{{ nombre }}, {{ apellido }} - <b>Email: </b>{{ email }}</p>
            <p><b>Localidad: </b>{{ localidad }} - <b>Teléfono: </b>{{ telefono }}</p>
            <p><b>Empresa: </b>{{ empresa }} - <b>CIUT: </b>{{ cuit }}</p>
            <hr>
            <p> <b>Consulta: </b>{{ consulta }} </p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
    </div>
</template>

<script>
    export default {
        props: ['mensaje'],
        data() {
            return {
                currentMessage: null,
                };
        },
        // mounted() {
        // },
        computed: {
            date: function() {
                if (this.mensaje) {
                    return this.mensaje.created_at;
                }
            },
            nombre: function() {
                if (this.mensaje) {
                    return this.mensaje.nombre;
                }
            },
            apellido: function() {
                if (this.mensaje) {
                    return this.mensaje.apellido;
                }
            },
            email: function() {
                if (this.mensaje) {
                    return this.mensaje.email;
                }
            },
            localidad: function() {
                if (this.mensaje) {
                    return this.mensaje.localidad;
                }
            },
            telefono: function() {
                if (this.mensaje) {
                    return this.mensaje.telefono;
                }
            },
            empresa: function() {
                if (this.mensaje) {
                    return this.mensaje.empresa;
                }
            },
            cuit: function() {
                if (this.mensaje) {
                    return this.mensaje.cuit;
                }
            },
            consulta: function() {
                if (this.mensaje) {
                    return this.mensaje.consulta;
                }
            },
        },
        methods: {
        }
    }
</script>

<style>
.modal-dialog {
    min-width: 85;
}
</style>