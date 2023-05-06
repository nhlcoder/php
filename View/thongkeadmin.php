<script type="text/javascript">
   google.load('visualization', '1.0', {
     'packages': ['corechart']
   });
   google.setOnLoadCallback(drawVisualization);

   function drawVisualization() {
     //thống kê số lượng bán hàng theo mặt hàng vẽ bieu do tron
     //tạo bảng
     var data=new google.visualization.DataTable();
     var tenhh=new Array();
     var soluongban=new Array();
     var datathh=0;
     var slb=0;
     var rows=new Array();
     //+dòng
     //lấy dữ liệu từ thống kê trên database
     <?php
        $hh=new iPhone();
        $result=$hh->getThongKeMatHang();
        // $result=$hh->getThongKeTheoNgay();
        while($set=$result->fetch())
        {
          $tenhh=$set['tenhh'];
          $soluong=$set['soluong'];
          echo "tenhh.push('".$tenhh."');";
          echo "soluongban.push('".$soluong."');";
        }
     ?>
     //tạo ra dòng
     for(var i=0;i<tenhh.length;i++)
     {
      datathh=tenhh[i];
      slb=parseInt(soluongban[i]);
      rows.push([datathh,slb]);
     }
     //+cột
     data.addColumn('string', "Tên hàng hóa");
     data.addColumn('number', "Số lượng bán");
     data.addRows(rows);
     //option
     var option={
      title:'Thống kê số lượng bán',
      'width':600,
      'height':400,
      'backgroundColor':'#ffffff',
      is3D:true
     };
     //tiến hành vẽ khi có database và option Pie, column, Line, Bar
     var chart=new google.visualization.PieChart(document.getElementById('chart_div'));
     chart.draw(data,option);
   }
 </script>