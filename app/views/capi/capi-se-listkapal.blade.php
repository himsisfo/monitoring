@extends('layouts.template')

@section('title')
@parent
:: Home
@stop

@section('styles')

@stop

<?php
  $url=URL::current();
  $urlsplit = explode("=",$url);
  $urlcurrent = $urlsplit[0];
  $page = (int)$urlsplit[1];

?>


@section('content')
<section id="main-content">
  <section class="wrapper site-min-height">
    <!-- SIMPLE TO DO LIST -->
    @if(count($data))
            <div class="row mt">
              <div class="col-md-12">
                <div class="white-panel">
                    <div class="panel-heading">
                      <div class="pull-left"><h5><i class="fa fa-tasks"></i>List Kapal :</h5></div>
                      <br>
                    </div>
              <div class="custom-check goleft mt">
                     <table id="todo" class="table table-hover custom-check">
                      <tbody>
                        @foreach($data as $row)
                          <tr>
                          <td>
                            <a href="capi-se-{{$row->nksKapal}}=5">{{$row->nksKapal}}</a></span>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                  </table>
            </div><!-- /table-responsive -->
            <div class="text-center">
                  <?php echo $data->links(); ?>
                </div>

          <div class="span4 offset4 text-center"> 
          <a href="{{$urlcurrent.'='.($page-1)}}"><button class="btn">before</button></a>
          <a href="{{$urlcurrent.'='.'9'}}"><button class="btn">next</button></a>
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

