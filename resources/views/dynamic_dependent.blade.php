
<!DOCTYPE html>
<html>
 <head>
  <title></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
  </style>
 </head>
 <body>
  <br />
  <div class="container box">
   <h3 align="center">Projects Dashboard</h3><br />
   <div class="form-group">
    <select name="Project name" id="country" class="form-control input-lg dynamic" values=" ">
     <option value="">Project name</option>
     @foreach($Project_list as $Project name)
     <option value="{{ $Project name->Project name}}">{{ $Project name->Project name }}</option>
     @endforeach
    </select>
   </div>
    {{ csrf_field() }}
    </body>
</html>
