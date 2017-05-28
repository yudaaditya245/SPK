@extends('layouts.layout')

@section('title', 'HOME')

@section('body')
  <div class="col-md-6 col-md-offset-3">
      <h2 style="text-align:center">SISTEM PAKAR KERUSAKAN HP</h2>
      <div class="panel panel-default text-center">
          <div class="panel-body">
              <p class="alert alert-warning">Pilih kondisi HP : </p>
              <ul class="nav nav-pills nav-stacked">
                  <li><a href="{{ url('diagmati') }}"><span class="glyphicon glyphicon-remove"></span>&nbsp; HP TIDAK DAPAT DIHIDUPKAN</a></li>
                  <li><a href="{{ url('diaghidup') }}"><span class="glyphicon glyphicon-ok"></span>&nbsp; HP DAPAT DIHIDUPKAN</a></li>
              </ul>
          </div>
      </div>
  </div>
@endsection
