@extends('layouts.app')
@section('content')

    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default" style="margin-top: 50px;  ">
            <div class="panel-heading">
                <h3 class="panel-title">Dodaj novi studij</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" action="{{ route('study_create') }}" method="POST">
                    {{csrf_field()}}
                    <fieldset>
                        <legend></legend>
                        <div class="form-group">
                            <label for="inputName" class="col-lg-2 control-label">Naziv studija</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputName" name="name"
                                       placeholder="Naziv studija">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputShortName" class="col-lg-2 control-label">Opis</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputOpis" name="description"
                                       placeholder="Opis">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select" class="col-lg-2 control-label">Fakulteti</label>
                            <div class="col-lg-10">
                                <select class="form-control" id="select" name="faculty_id">
                                    @foreach($faculties as $faculty)
                                        <option value="{{$faculty->id}}">{{$faculty->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12" style="margin-top: 30px;">
                                <div class="col-md-6">
                                    <button type="reset" class="btn btn-default  btn-block">Cancel</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>

        </div>

    </div>
@endsection