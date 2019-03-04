@extends('layouts.sidebar1')
@section('content')
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h3 class="card-title ">Kategori</h3>
                  <p class="card-category"> Step1 </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">

    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
       
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <hr>
                <a href="/kategori/create" class="btn btn-success">Add</a>
                <div class="form-group"></div>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Kode</th>
                    <th>Nama kategori</th>
                    <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($data as $datas)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $datas->kode_kategori }}</td>
                        <td>{{ $datas->nama_kategori }}</td>
                        <td>
                            <form action="{{ route('kategori.destroy', $datas->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('kategori.edit',$datas->id) }}" class=" btn btn-sm btn-primary">Edit</a>
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            </form>
                        </td>
                    </tr>
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
@endsection