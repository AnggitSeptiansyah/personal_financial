@extends('layouts.app')

@section('content')
    
  <div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
              @if (!$incomeThisMonth) 
                <h3>0</h3>
              @else
                <h3>{{ number_format($incomeThisMonth) }}</h3>
              @endif

          <p>Pendapatan</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>{{ number_format($expenseThisMonth) }}<sup style="font-size: 20px"></h3>

          <p>Pengeluaran</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3> - </h3>

          <p>Persentase</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3>{{ $profit }}</h3>

          <p>Laba / Rugi</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>

  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Monthly Chart</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
      <div class="chart">
        <canvas id="lineChart" style="height: 241px; width: 492px;" height="241" width="492"></canvas>
      </div>
    </div>
    <!-- /.box-body -->
  </div>

  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Jenis Pengeluaran Terbanyak</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
      <div class="chart">
        <canvas id="lineChart" style="height: 241px; width: 492px;" height="241" width="492"></canvas>
      </div>
    </div>
    <!-- /.box-body -->
  </div>
@endsection

@section('scripts')
  <script src="{{ asset('bower_components/chart.js/Chart.js') }}"></script>
  <script src="{{ asset('js/profit_chart.js') }}"></script>
@endsection