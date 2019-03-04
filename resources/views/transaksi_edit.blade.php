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
            <form action="{{ route('transaksi.update', $datas->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="kodesub">Tanggal:</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $datas->tanggal }}">
                </div>
                <div class="form-group">
                    <label for="namasub">Keterangan:</label>
                    <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{ $datas->keterangan }}">
                </div>
                <div class="form-group">
                    <label for="id">Nama kategori:</label>
                    <select  id="kategori_id" name="id" class="form-control"> 
                       @foreach ($kategori as $kategori)
                       <option value="{{$kategori->id}}">{{$kategori->nama_kategori}}</option>
                       @endforeach
                       </select>
                </div>
                <div class="form-group">
                    <label for="namasub">Sub Kategori:</label>
                    <input type="text" class="form-control" id="subkategori_id" name="namasub" value="{{ $datas->subkategori_id }}">
                </div>
                <div class="form-group">
                    <label for="id">jenis transaksi:</label>
                    <select  id="jenis_transaksi" name="trans" class="form-control" value="{{ $datas->jenis_transaksi }}"> 
                       <option value="debet">debet</option>
                       <option value="kredit">kredit</option> 
                    </select>
                </div>
                <div class="form-group">
                    <label for="namasub">Jumlah:</label>
                    <input type="text" class="form-control" id="jumlah" name="jumlah" value="{{ $datas->jumlah }}">
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