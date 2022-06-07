

@extends('layouts.layout')
@section('content')

<div style="padding-top: 20px"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow">
                    <div class="card-header text-center">{{ __('INPUT NEW ITEM') }} </div>
                        <div class="card-body">
                        {{-- <form method="POST" action="{{ route('register') }}"> --}}
                            {{-- @csrf --}}
                            <form action="{{ route('createBook') }}" method="POST" enctype="multipart/form-data">

                                @csrf

                                <div class="mb-3">
                                    <label for="Name" class="form-label">Name Of Item</label>
                                    <input name="Name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Name Of Item">
                                    @error('Name')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="Quantity" class="form-label">Quantity Of Item</label>
                                    <input name="Quantity" type="numeric" class="form-control" id="formGroupExampleInput" placeholder="Input Quantity Of Item">
                                    @error('Quantity')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-success">Insert</button>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection

