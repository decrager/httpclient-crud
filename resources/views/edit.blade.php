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
        <h1>Edit Data Agenda {{ $data['id'] }}</h1>
        <form action="/editAgenda/{{ $data['id'] }}" method="POST">
            @csrf
            @method('PUT')
            <label class="form-label">hari</label>
            <input type="text" name="hari" class="form-control" aria-describedby="passwordHelpBlock" value="{{ $data['hari'] }}">
            <label class="form-label">tgl</label>
            <input type="text" name="tgl" class="form-control" aria-describedby="passwordHelpBlock" value="{{ $data['tgl'] }}">
            <label class="form-label">waktu</label>
            <input type="text" name="waktu" class="form-control" aria-describedby="passwordHelpBlock" value="{{ $data['waktu'] }}">
            <label class="form-label">lokasi</label>
            <input type="text" name="lokasi" class="form-control" aria-describedby="passwordHelpBlock" value="{{ $data['lokasi'] }}">
            <label class="form-label">kegiatan</label>
            <input type="text" name="kegiatan" class="form-control" aria-describedby="passwordHelpBlock" value="{{ $data['kegiatan'] }}">
            <label class="form-label">user_id</label>
            <input type="text" name="user_id" class="form-control" aria-describedby="passwordHelpBlock" value="{{ $data['user_id'] }}">
            <button type="submit" class="mt-3 mb-3 btn btn-primary">Simpan</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
