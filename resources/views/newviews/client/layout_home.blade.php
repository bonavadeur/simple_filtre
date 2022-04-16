@extends('client.main')

@section('home-search')
    @include('client.component.search')
@endsection

@section('slide')
    @yield('slide')
@endsection

@section('custom')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    @include('client.component.category')
                </div>

                <div class="col-sm-9 padding-right">
                    {{-- @yield('product') --}}
                </div>
            </div>
        </div>
    </section>
@endsection
