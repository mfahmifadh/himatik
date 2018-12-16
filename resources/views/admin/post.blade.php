@extends('admin.app')

@section('content')

<div id="content-wrapper">
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Post
              <a href="{{ url('admin/createPost')}}" class="fas fa-plus" style="float: right;color: black;"></a>
          	</div>
            <div class="card-body">
                @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ Session::get('alert-success') }}</strong>
                </div>
                @endif
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Judul Informasi</th>
                      <th>Informasi Detail</th>
                      <th>Tanggal</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Judul Informasi</th>
                      <th>Informasi Detail</th>
                      <th>Tanggal</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php $no = 0;?>
                    @foreach($post as $data)
                    <?php $no++ ;?>
                    <tr>
                      <td>{{ $no }}</td>
                      <td>{{ $data['title']}}</td>
                      <td>{{ $data['konten']}}</td>
                      <td><img src="{{ asset('images/posts/' . $data['filename']) }}" width="200" height="150"></td>
                      <td>
                        <form action="{{ url('admin/destroyPost', $data['id']) }}" method="post">
                              {{ csrf_field() }}
                              {{ method_field('delete') }}
                              <a href="{{ url('admin/editPost', $data['id']) }}" class=" btn btn-sm btn-primary">Edit</a>
                              <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                          </form>
                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
 </div>


@endsection