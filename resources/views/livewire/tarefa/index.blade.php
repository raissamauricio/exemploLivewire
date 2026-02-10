<div class="mt-5">
    @if(session()->has('success'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
         </div> 
    @endif

    <div class="card">
        <div class="card-boy">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>nome</th>
                        <th>data_hora</th>
                        <th>ações</th>
                    </tr>

                    <tbody>
                        @foreach($tarefas as $t)
                        <tr>
                            <td>{{ $t->id }}</td>
                            <td>{{ $t->nome}}</td>
                            <td>{{ \Carbon\Carbon::parse($t->data_hora)->format('d/m/y H:i')}}</td>
                            <td>
                                <a href="{{ route('tarefa.editar', ['id'=> $t->id])}}"
                                    class="btn btn-primary btn-sm">editar</a>

                                <button class="btn btn-danger btn-sm"
                                wire:confirm="deseja excluir a tarefa?">excluir</button>    
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </thead>
            </table>
        </div>
    </div>
</div>
