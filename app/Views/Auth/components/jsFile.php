<script src="/node_modules/axios/axios.min.js"></script>
<?php if (getenv("ci_environment") == "production"): ?>
    <script src="/node_modules/vue/vue.min.js"></script>
<?php else: ?>
    <script src="/node_modules/vue/vue.js"></script>
<?php endif ?>

<script src="/node_modules/jquery/jquery.slim.min.js"></script>


<script src="/node_modules/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/node_modules/bootstrap-vue/bootstrap-vue.min.js"></script>
<script src="/node_modules/bootstrap-vue/bootstrap-vue-icons.min.js"></script>