$(function () {
    Highcharts.chart('user-activity', {
        title: {
            text: 'User Engagement',
            x: -20 //center
        },
        subtitle: {
            text: 'Based on comments and logins',
            x: -20
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'Number in 100'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: ' hundred users'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Uganda',
            data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
        }, {
            name: 'Kenya',
            data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]
        },]
    });
});


$(function () {
    Highcharts.chart('user-by-country', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Total registered users'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: 'Users',
            colorByPoint: true,
            data: [{
                name: 'Uganda',
                y: 56.33
            }, {
                name: 'Kenya',
                y: 24.03,
            },]
        }]
    });
});

$('#post_comment').on('click', function (e) {

    if (confirm("Are you sure you want to add this comment!") == true) {
        $.ajax
        ({
            url: '/comment',
            type: 'post',
            data:{
                "_token": $('#token').val(),
                "content": $('#comment').val(),
                "discussion_id": $('#discussion_id').val()
            },
            success: function ($data) {
                $('#comment').val('');
                location.reload();
            }
        });

    } else {

    }

})