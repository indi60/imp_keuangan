@extends('layouts.sidebar1')
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
            <div class="form-group"></div>
            <form action="{{ route('kategori.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group {{ $errors->has('kodesub') ? ' has-error' : '' }}">
                    <label for="kode">Kode:</label>
                    <input type="text" class="form-control" id="kode_kategori" name="kode" >
                                @if ($errors->has('kode'))
                                    <span style="color:red">
                                        <strong>{{ $errors->first('kode') }}</strong>
                                    </span>
                                @endif
                </div>
                <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
                    <label for="nama">nama:</label>
                    <input type="text" class="form-control" id="nama_kategori" name="nama" >
                     @if ($errors->has('nama'))
                                    <span style="color:red">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
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
        
@endsection
      