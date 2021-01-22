<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{--  <title>{{ config('app.name', 'SIPSEIV2') }}</title> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--COMBIAR NOMBRE DE PROYECTO Y VINCULAR LA RUTA CON EL FABICON-->
    <link rel="icon"
        {{--  href="{{ request()->getHttpHost() == 'sicata.test' ? asset('images/favicon.ico') : asset('public/images/favicon.ico') }}">
    --}}
    {{--  <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="app-prefix" content="{{ url('/') }}"> --}}
    {{--  <!-- LARAVEL JAVASCRIPT -->  --}}
    <!--script src="{{ asset('js/app.js') }}"></script-->
    {{--  <!-- CSS DE LARAVEL -->  --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <main class="content pt-5" style="padding-bottom: 100px">
        <div class="container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-9" style="margin: 0 auto">
                        <h3 class="mb-5">
                            <strong>Formulario de prueba</strong>
                        </h3>
                        <form id="form_medio" action="" enctype="multipart/form-data">

                            <div class="card card-primary card-outline mb-5">
                                <div class="card-header">
                                    <h3 class="card-tite text-primary">
                                        Datos Generales
                                    </h3>
                                </div>
                                <section class="card-body">

                          
                                  
                                  {{--  <!-- Tipo del medio -->  --}}
                                  <div class="row">
                                      <div class="col-12">
                                          <label class="col-form-label">Tipo de Medio</label>
                                          <div class="form-group">
                                              <input type="text" class="form-control disabled" value="" disabled>
                                          </div>
                                      </div>
                                  </div>
                                  {{--  <!-- Nombre del medio, RFC, Fecha de alta ante el SAT y Actividad empresarial-->  --}}
                                  <div class="row">
                                      <div class="col-12">                
                                          <label for="medio_nombre" class="col-form-label">Nombre del medio <span class="text-red">*</span></label>
                                          <div class="form-group">
                                              <input type="text" id="medio_nombre" name="nombre"
                                                  class="form-control validacion-o"
                                                  placeholder="Nombre del medio" data-type="advancedText" autocomplete="off"
                                                  data-inputname="Nombre del medio" maxlength="120" minlength="2" required
                                                  value="">
                                              <div class="boxMesNum">
                                                  <div id="error-medio_nombre" class="errorMessage">
                                                  </div>
                                                  <div id="string-medio_nombre" class="d-none">0</div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-12 col-md-6">  
                                          <label for="medio_rfc" class="col-form-label">RFC <span class="text-red">*</span></label>
                                          <div class="form-group">
                                              <input type="text" id="medio_rfc" name="rfc"
                                                  class="form-control text-uppercase validacion-o {{ $errors->first('rfc') == null ? '' : 'is-invalid'}}"
                                                  placeholder="RFC" data-type="rfc" autocomplete="off"
                                                  data-inputname="RFC" maxlength="13" minlength="12" required
                                                  value="{{ old('rfc', $medio->rfc ?? null) }}">
                                              <div class="boxMesNum">
                                                  <div id="error-medio_rfc" class="errorMessage">{{ $errors->first('rfc') }}
                                                  </div>
                                                  <div id="string-medio_rfc" class="d-none">0</div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-12 col-sm-6">
                                          <label class="col-form-label" for="medio_fecha_alta_sat">Fecha de alta ante el SAT <span class="text-red">*</span></label>
                                          <div class="form-group">
                                              <!--
                                              <input type="text" id="medio_fecha_alta_sat" name="fecha_alta_sat"
                                                  class="form-control date-picker-age" placeholder="DD/MM/AAAA"
                                                  data-type="mediumText" autocomplete="off" data-toggle="datetimepicker"
                                                  data-target="#medio_fecha_alta_sat" data-inputname="Fecha de nacimiento" required>
                                              <div class="boxMesNum">
                                                  <div id="error-medio_fecha_alta_sat" class="errorMessage">
                                                      {{ $errors->first('fecha_alta_sat') }}</div>
                                              </div>
                                              -->
                                              <div class="row">
                                                  <div class="col-4">
                                                      <select id="medio_fecha_alta_sat_dia" name="fecha_alta_sat_dia"
                                                          class="form-control validacion-o {{ $errors->first('fecha_alta_sat_dia') == null ? '' : 'is-invalid'}}"
                                                          placeholder="Día" data-type="list" autocomplete="off"
                                                          data-inputname="Día" required>
                                                          <option disabled selected value>Día</option>
                                                          @for ($i = 1; $i <= 31; $i++)
                                                          <option value="{{ $i }}"> {{ $i }} </option>
                                                          @endfor
                                                      </select>
                                                  </div>
                                                  <div class="col-4">
                                                      <select id="medio_fecha_alta_sat_mes" name="fecha_alta_sat_mes"
                                                          class="form-control validacion-o {{ $errors->first('fecha_alta_sat_mes') == null ? '' : 'is-invalid'}}"
                                                          placeholder="Mes" data-type="list" autocomplete="off"
                                                          data-inputname="Mes" required>
                                                          <option disabled selected value>Mes</option>
                                                          <option value="1"> Enero </option>
                                                          <option value="2"> Febrero </option>
                                                          <option value="3"> Marzo </option>
                                                          <option value="4"> Abril </option>
                                                          <option value="5"> Mayo </option>
                                                          <option value="6"> Junio </option>
                                                          <option value="7"> Julio </option>
                                                          <option value="8"> Agosto </option>
                                                          <option value="9"> Septiembre </option>
                                                          <option value="10"> Octubre </option>
                                                          <option value="11"> Noviembre </option>
                                                          <option value="12"> Diciembre </option>
                                                      </select>
                                                  </div>
                                                  <div class="col-4">
                                                      <select id="medio_fecha_alta_sat_ano" name="fecha_alta_sat_ano"
                                                          class="form-control validacion-o {{ $errors->first('fecha_alta_sat_ano') == null ? '' : 'is-invalid'}}"
                                                          placeholder="Año" data-type="list" autocomplete="off"
                                                          data-inputname="Año" required>
                                                          <option disabled selected value>Año</option>
                                                          @for ($i = date("Y"); $i >= 1900; $i--)
                                                          <option value="{{ $i }}"> {{ $i }} </option>
                                                          @endfor
                                                      </select>
                                                  </div>
                                              </div>
                                              <div class="boxMesNum">
                                                  <div id="error-medio_fecha_alta_sat_dia" class="errorMessage"> {{ $errors->first('fecha_alta_sat_dia') }}</div>
                                              </div>
                                              <div class="boxMesNum">
                                                  <div id="error-medio_fecha_alta_sat_mes" class="errorMessage"> {{ $errors->first('fecha_alta_sat_mes') }}</div>
                                              </div>
                                              <div class="boxMesNum">
                                                  <div id="error-medio_fecha_alta_sat_ano" class="errorMessage"> {{ $errors->first('fecha_alta_sat_ano') }}</div>
                                              </div>
                                              <div class="boxMesNum">
                                                  <div id="error-medio_fecha_alta_sat" class="errorMessage"> {{ $errors->first('fecha_alta_sat') }}</div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-12">  
                                          <label for="medio_actividad_empresarial" class="col-form-label">Actividad empresarial </label>
                                          <div class="form-group">
                                              <input type="text" id="medio_actividad_empresarial" name="actividad_empresarial"
                                                  class="form-control validacion-o {{ $errors->first('actividad_empresarial') == null ? '' : 'is-invalid'}}"
                                                  placeholder="Actividad empresarial" data-type="mediumText" autocomplete="off"
                                                  data-inputname="Actividad empresarial" maxlength="120" minlength="2"
                                                  value="{{ old('actividad_empresarial', $medio->actividad_empresarial ?? null) }}" required>
                                              <div class="boxMesNum">
                                                  <div id="error-medio_actividad_empresarial" class="errorMessage">{{ $errors->first('actividad_empresarial') }}
                                                  </div>
                                                  <div id="string-medio_actividad_empresarial" class="d-none">0</div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <!-- Domicilio -->
                                  <div class="row">
                                      <div class="col-12">                
                                          <label for="medio_calle_numero" class="col-form-label">Domicilio <span class="text-red">*</span></label>
                                          <div class="form-group">
                                              <input type="text" id="medio_calle_numero" name="calle_numero"
                                                  class="form-control validacion-o {{ $errors->first('calle_numero') == null ? '' : 'is-invalid'}}"
                                                  placeholder="Calle y número" data-type="advancedText" autocomplete="off"
                                                  data-inputname="Calle y número" maxlength="120" minlength="2" required
                                                  value="{{ old('calle_numero', $medio->calle_numero ?? null) }}">
                                              <div class="boxMesNum">
                                                  <div id="error-medio_calle_numero" class="errorMessage">{{ $errors->first('calle_numero') }}
                                                  </div>
                                                  <div id="string-medio_calle_numero" class="d-none">0</div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-12 col-md-8">
                                          <div class="form-group">
                                              <input type="text" id="medio_colonia" name="colonia"
                                                  class="form-control validacion-o {{ $errors->first('colonia') == null ? '' : 'is-invalid'}}"
                                                  placeholder="Colonia" data-type="advancedText" autocomplete="off"
                                                  data-inputname="Colonia" maxlength="120" minlength="2" required
                                                  value="{{ old('colonia', $medio->colonia ?? null) }}">
                                              <div class="boxMesNum">
                                                  <div id="error-medio_colonia" class="errorMessage">{{ $errors->first('colonia') }}
                                                  </div>
                                                  <div id="string-medio_colonia" class="d-none">0</div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-12 col-md-4">
                                          <div class="form-group">
                                              <input type="text" id="medio_codigo_postal" name="codigo_postal"
                                                  class="form-control validacion-o {{ $errors->first('codigo_postal') == null ? '' : 'is-invalid'}}"
                                                  placeholder="Código postal" data-type="basicNumber" autocomplete="off"
                                                  data-inputname="Código postal" maxlength="5" minlength="5" required
                                                  value="{{ old('codigo_postal', $medio->codigo_postal ?? null) }}">
                                              <div class="boxMesNum">
                                                  <div id="error-medio_codigo_postal" class="errorMessage">{{ $errors->first('codigo_postal') }}
                                                  </div>
                                                  <div id="string-medio_codigo_postal" class="d-none">0</div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-12 col-md-6">
                                          <div class="form-group">
                                              <select id="medio_entidad_federativa" name="entidad_federativa_id"
                                                  class="form-control validacion-o {{ $errors->first('entidad_federativa_id') == null ? '' : 'is-invalid'}}"
                                                  placeholder="Entidad Federativa" data-type="list" autocomplete="off"
                                                  data-inputname="Entidad Federativa" required>
                                                  <option disabled selected value>Seleccione una opción...</option>
                                                  @foreach( $entidades_federativas as $entidad_federativa )
                                                  <option value="{{ $entidad_federativa->id }}" {{ $entidad_federativa->id == 30 ? 'selected' : '' }}> {{ $entidad_federativa->nombre }} </option>
                                                  @endforeach
                                              </select>
                                              <div class="boxMesNum">
                                                  <div id="error-medio_entidad_federativa" class="errorMessage">
                                                      {{ $errors->first('entidad_federativa_id') }}
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-12 col-md-6">
                                          <div class="form-group">
                                              <select id="medio_municipio" name="municipio_id"
                                                  class="form-control validacion-o {{ $errors->first('municipio_id') == null ? '' : 'is-invalid'}}"
                                                  placeholder="Municipio" data-type="list" autocomplete="off"
                                                  data-inputname="Municipio" required>
                                                  <option disabled selected value>Seleccione una opción...</option>
                                                  @foreach( $municipios as $municipio )
                                                  <option value="{{ $municipio->id }}"> {{ $municipio->nombre }} </option>
                                                  @endforeach
                                              </select>
                                              <div class="boxMesNum">
                                                  <div id="error-medio_municipio" class="errorMessage">
                                                      {{ $errors->first('municipio_id') }}
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                </section><!-- /.card-body -->
                          </div> <!-- /.card Datos generales -->
                          
                          <!-- .card Datos a capturar -->
                          <div class="card card-primary card-outline mb-5">
                              <div class="card-header">
                                  <h3 class="card-title text-primary">Datos a capturar para medios {{$tipo_medio->nombre}}</h3>
                              </div>
                              <div class="card-body">
                                  <!-- Entidad federativa -->
                                  <div class="row">
                                     
                                          <div class="col-12">
                                              <label class="col-form-label" for="medio_director_general">Nombre del director general <span class="text-red">*</span></label>
                                              <div class="form-group">
                                                  <input type="text" id="medio_director_general" name="director_general"
                                                      class="form-control validacion-o {{ $errors->first('director_general') == null ? '' : 'is-invalid'}}"
                                                      placeholder="Nombre del director general" data-type="mediumText" autocomplete="off"
                                                      data-inputname="Nombre del director general" maxlength="120" minlength="1" required
                                                      value="{{ old('director_general', $medio->director_general ?? null) }}">
                                                  <div class="boxMesNum">
                                                      <div id="error-medio_director_general" class="errorMessage">{{ $errors->first('director_general') }}
                                                      </div>
                                                      <div id="string-medio_director_general" class="d-none">0</div>
                                                  </div>
                                              </div>
                                          </div>
                                      @endif
                                      @if(is_medio_cine(Auth::user()))
                                          <div class="col-12">
                                              <label class="col-form-label" for="medio_nombre_cine">Nombre del cine <span class="text-red">*</span></label>
                                              <div class="form-group">
                                                  <input type="text" id="medio_nombre_cine" name="nombre_cine"
                                                      class="form-control validacion-o {{ $errors->first('nombre_cine') == null ? '' : 'is-invalid'}}"
                                                      placeholder="Nombre del cine" data-type="advancedText" autocomplete="off"
                                                      data-inputname="Nombre del cine" maxlength="120" minlength="1" required
                                                      value="{{ old('nombre_cine', $medio->nombre_cine ?? null) }}">
                                                  <div class="boxMesNum">
                                                      <div id="error-medio_nombre_cine" class="errorMessage">{{ $errors->first('nombre_cine') }}
                                                      </div>
                                                      <div id="string-medio_nombre_cine" class="d-none">0</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-12">
                                              <div class="form-group">
                                                  <label class="col-form-label" for="medio_nombre_comercial_cine">Nombre comercial del cine <span class="text-red">*</span></label>
                                                  <input type="text" id="medio_nombre_comercial_cine" name="nombre_comercial_cine"
                                                      class="form-control validacion-o {{ $errors->first('nombre_comercial_cine') == null ? '' : 'is-invalid'}}"
                                                      placeholder="Nombre comercial del cine" data-type="advancedText" autocomplete="off"
                                                      data-inputname="Nombre comercial del cine" maxlength="120" minlength="1" required
                                                      value="{{ old('nombre_comercial_cine', $medio->nombre_comercial_cine ?? null) }}">
                                                  <div class="boxMesNum">
                                                      <div id="error-medio_nombre_comercial_cine" class="errorMessage">{{ $errors->first('nombre_comercial_cine') }}
                                                      </div>
                                                      <div id="string-medio_nombre_comercial_cine" class="d-none">0</div>
                                                  </div>
                                              </div>
                                          </div>
                                      @endif
                                      @if(is_medio_cine(Auth::user()) || is_medio_web(Auth::user()))
                                          <div class="col-12">
                                              <label class="col-form-label" for="medio_razon_social">Razón social <span class="text-red">*</span></label>
                                              <div class="form-group">
                                                  <input type="text" id="medio_razon_social" name="razon_social"
                                                      class="form-control validacion-o {{ $errors->first('razon_social') == null ? '' : 'is-invalid'}}"
                                                      placeholder="Razón social" data-type="advancedText" autocomplete="off"
                                                      data-inputname="Razón social" maxlength="120" minlength="1" required
                                                      value="{{ old('razon_social', $medio->razon_social ?? null) }}">
                                                  <div class="boxMesNum">
                                                      <div id="error-medio_razon_social" class="errorMessage">{{ $errors->first('razon_social') }}
                                                      </div>
                                                      <div id="string-medio_razon_social" class="d-none">0</div>
                                                  </div>
                                              </div>
                                          </div>
                                      @endif
                                      @php
                                          $ventas = is_medio_web(Auth::user()) ? 'agente de ventas' : 'gerente de ventas';
                                      @endphp
                                      <div class="col-12">
                                          <label class="col-form-label" for="medio_nombre_ventas">Nombre del {{ $ventas }} <span class="text-red">*</span></label>
                                          <div class="form-group">
                                              <input type="text" id="medio_nombre_ventas" name="nombre_ventas"
                                                  class="form-control validacion-o {{ $errors->first('nombre_ventas') == null ? '' : 'is-invalid'}}"
                                                  placeholder="Nombre del {{ $ventas }}" data-type="mediumText" autocomplete="off"
                                                  data-inputname="Nombre del {{ $ventas }}" maxlength="120" minlength="1" required
                                                  value="{{ old('nombre_ventas', $medio->nombre_ventas ?? null) }}">
                                              <div class="boxMesNum">
                                                  <div id="error-medio_nombre_ventas" class="errorMessage">{{ $errors->first('nombre_ventas') }}
                                                  </div>
                                                  <div id="string-medio_nombre_ventas" class="d-none">0</div>
                                              </div>
                                          </div>
                                      </div>
                                      @if(is_medio_impreso(Auth::user()) || is_medio_cine(Auth::user()))
                                      <div class="col-12">
                                          <label class="col-form-label" for="medio_representante_legal">Nombre del representante legal</label>
                                          <div class="form-group">
                                              <input type="text" id="medio_representante_legal" name="representante_legal"
                                                  class="form-control validacion-o opcional {{ $errors->first('representante_legal') == null ? '' : 'is-invalid'}}"
                                                  placeholder="Nombre del representante legal" data-type="mediumText" autocomplete="off"
                                                  data-inputname="Nombre del representante legal" maxlength="120" minlength="1"
                                                  value="{{ old('representante_legal', $medio->representante_legal ?? null) }}">
                                              <div class="boxMesNum">
                                                  <div id="error-medio_representante_legal" class="errorMessage">{{ $errors->first('representante_legal') }}
                                                  </div>
                                                  <div id="string-medio_representante_legal" class="d-none">0</div>
                                              </div>
                                          </div>
                                      </div>
                                      @endif
                                  </div>
                              </div><!-- /.card-body -->
                          </div> <!-- /.card Datos a capturar -->
                          
                          <!-- .card Documentos -->
                          <div class="card card-primary card-outline mb-5 documentos">
                              <div class="card-header">
                                  <h3 class="card-title text-primary">Documentos Digitalizados</h3>
                              </div>
                              <div class="card-body">
                                  <div class="row">
                                      <div style="margin-bottom: 2%; padding: 6px; border-radius: 5px; border-left: 4px solid #EA0D94; background-color:rgba(234, 13, 148, 0.25)">
                                          <small>Suba únicamente documentos legibles no superiores a 25 MB.</small>
                                      </div>
                                      <div class="col-12">
                                          <label for="medio_doc_1_1_catalogo_tarifas_pdf" class="o-form-label" style="margin-right: 10px">1.1 Catálogo de tarifas <span class="text-muted">(PDF firmado)</span><span class="text-red">*</span></label>
                                          <div class="form-group">
                                              <div class="custom-file">
                                                  <input type="file" accept="application/pdf" id="medio_doc_1_1_catalogo_tarifas_pdf" name="doc_1_1_catalogo_tarifas_pdf" class="custom-file-input validacion-o" data-type="pdf" autocomplete="off" data-inputname="Catálogo de tarifas" required>
                                                  <label id="fileLabel-medio_doc_1_1_catalogo_tarifas_pdf" for="medio_doc_1_1_catalogo_tarifas_pdf" class="custom-file-label text-muted">Seleccione un archivo...</label>
                                              </div>
                                              <small class="text-muted">Catálogo de tarifas por Unidad y por paquete de especio para propaganda electoral relacionada con los cargos de elección popular, 
                                                                       incluyendo las promociones y el costo por publicidad y el desglose del Impuesto al Valor Electoral, para su contratación por parte
                                                                       de los partidos políticos, coaliciones, medios a candidaturas independientes y candidaturas independientes.</small>
                                                                       <a href="{{ is_medio_impreso(Auth::user()) ? public_asset('docs/ANEXO_1_IMPRESOS.docx') : (is_medio_cine(Auth::user()) ? public_asset('docs/ANEXO_1_CINE.docx') : public_asset('docs/ANEXO_1_WEB.docx') ) }}" target="_blank"> 
                                                                          <strong>(Anexo 1)</strong>
                                                                      </a>
                                              <div class="boxMesNum">
                                                  <div id="error-medio_doc_1_1_catalogo_tarifas_pdf" class="errorMessage">{{ $errors->first('doc_1_1_catalogo_tarifas_pdf') }} </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-12">
                                          <label for="medio_doc_1_2_catalogo_tarifas_word" class="o-form-label" style="margin-right: 10px">1.2 Catálogo de tarifas <span class="text-muted">(Archivo Word)</span><span class="text-red">*</span></label>
                                          <div class="form-group">
                                              <div class="custom-file">
                                                  <input type="file" accept="application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document" id="medio_doc_1_2_catalogo_tarifas_word" name="doc_1_2_catalogo_tarifas_word" class="custom-file-input validacion-o" data-type="word" autocomplete="off" data-inputname="Catálogo de tarifas" required>
                                                  <label id="fileLabel-medio_doc_1_2_catalogo_tarifas_word" for="medio_doc_1_2_catalogo_tarifas_word" class="custom-file-label text-muted">Seleccione un archivo...</label>
                                              </div>
                                              <small class="text-muted">Catálogo de tarifas por Unidad y por paquete de especio para propaganda electoral relacionada con los cargos de elección popular, 
                                                                       incluyendo las promociones y el costo por publicidad y el desglose del Impuesto al Valor Electoral, para su contratación por parte
                                                                       de los partidos políticos, coaliciones, medios a candidaturas independientes y candidaturas independientes.</small>
                                                                       <a href="{{ is_medio_impreso(Auth::user()) ? public_asset('docs/ANEXO_1_IMPRESOS.docx') : (is_medio_cine(Auth::user()) ? public_asset('docs/ANEXO_1_CINE.docx') : public_asset('docs/ANEXO_1_WEB.docx') ) }}" target="_blank"> 
                                                                          <strong>(Anexo 1)</strong>
                                                                      </a>
                                              <div class="boxMesNum">
                                                  <div id="error-medio_doc_1_2_catalogo_tarifas_word" class="errorMessage">{{ $errors->first('doc_1_2_catalogo_tarifas_word') }} </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-12">
                                          <label for="medio_doc_2_acta_constitutiva" class="o-form-label" style="margin-right: 10px">2. Acreditación de persona física o moral <span class="text-red">*</span></label>
                                          <div class="form-group">
                                              <div class="custom-file">
                                                  <input type="file" accept="application/pdf" id="medio_doc_2_acta_constitutiva" name="doc_2_acta_constitutiva" class="custom-file-input validacion-o" data-type="pdf" autocomplete="off" data-inputname="Acreditación de persona física o moral" required>
                                                  <label id="fileLabel-medio_doc_2_acta_constitutiva" for="medio_doc_2_acta_constitutiva" class="custom-file-label text-muted">Seleccione un archivo...</label>
                                              </div>
                                              <small class="text-muted">Documento que acredite que es una Persona física o moral legalmente constituida.</small>
                                              <div class="boxMesNum">
                                                  <div id="error-medio_doc_2_acta_constitutiva" class="errorMessage">{{ $errors->first('doc_2_acta_constitutiva') }} </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-12">
                                          <label for="medio_doc_3_domicilio_fiscal" class="o-form-label" style="margin-right: 10px">3. Acreditación de domicilio fiscal <span class="text-red">*</span></label>
                                          <div class="form-group">
                                              <div class="custom-file">
                                                  <input type="file" accept="application/pdf" id="medio_doc_3_domicilio_fiscal" name="doc_3_domicilio_fiscal" class="custom-file-input validacion-o" data-type="pdf" autocomplete="off" data-inputname="Acreditación de domicilio fiscal" required>
                                                  <label id="fileLabel-medio_doc_3_domicilio_fiscal" for="medio_doc_3_domicilio_fiscal" class="custom-file-label text-muted">Seleccione un archivo...</label>
                                              </div>
                                              <small class="text-muted">Documento que acredite el Domicilio Fiscal.</small>
                                              <div class="boxMesNum">
                                                  <div id="error-medio_doc_3_domicilio_fiscal" class="errorMessage">{{ $errors->first('doc_3_domicilio_fiscal') }} </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-12">
                                          <label for="medio_doc_4_representante_legal" class="o-form-label" style="margin-right: 10px">4. Acreditación del representante o apoderado legal <span class="text-red">*</span></label>
                                          <div class="form-group">
                                              <div class="custom-file">
                                                  <input type="file" accept="application/pdf" id="medio_doc_4_representante_legal" name="doc_4_representante_legal" class="custom-file-input validacion-o" data-type="pdf" autocomplete="off" data-inputname="Acreditación del representante o apoderado legal" required>
                                                  <label id="fileLabel-medio_doc_4_representante_legal" for="medio_doc_4_representante_legal" class="custom-file-label text-muted">Seleccione un archivo...</label>
                                              </div>
                                              <small class="text-muted">En su caso, documento que acredite la representación legal o ser apoderado legal de la persona física o moral.</small>
                                              <div class="boxMesNum">
                                                  <div id="error-medio_doc_4_representante_legal" class="errorMessage">{{ $errors->first('doc_4_representante_legal') }} </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-12">
                                          <label for="medio_doc_5_identificacion_oficial" class="o-form-label" style="margin-right: 10px">5. Identificación oficial del representante legal <span class="text-red">*</span></label>
                                          <div class="form-group">
                                              <div class="custom-file">
                                                  <input type="file" accept="application/pdf" id="medio_doc_5_identificacion_oficial" name="doc_5_identificacion_oficial" class="custom-file-input validacion-o" data-type="pdf" autocomplete="off" data-inputname="Identificación oficial del representante legal" required>
                                                  <label id="fileLabel-medio_doc_5_identificacion_oficial" for="medio_doc_5_identificacion_oficial" class="custom-file-label text-muted">Seleccione un archivo...</label>
                                              </div>
                                              <small class="text-muted">Identificación oficial vigente con fotografía de la persona física o del representante legal.</small>
                                              <div class="boxMesNum">
                                                  <div id="error-medio_doc_5_identificacion_oficial" class="errorMessage">{{ $errors->first('doc_5_identificacion_oficial') }} </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-12">
                                          <label for="medio_doc_6_declaracion_verdad" class="o-form-label" style="margin-right: 10px">6. Declaración de decir la verdad <span class="text-red">*</span></label>
                                          <div class="form-group">
                                              <div class="custom-file">
                                                  <input type="file" accept="application/pdf" id="medio_doc_6_declaracion_verdad" name="doc_6_declaracion_verdad" class="custom-file-input validacion-o" data-type="pdf" autocomplete="off" data-inputname="Declaración de decir la verdad" required>
                                                  <label id="fileLabel-medio_doc_6_declaracion_verdad" for="medio_doc_6_declaracion_verdad" class="custom-file-label text-muted">Seleccione un archivo...</label>
                                              </div>
                                              <small class="text-muted">Escrito bajo protesta de verdad de que los datos proporcionados son ciertos y que han sido debidamente verificados.</small>
                                              <a href="{{ public_asset('docs/ANEXO_2.docx') }}" target="_blank"> 
                                                  <strong>(Anexo 2)</strong>
                                               </a>
                                              <div class="boxMesNum">
                                                  <div id="error-medio_doc_6_declaracion_verdad" class="errorMessage">{{ $errors->first('doc_6_declaracion_verdad') }} </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-12">
                                          <label for="medio_doc_7_carta_compromiso" class="o-form-label" style="margin-right: 10px">7. Carta compromiso <span class="text-red">*</span></label>
                                          <div class="form-group">
                                              <div class="custom-file">
                                                  <input type="file" accept="application/pdf" id="medio_doc_7_carta_compromiso" name="doc_7_carta_compromiso" class="custom-file-input validacion-o" data-type="pdf" autocomplete="off" data-inputname="Carta compromiso" required>
                                                  <label id="fileLabel-medio_doc_7_carta_compromiso" for="medio_doc_7_carta_compromiso" class="custom-file-label text-muted">Seleccione un archivo...</label>
                                              </div>
                                              <small class="text-muted">Carta compromiso.</small>
                                              <a href="{{ public_asset('docs/ANEXO_3.docx') }}" target="_blank"> 
                                                  <strong>(Anexo 3)</strong>
                                               </a>
                                              <div class="boxMesNum">
                                                  <div id="error-medio_doc_7_carta_compromiso" class="errorMessage">{{ $errors->first('doc_7_carta_compromiso') }} </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-12">
                                          <label for="medio_doc_8_aviso_privacidad" class="o-form-label" style="margin-right: 10px">8. Aviso de Privacidad <span class="text-red">*</span></label>
                                          <div class="form-group">
                                              <div class="custom-file">
                                                  <input type="file" accept="application/pdf" id="medio_doc_8_aviso_privacidad" name="doc_8_aviso_privacidad" class="custom-file-input validacion-o" data-type="pdf" autocomplete="off" data-inputname="Aviso de Privacidad" required>
                                                  <label id="fileLabel-medio_doc_8_aviso_privacidad" for="medio_doc_8_aviso_privacidad" class="custom-file-label text-muted">Seleccione un archivo...</label>
                                              </div>
                                              <small class="text-muted">Aviso de Privacidad.</small>
                                              <a href="{{ public_asset('docs/ANEXO_4.pdf') }}" target="_blank"> 
                                                  <strong>(Anexo 4)</strong>
                                               </a>
                                              <div class="boxMesNum">
                                                  <div id="error-medio_doc_8_aviso_privacidad" class="errorMessage">{{ $errors->first('doc_8_aviso_privacidad') }} </div>
                                              </div>
                                          </div>
                                      </div>
                                      <!--
                                      <div class="col-12">
                                          <label for="medio_doc_9_oficio_ratificacion" class="o-form-label" style="margin-right: 10px">9. Ratificación de costos y tarifas <span class="text-red">*</span></label>
                                          <div class="form-group">
                                              <div class="custom-file">
                                                  <input type="file" accept="application/pdf" id="medio_doc_9_oficio_ratificacion" name="doc_9_oficio_ratificacion" class="custom-file-input validacion-o" data-type="pdf" autocomplete="off" data-inputname="Ratificación de costos y tarifas" required>
                                                  <label id="fileLabel-medio_doc_9_oficio_ratificacion" for="medio_doc_9_oficio_ratificacion" class="custom-file-label text-muted">Seleccione un archivo...</label>
                                              </div>
                                              <small class="text-muted">Oficio de ratificación de costos y tarifas ofertados sean los mismos.</small>
                                              <a href="{{ public_asset('docs/ANEXO_5.pdf') }}" target="_blank"> 
                                                  <strong>(Anexo 5)</strong>
                                               </a>
                                              <div class="boxMesNum">
                                                  <div id="error-medio_doc_9_oficio_ratificacion" class="errorMessage">{{ $errors->first('doc_9_oficio_ratificacion') }} </div>
                                              </div>
                                          </div>
                                      </div>
                                      -->
                                      <div class="col-12">
                                          <label for="medio_doc_10_correo_electronico" class="o-form-label" style="margin-right: 10px">9. Designación de correo electrónico <span class="text-red">*</span></label>
                                          <div class="form-group">
                                              <div class="custom-file">
                                                  <input type="file" accept="application/pdf" id="medio_doc_10_correo_electronico" name="doc_10_correo_electronico" class="custom-file-input validacion-o" data-type="pdf" autocomplete="off" data-inputname="Designación de correo electrónico" required>
                                                  <label id="fileLabel-medio_doc_10_correo_electronico" for="medio_doc_10_correo_electronico" class="custom-file-label text-muted">Seleccione un archivo...</label>
                                              </div>
                                              <small class="text-muted">Formato en el que designen un correo electrónico y acepten notificaciones electrónicas.</small>
                                              <a href="{{ public_asset('docs/ANEXO_5.docx') }}" target="_blank"> 
                                                  <strong>(Anexo 5)</strong>
                                               </a>
                                              <div class="boxMesNum">
                                                  <div id="error-medio_doc_10_correo_electronico" class="errorMessage">{{ $errors->first('doc_10_correo_electronico') }} </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div><!-- /.card-body -->
                          </div> <!-- /.card Documentos -->
                          
                          <!-- .card Términos y condiciones -->
                          <div class="card card-primary card-outline mb-5 terminos">
                              <div class="card-header">
                                  <h3 class="card-title text-primary">Términos y condiciones</h3>
                              </div>
                              <div class="card-body">
                          
                                  <div class="row">
                                      <div class="col-12">
                                          <div class="custom-control custom-checkbox">
                                              <input type="checkbox" id="medio_terminos_a" name="terminos"
                                                  class="custom-control-input medio_terminos_a validacion-o {{ $errors->first('terminos') == null ? '' : 'is-invalid'}}"
                                                  data-type="checkbox" data-group="medio_terminos_a" data-inputname="He leído el Aviso de Privacidad" required>
                                              <label for="medio_terminos_a" class="custom-control-label">He leído y estoy de acuerdo con el <a href="{{ public_asset('docs/ANEXO_4.pdf') }}" target="_blank" rel="noopener noreferrer">Aviso de Privacidad</a>.<span class="text-red">*</span></label>
                                              <div class="boxMesNum">
                                                  <div id="error-medio_terminos_a" class="errorMessage"></div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                          
                              </div>
                            </div>

                            <div class="row justify-content-md-center mb-5">
                                <div class="col-12 col-md-6 text-center">
                                    <button type="submit" class="btn btn-lg btn-primary btn-submit-o"
                                        style="padding: 10px 50px 5px" data-form="form_medio">
                                        <h3>Completar Registro</h3>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
    </main>
</body>

</html>
