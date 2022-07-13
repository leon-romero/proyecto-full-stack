
@extends('layout.app')
@section('content')


<div class="container">
    <div class="row">
        @foreach ($personajes['results'] as $p)
        <div class="col-md-3">
            <div class="card">
                <div class="card-body shadow">
                    <img src="{{ $p['image'] }}" width="100" height="100" alt="">
                    <h4 class="card-title">{{ $p['name'] }}</h4>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
@push('javascript')
<script>
    $(document).ready( function () {
        $('#tabla_user').DataTable();



    } );
</script>
@endpush
