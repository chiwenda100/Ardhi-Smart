<script>
    let app = new Vue({
        el: '#app',
        data: {
            email: '',
            password: '',
        },
        methods: {
            login() {
                // Demo login function
                alert(`Email: ${this.form.email}\nPassword: ${this.form.password}`);
                // Here you can add axios POST request to your CI4 login controller
            }
        },
    });
</script>