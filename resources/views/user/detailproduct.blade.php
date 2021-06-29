@extends('template.user')

@section('title')
    Custom Dessert
@endsection

@section('css')
    {{-- <link rel="stylesheet" href="{{ asset('css/selectform.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/user/customdetails.css') }}">
@endsection

@section('content')
    @livewire('details-product', ['ide' => $ide])
@endsection

@section('js')
    {{-- <script src="{{ asset('js/selectform.js') }}"></script> --}}
    <script>
        var buynowbtn = document.getElementById('gaskeun');
        buynowbtn.addEventListener('click',function(){
            var inputankusus = document.getElementById('direct');
            inputankusus.setAttribute('value','langsung');
            document.getElementById('adtucart').click();
        });


        const mainimg = document.querySelector('#mainimage');
        const imglist = document.querySelector('.imglist');

        imglist.addEventListener('click', function(e){

            if(e.target.className == 'detailimage'){
                mainimg.src = e.target.src;
            }

        });

        function insertAfter(newNode, referenceNode) {
        referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
}
    </script>
@endsection