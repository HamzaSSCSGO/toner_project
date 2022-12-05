
let tonerProd= JSON.parse(window.tonerProd);
let tonerAdmin= JSON.parse(window.tonerAdmin);
var myResult = JSON.parse(window.count);

console.log(tonerProd);
// console.log(tonerAdmin);
/* console.log(myResult); */
/* let months=[];
let prodCount=[];
let adminCount=[]; */
let tonProd = []
let tonAdmin = []
let monthyear = []
let admNum = []
let prodNum = []



tonerProd.map((item)=>{
    tonProd.push({num : item.count , date : new Date(item.monthyear)})
    /* tonProd.date.push(new Date(item.monthyear));
    tonProd.num.push(item.count); */
})

tonerAdmin.map((item)=>{
  tonAdmin.push({num : item.count , date : new Date(item.monthyear)})
})
/* tonerProd.map((item)=>{
    tonProd.num.push(item.count);
}) */
/* tonerAdmin.map((item)=>{
    adminCount.push(item.count);
})
 */
/* console.log(tonProd) */

/* console.log(months)
console.log(adminCount)
console.log(prodCount) */

prodSort = tonProd.sort((objA, objB) => Number(objA.date) - Number(objB.date),);
console.log(prodSort)

admSort = tonAdmin.sort((objA, objB) => Number(objA.date) - Number(objB.date),);
console.log(admSort)

prodSort.map((item)=>{
  monthyear.push(item.date.getFullYear() + '-' + (item.date.getMonth() + 1))
})

prodSort.map((item)=>{
  prodNum.push(item.num)
})

admSort.map((item)=>{
  admNum.push(item.num)
})

/* console.log(monthyear) */

    // column chart
    
    var options = {
        series: [{
        name: 'Production',
        data: prodNum
      }, {
        name: 'Administration',
        data: admNum
      } ],
        chart: {
        type: 'bar',
        height: 360
      },
      plotOptions: {
        bar: {
          horizontal: false,
          columnWidth: '55%',
          endingShape: 'rounded'
        },
      },
      dataLabels: {
        enabled: false
      },
      stroke: {
        show: true,
        width: 2,
        colors: ['transparent']
      },
      xaxis: {
        categories: monthyear,
      },
      yaxis: {
        title: {
          text: 'Number of toners'
        }
      },
 
      fill: {
        opacity: 1,
        colors: [vihoAdminConfig.primary, vihoAdminConfig.secondary],
        type: 'gradient',
        gradient: {
            shade: 'light',
            type: 'vertical',
            shadeIntensity: 0.4,
            inverseColors: false,
            opacityFrom: 0.9,
            opacityTo: 0.8,
            stops: [0, 100]
        }
    },  
    colors: [vihoAdminConfig.primary, vihoAdminConfig.secondary],
      tooltip: {
        y: {
          formatter: function (val) {
            return  val + " Toners"
          }
        }
      }
      };

      var chartlinechart4 = new ApexCharts(document.querySelector("#chart-widget4"), options);
      chartlinechart4.render();

    