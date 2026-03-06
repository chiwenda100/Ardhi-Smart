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
            rolesOptions: [
                 {
                    text: '--Select Roles--',
                    value: null,
                },
                {
                    text: 'System Administrator',
                    value: 'System Administrator',
                },
                {
                    text: 'Director',
                    value: 'Director',
                },
                {
                    text: 'Manager',
                    value: 'Manager',
                }
            ],
        },
        mounted(){},
        methods:{
            modalShowAddNewUser(){
                this.modalShowAddUser = true;
            },
            onPressedAddUser(){

            }

        },
    });
</script>