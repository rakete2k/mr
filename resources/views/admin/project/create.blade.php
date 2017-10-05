@extends('admin.master')

@section('content')
<!-- Create Project CSS --><!-- CSRF Token -->
<!-- Scripts -->

<script src="{{ asset('js/auth/projects/create.js') }}"></script>
<meta name="base_url" content="{{ URL::to('/') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/auth/projects/create.css') }}">
<link rel="stylesheet" href="{{ asset('dropzone/individual/upload/css/rawstyle.css') }}">
<link rel="stylesheet" href="{{ asset('dropzone/individual/upload/css/imagehover.min.css') }}">
<link rel="stylesheet" href="{{ asset('dropzone/individual/upload/css/base.css') }}" />
<link rel="stylesheet" href="{{ asset('dropzone/individual/upload/css/style.css') }}" />
<link rel="stylesheet" href="{{ asset('dropzone/dist/min/dropzone.min.css') }}" />

    <div class="container">
        <div id="createDialog" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <p>Das Projekt <strong>"<span class="dialog-title"></span>"</strong> wurde erfolgreich gespeichert.</p>
                    </div>
                    <div class="modal-footer">
                        <form id="delete-project">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Schließen</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading"><h5>Neues Projekt erstellen</h5></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form id="create-form" action="#">
                                        {!! csrf_field() !!}
                                        <div class="form-group title" id="title-div">
                                            <label for="title">Titel</label>
                                            <input class="form-control" type="text" value="Test" id="title">
                                        </div>
                                        <div class="form-group" id="village-div">
                                            <label for="village">Ort</label>
                                            <input class="form-control" type="text" value="Aschendorf" id="village">
                                        </div>
                                        <div class="form-group" id="realization-year-div">
                                            <label for="realization_year">Realisierungsjahr</label>
                                            <input class="form-control" type="text" max="4" value="2020" id="realization_year">
                                        </div>
                                        <div class="form-group" id="living-space-div">
                                            <label for="living_space">Wohnfläche</label>
                                            <input class="form-control" type="number" value="400" id="living_space">
                                        </div>
                                        <div class="form-group" id="description-div">
                                            <label for="description">Beschreibung</label>
                                            <textarea class="form-control" id="description" rows="6">ASDASDSDAd</textarea>
                                        </div>
                                        <div class="form-group" id="activate-div">
                                            <label for="activate">Veröffentlichen</label>
                                            <select class="form-control" id="activate">
                                                <option value="1">Ja</option>
                                                <option value="0">Nein</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="upload-div">Projektbilder</label>
                                            <div>
                                                <div class="upload-drop-zone" id="drop-zone">
                                                    <span>Bilder per drag & drop einfügen</span>
                                                </div>
                                            </div>
                                            <div class="input-group" id="upload-div">
                                                <input type="text" class="form-control" id="upload" readonly>
                                                <input type="hidden" class="form-control" id="uploadfiles" readonly>
                                                <label class="input-group-btn">
                                                    <span class="btn btn-primary">
                                                        Bilder auswählen <input type="file" style="display: none;" multiple>
                                                    </span>
                                                </label>
                                            </div>
                                            <span class="help-block">
                                                Bilder nur im Format <strong>*.jpg</strong>, <strong>*.gif</strong> und <strong>*.png</strong> hochladen.
                                            </span>
                                        </div>
                                        <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
                                        <a href="javascript:void(0)" id="project-speichern" class="btn btn-primary pull-right open-createDialog">Speichern</a>
                                        <a href="{!! url('/admin/projects') !!}" class="btn btn-danger pull-right" >Abbrechen</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
<!-- Modernizr JS -->
<script src="{{ asset('dropzone/modernizr.js') }}"></script>
<!-- Dropzone JS -->
<script src="{{ asset('dropzone/dist/min/dropzone.min.js') }}"></script>
<!-- Individual Dropzone JS  -->
<script src="{{ asset('dropzone/individual/upload/js/mydropzone.js') }}"></script>
@endsection