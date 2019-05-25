@extends('layouts.admin')
@section('content')
<main class="app-content">
     
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              <h4>All Comments</h4>
              <p><b>5</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><i class="icon fa fa-thumbs-o-up fa-3x"></i>
            <div class="info">
              <h4>Likes</h4>
              <p><b>25</b></p>
            </div>
          </div>
        </div>
        
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Dashboard Chart</h3>
            <div class="embed-responsive embed-responsive-16by9">
                {!! $chart->container()!!}
            </div>
          </div>
        </div>
        
      </div>
      
    </main>
{!! $chart->script() !!}
@stop