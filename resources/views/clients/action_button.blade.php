<a href="{{ route('clients.show',$id) }}" data-toggle="tooltip"  data-id="{{ $id }}" data-original-title="Mostra" class="edit btn btn-info edit-user">
    <i class="fas fa-eye"></i>
</a>
<a href="{{ route('clients.edit',$id) }}" data-toggle="tooltip"  data-id="{{ $id }}" data-original-title="Edita" class="edit btn btn-success edit-user">
<i class="fas fa-edit"></i>
</a>
<form action="{{ route('clients.destroy', $id)}}" method="post">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
</form>
