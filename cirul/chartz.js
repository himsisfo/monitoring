/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(function(){
    
});

$(function () {

    var colors = Highcharts.getOptions().colors,
        categories = ['Cirebon'],
        data = [{
            color: colors[3],
            drilldown: {
                name: 'Cirebon',
                categories: ['Progres Cacah', 'Sisa Cacah'],
                data: [1234, 2223],
                color: colors[3]
            }
        }],
        kabData = [],
        respondenData = [],
        i,
        j,
        dataLen = data.length,
        drillDataLen,
        brightness,
        jumlah = 0;


    // Build the data arrays
    for (i = 0; i < dataLen; i += 1) {
        // add total
        drillDataLen = data[i].drilldown.data.length;
        for (j = 0; j < drillDataLen ; j += 1) {
            brightness = 0.2 - ( (drillDataLen-j-1) / drillDataLen) / 5;
            jumlah += data[i].drilldown.data[j],
            respondenData.push({
                name: data[i].drilldown.categories[j],
                y: data[i].drilldown.data[j],
                color: Highcharts.Color(data[i].color).brighten(brightness).get()
            });
        }
        // add Kab/Kota
        kabData.push({
            name: categories[i],
            y: jumlah,
            color: data[i].color
        });
    }

    // Create the chart
    $('#cirebon').highcharts({
        chart: {
            type: 'pie'
        },
        title: {
            text: 'Progres Pencacahan'
        },
        yAxis: {
            title: {
                text: 'Persentase pencacahan'
            }
        },
        plotOptions: {
            pie: {
                shadow: false,
                center: ['50%', '50%']
            }
        },
        tooltip: {
            valueSuffix: ' responden'
        },
        series: [{
            name: 'Beban Cacah',
            data: kabData,
            size: '60%',
            dataLabels: {
                formatter: function(){
                    return this.point.name;
                },
                color: 'white',
                distance: -30
            }
        }, {
            name: 'Total',
            data: respondenData,
            size: '80%',
            innerSize: '60%',
            dataLabels: {
                formatter: function () {
                    // display only if larger than 1
                    return this.y > 0 ? '<b>' + this.point.name + ':</b> ' + (this.y*100/jumlah).toFixed(2) + '%'  : null;
                }
            }
        }]
    });
});

$(function () {

    var colors = Highcharts.getOptions().colors,
        categories = ['Sukabumi'],
        data = [{
            color: colors[2],
            drilldown: {
                name: 'Sukabumi',
                categories: ['Progres Cacah', 'Sisa Cacah'],
                data: [134, 2233],
                color: colors[2]
            }
        }],
        kabData = [],
        respondenData = [],
        i,
        j,
        dataLen = data.length,
        drillDataLen,
        brightness,
        jumlah = 0;


    // Build the data arrays
    for (i = 0; i < dataLen; i += 1) {
        // add total
        drillDataLen = data[i].drilldown.data.length;
        for (j = 0; j < drillDataLen ; j += 1) {
            brightness = 0.2 - ( (drillDataLen-j-1) / drillDataLen) / 5;
            jumlah += data[i].drilldown.data[j],
            respondenData.push({
                name: data[i].drilldown.categories[j],
                y: data[i].drilldown.data[j],
                color: Highcharts.Color(data[i].color).brighten(brightness).get()
            });
        }
        // add Kab/Kota
        kabData.push({
            name: categories[i],
            y: jumlah,
            color: data[i].color
        });
    }

    // Create the chart
    $('#sukabumi').highcharts({
        chart: {
            type: 'pie'
        },
        title: {
            text: 'Progres Pencacahan'
        },
        yAxis: {
            title: {
                text: 'Persentase pencacahan'
            }
        },
        plotOptions: {
            pie: {
                shadow: false,
                center: ['50%', '50%']
            }
        },
        tooltip: {
            valueSuffix: ' responden'
        },
        series: [{
            name: 'Beban Cacah',
            data: kabData,
            size: '60%',
            dataLabels: {
                formatter: function(){
                    return this.point.name;
                },
                color: 'white',
                distance: -30
            }
        }, {
            name: 'Total',
            data: respondenData,
            size: '80%',
            innerSize: '60%',
            dataLabels: {
                formatter: function () {
                    // display only if larger than 1
                    return this.y > 0 ? '<b>' + this.point.name + ':</b> ' + (this.y*100/jumlah).toFixed(2) + '%'  : null;
                }
            }
        }]
    });
});

