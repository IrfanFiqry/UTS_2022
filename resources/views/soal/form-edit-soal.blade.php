@extends("blank")

@section("konten")

<form action="{{ route('update_soal', ['id' => $id]) }}" method="post">
        @csrf
        @method("put")

        Judul : <input type="text" name="judul"> <br>
        Soal: <textarea name="isi_soal" id="" cols="30" rows="10"></textarea> <br>
        

        <button type="submit">Simpan</button>
    </form>


@endsection