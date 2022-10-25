@extends('layouts.app')

@section('content')
<style>
.highcharts-figure,
.highcharts-data-table table {
  min-width: 100%;
  max-width: 100%;
  margin: 1em auto;
}

#container {
  height: 400px;
}

.highcharts-data-table table {
  font-family: Verdana, sans-serif;
  border-collapse: collapse;
  border: 1px solid #ebebeb;
  margin: 10px auto;
  text-align: center;
  width: 100%;
  max-width: 100%;
}

.highcharts-data-table caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}

.highcharts-data-table th {
  font-weight: 600;
  padding: 0.5em;
}

.highcharts-data-table td,
.highcharts-data-table th,
.highcharts-data-table caption {
  padding: 0.5em;
}

.highcharts-data-table thead tr,
.highcharts-data-table tr:nth-child(even) {
  background: #f8f8f8;
}

.highcharts-data-table tr:hover {
  background: #f1f7ff;
}
  </style>
    <script src="https://www.highcharts.com/blog/wp-includes/js/jquery/jquery.js"></script>
    <script src="https://www.highcharts.com/blog/wp-includes/js/jquery/jquery-migrate.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <figure class="highcharts-figure">
  <div id="containernya"></div>
  
</figure>
<script>
Highcharts.chart('containernya', {
  chart: {
    type: 'column'
  },
  title: {
    text: 'Grafik ASET'
  },
  subtitle: {
    text: 'DINAS PEMADAM KEBAKARAN KABUPATEN GARUT'
  },
  xAxis: {
    categories: [
      'Kendaraan',
      'Bangunan',
      'Peralatan',
      'Lainnya'
    ],
    crosshair: true
  },
  yAxis: {
    min: 0,
    title: {
      text: 'jumlah'
    }
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
      pointPadding: 0.2,
      borderWidth: 0
    }
  },
  series: [{
    name: 'Baik',
    data: [ {{$kendaraans}},{{$bangunans}}, {{$peralatans}}, {{$lainnya}}]

  }, {
    name: 'Rusak',
    data: [ {{$kendaraans1}},{{$bangunans1}}, {{$peralatans1}}, {{$lainnya1}}]

  }]
});
</script>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
