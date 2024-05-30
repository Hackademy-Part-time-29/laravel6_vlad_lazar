<div>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{{$card['image']}}" alt="Card image cap">
  <div class="card-body">
    <h4>{{$card['name']}} {{$card['surname']}}</h4>
    <h5>{{$card['email']}}</h5>
    <p>{{$card['role']}}</p>
    <a href="{{route('member',$card['id'])}}" class="btn btn-outline-primary">Curriculum</a>
  </div>
</div>
</div>