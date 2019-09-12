<style scoped>
    .form-control {
        border-radius: 25px;
        padding: 7px;
        height: 28px !important;
        font-size: 9px;
    }
</style>
<template>
    <div class="col-lg-9">
        <b-container fluid>
            <b-row class="my-1">
                <b-col sm="2">
                <label for="input-none">Role Name:</label>
                </b-col>
                <b-col sm="9">
                <b-form-input id="input-none" :state="null" v-model="role.display_name"></b-form-input>
                </b-col>
            </b-row>

            <b-row class="my-1">
                <b-col sm="2">
                <label for="input-valid">Role Description</label>
                </b-col>
                <b-col sm="9">
                <b-form-input id="input-valid" :state="null" v-model="role.description"></b-form-input>
                </b-col>
            </b-row>

            <b-row class="my-1">
                <b-col sm="2">
                    <label for="input-invalid">Role Status</label>
                </b-col>
                <b-col sm="9">
                    <b-form-select v-model="role.status" :options="[{ value: '', text: 'Please Select' },{ value: 1, text: 'Active' },{ value: 0, text: 'Disaled' }]" class="form-control"></b-form-select>
                </b-col>
            </b-row>

            <b-row class="my-1">
                <b-col sm="9">
                    <b-button variant="default" @click="addRole()">Add Role</b-button>
                </b-col>
            </b-row>
        </b-container>
    </div>
</template>

<script>
    export default {
        components: { 
        },
        mounted() {
            console.log('Component mounted');

            this.Toast = this.$swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });
        },
        created: function () {
        },
        props: [],
        data: function(){
            return {
                role: {
                    display_name : '',
                    description : '',
                    status : '',
                },
                Toast: null,
            }
        },
        methods: {
            addRole(){
                console.log(this.role);
            }
        }
    }
</script>