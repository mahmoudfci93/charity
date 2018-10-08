
@if(Session::has('flash_message'))
    <script>
        swal({
            title: "{{Session::get('flash_message')}}",
            text: "اPress OK to continue",
            icon: "success",
            button: "OKً"
        });
    </script>
@endif