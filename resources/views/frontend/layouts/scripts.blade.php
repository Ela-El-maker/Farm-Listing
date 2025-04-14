<script>
    // Create an instance of Notyf
    var notyf = new Notyf({
        duration: 5000,
    });

    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });

    // date picker

    $('.datepicker').datepicker({
        format: 'yyyy-m-d',
    });

    // year picker

    $('.yearpicker').datepicker({
        format: 'yyyy',
        viewMode: 'years',
        minViewMode: 'years'
    });


    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
