@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Edit Kategori</h1>
            <hr>
            @foreach($data as $datas)
            <form action="{{ route('kategori.update', $datas->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="kode">Kode:</label>
                    <input type="text" class="form-control" id="kode_kategori" name="kode_kategori" value="{{ $datas->kode_kategori }}">
                </div>
                <div class="form-group">
                    <label for="nama">nama:</label>
                    <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="{{ $datas->nama_kategori }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
            @endforeach
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection