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
    <h3 class="text-center mt-5 text-primary">Update Company</h3>
    <form action="{{route('company.update')}}" method="POST" class="w-50 container text-center mt-5">
        @csrf
        {{-- @method('put') --}}
        <div class="mb-3">
            <label class="form-label">Company Name</label>
            <input type="text" class="form-control" name="name" value="{{$company['name']}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Company Size</label>
            <input type="text" class="form-control" name="size" value="{{$company['size']}}" >
        </div>
        <label class="form-label">Country</label>
        <select class="form-select"  name="country" aria-label="{{$company['country']}}">
            <option value="Egypt"{{$company->country=="Egypt"?'selected' : ''}}>Egypt</option>
            <option value="Qatar"{{$company->country=="Qatar"?'selected' : ''}}>Qatar</option>
            <option value="Saudi Arabia"{{$company->country=="Saudi Arabia"?'selected' : ''}}>Saudi Arabia</option>
            <option value="Lebanon"{{$company->country=="Lebanon"?'selected' : ''}}>Lebanon</option>
        </select>
        <label class="form-label">City</label>
        <select class="form-select"  name="city">
            <option value="Benha"{{$company->city=="Benha"?'selected' : ''}}>Benha</option>
            <option value="Cairo"{{$company->city=="Cairo"?'selected' : ''}}>Cairo</option>
            <option value="Giza"{{$company->city=="Giza"?'selected' : ''}}>Giza</option>
            <option value="Assiut"{{$company->city=="Assiut"?'selected' : ''}}>Assiut</option>
        </select>
        <input type="hidden" value="{{$company->id}}" name="id">
        <button type="submit" class="btn btn-primary mt-3 form-control">Update</button>
    </form>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>