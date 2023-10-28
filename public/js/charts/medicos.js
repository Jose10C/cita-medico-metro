const chart = Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Desempeño de Médicos',
        align: 'left'
    },
    xAxis: {
        categories: [],
        crosshair: true,
        accessibility: {
            description: 'Countries'
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Citas Atendidas'
        }
    },
    tooltip: {
        valueSuffix: ' (Und.)'
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: []
});

let $start, $end;


function fetchData() {
    const startDate = $start.val();
    const endDate = $end.val();
    const url = `/reports/medicos/column/data?start=${startDate}&end=${endDate}`;

    //fecth API
    fetch(url)
    .then(function(response) {
        return response.json();
    })
    .then(function(myJson) {
        chart.xAxis[0].setCategories(myJson.categories);

        if(chart.series.length > 0)
        {
            chart.series[1].remove();
            chart.series[0].remove();
        }

        chart.addSeries(myJson.series[0]);
        chart.addSeries(myJson.series[1]);
        console.log(myJson);
    });
}

/* fetchData(); */

$(function() {
    $start = $('#startDate');
    $end = $('#endDate');

    fetchData();
    
    $start.change(fetchData());
    $end.change(fetchData());
});
