<!-- Vendor js -->
<script src="{{ asset('assetsAdmin/js/vendor.min.js') }}"></script>

<!-- Third Party js-->
<script src="{{ asset('assetsAdmin/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- Plugins js-->
<script src="{{ asset('assetsAdmin/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js') }}">
</script>

<!-- Dashboard init js -->
<script src="{{ asset('assetsAdmin/js/pages/ecommerce-dashboard.init.js') }}"></script>

<!-- App js -->
<script src="{{ asset('assetsAdmin/js/app.min.js') }}"></script>

{{--  CK editor  --}}
<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>


</body>

</html>
