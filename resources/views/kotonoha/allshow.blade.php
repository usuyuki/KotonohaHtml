@extends('layouts.kotonohaapp')
<blade
    section|(%26%2339%3Btitle%26%2339%3B%2C%26%2339%3B%E8%A8%80%E3%81%AE%E8%91%89%E9%83%B5%E4%BE%BF%E5%B1%80%26%2339%3B)%0D />
@section('menubar')
@parent
@endsection


@section('content')
<style>
    .pagination {
        font-size: 10pt;
    }

    .pagination li {
        display: inline-block
    }

</style>

<table>
    <tr>
        <th>宛名</th>
        <th>差出人</th>
        <th>本文</th>
        <th>scent</th>
        <th>flower</th>
        <th>sheet</th>
        <th>fold</th>
        <th>uuid</th>
    </tr>
    @foreach($mails as $mail)
        <tr>
            <td>{{ $mail->for }}</td>
            <td>{{ $mail->from }}</td>
            <td>{{ $mail->text }}</td>
            <td>{{ $mail->scent_id }}</td>
            <td>{{ $mail->flower_id }}</td>
            <td>{{ $mail->sheet_id }}</td>
            <td>{{ $mail->fold_id }}</td>
            <td>{{ $mail->uuid }}</td>
        </tr>
    @endforeach
</table>
{{ $mails->links() }}
@endsection


@section('footer')
@parent
@endsection
