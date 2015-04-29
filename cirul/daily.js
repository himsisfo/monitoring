/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(function(){
    daily();
    setInterval(daily, 50000);
});

function daily() {
    $.getJSON("progres", function(data){
        $('#harian').highcharts({
            chart: {
                type: 'areaspline'
            },
            title: {
                text: 'Progres Pencacahan dalam Seminggu'
            },

            xAxis: {
                categories: [
                    'Monday',
                    'Tuesday',
                    'Wednesday',
                    'Thursday',
                    'Friday',
                    'Saturday',
                    'Sunday'
                ]

            },
            yAxis: {
                title: {
                    text: 'Responden'
                }
            },
            plotOptions: {
                series: {
                    fillOpacity: 0.2
                }
            },
            tooltip: {
                shared: true,
                valueSuffix: ' responden'
            },
            credits: {
                enabled: false
            },

            series: [{
                name: 'Cirebon',
                data: [3, 4, 5, 7, 14, 17, 22]
            }, {
                name: 'Sukabumi',
                data: [1, 3, 4, 8, 13, 15, 24]
            },{
                name: 'Bandung',
                data: [23, 24, 25, 27, 24, 27, 32]
            },{
                name: 'Indramayu',
                data: [13, 14, 15, 17, 24, 37, 42]
            }]
        });
    });
}




