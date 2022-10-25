<div class="table-responsive">
    <table class="table" id="kuisioners-table">
        <thead>
        <tr>
            <th>Id</th>
        <th>Pertanyaan</th>
        <th>Topik</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($kuisioners as $kuisioner)
            <tr>
                <td>{{ $kuisioner->id }}</td>
            <td>{{ $kuisioner->pertanyaan }}</td>
            <td>{{ $kuisioner->topik }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['kuisioners.destroy', $kuisioner->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('kuisioners.show', [$kuisioner->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('kuisioners.edit', [$kuisioner->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
