@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <table class="table table-hover">

                <thead>

                    <tr>
                        <th>
                            Pokedex Number
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Type
                        </th>
                        <th colspan="3">
                            Action
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($pokemons as $pokemon)

                        <tr>
                            <td>
                                {{$pokemon->pokedex_number}}
                            </td>
                            <td>
                                {{$pokemon->name}}
                            </td>
                            <td>
                                {{$pokemon->type}}
                            </td>
                            <td>
                                <a href="{{ route('pokedex.show', ['pokedex' => $pokemon]) }}"class="btn btn-primary">Pokémon card</a>
                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
