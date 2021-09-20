@extends('layouts.app')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h1>Division By Patients Graph</h1>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


<script type="text/javascript">
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart);

  function drawChart() {

    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Divisions');
    data.addColumn('number', 'Patients');
    data.addColumn({type:'number', role:'annotation'});
    data.addColumn({type:'string', role:'style'});
    data.addRows(<?php echo ($data); ?>);



    var options = {

    };

    var chart = new google.visualization.ColumnChart(document.getElementById('columnchart_values'));
    chart.draw(data, options);
  }
</script>
<div id="columnchart_values" style="width: 1000px; height: 500px;"></div>

@endsection
