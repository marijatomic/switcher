@extends ('layouts.app')

@section('content')
    @if($posts)
    <div class="col-md-8 col-md-offset-2">
        <div id="page-content-wrapper"class="panel-default" style="margin-top: 50px;">
            <ul class="nav swt-nav-pills nav-justified" style=" border: 3px;">
                <li><a href="#table_view" data-toggle="tab">Objave</a></li>
                <li><a href="{{route('posts_create')}}" class="btn">Dodaj</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade active in" id="table_view" style="padding-top:35px">
                    <table class="table table-striped table-hover ">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Sadržaj</th>
                            <th>Datum i vrijeme</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->content}}</td>
                                <td>{{$post->created_at}}</td>
                                <td><a href="{{route('posts_edit')}}/{{$post->id}}"
                                       class="btn swt-button-prim btn-xs">Uredi</a>
                                </td>
                                <td><a href="{{route('posts_delete')}}/{{$post->id}}"
                                       class="btn noborder btn-danger btn-xs">Izbriši</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @else
        <div class="col-lg-8 col-md-offset-2">
            <div class="panel panel-default" style="margin-top: 50px;">
                <div class="panel-body">
                    <div id="page-content-wrapper">

                        <p style="font-size: 20px; padding-bottom: 30px; font-family: 'Raleway', sans-serif;
                          font-weight: 100; color: #636b6f; text-align: center;">Tablica "posts" nema nikakvih podataka</p>
                        <div class="row">
                            <a href="{{route('posts_create')}}" class="btn btn-success noborder col-lg-offset-5 col-lg-2">Dodaj objavu</a>
                        </div>


                    </div>
                </div>
            </div>
        </div>

    @endif
@endsection
