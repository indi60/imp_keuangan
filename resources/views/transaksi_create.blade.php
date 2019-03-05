@extends('layouts.sidebar3')

@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <hr>
            <div class="form-group"></div>
            <form action="{{ route('transaksi.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group {{ $errors->has('tanggal') ? ' has-error' : '' }}">
                    <label for="tanggal">Tanggal:</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" >
                     @if ($errors->has('tanggal'))
                                    <span style="color:red">
                                        <strong>{{ $errors->first('tanggal') }}</strong>
                                    </span>
                                @endif
                </div>
                <div class="form-group {{ $errors->has('keterangan') ? ' has-error' : '' }}">
                    <label for="namasub">Keterangan:</label>
                    <input type="text" class="form-control" id="keterangan" name="keterangan" >
                     @if ($errors->has('keterangan'))
                                    <span style="color:red">
                                        <strong>{{ $errors->first('keterangan') }}</strong>
                                    </span>
                                @endif
                </div>
                <div class="form-group">
                    <label for="id">Nama Kategori:</label>
                    <select  id="kategori_id" name="kategori_id" class="form-control"> 
                       @foreach ($kategori as $kategori)
                       <option value="{{$kategori->id}}">{{$kategori->nama_kategori}}</option>
                       @endforeach

                       </select>
                </div>
                <div class="form-group">
                    <label for="id">Nama Sub Kategori:</label>
                    <select  id="subkategori_id" name="subkategori_id" class="form-control"> 
                       @foreach ($sub as $sub)
                       <option value="{{$sub->id}}">{{$sub->nama_sub_kategori}}</option>
                       @endforeach

                       </select>
                  </div>
               <div class="form-group">
                    <label for="id">jenis transaksi:</label>
                    <select  id="jenis_transaksi" name="trans" class="form-control"> 
                       <option value="debet">debet</option>
                       <option value="kredit">kredit</option> 
                    </select>
                </div>
               
                <div class="form-group">
                    <label for="namasub">Jumlah:</label>
                    <input type="text" class="form-control" id="jumlah" name="jumlah" >
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
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection