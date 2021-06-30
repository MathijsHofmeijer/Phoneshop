@extends('app')

@section('content')

<form method="post" action="{{ route('extrainfo.store') }}">

    <div class="form-group">

        @csrf

        <label>kleur</label>

        <input type="text" class="form-control" name="kleur"/>

    </div>

    <div class="form-group">

        <label>besturingssysteem</label>

        <input type="text" class="form-control" name="besturingssysteem"/>

    </div>

    <div class="form-group">

        <label>id</label>

        <input type="text" class="form-control" name="Extra_id"/>

    </div>



    <button type="submit" class="btn btn-primary">Toevoegen</button>

</form>

@endsection
