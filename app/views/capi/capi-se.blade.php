@extends('layouts.template')

@section('title')
@parent
:: Home
@stop

@section('styles')

@stop


@section('content')
<section id="main-content">
  <section class="wrapper site-min-height">
    <!-- SIMPLE TO DO LIST -->
    @if(count($data))
            <div class="row mt">
              <div class="col-md-12">
                <div class="white-panel">
                    <div class="panel-heading">
                      <div class="pull-left"><h5><i class="fa fa-tasks"></i>Daftar Kuesioner CAPI</h5></div>
                      <br>
                    </div>
                    <form class="navbar-form" role="form" action="" method="get">  
                        <div class="input-group">
                          <div class="row">
                            <input type="text" class="form-control" placeholder="NIM..." name="NIM">
                            
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">Cari</button>
                          </span>
                          </div>
                        </div><!-- /input-group -->
                    </form>
              <div class="custom-check goleft mt">
                     <table id="todo" class="table table-hover custom-check">
                      <tbody>
                        @foreach($data as $row)
                          <?php
                            $b2 = B2::find($row->nks);
                            $b1 = B1::where('nks','=',$row->NKS)->first();
                            $row['nim']=$b2['b2r2s1'];
                          ?>
                          <tr>
                          <td>
                            <a href="capi-se-{{$row->NKS}}=1">{{$row['NKS']}} ({{$row['b2r1s1']}} - {{$b1['b1r11']}})</a></span>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                  </table>
            </div><!-- /table-responsive -->
            <div class="text-center">
                  <?php echo $data->links(); ?>
                </div>
          </div><!--/ White-panel -->
              </div><! --/col-md-12 -->
            </div><! -- row --> 
  @else
    <h2>no result found</h2>
  @endif
  </section>
</section>
@stop

