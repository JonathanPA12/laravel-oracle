<!DOCTYPE html>
<html lang="en">
<head>
  <title>Auditoria</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="row">
  <div class="col-xl-7 mx-auto">
    <br>
        <br>
		    <h6 class="mb-0 text-uppercase">Performance del sistema</h6>
		        <hr>
		            <div class="card border-top border-0 border-4 border-danger">
			            <div class="card-body p-5">
			            	<div class="card-title d-flex align-items-center">
				            	<div><i class="bx bxs-user me-1 font-22 text-danger"></i>
                                </div>
					                <h5 class="mb-0 text-danger">[ Oracle 21c ]</h5>
                            </div>
                            <hr>
                            <div class="d-grid gap-2 d-md-block">
					                <a href="{{ url('/home') }}" class="btn btn-danger px-5">Volver</a>
					                </div>
                                    <hr>
                                  <div class="container mt-3">
                                        <h2>Performance General del sistema</h2>
                                            <div class="card">
                                                <div class="card-body">  
                                                    <div class="row">
                                                        <table class="table table-hover table-bordered table-striped">
                                                            <thead> 
                                                                <tr>
                                                                    <th value="">HOST</th>
                                                                    <th value="">NOMBRE</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                 @foreach($data8 as $table)
                                                                 <tr>
                                                                    <th scope="row" class="text-lowercase" value="{{$table->operation}}">{{ $table->operation}}</th>
                                                                    <th scope="row" class="text-lowercase" value="{{$table->object_name}}">{{ $table->object_name }}</th>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                         </table>
                                                    </div>
                                                </div> 
                                            </div>
                                    </div>
                        </div>
                    </div>
    </div>
</div>
<iframe src="http://localhost/vscode21c/dbalocal/public/control-files" width="100%" height="300" style="border:none;">
</body>
</html>
