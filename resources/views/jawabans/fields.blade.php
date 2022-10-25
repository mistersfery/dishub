<!-- Idkuisioner Field -->

    <input type="hidden" name="idkuisioner" value="{{ $kuisioner->id }}">


<!-- Pilihan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pilihan', 'Pilihan:') !!}
    {!! Form::text('pilihan', null, ['class' => 'form-control']) !!}
</div>

<!-- Jawaban Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jawaban', 'Jawaban:') !!}
    {!! Form::text('jawaban', null, ['class' => 'form-control']) !!}
</div>

<!-- Poin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('poin', 'Poin:') !!}
    {!! Form::text('poin', null, ['class' => 'form-control']) !!}
</div>