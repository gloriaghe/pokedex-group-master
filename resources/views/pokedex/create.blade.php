@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <h2>Insert new Pokémon</h2>
            <form action="{{ route('pokedex.store') }}" method="POST">
            @csrf
                <div class="mb-3">
                    <label class="form-label" for="name">Name</label>
                    <input class="form-control" type="text" name="name" id="name">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="weight">Weight</label>
                    <input class="form-control" type="text" name="weight" id="weight">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="type">Type</label>
                    <input class="form-control" type="text" name="type" id="type">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="pokedex_number">Pokedex Number</label>
                    <input class="form-control" type="text" name="pokedex_number" id="pokedex_number">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
