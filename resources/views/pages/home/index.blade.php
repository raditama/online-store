@extends('layouts.app', ['title' => 'Home Page'])

@section('content')
    <div class="shadow rounded p-3 row m-5 ">
        <div class="">
            <form class="d-flex form-inline justify-content-between">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>

        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Poduct Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($product as $p)
                    <tr>
                        <td scope="row">{{ $p['id'] }}</td>
                        <td scope="row">{{ $p['name'] }}</td>
                        <td scope="row">{{ $p['category'] }}</td>
                        <td scope="row">{{ $p['stock'] }}</td>
                        <td scope="row">{{ $p['price'] }}</td>
                        <td scope="row"><button onclick="modalEdit()">Edit</button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        function modalEdit() {
            alert("Modal edit is not ready!");
        }
    </script>
@endsection
