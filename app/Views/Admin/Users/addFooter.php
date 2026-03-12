<script>
    let app = new Vue({
        el: '#app',
        data: {
            //Model -Users

            showAlertMessageForAddUser: false,
            variantMessageForAddUser: '',
            messageForAddUser: '',
            modalShowAddUser: false,
            fullName: '',
            nationalNumber: '',
            mobileNumber: '',
            password: '',
            email: '',
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
            users: [],
        },
        mounted() {
            this.fetchAllRoles();
            this.fetchAllUser();
        },
        methods: {
            modalShowAddNewUser() {
                this.modalShowAddUser = true;
            },
            resetForm() {
                this.fullName = '';
                this.nationalNumber = '';
                this.mobileNumber = '';
                this.password = '',
                    this.email = '',
                    this.statusSelected = null;
                this.rolesSelected = null;
            },
            onPressedAddUser() {
                if (this.fullName == '' || this.nationalNumber == '' || this.mobileNumber == '' || this.statusSelected == null || this.rolesSelected == null) {
                    this.showAlertMessageForAddUser = true;
                    this.variantMessageForAddUser = 'danger';
                    this.messageForAddUser = 'Please Field Required Field';
                    return;
                }

                let formData = new FormData();
                formData.append('full_name', this.fullName);
                formData.append('national_number', this.nationalNumber);
                formData.append('mobile_number', this.mobileNumber);
                formData.append('status', this.statusSelected);
                formData.append('role', this.rolesSelected);
                formData.append('email', this.email);
                formData.append('password', this.password);

                axios.post('/user_add', formData).then(
                    res => {
                        if (res.data.success) {
                            this.showAlertMessageForAddUser = true;
                            this.variantMessageForAddUser = 'success';
                            this.messageForAddUser = res.data.message;
                            this.resetForm();
                            this.fetchAllUser();


                        } else {
                            this.showAlertMessageForAddUser = true;
                            this.variantMessageForAddUser = 'danger';
                            this.messageForAddUser = res.data.message;
                        }
                    }
                ).catch(err => {
                    console.error(err);

                });

            },
            fetchAllRoles() {
                axios.get('/fetch_data_roles_on_database').then(res => {
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

                }).catch(err => {
                    console.error(err);

                });
            },

            fetchAllUser() {
                axios.get('/fetch_all_user_in_database').then(res => {
                    this.users = res.data.info;
                    console.log(this.users);

                }).catch(err => {
                    console.error(err);
                });
            },

        },
    });
</script>