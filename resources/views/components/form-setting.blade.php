@props(['url', 'method', 'id'])

<form method="POST" action="{{ $url }}">
    @csrf
    @method($method)
    <button type="submit" 
            {{ $attributes->merge(['class' => 'text-xs']) }}
            >Publish
    </button>
</form>