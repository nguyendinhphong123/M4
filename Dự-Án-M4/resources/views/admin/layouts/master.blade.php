@include('admin.includes.header')


<!-- Sidebar Navigation-->

@include('admin.includes.sidebar')
@yield('content')



<!-- Sidebar Navigation end-->

@include('admin.includes.footer')
<script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
<script>
   ClassicEditor
                      .create( document.querySelector( '#editor' ) )
                      .catch( error => {
                          console.error( error );
                      } );
</script>