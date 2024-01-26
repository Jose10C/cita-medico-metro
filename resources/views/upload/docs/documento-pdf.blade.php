<!DOCTYPE html>
<html lang="es-PE">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Constancia - Cita Médica Atendida</title>
</head>

<body>
    <!--HEADER-->
    <table class="div-1Header">
        <tr>
            <td class="logotd">
                <img id="" src="{{base_path('public/img/config/logo-claro-metropolitano.png')}}" alt="logo" width="150px">
            </td>
            <td class="datos-grales-td">
                <table class="table_h_factura">
                    <thead>
                        <th class="headerDatosh titulos">CONSTANCIA DE ATENCIÓN: <span class="titulos">51</span></th>
                    </thead>
                    <tr>
                        <td class="titulos">
                            <p>Centro de Salud Metropolitano - Abancay</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                Av. <span>28 DE Julio - Abancay</span>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Teléfono: <span>5897485106</span> </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>E-mail: <span>contacto@Mmetropolitano.com</span> </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!--DATOS-->
    <div>
        <br>
        <b>
            <p style="font-size: 20px; text-align: center; text-decoration: underline;">CONSTANCIA DE ATENCION MÉDICA </p>
        </b>
    </div>
    <p style="font-size: 16px; text-align: justify;">
        <br>
        Abancay, 25 de Diciembre del 2023
        <br>
        <br>
        Con la presente se informa que el(la) panciente <b>ANA SOFIA JATAMILLO ALZATE</b>, indetificado con
        DNI N°: 25252525, domiciliado en Av. Peru 2145 Abancay, ssisitió
        a la cita en el Centro de Salud Metropolitano - Abancay el día 25 de Diciemebre del 2023
        con el(la) <b>DRA. YAMILE ILGESIAS VEGA</b>, en la especialidad de <b>ODONTOPEDIATRIA</b> para su
        respectivo diagnostico.
        <br>
        <br>
        <b>HORA DE CITA: 10:00 AM</b>
        <br>
        <br>
        Esta constancia se expide a solicitud del(la) paciente a los 25 de Diciembre del 2023.
        <br>
        <br>
        Atentamente.
        <br><br>
    <div style="text-align: center;">
        <img src="{{base_path('public/img/config/firma-doc.png')}}" height="120px" alt="firma de autorizacion">
        <br>
        _______________________________
        <br>
        LUISA FERNANDA LUNA SOLANO
        <br>
        Gerente
        <br>
        Hospital Metropolitano
        <br>
    </div>
    </p>
    
    <!--FOOTER-->
    <footer>
        <!-- <img src="{{base_path('/public/img/codeqr/qrcode-001.svg')}}" alt="codigo qr "> -->
        <img src="#" alt="codigo qr ">
        <p>Obten tu factura en: https://jhosedev.com/miconstancia | Empresa: 558525 | Referencia: 55a885dvs </p>
    </footer>
</body>

</html>
<style>
    /*ESTILOS GRALES*/
    * {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 12px;
    }

    .titulos {
        font-size: 15px;
        text-transform: uppercase;
    }

    /*HEADER*/
    .div-1Header,
    .div-1Datos {
        width: 100%;
    }

    .logotd {
        width: 50%;
        height: auto;
    }

    .datos-grales-td,
    .receptor {
        width: 50%;
    }

    .table_h_factura {
        width: 50%;
        height: 150px;
        background-color: #FFF;
        width: 100%;
        margin: 0px;
        padding: 0px;
    }

    .headerDatosh {
        text-align: right;
        color: #FFF;
        padding: 5px;
        background-color: rgb(24, 140, 207);
    }

    .table_h_factura tr td p {
        margin: 0px;
        padding: 2px;
        text-align: right;
        padding-right: 5px;
    }

    /*DATOS*/
    .table_receptor,
    .table_datos {
        width: 42%;
        height: 100px;
        background-color: rgba(243, 243, 243, 0.521);
        width: 100%;
        margin: 0px;
        padding: 10px;
        border-radius: 5px;
    }

    .table_receptor tr td p {
        margin: 0px;
        padding: 2px;
        text-align: left;
    }

    .tituloRec {
        color: rgb(24, 140, 207);
    }

    .table_datos tr td p {
        margin: 0px;
        padding: 2px;
        text-align: left;
    }

    /*MATERIALES*/
    .table_materiales {
        width: 100%;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .table_materiales thead tr {
        background-color: rgb(24, 140, 207);
        color: #FFF;
    }

    .table_materiales thead tr td {
        padding: 5px;
        text-align: center;
        font-size: 14px;
    }

    .table_materiales tr td {
        text-align: center;
        padding: 5px;
        border-bottom: 1px solid rgba(20, 20, 20, 0.096);
    }

    /*DATOS FINALES*/
    .table_datosFtxt {
        width: 70%;
        height: 100px;
        width: 100%;
        margin: 0px;
    }

    .datosFinales {
        width: 30%;
    }

    .datosFinales .table_datosfinales {
        width: 42%;
        height: 100px;
        width: 100%;
        margin: 0px;
        padding: 10px;
        border: 1px solid rgba(20, 20, 20, 0.096);
    }

    .datosFinales .table_datosfinales tr td p {
        margin: 0px;
        padding: 2px;
        text-align: left;
    }

    /*FIRMA*/
    .firma {
        border-top: 1px solid rgba(20, 20, 20, 0.5);
        text-align: center;
        width: 30%;
        margin-left: 70%;
        margin-top: 80px;
        padding-top: 5px;
    }

    /*FOOTER*/
    footer {
        width: 100%;
        text-align: center;
        position: absolute;
        bottom: 0px;
    }
</style>