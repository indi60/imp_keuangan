@extends('layouts.sidebar1')
@section('content')
<<<<<<< HEAD
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h3 class="card-title "> Edit Kategori</h3>
                  <p class="card-category"> HIYA HIYA HIYA </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">

=======
>>>>>>> 51429cda2c7a34046a13457eceef78998baabb61
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
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
<<<<<<< HEAD
                </table>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
=======
>>>>>>> 51429cda2c7a34046a13457eceef78998baabb61
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection