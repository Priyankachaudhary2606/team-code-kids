$('#committee-graphs').ready(function(){


$.getJSON(baseUrl+'grievance/committee/graph', function(data) {
    //top5_institute
Highcharts.chart('committee-top5_institute', {
    chart: {
        type: 'column'
    },
    title: {
        text:'Top 5 Course Wise Grievance registered'
    },
    xAxis: {
        categories:data.message.course,
        title: {
            text: 'Courses'
        },
        labels: {
            style: {
                textTransform:'capitalize'
            }
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Grievance Count'
        },
        stackLabels: {
            enabled: true,
            style: {
                fontWeight: 'bold',
                color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
            }
        }
    },
    legend: {
        align: 'right',
        layout: 'vertical',
        verticalAlign: 'top',
        x: -20,
        y: 60,
        floating:true,
        backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
        borderColor: '#CCC',
        borderWidth: 1,
        shadow: false
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {

            dataLabels: {
                enabled: false,
                color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
            }
        }
    },
    credits: {
        enabled: false
    },
    series:data.message.all_data,
    exporting: {
  buttons: {
    contextButton: {
      menuItems: Highcharts.getOptions().exporting.buttons.contextButton.menuItems.filter(item => item !== 'openInCloud')
    }
  }
}
});
});

// grievance_yearwise
$.getJSON(baseUrl+'grievance/committee/year', function(data) {
Highcharts.chart('committee-grievance_yearwise', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Yearwise filled Grievances'
    },
    xAxis: {
        categories: data.year,
        title: {
            text: 'Year'
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Grievance Count'
        },
        stackLabels: {
            enabled: true,
            style: {
                fontWeight: 'bold',
                color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
            }
        }
    },
    
    tooltip: {
        headerFormat: '<b>{point.x}</b><br/>',
        pointFormat: '{series.name}: {point.y}'
    },
    plotOptions: {
        column: {
            stacking: 'normal',
            dataLabels: {
                enabled: false,
                color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
            }
        }
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Filled Grievance',
        data: data.count
    }]
});
});

});
// jquery end
