@extends('admin.layouts')

@section('title', 'Tableau de bord')

@section('content')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">Tableau de bord</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tableau de bord</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- ROW-1 OPEN -->
    <!-- Row -->
    <div class="row ">
        <div class="col-md-12">
        </div>
    </div>
    <!-- /Row -->
@endsection
