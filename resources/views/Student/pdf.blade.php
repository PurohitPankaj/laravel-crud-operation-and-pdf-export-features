<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>{{$student->name}}</title>

    <!-- Bootstrap -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    {{-- <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--> --}}
    <style>
        .header-wrapper{
            text-align: center;
            margin: 10px;
            align-content: center;
            padding-bottom: 30px;
        }
    .footer-wrapper{
        position: absolute;
        bottom:0;
        text-align:center;
    }
    </style>
  </head>
  <body>
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <center>
            <div class="header-wraper center">
                <img src="https://corporatecoders.com/wp-content/uploads/2018/05/logo.jpg" alt="NoLogo Available" class="logo">
                <p class="address">My Company Addres Goes Down</p>
            </div>
        </center>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Student Name</th> 
                        <th style="text-align:right;">Amount</th>        
                    </tr>
                </thead>
                <tbody>
                        <tr><td>{{$student->name}}</td>
                        <td  style="text-align:right;" >{{'$'. $student->amount}}</td>   
                        </tr>                         
                </tbody>
            </table>
        </div>
    </div>
    {{-- Footer Wrapper --}}
    <div class="footer-wrapper">
        <p class="address">Footer Addres is Important so goes down</p>
    </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
</script>
  </body>
</html>