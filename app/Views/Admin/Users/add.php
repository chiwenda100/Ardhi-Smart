<?php echo view('/upper'); ?>
<main class="app-main">
    <div class="app-content-header">
        <div class="container-fluid">
            <div id="app">
                <!--  start button -->
                <div class="row">
                    <div class="col-sm-12">
                        <b-button class="float-end sm mb-1" variant='primary' @click="modalShowAddNewUser">Add New
                            User</b-button>
                    </div>
                </div>
                <!-- tables -->
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example2" class="table table-bordered table-hover dataTable dtr-inline"
                            aria-describedby="example2_info">
                            <thead>
                                <tr>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Rendering engine: activate to sort column descending">
                                        S/N
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="Browser: activate to sort column ascending">Full Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="Platform(s): activate to sort column ascending">National Number</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="Engine version: activate to sort column ascending">
                                        Mobile Number
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="CSS grade: activate to sort column ascending">Roles</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="CSS grade: activate to sort column ascending">Status</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="CSS grade: activate to sort column ascending">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd">
                                    <td class="dtr-control sorting_1" tabindex="0">1</td>
                                    <td>Radon Khalid Simba</td>
                                    <td>20020314145600069</td>
                                    <td>0719042217</td>
                                    <td>Administrator</td>
                                    <td>Active</td>
                                    <td>
                                        <button>view</button>
                                        <button>Edit</button>
                                        <button>Delete</button>
                                    </td>
                                </tr>
                                <tr class="even">
                                    <td class="dtr-control sorting_1" tabindex="0">2</td>
                                    <td>Tima Nipa</td>
                                    <td>83743748378374</td>
                                    <td>0683478393</td>
                                    <td>Manager</td>
                                    <td>InActive</td>
                                    <td>
                                        <button>view</button>
                                        <button>Edit</button>
                                        <button>Delete</button>
                                    </td>
                                </tr>
                                <tr class="odd">
                                    <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
                                    <td>Firefox 2.0</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td>1.8</td>
                                    <td>A</td>
                                    <td>1.7</td>
                                    <td>
                                        <button>view</button>
                                        <button>Edit</button>
                                        <button>Delete</button>
                                    </td>
                                </tr>
                                <tr class="even">
                                    <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
                                    <td>Firefox 3.0</td>
                                    <td>Win 2k+ / OSX.3+</td>
                                    <td>1.9</td>
                                    <td>A</td>
                                    <td>1.7</td>
                                    <td>
                                        <button>view</button>
                                        <button>Edit</button>
                                        <button>Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- form add -->
                <div class="row">
                    <div class="col-lg-12">
                        <b-modal v-model="modalShowAddUser" class="px-3" @ok.prevent="onPressedAddUser"
                            ok-title="Add New User" title="User Management || Add New User"
                            header-class="text-center fw-bold fs-5" hide-header-close header-bg-variant="primary"
                            header-text-variant="light">
                            <div class="row">
                                <div class="col-lg-12">
                                    <b-alert :show="showAlertMessageForAddUser" :variant="variantMessageForAddUser">
                                        {{messageForAddUser}}
                                    </b-alert>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="full_name">Full Name:
                                        <span style="color:red;">*</span>
                                    </label>
                                    <b-form-input type="text" v-model="fullName" id="fullName" name="fullName">
                                    </b-form-input>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="full_name">Email:
                                        <span style="color:red;">*</span>
                                    </label>
                                    <b-form-input type="email" v-model="email" id="email" name="email">
                                    </b-form-input>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="password">Password:
                                        <span style="color:red;">*</span>
                                    </label>
                                    <b-form-input type="password" v-model="password" id="password" name="password">
                                    </b-form-input>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="nationalNumber">National Number:
                                        <span style="color:red;">*</span></label>
                                    <b-form-input type="number" v-model="nationalNumber" name="nationalNumber"
                                        id="nationalNumber"></b-form-input>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="MobileNumber">Mobile Number
                                        <span style="color:red;">*</span>
                                    </label>
                                    <b-form-input type="number" v-model="mobileNumber" name="mobileNumber"
                                        id="mobileNumber"></b-form-input>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="Roles">Roles
                                        <span style="color:red;">*</span>
                                    </label>

                                    <b-form-select v-model="rolesSelected" :options="rolesOptions"
                                        class="form-control"></b-form-select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="Status">Status
                                        <span style="color:red;">*</span>
                                    </label>
                                    <b-form-select v-model="statusSelected" :options="statusOptions"
                                        class="form-control"></b-form-select>
                                </div>
                            </div>
                        </b-modal>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- script for vue -->
<?php echo view('/lower'); ?>
<?php echo view('/Admin/Users/addFooter'); ?>