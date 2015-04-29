@extends('layouts.template')

@section('title')
@parent
:: Home
@stop

@section('content')


        

<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- page start-->
        <div class="row content-panel">
                <div class="panel-heading">
                        <ul class="nav nav-tabs nav-justified">
                                <li class="active">
                                    <a data-toggle="tab" href="#jabar">Progress Total</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#progress">Progress Kab/Kota</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#harian">Progress Harian</a>
                                </li>
                        </ul>
                </div><! --/panel-heading -->


                <div class="panel-body">
                        <div class="tab-content">
                            <div id="jabar" class="tab-pane fade in active" style="min-width: 300px; height: 500px; margin: 0 auto;"></div>
                            
                            <div id="progress" class="tab-pane fade active">
                                <div class="col-md-6 col-sm-6 mb">
                                    <div class="darkblue-panel pn">
                                        <div class="darkblue-header">
                                            <div id="cirebon" style="min-width: 300px; height: 245px; margin: 0 auto;"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 mb">
                                    <div class="darkblue-panel pn">
                                        <div class="darkblue-header">
                                            <div id="sukabumi" style="min-width: 300px; height: 245px; margin: 0 auto;"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 mb">
                                    <div class="darkblue-panel pn">
                                        <div class="darkblue-header">
                                            <div id="bandung" style="min-width: 300px; height: 245px; margin: 0 auto;"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 mb">
                                    <div class="darkblue-panel pn">
                                        <div class="darkblue-header">
                                            <div id="indramayu" style="min-width: 300px; height: 245px; margin: 0 auto;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div id="harian" class="tab-pane fade active" style="min-width: 300px; height: 500px; margin: 0 auto;"></div>
                            
                        </div><!-- /tab-content -->

                </div><!-- panel-body -->

        </div>
        <!-- page end-->
    </section>
</section><!-- /MAIN CONTENT -->
		<style type="text/css">
                    //${demo.css}
		</style>
                                    
@stop