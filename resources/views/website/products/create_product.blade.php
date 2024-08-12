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
    <h3 class="text-center mt-5 text-primary">Create Product</h3>
    <form action="{{route('product.store')}}" method="POST" class="w-50 container text-center mt-5">
        @csrf
        <div class="mb-3">
            <label class="form-label">Product Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Product Name ">
        </div>
        <div class="mb-3">
            <label class="form-label">Expiration Date</label>
            <input type="date" class="form-control" name="exdate" placeholder="Enter Product Expiration Date ">
        </div>
        <div class="mb-3">
            <label class="form-label">Details</label>
            <textarea class="form-control" name="details" id="" cols="30" rows="3"  placeholder="Enter Product Details "></textarea>
        </div>
        <label class="form-label">Company Name</label>
        <select class="form-select" aria-label="Select Company Name" name="comp_id">
            <option selected>Select Company Name </option>
            @foreach($company as $comp)
            <option value="{{$comp->id}}">{{$comp->name}}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary mt-3 form-control">ADD</button>
    </form>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>