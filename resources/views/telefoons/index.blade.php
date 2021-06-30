@extends('app')

@section('content')
<style>
    **{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body{
        background-color: whitesmoke;
    }
    /*table*/
    .table{
        margin-top: 100px;
        color: black;
    }
    /*table end */

    /*nav bar begin*/
    .nav ul {
        list-style: none;
        background-color: #444;
        text-align: center;
        padding: 0;
        margin: 0;
        width: 100%;

    }
    .nav li {
        font-family: 'Oswald', sans-serif;
        font-size: 1.2em;
        line-height: 40px;
        height: 40px;
        border-bottom: 1px solid #888;
    }

    .nav a {
        text-decoration: none;
        color: #fff;
        display: block;
        transition: .3s background-color;
    }

    .nav a:hover {
        background-color: #005f5f;
    }

    .nav a.active {
        background-color: #fff;
        color: #444;
        cursor: default;
    }

    @media screen and (min-width: 600px) {
        .nav li {
            width: 120px;
            border-bottom: none;
            height: 50px;
            line-height: 50px;
            font-size: 1.4em;
        }
        .nav li {
            display: inline-block;
            margin-right: -4px;
        }
    /*nav bar end*/

    }
</style>
<header>
    <div class="nav">
        <ul>
            <li class="home"><a href="#">Home</a></li>

            <li class="about"><a href="#">About</a></li>

            <li class="contact"><a href="#">Contact</a></li>

            <li class="telefoons"><a href="#">telefoons</a></li>

            <td><a href="{{ route('telefoons.create')}}" class="btn btn-primary">create</a></td>

            <td><a href="{{ route('extrainfo.create')}}" class="btn btn-primary">Extra info toevoegen</a></td>


        </ul>
    </div>
</header>
<table class="table">

    <thead>

    <tr>

        <td>Model</td>

        <td>Fabrikant</td>

        <td>Geheugen</td>

        <td>Prijs</td>

        <td>Kleur</td>

        <td>besturingssysteem</td>

        <td>Actie</td>

        <td>Delete</td>

        <td> Buy </td>



    </tr>

    </thead>

    <tbody>

    @foreach($telefoons as $telefoon)

        <tr>

            <td>{{$telefoon->model}}</td>

            <td>{{$telefoon->fabrikant}}</td>

            <td>{{$telefoon->geheugen}}</td>

            <td>{{$telefoon->prijs}}</td>

            <td>{{$telefoon->kleur}}</td>

            <td>{{$telefoon->besturingssysteem}}</td>



            <td><a href="{{ route('telefoons.edit',$telefoon->id)}}" class="btn btn-primary">Wijzig</a></td>



            <td>

                <form action="{{ route('telefoons.destroy', $telefoon->id)}}" method="post">

                    @csrf

                    @method('DELETE')

                    <button class="btn btn-danger" type="submit">Verwijder</button>



            </form>

            </td>
            <td><a  class="btn btn-primary">Buy</a></td>



        </tr>

    @endforeach

    </tbody>

</table>

@endsection
