<script>
    let app = new Vue({
        el:'#app',
        data:{
            //Model -Users
            modalShowAddUser: false,
            fullName: '',
            nationalNumber: '',
            statusSelected: null,
            rolesSelected: null,
            statusOptions: [
                {
                    text: '--Select Status--',
                    value: null,
                },
                {
                    text: 'Active',
                    value: 1,
                },
                {
                    text: 'InActive',
                    value: 0,
                }
            ],
            rolesOptions: [],
        },
        mounted(){
            this.fetchAllRoles();
        },
        methods:{
            modalShowAddNewUser(){
                this.modalShowAddUser = true;
            },
            onPressedAddUser(){

            },
            fetchAllRoles(){
                axios.get('/fetch_data_roles_on_database').then(res=>{
                    let roles = res.data.roles;
                    this.rolesOptions = [
                        { text: '--Select Roles--', value: null }
                    ];
                    roles.forEach(role => {
                        this.rolesOptions.push({
                            text: role.name,
                            value: role.id,
                        });
                    });

                }).catch(err=>{
                    console.error(err);
                    
                });
            }

        },
    });
</script>