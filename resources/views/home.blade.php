@extends('layouts.master')

@section('title')
home
@endsection

@section('header')
@include('layouts.header')
@endsection

@section('content')
<!-- <div class="container"> -->
<div class="row justify-content-center px-5">
    <div class="row mt-3 px-0">
        <div class="col-md-6 px-0" id="tblrow1">
            <h2 class="tblTitle">{{ $tblTitle }}</h1>
        </div>
        <div class="col-md-6 px-0 text-right" id="tblrow2">
            <input type="text" class="tblSearchField mr-1" placeholder="Buscar..." id="tblSearchField">
            <button type="button" class="tblBtnActive ml-1" id="RequestApproval">Solicitar
                aprobación</button>
        </div>
    </div>
    <table id="bagoUserTable" class="display nowrap" cellspacing="0">
        <thead>
            <tr>
                <th class="text-left pl-2" id="tblAlert">{{ $tblAlert1 }}</th>
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
    <div id="tblModal" class="custom-modal">
        <div class="vertical-alignment-helper">
            <div class="modal-dialog vertical-align-center">
                <div class="custom-modal-content">
                    <div class="custom-modal-header">
                        <h4 class="custom-color" id="modal-header">
                            </h2>
                    </div>
                    <div class="custom-modal-body">
                        <div class="table-responsive">
                            <table id="bagoUserDetailsTable" class="table">
                                <thead>
                                    <tr>
                                        <td width="150px"></td>
                                        <td width="80px">DIC 2020</td>
                                        <td width="80px">ENE 2021</td>
                                        <td width="80px">FEB 2021</td>
                                        <td width="80px">MAR 2021</td>
                                        <td width="80px">ABR 2021</td>
                                        <td width="80px">MAY 2021</td>
                                        <td width="80px">JUN 2021</td>
                                        <td width="80px">JUL 2021</td>
                                        <td width="80px">AGO 2021</td>
                                        <td width="80px">SEP 2021</td>
                                        <td width="80px">OCT 2021</td>
                                        <td width="80px">NOV 2021</td>
                                    </tr>
                                </thead>
                                <tbody id="detailsData"></tbody>
                            </table>
                        </div>
                    </div>
                    <div class="custom-modal-footer">
                        <p id="modal-footer">Modal Footer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- </div> -->
@endsection

@section('script')
<script src="{{ asset('js/DataTables/datatables.js') }}"></script>
<script src="{{ asset('js/bago_datatable.js') }}"></script>
@endsection