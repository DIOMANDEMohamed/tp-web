<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Transactions</title>
    <link rel="stylesheet" href={{route('"all transaction.index')}}>
</head>
<body>
    <div class="container mt-5">
        <h2>Liste des Transactions</h2>
        <hr>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Commande</th>
                    <th>Utilisateur</th>
                    <th>Detail</th>
                    <th>par</th>
                    <th>Montant</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
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
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
