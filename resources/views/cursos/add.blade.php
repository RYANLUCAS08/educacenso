<form id="formulario" action="/cursos/store" method="post">     
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="text" name= "nome">    
    <input type="text" name= "nome_reduzido"> 
    <input type="submit" value="enviar">
</form>

<!-- //(periodo_id, id, nome_aluno, turma_id, cpf, cidade, cidade_id, uf, uf_id, transporte, poder_publico_responsavel, diferenca_paga). 
Deve carregar os cursos de maneira assíncrona com JavaScript;
Deve carregar as turmas de maneira assíncrona baseado no curso escolhido;
Para definir a cidade precisa, primeiro, definir o estado. Deve utilizar uma busca assíncrona na API do IBGE; Guarde tanto o nome da cidade quanto o id do ibge;
Deve utilizar um SELECT com os tipos pré-definidos de transportes (Ônibus, Micro-ônibus, Van);
Deve utilizar um RADIO para definir o poder público responsável (Prefeitura ou Estado);
Deve questionar se o aluno para alguma diferença, em caso afirmativo, mostrar um campo solicitando o valor;
O formulário para receber respostas só pode ser mostrado durante o período definido na tabela formulários;
Também precisa garantir que o formulário não receba novos envios (barrar no endpoint /store)
                        -->
                        <!-- // Períodos (id, ano, dt_inicio, dt_fim); -->