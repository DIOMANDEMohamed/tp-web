<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Simple</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Formulaire de Transaction</h2>
        <hr>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <ul>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <li class="alert alert-danger">{{ $error }}</li>
                @endforeach
            @endif
        </ul>

        <form action="{{ route('transactions.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="commande">Commande</label>
                <input type="number" class="form-control" id="commande" name="commande" required>
            </div>
            <div class="form-group">
                <label for="utilisateur">Utilisateur</label>
                <input type="text" class="form-control" id="utilisateur" name="utilisateur" required>
            </div>
            <div class="form-group">
                <label for="detail">Detail</label>
                <textarea class="form-control" id="detail" name="detail" rows="3" required></textarea>
            </div>
            <div class="payment-method-block">
                <h2>Sélectionnez votre mode de paiement</h2>
                <p>Choisissez parmi les options suivantes :</p>
                <label for="payment-method-virement">
                    <input type="radio" id="payment-method-virement" name="par" value="virement" checked>
                    Virement
                </label>
                <label for="payment-method-paypal">
                    <input type="radio" id="payment-method-paypal" name="par" value="paypal">
                    PayPal
                </label>
            </div>
            <div class="form-group">
                <label for="montant">Montant</label>
                <input type="number" class="form-control" id="montant" name="montant" required>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="En attente">En attente</option>
                    <option value="En cours">En cours</option>
                    <option value="Terminé">Terminé</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Créer</button>
        </form>
    </div>
</body>
</html>
