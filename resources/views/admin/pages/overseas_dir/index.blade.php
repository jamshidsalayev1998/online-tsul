@extends('layouts.admin')
@section('content')
    <div class="app-heading-container app-heading-bordered bottom">
        <ul class="breadcrumb">
            <li><a href="/backoffice">Dashboard</a></li>
            <li>Yo'nalishlarga til biriktirish</li>
        </ul>
        <a href="{{ url()->previous() }}" class="pull-right">Orqaga</a>
    </div>
    <div class="container">
        <div class="row" style="margin-right: 12px;margin-left: 12px;">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <h3 style="float: left"> Ariza topshirga chet el fuqarolari ro'yxati</h3>
                        </div>
                    </div>

                    @if(session('message'))
                        <div class="col-md-10">
                            <div class="alert alert-success alert-icon-block alert-dismissible" role="alert">
                                <div class="alert-icon">
                                    <span class="icon-checkmark-circle"></span>
                                </div>
                                {{ session('message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                            class="fa fa-times"></span></button>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="block block-condensed">
                <br>
                <div class="block-content">

                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Yo'nalishi</th>
                            <th>Ta'lim tili</th>
                            <th>Holati</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($spec as $s)
                            <tr>
                                <td>{{ $s->id }}</td>
                                <td>{{ $s->name }}</td>
                                <td>
                                    @foreach($langs->where('lang', $s->lang) as $lang)
                                        <input type="checkbox" name="dir"
                                        @foreach($s->langs as $l)

                                        @if($l->id == $lang->id)
                                        checked
                                                @endif
                                        @endforeach
                                        >
                                        {{ $lang->name }}
                                    @endforeach
                                </td>
                                <td>
                                    <input type="checkbox" name="bachelor_status[{{$loop->index}}]"
                                           @if($s->edu_fig_id == 1)
                                           checked
                                            @endif
                                    >
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{--                {{ $data->render() }}--}}

                </div>

            </div>
        </div>
    </div>
@endsection