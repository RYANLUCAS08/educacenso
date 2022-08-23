INSERT INTO cursos(nome,nome_reduzido) values
('Curso Técnico em Informática para Internet', 'TECINFO'),
('Curso Técnico em Administração', 'TECADM'),
('Curso Técnico em Meio Ambiente', 'TECMEIO'),
('Curso Técnico em Viticultura e Enologia', 'VITENO'),
('Curso Técnico em Agropecuária', 'TECAGRO');

INSERT INTO turmas(curso_id,nome) values
(1, '1º INFO'),
(1, '2º INFO'),
(1, '3º INFO'),
(2, '1º ADMIN'),
(2, '2º ADMIN'),
(2, '3º ADMIN'),
(3, '1º MEIO'),
(3, '2º MEIO'),
(3, '3º MEIO'),
(4, '1º VITENO'),
(4, '2º VITENO'),
(4, '3º VITENO'),
(5, '1º AGRO A'),
(5, '1º AGRO B'),
(5, '2º AGRO A'),
(5, '2º AGRO B'),
(5, '3º AGRO A'),
(5, '3º AGRO B');

INSERT INTO periodos(ano, dt_inicio, dt_fim) values
(2022, '2022-07-23', '2022-08-01');