@extends('layouts.guest')

@section('title', 'Nuestros Servicios')

@section('content')
<div class="card">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto my-5">
                <div class="card card-primary">
                    <div class="specialty-info">
                        <img src="{{ asset('img/obstreticia.jpg') }}" alt="Obstetricia" class="specialty-image">
                        <div class="specialty-text">
                            <h2>Obstetricia</h2>
                            <p>La obstetricia es la rama de la medicina que se especializa en el cuidado de la salud de la mujer durante el embarazo, el parto y el período postparto. Los obstetras trabajan para garantizar un embarazo seguro y saludable, brindando atención médica integral a las mujeres en todas las etapas de su embarazo.</p>
                            <p>Nuestro equipo de obstetricia está comprometido a proporcionar atención de calidad y compasión a todas nuestras pacientes, asegurando un embarazo saludable y un parto seguro para todas las madres y sus bebés.</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="card card-primary">
                    <div class="specialty-info">
                        <img src="{{ asset('img/enfermeria.jpg') }}" alt="Enfermería" class="specialty-image">
                        <div class="specialty-text">
                            <h2>Enfermería</h2>
                            <p>La enfermería es una profesión vital en el campo de la salud que se enfoca en brindar atención médica y apoyo a los pacientes en todas las etapas de su enfermedad o lesión. Los enfermeros desempeñan un papel fundamental en la promoción de la salud, la prevención de enfermedades y el cuidado de los pacientes en hospitales, clínicas y entornos comunitarios.</p>
                            <p>Nuestro equipo de enfermería está formado por profesionales altamente calificados y dedicados que trabajan incansablemente para garantizar el bienestar y la comodidad de nuestros pacientes durante su estadía en nuestro centro de salud.</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="card card-primary">
                    <div class="specialty-info">
                        <img src="{{ asset('img/medicina-general.png') }}" alt="Medicina General" class="specialty-image">
                        <div class="specialty-text">
                            <h2>Medicina General</h2>
                            <p>La medicina general es una especialidad médica que se enfoca en brindar atención médica integral y continua a personas de todas las edades, géneros y condiciones de salud. Los médicos generales son expertos en el diagnóstico y tratamiento de una amplia variedad de enfermedades y afecciones médicas, y sirven como el primer punto de contacto para la atención médica para muchos pacientes.</p>
                            <p>Nuestro equipo de medicina general está comprometido a proporcionar atención médica de calidad y compasión a todos nuestros pacientes, abordando sus necesidades de salud de manera integral y personalizada.</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="card card-primary">
                    <div class="specialty-info">
                        <img src="{{ asset('img/odontologia.png') }}" alt="Odontología" class="specialty-image">
                        <div class="specialty-text">
                            <h2>Odontología</h2>
                            <p>La odontología es la rama de la medicina que se especializa en el diagnóstico, tratamiento y prevención de enfermedades y trastornos relacionados con la boca, los dientes y las estructuras faciales asociadas. Los odontólogos, también conocidos como dentistas, trabajan para promover la salud bucal y mejorar la calidad de vida de sus pacientes a través de una variedad de tratamientos y procedimientos dentales.</p>
                            <p>Nuestro equipo de odontología está comprometido a proporcionar atención dental de calidad y compasión a todos nuestros pacientes, ayudándolos a mantener una sonrisa saludable y hermosa de por vida.</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="card card-primary">
                    <div class="specialty-info">
                        <img src="{{ asset('img/psicologia.png') }}" alt="Psicología" class="specialty-image">
                        <div class="specialty-text">
                            <h2>Psicología</h2>
                            <p>La psicología es la disciplina científica que se enfoca en el estudio de la mente y el comportamiento humano. Los psicólogos trabajan para comprender cómo piensan, sienten y se comportan las personas, y utilizan este conocimiento para ayudar a los individuos a superar desafíos emocionales, mejorar su bienestar mental y alcanzar su máximo potencial en la vida.</p>
                            <p>Nuestro equipo de psicología está formado por profesionales capacitados y compasivos que trabajan para brindar apoyo emocional y tratamiento psicológico a individuos de todas las edades, ayudándolos a enfrentar y superar una variedad de problemas de salud mental.</p>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>

@endsection