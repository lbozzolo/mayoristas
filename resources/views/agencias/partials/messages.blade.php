
<div class="row">

    {{-- Errores --}}
    @if ($errors->count() > 0)
        <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
            <div class="alert alert-danger alert-dismissible">

                <button class="close" type="button" data-dismiss="alert" aria-hidden="true">x</button>
                <i class="icon fa fa-warning"></i>
                {{--Ha ocurrido un error:<br />--}}
                @if ($errors->count() > 1)
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @else
                    {{ $errors->first() }}
                @endif

            </div>
        </div>
    @endif

    {{-- Success --}}
    @if (session()->has('msgOk') || isset($msgOk))
        <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
            <div class="alert alert-success alert-dismissible">
                <button class="close" type="button" data-dismiss="alert" aria-hidden="true">x</button>
                <i class="icon fa fa-check"></i>
                @if (session()->has('msgOk'))
                    {!! session('msgOk') !!}
                @else
                    {!! $msgOk !!}
                @endif
            </div>
        </div>
    @endif

    {{-- Info --}}
    @if (session()->has('msgInfo') || isset($msgInfo))
        <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
            <div class="alert alert-info alert-dismissible">
                <button class="close" type="button" data-dismiss="alert" aria-hidden="true">x</button>
                <i class="icon fa fa-exclamation-triangle"></i>
                @if (session()->has('msgInfo'))
                    {!! session('msgInfo') !!}
                @else
                    {!! $msgInfo !!}
                @endif
            </div>
        </div>
    @endif

</div>