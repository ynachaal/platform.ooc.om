<!-- Main Sidebar Container -->
<link rel="stylesheet" href="{{asset('css/toastr.css')}}">
<script src="{{asset('js/toastr.js')}}"></script>
<script>
    toastr.options.closeButton = true;
    toastr.options.progressBar = true;
    toastr.options.rtl = true;
</script>
@if ($message = Session::get('success'))
<script>
    toastr.success('{{ $message }}', 'Success');
</script>
@endif

@if ($message = Session::get('error'))
<script>
    toastr.error('{{ $message }}', 'Error');
</script>
@endif

@if ($errors->any())
@foreach ($errors->all() as $error)
<script>
    toastr.error('{{ $error }}', 'Error');
</script>
@break
@endforeach
@endif