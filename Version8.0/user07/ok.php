<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BUTTONS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
            background-color:aqua;
            
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
        td {
            color: black;
            background-color: white;
        }
        .table{
            background-color:darkblue;
            color: white;
        }
        h2 {
            color: white;
            background-color:darkblue;
        }
        body {
            background-color: aliceblue;
        }
        
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
    
</head>
<body>
    
    
    
    
    
    
    
    
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">

      <div class="container">

        <div class="navbar-header">

          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

            <span class="sr-only">Toggle navigation</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

          </button>

          

        </div>

        <div class="collapse navbar-collapse">

           <ul class="nav navbar-nav">
               
            
            <li><a href="index.html">Home</a></li>
               
            <li><a href="aboutme07.html">About Me</a></li>

            <li><a href="music07.html">Table</a></li>

            <li><a href="lists.html">Lists</a></li>
            
            <li><a href="faq07.html">FAQ</a></li>
               
            <li><a href='games.html'>Games</a></li>
               
            <li class='active'><a href='notindex.php'>Friends</a></li>
               
            <li><a href='weather.php'>Weather</a></li>
               
               
          </ul>

        </div>

      </div>

    </div>
    
    <br><br><br><br>

    
    
    
   
    
    
    
    
    
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-center" style="color='white'"><center>Are you ok?</center></h2>
                        <br><br>
                        <a href="notindex.php" class="btn btn-primary pull-left">Yes</a>
                        <a href="no.php" class="btn btn-primary pull-right">No</a>

                    </div>
                  
                </div>
            </div>        
        </div>
    </div>
    
    
</body>
</html>