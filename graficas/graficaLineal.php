        <!DOCTYPE html>

        <?php
        session_start();
        if (@!$_SESSION['nombre']) {
            header("Location:index.php");
        }elseif (@$_SESSION['rol']==13) {
            header("Location:index2.php");
        }
        ?>

        <html lang="en">
          <head>
            <meta charset="utf-8">
            <title>Juan XXIII</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="./../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
            <link rel="stylesheet" type="text/css" href="./../css/style.css">
            <link rel="stylesheet" type="text/css" href="./../datatable/datatables.min.css">
            <link rel="stylesheet" type="text/css" href="./../datatable/DataTables-1.10.23/css/dataTables.bootstrap4.min.css">
            <link rel="stylesheet" type="text/css" href="./../bootstrap/js/main.js">
            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
            <script src='https://cdn.plot.ly/plotly-latest.min.js'></script>

          </head>
        <body data-offset="40" background="./../images/fondotot.jpg" style="background-attachment: fixed">
    <style type="text/css">
.botVot{
    font-family: Courier New; 
    color: rgba(248,80,50,1); 
    font-size: 50px;

}
.btn{
  position: relative;
  display: flex;
  color: grey;
  font-size: 20px;
  font-family: "Courier New";
  text-decoration: none;
  margin: 30px 0;
  border: 2px;
  padding: 5px 30px;
  text-transform: uppercase;
  overflow: hidden;
  transition: 1s all ease;
}

.btn2::before{
  width: 50%;
  height: 0%;
}
.btn2:hover::before{
  height: 100%;
}

#fuente{
    font-family: Agency FB;
    text-align: center;
    font-size: 20px;
    height: 45px;
    vertical-align:middle; 
    text-align:center
}

#fuente2{
    font-family: Courier;
    text-align: center;
    font-size: 18px;
    height: 40px;
}
#fuente3{
    color: red;
    font-family: Courier;
    text-align: center;
    font-size: 18px;
    height: 40px;
}
#new{
    background-color: rgba(104,166,213,0.4);
}
#new:hover{
    text-transform: rgba(104,166,213,0.4);
}
.encabezado{
    font-family: Courier New;
    font-size: 19px;margin-top: 10px;
    vertical-align:middle;
}
#foot{
    font-family: Arial Narrow;
    font-size: 20px;
}
.nav > li {
    float:left;
}
            ul, ol {
                list-style:none;
            }
.nav li a {
    background: rgba(255,255,255,1);
    color: #fffefe;
    text-decoration:none;
    padding:10px 12px;
    display:block;
}
.nav li a:hover {
    background-color:#f5f5f5;
}
.nav li ul {
    display:none;
    position:absolute;
    min-width:140px;
}
.nav li:hover > ul {
    display:block;
}
</style>

        <div class="container">
        <header class="header">
        <div class="row">
        <h1 style="font-family: Courier New; font-size: 60px; text-align: center;">PORTAL DE VOTACIONES</h1>
        <!--<img src="images/logo.png" width="15%" height="15%" align="right"> -->
        </div>
        </header>

          <!-- Navbar
            ================================================== -->

  <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <div class="nav-collapse">
                <ul class="nav">
                    <li class=""><a href="./../administrador.php" class="encabezado"><strong>INICIO</strong> </a></li>
                        <li><a href="" class="encabezado">Encuestas</a></li>
                        <li><a href="./../tablaVotacion.php" class="encabezado">Votaciones</a></li>
                        <li><a href="" class="encabezado">Registros</a>
                    <ul>
                        <li><a href="./../agregarUsuarios.php" class="encabezado" style="color: grey;">Usuarios</a></li>
                        <li><a href="./../tablaVotacion.php" class="encabezado" style="color: grey;">Candidatos</a></li>
                    </ul>
                </li>
                     
            
                </ul>
                <form action="#" class="navbar-search form-inline" style="margin-top:6px">
                
                </form>
                <ul class="nav pull-right">
                <li><a href="" class="encabezado">User <strong><?php echo $_SESSION['nombre'];?></strong> </a></li>
                <li><a href="./../desconectar.php" class="encabezado" style="color: red;"><strong>SALIR</strong>  </a></li>           
                </ul>
              </div><!-- /.nav-collapse -->
            </div>
          </div><!-- /navbar-inner -->
        </div>

        <!-- ======================================================================================================================== -->
        <div class="row">
            
            
                
            <div class="span12">

                <div class="caption">
                
        <!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
                   
                <div class="well well-small">
                <hr class="soft"/>
                <h2 align="center" class="botVot">Gr&aacute;ficas De Resultados</h2>
                <center class = "btn">
                    <a class="btn btn2" href="./../generarGrafica.php">VISTA CIRCULAR</a>
                    <a class="btn btn2" href="graficaHorizontal.php">VISTA HORIZONTAL</a>
                    <a class="btn btn2" href="graficaVertical.php">VISTA VERTICAL</a>
                    <a class="btn btn2" href="./../tablaResult.php">VOLVER</a>
                </center>
                <hr>
                <div class="row-fluid" id="example">
                        
        <style type="text/css">
            .highcharts-figure, .highcharts-data-table table {
                min-width: 360px; 
                max-width: 800px;
                margin: 1em auto;
            }

            .highcharts-data-table table {
                font-family: Verdana, sans-serif;
                border-collapse: collapse;
                border: 1px solid #EBEBEB;
                margin: 10px auto;
                text-align: center;
                width: 100%;
                max-width: 500px;
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
            .highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
                padding: 0.5em;
            }
            .highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
                background: #f8f8f8;
            }
            .highcharts-data-table tr:hover {
                background: #f1f7ff;
            }

        </style>
            </head>
            <body>
        <script src="./../librerias/highChart/code/highcharts.js"></script>
        <script src="../../librerias/highChart/code/modules/data.js"></script>
        <script src="../../librerias/highChart/code/modules/series-label.js"></script>
        <script src="./../librerias/highChart/code/modules/exporting.js"></script>
        <script src="./../librerias/highChart/code/modules/export-data.js"></script>
        <script src="./../librerias/highChart/code/modules/accessibility.js"></script>

        <figure class="highcharts-figure">
            <div id="container"></div>
        </figure>



                        <script type="text/javascript">
