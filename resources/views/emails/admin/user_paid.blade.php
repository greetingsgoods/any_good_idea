@if ($user)
    Пользователь {{ $user->name }} ({{ $user->id }})<br><br>
    Оплатил на сумму {{ $sum }}, что дало ему в днях - {{ $days }}
@else
    Неизвестный прислал {{ $sum }}
@endif