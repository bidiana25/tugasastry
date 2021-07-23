@extends('layout.v_template')

@section('content')

<!-- Bar Chart -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Chart</h6>
    </div>
    <div class="card-body">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
        <body>
        
        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
        
        <script>
        var xValues = <?php echo json_encode($data) ?>;
        var yValues = [55, 49, 44, 24, 15];
        var barColors = ["red", "green","blue","orange","brown"];
        
        new Chart("myChart", {
          type: "bar",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            legend: {display: false},
            title: {
              display: true,
              text: "Grafik"
            }
          }
        });
        </script>
    </div>
</div>


@endsection