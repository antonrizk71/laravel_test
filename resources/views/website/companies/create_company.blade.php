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
    <h3 class="text-center mt-5 text-primary">Create Company</h3>
    <form action="{{route('company.store')}}" method="POST" class="w-50 container text-center mt-5">
        @csrf
        <div class="mb-3">
            <label class="form-label">Company Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Company Name ">
        </div>
        <div class="mb-3">
            <label class="form-label">Company Size</label>
            <input type="text" class="form-control" name="size" placeholder="Enter Company Size ">
        </div>
        <label class="form-label">Country</label>
        <select class="form-select" aria-label="Select Country" name="country">
            <option selected>Select Country</option>
            <option value="Egypt">Egypt</option>
            <option value="Qatar">Qatar</option>
            <option value="Saudi Arabia">Saudi Arabia</option>
            <option value="Lebanon">Lebanon</option>
        </select>
        <label class="form-label">City</label>
        <select class="form-select" aria-label="Select City" name="city">
            <option selected>Select City</option>
            <option value="Benha">Benha</option>
            <option value="Cairo">Cairo</option>
            <option value="Giza">Giza</option>
            <option value="Assiut">Assiut</option>
        </select>
        <button type="submit" class="btn btn-primary mt-3 form-control">ADD</button>
    </form>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>