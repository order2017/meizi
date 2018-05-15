@if(Session::has('message'))
    @if(Session::get('message')==Session::get('remind'))
        <script>layer.msg('{{ Session::get('msg') }}', {icon: '{{ Session::get('icon') }}'}); </script>
    @endif
@endif