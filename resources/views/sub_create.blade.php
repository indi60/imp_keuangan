@extends('layouts.sidebar2')

@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->

            <hr>
             
            <div class="form-group"></div>
            <form action="{{ route('sub.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('kodesub') ? ' has-error' : '' }}">
                    <label for="kodesub">Kode Sub:</label>
                    <input type="text" class="form-control" id="kode_sub_kategori" name="kodesub" >
                    @if ($errors->has('kodesub'))
                                    <span style="color:red">
                                        <strong>{{ $errors->first('kodesub') }}</strong>
                                    </span>
                                @endif
                </div>
                <div class="form-group{{ $errors->has('namasub') ? ' has-error' : '' }}">
                    <label for="namasub">Nama Sub:</label>
                    <input type="text" class="form-control" id="nama_sub_kategori" name="namasub" >
                    @if ($errors->has('namasub'))
                                    <span style="color:red">
                                        <strong>{{ $errors->first('namasub') }}</strong>
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