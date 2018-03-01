@extends('template')
@section('content')
  <div class="row">
    <div class="col-lg-8">
          <h1 class="page-header">Fotografijas dati</h1>
            <table class="table table-stripped table-bordered">
      <thead>
        <tr>
          <th>#</th>
          <th>Original filename</th>
          <th>Original filepath</th>
          <th>Original filedir</th>
          <th>Original extension</th>
          <th>Original mime</th>
          <th>Original filesize</th>
          <th>Original width</th>
          <th>Original height</th>
          <th>Path</th>
          <th>Dir</th>
          <th>Filename</th>
          <th>Basename</th>
          <th>S3 url</th>
          <th>Created at</th>
          <th>Updated at</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($images as $image)
        <tr>
          <th scope="row">{{ $image->id }}</th>
          <td>{{ $image->original_filename }}</td>
          <td>{{ $image->original_filepath }}</td>
          <td>{{ $image->original_filedir }}</td>
          <td>{{ $image->original_extension }}</td>
          <td>{{ $image->original_mime }}</td>
          <td>{{ $image->original_filesize }}</td>
          <td>{{ $image->original_width }}</td>
          <td>{{ $image->original_height }}</td>
          <td>{{ $image->path }}</td>
          <td>{{ $image->dir }}</td>
          <td>{{ $image->filename }}</td>
          <td>{{ $image->basename }}</td>
          <td>{{ $image->s3_url }}</td>
          <td>{{ $image->created_at }}</td>
          <td>{{ $image->updated_at }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>  
</div>   
@endsection
