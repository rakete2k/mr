@extends('admin.master')

@section('content')
<!-- Create Project CSS -->
<script src="{{ asset('js/auth/projects/edit.js') }}"></script>
    <div class="container">
        <div id="deleteDialog" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Projekt löschen</h4>
                    </div>
                    <div class="modal-body">
                        <p>Willst du das Projekt wirklich löschen?</p>
                        <p class="text-warning"><small>Das Projekt wird unwiderruflich gelöscht.</small></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Abbrechen</button>
                        <button type="button" class="btn btn-danger">Löschen</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading">Projekt bearbeiten</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form>
                                        <div class="form-group">
                                            <input class="form-control" type="hidden" value="{{ $project->id }}" id="id">
                                            <label for="title">Titel</label>
                                            <input class="form-control" type="text" value="{{ $project->title }}" id="title">
                                            <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                                        </div>
                                        <div class="form-group">
                                            <label for="village">Ort</label>
                                            <input class="form-control" type="text" value="{{ $project->village }}" id="village">
                                        </div>
                                        <div class="form-group">
                                            <label for="realization_year">Realisierungsjahr</label>
                                            <input class="form-control" type="text" value="{{ $project->realization_year }}" id="realization_year">
                                        </div>
                                        <div class="form-group">
                                            <label for="living_space">Wohnfläche</label>
                                            <input class="form-control" type="text" value="{{ $project->living_space }}" id="living_space">
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Beschreibung</label>
                                            <textarea class="form-control" id="description" rows="6">{{ $project->description }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="activate">Publiziert</label>
                                            <select class="form-control" id="activate">
                                                @if ($project->activate === 1)
                                                    <option value="1" selected>Ja</option>
                                                    <option value="0">Nein</option>
                                                @else
                                                    <option value="1">Ja</option>
                                                    <option value="0" selected>Nein</option>
                                                @endif
                                            </select>
                                        </div>
                                        <button id="project-speichern" class="btn btn-primary pull-right open-createDialog">Speichern</button>
                                        <a href="{!! url('/admin/projects') !!}" class="btn btn-danger pull-right" data-toggle="modal" data-target="#myModal">Abbrechen</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection