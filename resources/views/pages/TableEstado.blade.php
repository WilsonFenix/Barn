{{$mensagem}}
<ul class="list-group">
    @foreach ($listaEstado as $estado )
        <li class="list-group-item">
            {{ $estado->estado_nome }}
            <form action="/Estado/remove/{{$estado->estado_id}}" method="post" onsubmit="return confirm('tem ceteza que deseja excluir??')">
                @csrf
                <button type="submit" class="btn btndanger">Deletar</button>
            </form>
        </li>
    @endforeach
</ul>