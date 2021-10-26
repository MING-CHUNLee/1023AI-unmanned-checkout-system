@extends('layouts.app')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>




<div class="row">
    <div class="col-xl-6 col-md-12">
        <div class="card bg-success text-white mb-4">
            <div class="card-header">
                <i class="fas fa-chart-area me-1"></i>
                販賣數量正確
            </div>
            <div class="card-body">
                <span class="text-white" style="height=40">30份</span>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-md-12">
        <div class="card bg-danger text-white mb-4">
            <div class="card-header">
                <i class="fas fa-chart-area me-1"></i>
                販賣數量有誤
            </div>
            <div class="card-body">
                <span class="text-white" style="height=40">10份</span>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-6">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-chart-area me-1"></i>
                月銷量
            </div>
            <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-chart-bar me-1"></i>
                熱門菜品
            </div>
            <div class="card-body"><canvas id="myChart" width="100%" height="40"></canvas></div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-12">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-chart-area me-1"></i>
                平均來店人數
            </div>
            <div class="card-body"><canvas id="mixedChart" width="100%" height="40"></canvas></div>
        </div>
    </div>
</div>

    <h2>交易紀錄</h2>


    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">交易日期</th>
            <th scope="col">裝置ID</th>
            <th scope="col">交易金額</th>
            <th scope="col">交易狀態</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">2021-10-24 12:00:22(GMT+08.00)</th>
                <td>237458916</td>
                <td>90</td>
                <td>成功</td>
            
            </tr>
            <tr>
                <th scope="row">2021-10-24 11:40:24(GMT+08.00)</th>
                <td>237458916</td>
                <td>90</td>
                <td>成功</td>
            
            </tr>
            <tr>
            <th scope="row">2021-10-23 12:08:54(GMT+08.00)</th>
            <td>789456123</td>
            <td>180</td>
            <td>成功</td>
            </tr>
            <tr>
                <th scope="row">2021-10-23 11:58:04(GMT+08.00)</th>
                <td>712389456</td>
                <td>120</td>
                <td>成功</td>
            
            </tr>
            <tr>
                <th scope="row">2021-10-23 11:45:24(GMT+08.00)</th>
                <td>789123456</td>
                <td>80</td>
                <td>成功</td>
            
            </tr>

          </tbody>
      </table>

<script>
    // 第一個
// setup
const data = {
  labels: [
  '10/18',
  '10/19',
  '10/20',
  '10/21',
  '10/22',
  '10/23',
],
  datasets: [{
    label: 'My First dataset',
    backgroundColor: 'rgb(255, 99, 132)',
    borderColor: 'rgb(255, 99, 132)',
    data: [50, 60, 35, 55, 42, 77, 65],
  }]
};
const data2 = {
    labels: ['炸雞腿', '炒高麗菜', '京醬肉絲', '炒空心菜', '洋蔥炒蛋', '紅燒茄子'],
        datasets: [{
            label: '# of Sale',
            data: [48, 45, 34, 20, 41, 30],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
};


const data3 = {
  labels: [
    '六月',
    '七月',
    '八月',
    '九月'
  ],
  datasets: [{
    type: 'bar',
    label: 'Bar Dataset',
    data: [100, 70, 30, 40],
    borderColor: 'rgba(255, 159, 64, 0.3)',
    backgroundColor: 'rgba(255, 159, 64, 0.3)'
  }, {
    type: 'line',
    label: 'Line Dataset',
    data: [90, 45, 20,15],
    fill: false,
    borderColor: 'rgba(75, 192, 192, 1)'
  }]
};

  // config'
  const config = {
  type: 'line',
  data: data,
  options: {}
};

const config2 = {
  type: 'bar',
  data: data2,
  options: {  scales: {
            y: {
                beginAtZero: true
            }
        }}
};

const config3 = {
  type: 'scatter',
  data: data3,
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
};

//render
var myAreaChart = new Chart(
    document.getElementById('myAreaChart'),
    config
);

var myChart = new Chart(
    document.getElementById('myChart'),
    config2
);

var mixedChart = new Chart(
    document.getElementById('mixedChart'),
    config3
);
</script>


<script src="{{asset('public')}}/assets/demo/chart-area-demo.js"></script>
<script src="{{asset('public')}}/assets/demo/chart-bar-demo.js"></script>
@endsection