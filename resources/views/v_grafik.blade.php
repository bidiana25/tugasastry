@extends('layout.v_template')

@section('content')

<!-- Bar Chart -->
<script>
    window.onload = function () {
    
    var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        theme: "light2", // "light1", "light2", "dark1", "dark2"
        title:{
            text: "GRAFIK"
        },
        axisY: {
            title: "Jumlah Mahasiswa"
        },
        data: [{        
            type: "column",  
            showInLegend: true, 
            legendMarkerColor: "grey",
            legendText: "Nama Matkul",
            dataPoints: <?php echo json_encode($data, JSON_NUMERIC_CHECK); ?>
        }]
    });
    chart.render();
    
    }
    </script>
    </head>
    <body>
    <div id="chartContainer" style="height: 300px; width: 100%;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


@endsection