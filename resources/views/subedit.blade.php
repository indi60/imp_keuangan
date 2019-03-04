@extends('layouts.sidebar2')
@section('content')

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h3 class="card-title ">Sub Kategori</h3>
                  <p class="card-category"> HIYA HIYA HIYA </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">

    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Edit Kategori</h1>
            <hr>
            @foreach($data as $datas)
            <form action="{{ route('sub.update', $datas->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="kodesub">Kode Sub:</label>
                    <input type="text" class="form-control" id="kode_sub_kategori" name="kode_sub_kategori" value="{{ $datas->kode_sub_kategori }}">
                </div>
                <div class="form-group">
                    <label for="namasub">Nama Sub:</label>
                    <input type="text" class="form-control" id="nama_sub_kategori" name="nama_sub_kategori" value="{{ $datas->nama_sub_kategori }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
            @endforeach
                </tbody>
            </table>
        </div>
        </section>
        </table>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection