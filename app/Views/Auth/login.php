<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo view('Auth/components/cssFile'); ?>
    <title><?php echo $title ?></title>
</head>

<body>
    <div id="app">
        <div class="container-lg">
            <div class="card custom-card">
                <div class="row g-0 align-items-stretch">
                    <div class="col-md-4 image-col">
                        <?php echo view('Auth/images/img_1'); ?>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">

                            <!-- Bootstrap-Vue Login Form -->
                            <b-form @submit.prevent="login">
                                <div class="text-center mb-3">
                                    <img src="<?php echo base_url('/style/images/logo_2.png'); ?>" alt="Logo"
                                        class="login-logo">
                                    <h5 class="card-title text-center mb-4"> GEOTRUST</h5>
                                </div>
                                <hr>
                                <h5 class="card-title text-center mb-4">Login</h5>

                                <b-form-group label="Email:" label-for="emailInput">
                                    <b-form-input id="emailInput" type="email" v-model="form.email"
                                        placeholder="Enter email" required></b-form-input>
                                </b-form-group>

                                <b-form-group label="Password:" label-for="passwordInput">
                                    <b-form-input id="passwordInput" type="password" v-model="form.password"
                                        placeholder="Enter password" required></b-form-input>
                                </b-form-group>

                                <button type="submit" class="btn login-btn btn-primary" style="margin-top: 0.5rem;width: 100%;">Login</button>

                                <p class="mt-3 text-center text-muted">
                                    Forgot password? <a href="#">Reset</a>
                                </p>
                            </b-form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo view('Auth/components/jsFile'); ?>

    <script>
        let app = new Vue({
            el: '#app',
            data: {
                form: {
                    email: '',
                    password: ''
                }
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
</body>

</html>