$(function () {
  $('#container').highcharts({
      chart: {
          type: 'spline'
      },
      title: {
          text: '尊嘉资产'
      },
      subtitle: {
          text: '指数'
      },
      xAxis: {
          type: 'datetime'
      },
      yAxis: {
          title: {
              text: '累计净收益率 %'
          },
          min: 0,
          minorGridLineWidth: 0,
          gridLineWidth: 0,
          alternateGridColor: null,
          /*plotBands: [{ // Light air
              from: 0.3,
              to: 1.5,
              color: 'rgba(68, 170, 213, 0.1)',
              label: {
                  text: 'Light air',
                  style: {
                      color: '#606060'
                  }
              }
          }, { // Light breeze
              from: 1.5,
              to: 3.3,
              color: 'rgba(0, 0, 0, 0)',
              label: {
                  text: 'Light breeze',
                  style: {
                      color: '#606060'
                  }
              }
          }, { // Gentle breeze
              from: 3.3,
              to: 5.5,
              color: 'rgba(68, 170, 213, 0.1)',
              label: {
                  text: 'Gentle breeze',
                  style: {
                      color: '#606060'
                  }
              }
          }, { // Moderate breeze
              from: 5.5,
              to: 8,
              color: 'rgba(0, 0, 0, 0)',
              label: {
                  text: 'Moderate breeze',
                  style: {
                      color: '#606060'
                  }
              }
          }, { // Fresh breeze
              from: 8,
              to: 11,
              color: 'rgba(68, 170, 213, 0.1)',
              label: {
                  text: 'Fresh breeze',
                  style: {
                      color: '#606060'
                  }
              }
          }, { // Strong breeze
              from: 11,
              to: 14,
              color: 'rgba(0, 0, 0, 0)',
              label: {
                  text: 'Strong breeze',
                  style: {
                      color: '#606060'
                  }
              }
          }, { // High wind
              from: 14,
              to: 15,
              color: 'rgba(68, 170, 213, 0.1)',
              label: {
                  text: 'High wind',
                  style: {
                      color: '#606060'
                  }
              }
          }]*/
      },
      tooltip: {
          valueSuffix: ' %'
      },
      plotOptions: {
          spline: {
              lineWidth: 4,
              states: {
                  hover: {
                      lineWidth: 5
                  }
              },
              marker: {
                  enabled: false
              },
            //  pointInterval: 3600000, // one hour
             // pointStart: Date.UTC(1, 9, 6, 0, 0, 0)
          }
      },
      series: [{
          name: '泸深300',
          data: [4.3, 5.1, 4.3, 5.2, 5.4, 4.7, 3.5, 4.1, 5.6, 7.4, 6.9, 7.1,
              7.9, 7.9, 7.5, 6.7, 7.7, 7.7, 7.4, 7.0, 7.1, 5.8, 5.9, 7.4,
              8.2, 8.5, 9.4, 8.1, 10.9, 10.4, 10.9, 12.4, 12.1, 9.5, 7.5,
              7.1, 7.5, 8.1, 6.8, 3.4, 2.1, 1.9, 2.8, 2.9, 1.3, 4.4, 4.2,
              3.0, 3.0]

      }, {
          name: '尊嘉',
          data: [0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.1, 0.0, 0.3, 0.0,
              0.0, 0.4, 0.0, 0.1, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0,
              0.0, 0.6, 1.2, 1.7, 0.7, 2.9, 4.1, 2.6, 3.7, 3.9, 1.7, 2.3,
              3.0, 3.3, 4.8, 5.0, 4.8, 5.0, 3.2, 2.0, 0.9, 0.4, 0.3, 0.5, 0.4]
      }]
      ,
      navigation: {
          menuItemStyle: {
              fontSize: '10px'
          }
      }
  });
});