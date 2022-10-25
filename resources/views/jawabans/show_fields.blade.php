<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $jawaban->id }}</p>
</div>

<!-- Idkuisioner Field -->
<div class="col-sm-12">
    {!! Form::label('idkuisioner', 'Idkuisioner:') !!}
    <p>{{ $jawaban->idkuisioner }}</p>
</div>

<!-- Pilihan Field -->
<div class="col-sm-12">
    {!! Form::label('pilihan', 'Pilihan:') !!}
    <p>{{ $jawaban->pilihan }}</p>
</div>

<!-- Jawaban Field -->
<div class="col-sm-12">
    {!! Form::label('jawaban', 'Jawaban:') !!}
    <p>{{ $jawaban->jawaban }}</p>
</div>

<!-- Poin Field -->
<div class="col-sm-12">
    {!! Form::label('poin', 'Poin:') !!}
    <p>{{ $jawaban->poin }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $jawaban->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $jawaban->updated_at }}</p>
</div>

