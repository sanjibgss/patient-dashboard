<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
      ["Days", "Patients", { role: "style" } ],
      ["Monday", 54, "#b87333"],
      ["Tuesday", 10, "silver"],
      ["Wednesday",30, "gold"],
      ["Thursday", 21, "red"],
      ["Friday", 45, "blue"],
      ["Saturday", 15, "green"],
      ["Sunday", 75, "orange"]
      ]);
      /*var datos="<?php $arr ?>";
      var data=  google.visualization.arrayToDataTable(JSON.parse(datos));*/

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Patients_per_day",
        titleFontSize:20,
        width: 1000,
        height: 400,
        bar: {groupWidth: "75%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
<div id="columnchart_values" style="width: 900px; height: 300px;"></div>
