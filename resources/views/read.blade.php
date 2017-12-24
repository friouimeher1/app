
      <div class="table-responsive">
        <table class="table table-bordered table-striped">
          <caption>All User</caption>
          <th>#</th>
          <th>Nom</th>
          <th>Prenom</th>
          <th>password</th>
          <th>Action</th>
          <tbody>
            @foreach($user as $u=>$i)
            <tr class="id{{$i->id}}">
            <td>{{$i->id}}</td>
            <td>{{$i->nom}}</td>
            <td>{{$i->prenom}}</td>
            <td>{{$i->password}}</td>
            <td>

              <button type="button" value="{{$i->id}}" class="btn btn-warning btn-update" name="button">Editer</button>


              <button type="button" value="{{$i->id}}" class="btn btn-danger btn-dell" name="button">Supprimer</button>

            </td>
            </tr>
            @endforeach

          </tbody>
        </table>
        {{ $user->links() }}
      </div>
    </div>
