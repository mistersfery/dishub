
<!-- Pertanyaan Field -->
<div class="col-sm-12">
    {!! Form::label('pertanyaan', 'Pertanyaan:') !!}
    <p>{{ $kuisioner->pertanyaan }}</p>
</div>

<!-- Topik Field -->
<div class="col-sm-12">
    {!! Form::label('topik', 'Topik:') !!}
    <p>{{ $kuisioner->topik }}</p>
</div>
<div class="content px-3">

    @include('adminlte-templates::common.errors')

    <div class="card">

        {!! Form::open(['route' => 'jawabans.store']) !!}

        <div class="card-body">

            <div class="row">
                @include('jawabans.fields')
            </div>

        </div>

        <div class="card-footer">
            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            <a href="{{ route('jawabans.index') }}" class="btn btn-default">Cancel</a>
        </div>

        {!! Form::close() !!}

    </div>
</div>
<div class="content px-6">

    @include('flash::message')

    <div class="clearfix"></div>

    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table" id="jawabans-table">
                    <thead>
                    <tr>
                        <th>Id</th>
                    
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
                       
                        <td>{{ $jawaban->pilihan }}</td>
                        <td>{{ $jawaban->jawaban }}</td>
                        <td>{{ $jawaban->poin }}</td>
                            <td width="120">
                                {!! Form::open(['route' => ['jawabans.destroy', $jawaban->id], 'method' => 'delete']) !!}
                                <div class='btn-group'>
                                   <!-- Pertanyaan Field 
                                    <a href="{{ route('jawabans.edit', [$jawaban->id]) }}"
                                       class='btn btn-default btn-xs'>
                                        <i class="far fa-edit"></i>
                                    </a>-->
                                    {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                </div>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer clearfix">
                <div class="float-right">
                    @include('adminlte-templates::common.paginate', ['records' => $jawabans])
                </div>
            </div>
        </div>

    </div>
</div>

