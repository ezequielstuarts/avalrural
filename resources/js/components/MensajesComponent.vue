<template>
<div>
    <div v-if="loader_datatables" class="container loader_datatables mx-auto mt-4 text-center">
        <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
    </div>
    <div v-else>
        <div class="mb-5">
            <h4 class="text-secondary"><b>{{totalMensajes}}</b> Mensajes recibidos desde formulario de contacto.</h4>
            <div v-if="mensajesNoLeidos > 0">
                <h6 class="text-secondary text-danger"><b>{{mensajesNoLeidos}}</b> Sin leer</h6>
            </div>
            <div v-else>
                <h6 class="text-secondary text-success"><b>No hay mensajes sin leer</b></h6>
            </div>
            <hr>
        </div>
        <table class="table table-hover table-striped" id="myTable">
            <thead>
                <tr class="tr-background">
                    <th>Estado</th>
                    <th>Recibido</th>
                    <th>De</th>
                    <th>Email</th>
                    <th>Ver</th>
                    <th>Estado</th>
                    <th>Accion</th>
                </tr>
            </thead>
        <tbody>
            <tr v-for="(mensaje, index) in mensajes" :key="index">
                <td v-if="mensaje.read"><i class="far fa-envelope-open" title="Leído"></i></td>
                <td v-else><b><i class="fas fa-envelope" title="No Leído"></i></b></td>
                <td v-if="mensaje.read">{{mensaje.created_at}}</td>
                <td v-else><b>{{mensaje.created_at}}</b></td>
                <td v-if="mensaje.read">{{mensaje.apellido}}, {{mensaje.nombre}}</td>
                <td v-else><b>{{mensaje.apellido}}, {{mensaje.nombre}}</b></td>
                <td v-if="mensaje.read">{{mensaje.email}}</td>
                <td v-else><b>{{mensaje.email}}</b></td>

                <th>
                    <a @submit.prevent class="btn btn-primary btn-sm" v-bind:id="'msg' + mensaje.id" @click="leer(mensaje)"><i class="fas fa-eye"></i></a>
                </th>
                <th>
                    <small v-if="mensaje.status">Respondido</small>
                        <a @submit.prevent v-else class="btn btn-warning btn-sm btn-marcar-como-respondido" @click="responder(mensaje)">Marcar como respondido</a>
                </th>
                <th>
                    <a @submit.prevent class="btn btn-danger btn-sm" @click="eliminar(mensaje.id)"><i class="fas fa-trash-alt"></i></a>
                </th>
            </tr>
        </tbody>
        </table>
    </div>
</div>
</template>

<script>
    import axios from 'axios';
    import datatables from 'datatables';

    export default {
        data() {
            return {
                mensajes: null,
                loader_datatables: true,
                cargando: false,
                totalMensajes: 0,
                mensajesNoLeidos: 0,
            }
        },
        mounted() {
            this.getMensajes();
        },
        methods: {
            dTable() {
                $(document).ready( function () {
                $('#myTable').DataTable();
                });
            },
            getMensajes: function() {
                axios.get('/mensajes/getMensajes').then(response => {
                    this.totalMensajes = response.data.mensajes.length;
                    this.mensajesNoLeidos = response.data.mensajesNoLeidos.length;
                    this.mensajes = response.data.mensajes;
                    this.loader_datatables = false;
                    this.dTable();
                });
            },
            eliminar(id) {
                Swal.fire({
                title: 'Desea eliminar este mensaje',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: 'green',
                cancelButtonText: 'Cancelar',
                confirmButtonText: 'Si, borrar!'
                }).then((result) => {
                if (result.value) {
                        axios.post(`/mensajes/delete/${id}`).then(response => {
                        this.getMensajes();
                    })
                    .catch(error => toastr.error('Sucedio algun error</b>!'))
                }
                })
            },
            leer(mensaje) {
                Swal.fire({
                width: 800,
                title: '<h4>Mensaje Recibido el '+mensaje.created_at+'</h4>',
                html:'<hr/><div class="mensaje-sweet"><p> <b>De: </b>'+mensaje.nombre+', '+mensaje.apellido+ '<b> - Email: </b>'+mensaje.email+'<p> <b>Localidad: </b>'+mensaje.localidad+' - '+'<b>Teléfono: </b>'+mensaje.telefono+'</p><p><b>Empresa: </b>'+mensaje.empresa+' - <b>CUIT: </b>'+mensaje.cuit+'</p>'+'<hr/><p><b>Consulta: </b>'+mensaje.consulta+'</p></div>',
                focusConfirm: true,
                 showClass: {
                        popup: 'animate__animated animate__fadeInDown'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__fadeOutUp'
                    }
                });
                if (!mensaje.read) {
                    this.read(mensaje);
                }
            },
            read(mensaje) {
                axios.post(`/mensajes/read/${mensaje.id}`).then(response => {
                    this.getMensajes();
                })
                .catch(error => toastr.error('Sucedio algun error al queres marcar como leido el mensaje</b>!'))
            },
            responder(mensaje) {
                axios.post(`/mensajes/responder/${mensaje.id}`).then(response => {
                    this.getMensajes();
                })
                .catch(error => toastr.error('Sucedio algun error</b>!'))
            }
        }
    }
</script>

<style>
 td{cursor: pointer}
</style>
