let $medicoSelect, $date, $especialidad, iRadio;

let $horasManana, $horasTarde, $tituloManana, $tituloTarde;

const encabezadoManana = `<label>TURNO MAÑANA:</label>`;
const encabezadoTarde = `<label>TURNO TARDE:</label>`;
const mensajeSinHoras = `<span class="text-danger">No hay horas disponibles para este día.</span>`;

$(function () {
    $especialidad = $("#especialidad");
    $medicoSelect = $("#medico");
    $date = $("#date");

    $tituloManana = $("#tituloManana");
    $horasManana = $("#horasManana");
    $tituloTarde = $("#tituloTarde");
    $horasTarde = $("#horasTarde");

    $especialidad.change(() => {
        const especialidadId = $especialidad.val();
        const url = `/especialidades/${especialidadId}/medicos`;
        $.getJSON(url, onMedicoLoaded);
    });

    $medicoSelect.change(loadHours);
    $date.change(loadHours);
});

function onMedicoLoaded(medico) {
    let htmlOptions = "";
    medico.forEach((medico) => {
        htmlOptions += `<option value="${medico.id}">${medico.name}</option>`;
    });
    $medicoSelect.html(htmlOptions);

    loadHours();
}

function loadHours() {
    const selectedDate = $date.val();
    const medicoId = $medicoSelect.val();
    const url = `/horario/horas?date=${selectedDate}&medico_id=${medicoId}`;
    $.getJSON(url, displayHours);
}

function displayHours(data) {
    let htmlHorasManana = "";
    let htmlHorasTarde = "";

    iRadio = 0;

    if (data.manana) {
        const manana_intervalos = data.manana;
        manana_intervalos.forEach((intervalo) => {
            htmlHorasManana += getRadioIntervaloHTML(intervalo);
        });
    }

    if(!htmlHorasManana != ""){ htmlHorasManana = mensajeSinHoras;}

    if (data.tarde) {
        const tarde_intervalos = data.tarde;
        tarde_intervalos.forEach((intervalo) => {
            htmlHorasTarde += getRadioIntervaloHTML(intervalo);
        });
    }

    if(!htmlHorasTarde != ""){ htmlHorasTarde = mensajeSinHoras;}

    $horasManana.html(htmlHorasManana);
    $horasTarde.html(htmlHorasTarde);

    $tituloManana.html(encabezadoManana);
    $tituloTarde.html(encabezadoTarde);
}

function getRadioIntervaloHTML(intervalo) {
    const text = `${intervalo.inicio} - ${intervalo.fin}`;

    return `<div class="selectgroup selectgroup-pills">
                <label class="selectgroup-item">
                    <input type="radio" name="hora_cita" id="intervalo${iRadio}" value="${intervalo.inicio}" class="selectgroup-input">
                    <span class="selectgroup-button selectgroup-button-icon" for="intervalo${iRadio++}"><i class="fa fa-circle"></i> ${text} </span>
                </label>
            </div>`;
}
