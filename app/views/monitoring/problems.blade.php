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
            
            <table class="table table-hover table-bordered table-striped table-condensed text-center">
                <thead>
                    <tr>
                        <th style="padding-left: 20px; padding-right: 20px">TANGGAL</th>
                        <th width: 15px>PENGIRIM</th>
                        <th>MASALAH</th>
                        <th>SOLUSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $row)
                    <tr>
                        <td>{{$row['tanggal']}}</td>
                        <td>{{$row['sender']}}</td>
                        <td>{{$row['problem']}}</td>
                        <td>{{$row['tanggapan']}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="text-center">
                <?php echo $data->links(); ?>
            </div>
        </div>
    </section>
</section>
@stop