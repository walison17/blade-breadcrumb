@php
    $bread = URL::to('/'); //raiz
    $link = Request::path(); //link página inicial
    $sublinks = explode('/', $link); //array sublinks
@endphp

@if(Request::path() != '/')
    <ol class="breadcrumb {{ $breadcrumb or '' }}">
        @foreach($sublinks as $sub)

            @php
                $bread = $bread . '/' . $sub;
                $titulo = urldecode($sub);
                $titulo = str_replace('-', '', $titulo);
                $titulo = title_case($titulo);
            @endphp

            <li>
                <a class="{{ $loop->last ? 'active' : '' }} {{ $link or '' }}" href="{{ $bread }}">{{ $titulo }}</a>
            </li>

        @endforeach
    </ol>
@endif

{{-- uso 
@component('breadcrumd', array('breadcrumb' => 'classs', 'link' => 'class'))
@endcomponent --}}
