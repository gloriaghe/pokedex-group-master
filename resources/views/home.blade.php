@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    {{-- METTERE I BOTTONI PER LE AZIONI --}}
                    <a class="btn btn-primary" href="{{ route('pokedex.index') }}">Pokémon List</a>

                    <a class="btn btn-primary" href="{{ route('pokedex.create') }}">Add a new Pokémon</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
