<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" type="text/css" href="{{ asset('DataTables/datatables.min.css') }}">
        <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ asset('DataTables/datatables.min.js') }}"></script>
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
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
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            
            <div id="content-ecommerce">
                <div id="content-tabla">
                    <table id="tabla" class="display compact cell-border stripe" style="width:100%">
                        <thead>
                            <tr>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Categoria</th>
                                <th>Precio</th>
                                <th>Seleccione</th>
                                <th>Cantidad</th>
                            </tr>
                        </thead>
                        <tbody>   
                        @foreach($productos as $producto)                         
                            <tr>
                                <td><div class="content-imagen-td"><img src="imagenes/productos/{{$producto->nombre_imagen}}" style="height: 30px;"> </div></td>
                                <td id="producto-{{$producto->id_producto}}">{{$producto->nombre_producto}}</td>
                                <td>{{$producto->descripcion_producto}}</td>
                                <td>{{$producto->nombre_categoria}}</td>
                                <td>{{$producto->precio_producto}}</td>
                                <td><input class="check" type="checkbox" value="{{$producto->id_producto}}" onclick="seleccionar({{$producto->id_producto}},this.checked);"></td>
                                <td><input class="cant" id="cant-{{$producto->id_producto}}" type="number"></td>
                            </tr> 
                        @endforeach
                        </tbody>
                    </table>




                </div>
                <form method="post" action="{{ route('venta.guardar') }}">
                    @csrf
                    <div id="content-cart">
                        <div id="cart"></div>
                    </div>

                    <input type="hidden" name="productos" id="prods">
                    <button type="submit" class="btn btn-primary" id="crear-venta">Comprar</button>
                </form>
            </div>
        </div>
    </body>
    <script type="text/javascript">
        activos = [];
        nombres = [];
        cantidades = [];

        function seleccionar(id,check){

        document.getElementById('cart').innerHTML="";

        var nombre = document.getElementById("producto-"+id).innerHTML;
        var cantidad = document.getElementById("cant-"+id).value;
        if(check==true){
            encontrado = activos.indexOf(id);
            if(encontrado==-1){
                activos.push(id);
                nombres.push(nombre);
                cantidades.push(cantidad);
            }
        }else{
            encontrado = activos.indexOf(id);
            activos.splice(encontrado, 1);
            nombres.splice(encontrado, 1);
            cantidades.splice(encontrado, 1);
        }

        $('#cart').append('<div class="columna par"><div class="info-izquierda" style="font-weight:bold;font-size:15px;">Detalle</div></div>');
        for(i = 0; i < nombres.length; i++){
            ii=i+1;
            if(i % 2 == 0){
                $('#cart').append('<div class="columna impar"><div class="info-izquierda">'+ii+" - "+nombres[i]+'cantidad: '+cantidades[i]+'</div>');
            }else{
                $('#cart').append('<div class="columna   par"><div class="info-izquierda">'+ii+" - "+nombres[i]+'cantidad: '+cantidades[i]+'</div>');
            }
        }
        //$('#cart').append('<button type="submit" class="btn btn-primary" id="crear-venta">Comprar</button>');
    }




    $("#crear-venta").click(function(){
        var valid=true;
        var v=[];

        for (i = 0; i < nombres.length; i++){
            x = {
                    'id_producto':activos[i],
                    'cantidad_producto':cantidades[i]
                };
            v[i] = x;
        }

        if(nombres.length==0){
            valid = false;
        }

        console.log(v);

        if(valid==true){
            p = activos=JSON.stringify(v);
            document.getElementById("prods").value = p;
        }

        console.log(p);

        return valid;
    });

    </script>
    
    <style type="text/css">

        *{
            margin:0px;
            padding:0px;
            box-sizing: border-box;
            font-family:open sans;
        }

        #content-ecommerce{
            width: 100%;
            float: left;
            //border:1px solid red;
            height: calc(100% - 2px);
        }

        #content-tabla{
            padding:20px;
            width: 70%;
            float: left;
            margin-top:100px;
            height: calc(100% - 100px);
            //border:1px solid blue;
            box-shadow: 0px 0px 5px rgba(0,0,0,0.5);
        }

        #content-cart{
            width: 30%;
            float: left;
            margin-top:100px;
            height: calc(100% - 100px);
            //border:1px solid green;
        }
        #cart{
            width: 100%;
            max-width: 300px;
            margin-right: auto;
            margin-left: auto;
            left:0;
            right:0;
            //border:1px solid gray;
            height: 100%;
            box-shadow: 0px 0px 5px rgba(0,0,0,0.5);
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
</html>
