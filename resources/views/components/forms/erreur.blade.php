@props(['champ'])

@error($champ)
    <p class="tx-sm form-msg-erreur">{{ $message }}</p>
@enderror
