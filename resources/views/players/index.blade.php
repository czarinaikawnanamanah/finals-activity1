<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Players List</title>
</head>
<body>
    <h1>Players</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Username</th>
                <th>ID Number</th>
            </tr>
        </thead>
        <tbody>
            @forelse($players as $player)
                <tr>
                    <td>{{ $player->name }}</td>
                    <td>{{ $player->username }}</td>
                    <td>{{ $player->id_number }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">No players found</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
