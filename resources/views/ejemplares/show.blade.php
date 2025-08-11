@extends('adminlte::page')

@section('title', 'Ejemplares - Show')

@section('content_header')
    <h1>Ejemplar {{$specimen->id}}</h1>
@stop

@section('content')

    <div class="card card-solid">

        <div class="card-header text-right">
            <a href="{{route('ejemplares.create')}}" class="btn btn-primary flex-wrap">
                <i class="fas fa-plus"></i>
                Nuevo
            </a>
            <a href="{{route('ejemplares.edit', $specimen)}}" class="btn btn-primary flex-wrap">
                <i class="fas fa-edit"></i>
                Editar
            </a>
            <a href="{{route('ejemplares.create')}}" class="btn btn-primary flex-wrap">
                <i class="fas fa-trash"></i>
                Eliminar
            </a>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3 class="d-inline-block d-sm-none">{{$specimen->code}}</h3>
                    <div class="col-12">
                        @if(isset($specimenPic->path))
                            <img src="{{ asset('img/specimens/'.$specimenPic->path) }}" class="product-image" alt="Product Image">
                        @else
                            <img src="{{ asset('img/specimens/noImage.png') }}" class="product-image" alt="Product Image">
                        @endisset
                    </div>
                    <div class="col-12 product-image-thumbs">
                        @foreach ($specimen->specimenImgs as $img)
                            @if($img->path == $specimenPic->path)
                                <div class="product-image-thumb active" ><img src="{{ asset('img/specimens/'.$img->path) }}" alt="Product Image"></div>
                            @else
                                <div class="product-image-thumb" ><img src="{{ asset('img/specimens/'.$img->path) }}" alt="Product Image"></div>
                            @endif

                        @endforeach
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <h3 class="my-3 text-center">Código: {{$specimen->code}}</h3>

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr><th style="width:40%">Registro:</th><td>{{$specimen->registry}}</td></tr>
                                <tr><th>Nombre:</th><td>{{$specimen->name}}</td></tr>
                                <tr><th>Microchip:</th><td>{{$specimen->chip}}</td></tr>
                                <tr><th>Nacimiento:</th><td>{{$specimen->birthdate}}</td></tr>
                                <tr><th>Sexo:</th><td>{{$specimen->sex->description ?? ''}}</td></tr>
                                <tr><th>Color:</th><td>{{$specimen->color->description ?? ''}}</td></tr>
                                <tr><th>Categoría:</th><td>{{ $specimen->category->description ?? ''}}</td></tr>
                                <tr><th>Criador:</th><td>{{$specimen->breeder->name ?? ''}}</td></tr>
                                <tr><th>Propietario:</th><td>{{$specimen->owner->name ?? ''}}</td></tr>
                                <tr><th>Padre:</th><td>
                                    @if(isset($father->id))
                                        <a href="{{route('ejemplares.show', $father->id)}}">{{ $specimen->father_code}}</a>
                                    @else
                                        {{ $specimen->father_code}}
                                    @endif
                                </td></tr>
                                <tr><th>Madre:</th><td>
                                    @if(isset($mother->id))
                                        <a href="{{route('ejemplares.show', $mother->id)}}">{{ $specimen->mother_code}}</a>
                                    @else
                                        {{$specimen->mother_code}}
                                    @endif
                                </td></tr>
                                <tr><th>Observaciones:</th><td></td></tr>
                                <tr><td colspan="2">{{$specimen->notes}}</td></tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- <h4>Available Colors</h4>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-default text-center active">
                            <input type="radio" name="color_option" id="color_option_a1" autocomplete="off" checked>
                            Green
                            <br>
                            <i class="fas fa-circle fa-2x text-green"></i>
                        </label>
                        <label class="btn btn-default text-center">
                            <input type="radio" name="color_option" id="color_option_a2" autocomplete="off">
                            Blue
                            <br>
                            <i class="fas fa-circle fa-2x text-blue"></i>
                        </label>
                        <label class="btn btn-default text-center">
                            <input type="radio" name="color_option" id="color_option_a3" autocomplete="off">
                            Purple
                            <br>
                            <i class="fas fa-circle fa-2x text-purple"></i>
                        </label>
                        <label class="btn btn-default text-center">
                            <input type="radio" name="color_option" id="color_option_a4" autocomplete="off">
                            Red
                            <br>
                            <i class="fas fa-circle fa-2x text-red"></i>
                        </label>
                        <label class="btn btn-default text-center">
                            <input type="radio" name="color_option" id="color_option_a5" autocomplete="off">
                            Orange
                            <br>
                            <i class="fas fa-circle fa-2x text-orange"></i>
                        </label>
                    </div>

                    <h4 class="mt-3">Size <small>Please select one</small></h4>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-default text-center">
                            <input type="radio" name="color_option" id="color_option_b1" autocomplete="off">
                            <span class="text-xl">S</span>
                            <br>
                            Small
                        </label>
                        <label class="btn btn-default text-center">
                            <input type="radio" name="color_option" id="color_option_b2" autocomplete="off">
                            <span class="text-xl">M</span>
                            <br>
                            Medium
                        </label>
                        <label class="btn btn-default text-center">
                            <input type="radio" name="color_option" id="color_option_b3" autocomplete="off">
                            <span class="text-xl">L</span>
                            <br>
                            Large
                        </label>
                        <label class="btn btn-default text-center">
                            <input type="radio" name="color_option" id="color_option_b4" autocomplete="off">
                            <span class="text-xl">XL</span>
                            <br>
                            Xtra-Large
                        </label>
                    </div>

                    <div class="bg-gray py-2 px-3 mt-4">
                        <h2 class="mb-0">
                        $80.00
                        </h2>
                        <h4 class="mt-0">
                        <small>Ex Tax: $80.00 </small>
                        </h4>
                    </div>

                    <div class="mt-4">
                        <div class="btn btn-primary btn-lg btn-flat">
                            <i class="fas fa-cart-plus fa-lg mr-2"></i>
                            Add to Cart
                        </div>

                        <div class="btn btn-default btn-lg btn-flat">
                            <i class="fas fa-heart fa-lg mr-2"></i>
                            Add to Wishlist
                        </div>
                    </div>

                    <div class="mt-4 product-share">
                        <a href="#" class="text-gray">
                        <i class="fab fa-facebook-square fa-2x"></i>
                        </a>
                        <a href="#" class="text-gray">
                        <i class="fab fa-twitter-square fa-2x"></i>
                        </a>
                        <a href="#" class="text-gray">
                        <i class="fas fa-envelope-square fa-2x"></i>
                        </a>
                        <a href="#" class="text-gray">
                        <i class="fas fa-rss-square fa-2x"></i>
                        </a>
                    </div> -->

                </div>
            </div>





            <div class="row">
                <div class="col-12" id="accordion">
                    <div class="card card-primary card-tabs">
                        <div class="card-header p-0 pt-1">
                            <ul class="nav nav-tabs" id="specimen-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="specimen-pedigree-tab" data-toggle="pill" href="#pedigree-tab" role="tab" aria-controls="pedigree-tab" aria-selected="false">Pedigree</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="specimen-offspring-tab" data-toggle="pill" href="#offspring-tab" role="tab" aria-controls="offspring-tab" aria-selected="false">Descendencia</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="specimen-breeder-tab" data-toggle="pill" href="#breeder-tab" role="tab" aria-controls="breeder-tab" aria-selected="false">Criador</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="specimen-owner-tab" data-toggle="pill" href="#owner-tab" role="tab" aria-controls="owner-tab" aria-selected="false">Propietario</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="tabContent">
                                <div class="tab-pane fade show active" id="pedigree-tab" role="tabpanel" aria-labelledby="specimen-pedigree-tab">
                                    <p>Aquí va el Pedigree</p>




        <!-- <div class="col-lg-12"> -->
			<table id="table-pedigree" class="table solo-data cell-full" style="margin-left:35px;">
				<tbody>
                    <tr>
						<td width="10%" class="l1">
							<div class="w1 wMacho "><span class="punto-g">3</span><a href="/ejemplares/perfil/187210/not-for-sale">NOT FOR SALE</a><br>02/10/1994</div>
						</td>
						<td width="10%" class="l2">
							<div class="w1 wMacho "><span class="punto-g">11</span><a href="/ejemplares/perfil/148674/parade-marshal-usa">PARADE MARSHAL (USA)</a><br>25/03/1983</div>
							<div class="w2 wHembra "><span class="punto-g">3</span><a href="/ejemplares/perfil/60565/love-for-sale">LOVE FOR SALE</a><br>14/10/1979</div>
						</td>
						<td width="10%" class="l3">
							<div class="w1 wMacho "><span class="punto-g">3</span><a href="/ejemplares/perfil/44071/caro-ire">CARO (IRE)</a><br>01/01/1967</div>
							<div class="w2 wHembra "><span class="punto-g">11</span><a href="/ejemplares/perfil/54102/stepping-high">STEPPING HIGH</a><br>01/01/1969</div>
							<div class="w3 wMacho "><span class="punto-g">4</span><a href="/ejemplares/perfil/36731/laramie-trail-usa">LARAMIE TRAIL (USA)</a><br>01/01/1972</div>
							<div class="w4 wHembra "><span class="punto-g">3</span><a href="/ejemplares/perfil/21664/museliere">MUSELIERE</a><br>01/01/1973</div>
						</td>

						<td width="10%" class="l4">
							<div class="w1 wMacho "><span class="punto-g">4</span><a href="/ejemplares/perfil/44072/fortino-ii">FORTINO II</a><br>01/01/1959</div>
							<div class="w2 wHembra "><span class="punto-g">3</span><a href="/ejemplares/perfil/44073/chambord">CHAMBORD</a><br>01/01/1955</div>
							<div class="w3 wMacho "><span class="punto-g">19</span><a href="/ejemplares/perfil/53205/no-robbery-usa">NO ROBBERY (USA)</a><br>01/01/1960</div>
							<div class="w4 wHembra "><span class="punto-g">11</span><a href="/ejemplares/perfil/47487/bebop-ii">BEBOP II</a><br>01/01/1957</div>
							<div class="w5 wMacho "><span class="punto-g">A4</span><a href="/ejemplares/perfil/44610/swaps-usa">SWAPS (USA)</a><br>01/01/1952</div>
							<div class="w6 wHembra "><span class="punto-g">4</span><a href="/ejemplares/perfil/44585/wildwook">WILDWOOK</a><br>01/01/1965</div>
							<div class="w7 wMacho "><span class="punto-g">8</span><a href="/ejemplares/perfil/348/malambo">MALAMBO</a><br>01/01/1954</div>
							<div class="w8 wHembra "><span class="punto-g">3</span><a href="/ejemplares/perfil/6972/romina">ROMINA</a><br>01/01/1966</div>
						</td>
					</tr>
					<tr>
                        <td width="10%" class="l1" >
                            <div class="w1 wHembra "><span class="punto-g">16</span><a href="/ejemplares/perfil/270236/blackwater-angel-usa">BLACKWATER ANGEL (USA)</a><br>05/02/2000</div>
                        </td>
                        <td width="10%" class="l2" >
                            <div class="w1 wMacho "><span class="punto-g">20</span><a href="/ejemplares/perfil/375968/kingmambo-usa">KINGMAMBO (USA)</a><br>01/01/1990</div>
                            <div class="w2 wHembra "><span class="punto-g">16</span><a href="/ejemplares/perfil/385899/zephyr">ZEPHYR</a><br>01/01/1993</div>
                        </td>
                        <td width="10%" class="l3" >
                            <div class="w1 wMacho "><span class="punto-g">13</span><a href="/ejemplares/perfil/45324/mr-prospector-usa">MR. PROSPECTOR (USA)</a><br>01/01/1970</div>
                            <div class="w2 wHembra "><span class="punto-g">20</span><a href="/ejemplares/perfil/375970/miesque-usa">MIESQUE (USA)</a><br>01/01/1984</div>
                            <div class="w3 wMacho "><span class="punto-g">4</span><a href="/ejemplares/perfil/44890/his-majesty">HIS MAJESTY</a><br>01/01/1968</div>
                            <div class="w4 wHembra "><span class="punto-g">16</span><a href="/ejemplares/perfil/385900/i-s-right">I'S RIGHT</a><br>01/01/1987</div>
                        </td>
					    <td width="10%" class="l4" >
							<div class="w1 wMacho "><span class="punto-g">8</span><a href="/ejemplares/perfil/43862/raise-a-native-usa">RAISE A NATIVE (USA)</a><br>01/01/1961</div>
							<div class="w2 wHembra "><span class="punto-g">13</span><a href="/ejemplares/perfil/45325/gold-digger-usa">GOLD DIGGER (USA)</a><br>01/01/1962</div>
							<div class="w3 wMacho "><span class="punto-g">5</span><a href="/ejemplares/perfil/56108/nureyev-usa">NUREYEV (USA)</a><br>01/01/1977</div>
							<div class="w4 wHembra "><span class="punto-g">20</span><a href="/ejemplares/perfil/377541/pasadoble">PASADOBLE</a><br>01/01/1979</div>
							<div class="w5 wMacho "><span class="punto-g">4</span><a href="/ejemplares/perfil/43838/ribot-ity">RIBOT (ITY)</a><br>01/01/1952</div>
							<div class="w6 wHembra "><span class="punto-g">4</span><a href="/ejemplares/perfil/44891/flower-bowl">FLOWER BOWL</a><br>01/01/1952</div>
							<div class="w7 wMacho "><span class="punto-g">10</span><a href="/ejemplares/perfil/371311/deputy-minister-can">DEPUTY MINISTER (CAN)</a><br>01/01/1979</div>
							<div class="w8 wHembra "><span class="punto-g">16</span><a href="/ejemplares/perfil/385901/glance">GLANCE</a><br>01/01/1980</div>
					    </td>
					</tr>
					
				</tbody>
            </table>
		<!-- </div> -->





                                </div>
                                <div class="tab-pane fade" id="offspring-tab" role="tabpanel" aria-labelledby="specimen-offspring-tab">
                                    <p>Aquí van los datos de la descendencia</p>
                                </div>
                                <div class="tab-pane fade" id="breeder-tab" role="tabpanel" aria-labelledby="specimen-breeder-tab">
                                    <p>Aquí van los datos del criador</p>
                                </div>
                                <div class="tab-pane fade" id="owner-tab" role="tabpanel" aria-labelledby="specimen-owner-tab">
                                    <p>Aquí van los datos del propietario</p>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>






        </div>
        <!-- /.card-body -->
    </div>



