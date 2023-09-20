@props(['cle'])

@if (session($cle))
    <div class="">
        <div @class([
            '',
            '' => $cle == 'succes',
            '' => $cle == 'echec',
        ])>
            <p @class([''])>
                {{ session($cle) }}
            </p>
        </div>
    </div>
@endif
