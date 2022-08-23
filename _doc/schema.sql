drop table if exists respostas;
drop table if exists periodos;
drop table if exists turmas;
drop table if exists cursos;

create table cursos(
    id int not null auto_increment,
    nome varchar (100) not null,
    nome_reduzido varchar (10) not null,
    primary key(id)
);

create table turmas(
    id int not null auto_increment,
    nome varchar (100) not null,
    curso_id int not null,
    primary key (id),
    foreign key (curso_id) references cursos(id)
);

create table periodos(
    id int not null auto_increment,
    ano int not null,
    dt_inicio date not null,
    dt_fim date not null,
    primary key(id)

);

create table respostas(
    id int not null auto_increment,
    nome_aluno varchar(100) not null,
    cpf char (11) not null,
    turma_id int not null,
    periodo_id int not null,
    cidade varchar (100) not null,
    cidade_id int not null,
    transporte enum ('onibus','micro-onibus','van'),
    poder_publico_responsavel enum ('prefeitura','estado'),
    diferenca_paga float not null default 0,
    primary key (id),
    foreign key(turma_id) references turmas (id),
    foreign key (periodo_id) references periodos (id)
);
