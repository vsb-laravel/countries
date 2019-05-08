<select name="{{ $name ?? 'country'}}">
    @foreach ($countries as $key => $value)
        <option value="{{$key}}"> {{$value}} </option>
    @endforeach
</select>
