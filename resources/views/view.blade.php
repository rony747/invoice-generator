<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<div class="row">
  <div class="col-md-12">
    <div class="card-body card">

      A proposal for {{$allData->company_name}}

      <h3>Web Design</h3>
      {!! $allData->scope_intro !!}
      <h3>Methodology</h3>
      {!! $allData->scope_methodology !!}
      {!! $allData->getting_signature !!}




    </div>
  </div>
</div>
</body>
</html>


