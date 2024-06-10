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
                    <div class="table-responsive">
                        <table class="table table-center table-hover mb-0 datatable">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="form-check custom-checkbox">
                                            <input type="checkbox" class="form-check-input"
                                                id="select-all">
                                            <label class="form-check-label"></label>
                                        </div>
                                    </th>
                                    <th>Order</th>
                                    <th>User</th>
                                    <th>Details</th>
                                    <th>Tnx By</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check custom-checkbox">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label"></label>
                                        </div>
                                    </td>
                                    <td>#14586414</td>
                                    <td>
                                        <div class="table-avatar user-profile">
                                            <a href="profile.html"><img class="avatar-img rounded-circle "
                                                    src="assets/img/profiles/avatar-14.jpg"
                                                    alt="User Image"></a>
                                            <div>
                                                <h5><a href="javascript:void(0);">Janet Paden</a></h5>
                                                <p> <a href="https://kofejob.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                        class="__cf_email__"
                                                        data-cfemail="2b4c4e44594c4e5c4e4747586b4e534a465b474e05484446">[email&#160;protected]</a>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-avatar content-user">
                                            <div>
                                                <h5>Withdraw Funds</h5>
                                                <p> Aug 21, 2022</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="content-user">
                                        <p>PayPal</p>
                                    </td>
                                    <td>
                                        <div class="table-avatar content-user">
                                            <div>
                                                <h5 class="text-danger">- 4,165,000 USD</h5>
                                                <p> Balance : 6,335.006 USD</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);"
                                            class="user-active-btn">Completed</a>
                                    </td>
                                    <td class="text-end three-dots">
                                        <a href="javascript:void(0);" class="dropdown-toggle nav-link"
                                            data-bs-toggle="dropdown"><i
                                                class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu user-menu-list">
                                            <a class="dropdown-item" href="javascript:void(0);"
                                                data-bs-toggle="modal"
                                                data-bs-target="#transaction-category"><img class="me-2 "
                                                    src="assets/img/icon/icon-01.svg" alt="Img"> View
                                                Details</a>
                                            <a class="dropdown-item" href="user-profile.html"><img
                                                    class="me-2 " src="assets/img/icon/icon-05.svg"
                                                    alt="Img"> User Profile</a>
                                            <a class="dropdown-item" href="javascript:void(0);"><img
                                                    class="me-2 " src="assets/img/icon/icon-06.svg"
                                                    alt="Img"> Approve</a>
                                            <a class="dropdown-item mb-0" href="javascript:void(0);"><img
                                                    class="me-2 " src="assets/img/icon/icon-07.svg"
                                                    alt="Img"> Reject </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check custom-checkbox">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label"></label>
                                        </div>
                                    </td>
                                    <td>#44586414</td>
                                    <td>
                                        <div class="table-avatar user-profile">
                                            <a href="profile.html"><img class="avatar-img rounded-circle "
                                                    src="assets/img/profiles/avatar-15.jpg"
                                                    alt="User Image"></a>
                                            <div>
                                                <h5><a href="profile.html">Floyd Lewis</a></h5>
                                                <p> <a href="https://kofejob.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                        class="__cf_email__"
                                                        data-cfemail="9ef8f2f1e7faf2fbe9f7eddefbe6fff3eef2fbb0fdf1f3">[email&#160;protected]</a>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-avatar content-user">
                                            <div>
                                                <h5>Deposit Funds</h5>
                                                <p> Apr 18, 2022</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="content-user">
                                        <p>PayPal</p>
                                    </td>
                                    <td>
                                        <div class="table-avatar content-user">
                                            <div>
                                                <h5 class="text-success">+ 6,335.006 USD</h5>
                                                <p> Balance : 6,335.006 USD</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="pending">Pending</a>
                                    </td>
                                    <td class="text-end three-dots">
                                        <a href="javascript:void(0);" class="dropdown-toggle nav-link"
                                            data-bs-toggle="dropdown"><i
                                                class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu user-menu-list">
                                            <a class="dropdown-item" href="javascript:void(0);"
                                                data-bs-toggle="modal"
                                                data-bs-target="#transaction-category"><img class="me-2 "
                                                    src="assets/img/icon/icon-01.svg" alt="Img"> View
                                                Details</a>
                                            <a class="dropdown-item" href="user-profile.html"><img
                                                    class="me-2 " src="assets/img/icon/icon-05.svg"
                                                    alt="Img"> User Profile</a>
                                            <a class="dropdown-item" href="javascript:void(0);"><img
                                                    class="me-2 " src="assets/img/icon/icon-06.svg"
                                                    alt="Img"> Approve</a>
                                            <a class="dropdown-item mb-0" href="javascript:void(0);"><img
                                                    class="me-2 " src="assets/img/icon/icon-07.svg"
                                                    alt="Img"> Reject </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check custom-checkbox">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label"></label>
                                        </div>
                                    </td>
                                    <td>#84586414</td>
                                    <td>
                                        <div class="table-avatar user-profile">
                                            <a href="profile.html"><img class="avatar-img rounded-circle "
                                                    src="assets/img/profiles/avatar-16.jpg"
                                                    alt="User Image"></a>
                                            <div>
                                                <h5><a href="profile.html">Andrew Glover</a></h5>
                                                <p><a href="https://kofejob.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                        class="__cf_email__"
                                                        data-cfemail="5d1c33392f382a3a31322b382f1d38253c302d3138733e3230">[email&#160;protected]</a>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-avatar content-user">
                                            <div>
                                                <h5>Withdraw Funds</h5>
                                                <p> Apr 26, 2022</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="content-user">
                                        <p>Bank Transfer</p>
                                    </td>
                                    <td>
                                        <div class="table-avatar content-user">
                                            <div>
                                                <h5 class="text-danger">- 1,165,000 USD</h5>
                                                <p> Balance : 6,335.006 USD</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="text-danger"> Cancelled</a>
                                    </td>
                                    <td class="text-end three-dots">
                                        <a href="javascript:void(0);" class="dropdown-toggle nav-link"
                                            data-bs-toggle="dropdown"><i
                                                class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu user-menu-list">
                                            <a class="dropdown-item" href="javascript:void(0);"
                                                data-bs-toggle="modal"
                                                data-bs-target="#transaction-category"><img class="me-2 "
                                                    src="assets/img/icon/icon-01.svg" alt="Img"> View
                                                Details</a>
                                            <a class="dropdown-item" href="user-profile.html"><img
                                                    class="me-2 " src="assets/img/icon/icon-05.svg"
                                                    alt="Img"> User Profile</a>
                                            <a class="dropdown-item" href="javascript:void(0);"><img
                                                    class="me-2 " src="assets/img/icon/icon-06.svg"
                                                    alt="Img"> Approve</a>
                                            <a class="dropdown-item mb-0" href="javascript:void(0);"><img
                                                    class="me-2 " src="assets/img/icon/icon-07.svg"
                                                    alt="Img"> Reject </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check custom-checkbox">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label"></label>
                                        </div>
                                    </td>
                                    <td>#14586414</td>
                                    <td>
                                        <div class="table-avatar user-profile">
                                            <a href="profile.html"><img class="avatar-img rounded-circle "
                                                    src="assets/img/profiles/avatar-14.jpg"
                                                    alt="User Image"></a>
                                            <div>
                                                <h5><a href="javascript:void(0);">Janet Paden</a></h5>
                                                <p> <a href="https://kofejob.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                        class="__cf_email__"
                                                        data-cfemail="e285878d90858795878e8e91a2879a838f928e87cc818d8f">[email&#160;protected]</a>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-avatar content-user">
                                            <div>
                                                <h5>Withdraw Funds</h5>
                                                <p> Aug 21, 2022</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="content-user">
                                        <p>PayPal</p>
                                    </td>
                                    <td>
                                        <div class="table-avatar content-user">
                                            <div>
                                                <h5 class="text-danger">- 4,165,000 USD</h5>
                                                <p> Balance : 6,335.006 USD</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);"
                                            class="user-active-btn">Completed</a>
                                    </td>
                                    <td class="text-end three-dots">
                                        <a href="javascript:void(0);" class="dropdown-toggle nav-link"
                                            data-bs-toggle="dropdown"><i
                                                class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu user-menu-list">
                                            <a class="dropdown-item" href="javascript:void(0);"
                                                data-bs-toggle="modal"
                                                data-bs-target="#transaction-category"><img class="me-2 "
                                                    src="assets/img/icon/icon-01.svg" alt="Img"> View
                                                Details</a>
                                            <a class="dropdown-item" href="user-profile.html"><img
                                                    class="me-2 " src="assets/img/icon/icon-05.svg"
                                                    alt="Img"> User Profile</a>
                                            <a class="dropdown-item" href="javascript:void(0);"><img
                                                    class="me-2 " src="assets/img/icon/icon-06.svg"
                                                    alt="Img"> Approve</a>
                                            <a class="dropdown-item mb-0" href="javascript:void(0);"><img
                                                    class="me-2 " src="assets/img/icon/icon-07.svg"
                                                    alt="Img"> Reject </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check custom-checkbox">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label"></label>
                                        </div>
                                    </td>
                                    <td>#44586414</td>
                                    <td>
                                        <div class="table-avatar user-profile">
                                            <a href="profile.html"><img class="avatar-img rounded-circle "
                                                    src="assets/img/profiles/avatar-15.jpg"
                                                    alt="User Image"></a>
                                            <div>
                                                <h5><a href="profile.html">Floyd Lewis</a></h5>
                                                <p> <a href="https://kofejob.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                        class="__cf_email__"
                                                        data-cfemail="d0b6bcbfa9b4bcb5a7b9a390b5a8b1bda0bcb5feb3bfbd">[email&#160;protected]</a>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-avatar content-user">
                                            <div>
                                                <h5>Deposit Funds</h5>
                                                <p> Jun 19, 2022</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="content-user">
                                        <p>PayPal</p>
                                    </td>
                                    <td>
                                        <div class="table-avatar content-user">
                                            <div>
                                                <h5 class="text-success">+ 6,335.006 USD</h5>
                                                <p> Balance : 6,335.006 USD</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="pending">Pending</a>
                                    </td>
                                    <td class="text-end three-dots">
                                        <a href="javascript:void(0);" class="dropdown-toggle nav-link"
                                            data-bs-toggle="dropdown"><i
                                                class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu user-menu-list">
                                            <a class="dropdown-item" href="javascript:void(0);"
                                                data-bs-toggle="modal"
                                                data-bs-target="#transaction-category"><img class="me-2 "
                                                    src="assets/img/icon/icon-01.svg" alt="Img"> View
                                                Details</a>
                                            <a class="dropdown-item" href="user-profile.html"><img
                                                    class="me-2 " src="assets/img/icon/icon-05.svg"
                                                    alt="Img"> User Profile</a>
                                            <a class="dropdown-item" href="javascript:void(0);"><img
                                                    class="me-2 " src="assets/img/icon/icon-06.svg"
                                                    alt="Img"> Approve</a>
                                            <a class="dropdown-item mb-0" href="javascript:void(0);"><img
                                                    class="me-2 " src="assets/img/icon/icon-07.svg"
                                                    alt="Img"> Reject </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check custom-checkbox">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label"></label>
                                        </div>
                                    </td>
                                    <td>#34586414</td>
                                    <td>
                                        <div class="table-avatar user-profile">
                                            <a href="profile.html"><img class="avatar-img rounded-circle "
                                                    src="assets/img/profiles/avatar-16.jpg"
                                                    alt="User Image"></a>
                                            <div>
                                                <h5><a href="profile.html">Andrew Glover</a></h5>
                                                <p><a href="https://kofejob.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                        class="__cf_email__"
                                                        data-cfemail="85c4ebe1f7e0f2e2e9eaf3e0f7c5e0fde4e8f5e9e0abe6eae8">[email&#160;protected]</a>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-avatar content-user">
                                            <div>
                                                <h5>Withdraw Funds</h5>
                                                <p> Apr 26, 2022</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="content-user">
                                        <p>Bank Transfer</p>
                                    </td>
                                    <td>
                                        <div class="table-avatar content-user">
                                            <div>
                                                <h5 class="text-danger">- 1,165,000 USD</h5>
                                                <p> Balance : 6,335.006 USD</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="text-danger"> Cancelled</a>
                                    </td>
                                    <td class="text-end three-dots">
                                        <a href="javascript:void(0);" class="dropdown-toggle nav-link"
                                            data-bs-toggle="dropdown"><i
                                                class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu user-menu-list">
                                            <a class="dropdown-item" href="javascript:void(0);"
                                                data-bs-toggle="modal"
                                                data-bs-target="#transaction-category"><img class="me-2 "
                                                    src="assets/img/icon/icon-01.svg" alt="Img"> View
                                                Details</a>
                                            <a class="dropdown-item" href="user-profile.html"><img
                                                    class="me-2 " src="assets/img/icon/icon-05.svg"
                                                    alt="Img"> User Profile</a>
                                            <a class="dropdown-item" href="javascript:void(0);"><img
                                                    class="me-2 " src="assets/img/icon/icon-06.svg"
                                                    alt="Img"> Approve</a>
                                            <a class="dropdown-item mb-0" href="javascript:void(0);"><img
                                                    class="me-2 " src="assets/img/icon/icon-07.svg"
                                                    alt="Img"> Reject </a>
                                        </div>
                                    </td>
                                </tr>
                                
                                    @foreach ($transactions as $transaction)
                                        <tr>
                                            <td>{{ $transaction->id }}</td>
                                            <td>{{ $transaction->commande }}</td>
                                            <td>{{ $transaction->utilisateur }}</td>
                                            <td>{{ $transaction->detail }}</td>
                                            <td>{{ $transaction->par }}</td>
                                            <td>{{ $transaction->montant }}</td>
                                            <td>{{ $transaction->status }}</td>
                                            <td>
                                                <a href="#" class="btn btn-primary">Voir</a>
                                                <a href="#" class="btn btn-secondary">Éditer</a>
                                                <form action="#" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('transaction.delete'), ['id' => $transaction->id]}}" class="btn btn-secondary">delete</a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection