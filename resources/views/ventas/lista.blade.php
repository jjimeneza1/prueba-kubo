@extends('layouts.app')

@section('content')

<table id="tabla" class="display compact cell-border stripe" style="width:100%">
            <thead>
                <tr>
                    
                    
                    <th style="text-align: center!important;width: 25px!important;">N°</th>
                    <th>Venta</th>
                    <th>Cantidad</th>
                    <th>fecha</th>
                </tr>
            </thead>
            <tbody>

                @foreach($ventas as $venta)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$venta->id_venta}}</td>
                        <td>{{$venta->cantidad}}</td>
                        <td>{{$venta->fecha_venta}}</td>
                    </tr> 
                @endforeach

            </tbody>
        </table>


<style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }


/*::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::*/
/*::::::::::::::::::::::::::::::::::::::::::::::::::::::::::DATA TABLES:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::*/

#myTable_wrapper{
    background-color: rgba(0,0,0,0)!important;
    z-index: -1!important;
}

.sorting_asc,.sorting_desc,.sorting{
    border-bottom: 0px solid rgba(210,210,210,1)!important;
    text-align: left!important;
    font-weight: 500!important;
    color:rgba(55,50,65,1)!important;
    letter-spacing: -0.5px!important;
    font-size:calc(6px + 1.3vh)!important;
    padding:calc(3px + 1.2vh)!important;
    //border-right:1px solid rgba(215,215,215,0.5)!important;
    //border-top:1px solid rgba(215,215,215,0.5)!important;
    //border-left:1px solid rgba(215,215,215,0.5)!important;
}

#tabla{
    border-bottom: 1px solid rgba(215,215,215,1)!important;
}

thead tr{
    
}

tbody{

}

.odd{
    background-color: rgba(255,255,255,0.65)!important;
    font-size:calc(4px + 1.3vh)!important;
    color:rgba(55,50,65,1)!important;
    line-height: 12px!important;
}.odd:hover{
    background-color: rgba(235,235,225,1)!important;
    color:black!important;
}

.even{
    background-color: rgba(245,245,235,0.6)!important;
    font-size:calc(4px + 1.3vh)!important;
    color:rgba(55,50,65,1)!important;
    line-height: 12px!important;
}.even:hover{
    background-color: rgba(235,235,225,1)!important;
    color:black!important;
}

.sorting_1{
    background-color: rgba(0,0,0,0)!important;
    //font-weight: 500!important;
    //color:rgba(75,70,85,1)!important;
    //letter-spacing: -0.4px!important;
}
.sorting_1:hover{
    color:black!important;
}

td{
    padding:calc(3px + 1.3vh)!important;
    border-right: 1px solid rgba(215,215,215,0.6)!important;
    border-top: 1px solid rgba(215,215,215,0.6)!important;
    letter-spacing: -0.4px!important;
}


#tabla_filter{
    color:rgba(75,70,85,1)!important;
    letter-spacing: -0.4px!important;
    font-size: 14px!important;
}

#tabla_filter input{
    width: 150px!important;
    height: 30px!important;
    padding: 8px!important;
    font-size: 14px!important;
    border:1px solid rgba(215,215,215,1)!important;
    color:rgba(75,70,85,1)!important;
    letter-spacing: -0.3px!important;
    font-family:open sans!important;
    background-color: rgba(253,253,253,1)!important;
    //margin-bottom: 15px;
    border-radius:1px!important;
}#tabla_filter input::placeholder{
    color:rgba(220,220,220,1);
}

#tabla_length{
    color:rgba(75,70,85,1)!important;
    letter-spacing: -0.3px!important;
    font-family:open sans!important;
    font-size: 14px!important;
}

#tabla_length select{
    background-color: rgba(252,252,252,1)!important;
    border:1px solid rgba(215,215,215,1)!important;
    color:rgba(75,70,85,1)!important;
    font-family:open sans!important;
    border-radius:1px!important;
    letter-spacing: -1px!important;
    text-align: center!important;
}

#tabla_length select option{
    color:rgba(75,70,85,1)!important;
    text-align: center!important;
    letter-spacing: -1px!important;
    font-family:open sans!important;
}

#tabla_info{
    color:rgba(75,70,85,0.6)!important;
    letter-spacing: -0.4px!important;
    font-family:open sans!important;
    font-size: 14px!important;
    font-weight: 400!important;
}

.dataTables_paginate,.dataTables_wrapper,#tabla_next,#tabla_previous{
    color:rgba(75,70,85,0.6);
    letter-spacing: -0.4px!important;
    font-family:open sans!important;
    font-size: 14px!important;
    font-weight: 400!important;
}

.current{
    background-color: rgba(75,185,195,1)!important;
    color:red!important;
}

#tabla_paginate span .current{
    border: 1px solid rgba(75,185,195,1)!important;
    background: linear-gradient(to bottom, rgba(75,185,195,1) 0%,rgba(75,185,195,1) 100%);
    color:white!important;
    box-shadow: 0px 0px 3px rgba(50,50,50,0.3)!important;
}
.dataTables_wrapper .dataTables_paginate .paginate_button:hover{
    border: 1px solid rgba(75,185,195,1)!important;
    background: linear-gradient(to bottom, rgba(75,185,195,1) 0%,rgba(75,185,195,1) 100%)!important;
    color:white!important;
    box-shadow: 0px 0px 3px rgba(50,50,50,0.5)!important;
}

.dt-buttons{
    display: none;
}
        </style>

        <script type="text/javascript">
    $(document).ready( function () {
        $('#tabla').DataTable( {
            dom: 'Blfrtip',
            buttons: [
                {
                    extend: 'excel',
                    filename: 'Categorias Optica Angeles',
                    title: '',
                    header: false
                },
                {
                    extend: 'csv',
                    filename: 'Categorias Optica Angeles',
                    title: '',
                    header: false
                },
                {
                    extend: 'pdf',
                    title: 'Categorias Optica Angeles',
                    filename: 'Categorias Optica Angeles',
                },
                {
                    extend: 'copy',
                },
                {
                    extend: 'print',
                    title: 'Categorias Optica Angeles',
                },
            ],
            filename: 'Data export',
            select: true,
            language: {
                searchPlaceholder: "Buscar",
                processing:     "Procesando...",
                search:         "Buscar Categoría&nbsp;:",
                lengthMenu:     "Mostrar _MENU_ Categorías",
                info:           "Mostrando Categorías del _START_ al _END_ de un total de _TOTAL_ Categorías",
                infoEmpty:      "Mostrando Categorías del 0 al 0 de un total de 0 Categorías",
                infoFiltered:   "(filtrado de un total de _MAX_ Categorías)",
                infoPostFix:    "",
                loadingRecords: "Cargando...",
                zeroRecords:    "No se encontraron Categorías",
                emptyTable:     "Ningúna Categoría disponible en esta tabla",
                paginate: {
                    first:      "Primer",
                    previous:   "Anterior",
                    next:       "Siguiénte",
                    last:       "Último"
                },
                aria: {
                    sortAscending:  ": Activar para ordenar la columna de manera ascendente",
                    sortDescending: ": Activar para ordenar la columna de manera descendente"
                },
                buttons: {
                    copyTitle: 'Copiado en el portapapeles',
                    copyKeys: 'Presione <i>ctrl</i> ou <i>\u2318</i> + <i>C</i> para copiar los datos de la tabla a su portapapeles. <br><br>Para cancelar, haga clic en este mensaje o presione Esc.',
                    copySuccess: {
                        _: '%d lineas copiadas',
                        1: '1 linea copiada'
                    }
                }
            }
        } );
    } );
    function clickElemento(elemento){
        document.getElementsByClassName('dt-button')[elemento].click();
    }
</script>
@endsection