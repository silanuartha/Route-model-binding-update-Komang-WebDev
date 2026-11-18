<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Laptop</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            border: 1px solid #ccc;
            padding: 30px;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        h2 {
            text-align: center;
            margin-top: 0;
        }

        td {
            padding: 8px;
        }

        .btn-biru {
            background-color: rgb(111, 219, 255);
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Form Tambah Laptop</h2>

        <form method="POST" action="{{ route('save-laptop') }}">
            @csrf
            <table>
                <tr>
                    <td><label for="brand">Brand</label></td>
                    <td>:</td>
                    <td><input type="text" name="brand" id="brand"></td>
                </tr>
                <tr>
                    <td><label for="model">Model</label></td>
                    <td>:</td>
                    <td><input type="text" name="model" id="model"></td>
                </tr>
                <tr>
                    <td><label for="processor">Processor</label></td>
                    <td>:</td>
                    <td><input type="text" name="processor" id="processor"></td>
                </tr>
                <tr>
                    <td><label for="ram">RAM</label></td>
                    <td>:</td>
                    <td>
                        <select name="ram" id="ram">
                            <option value="4GB">4GB</option>
                            <option value="8GB">8GB</option>
                            <option value="16GB">16GB</option>
                            <option value="32GB">32GB</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: center; padding-top: 15px;">
                        <button type="submit" class="btn-biru">Save Laptop</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>

</body>
</html>
