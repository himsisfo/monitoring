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
        console.log(data);
        $('#harian').highcharts({
            chart: {
                type: 'areaspline'
            },
            title: {
                text: 'Progres Pencacahan dalam Seminggu'
            },

            xAxis: {
                categories: [
                    '14 Maret',
                    '15 Maret',
                    '16 Maret',
                    '17 Maret',
                    '18 Maret',
                    '19 Maret',
                    '20 Maret'
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
                data: data['cirebon_daily']
            }, {
                name: 'Sukabumi',
                data: data['sukabumi_daily']
            },{
                name: 'Bandung',
                data: data['bandung_daily']
            },{
                name: 'Indramayu',
                data: data['indramayu_daily']
            }]
        });
    });
}