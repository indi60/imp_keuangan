@extends('layouts.sidebar')
@section('content')
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h3 class="card-title ">Create Kategori</h3>
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

            <hr>
            <a href="http://localhost:8000/kategori" class="btn-inverse">Kembali</a>
            <div class="form-group"></div>
            <form action="{{ route('kategori.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="kode">Kode:</label>
                    <input type="text" class="form-control" id="kode_kategori" name="kode" >
                </div>
                <div class="form-group">
                    <label for="nama">nama:</label>
                    <input type="text" class="form-control" id="nama_kategori" name="nama" >
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
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
@endsection
      