$(function () {

    var colors = Highcharts.getOptions().colors,
        categories = ['Indramayu'],
        data = [{
            color: colors[6],
            drilldown: {
                name: 'Indramayu',
                categories: ['Progres Cacah', 'Sisa Cacah'],
                data: [1234, 2232],
                color: colors[6]
            }
        }],
        kabData = [],
        respondenData = [],
        i,
        j,
        dataLen = data.length,
        drillDataLen,
        brightness,
        jumlah = 0;


    // Build the data arrays
    for (i = 0; i < dataLen; i += 1) {
        // add total
        drillDataLen = data[i].drilldown.data.length;
        for (j = 0; j < drillDataLen ; j += 1) {
            brightness = 0.2 - ( (drillDataLen-j-1) / drillDataLen) / 5;
            jumlah += data[i].drilldown.data[j],
            respondenData.push({
                name: data[i].drilldown.categories[j],
                y: data[i].drilldown.data[j],
                color: Highcharts.Color(data[i].color).brighten(brightness).get()
            });
        }
        // add Kab/Kota
        kabData.push({
            name: categories[i],
            y: jumlah,
            color: data[i].color
        });
    }

    // Create the chart
    $('#indramayu').highcharts({
        chart: {
            type: 'pie'
        },
        title: {
            text: 'Progres Pencacahan'
        },
        yAxis: {
            title: {
                text: 'Persentase pencacahan'
            }
        },
        plotOptions: {
            pie: {
                shadow: false,
                center: ['50%', '50%']
            }
        },
        tooltip: {
            valueSuffix: ' responden'
        },
        series: [{
            name: 'Beban Cacah',
            data: kabData,
            size: '60%',
            dataLabels: {
                formatter: function(){
                    return this.point.name;
                },
                color: 'white',
                distance: -30
            }
        }, {
            name: 'Total',
            data: respondenData,
            size: '80%',
            innerSize: '60%',
            dataLabels: {
                formatter: function () {
                    // display only if larger than 1
                    return this.y > 0 ? '<b>' + this.point.name + ':</b> ' + (this.y*100/jumlah).toFixed(2) + '%'  : null;
                }
            }
        }]
    });
});

$(function () {

    var colors = Highcharts.getOptions().colors,
        categories = ['Kota Bandung'],
        data = [{
            color: colors[0],
            drilldown: {
                name: 'Kota Bandung',
                categories: ['Progres Cacah', 'Sisa Cacah'],
                data: [1234, 223],
                color: colors[0]
            }
        }],
        kabData = [],
        respondenData = [],
        i,
        j,
        dataLen = data.length,
        drillDataLen,
        brightness,
        jumlah = 0;


    // Build the data arrays
    for (i = 0; i < dataLen; i += 1) {
        // add total
        drillDataLen = data[i].drilldown.data.length;
        for (j = 0; j < drillDataLen ; j += 1) {
            brightness = 0.2 - ( (drillDataLen-j-1) / drillDataLen) / 5;
            jumlah += data[i].drilldown.data[j],
            respondenData.push({
                name: data[i].drilldown.categories[j],
                y: data[i].drilldown.data[j],
                color: Highcharts.Color(data[i].color).brighten(brightness).get()
            });
        }
        // add Kab/Kota
        kabData.push({
            name: categories[i],
            y: jumlah,
            color: data[i].color
        });
    }

    // Create the chart
    $('#bandung').highcharts({
        chart: {
            type: 'pie'
        },
        title: {
            text: 'Progres Pencacahan'
        },
        yAxis: {
            title: {
                text: 'Persentase pencacahan'
            }
        },
        plotOptions: {
            pie: {
                shadow: false,
                center: ['50%', '50%']
            }
        },
        tooltip: {
            valueSuffix: ' responden'
        },
        series: [{
            name: 'Beban Cacah',
            data: kabData,
            size: '60%',
            dataLabels: {
                formatter: function(){
                    return this.point.name;
                },
                color: 'white',
                distance: -30
            }
        }, {
            name: 'Total',
            data: respondenData,
            size: '80%',
            innerSize: '60%',
            dataLabels: {
                formatter: function () {
                    // display only if larger than 1
                    return this.y > 0 ? '<b>' + this.point.name + ':</b> ' + (this.y*100/jumlah).toFixed(2) + '%'  : null;
                }
            }
        }]
    });
});

