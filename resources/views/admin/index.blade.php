@extends('layouts.admin')

@section('content')
    <div class="container">

        <div class="row padding-30">
            @if(0)
            <div class="col-md-4">
                <div class="block block-success padding-top-20">
                    <div class="block-content block-success">
                        <div class="list-group">
                            <a href="#" class="list-group-item active block-success">Bugun tushgan arizalar soni <span class="badge badge-default">{{ $all }}</span></a>
                            <a href="#" class="list-group-item">Magistratura <span class="badge badge-primary">{{ $masters }}</span></a>
                            <a href="#" class="list-group-item">Chet el fuqarolari<span class="badge badge-primary">{{ $overseas }}</span></a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <h2>Boshqaruv paneliga xush kelibsiz!</h2>
        </div>
    </div>
@endsection