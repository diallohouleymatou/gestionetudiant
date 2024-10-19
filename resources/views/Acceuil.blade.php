<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Page d'accueil - Gestion Étudiant</title>
    <style>
        body {
            background-color: #f8f9fa; /* Couleur de fond douce */
            font-family: 'Arial', sans-serif; /* Police personnalisée */
        }
        .header {
            background-color: #007bff; /* Couleur de l'en-tête */
            color: white; /* Texte blanc */
            padding: 20px;
            text-align: center;
        }
        .table-container {
            margin: 20px;
            padding: 20px;
            background-color: white; /* Couleur de fond du tableau */
            border-radius: 10px; /* Coins arrondis */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Ombre pour donner de la profondeur */
        }
        .btn-add {
            background-color: #28a745; /* Couleur verte pour le bouton d'ajout */
            border: none; /* Pas de bordure */
        }
        .btn-add:hover {
            background-color: #218838; /* Couleur de survol plus foncée */
        }
    </style>
</head>
<body>

    <div class="header">
        <h1>Gestion des Étudiants</h1>
        <p>Bienvenue dans l'application de gestion des étudiants.</p>
    </div>

    <div class="container table-container">
        <h2 class="text-center">Liste des Étudiants</h2>
        <div class="text-end mb-3">
            <a href="/Ajouter" class="btn btn-add text-light">Ajouter un Étudiant</a>
        </div>
        <table class="table table-bordered">
            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Classe</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($etudiants as $etudiant)
                <tr>
                    <td>{{$etudiant->id}}</td>
                    <td>{{$etudiant->nom}}</td>
                    <td>{{$etudiant->prenom}}</td>
                    <td>{{$etudiant->classe}}</td>
                    <td>
                        <a href="{{ route('Modifier', ['id' => $etudiant->id]) }}" class="btn btn-warning btn-sm">Modifier</a>
                        <a href="{{route('Supprimer',['id'=>$etudiant->id])}}" class="btn btn-danger btn-sm">Supprimer</a>
                    </td>
                </tr>
               @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
