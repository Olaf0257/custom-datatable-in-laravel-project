$(document).ready(function() {
    $('#bagoAdminTable').DataTable({
        "ajax": {
            "type": 'GET',
            "dataType": 'json',
            "url": '/getAdminData',
        },
        "scrollX": true,
        "scrollCollapse": true,
        "fixedColumns": {
            "leftColumns": 0,
            "rightColumns": 1
        },
        "dom": '<"float-left"B><"float-right"f>rt<"row"<"col-xl-3 col-lg-4 col-md-6 col-sm-6"i><"col-xl-3 col-lg-3 col-md-6 col-sm-6"l><"col-xl-6 col-lg-5 col-md-12 col-sm-12"p>>',
        "language": {
            "paginate": {
                "next": '<span class="custom-pagination-link" id="NextPage">Siguiente</span>',
                "previous": '<span class="custom-pagination-link" id="PreviousPage">Anterior</span>'
            },
            "sLengthMenu": "<span  class='custom-pagination-text'> Mostrar _MENU_ Elementos </span>",
            "sInfoFiltered": "<span class='custom-pagination-text'>(filtrado de _MAX_ entradas totales)</span>",
            "sInfoEmpty": "<span class='custom-pagination-text'>Mostrando 0 a 0 de 0 entradas</span>",
            "zeroRecords": "<span class='custom-pagination-text'>No se encontraron registros coincidentes</span>",
            "info": "<span class='custom-pagination-text' style='padding-left:10px'> Mostrando _START_ a _END_ de _TOTAL_ elementos</span>"
        },
        "columns": [{
                "data": "PRODUCT",
                "render": (data, type, row, meta) => `
                    <a href="javascript:void(0)">` + data + `</a>
                `,
                "width": "430px",
                "sortable": false
            },
            {
                "data": "SEP",
                "render": (data, type, row, meta) => `
                    <span style="color: ` + data.color + `">` + data.SEP + `</span>
                `,
                "width": "80px"
            },
            {
                "data": "OCT",
                "render": (data, type, row, meta) => `
                    <span style="color: ` + data.color + `">` + data.OCT + `</span>
                `,
                "width": "80px"
            },
            {
                "data": "NOV",
                "render": (data, type, row, meta) => `
                    <span style="color: ` + data.color + `">` + data.NOV + `</span>
                `,
                "width": "80px"
            },
            {
                "data": "AVERAGE",
                "render": (data, type, row, meta) => data,
                "width": "80px"
            },
            {
                "data": "DEC",
                "render": (data, type, row, meta) => data,
                "width": "80px"
            },
            {
                "data": "ENE",
                "render": (data, type, row, meta) => `
                    <input type="number" class="cell-input pt-1 pb-1" style="display: none" value=${data}>    
                ` + `<span class="cell-span">` + data + `</span>`,
                "width": "80px"
            },
            {
                "data": "FEB",
                "render": (data, type, row, meta) => `
                    <input type="number" class="cell-input pt-1 pb-1" style="display: none" value=${data}>
                ` + `<span class="cell-span">` + data + `</span>`,
                "width": "80px"
            },
            {
                "data": "MAR",
                "render": (data, type, row, meta) => `
                    <input type="number" class="cell-input pt-1 pb-1" style="display: none" value=${data}>
                ` + `<span class="cell-span">` + data + `</span>`,
                "width": "80px"
            }
        ],
        "sScrollXInner": "110%"
    });

    var dataTable = $('#bagoAdminTable').dataTable();

    $("#tblSearchField").keyup(function() {
        dataTable.fnFilter(this.value);
    });
    $('div.dataTables_length select').addClass("custom-length-select");

    $("#tblSearchField").focusout(function() {
        $("#tblSearchField").css("color", "black");
    });

    $('#btnForecast').on('click', function() {
        $('#btnForecast').addClass("d-none");
        $('#btnForecastActive').removeClass("d-none");
        $('.cell-span').css('display', 'none');
        $('.cell-input').css('display', 'block');
        var alert = $('#txtAlert').text();
        $('#tblAlert').text(alert);
    });

    $('#btnForecastActive').on('click', function() {
        var today = new Date();
        var time = today.getHours() + ":" + today.getMinutes();

        $('#btnForecastActive').addClass("d-none");
        $('#btnForecast').removeClass("d-none");
        $('.cell-input').css('display', 'none');
        $('.cell-span').css('display', 'block');

        $.ajax({
            type: 'POST',
            url: "/updateAdminData",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                "time": time
            },
            success: function(data) {
                $('#tblAlert').text(data);
            }
        });
    });
});