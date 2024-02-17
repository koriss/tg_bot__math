<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Examples Statistics</title>
</head>
<body>
    <h1>Math Examples Statistics</h1>
    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($statistics as $stat)
                <tr>
                    <td>{{ $stat->type }}</td>
                    <td>{{ $stat->total }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
