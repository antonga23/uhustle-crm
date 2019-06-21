<template>
    <div class="">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Example 1</div>

                    <div class="card-body">
                       11 I'm an example component1.
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Example 1</div>

                    <div class="card-body">
                       11 I'm an example component1.
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Example 1</div>

                    <div class="card-body">
                       11 I'm an example component1.
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Example 1</div>

                    <div class="card-body">
                       11 I'm an example component1.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.');
            this.getLead(84);
        },
        props: ['api_auth_string'],
        data: function(){
            return {
                lead: {},
            }
        },
        methods: {
            getLead(id = ''){
                var url = 'http://34.241.86.1/api/leads/get/' + id + '?session_user_id=22&session_user_name=sone thasi';
                axios.get(url, {headers: {
                        "Accept" : 'application/json',
                        "Authorization" : this.api_auth_string,
                    }
                } ).then((response) =>{
                    console.log(response);
                });
            }
        }
    }
</script>
