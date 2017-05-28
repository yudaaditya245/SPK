@extends('layouts.layout')

@section('title', 'MATI')

@section('body')
    <div class="col-md-6 col-md-offset-3" style="margin-top:20px;">
        <div class="panel panel-primary">
            <div class="panel-body text-center">

                <p class="alert alert-info">
                  Masalah pada Android yang tidak dapat dihidupkan sebagian besar terletak pada hardware atau komponen Ponsel itu sendiri
                  sehingga sebagian besar kerusakan memerlukan pergantian komponen ataupun sparepart Ponsel.<br/><br/>
                  Anda dapat men-diagnosa kerusakan umum yang dialami Ponsel Anda.
                </p>
                <a class="btn btn-success" href="{{ url('/diagmati/1') }}">Mulai Diagnosa</a>

            </div>
        </div>
    </div>
@endsection
