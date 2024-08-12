<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/icons/font/bootstrap-icons.css') }}" rel="stylesheet">
</head>

<body>
    <h3 class="text-center mt-5 text-primary ">All Companies</h3>
    <div class=" container ">
        <table class="table mt-5 mx-5  ">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Size</th>
                    <th scope="col">Country</th>
                    <th scope="col">City</th>
                </tr>
            </thead>
            <tbody>
                @foreach($company as $comp)
                <tr>
                    <th scope="row">{{$comp->id}}</th>
                    <td>{{$comp->name}}</td>
                    <td>{{$comp->size}}</td>
                    <td>{{$comp->country}}</td>
                    <td>{{$comp->city}}</td>
                    <td>
                        <form action="{{route('company.destroy',['id'=>$comp->id])}}" method="POST" class="w-50 container text-center">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-primary " value="Delete">
                        </form>
                    </td>
                    <td>
                        <form action="{{route('company.edit',['id'=>$comp->id])}}" method="GET" class="w-50 container text-center">
                            @csrf
                            @method('put')
                            <input type="submit" class="btn btn-primary" value="Update">
                        </form>
                    </td>
                    <td>
                        <form action="{{route('company.show',['id'=>$comp->id])}}" method="GET" class="w-50 container text-center">
                            @csrf
                            @method('put')
                            <input type="submit" class="btn btn-primary" value="show">
                        </form>
                    </td>

                </tr>
                @endforeach

            </tbody>
        </table>
        <form action="{{route('company.create')}}" method="GET" class="w-50 container text-center">
            @csrf
            <input type="submit" class="btn btn-primary " value="create">
        </form>
    </div>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>