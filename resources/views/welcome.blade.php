<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>



<body>
    <div class="m-5">
        <h1 class="text-center mt-5 mb-4">Laravel CRUD with validation</h1>
        <div class="d-flex justify-content-end mb-2">
            <a href="/" class="btn btn-info btn-sm m-2">Home</a>
        </div>
        <div class="add-data border d-flex justify-content-end mb-5">
            <a href="add" class="btn btn-success m-2">Add Data</a>
        </div>
        @hasSection('content')
        @yield('content')
        @else
        <h1 class="text-center text-danger font-30">NO CONTENT FOUND</h1>
        @endif
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
