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
    <h3 class="text-center mt-5 text-primary ">All Products</h3>
    <div class=" w-25 ms-5">
        {{-- <label class="form-label">Company Name</label>
        <select class="form-select" aria-label="Select Company Name" name="Company_name">
            <option selected>Select Company Name </option>
            @foreach($company as $comp)
            <option value="{{$comp->id}}">{{$comp->name}}</option>

            @endforeach
        </select> --}}
    </div>
    <div class=" container ">
        <table class="table mt-5 mx-5  ">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Expiration Date</th>
                    <th scope="col">Details</th>
                    <th scope="col">Country</th>
                    <th scope="col">City</th>
                    <th scope="col">Company ID</th>
                    <th scope="col">Company Name</th>

                </tr>
            </thead>
            <tbody>
                @foreach($products as $pro)
                <tr>
                    <th scope="row">{{$pro->id}}</th>
                    <td>{{$pro->name}}</td>
                    <td>{{$pro->exdate}}</td>
                    <td>{{$pro->details}}</td>
                    <td>{{$pro->company->country}}</td>
                    <td>{{$pro->company->city}}</td>
                    <td>{{$pro->company->id}}</td>
                    <td>{{$pro->company->name}}</td>
                    <td>
                        <form action="{{route('product.destroy')}}" method="POST" class="w-50 container text-center">
                            @csrf
                            {{-- @method('DELETE') --}}
                            <input type="submit" class="btn btn-primary " value="Delete">
                            <input type="hidden" value="{{$pro->id}}" name="id">
                        </form>
                    </td>
                    <td>
                        <form action="{{route('product.edit')}}" method="GET" class="w-50 container text-center">
                            @csrf
                            {{-- @method('put') --}}
                            <input type="submit" class="btn btn-primary" value="Update">
                            <input type="hidden" value="{{$pro->id}}" name="id">
                        </form>
                    </td>
                    <td>
                        <form action="{{route('product.show')}}" method="GET" class="w-50 container text-center">
                            @csrf
                            {{-- @method('put') --}}
                            <input type="submit" class="btn btn-primary" value="show">
                            <input type="hidden" value="{{$pro->id}}" name="id">
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>