<?php echo view('Auth/components/jsFile'); ?>
<script>
    let app = new Vue({
        el: '#app',
        data: {
            email: '',
            password: '',
            message: '',
            showMessage: false,
            variant: ''
        },
        methods: {
            onPressedLogin() {
                let formData = new FormData();
                formData.append('email', this.email);
                formData.append('password', this.password);

                axios.post('/check_user', formData).then(res => {
                    if(res.data.success){
                        this.message = res.data.message;
                        this.showMessage = true;
                        this.variant = 'success';
                        setTimeout(()=>{
                            window.location.href = '/dashboard';
                        }, 1000)
                    }else{
                        this.message = res.data.message;
                        this.showMessage = true;
                        this.variant = 'danger';
                    }
                    

                }).catch(err => {
                    console.error(err);

                })
            }
        },
    });
</script>