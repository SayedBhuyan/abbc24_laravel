@extends("layouts.admin.master")

@section("content")
  <div class="animated fadeIn">
      <div class="row">

      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  <strong class="card-title" style="font-size: 30px">All News</strong>
                  <a href="{{ url('/admin/news/new') }}" class="btn btn-lg btn-success float-right">Add New</a>
              </div>
              <div class="card-body">
        <table id="bootstrap-data-table" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Title</th>
              <th>Image</th>
              <th>Content</th>
              <th>Author</th>
              <th>Category</th>
              <th>Time</th>
              <th>Last Update</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($news as $slnews)
            <tr>
              <td><a href="{{ url('/admin/news/edit') }}/{{$slnews->id}}">{{ $slnews->title }}</a></td>
              <td><img width="70" height="70" src="{{ asset('assets/admin/images/uploads') }}/{{ $slnews->image }}" alt=""></td>
              <td>{{ str_limit($slnews->description, $limit = 100, $end = '...') }}</td>
              <td>{{ $slnews->author }}</td>
              <td>{{ $slnews->category }}</td>
              <td>{{ $slnews->created_at }}</td>
              <td>{{ $slnews->updated_at }}</td>
              <td>
                <a href="{{ url('/admin/news/edit') }}/{{$slnews->id}}" class="btn btn-xs btn-info">Update</a>

                <form action="{{ url('/admin/news/delete') }}/{{$slnews->id}}" method="POST">
                  @method('DELETE')
                  @csrf
                  <input onclick="return confirm('Are you sure you want to delete this news?')" type="submit" class="btn btn-xs btn-danger" value="Delete">

                </form>
              </td>
            </tr>
            @endforeach

          </tbody>
        </table>
              </div>
          </div>
      </div>


      </div>
  </div><!-- .animated -->
@endsection

@section("scripts")
  <script src="{{ asset('/assets/admin/') }}/assets/js/lib/data-table/datatables.min.js"></script>
  <script src="{{ asset('/assets/admin/') }}/assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
  <script src="{{ asset('/assets/admin/') }}/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
  <script src="{{ asset('/assets/admin/') }}/assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
  <script src="{{ asset('/assets/admin/') }}/assets/js/lib/data-table/jszip.min.js"></script>
  <script src="{{ asset('/assets/admin/') }}/assets/js/lib/data-table/pdfmake.min.js"></script>
  <script src="{{ asset('/assets/admin/') }}/assets/js/lib/data-table/vfs_fonts.js"></script>
  <script src="{{ asset('/assets/admin/') }}/assets/js/lib/data-table/buttons.html5.min.js"></script>
  <script src="{{ asset('/assets/admin/') }}/assets/js/lib/data-table/buttons.print.min.js"></script>
  <script src="{{ asset('/assets/admin/') }}/assets/js/lib/data-table/buttons.colVis.min.js"></script>
  <script src="{{ asset('/assets/admin/') }}/assets/js/lib/data-table/datatables-init.js"></script>


  <script type="text/javascript">
      $(document).ready(function() {
        $('#bootstrap-data-table-export').DataTable();
      } );
  </script>
@endsection
