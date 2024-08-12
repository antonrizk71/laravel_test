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
    <h3 class="text-center mt-5 text-primary">Update Product</h3>
    <form action="{{route('product.update')}}" method="POST" class="w-50 container text-center mt-5">
        @csrf
        {{-- @method('put') --}}
        <div class="mb-3">
            <label class="form-label">Product Name</label>
            <input type="text" class="form-control" name="name" value="{{$product['name']}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Expiration Date</label>
            <input type="date" class="form-control" name="exdate" value="{{$product['exdate']}}" >
        </div>
        <div class="mb-3">
            <label class="form-label">Details</label>
            <textarea class="form-control" name="details" id="" cols="30" rows="3" >{{$product['details']}}</textarea>
        </div>
        <label class="form-label">Company Name</label>
        <select class="form-select" aria-label="{{$product->company->name}}" name="comp_id">
            @foreach($company as $comp)
            <option value="{{$comp->id}}" {{$product->company->id==$comp->id ? 'selected' : ''}}>{{$comp->name}}</option>
            @endforeach
        </select>
        <input type="hidden" value="{{$product->id}}" name="id">
        <button type="submit" class="btn btn-primary mt-3 form-control">Update</button>
    </form>
    <form action="{{route('product.destroy')}}" method="POST" class="w-50 container text-center">
        @csrf
        {{-- @method('DELETE') --}}
        <input type="submit" class="btn btn-primary mt-3 form-control" value="Delete">
        <input type="hidden" value="{{$product->id}}" name="id">
    </form>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>