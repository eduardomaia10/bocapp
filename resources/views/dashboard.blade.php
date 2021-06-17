@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>BocApp | Dashboard Gerencial</h1>
@stop

@section('content')
    {{-- Minimal with title, text and icon --}}
<x-adminlte-small-box title="Title" text="some text" icon="fas fa-star"/>

{{-- Loading --}}
<x-adminlte-small-box title="Loading" text="Loading data..." icon="fas fa-chart-bar"
    theme="info" url="#" url-text="More info" loading/>

{{-- Themes --}}
<x-adminlte-small-box title="{{-- {{ route('dashboard' ,$productqt->count()) }} --}} 666" text="Clientes" icon="fas fa-eye text-dark"
    theme="teal" url="#" url-text="View details"/>

<x-adminlte-small-box title="Downloads" text="1205" icon="fas fa-download text-white"
    theme="purple"/>

<x-adminlte-small-box title="528" text="User Registrations" icon="fas fa-user-plus text-teal"
    theme="primary" url="#" url-text="View all users"/>

{{-- Updatable --}}
<x-adminlte-small-box title="0" text="Reputation" icon="fas fa-medal text-dark"
    theme="danger" url="#" url-text="Reputation history" id="sbUpdatable"/>

@push('js')
<script>

    $(document).ready(function() {

        let sBox = new _AdminLTE_SmallBox('sbUpdatable');

        let updateBox = () =>
        {
            // Stop loading animation.
            sBox.toggleLoading();

            // Update data.
            let rep = Math.floor(1000 * Math.random());
            let idx = rep < 100 ? 0 : (rep > 500 ? 2 : 1);
            let text = 'Reputation - ' + ['Basic', 'Silver', 'Gold'][idx];
            let icon = 'fas fa-medal ' + ['text-primary', 'text-light', 'text-warning'][idx];
            let url = ['url1', 'url2', 'url3'][idx];

            let data = {text, title: rep, icon, url};
            sBox.update(data);
        };

        let startUpdateProcedure = () =>
        {
            // Simulate loading procedure.
            sBox.toggleLoading();

            // Wait and update the data.
            setTimeout(updateBox, 2000);
        };

        setInterval(startUpdateProcedure, 10000);
    })

</script>
@endpush

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
