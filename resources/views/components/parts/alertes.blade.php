@props(['cle'])

@if (session($cle))
    <div class="conteneur-alerte">
        <div @class(['alerte', 'succes' => $cle == 'succes', 'echec' => $cle == 'echec'])>
            <p @class(['texte-alerte tx-sm'])>
                {{ session($cle) }}
            </p>
        </div>
    </div>
@endif
