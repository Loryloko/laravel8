 <div class="card aboutC" style="width: 18rem;">
          <div class="card-body">
          <h5 class="card-title">{{$user['name']." ".$user['surname']}}</h5>
          <h6 class="card-subtitle mb-2">{{$user['role']}}</h6>
          <a href="{{route('aboutUsDetail',['name' => $user['name']])}}" class="card-link">Di più</a>
          </div>
        </div>