<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email Address</th>
        <th scope="col">Profile</th>
        </tr>
    </thead>
    <tbody>
    @if (count($members)>0)
    @foreach ($members as $member)
    <tr>
        <th scope="row">{{$member->id}}</th>
        <td>{{$member->name}}</td>
        <td>{{$member->email}}</td>
        <td>{{$member->profile}}</td>
    </tr>
    @endforeach    
    @else
    <tr>
        <td colspan="4"> Data Not Found</td>
    </tr>       
    @endif
        
    </tbody>
    </table>
</div>


    
</body>
</html>