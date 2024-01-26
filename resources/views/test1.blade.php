내용작성

<p>{{ $name }}</p>
<div>지금은 {{ now() }} 입니다.</div>

@for ($i = 0; $i < 10; $i++)
    숫자가 증가합니다. {{ $i }}<br>
@endfor

@includeIf('sub/inc')

@php
$a = 10;
$a++;

echo 'a 의 값은 ?' . $a . '입니다.';
@endphp

{{-- 이것은 주석입니다. --}}