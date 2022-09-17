<div class="form-floating mb-3 mt-2 bg-light p-4">
  <div class="row">
    <h3 class="mb-4">Global Proposal Options:</h3>
    @foreach($services as $data)
    <div class="col-md-4">
      <div class="form-check mb-2">
        <input type="checkbox" class="form-check-input" name="services[]" value="{{$data->name}}" id="customCheck{{$data->id}}">
        <label for="customCheck{{$data->id}}">{{$data->name}}</label><br>
      </div>
    </div>
    @endforeach
  </div>
</div>