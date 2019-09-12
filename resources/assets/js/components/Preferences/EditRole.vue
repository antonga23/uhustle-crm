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
                <b-form-input id="input-none" :state="null" v-model="edit_role.display_name"></b-form-input>
                </b-col>
            </b-row>

            <b-row class="my-1">
                <b-col sm="2">
                <label for="input-valid">Role Description</label>
                </b-col>
                <b-col sm="9">
                <b-form-input id="input-valid" :state="null" v-model="edit_role.description"></b-form-input>
                </b-col>
            </b-row>

            <b-row class="my-1">
                <b-col sm="2">
                    <label for="input-invalid">Role Status</label>
                </b-col>
                <b-col sm="9">
                    <b-form-select v-model="edit_role.status" :options="[{ value: '', text: 'Please Select' },{ value: 1, text: 'Active' },{ value: 0, text: 'Disaled' }]" class="form-control"></b-form-select>
                </b-col>
            </b-row>

            <b-row class="my-1">
                <b-col sm="9">
                    <b-button variant="default">Update Role</b-button>
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
            this.edit_role = JSON.parse(this.role);

            this.Toast = this.$swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });
        },
        created: function () {
        },
        props: ['role'],
        data: function(){
            return {
                edit_role: {
                    display_name : '',
                    description : '',
                    status : '',
                },
                Toast: null,
            }
        },
        methods: {

        }
    }
</script>