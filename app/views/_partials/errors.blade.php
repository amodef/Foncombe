@if ($errors->any())
  <div class="alert alert-block">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <h4>There was an error!</h4>
    <ul>
      {{ implode('', $errors->all('<li>:message</li>')) }}
    </ul>
  </div>
@endif