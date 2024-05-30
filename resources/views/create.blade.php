<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un eleve</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 50px;
        }
    </style>
</head>
<body>
    <h1>Ajouter un eleve</h1>
    <form action="{{ route('students.store') }}" method="POST">
        <div>
            <label for="first_name">Prenom :</label>
            <input type="text" name="first_name" id="first_name" required>
        </div>
        <div>
            <label for="last_name">Nom :</label>
            <input type="text" name="last_name" id="last_name" required>
        </div>
        <div>
            <label for="date_of_birth">Date de naissance :</label>
            <input type="date" name="date_of_birth" id="date_of_birth" required>
        </div>
        <div>
            <label for="address">Adresse :</label>
            <input type="text" name="address" id="address" required>
        </div>
        <div>
            <label for="group_id">Classe :</label>
            <select name="group_id" id="group_id" required>
                @foreach($groups as $group)
                    <option value="{{ $group->id }}">{{ $group->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
