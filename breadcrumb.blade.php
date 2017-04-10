@php
    $bread = URL::to('/'); //raiz
    $link = Request::path(); //link página inicial
    $sublinks = explode('/', $link); //array sublinks
@endphp

@if(Request::path() != '/')
    <div class="page-breadcrumb">
        <ol class="breadcrumb">
            @foreach($sublinks as $sub)

                @php
                    $bread = $bread . '/' . $sub;
                    $titulo = urldecode($sub);
                    $titulo = str_replace('-', '', $titulo);
                    $titulo = title_case($titulo);
                @endphp

                <li>
                    <a class="{{ $loop->last ? 'active' : '' }}" href="{{ $bread }}">{{ $titulo }}</a>
                </li>

            @endforeach
        </ol>
    </div>
@endif