// Create the chart
Highcharts.chart('container', {

    title: {
        text: 'VISTA LINEAL DE RESULTADOS'
    },
    yAxis: {
        title: {
            text: 'Votos'
        }
    },

    xAxis: {
        type: 'category'
    },

    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },
    plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            },
            pointStart: 2010
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> Votos<br/>'
    },
    series: [{
        name: 'Candidato',
        data: [
                <?php
            include './../conexion.php';

            $sql = "SELECT * FROM candidatos"; 
            $ressql = mysqli_query($mysqli,$sql);

            while ($rows = mysqli_fetch_row ($ressql)){?>
                    ['<?php echo $rows[2]?>', <?php echo $rows[6]?>],
                <?php
                } 
                ?>
        ]
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                }
            }
        }]
    }

});
        </script>
                <div class="span8"></div>
            </div>

                    
            <br/>
                
            </div>

                


                

        <!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
        </div>

            </div>
        </div>

        <!-- Footer
              ================================================== -->
        <hr class="soften"/>
        <footer class="footer">
        <br><br>
<footer class="content-foo text-light">
        <div class="container">
    
            <div id="course-footer"></div>
    
            <div class="row">
    
                    <div class="col-md-8">
                        
    
                        <div class="logininfo" id="foot">Usted se ha identificado como <strong><?php echo $_SESSION['nombre'];?></strong></div>
    
                        <div class="homelink"><a href="./../index.php" id="foot">Incio</a></div>
    
    
                    </div>
    
                    <div class="col-md-4">
                        <div class="brandbox">

                        </div>
                    </div>
    
            </div>
            
        <p id="foot">Cooperativa Juan XXIII</p> 
        <p id="foot">(507) 998-4575, 998-3700, 959-7146, 958-9297</p>
        <a href="https://www.juan-xxiii.com/" id="foot">P&aacute;gina Principal</a>
            
    </footer>
            <hr>
        </div><!-- /container -->

            <!-- Javascript
            ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="./../bootstrap/js/jquery-1.8.3.min.js"></script>
            <script src="./../bootstrap/js/bootstrap.min.js"></script>
            <!--datatable .js-->
            <script type="text/javascript" src="./../datatable/datatables.min.js"></script>
            <!--Botones con datatables JS-->
            <script type="text/javascript" src="./../datatable/Buttons-1.6.5/js/dataTables.buttons.min.js"></script>
            <script type="text/javascript" src="./../datatable/JSZip-2.5.0/jszip.min.js"></script>
            <script type="text/javascript" src="./../datatable/pdfmake-0.1.36/pdfmake.min.js"></script>
            <script type="text/javascript" src="./../datatable/pdfmake-0.1.36/vfs_fonts.js"></script>
            <script type="text/javascript" src="./../datatable/Buttons-1.6.5/js/buttons.html5.min.js"></script>
            </style>
          </body>
        </html>