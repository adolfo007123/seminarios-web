
@extends("layouts.mainlayout")

@section("title", "Administración de presentation")

@section("header", "Administración de presentation")

@section("content")
    <a class="btn btn-primary" href="{{ route('presentation.create') }}">Nuevo</a>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Tema</th>
              <th scope="col">Seminario</th>
              <th scope="col">Ponentes</th>
              <th scope="col" colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @php
                $cont = 1;
            @endphp
            @foreach($presentationList as $p)
                <tr>
                    <th scope="row">{{$cont}}</td>
                    <td>{{$p->subject}}</td>
                    <td>{{$p->seminar->year}}, {{$p->seminar->location}}</td>
                    <td>
                        @foreach ($p->speaker as $s)
                            {{$s->name}} {{$s->lastname}}</br>
                        @endforeach
                    </td>
                    
                    <td>
                        <a class="btn btn-primary" href="{{route('presentation.edit', $p->id)}}">Modificar</a></td>
                    <td>
                        <form action = "{{route('presentation.destroy', $p->id)}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <input class="btn btn-primary" type="submit" value="Borrar">
                        </form>
                    </td>
                <br>
                @php
                    $cont = $cont+1;
                @endphp
            @endforeach
        </tbody>
    </table>
@endsection