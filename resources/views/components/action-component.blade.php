<div class="dropdown dropend">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown"
        aria-expanded="false">
        Action
    </button>
    <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end" aria-labelledby="dropdownMenuButton2">
        <li><a class="dropdown-item" href="{{ route('kandidat.edit', $row->id) }}"> <span><i
                        data-feather="edit"></i></span>
                Edit</a></li>
        <form action="{{ route('kandidat.destroy', $row) }}" method="POST">
            @csrf
            <li>
                <button type="submit" onclick="return confirm('apakah kamu yakin menghapus ini ?')"
                    class="dropdown-item text-danger"><span><i data-feather="delete"></i></span>
                    Hapus</button>
            </li>
        </form>
    </ul>
</div>
