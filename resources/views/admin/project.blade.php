@extends('admin.master')

@section('content')
    <div class="container">
        <div id="deleteDialog" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Projekt löschen</h4>
                    </div>
                    <div class="modal-body">
                        <p>Willst du das Projekt <strong>"<span class="dialog-title"></span>"</strong> wirklich löschen?</p>
                        <p class="text-warning"><small>Das Projekt wird unwiderruflich gelöscht.</small></p>
                    </div>
                    <div class="modal-footer">
                        <form id="delete-project">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Abbrechen</button>
                            <!--<button type="button" class="btn btn-danger">Löschen</button>-->
                            <button class="btn btn-danger pull-right" data-id="" data-toggle="modal" data-dismiss="modal" id="delete-dialog-btn">Löschen</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Projekte verwalten</h4></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                    <a href="{!! url('/admin/project/create') !!}" class="btn btn-primary pull-right">Neues Projekt</a>
                                        <table id="project-table" class="table table-bordred table-striped">
                                            <thead>
                                                <th>ID</th>
                                                <th>Titel</th>
                                                <th>Bauort</th>
                                                <th>Realisierungsjahr</th>
                                                <th>Erstellt am</th>
                                                <th>Veröffentlicht</th>
                                                <th></th>
                                            </thead>
                                            <tbody>
                                            @foreach($projects as $project)
                                                <tr id="project_row_{{ $project->id }}">
                                                    <td>{{ $project->id }}</td>
                                                    <td>{{ $project->title }}</td>
                                                    <td>{{ $project->village }}</td>
                                                    <td>{{ $project->realization_year }}</td>
                                                    <td>{{ date('d. F Y', strtotime($project->created_at)) }}</td>
                                                    <td>{{ $project->activate }}</td>
                                                    <td>
                                                        <p data-placement="top" data-toggle="tooltip">
                                                            <a class="btn btn-danger btn-sm pull-right open-deleteDialog" data-id="{{ $project->id }}" data-title="{{ $project->title }}" data-toggle="modal" data-target="#deleteDialog" href="#deleteDialog">Löschen</a>
                                                            <a href="{{ route('admin.project.edit', $project->id) }}" class="btn btn-default btn-sm pull-right">Bearbeiten</a>
                                                        </p>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection