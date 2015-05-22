@extends('layouts.template')

@section('title')
@parent
:: Home
@stop

@section('content')


<section id="main-content">
    <section class="wrapper site-min-height">
        <div class="row content-panel" style="padding-left: 20px; padding-right: 20px">
            <h3><i class="fa fa-angle-right"></i>Problem Solving</h3>
            {{ Datatable::table()
            ->addColumn('Tanggal','Sender','Problem','Tanggapan')       // these are the column headings to be shown
            ->setUrl(route('api.problems'))   // this is the route where data will be retrieved
            ->render() }}
            
        </div>
    </section>
</section>

        
@stop
