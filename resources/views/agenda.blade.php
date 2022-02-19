<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <h1>Agenda</h1>
        <table class="table">
            <thead>
                <tr>
                    <td scope="col">id</td>
                    <td scope="col">hari</td>
                    <td scope="col">tgl</td>
                    <td scope="col">waktu</td>
                    <td scope="col">lokasi</td>
                    <td scope="col">kegiatan</td>
                    <td scope="col">user_id</td>
                    <td scope="col">Aksi</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td scope="row">{{ $item['id'] }}</td>
                        <td>{{ $item['hari'] }}</td>
                        <td>{{ $item['tgl'] }}</td>
                        <td>{{ $item['waktu'] }}</td>
                        <td>{{ $item['lokasi'] }}</td>
                        <td>{{ $item['kegiatan'] }}</td>
                        <td>{{ $item['user_id'] }}</td>
                        <td>
                            <a href="/edit/{{ $item['id'] }}"><button type="submit"
                                    class="mt-3 mb-3 btn btn-success">Edit</button></a>
                            |
                            <form action="/deleteAgenda/{{ $item['id'] }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="mt-3 mb-3 btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/tambah"><button type="submit" class="mt-3 mb-3 btn btn-primary">Tambah</button></a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
