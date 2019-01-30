<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body bgcolor="#E6E6FA"> 

       <h1>Project Dashboard</h1>

@foreach ($project as $project)
<li> {{$project->Project_name}}</li>
@endforeach
</body>
</html>