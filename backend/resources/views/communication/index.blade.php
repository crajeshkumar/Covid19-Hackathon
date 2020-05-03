<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <blockquote class="blockquote text-center">
        <p class="mb-0">Important contact details</p>
        <footer class="blockquote-footer">In Assam <cite title="Source Title">For Hakathom</cite></footer>
      </blockquote>
    <table class="table table-hover table-dark" style="width: 70%;margin-left:15%;">
        <thead>
          <tr>
            <th scope="col">S.No</th>
            <th scope="col">District Name</th>
            <th scope="col">Contact Number</th>
          </tr>
        </thead>
        <tbody>
            @if(count($data)>1)
                @foreach ($data as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->district}}</td>
                    <td><a class="" href="tel:{{$item->contactnumber}}">{{$item->contactnumber}}</a></td>
                  </tr>
                @endforeach
            @else
                <p>No numbers added in database</p>
            @endif          
        </tbody>
      </table>
</body>
</html>