@extends('main')

@section('content')

    <div class="jumbotron">
        {!! Html::image('images/logo.jpg') !!}
        <p class="lead">Por medio de este portal se recibirán las peticiones y propuestas para mejoras del conjunto</p>
        <p>{!! Html::link('register', 'Registro', array('class' => 'btn btn-lg btn-success')) !!} {!! Html::link('login', 'Iniciar', array('class' => 'btn btn-lg btn-success')) !!}</p>
    </div>

    <div class="row marketing"><!--
        <div class="col-lg-6">
            <h4>Subheading</h4>
            <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

            <h4>Subheading</h4>
            <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

            <h4>Subheading</h4>
            <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>

        <div class="col-lg-6">
            <h4>Subheading</h4>
            <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

            <h4>Subheading</h4>
            <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

            <h4>Subheading</h4>
            <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>-->
    </div>
@endsection