@stop

@section('css')
<style type="text/css">
    #table-pedigree td {
        vertical-align: middle !important;
        padding:6px;
    }

    #table-pedigree .select2 {
        margin-bottom:8px !important;
    }

    #table-pedigree td.l2 .w1 {
        margin-bottom:64px;
    }

    #table-pedigree label {
        display:block;
        text-align:center;
    }

    #table-pedigree.solo-data .wMacho {
        background-color:#3c8dbc;
    }

    #table-pedigree.solo-data .wHembra {
        background-color:#D81B60;
    }

    #table-pedigree.solo-data .wHembra, #table-pedigree.solo-data .wMacho {
        color:white;
        text-align: center;
        padding: 4px;
        border-radius: 4px;
        font-size: 10px;
        width:165px;
    }

    #table-pedigree.solo-data.l4 td.l2  div.w2 {
        
    }

    #table-pedigree.solo-data.l4 td.l2  div.w1 {
        margin-bottom:180px !important;
    }

    #table-pedigree.solo-data.l4 td.l3  div {
        margin-bottom:67px;
    }

    #table-pedigree.solo-data td.l4  div {
        margin-bottom:4px;
    }

    #table-pedigree.solo-data td.l3  div {
        margin-bottom:10px;
    }

    #table-pedigree.solo-data td.l3  div.w2 {
        margin-bottom:38px;
    }

    #table-pedigree.solo-data td.l3  div.w1, #table-pedigree.solo-data td.l3  div.w3 {
        margin-bottom:40px;
    }

    #table-pedigree.solo-data td.l2  div.w1 {
        margin-bottom:110px;
    }

    #table-pedigree.solo-data td.l2  div.w2 {
        margin-bottom:10px;
    }

    #table-pedigree.solo-data a {
        color:white;
    }
    

    .w1 .select2 {}

    .wMacho .select2 {
        border:1px solid #3c8dbc;
    }

    .wHembra .select2 {
        border:1px solid #dc4f50;
    }

    #table-pedigree.mobile div.w1 {
        margin-bottom:0px;
    }
</style>
@stop

@section('js')
    <script language="Javascript">
        function imprSelec(name) {
        var ficha = document.getElementById(name);
        var ventimp = window.open(' ', 'popimpr');
        ventimp.document.write( ficha.innerHTML );
        ventimp.document.close();
        ventimp.print( );
        ventimp.close();
        }
	</script>
    <script>
        
        $(document).ready(function() {
            $('.product-image-thumb').on('click', function () {
            var $image_element = $(this).find('img')
            $('.product-image').prop('src', $image_element.attr('src'))
            $('.product-image-thumb.active').removeClass('active')
            $(this).addClass('active')
            })
        })

    </script>
@stop