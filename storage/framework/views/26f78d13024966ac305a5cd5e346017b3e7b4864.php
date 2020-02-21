<?php
$users = DB::table('tamu')->count();
$paket = DB::table('paket')->count();


?> 
 <div class="container-fluid">
                <div class="row">
                    <!-- Stats -->
                    <div class="outer-w3-agile col-xl">
                        
                        <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-info">
                            <div class="s-l">
                                <a href="<?php echo e(url('/tamu')); ?>" style="color: #ffffff;">Jumlah Tamu</a>
                                <p class="paragraph-agileits-w3layouts"></p>
                            </div>
                            <div class="s-r">
                                <h6><?php echo e($users); ?>

                                    <i class="fas fa-users"></i>
                                
                                </h6>
                            </div>
                        </div>
                        <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-info">
                            <div class="s-l">
                                <a href="<?php echo e(url('/paket')); ?>" style="color: #ffffff;">Jumlah Paket</a>
                                <p class="paragraph-agileits-w3layouts"></p>
                            </div>
                            <div class="s-r">
                                <h6><?php echo e($paket); ?>

                                    <i class="fas fa-cubes"></i>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <!--// Stats -->
                
                </div>
            </div>
        
            <!--// Bar-Chart -->
            <div class="outer-w3-agile mt-3">
                <h4 class="tittle-w3-agileits mb-4">Grafik Perbandingan tamu & paket</h4>
                <div id="container"></div>
            </div>
            <!--// Bar-Chart -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
  Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
   
    xAxis: {
        categories: [
            'Januari',
            'Febuari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
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
        name: 'Tamu',
        data: [0, <?php echo e($users); ?>, 0, 0, 0, 0]

    }, {
        name: 'Paket',
        data: [0, <?php echo e($paket); ?>, 0,0, 0, 0]

    }]
});
</script>
<?php /**PATH C:\xampp2\htdocs\bukutamu\resources\views/layouts/grapic.blade.php ENDPATH**/ ?>