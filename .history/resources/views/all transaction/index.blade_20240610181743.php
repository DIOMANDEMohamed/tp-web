@extends('layouts.app')
@section('content')
<div class="content report-box container-fluid">

    <div class="page-header subscribe-head border-bottom-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Transactions</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Transactions</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="subscribe-employe users-list">
                <ul>
                    <li class="active"><a href="transaction.html">All Transaction </a></li>
                    <li><a href="{{route('depot.index')}}">Deposit</a></li>
                    <li><a href="{{route('retirer.index')}}">Withdraw</a></li>
                    <li><a href="{{route('en attente.index')}}">Pending</a></li>
                    <li><a href="{{route('onhold.index')}}">Onhold</a></li>
                    <li><a href="{{route('completer.index')}}">Completed</a></li>
                </ul>
            </div>

            <div class="page-header user-active">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">All Transaction</h3>
                        <p>Total <span>57</span> Transaction</p>
                    </div>
                    <div class="col-auto">
                        <a href="/formulaire" class="btn export-btn me-1">
                            <img src="assets/img/export.svg" alt="Img"> Ajouter
                        </a>
                        <a class="btn filter-btn" href="javascript:void(0);" id="filter_search">
                            <i class="fas fa-filter"></i>
                        </a>
                    </div>
                </div>
            </div>


            <div class="card filter-card" id="filter_inputs">
                <div class="card-body pb-0">
                    <form action="#" method="post">
                        <div class="row filter-row">
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label>Expertise</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block"
                                        type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                   @include('tr')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection