<x-app>
<div class="row">
    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
  {{session('success')}}
</div>
    @endif
    <div class="col-12">
    <form method="POST" action="{{route('send.ticket')}}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label class="form-label">Nome e cognome</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
    <label>Descrivi il tuo problema</label>
    <textarea class="form-control" rows="3" name="description"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Invia</button>
</form>
    </div>
</div>
</x-app>