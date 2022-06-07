
@extends('layouts.layout')
@section('content')
    <div style="padding-top: 20px"></div>
    <div class="container">
        <div class="row justify-content-center text-center ">
            <div class="col-md-5">
            <div class="card shadow">
                <div class="card-header">{{ __('LIST ITEM') }}</div>
                    <div class="card-body">
                        <div class="text-center">
                        <br>
                        </div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name Of Item</th>
                                <th scope="col">Quantity Of Item</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($books as $book)
                                    <tr>
                                    <th scope="row">{{ $book->id }}</th>
                                    <td>{{ $book->Name }}</td>
                                    <td>{{ $book->Quantity }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $books->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
