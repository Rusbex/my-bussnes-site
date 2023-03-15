<h1>Все обращения</h1>
@php
    $contact = new \App\Models\contact()
@endphp

{{$contact = DB::table('contacts')->select('name', 'email')->get()}}

{{--{{$data = $contact->orderBy('id', 'asc')->take(1)->get()}}--}}

<h2>Список с сортировкой по полю ID</h2>
<div>
    @foreach ($contact as $el)
        <div class="aler alert-info">
            <p>{{ $el->created_at }} | {{ $el->name }} | {{ $el->email }}<br>
            {{ $el->message }}<hr></p>
        </div>
    @endforeach
</div>


