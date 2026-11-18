<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Laptop</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Brand</th>
                <th>Model</th>
                <th>Processor</th>
                <th>RAM</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($laptops as $index => $laptop)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $laptop->brand }}</td>
                    <td>{{ $laptop->model }}</td>
                    <td>{{ $laptop->processor }}</td>
                    <td>{{ $laptop->ram }}</td>
                    <td>
                        <form method="POST" action="{{ route('delete-laptop') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{ $laptop->id }}">
                            <input style="background-color: red; color: white;" type="submit" value="Delete">
                        </form>
                        <a href="{{ route('edit-laptop', $laptop->id) }}">
                            <button class="btn-biru">Edit</button>
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" style="text-align: center;">Belum ada data laptop.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
