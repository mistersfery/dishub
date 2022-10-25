<div class="table-responsive">
    <table class="table" id="jawabans-table">
        <thead>
        <tr>
            <th>Id</th>
        <th>Idkuisioner</th>
        <th>Pilihan</th>
        <th>Jawaban</th>
        <th>Poin</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($jawabans as $jawaban)
            <tr>
                <td>{{ $jawaban->id }}</td>
            <td>{{ $jawaban->idkuisioner }}</td>
            <td>{{ $jawaban->pilihan }}</td>
            <td>{{ $jawaban->jawaban }}</td>
            <td>{{ $jawaban->poin }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['jawabans.destroy', $jawaban->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('jawabans.show', [$jawaban->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('jawabans.edit', [$jawaban->id]) }}"
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
