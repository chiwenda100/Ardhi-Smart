<script>
    let app = new Vue({
        el: '#app',
        data: {
            email: '',
            password: '',
        },
        methods: {
            onPressedLogin(){
                let formData = new FormData();
                formData.append('email', this.email);
                formData.append('password', this.password);

                axios.post('/check_user', formData).then(res=>{
                    console.log(res);
                    
                }).catch(err=>{
                    console.error(err);
                    
                })
            }
        },
    });
</script>