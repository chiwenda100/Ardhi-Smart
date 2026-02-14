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
                            <div class="text-center mb-3">
                                <img src="<?php echo base_url('/style/images/logo_2.png'); ?>" alt="Logo"
                                    class="login-logo">
                                <h5 class="card-title text-center mb-4"> GEOTRUST</h5>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <b-alert :show="showMessage" :variant="variant">
                                       {{message}}
                                    </b-alert>
                                </div>
                            </div>
                            <h5 class="card-title text-center mb-4">Login</h5>

                            <label for="email"> Email</label>
                            <b-form-input id="emailInput" type="email" v-model="email" placeholder="Enter email"
                                required></b-form-input>


                            <label for="password"> password</label>
                            <b-form-input id="passwordInput" type="password" v-model="password"
                                placeholder="Enter password" required></b-form-input>


                            <b-button class="btn login-btn btn-primary" style="margin-top: 0.5rem;width: 100%;"
                                @click="onPressedLogin()">Login</b-button>

                            <p class="mt-3 text-center text-muted">
                                I don't have an account? <a href="#">Register</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo view('Auth/loginFooter'); ?>


</body>

</html>