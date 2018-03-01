@extends('template')
@section('content')
    <h3 style="color:blue">Фотография</h3>
    <div class="row">
        <div class="col-sm-12">
        <form class="form-inline" style="margin:20px 20px 20px 20px" method="post" enctype="multipart/form-data" action="/upload">
             <input type="hidden" name="_token" value="{{ Session::token() }}">
            <h4>Добавление фотографии:</h4>
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                    <div class="form-group">
                        <div class="col-sm-9">
                           <input type="file" accept="image/png, image/jpeg, image/gif" name="kartinka"/> 
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-3 text-right">
                 
                            <button type="submit" class="btn btn-default preview-add-button" id="addPhone">
                                <span class="glyphicon glyphicon-plus"></span> Добавить
                            </button>
                        </div>
                    </div>
                </div>
            </div>   
            </form>         
        </div> 
</div> 
@endsection