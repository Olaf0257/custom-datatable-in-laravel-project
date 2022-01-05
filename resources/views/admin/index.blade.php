@extends('layouts.master')

@section('title')
admin
@endsection

@section('header')
@include('layouts.header')
@endsection

@section('content')
<div class="row justify-content-center px-5">
    <div class="row mt-3 px-0">
        <div class="col-md-4 px-0" id="row1">
            <h2 class="tblTitle">{{ $tblTitle }}</h1>
        </div>
        <div class="col-md-8 px-0 text-right" id="row2">
            <input type="text" class="tblSearchField mr-1" placeholder="Buscar..." id="tblSearchField">
            <select class="tblDropdown">
                @foreach($options as $value)
                    <option>
                        {{ $value }}
                    </option>
                @endforeach
            </select>
            @if($btnState == "active")
                <button type="button" class="btn ml-1" id="btnAprobarActive">Aprobar forecast</button>
            @else
                <button type="button" class="btn ml-1" id="btnAprobarDisable">Aprobar forecast</button>
            @endif
            <button type="button" class="btn ml-1" id="btnForecast">Editar Forecast</button>
            <button type="button" class="btn ml-1 d-none" id="btnForecastActive">Terminar edición</button>
        </div>
    </div>
    <span class="d-none" id="txtAlert">{{ $tblAlert }}</span>
    <table id="bagoAdminTable" class="display nowrap" cellspacing="0">
        <thead>
            <tr>
                <th class="text-left pl-2" id="tblAlert"></th>
                <th colspan="3">REAL</th>
                <th></th>
                <th colspan="4">FORECAST</th>
            </tr>
            <tr>
                <th class="text-left" style="padding-left: 10px">PRODUCTO</th>
                <th>SEP</th>
                <th>OCT</th>
                <th>NOV</th>
                <th style="background-color:#F2F2F2">PROMEDIO</th>
                <th class="custom-color">DIC</th>
                <th style="color: #22B573">ENE</th>
                <th style="color: #22B573">FEB</th>
                <th style="color: #FBB03B">MAR</th>
            </tr>
        </thead>
    </table>
</div>
@endsection

@section('script')
<script src="{{ asset('js/DataTables/datatables.js') }}"></script>
<script src="{{ asset('js/bago_datatable_admin.js') }}"></script>
@endsection